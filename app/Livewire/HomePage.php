<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Paket;
use App\Models\Testimonial;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Page - Defaka')]
class HomePage extends Component
{
    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $categories = Category::where('is_active', 1)->get();
        $testimonials = Testimonial::latest()->take(10)->get();
        $paket = Paket::with('features')->first(); // atau find(id)

        return view('livewire.home-page', [
            'brands' => $brands,
            'categories' => $categories,
            'testimonials' => $testimonials,
            'paket' => $paket,    
        ]);
    }
}
