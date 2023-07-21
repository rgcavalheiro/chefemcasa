@extends('layouts.app')

@section('content')
    <h2>Minhas Receitas Favoritas</h2>
    @if ($favorites->count() > 0)
        <ul>
            @foreach ($favorites as $favorite)
                <li>
                    {{ $favorite->recipe->title }}
                    <form action="/favorites/{{ $favorite->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover dos favoritos</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhuma receita favorita encontrada.</p>
    @endif
@endsection
