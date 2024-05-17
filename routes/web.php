<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TagController;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

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

    $questions = Question::all();

    return view('home', compact('questions'));
})->name('home');

// Route::get('question/{question}', function () {
//     return view('questions.show', compact('question'));
// })->name('questions.show');


// Route::get('tags', function (){
//     return view('tags.index');
// })->name('tags.index');

Route::get('tags', [TagController::class, 'index'])->name('tags.index');

Route::get('tags/{tag}', [TagController::class, 'show'])->name('tags.show');

Route::resource('questions', QuestionController::class)->names('questions');

Route::post('/answer', [AnswerController::class, 'store'])->name('answer.create');
Route::get('/answer/{answer}', [AnswerController::class, 'update'])->name('answer.update');

// Route::get('create-post', [QuestionController::class, 'index'])->name('posts.create');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
