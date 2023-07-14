<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'tanggal',
        'jumlah',
        'harga',
        'produk_id',
    ];

    public function produk(){
        return $this->belongsTo(Produk::class);
    }

    public function getAllData(){
        $alldata = DB::table('Pembelian')
        ->join('produk','pembelian.produk_id','=','produk.id')
        ->select('pembelian.*','produk.judul as judul_produk')
        ->get();
        return $alldata;
    }
}
