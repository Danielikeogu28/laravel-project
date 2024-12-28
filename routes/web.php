<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController:: class, 'index'])->name('home');

Route::get('/about', [ HomeController:: class, 'about']);

Route::get('contact', [ ContactController:: class, 'index'])->name('contact.indext');
Route::post('contact',[ ContactController:: class, 'submit'])->name('contact.submit');

Route::get("file_path", [ FileUploadController::class, "index"])->name('file.path');
Route::post("file_path", [ FileUploadController::class,"upload"])->name("file.upload");
Route::get('file-download', [ FileUploadController::class,'download'])->name('file.download');

