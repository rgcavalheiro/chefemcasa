@extends('layouts.app')

@section('content')
    <h2>Formulário de Pesquisa de Receitas</h2>
    <form action="/search" method="POST">
        @csrf
        <label for="search_term">Digite o nome do ingrediente:</label>
        <input type="text" name="search_term" id="search_term" required>
        <button type="submit">Pesquisar</button>
    </form>
@endsection
