@extends('adminlte::page')

@section('title', 'Modifica Argomento')

@section('content_header')
<h1>Modifica Argomento</h1>
@stop

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('topics.update', $tpics->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $topics->nome }}">
        </div>
        <input type="submit" value="Salva argomento" class="btn btn-primary" />
    </form>
</div>
@endsection