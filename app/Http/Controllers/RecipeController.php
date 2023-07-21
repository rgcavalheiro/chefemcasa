<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    public function searchForm()
    {
        return view('search_form');
    }

    public function searchRecipes(Request $request)
    {
        $searchTerm = $request->input('search_term');

        // Make the API call to get recipes based on the ingredients
        $response = Http::get('https://api.edamam.com/search', [
            'q' => $searchTerm,
            'app_id' => '80884960',
            'app_key' => '085b927d8834edb5a51c2c0131a7f7c1',
            'from' => 0,
            'to' => 10, // Limit the number of recipes to be returned
        ]);

        $data = $response->json();

        // Verifique se o índice 'hits' está definido no array retornado
        if (isset($data['hits'])) {
            $recipes = $data['hits'];

            return view('search_results', ['recipes' => $recipes]);
        } else {
            // Em caso de erro ou nenhum resultado encontrado, retorne uma mensagem na view
            return view('search_results', ['recipes' => []]);
        }
    }
}
