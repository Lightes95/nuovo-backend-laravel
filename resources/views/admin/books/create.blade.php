@extends('adminlte::page')

@section('title', 'Registra Libro')

@section('content_header')
<h1>Registra Libro</h1>
@endsection

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Titolo</label>
            <input type="text" name="titolo" class="form-control">
        </div>
        <div class="form-group">
            <label>Lugo Edizione</label>
            <input type="text" name="luogo_edizione" class="form-control">
        </div>
        <div class="form-group">
            <label>Anno Edizione</label>
            <input type="number" name="anno_edizione" class="form-control">
        </div>
        <div class="form-group">
            <label>Isbn</label>
            <input type="number" name="isbn" class="form-control">
        </div>
        <div class="form-group">
            <label>Isbn13</label>
            <input type="number" name="isbn13" class="form-control">
        </div>
        <div class="form-group">
            <label>Copie</label>
            <input type="number" name="copie" class="form-control">
        </div>
        <div class="form-group">
            <label>Editore</label>
            <select class="form-control" name="publisher_id" >
                <option value="">seleziona l'editore</option>
                @foreach ($publishers as $publisher)
                <option value="{{ $publisher->id }}">{{ $publisher->nome }}</option>
               @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>autore</label>
            <select class="form-control" name="author_id" >
                <option value="">seleziona l'autore</option>
                @foreach ($author as $authors)
                 <option value="{{ $authors->id }}">{{ $authors->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Argomento</label>
            <select class="form-control" name="topic_id" >
                <option value="">seleziona l'argomento</option>
                @foreach ($topics as $topic)
                 <option value="{{ $topic->id }}">{{ $topic->nome }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Salva Post" class="btn btn-primary">
    </form>
</div>
@endsection