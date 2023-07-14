<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'judul',
        'penulis',
        'image',
        'harga_beli',
        'harga_jual',
        'stok',
        'min_stok',
        'kategori_produk_id',
        'sinopsis',
    ];

    public function kategori_produk(){
        return $this->belongsTo(KategoriProduk::class);
    }

    public function getAllData()
    {
        $alldata = DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.genre as genre')
        ->get();
        return $alldata;
    }

}
