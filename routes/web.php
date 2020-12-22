<?php
use  App\Http\Controllers\PostsController ;
use  App\Http\Controllers\TagsController ;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts',[PostsController::class ,'index']) ;
Route::get('/posts/show/{id}',[PostsController::class ,'show'])->where('ID','[0-9]+');
Route::get('/posts/latset/{num}',[PostsController::class ,'latset']);
//search
Route::get('/posts/search/{keyword}',[PostsController::class ,'search']);
Route::get('/tags',[TagsController::class ,'tags']) ;
//create
Route::get('/posts/create',[PostsController::class ,'create']) ;
Route::post('/posts/store',[PostsController::class ,'store']) ;
//edit and ubdate
Route::get('/posts/edit/{id}',[PostsController::class ,'edit']) ;
Route::post('/posts/ubdate/{id}',[PostsController::class ,'ubdate']) ;
//delete
Route::get('/posts/delete/{id}',[PostsController::class ,'delete']) ;
