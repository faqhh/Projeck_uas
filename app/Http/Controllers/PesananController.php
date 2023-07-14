<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function pesanan()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' =>$pesanan->getAllData()]);
    }

    public function create()
    {
        $produk = Produk::all();
        $pesanan = Pesanan::all();
        return view('admin.pesanan.create', compact('pesanan','produk'));
    }

    public function store(Request $request)
    {
        $pesanan = new Pesanan();
        $pesanan->tanggal = $request->tanggal;
        $pesanan->total = $request->total;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan')->with('success', 'Wihh Ada Produk Baruu Yaa?? MANTAPP!!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $produk = DB::table('produk') ->get();
        $pesanan = DB::table('pesanan') ->where('id', $id) ->get();
        return view('admin.pesanan.edit', compact('pesanan','produk'));
    }

    public function update(Request $request, string $id)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->tanggal = $request->tanggal;
        $pesanan->total = $request->total;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan')->with('success', 'Baru Di Update?? cihh..');
    }

    public function destroy(string $id)
    {
        DB::table('pesanan')->where('id',$id)->delete();
        return redirect('admin/pesanan')->with('success', 'Yahh Dihapus,Nanti Jangan Nyesel Ya!!');
    }
}
