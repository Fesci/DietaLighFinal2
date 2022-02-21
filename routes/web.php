<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OpcionController;

//index
Route::get('/', HomeController::class)->name('home');
//menu index
Route::get('menu', [MenuController::class, 'index'])->name("menu.index");
//opciones galeria
Route::get('opciones',[OpcionController::class, 'index'])->name('opciones.index');
//seccion contacto
Route::get('contacto',  [ContactoController::class, 'index'])->name('contacto.index');    
//formulario contacto           
Route::post('contacto',[ContactoController::class,'store'])->name('contacto.store');


//Panel
Route::group(['middleware' => 'auth','prefix' => 'panel'],function (){

    Route::get('/',[MenuController::class, 'show'])->name('panel.index');

    Route::get("/create", [MenuController::class, 'create'])->name("panel.menu.create");
    Route::post("/store", [MenuController::class, 'store'])->name("panel.menu.store");

    Route::get("{menu}/edit", [MenuController::class, 'edit'])->name("panel.menu.edit");

    Route::put("{menu}/update", [MenuController::class, 'update'])->name("panel.menu.update");

    Route::delete("{menu}/delete", [MenuController::class, 'destroy'])->name("panel.menu.destroy");

    //opciones panel
    Route::get('opciones',[OpcionController::class, 'show'])->name('panel.opciones.index');
    Route::get("opciones/create", [OpcionController::class, 'create'])->name("panel.opciones.create");
    Route::post("opciones/store", [OpcionController::class, 'store'])->name("panel.opciones.store");

    Route::get("opciones/{opcion}/edit", [OpcionController::class, 'edit'])->name("panel.opciones.edit");

    Route::put("opciones/{opcion}/update", [OpcionController::class, 'update'])->name("panel.opciones.update");

    Route::delete("opciones/{opcion}/delete", [OpcionController::class, 'destroy'])->name("panel.opciones.destroy");
});

require __DIR__.'/auth.php';