<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_karyawan extends Model
{
    // use HasFactory;
    protected $table='tb_karyawan';
    protected $guarded=[];
    protected $primaryKey = 'id_karyawan';
    protected $keyType = 'string';

    
}