<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;

Route::get('/', function () {
    return view('main');
});
Route::get('/shop', 'App\Http\Controllers\Controller@shop');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/card', function () {
    return view('card');
});
Route::post('/action', 'App\Http\Controllers\Controller@submit');


Route::get('/test', function (){
    $users = User::all();
    $roles = Role::all();
    return view('test', ['users' => $users, 'roles' => $roles]);
});
