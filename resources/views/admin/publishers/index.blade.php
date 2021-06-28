@extends('adminlte::page')

@extends('layouts.datatables')

@section('title', 'Dashboard')

@section('content_header')
<a href="{{ route('publishers.create') }}" type="button" class="btn btn-primary">Registra Editore</a>
@stop

@section('content')
<table id='tabella' class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>sito web</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($publishers as $publisher)
        <tr>
            <td>{{ $publisher->id }}</td>
            <td>{{ $publisher->nome }}</td>
            <td>{{ $publisher->sito_web}}</td>
            <td>
                <form method="post" action="{{ route('publishers.destroy', $publisher->id) }}">
                    @method('DELETE')
                    @csrf
                    <a href="$publishers/{{ $publisher->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <button type="submit" value="Elimina" class="btn btn-primary"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop