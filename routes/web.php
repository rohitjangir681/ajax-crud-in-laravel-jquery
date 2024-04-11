<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
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


// Route::resource('employee', EmployeeController::class);

Route::get('employee', [EmployeeController::class, 'index'])->name('employee');
Route::post('employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/getAllEmployee', [EmployeeController::class, 'getAllEmployess'])->name('employee.getallemployee');
Route::get('employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('employee/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
Route::get('employee/show/{id}', [EmployeeController::class, 'show'])->name('employee.show');

Route::get('department/index', [DepartmentController::class, 'index'])->name('department.index');
Route::post('department/store', [DepartmentController::class, 'store'])->name('department.store');
