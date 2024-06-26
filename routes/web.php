<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/form', [StudyController::class, 'index'])->name('form');


Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects');
Route::post('/subjects', [SubjectController::class, 'store']);

//cadastro e edição
Route::get('/daily-report/{date}', [StudyController::class, 'dailyReport']);
Route::post('/save-study-record', [StudyController::class, 'save']);
Route::post('/set-daily-goal', [GoalController::class, 'setGoal']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
