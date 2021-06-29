@extends('adminlte::page')

@section('title', 'Registra Argomento')

@section('content_header')
<h1>Registra Argomento</h1>
@endsection

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('topics.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <input type="submit" value="Salva editore" class="btn btn-primary">
    </form>
</div>
@endsection