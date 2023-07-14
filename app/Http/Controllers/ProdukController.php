<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function produk()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' =>$produk->getAllData()]);
    }

    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk','produk'));
    }

    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->judul = $request->judul;
        $produk->penulis = $request->penulis;
        $produk->image = $request->image;
        $produk->harga_beli = $request->harga_beli;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->sinopsis = $request->sinopsis;
        $produk->save();
        return redirect('admin/produk')->with('success', 'Wihh Ada Produk Baruu Yaa?? MANTAPP!!');
    }

    public function show(string $id)
    {
        $kategori_produk = DB::table('kategori_produk') ->get();
        $produk = DB::table('produk') ->where('id', $id) ->get();
        return view('admin.produk.detail', compact('produk','kategori_produk'));
    }

    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk') ->get();
        $produk = DB::table('produk') ->where('id', $id) ->get();
        return view('admin.produk.edit', compact('produk','kategori_produk'));
    }

    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->judul = $request->judul;
        $produk->penulis = $request->penulis;
        $produk->image = $request->image;
        $produk->harga_beli = $request->harga_beli;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->sinopsis = $request->sinopsis;
        $produk->save();
        return redirect('admin/produk')->with('success', 'Baru Di Update?? cihh..');
    }

    public function destroy(string $id)
    {
        DB::table('produk')->where('id',$id)->delete();
        return redirect('admin/produk')->with('success', 'Yahh Dihapus,Nanti Jangan Nyesel Ya!!');
    }
}
