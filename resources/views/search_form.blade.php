@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Pesquisar Receitas</h2>
        <form action="/search" method="POST">
            @csrf
            <div class="form-group">
                <label for="search_term">Digite o nome do ingrediente:</label>
                <input type="text" name="search_term" id="search_term" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>
    </div>
@endsection
