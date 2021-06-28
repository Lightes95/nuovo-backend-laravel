@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data Registrazione</th>
        <th>Action</th>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td><a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
            <a href="" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>
    @endforeach

</table>
@stop

@section('js')

@stop