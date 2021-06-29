@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('publishers.update', $publishers->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $publishers->nome }}">
        </div>
        <div class="form-group">
            <label>Sito_web</label>
            <input type="text" name="sito_web" class="form-control" value="{{ $publishers->sito_web }}">
        </div>
        <input type="submit" value="Salva editore" class="btn btn-primary" />
    </form>
</div>
@endsection