<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_penilaianrestoran extends Model
{
    // use HasFactory;
    protected $table='tb_penilaianrestoran';
    protected $guarded=[];
    protected $primaryKey = 'id_penilaianrestoran';
    protected $keyType = 'string';

    
}