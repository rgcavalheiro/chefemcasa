@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <h1 class="display-4">Bem-vindo ao Chef em Casa!</h1>
            <p class="lead">O lugar perfeito para encontrar receitas deliciosas com os ingredientes que você já possui em casa.</p>
            <a href="/search" class="btn btn-primary btn-lg">Pesquisar Receitas</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Minhas Receitas Favoritas</h2>
                <!-- Aqui você pode adicionar um loop para exibir as receitas favoritas do usuário, se estiver implementando essa funcionalidade -->
            </div>
            <div class="col-md-6">
                <h2>Meus Ingredientes</h2>
                <!-- Aqui você pode adicionar um loop para exibir a lista de ingredientes do usuário, se estiver implementando essa funcionalidade -->
            </div>
        </div>
    </div>
@endsection
