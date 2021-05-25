<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;


Route::get('/', [TestController::class, 'index'])->name('home');
Route::get('about', [TestController::class, 'about'])->name('about');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::view('bl' , 'welcome');

Route::get('user/{name?}' , function($name = null){
    return "hello $name" ;
});

Route::fallback(function(){
    return "404 page";
});

Route::prefix('admin')->group( function(){

    Route::get('home', [TestController::class, 'about']);
    Route::get('profile', [TestController::class, 'about']);
    Route::get('password', [TestController::class, 'about']);

});

Route::get('secret' , function(Request $request ){

    if (! $request->hasValidSignature()) {
        abort(401);
    }
    return "This is a secret message";
})->name('secret');