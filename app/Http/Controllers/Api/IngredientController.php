<?php

namespace App\Http\Controllers\api;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\api\IngredientResource;

class IngredientController extends Controller
{
    public function index(){
        // $ingredients = Ingredient::withCount('recipeIngredients')->get();
        return IngredientResource::collection(Ingredient::all());
    }
    public function show(Ingredient $ingredient){
        $ingredient->load('recipeIngredients');
        return new IngredientResource($ingredient);
    }
}
