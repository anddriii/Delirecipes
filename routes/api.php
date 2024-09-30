<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\api\IngredientController;
use App\Http\Controllers\Api\RecipeAuthorController;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
Route::apiResource('/categories', CategoryController::class);

Route::get('/ingredient/{ingredient:id}', [IngredientController::class, 'show']);
Route::apiResource('/ingredients', IngredientController::class);

Route::get('/author/{recipeAuthor:id}', [RecipeAuthorController::class, 'show']);
Route::apiResource('/authors', RecipeAuthorController::class);
