@extends('adminlte::page')

@extends('layouts.datatables')

@section('title', 'Elenco Libri')

@section('content_header')
<a href="{{ route('books.create') }}" type="button" class="btn btn-primary">Registra Libro</a>
@endsection

@section('content')
<table id='tabella' class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>luogo_edizione</th>
            <th>Anno Edizione</th>
            <th>Isbn</th>
            <th>Isbn13</th>
            <th>Copie</th>
            <th>Editore</th>
            <th>autore</th>
            <th>Argomento</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->titolo }}</td>
            <td>{{ $book->luogo_edizione }}</td>
            <td>{{ $book->anno_edizione }}</td>
            <td>{{ $book->isbn}}</td>
            <td>{{ $book->isbn13}}</td>
            <td>{{ $book->copie}}</td>
            <td>@foreach ($publishers as $publisher) @if ( $book->publisher_id==$publisher->id ) {{$publisher->nome}} @endif @endforeach</td>
            <td>@foreach ($book->author as $autori) {{$autori->nome}} @endforeach</td>
            <td>@foreach ($topics as $topic) @if ( $book->topic_id==$topic->id ) {{$topic->nome}}@endif @endforeach</td>
            <td>
                <form method="post" action="{{ route('books.destroy',$book->id) }}">
                    @method('DELETE')
                    @csrf
                    <a href="books/{{ $book->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <button type="submit" value="Elimina" class="btn btn-primary"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection