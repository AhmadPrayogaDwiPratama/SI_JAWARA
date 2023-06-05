<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kriteriarestoran extends Model
{
    // use HasFactory;
    protected $table='tb_kriteriarestoran';
    protected $guarded=[];
    protected $primaryKey = 'id_KriteriaRestoran';
    protected $keyType = 'string';

    
}