@extends('adminlte::page')

@extends('layouts.datatables')

@section('title', 'Dashboard')



@section('content')
<table id='tabella' class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Prestato il</th>
            <th>Restituito il</th>
            <th>Libro</th>
            <th>Utente</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($loans as $loan)
        <tr>
            <td>{{ $loan->id }}</td>
            <td>{{ $loan->prestato_il }}</td>
            <td>{{ $loan->restituito_il}}</td>
            <td>@foreach ($books as $book) @if ($loan->book_id==$book->id ){{$book->titolo}} @endif @endforeach</td>
            <td>@foreach ($users as $user) @if ( $loan->user_id==$user->id ) {{$user->name}}@endif @endforeach</td>
            <td>
                <form method="post" action="{{ route('loans.destroy', $loan->id) }}">
                    @method('DELETE')
                    @csrf
                    <a href="loans/{{ $loan->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <button type="submit" value="Elimina" class="btn btn-primary"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop