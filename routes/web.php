<?php

use App\Http\Controllers\Query;
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

Route::controller(Query::class)->group(function(){
    Route::get('posts','index')->name('posts');
    Route::get('post/create','create')->name('post.create');
    Route::post('post/insert','store')->name('post.insert');
    Route::get('post/edit/{id}','edit')->name('post.edit');
    Route::post('post/update/{id}','update')->name('post.update');
    Route::get('post/delete/{id}','destroy')->name('post.delete');
    Route::delete('post/delete/all','destroy_all')->name('post.delete.all');
    Route::get('post/delete/all/data','destroy_all_data')->name('post.delete.all.data');
});