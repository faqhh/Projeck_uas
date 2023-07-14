<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelanggan;
use App\Models\Pesanan;

class PelangganController extends Controller
{
    public function pelanggan()
    {
        $pelanggan = new Pelanggan();
        return view('admin.pelanggan.pelanggan', ['pelanggan' =>$pelanggan->getAllData()]);
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $pesanan = Pesanan::all();
        return view('admin.pelanggan.create', compact('pelanggan','pesanan'));
    }

    public function store(Request $request)
    {
        $pelanggan = new Pelanggan();
        $pelanggan->nama = $request->nama;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->email = $request->email;
        $pelanggan->pesanan_id = $request->pesanan_id;
        $pelanggan->save();
        return redirect('admin/pelanggan')->with('success', 'Wihh Ada Produk Baruu Yaa?? MANTAPP!!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $pelanggan = DB::table('pelanggan') ->get();
        $pesanan = DB::table('pesanan') ->where('id', $id) ->get();
        return view('admin.pelanggan.edit', compact('pesanan','pelanggan'));
    }

    public function update(Request $request)
    {
        $pelanggan = Pelanggan::find($request->id);
        $pelanggan->nama = $request->nama;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->email = $request->email;
        $pelanggan->pesanan_id = $request->pesanan_id;
        $pelanggan->save();
        return redirect('admin/pelanggan')->with('success', 'Baru Di Update?? cihh..');
    }

    public function destroy(string $id)
    {
        DB::table('pelanggan')->where('id',$id)->delete();
        return redirect('admin/pelanggan')->with('success', 'Yahh Dihapus,Nanti Jangan Nyesel Ya!!');
    }
}
