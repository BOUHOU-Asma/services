<?php
use App\Http\Controllers\links;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Service;
use App\Http\Controllers\ContactsController;

Route::get('/', [links::class,'home'])->name('tohome');
Route::get('/page1',[links::class,'page1'])->name('topage1');
Route::get('/page2',[links::class,'page2'])->name('topage2');
Route::get('/page3',[links::class,'page3'])->name('topage3');
// services

Route::get('/services',[ServicesController:: class,'index'])->name('services.index');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');
Route::get('/services/create',[ServicesController:: class,'create'])->name('services.create');




Route::get('/projets',[ProjectsController:: class,'index'])->name('projets');
Route::get('/users',[UsersController:: class,'index'])->name('users');
