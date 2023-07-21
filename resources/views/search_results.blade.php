@extends('layouts.app')

@section('content')
    <h2>Resultados da Pesquisa</h2>
    @if ($recipes->count() > 0)
        <ul>
            @foreach ($recipes as $recipe)
                <li>
                    <a href="/recipe/{{ $recipe->id }}">{{ $recipe->title }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum resultado encontrado.</p>
    @endif
@endsection
