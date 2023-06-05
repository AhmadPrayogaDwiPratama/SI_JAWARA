<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pesanancafe extends Model
{
    // use HasFactory;
    protected $table='tb_pesanancafe';
    protected $guarded=[];
    protected $primaryKey = 'id_pesanancafe';
    protected $keyType = 'string';

    
}