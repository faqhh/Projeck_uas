<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pembelian;
use App\Models\Produk;

class PembelianController extends Controller
{
    public function pembelian()
    {
        $pembelian = new Pembelian();
        return view('admin.pembelian.pembelian', ['pembelian' =>$pembelian->getAllData()]);
    }

    public function create()
    {
        $produk = Produk::all();
        $pembelian = Pembelian::all();
        return view('admin.pembelian.create', compact('produk','pembelian'));
    }

    public function store(Request $request)
    {
        $pembelian = new Pembelian();
        $pembelian->tanggal = $request->tanggal;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->harga = $request->harga;
        $pembelian->produk_id = $request->produk_id;
        $pembelian->save();
        return redirect('admin/pembelian')->with('success', 'Wihh Ada Produk Baruu Yaa?? MANTAPP!!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $produk = DB::table('produk') ->get();
        $pembelian = DB::table('pembelian') ->where('id', $id) ->get();
        return view('admin.pembelian.edit', compact('pembelian','produk'));
    }

    public function update(Request $request)
    {
        $pembelian = Pembelian::find($request->id);
        $pembelian->tanggal = $request->tanggal;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->harga = $request->harga;
        $pembelian->produk_id = $request->produk_id;
        $pembelian->save();
        return redirect('admin/pembelian')->with('success', 'Yahh Dihapus,Nanti Jangan Nyesel Ya!!');
    }

    public function destroy(string $id)
    {
        DB::table('pembelian')->where('id',$id)->delete();
        return redirect('admin/pembelian')->with('success', 'Data berhasil di hapus');
    }
}
