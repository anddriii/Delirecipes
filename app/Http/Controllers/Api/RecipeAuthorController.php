<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\api\IngredientResource;
use App\Http\Resources\Api\RecipeAuthorResource;
use App\Models\RecipeAuthor;
use Illuminate\Http\Request;

class RecipeAuthorController extends Controller
{
    public function index() {
        return RecipeAuthorResource::collection(RecipeAuthor::all());
    }

    public function show(RecipeAuthor $recipeAuthor){
        $recipeAuthor->load('recipes');
        return new RecipeAuthorResource($recipeAuthor);
    }
}
