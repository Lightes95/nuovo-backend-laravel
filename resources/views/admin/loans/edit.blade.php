@extends('adminlte::page')

@section('title', 'Modifica Utente')

@section('content_header')
<h1>Modifica Utente</h1>
@endsection

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('loans.update', $loans->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Prestato il</label>
            <input type="date" name="prestato_il" class="form-control" value="{{ $loans->prestato_il }}">
        </div>
            <div class="form-group">
                <label>Restituito il</label>
                <input type="date" name="restituito_il" class="form-control" value="{{ $loans->restituito_il }}">
            </div>
            <div class="form-group">
                <label>Libro</label>
                <select class="form-control" name="book_id" >
                    @foreach ($books as $book)
                     <option value="{{ $book->id }}">{{ $book->titolo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Utente</label>
                <select class="form-control" name="user_id" >
                    @foreach ($users as $user)
                     <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Salva prestito" class="btn btn-primary">
    </form>
</div>
@endsection