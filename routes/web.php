<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController; //ini harusnya dikasih atas ya biar memudahkan screnshot tak pisah bawah
Route::get("/todo", [TodoController::class, "index"]);

Route::get('/', function () {
    return view('welcome');
});

route::get("/hello", function () {
    echo "Halo";
});

route::get("/hello/{nama}", function($nama)  {
    echo "halo, {$nama}, Anda sedang mempelajari laravel";
});


Route::get("hello", "App\Http\Controllers\HelloWorldController@index");

Route::get("hello", [HelloWorldController::class, "index"]);

Route::get("hello/{nama}", [HelloWorldController::class, "perkenalan"]);

Route::delete("/todo/{id}", [TodoController::class, "destroy"]);

Route::get("/todo/create", [TodoController::class, "create"])->name("todo.create");

Route::post("/todo", [TodoController::class, "store"])->name("todo.store");

Route::get("/todo/{id}", [TodoController::class, "edit"]);

Route::put("/todo/{id}", [TodoController::class, "update"])->name("todo.update");