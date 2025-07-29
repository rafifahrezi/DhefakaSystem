<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;

class TestimonialSection extends Component
{
    public $testimonials = [];

    public function mount()
    {
        $this->testimonials = Testimonial::latest()->take(10)->get();
    }
    public function render()
    {
        return view('livewire.testimonial-section');
    }
}
