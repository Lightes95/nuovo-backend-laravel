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
            <input type="text" name="titolo" class="form-control">
        </div>
        <div class="form-group">
            <label>Edizione</label>
            <input type="text" name="edizione"  class="form-control">
        </div>
        <div class="form-group">
            <label>Lugo Edizione</label>
            <input type="text" name="luogo_edizione" class="form-control">
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
            <select class="form-control" name="publisher_id">
                <option>---</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>
        <div class="form-group">
            <label>Autore</label>
            <select class="form-control"  type="number" name="authors_id">
                <option>---</option>
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