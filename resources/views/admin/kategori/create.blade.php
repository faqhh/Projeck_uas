@extends('admin.layout.app')
@section('content')
<br>
<form method="POST" action="{{ url('admin/kategori/store') }}">
  {{ csrf_field() }}
    <div class="form-group row">
      <label for="genre" class="col-4 col-form-label">Genre</label>
      <div class="col-8">
        <input id="genre" name="genre"  type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
@endsection
