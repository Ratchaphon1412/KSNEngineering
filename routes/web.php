<?php

use App\Http\Controllers\RepairController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


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

Route::middleware('multirole:Admin')->group(function () {
    Route::get('/admin', function () {
        return Inertia::render('adminPage');
    })->name('admin');
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
});

Route::get('/product', function () {
    return Inertia::render('ProductPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name("product");

Route::get('/service-page', function () {
    return Inertia::render('ServicePage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name("service-page");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {



        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/repair', function () {
    return Inertia::render('Repair');
})->name('repair');

Route::post('/report/{report}', [RepairController::class, 'store'])->name('createReport');
