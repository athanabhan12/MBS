<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partner;

class Jenis extends Model
{
    use HasFactory;

    protected $table = 'jenis';

    public function partners() {
        return $this->hasMany(Partner::class);
    }
}
