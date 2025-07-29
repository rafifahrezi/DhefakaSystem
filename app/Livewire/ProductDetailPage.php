<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Address;
use App\Mail\OrderPlaced;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

use Jantinnerezo\LivewireAlert\LivewireAlert;
#[Title('Product Detail - Defaka')]

class ProductDetailPage extends Component
{
    use LivewireAlert;

    public $slug;
    public $quantity = 1;
    public Product $product;

    public function mount($slug) {
        $this->product = Product::where('slug', $slug)->firstOrFail();
    }
    public function increaseQty() {
        $this->quantity++;
    }
    public function decreaseQty() {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    #[On('addToCart')]
    public function addToCart()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $total_count = CartManagement::addItemToCartWithQty($this->product->id, $this->quantity);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

        $this->alert('success', 'Product added to cart successfully!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function goToCheckout($productId)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        CartManagement::clearCartItems();

        CartManagement::addItemToCartWithQty($productId, $this->quantity);

        return redirect()->to('/checkout');
    }

    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => Product::where('slug', $this->slug)->firstOrFail(),
        ]);
    }
}
