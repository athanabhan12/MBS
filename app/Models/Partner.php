<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jenis;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'partners';

    public function jenis() {
        return $this->belongsTo(Jenis::class, 'id_partner', 'id');
    }
}
