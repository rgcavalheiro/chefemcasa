<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Google\Cloud\Translate\V2\TranslateClient;

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
            'app_id' => env('EDAMAM_API_ID'),
            'app_key' => env('EDAMAM_API_KEY'),
            'from' => 0,
            'to' => 10, // Limit the number of recipes to be returned
        ]);

        $data = $response->json();

        // Verifique se o índice 'hits' está definido no array retornado
        if (isset($data['hits'])) {
            $recipesData = $data['hits'];

            $translatedRecipes = [];

            // Instanciar o cliente de tradução do Google Cloud
            $translateClient = new TranslateClient([
                'key' => env('GOOGLE_TRANSLATE_API_KEY'), // Sua API key aqui
            ]);

            // Iterar sobre os dados das receitas
            foreach ($recipesData as $recipeData) {
                $recipe = $recipeData['recipe'];
                $translatedIngredients = [];
                foreach ($recipe['ingredients'] as $ingredient) {
                    $originalIngredient = $ingredient['text'];
                    $translatedIngredient = $translateClient->translate($originalIngredient, [
                        'target' => 'pt', // Idioma de destino (português)
                    ]);
                    $translatedIngredients[] = ['original' => $originalIngredient, 'translated' => $translatedIngredient['text']];
                }
                $recipe['ingredients'] = $translatedIngredients;
                $translatedRecipes[] = $recipe;
            }

            return view('search_results', ['recipes' => $translatedRecipes]);
        } else {
            // Em caso de erro ou nenhum resultado encontrado, retorne uma mensagem na view
            return view('search_results', ['recipes' => []]);
        }
    }

    public function searchTranslatedForm()
    {
        return view('search_translated_form');
    }

    public function searchTranslatedRecipes(Request $request)
    {
        $searchTerm = $request->input('search_term');

        // Make the API call to get recipes based on the ingredients
        $response = Http::get('https://api.edamam.com/search', [
            'q' => $searchTerm,
            'app_id' => env('EDAMAM_API_ID'),
            'app_key' => env('EDAMAM_API_KEY'),
            'from' => 0,
            'to' => 10, // Limit the number of recipes to be returned
        ]);

        $data = $response->json();

        // Verifique se o índice 'hits' está definido no array retornado
        if (isset($data['hits'])) {
            $recipesData = $data['hits'];

            $translatedRecipes = [];

            // Instanciar o cliente de tradução do Google Cloud
            $translateClient = new TranslateClient([
                'key' => env('GOOGLE_TRANSLATE_API_KEY'), // Sua API key aqui
            ]);

            // Iterar sobre os dados das receitas
            foreach ($recipesData as $recipeData) {
                $recipe = $recipeData['recipe'];
                $translatedIngredients = [];
                foreach ($recipe['ingredients'] as $ingredient) {
                    $originalIngredient = $ingredient['text'];
                    $translatedIngredient = $translateClient->translate($originalIngredient, [
                        'target' => 'pt', // Idioma de destino (português)
                    ]);
                    $translatedIngredients[] = ['original' => $originalIngredient, 'translated' => $translatedIngredient['text']];
                }
                $recipe['ingredients'] = $translatedIngredients;
                $translatedRecipes[] = $recipe;
            }

            return view('search_translated_results', ['recipes' => $translatedRecipes]);
        } else {
            // Em caso de erro ou nenhum resultado encontrado, retorne uma mensagem na view
            return view('search_translated_results', ['recipes' => []]);
        }
    }
}
