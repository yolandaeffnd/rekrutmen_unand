<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DumpStatus extends Model {
   use HasFactory;
   protected $table = 'dump_status';
   protected $primaryKey = "id";
   protected $fillable = ['id_user','status','jabatan'];
   public $timestamps = false;
}