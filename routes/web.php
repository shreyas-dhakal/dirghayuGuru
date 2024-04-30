<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Put all these routes inside the Route::middleware('auth') to enable authorize access

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

Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
Route::get('/slider/{slider}/edit', [SliderController::class, 'edit'])->name('slider.edit');
Route::put('/slider/{slider}/update', [SliderController::class, 'update'])->name('slider.update');
Route::delete('/slider/{slider}/delete', [SliderController::class, 'delete'])->name('slider.delete');

Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
Route::post('/testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
Route::get('/testimonial/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
Route::put('/testimonial/{testimonial}/update', [TestimonialController::class, 'update'])->name('testimonial.update');
Route::delete('/testimonial/{testimonial}/delete', [TestimonialController::class, 'delete'])->name('testimonial.delete');

Route::get('/sitesetting', [SiteSettingController::class, 'index'])->name('sitesetting.index');
Route::get('/sitesetting/create', [SiteSettingController::class, 'create'])->name('sitesetting.create');
Route::post('/sitesetting', [SiteSettingController::class, 'store'])->name('sitesetting.store');
Route::get('/sitesetting/{sitesetting}/edit', [SiteSettingController::class, 'edit'])->name('sitesetting.edit');
Route::put('/sitesetting/{sitesetting}/update', [SiteSettingController::class, 'update'])->name('sitesetting.update');
Route::delete('/sitesetting/{sitesetting}/delete', [SiteSettingController::class, 'delete'])->name('sitesetting.delete');

Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');
Route::post('/appointment',[AppointmentController::class,'store'])->name('appointment.store');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');

Route::get('/doctors/{department}', [DoctorController::class, 'getDoctorsByDepartment']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}/delete', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
