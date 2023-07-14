@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'pelanggan')
<div class="container-fluid px-4">
    <h1 class="mt-4">Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Tanggal Pembelian</th>
                       <th>Total</th>
                       <th>Judul Produk</th>
                       <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                     @endphp
                     @foreach ($pesanan as $ps)

                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $ps->tanggal}}</td>
                        <td>{{ $ps->total }}</td>
                        <td>{{ $ps->judul_produk}}</td>
                        <td>
                            <a href="{{ url('admin/pesanan/edit/'. $ps->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ url('admin/pesanan/delete/'. $ps->id) }}" class="btn btn-danger"
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
@include('admin.acces_denied')
@endif
@endsection
