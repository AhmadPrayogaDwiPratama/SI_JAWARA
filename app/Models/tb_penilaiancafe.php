<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_penilaiancafe extends Model
{
    // use HasFactory;
    protected $table='tb_penilaiancafe';
    protected $guarded=[];
    protected $primaryKey = 'id_penilaiancafe';
    protected $keyType = 'string';

    
}