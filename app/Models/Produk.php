<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function categories() {
        return $this->belongsTo(Categories::class, 'id_categories', 'id');
    }
}
