<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;

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

Route::apiResources([
    'question' => QuestionController::class
]);

Route::apiResources([
    'category' => CategoryController::class
]);

Route::apiResources(['question/{question}/reply' => ReplyController::class]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
