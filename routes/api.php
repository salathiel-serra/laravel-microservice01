<?php

use App\Http\Controllers\Api\{
    CategoryController, CompanyController
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
Route::apiResource('/companies', CompanyController::class);
