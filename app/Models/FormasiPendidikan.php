<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormasiPendidikan extends Model
{
    use HasFactory;
    protected $table = "formasi_has_pendidikans";

    
    public function formasis()
    {
        return $this->belongsTo(Formasi::class, 'id_formasi');
    }

    public function pendidikans()
    {
        return $this->belongsTo(Pendidikan::class, 'id_pendidikan');
    }

}
