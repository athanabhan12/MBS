<?php

namespace App\Models;

use App\Models\Tipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    public function tipes() {
        return $this->belongsTo(Tipe::class, 'id_tipes', 'id');
    }
}
