@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Resultados da Pesquisa</h2>
        @if (!empty($recipes))
            <div class="recipe-list">
                @foreach ($recipes as $recipeData)
                    @php
                        $recipe = $recipeData;
                        $calories = number_format($recipe['calories'], 2); // Formata as calorias com 2 casas decimais
                        $totalTime = $recipe['totalTime'] ?? 'N/A';
                        if ($totalTime !== 'N/A') {
                            $totalTime .= ' minutos';
                        }
                    @endphp
                    <div class="recipe-item">
                        <img src="{{ $recipe['image'] }}" alt="{{ $recipe['label'] }}" class="recipe-thumbnail">
                        <h3 class="recipe-title"><a href="{{ $recipe['url'] }}" target="_blank">{{ $recipe['label'] }}</a></h3>
                        <p class="recipe-info">Tempo de Preparo: {{ $totalTime }}</p>
                        <p class="recipe-info">Porções: {{ $recipe['yield'] ?? 'N/A' }}</p>
                        <p class="recipe-info">Calorias: {{ $calories }}</p>
                        <ul class="recipe-ingredients">
                            @foreach ($recipe['ingredients'] as $ingredient)
                                <li>{{ $ingredient['translated'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @else
            <p>Nenhum resultado encontrado.</p>
        @endif
    </div>
@endsection
