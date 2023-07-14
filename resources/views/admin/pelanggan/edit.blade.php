@extends('admin.layout.app')
@section('content')
@foreach ($pelanggan as $pel)
<br>
<form method="POST" action="{{ url('admin/pelanggan/update/'. $pel->id) }}">
    {{ csrf_field()}}
    <h4 style="text-align: center">Form Edit Data</h4>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <input id="nama" name="nama" value="{{ $pel->nama}}"type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label>
    <div class="col-8">
      <input id="jenis_kelamin" name="jenis_kelamin" value="{{ $pel->jenis_kelamin}}"type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">E-mail</label>
    <div class="col-8">
      <input id="email" name="email" value="{{ $pel->email}}"type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="pesanan_id" class="col-4 col-form-label">Total Pesanan</label>
    <div class="col-8">
      <input id="pesanan_id" name="pesanan_id" type="text" value="{{ $pel->pesanan_id}}"class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan Edit</button>
    </div>
  </div>
</form>
@endforeach
@endsection
