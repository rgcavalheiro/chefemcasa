@extends('layouts.app')

@section('content')
    <h1>Resultados da Pesquisa Traduzida</h1>
    @if (count($recipes) > 0)
        <ul>
            @foreach ($recipes as $recipe)
                <li>
                    <h2>{{ $recipe['label'] }}</h2>
                    <ul>
                        @foreach ($recipe['ingredients'] as $ingredient)
                            <li>{{ $ingredient['translated'] }}</li>
                        @endforeach
                    </ul>
                    <p><a href="{{ $recipe['url'] }}" target="_blank">Ver receita completa</a></p>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhuma receita encontrada para os ingredientes pesquisados.</p>
    @endif
@endsection
