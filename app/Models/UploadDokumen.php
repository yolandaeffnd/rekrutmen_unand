<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadDokumen extends Model
{
    use HasFactory;

    protected $table = 'registrasi_uploads';

    protected $fillable = [
        'id_user',
        'id_registrasi'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
