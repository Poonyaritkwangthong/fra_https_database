<?php

use App\Http\Controllers\AddInformationController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\FormTest2Controller;
use App\Http\Controllers\FormTestController;
use App\Http\Controllers\InformantController;
use App\Http\Controllers\InformantScoresController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page/login', function () {
    return view('/page/login');
});

Route::prefix('admin')->group(function () {
    Route::get('/index', function () {
        return view('admin.index');
    });
    Route::resource('question', QuestionController::class);

    Route::resource('choice', ChoiceController::class);

    Route::resource('informant', InformantController::class);

    Route::resource('informant_scores', InformantScoresController::class);

    Route::resource('general_information', AddInformationController::class);
});

Route::get('/page/form_01', [FormTestController::class, 'showForm1'])->name('form_01');
Route::post('/page/form_01', [FormTestController::class, 'processForm1'])->name('form_01.process');
Route::get('/page/form_02', [FormTestController::class, 'showNextStep2'])->name('form_02');

Route::resource('/page/form_informant', FormTestController::class);

Route::resource('/page/form_test2', FormTest2Controller::class);
Route::resource('/page/form_result', FormTest2Controller::class);
