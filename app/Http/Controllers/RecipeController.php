<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function searchForm()
    {
        return view('search_form');
    }

    public function searchRecipes(Request $request)
    {
        $searchTerm = $request->input('search_term');
        $recipes = Recipe::where('title', 'like', '%' . $searchTerm . '%')->get();

        return view('search_results', ['recipes' => $recipes]);
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipe_details', ['recipe' => $recipe]);
    }

    // Você também pode adicionar métodos personalizados aqui, se necessário
}
