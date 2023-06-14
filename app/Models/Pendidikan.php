<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    public function pendidikan_formasis()
    {
        return $this->belongsToMany(Formasi::class, 'formasi_has_pendidikans', 'id_pendidikan', 'id_formasi');
    }
}
