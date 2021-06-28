@extends('adminlte::page')

@extends('layouts.datatables')

@section('title', 'Dashboard')


@section('content_header')
<a href="{{ route('authors.create') }}" type="button" class="btn btn-primary">Registra Autore</a>
@stop

@section('content')
<table id='tabella' class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>cognome</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->nome }}</td>
            <td>{{ $author->cognome}}</td>
            <td>
                <form method="post" action="{{ route('authors.destroy', $author->id) }}">
                    @method('DELETE')
                    @csrf
                    <a href="authors/{{ $author->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <button type="submit" value="Elimina" class="btn btn-primary"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop