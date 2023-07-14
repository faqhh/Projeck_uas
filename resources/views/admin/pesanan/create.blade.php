@extends('admin.layout.app')
@section('content')
<br>
<form method="POST" action="{{ url('admin/pesanan/store') }}">
  {{ csrf_field() }}
    <div class="form-group row">
      <label for="tanggal" class="col-4 col-form-label">Tanggal Pembelian</label>
      <div class="col-8">
        <input id="tanggal" name="tanggal"  type="date" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="total" class="col-4 col-form-label">Total</label>
      <div class="col-8">
        <input id="total" name="total"  type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="produk_id" class="col-4 col-form-label">Judul Produk</label>
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
