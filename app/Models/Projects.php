<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table ='projects';

    protected $fillable = [
        'id',
        'projectname',
        'species',
        'plot',
        'colum',
        'treenumber',
        'created_at',
        'updated_at',
        'dateproject',
        'status',
        'qrimg'
    ];

}