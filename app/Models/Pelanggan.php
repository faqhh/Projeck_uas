<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'email',
        'pesanan_id',
    ];

    public function pesanan(){
        return $this->belongsTo(Pesanan::class);
    }

    public function getAllData(){
        $alldata = DB::table('pelanggan')
        ->join('pesanan','pelanggan.pesanan_id','=','pesanan.id')
        ->select('pelanggan.*','pesanan.total as total_pesanan')
        ->get();
        return $alldata;
    }
}
