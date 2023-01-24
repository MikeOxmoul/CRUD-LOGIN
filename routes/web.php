<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', [ProductController::class, 'adminindex'])->name('admin');
    Route::get('/admin/create', [ProductController::class, 'create'])->name('create');
    Route::get('/show/{toode}', [ProductController::class, 'show'])->name('show');
    Route::get('admin/edit/{toode}', [ProductController::class, 'edit'])->name('edit');
    Route::get('admin/destroy/{toode}', [ProductController::class, 'destroy'])->name('destroy');
    Route::post('admin/create/store', [ProductController::class, 'store'])->name('store');
    Route::post('admin/edit/{toode}/update', [ProductController::class, 'update'])->name('update');

});

require __DIR__.'/auth.php';
