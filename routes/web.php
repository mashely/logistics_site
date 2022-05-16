<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\getEstimatedPriceController;

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
    return view('index');
});


/*
|--------------------------------------------------------
*/
Route::post('/getEstimatedPrice', [App\Http\Controllers\getEstimatedPriceController::class,'index']);

// about
Route::get('/about', function () {
    return view('layouts.about');
});


// blog
Route::get('/blog', function () {
    return view('layouts.blog');
});




// contact
Route::get('/contact', function () {
    return view('layouts.contact');
});





// service
Route::get('/services', function () {
    return view('layouts.service');
});


//blog details
Route::get('/blogdetails', function () {
    return view('layouts.blogdetails');
});