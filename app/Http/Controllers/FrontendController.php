<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class FrontendController extends Controller
{
    public function index(){

        return view('admin.dashboard');
    }

    public function logout(){
        $this->middleware('guest')->except('logout');
        return view('home');
    }

    public function masuk(){
        return view('frontend/masuk/masuk');
    }

    public function home(){
        $produk = new Produk();
        return view('frontend.home.home', ['produk' =>$produk->getAllData()]);
    }

    public function about(){
        return view('frontend/about/about');
    }

    public function fantasi(){
        $produk = new Produk();
        return view('frontend.genre.fantasi', ['produk' =>$produk->getAllData()]);
    }

    public function komedi(){
        $produk = new Produk();
        return view('frontend.genre.komedi', ['produk' =>$produk->getAllData()]);
    }

    public function romance(){
        $produk = new Produk();
        return view('frontend.genre.romance', ['produk' =>$produk->getAllData()]);
    }

    public function action(){
        $produk = new Produk();
        return view('frontend.genre.action', ['produk' =>$produk->getAllData()]);
    }

    public function horor(){
        $produk = new Produk();
        return view('frontend.genre.horor', ['produk' =>$produk->getAllData()]);
    }

    public function thriller(){
        $produk = new Produk();
        return view('frontend.genre.thriller', ['produk' =>$produk->getAllData()]);
    }

    public function inspiratif(){
        $produk = new Produk();
        return view('frontend.genre.inspiratif', ['produk' =>$produk->getAllData()]);
    }
}
