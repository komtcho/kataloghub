<?php

use App\Http\Controllers\WebSite\StoreController;
use App\Http\Livewire\Admin\Stores\StoresCreate;
use App\Http\Livewire\Admin\Stores\StoresList;
use App\Http\Livewire\Admin\Stores\StoresUpdate;
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



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    });

    Route::prefix('stores')->group(function () {
        Route::get('/', StoresList::class)->name('admin.stores');
        Route::get('/create', StoresCreate::class)->name('admin.stores.create');
        Route::get('/{store}/update', StoresUpdate::class)->name('admin.stores.update');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
