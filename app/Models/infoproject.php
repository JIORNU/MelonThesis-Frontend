<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoproject extends Model
{
    use HasFactory;
    protected $table ='infoproject';
    protected $fillable = [
        'idproject',
        'leafwidth',
        'heighttree',
        'numberofverses',
        'chlorophyll',
        'numberofleaf',
        'widthofyield',
        'created_at',
        'updated_at',
        'Brix',
        'weight'
        
        
    ];
}
