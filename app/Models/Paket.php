<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = ['name', 'slug', 'price', 'description', 'image'];

    public function features()
    {
        return $this->hasMany(PaketFeature::class);
    }
}
