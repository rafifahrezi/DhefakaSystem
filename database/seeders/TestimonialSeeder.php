<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Budi Santoso',
            'role' => 'Pemilik Rumah',
            'image' => '/images/budi.jpg',
            'content' => 'Sistem CCTV dan pagar otomatis dari SecureHome sangat membantu keamanan rumah saya. Kualitas gambar jernih dan instalasi profesional!',
        ]);

        Testimonial::create([
            'name' => 'Sinta Lestari',
            'role' => 'Pengusaha',
            'image' => '/images/sinta.jpg',
            'content' => 'Pelayanan excellent! Tim teknisi sangat berpengalaman dan after-sales service yang memuaskan. Highly recommended.',
        ]);

        Testimonial::create([
            'name' => 'Ahmad Rahman',
            'role' => 'Kepala Keluarga',
            'image' => '/images/sinta.jpg',
            'content' => 'Investasi terbaik untuk keamanan keluarga. Pagar otomatis bekerja sempurna dan CCTV bisa dimonitor dari mana saja.',
        ]);
    }
}
