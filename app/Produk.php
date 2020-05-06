<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Produk extends Model 

{
    protected $table = 'detail_produk';
    
    public function dataListProduk(){
        return $this->join('produk', 'detail_produk.id_produk', '=', 'produk.id_produk')
        ->select('*')->get();
    }
    protected $fillable = [
        'id_detail'
    ];


}