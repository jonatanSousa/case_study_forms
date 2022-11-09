<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FormsQuestionsController;
use App\Http\Controllers\FormQuestionsAnswersController;

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

Route::resource('/forms', FormsController::class);
Route::resource('/forms-questions', FormsQuestionsController::class);
Route::resource('/forms-questions-answers', FormQuestionsAnswersController::class);


