<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formasi extends Model
{
    use HasFactory;

    public function units()
    {
        return $this->belongsTo(Unit::class, 'id_unit');
    }

    public function formasi_pendidikans()
    {
        return $this->belongsToMany(Pendidikan::class, 'formasi_has_pendidikans', 'id_formasi', 'id_pendidikan');
    }
}
