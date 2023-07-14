<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function kategori()
    {
        $kategori_produk = new KategoriProduk();
        return view('admin.kategori.kategori', ['kategori_produk' =>$kategori_produk->getAllData()]);
    }

    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        return view('admin.kategori.create', compact('kategori_produk'));
    }

    public function store(Request $request)
    {
        $kategori_produk = new KategoriProduk();
        $kategori_produk->genre = $request->genre;
        $kategori_produk->save();
        return redirect('admin/kategori')->with('success', 'Wihh Ada Produk Baruu Yaa?? MANTAPP!!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk') ->where('id', $id) ->get();
        return view('admin.kategori.edit', compact('kategori_produk'));
    }

    public function update(Request $request, string $id)
    {
        $kategori_produk = KategoriProduk::find($request->id);
        $kategori_produk->genre = $request->genre;
        $kategori_produk->save();
        return redirect('admin/kategori')->with('success', 'Baru Di Update?? cihh..');
    }

    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id',$id)->delete();
        return redirect('admin/kategori')->with('success', 'Yahh Dihapus,Nanti Jangan Nyesel Ya!!');
    }
}
