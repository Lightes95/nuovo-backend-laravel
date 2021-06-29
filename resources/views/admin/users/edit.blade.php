@extends('adminlte::page')

@section('title', 'Modifica Utente')

@section('content_header')
<h1>Modifica Utente</h1>
@stop

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('users.update', $users->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $users->name }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $users->email }}">
        </div>
        <input type="submit" value="Salva utente" class="btn btn-primary">
    </form>
</div>
@endsection