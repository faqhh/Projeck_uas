<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager') {
            return redirect('admin/dashboard')->with('success', 'Widihh Role nya ADMIN, Ampun Boss!!');
        } else{
            return redirect('frontend/home')->with('success', 'Bwahahaha Role nya cuma PELANGGAN ya~~!');
        }
    }
}
