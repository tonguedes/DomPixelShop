<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get( "/products/create",[ProdutoController::class,"create"])->name("products.create");
Route::get("/products{id}",[ProdutoController::class,"show"])->name("products.show");
Route::get( "/products/edit/{id}",[ProdutoController::class,"edit"])->name("products.edit");
Route::put("/products{id}",[ProdutoController::class,"update"])->name("products.update");
Route::delete("/products{id}",[ProdutoController::class,"destroy"])->name("products.destroy");
Route::get("/products",[ProdutoController::class,"index"])->name("products.index");
Route::post("/products",[ProdutoController::class,"store"])->name("products.store");


Route::get('/', function () {
    return view('welcome');
});
