@extends('admin.layout.app')
@section('content')
@foreach ($pesanan as $ps)
<br>
<form method="POST" action="{{ url('admin/pesanan/update/'. $ps->id) }}">
    {{ csrf_field()}}
    <h4 style="text-align: center">Form Edit Data</h4>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Pembelian</label>
    <div class="col-8">
      <input id="tanggal" name="tanggal"  value="{{ $ps->tanggal}}"type="date" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="total" class="col-4 col-form-label">Total</label>
    <div class="col-8">
      <input id="total" name="total" value="{{ $ps->total}}"type="text" class="form-control" spellcheck="false" data-ms-editor="true">
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
