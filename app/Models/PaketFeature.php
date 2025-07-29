<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketFeature extends Model
{
    protected $fillable = ['paket_id', 'content'];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
