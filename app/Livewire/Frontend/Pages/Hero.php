<?php

namespace App\Livewire\Frontend\Pages;

use Livewire\Component;

class Hero extends Component
{
    public $headline = 'Keamanan Terdepan untuk Properti Anda';
    public $tagline = 'Solusi CCTV & Pagar Otomatis Modern dari Dhefaka System';

    // Metode bisa didefinisikan di sini
    public function learnMore()
    {
        return redirect()->to('/produk');
    }

    public function render()
    {
        return view('livewire.frontend.pages.hero');
    }
}
