<?php

use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\QuizApiController;
use App\Http\Controllers\SubjectApiController;
use App\Http\Controllers\TrendApiController;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test/{category}', function (Category $category) {

});
Route::get('test', function () {
    return new CategoryCollection(Category::all());
});
Route::resource('quiz', QuizApiController::class);
Route::resource('trend', TrendApiController::class);
Route::resource('subjects', SubjectApiController::class);
Route::resource('categories', CategoryApiController::class);
