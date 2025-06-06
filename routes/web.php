<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/cobareact', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [UserController::class, 'index'])->name('homepage');
Route::get('/user/forms/formOne', [UserController::class, 'userFormOne'])->name('formOne');
Route::get('/admin/kedaiKopi', [UserController::class, 'adminKedaiKopi'])->name('kedaiKopi');

Route::get('/about', function(){
    return view('admin.tables.kedaiKopi');
});

