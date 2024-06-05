<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;  //bisa pakai use Auth;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('product', ProductController::class)->middleware('auth');

Route::get('/login', function () {
        //if (session()->has('email')) return redirect('/product');
        if (Auth::check()) return redirect('/product');
        return view('login');
    })->name('login');

Route::get('/logout', function () {
        //session()->flush();   //menghapus semua data session
        Auth::logout();
        return redirect('/login');
    });

Route::post('/auth', [SiteController::class, 'auth']);

