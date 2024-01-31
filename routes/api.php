<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* INTERNO */
Route::get("/usuarios", "App\Http\Controllers\UsuariosController@index");
Route::get("/usuario/{id}", "App\Http\Controllers\UsuariosController@show");

//listado de pendientes general
    Route::get("/cab_docs", "App\Http\Controllers\CabDocsController@index");



/* LOGIN */
Route::post("/login", "App\Http\Controllers\UsuariosController@login");

/* REGISTRO */
Route::post("/registrar", "App\Http\Controllers\UsuariosController@store");

/* REGISTRO DE LISTA NUEVA */
Route::post("/reg_cab_docs", "App\Http\Controllers\CabDocsController@reg_cab_docs");

/* ELIMINACION DE LISTA,RELACION */
/* FALTA EL MOVIMIENTO */
Route::delete("/del_reg_cab_docs/{id}", "App\Http\Controllers\CabDocsController@del_reg_cab_docs");

/* LISTADO DE TODOS LOS MOVIMIENTOS QUE ESTAN EN EL DOCUMENTO */
Route::get("/lst_mov_docs/{id_cab_docs}", "App\Http\Controllers\MovDocsController@lst_mov_docs");



/* LISTADO DE PENDIENTES POR USUARIO*/
Route::get("/lst_cab_docs/{id_user}", "App\Http\Controllers\RelUserCabdController@lst_cab_docs");


/* CARGA DE MOVIMIENTOS PENDIENTES A LA LISTA*/
Route::post("/add_movpend", "App\Http\Controllers\MovDocsController@add_movpend");

/* cambia el estado de la tarea */
Route::put("/chk_mov_docs/{id_mov_docs}", "App\Http\Controllers\MovDocsController@chk_mov_docs");
