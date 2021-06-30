@extends('adminlte::page')

@section('title', 'Modifica Libro')

@section('content_header')
<h1>Modifica Libro</h1>
@endsection

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('books.update', $books->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Titolo</label>
            <input type="text" name="titolo" class="form-control" value="{{ $books->titolo }}">
        </div>
        <div class="form-group">
            <label>Lugo Edizione</label>
            <input type="text" name="luogo_edizione" class="form-control" value="{{ $books->luogo_edizione }}">
        </div>
        <div class="form-group">
            <label>Anno Edizione</label>
            <input type="number" name="anno_edizione" class="form-control" value="{{ $books->anno_edizione }}">
        </div>
        <div class="form-group">
            <label>Isbn</label>
            <input type="number" name="isbn" class="form-control" value="{{ $books->isbn }}">
        </div>
        <div class="form-group">
            <label>Isbn13</label>
            <input type="number" name="isbn13" class="form-control" value="{{ $books->isbn13 }}">
        </div>
        <div class="form-group">
            <label>Copie</label>
            <input type="number" name="copie" class="form-control" value="{{ $books->copie }}">
        </div>
        <div class="form-group">
            <label>Editore</label>
            <select class="form-control" name="publisher_id" >
                @foreach ($publishers as $publisher)
                <option value="{{ $publisher->id }}">{{ $publisher->nome }}</option>
               @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>autore</label>
            <select class="form-control" name="author_id" >
                @foreach ($authors as $author)
                 <option value="{{ $author->id }}">{{ $author->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Argomento</label>
            <select class="form-control" name="topic_id" >
                @foreach ($topics as $topic)
                 <option value="{{ $topic->id }}">{{ $topic->nome }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Salva Post" class="btn btn-primary">
    </form>
</div>
@endsection