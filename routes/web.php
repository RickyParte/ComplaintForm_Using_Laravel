<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
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

Route::post('submitcomplaint',[FeedbackController::class,'feedbackData']);
Route::post('viewcomplaint',[FeedbackController::class,'getData']);

// Route::view('index','welcome');
Route::view('success','success');
Route::view('fail','fail');

