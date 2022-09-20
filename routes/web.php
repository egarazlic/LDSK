<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/**
 * IF there are more than two endpoints we could do with prefixes
 *
**/
Route::get("/agencies", [AgencyController::class, "index"])->name("agency");
Route::get("/agencies/{id}", [AgencyController::class, "show"])->name("agency-show");


Route::get("/properties", [PropertyController::class, "index"])->name("properties");
Route::get("/properties/{id}", [PropertyController::class, "show"])->name("property-show");
Route::get("/property/statistics/{month}", [PropertyController::class, "statistics"])->name("property-statistics");

Route::get("/ads", [AdsController::class, "index"])->name("ads");
Route::get("/ads/{id}", [AdsController::class, "show"])->name("ads-show");






