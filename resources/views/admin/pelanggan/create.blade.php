@extends('admin.layout.app')
@section('content')
<br>
<form method="POST" action="{{ url('admin/pelanggan/store') }}">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama</label>
      <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label>
      <div class="col-8">
        <input id="jenis_kelamin" name="jenis_kelamin" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-4 col-form-label">E-mail</label>
      <div class="col-8">
        <input id="email" name="email" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="pesanan_id" class="col-4 col-form-label">Total Pesanan</label>
      <div class="col-8">
        <select id="pesanan_id" name="pesanan_id" class="custom-select">
          @foreach ($pesanan as $ps)
              <option value="{{ $ps->total }}">{{ $ps->total }}</option>
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
