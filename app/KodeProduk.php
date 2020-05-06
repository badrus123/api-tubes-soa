<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class KodeProduk extends Model 

{
    protected $table = 'kode_produk';

    public function dataKode($id,$kode){
        return $this->join('detail_produk', 'kode_produk.id_detail', '=', 'detail_produk.id_detail')
        ->join('produk', 'detail_produk.id_produk', '=', 'produk.id_produk')
        ->select('*')->where('kode_produk.id_kode', '=', $id)
        ->where('kode_produk.kode_produk', '=', $kode)->get();
    }
    public function searchKode($id,$kode){
        return $this->where('kode_produk.id_kode', '=', $id)->where('kode_produk.kode_produk', '=', $kode)->first();
    }
    protected $fillable = [
        'id_kode'
    ];


}