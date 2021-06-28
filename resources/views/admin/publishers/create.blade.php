@extends('adminlte::page')

@section('title', 'Registra Editore')

@section('content_header')
<h1>Registra Editore</h1>
@endsection

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('publishers.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>Sito Web</label>
            <input type="text" name="sito_web" class="form-control">
        </div>
        <input type="submit" value="Salva editore" class="btn btn-primary">
    </form>
</div>
@endsection