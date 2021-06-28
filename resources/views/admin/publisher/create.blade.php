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
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>Sito Web</label>
            <input type="text" name="sito_web"  class="form-control">
        </div>
        <input type="submit" value="Salva autore"  class="btn btn-primary">
    </form>
@stop

@section('js')

@stop