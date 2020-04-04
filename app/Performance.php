<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Performance extends Model 
{
    protected $table = 'performance';
    protected $fillable = [
        'id_rata'
    ];
    protected $hidden = [
        'id_rata',
    ];

}