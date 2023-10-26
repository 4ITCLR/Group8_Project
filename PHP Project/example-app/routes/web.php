<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Index'); // maps to Index.blade.php
});

Route::get('/login', function () {
    return view('login'); // maps to login.blade.php
});

Route::get('/register', function () {
    return view('Register'); // maps to Register.blade.php
});

Route::get('/cameras/{id}', 'CameraController@show'); // maps to camIndiv.blade.php
Route::get('/confirmation', function () {
    return view('confirm'); // maps to confirm.blade.php
});

Route::get('/receipt', function () {
    return view('Receipt'); // maps to Receipt.blade.php
});

Route::get('/customer-info', function () {
    return view('Customer_Info'); // maps to Customer_Info.blade.php
});

Route::get('/display-page', function () {
    return view('DisplayPage'); // maps to DisplayPage.blade.php
});

Route::get('/inventory', 'CameraController@index'); // maps to ViewInventory.blade.php


