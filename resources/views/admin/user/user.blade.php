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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @php
                       $no = 1;
                   @endphp
                   @foreach ($users as $user)
                   <tr>
                    <td>{{$no}}</td>
                    <td>{{$user->name }}</td>
                    <td>{{$user->email }}</td>
                    <td>{{$user->role }}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <a href="{{ url('admin/user/edit/'. $user->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ url('admin/user/delete/'. $user->id) }}" class="btn btn-danger"
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
