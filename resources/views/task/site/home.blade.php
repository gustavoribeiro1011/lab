@extends('task.site.layout')

@section('titulo-pagina', 'Home')

@section('titulo-secao', 'Nova tarefa')

@section('conteudo-principal')

    @include('task.components._create')

    @include('task.components._list')

@endsection
