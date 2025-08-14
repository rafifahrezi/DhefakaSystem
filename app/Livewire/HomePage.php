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
        $pakets = Paket::with('features')->get()->sortBy(function ($paket) {
            // Order: Standard (1), Premium (2, middle), Deluxe (3)
            $order = ['standard' => 1, 'premium' => 2, 'deluxe' => 3];
            return $order[$paket->slug] ?? 999;
        });

        return view('livewire.home-page', [
            'brands' => $brands,
            'categories' => $categories,
            'testimonials' => $testimonials,
            'pakets' => $pakets,
        ]);
    }
}
