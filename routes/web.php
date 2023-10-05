<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InterviewTimeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('get-interviews', [ApplicantController::class, 'get_interviews']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        $users = User::where('role', '!=', User::SUPER_ADMIM)->count();
        return view('dashboard', compact('users'));
    })->name('dashboard');
    Route::middleware('admin')->group(function () {
        Route::resource('users', UserController::class)->except(['show']);
        Route::resource('categories', CategoryController::class)->except(['show']);
    });

    Route::middleware('booth')->group(function () {
        Route::resource('applicants', ApplicantController::class);
    });

    Route::middleware('interviews')->group(function () {
        Route::resource('interviews-time', InterviewTimeController::class)->except(['show', 'edit', 'update']);
        Route::resource('questions', QuestionController::class)->except('show');
        Route::resource('answers', AnswerController::class);

        Route::patch('accept-interview/{id}', [AnswerController::class, 'accept_interview'])->name('accept-interview');
        Route::patch('reject-interview/{id}', [AnswerController::class, 'reject_interview'])->name('reject-interview');
    });
});

require __DIR__ . '/auth.php';
