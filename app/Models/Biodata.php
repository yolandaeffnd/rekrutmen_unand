<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'registrasi_biodatas';
    protected $fillable = [
        'id_user',
        'id_registrasi',
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'idprovinsi');
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'idkota');
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'idprodi');
    }
}
