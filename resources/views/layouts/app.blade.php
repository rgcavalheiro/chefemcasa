<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chef em Casa</title>
    <!-- Adicione um link para o CSS personalizado (se houver) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Adicione links para as bibliotecas ou frameworks CSS (por exemplo, Bootstrap) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Chef em Casa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/search">Pesquisar Receitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ingredients">Meus Ingredientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/favorites">Receitas Favoritas</a>
                    </li>
                    <!-- Adicione mais links de navegação, conforme necessário -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da página será inserido aqui -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Adicione scripts JavaScript (por exemplo, Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Adicione scripts personalizados (se houver) -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
