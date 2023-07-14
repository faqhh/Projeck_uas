@extends('admin.layout.app')
@section('content')
@foreach ($users as $user)
<br>
<form method="POST" action="{{ url('admin/users/update/'. $user->id) }}">
    {{ csrf_field()}}
    <h4 style="text-align: center">Form Edit Data User</h4>
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="name" name="name" value="{{ $user->name }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <input id="email" name="email" value="{{ $user->email }}" type="email" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="role" class="col-4 col-form-label">Role</label>
        <div class="col-8">
            <input id="role" name="role" value="{{ $user->role }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
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
