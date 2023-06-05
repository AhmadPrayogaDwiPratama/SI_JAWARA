<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kriteriacafe extends Model
{
    // use HasFactory;
    protected $table='tb_kriteriacafe';
    protected $guarded=[];
    protected $primaryKey = 'id_KriteriaCafe';
    protected $keyType = 'string';

    
}