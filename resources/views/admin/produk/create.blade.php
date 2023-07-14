@extends('admin.layout.app')
@section('content')
<br>
<form method="POST" action="{{ url('admin/produk/store') }}">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="judul" class="col-4 col-form-label">Judul</label>
      <div class="col-8">
        <input id="judul" name="judul" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="penulis" class="col-4 col-form-label">Penulis</label>
      <div class="col-8">
        <input id="penulis" name="penulis" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="image" class="col-4 col-form-label">Image</label>
      <div class="col-8">
        <input id="image" name="image" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
      <div class="col-8">
        <input id="harga_beli" name="harga_beli" type="number" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
      <div class="col-8">
        <input id="harga_jual" name="harga_jual" type="number" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="stok" class="col-4 col-form-label">Stok</label>
      <div class="col-8">
        <input id="stok" name="stok" type="number" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
      <div class="col-8">
        <input id="min_stok" name="min_stok" type="number" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label>
      <div class="col-8">
        <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
            @foreach ($kategori_produk as $kat)
                <option value="{{ $kat->id }}">{{ $kat->genre }}</option>
            @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="sinopsis" class="col-4 col-form-label">Sinopsis</label>
      <div class="col-8">
        <input id="sinopsis" name="sinopsis" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
@endsection
