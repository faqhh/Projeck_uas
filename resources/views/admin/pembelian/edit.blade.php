@extends('admin.layout.app')
@section('content')
@foreach ($pembelian as $beli)
<br>
<form method="POST" action="{{ url('admin/pembelian/update/'. $beli->id) }}">
    {{ csrf_field()}}
    <h4 style="text-align: center">Form Edit Data</h4>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
    <div class="col-8">
      <input id="tanggal" name="tanggal"  value="{{ $beli->tanggal}}"type="date" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
    <div class="col-8">
      <input id="jumlah" name="jumlah" value="{{ $beli->jumlah}}"type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label>
    <div class="col-8">
      <input id="harga" name="harga" value="{{ $beli->harga}}"type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Nama Produk</label>
    <div class="col-8">
      <select id="produk_id" name="produk_id" class="custom-select">
        @foreach ($produk as $prod)
            <option value="{{ $prod->id }}">{{ $prod->judul }}</option>
        @endforeach
      </select>
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
