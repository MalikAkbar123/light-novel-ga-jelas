<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    
});
Route::get('login', [AuthController::class, 'login'])->name('login');   
Route::post('login', [AuthController::class, 'auth']);   
Route::get('register', [AuthController::class, 'register']);  
Route::post('register', [AuthController::class, 'regis']);
});

Route::middleware('auth')->group(function(){
    Route::get('profile', [UserController::class, 'profile'])->middleware( 'only_client');   
    Route::get('dashboard', [AdminController::class, 'index'])->middleware( 'only_admin');
   //user
    Route::get('users', [AdminController::class, 'users'])->middleware( 'only_admin'); 
    Route::get('users-registered', [AdminController::class, 'usersRegistered']); 
    Route::get('user-detail/{slug}', [AdminController::class, 'usersDetail']);
    Route::get('user-approve/{slug}', [AdminController::class, 'usersApprove']);
    Route::get('user-ban/{slug}', [AdminController::class, 'usersBan']);
    Route::get('user-banned', [AdminController::class, 'usersBanned']);
    Route::get('user-restore/{slug}', [AdminController::class, 'usersRestore']); 
    //category
    Route::get('category', [AdminController::class, 'category'])->middleware( 'only_admin'); 
    Route::get('category-add', [AdminController::class, 'categoryAdd'])->middleware( 'only_admin');   
    Route::post('category-add', [AdminController::class, 'categoryStore'])->middleware( 'only_admin'); 
    Route::get('category-edit/{slug}', [AdminController::class, 'categoryEdit'])->middleware( 'only_admin');   
    Route::put('category-edit/{slug}', [AdminController::class, 'categoryUpdate'])->middleware( 'only_admin');   
    Route::get('category-delete/{slug}', [AdminController::class, 'categoryDestroy']);
    //books
    Route::get('books', [AdminController::class, 'books'])->middleware( 'only_admin'); 
    Route::get('books-add', [AdminController::class, 'booksAdd']); 
    Route::post('books-add', [AdminController::class, 'booksStore']);
    Route::get('books-edit/{slug}', [AdminController::class, 'booksEdit']);
    Route::put('books-edit/{slug}', [AdminController::class, 'booksUpdate']);
    Route::get('books-delete/{slug}', [AdminController::class, 'booksDestroy']);
    Route::get('rents', [AdminController::class, 'rents'])->middleware( 'only_admin');  
    Route::get('logout', [AuthController::class, 'logout']);
});

