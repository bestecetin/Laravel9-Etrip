<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return "Hello World";
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');
Route::post('/save', [HomeController::class, 'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//****** Admin Panel Routes****
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');
//****** Category Panel Routes ****
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [AdminCategoryController::class, 'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_update');
Route::get('/admin/category/destroy/{id}', [AdminCategoryController::class, 'destroy'])->name('admin_category_destroy');
Route::get('/admin/category/show/{id}', [AdminCategoryController::class, 'show'])->name('admin_category_show');


