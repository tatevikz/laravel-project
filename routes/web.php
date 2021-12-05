<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

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
Route::get('/index', [AuthController::class, 'index']); //main page

Route::get('/register', [AuthController::class, 'signup'])->name('register'); //to register
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration'); //add user to Users table	
Route::get('/login', [AuthController::class, 'signin'])->name('login'); //to log in
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom'); //in case of login - redirect to blog page
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout'); //to log out

Route::get('/blog/index', [BlogController::class, 'index']); //shows all posts
Route::get('/blog/create-post', [BlogController::class, 'create'])->name('create'); //shows create post form
Route::post('/blog/store-post', [BlogController::class, 'store'])->name('blog.store'); //saves the created post to the databse
Route::get('/blog/{blog}', [BlogController::class, 'show']); //show one post
Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('destroy'); //deletes post from the database
Route::get('/blog/{blog}/edit', [BlogController::class, 'edit']); //shows edit post form
Route::put('/blog/{blog}/edit', [BlogController::class, 'update']) -> name('update'); //commits edited post to the database 
