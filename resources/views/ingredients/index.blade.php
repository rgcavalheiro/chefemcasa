@extends('layouts.app')

@section('content')
    <h2>Meus Ingredientes</h2>
    <ul>
        @foreach ($ingredients as $ingredient)
            <li>
                {{ $ingredient->name }}
                <form action="/ingredients/{{ $ingredient->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remover</button>
                </form>
            </li>
        @endforeach
    </ul>

    <form action="/ingredients" method="POST">
        @csrf
        <label for="name">Adicionar novo ingrediente:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Adicionar</button>
    </form>
@endsection
