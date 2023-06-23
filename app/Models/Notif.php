<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;

    public function formasi()
    {
        return $this->belongsTo(Formasi::class, 'id_formasi');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
