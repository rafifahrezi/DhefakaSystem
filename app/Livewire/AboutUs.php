<?php

namespace App\Livewire;

use Livewire\Component;

class AboutUs extends Component
{
    public $title = 'Tentang Kami';
    public $description = 'Perkembangan teknologi mendorong berbagai instansi maupun individu untuk pemanfaatan Sistem Otomatisasi guna meningkatkan efisiensi dan efektivitas pekerjaan. Salah satu teknologi yang berkembang pesat adalah sistem berbasis web yang memudahkan pengguna dalam mengakses dan memfasilitasi penjualan, di antaranya informasi harga, opsi kustomisasi, dan proses pemesanan.

Namun, banyak calon pelanggan produk seperti pagar, sliding door, dan CCTV mengalami kesulitan memahami fitur, manfaat, dan proses pemesanan karena keterbatasan akses terhadap informasi yang terintegrasi dan mudah digunakan.

Oleh karena itu, kami hadir dengan sistem berbasis web yang dapat mengedukasi pelanggan dengan menyediakan informasi lengkap tentang harga, opsi kustomisasi, dan proses pemesanan. Kami berkomitmen untuk meningkatkan efisiensi penjualan dan kepuasan pelanggan melalui solusi digital yang inovatif.';

    public function render()
    {
        return view('livewire.about-us');
    }
}
