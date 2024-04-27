<?php
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PackageController;
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

Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('/doctor', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/doctor/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::put('/doctor/{doctor}/update', [DoctorController::class, 'update'])->name('doctor.update');
Route::delete('/doctor/{doctor}/delete', [DoctorController::class, 'delete'])->name('doctor.delete');

Route::get('/package', [PackageController::class, 'index'])->name('package.index');
Route::get('/package/create', [PackageController::class, 'create'])->name('package.create');
Route::post('/package', [PackageController::class, 'store'])->name('package.store');
Route::get('/package/{package}/edit', [PackageController::class, 'edit'])->name('package.edit');
Route::put('/package/{package}/update', [PackageController::class, 'update'])->name('package.update');
Route::delete('/package/{package}/delete', [PackageController::class, 'delete'])->name('package.delete');