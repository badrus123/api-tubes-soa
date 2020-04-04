<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class DataOlah extends Model 

{
    protected $table = 'olahan_adi';
    protected $fillable = [
        'id_olahan_adi'
    ];
    protected $hidden = [
        'id_olahan_adi',
    ];

}