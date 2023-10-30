<?php

use App\Models\contens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContensController;
use Illuminate\Mail\Mailables\Content;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 

Route::get('/news', function () {
    return view('news',[
        "title"=>"home"
    ]);
});

Route::get('news/{slug}', function($slug) { 
    
    return view("news",[
        "title" => "home",
        "posts" => contens::find($slug)
        ] );
    });
    
Route::resource('/content', ContensController::class);

