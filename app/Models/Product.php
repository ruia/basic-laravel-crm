<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref',
        'name',
        'bar_code',
        'price_without_vat',
        'vat_id',
    ];
    
    public function vat()
    {
        return $this->belongsTo(Vat::class);
    }

    public function getPriceWithVat()
    {
        return $this->price_without_vat * ($this->vat->tax_percent / 100 + 1);
    }
}
