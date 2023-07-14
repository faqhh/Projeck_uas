@extends('admin.layout.app')
@section('content')
<br>
<form method="POST" action="{{ url('admin/pembelian/store') }}">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
      <div class="col-8">
        <input id="tanggal" name="tanggal" type="date" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
      <div class="col-8">
        <input id="jumlah" name="jumlah" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="harga" class="col-4 col-form-label">Harga</label>
      <div class="col-8">
        <input id="harga" name="harga" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
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
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
@endsection
