<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [

        'tanggal',
        'total',
        'produk_id',
    ];
    public function produk(){
        return $this->belongsTo(Produk::class);
    }

    public function getAllData(){
        $alldata = DB::table('pesanan')
        ->join('produk','pesanan.produk_id','=','produk.id')
        ->select('pesanan.*','produk.judul as judul_produk')
        ->get();
        return $alldata;
    }
}
