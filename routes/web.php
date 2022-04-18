<?php

use Illuminate\Support\Facades\Route;
// appel du controller
use App\Http\Controllers\users;
use App\Http\Controllers\usersController;
use App\Http\Controllers\HtmlFormController;

//appel de la classe userRestaurant

use App\Http\Controllers\UsersRestaurant;

// appel de la classe eleveController
use App\Http\Controllers\EleveController;

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
    return view('/welcome');
});

// pour les routing, en premier il y'a l'URL, en second il y'a la page. URL, Page
/* Route::get('/about',function () {
    return view('/about');
});
*/
//route pour about page
Route::view('about', 'about',['name' =>'Momo']);

//route pour contact page
Route::view('contact', 'contact');

Route::view('hello','hello');

Route::view('welcome','welcome');

// controller lesson 7
// Route::get("users/{user}", [Users::class, 'index']);
// view lesson 8
//Route::view('users', 'users');
/* 
Route::get('/users{momo}', function () {
    return view('/users');
});
*/

/*
Route::get('/users/{name}', function ($name){
    return view('/users', ['name' => $name]);
});
*/
Route::get('/users',[usersController::class, 'loadView']);
//Lesson 9: header component
Route::view('header','header');

Route::POST('login',[HtmlFormController::class, 'getData']);
Route::view('me', 'login');

// route pour le middlware. Le middleware permet de mettre des restrictions comme le login ou l'age pour ne pas acceder à certaines pages sit tu n'es pas logué ou tu n'as pas un certain age
Route::view('noaccess', 'noaccess');

// database configuration an fetch data
route::get('usersRestaurant', [UsersRestaurant::class, 'index']);

// Model
route::get('eleves', [EleveController::class, 'getData']);