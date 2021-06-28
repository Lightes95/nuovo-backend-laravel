@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
    
        @csrf
        <div class="form-group">
            <label>Titolo</label>
            <input type="text" name="titolo" class="form-control" value="{{ $books->titolo }}">
        </div>
        <div class="form-group">
            <label>Data Edizione</label>
            <input type="text" name="edizione" class="form-control" value="{{ $books->edizione }}">
        </div>
        <div class="form-group">
            <label>Lugo Edizione</label>
            <input type="text" name="luogo_edizione" class="form-control" value="{{ $books->luogo_edizione }}">
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
            <select class="form-control" name="publisher_id" value="{{ $books->publisher_id }}">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>
        <div class="form-group">
            <label>autore</label>
            <select class="form-control" name="authors_id" value="{{ $books->authors_id }}">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>
        <input type="submit" value="Salva Post" class="btn btn-primary">
    </form>
</div>
@stop

@section('js')

@stop