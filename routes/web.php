<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//go to create data form
// Route::controller(DataController::class)->group(function(){

// Route::get('/data',[DataController::class, 'create']);
//Route::post('/stu_data', 'store');
// });


//create data
Route::get('/data', [DataController::class, 'create'])->name('tables.create');
Route::post('/tables', [DataController::class, 'store']);

//read data
Route::get('/tables', [DataController::class, 'index'])->name('tables');

//delete data
Route::delete('/removeData/{id}', [DataController::class, 'destroy']);

//update data
Route::get('/tables/{id}/edit', [DataController::class, 'edit'])->name('tables.update');
Route::put('/tables/{id}', [DataController::class, 'update']);


require __DIR__ . '/auth.php';
