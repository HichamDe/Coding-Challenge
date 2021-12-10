<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddingProductController;
use App\Http\Controllers\SearchController;

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

Route::get('/add-product', function () {
    return view('add-product');
});

Route::post('/add-product' , [AddingProductController::class , "addingProduct"]);


Route::get('/search' , [SearchController::class , "search"]);

//* Search For Cetagory

Route::get('/cetagorys' , [ searchController::class , "cetagorys" ]);