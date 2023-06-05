<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_makanan extends Model
{
    // use HasFactory;
    protected $table='tb_makanan';
    protected $guarded=[];
    protected $primaryKey = 'id_makanan';
    protected $keyType = 'string';

    
}