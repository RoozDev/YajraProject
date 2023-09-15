<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(StudentController::class)->group(function (){
    Route::get('/','welcome');
    Route::get('/students','index')->name('students');
    Route::get('/students/{id}','EditStudentModal')->name('students.modal.edit');
    Route::get('/student','getStudents')->name('student.index');

    Route::get('/student/create','create')->name('student.create');
    Route::post('/student/store','store')->name('student.store');

    Route::get('/student/edit/{id}','edit')->name('student.edit');
    Route::post('/student/update','update')->name('student.update');

    Route::get('/student/show/{id}','ShowStudentModal')->name('student.show');

    Route::get('/student/delete/{id}','destroy')->name('student.delete');

});
require __DIR__.'/auth.php';
