<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = auth()->user()->ingredients;

        return view('ingredients.index', ['ingredients' => $ingredients]);
    }

    public function store(Request $request)
    {
        $ingredient = new Ingredient();
        $ingredient->name = $request->input('name');
        $ingredient->user_id = auth()->id();
        $ingredient->save();

        return redirect('/ingredients')->with('success', 'Ingrediente adicionado com sucesso!');
    }

    public function destroy($id)
    {
        $ingredient = Ingredient::findOrFail($id);
        $ingredient->delete();

        return redirect('/ingredients')->with('success', 'Ingrediente removido com sucesso!');
    }

    // Você também pode adicionar métodos personalizados aqui, se necessário
}
