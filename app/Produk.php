<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Produk extends Model 

{
    protected $table = 'produk';
    protected $fillable = [
        'id_produk'
    ];
    protected $hidden = [
        'id_produk',
    ];

}