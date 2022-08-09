<?php

use App\Http\Controllers\Api\{
    CategoryController
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});

Route::apiResource('/categories', CategoryController::class);
