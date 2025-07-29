<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Product Page - Defaka')]
class ProductsPage extends Component
{
    use WithPagination;
    use LivewireAlert;

    #[Url()]
    public array $selected_categories = [];

    #[Url(as: 'selected_brands', history: true)]
    public array $selected_brands = [];

    #[Url(as: 'featured', history: true)]
    public $featured = null;
    
    #[Url(as: 'on_sale', history: true)]
    public $on_sale = null;

    #[Url(as: 'price_range', history: true)]
    public int $price_range = 300000;

    #[Url(as: 'sort', history: true)]
    public string $sort = 'latest';

    public function mount()
    {
        $this->selected_categories = request()->input('category', []);
        $this->selected_brands = request()->input('brands', []);
    }

    public function updatedSort()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Product::query()->where('is_active', 1);

        $categories = is_array($this->selected_categories) ? array_filter($this->selected_categories, fn($id) => is_numeric($id) && $id > 0) : [];
        if (!empty($categories)) {
            $query->whereIn('category_id', $categories);
        }   

        $brands = is_array($this->selected_brands) ? array_filter($this->selected_brands, fn($id) => is_numeric($id) && $id > 0) : [];
        if (!empty($brands)) {
            $query->whereIn('brand_id', $brands);
        }

        // // 🟡 Featured
        // if (filter_var($this->featured, FILTER_VALIDATE_BOOLEAN)) {
        //     $query->where('is_featured', 1);
        // }

        // // 🟡 On Sale
        // if (filter_var($this->on_sale, FILTER_VALIDATE_BOOLEAN)) {
        //     $query->where('on_sale', 1);
        // }

        // // 🟡 Price
        // if (is_numeric($this->price_range) && $this->price_range > 0) {
        //     $query->whereBetween('price', [0, $this->price_range]);
        // }
        if ($this->sort === 'latest') {
            $query->latest(); 
        } elseif ($this->sort === 'price_asc') {
            $query->orderBy('price', 'asc');
        } elseif ($this->sort === 'price_desc') {
            $query->orderBy('price', 'desc');
        }


        return view('livewire.products-page', [
            'products' => $query->paginate(6),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }

    #[On('addToCart')]
    public function addToCart($product_id)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        
        $total_count = CartManagement::addItemToCartWithQty($product_id);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

        $this->alert('success', 'Product added to cart successfully!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
