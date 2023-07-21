<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = auth()->user()->favorites;

        return view('favorites.index', ['favorites' => $favorites]);
    }

    public function store(Request $request)
    {
        $favorite = new Favorite();
        $favorite->recipe_id = $request->input('recipe_id');
        $favorite->user_id = auth()->id();
        $favorite->save();

        return redirect('/favorites')->with('success', 'Receita adicionada aos favoritos!');
    }

    public function destroy($id)
    {
        $favorite = Favorite::findOrFail($id);
        $favorite->delete();

        return redirect('/favorites')->with('success', 'Receita removida dos favoritos!');
    }

    // Você também pode adicionar métodos personalizados aqui, se necessário
}
