<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politik extends Model
{
    protected $table = "politik";
    protected $primaryKey = "id_caleg";
    protected $fillable = ['id_caleg','nama_caleg', 'nama_partai', 'jumlah_suara'];
}
