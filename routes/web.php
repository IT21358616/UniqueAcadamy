<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('/exam', function () {
//     return view('layouts.app');
// });
//Route::resource('employee', EmployeeController::class)->except('destroy');

Route::get('/', [EmployeeController::class, 'create']);
Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/add', [EmployeeController::class, 'create'])->name('employee.create');
Route::get('employee/view', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('employee/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::post('employee/status', [EmployeeController::class, 'status'])->name('employee.status');
Route::post('employee/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('employee/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/', [StudentController::class, 'create']);
Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::get('student/add', [StudentController::class, 'create'])->name('student.create');
Route::get('student/view/{id}', [StudentController::class, 'show'])->name('student.show');
Route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('student/store', [StudentController::class, 'store'])->name('student.store');
Route::post('student/status', [StudentController::class, 'status'])->name('student.status');
Route::post('student/update', [StudentController::class, 'update'])->name('student.update');
Route::get('student/destroy', [StudentController::class, 'destroy'])->name('student.destroy');












