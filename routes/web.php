<?php

use App\Http\Controllers\AddInformationController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\InformantController;
use App\Http\Controllers\InformantScoresController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\EvaluationFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page/login', function () {
    return view('/page/login');
});

Route::prefix('admin')->group(function () {
    Route::get('/index', [ChartController::class, 'index']); // เรียกใช้เมธอด index ใน ChartController

    Route::resource('question', QuestionController::class);

    Route::resource('choice', ChoiceController::class);

    Route::resource('informant', InformantController::class);

    Route::resource('informant_scores', InformantScoresController::class);

    Route::resource('general_information', AddInformationController::class);
});


Route::resource('/page/evaluation_form', EvaluationFormController::class);
Route::resource('/page/form_result', EvaluationFormController::class);
