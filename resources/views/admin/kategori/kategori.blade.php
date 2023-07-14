@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'pelanggan')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a href="{{ url('admin/kategori/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Kategori
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Genre</th>
                       <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                     @endphp
                     @foreach ($kategori_produk as $kat)

                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $kat->genre }}</td>
                        <td>
                            <a href="{{ url('admin/kategori/edit/'. $kat->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ url('admin/kategori/delete/'. $kat->id) }}" class="btn btn-danger"
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
