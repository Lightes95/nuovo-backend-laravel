@extends('adminlte::page')

@section('title', 'Registra Prestito')

@section('content_header')
<h1>Registra Prestito</h1>
@endsection

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('loans.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Prestato il</label>
            <input type="date" name="prestato_il" class="form-control">
        </div>
        <div class="form-group">
            <label>Restituito il</label>
            <input type="date" name="restituito_il" class="form-control">
        </div>
        <div class="form-group">
            <label>Libro</label>
            <input type="text" name="book_id" class="form-control">
        </div>
        <div class="form-group">
            <label>Utente</label>
            <input type="text" name="user_id" class="form-control">
        </div>
        <input type="submit" value="Salva prestito" class="btn btn-primary">
    </form>
</div>
@endsection