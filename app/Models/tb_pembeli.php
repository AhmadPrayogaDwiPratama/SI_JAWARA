<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pembeli extends Model
{
    // use HasFactory;
    protected $table='tb_pembeli';
    protected $guarded=[];
    protected $primaryKey = 'id_pembeli';
    protected $keyType = 'string';

    
}