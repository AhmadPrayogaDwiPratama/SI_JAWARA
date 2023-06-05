<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pesananrestoran extends Model
{
    // use HasFactory;
    protected $table='tb_pesananrestoran';
    protected $guarded=[];
    protected $primaryKey = 'id_pesananrestoran';
    protected $keyType = 'string';

    
}