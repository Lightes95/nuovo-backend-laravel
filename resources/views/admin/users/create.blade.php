@extends('adminlte::page')

@section('title', 'Registra Utente')

@section('content_header')
<h1>Registra Utente</h1>
@endsection

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <input type="submit" value="Salva utente" class="btn btn-primary">
    </form>
</div>
@endsection