<?php

use \Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

Route::get('/', [PageController::class,'index']);
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/world', function () {
    return 'World ';
});

Route::get('/about', [PageController::class, 'about']);

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/user/profile', function() {
    //
    })->name('profile');

Route::get('/hello', [WelcomeController::class,'hello']);

Route::resource('photos', PhotoController::class)-> only([
    'index','show'
]);

Route::resource('photos', PhotoController::class)-> except([
    'create','store','update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class,'greeting']);
