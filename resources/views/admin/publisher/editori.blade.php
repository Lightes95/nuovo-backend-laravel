@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
<a href="{{ route('publisher.create') }}" type="button" class="btn btn-primary">Primary</a>
@stop

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>sito web</th>
        <th>Action</th>
    </tr>

    @foreach ($editore as $editori)
    <tr>
        <td>{{ $editori->id }}</td>
        <td>{{ $editori->nome }}</td>
        <td>{{ $editori->sito_web}}</td>
        <td><a href="publisher/{{ $editori->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
            <form method="post" action="{{ route('publisher.destroy',$editori->id) }}">
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