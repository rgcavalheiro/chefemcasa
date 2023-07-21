@extends('layouts.app')

@section('content')
    <h2>{{ $recipe->title }}</h2>
    <p>Ingredientes: {{ $recipe->ingredients }}</p>
    <p>Modo de Preparo: {{ $recipe->instructions }}</p>
@endsection
