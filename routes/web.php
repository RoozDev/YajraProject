<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
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

    Route::get('/student/delete/{id}','destroy')->name('student.delete');

});
require __DIR__.'/auth.php';
