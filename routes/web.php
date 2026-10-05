<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/enquiry', [EnquiryController::class, 'store'])
    ->name('enquiry.store');


// Admin

Route::get('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'authenticate'])
    ->name('admin.login.submit');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/admin/enquiries', [EnquiryController::class, 'index'])
    ->name('admin.enquiries');

Route::get('/admin/enquiries/{id}/edit', [EnquiryController::class, 'edit'])
    ->name('admin.enquiries.edit');

Route::put('/admin/enquiries/{id}', [EnquiryController::class, 'update'])
    ->name('admin.enquiries.update');

Route::delete('/admin/enquiries/{id}', [EnquiryController::class, 'destroy'])
    ->name('admin.enquiries.destroy');

Route::get('/admin/enquiries/export', [EnquiryController::class, 'export'])
    ->name('admin.enquiries.export');

Route::post('/admin/logout', [AdminController::class, 'logout'])
    ->name('admin.logout');

Route::get('/admin/logout', function () {
    session()->forget('admin_id');

    return redirect()->route('admin.login');
})->name('admin.logout');

// Project Management
Route::get('/admin/projects', [ProjectController::class, 'index'])
    ->name('admin.projects');

Route::get('/admin/projects/create', [ProjectController::class, 'create'])
    ->name('admin.projects.create');

Route::post('/admin/projects', [ProjectController::class, 'store'])
    ->name('admin.projects.store');

Route::delete('/admin/projects/{id}', [ProjectController::class, 'destroy'])
    ->name('admin.projects.delete');