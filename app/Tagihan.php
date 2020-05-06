<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Tagihan extends Model 
{
    protected $table = 'tagihan';

    public function dataTagihan($id){
        return $this->join('detail_produk', 'tagihan.id_detail', '=', 'detail_produk.id_detail')
        ->join('users', 'users.id', '=', 'tagihan.id_user')
        ->join('produk', 'detail_produk.id_produk', '=', 'produk.id_produk')
        ->select('*')->where('tagihan.id_user', '=', $id)->get();
    }

    protected $fillable = [
        'id_tagihan'
    ];


}