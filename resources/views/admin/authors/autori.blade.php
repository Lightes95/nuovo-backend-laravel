@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
<a href="{{ route('authors.create') }}" type="button" class="btn btn-primary">Primary</a>
@stop

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>cognome</th>
        <th>Action</th>
    </tr>

    @foreach ($autore as $autori)
    <tr>
        <td>{{ $autori->id }}</td>
        <td>{{ $autori->nome }}</td>
        <td>{{ $autori->cognome}}</td>
        <td><a href="authors/{{ $autori->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
            <form method="post" action="{{ route('authors.destroy',$autori->id) }}">
                @method('DELETE')
                @csrf
                <button type="submit" value="Elimina" class="btn btn-primary"><i class="fas fa-trash"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
@stop