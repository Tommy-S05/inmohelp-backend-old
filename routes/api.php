<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function(Request $request) {
    return $request->user()->only(['id', 'name', 'email']);
});

//Route::get('/user', function(Request $request) {
//    return $request->user()->only(['id', 'name', 'email']);
//});

//Route::get('/user', [\App\Http\Controllers\UserController::class, 'userAuth']);
//Route::get('/user', [\App\Http\Controllers\UserController::class, 'userAuth'])->middleware('auth:sanctum');

Route::get('/properties', [\App\Http\Controllers\PropertyController::class, 'index']);
Route::get('/properties/outstanding', [\App\Http\Controllers\PropertyController::class, 'outstanding']);
Route::post('/properties', [\App\Http\Controllers\PropertyController::class, 'store']);
Route::get('/properties/{property}', [\App\Http\Controllers\PropertyController::class, 'show']);

//Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
//Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
//Route::delete('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/property-types', [\App\Http\Controllers\PropertyTypeController::class, 'index']);
Route::get('/property-types/all', [\App\Http\Controllers\PropertyTypeController::class, 'getAll']);

//Route::get('/property-features', [\App\Http\Controllers\PropertyFeatureController::class, 'index']);

//Route::get('/account', [\App\Http\Controllers\AccountController::class, 'index'])->middleware('auth:sanctum');
Route::get('/account', [\App\Http\Controllers\AccountController::class, 'index'])->middleware('auth:sanctum');
Route::post('/account', [\App\Http\Controllers\AccountController::class, 'store'])->middleware('auth:sanctum');
Route::put('/account', [\App\Http\Controllers\AccountController::class, 'update'])->middleware('auth:sanctum');

//FanancialController
Route::get('/monthly/payments', [\App\Http\Controllers\FinancialController::class, 'monthlyPayments']);
Route::get('/monthly/budget', [\App\Http\Controllers\FinancialController::class, 'monthlyBudget']);
Route::get('/monthly2/budget', [\App\Http\Controllers\FinancialController::class, 'monthlyBudget2']);
Route::get('/affordable/properties', [\App\Http\Controllers\FinancialController::class, 'affordableProperties']);
Route::get('/affordable2/properties', [\App\Http\Controllers\FinancialController::class, 'affordableProperties2']);

//FinancialCategories
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);

//PriceIndexController
Route::get('/price-index', [\App\Http\Controllers\PriceIndexController::class, 'index'])->middleware('auth:sanctum');
