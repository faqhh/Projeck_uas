@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'pelanggan')
<div class="container-fluid px-4">
    <h1 class="mt-4">Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a href="{{ url('admin/produk/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Produk
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Image</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Minimal stok</th>
                        <th>Kategori Produk</th>
                        <th>Sinopsis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @php
                       $no = 1;
                   @endphp
                   @foreach ($produk as $prod)
                   <tr>
                    <td>{{$no}}</td>
                    <td>{{$prod->judul }}</td>
                    <td>{{$prod->penulis }}</td>
                    <td>{{$prod->image }}</td>
                    <td>{{$prod->harga_beli }}</td>
                    <td>{{$prod->harga_jual}}</td>
                    <td>{{$prod->stok}}</td>
                    <td>{{$prod->min_stok}}</td>
                    <td>{{$prod->genre}}</td>
                    <td>{{$prod->sinopsis}}</td>
                    <td>
                        <a href="{{ url('admin/produk/edit/'. $prod->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ url('admin/produk/delete/'. $prod->id) }}" class="btn btn-danger"
                            onclick="return confirm('yakin mau di hapus~?')">Delete</a>
                    </td>
                   </tr>
                   @php
                      $no++
                   @endphp
                   @endforeach
                </tbody>
            </table>
          </div>
        </div>
</div>
@else
@include('acces_denied')
@endif
@endsection
