<?php
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/department/{department}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department/{department}/update', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{department}/delete', [DepartmentController::class, 'delete'])->name('department.delete');