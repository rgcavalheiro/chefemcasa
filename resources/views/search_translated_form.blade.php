@extends('layouts.app')

@section('content')
    <h1>Pesquisa Traduzida de Receitas</h1>
    <form action="/search-translated" method="post">
        @csrf
        <label for="search_term">Digite os ingredientes para buscar receitas:</label>
        <input type="text" name="search_term" id="search_term" required>
        <button type="submit">Pesquisar</button>
    </form>
@endsection
