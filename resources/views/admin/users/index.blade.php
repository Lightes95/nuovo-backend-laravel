@extends('adminlte::page')

@extends('layouts.datatables')

@section('title', 'Elenco Utenti')

@section('content_header')
<h1>Elenco Utenti</h1>
@endsection

@section('content')
<table id='tabella' class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data Registrazione</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>
                <form method="post" action="{{ route('users.destroy', $user->id) }}">
                    @method('DELETE')
                    @csrf
                    <a href="users/{{ $user->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <button type="submit" value="Elimina" class="btn btn-primary"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop