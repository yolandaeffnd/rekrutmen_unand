<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_formasi'
    ];

    public function formasi()
    {
        return $this->belongsTo(Formasi::class, 'id_formasi');
    }

    public function biodata()
    {
        return $this->hasOne(Biodata::class, 'id_registrasi');
    }
}
