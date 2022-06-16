<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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

//Route::get('/', 'App\Http\Controllers\postController@index');
Route::get('/',[postController::class,'index'])->name('welcome');
Route::get('/posts/create',[postController::class,'create'])->name('posts.create');
Route::post('/posts/create',[postController::class,'store'])->name('posts.store');
Route::get('/register',[postController::class,'register']);
Route::get('/posts/{id}',[postController::class,'show'])->name('posts.show');
Route::get('/contact',[postController::class,'contact'])->name('contact');

/*
Route::get('/posts' , function(){
     return response()->json([
          'titre' => 'mon super titre',
          'description' => 'mon super description'
     ]);
});

Route::get('articles',function(){
      return view('articles');
});*/
