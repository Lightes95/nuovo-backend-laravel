@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container mt-3">
    <form method="post" action="{{ route('publisher.store') }}" enctype="multipart/form-data">
     
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $editore->nome }}">
        </div>
        <div class="form-group">
            <label>Sito_web</label>
            <input type="text" name="sito_web" class="form-control" value="{{ $editore->sito_web }}">
        </div>
        <input type="submit" value="Salva autore" class="btn btn-primary"/>
@stop

@section('js')

@stop