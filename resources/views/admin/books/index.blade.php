@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a href="{{ route('books.create') }}" type="button" class="btn btn-primary">Primary</a>
@stop

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Titolo</th>
        <th>Data Edizione</th>
        <th>Lugo Edizione</th>
        <th>Isbn</th>
        <th>Isbn13</th>
        <th>Copie</th>
        <th>Editore</th>
        <th>Argomento</th>
        <th>Action</th>
    </tr>

    @foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->titolo }}</td>
        <td><a href="/books/{{ $books->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
            <form method="post" action="{{ route('books.destroy',$books->id) }}">
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