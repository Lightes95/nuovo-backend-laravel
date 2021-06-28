@extends('adminlte::page')

@extends('layouts.datatables')

@section('title', 'Elenco Argomenti')

@section('content_header')
<a href="{{ route('topics.create') }}" type="button" class="btn btn-primary">Registra Argomento</a>
@stop

@section('content')
<table id='tabella' class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($topics as $topic)
        <tr>
            <td>{{ $topic->id }}</td>
            <td>{{ $topic->nome }}</td>
            <td>
                <form method="post" action="{{ route('topics.destroy', $topic->id) }}">
                    @method('DELETE')
                    @csrf
                    <a href="topics/{{ $topic->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <button type="submit" value="Elimina" class="btn btn-primary"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop