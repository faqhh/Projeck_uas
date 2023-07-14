@extends('admin.layout.app')
@section('content')
@foreach ($kategori_produk as $kat)
<br>
<form method="POST" action="{{ url('admin/kategori/update/'. $kat->id) }}">
    {{ csrf_field()}}
    <h4 style="text-align: center">Form Edit Data</h4>
  <div class="form-group row">
    <label for="genre" class="col-4 col-form-label">Genre</label>
    <div class="col-8">
      <input id="genre" name="genre" value="{{ $kat->genre}}"type="text" class="form-control" spellcheck="false" data-ms-editor="true">
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
