<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', [CrudController::class, 'showData']);
Route::get('/add-user', [CrudController::class, 'addUser']);
// get form data routes
Route::post('/add-user', [CrudController::class, 'storeData']);
Route::get('/edit-data/{id}', [CrudController::class, 'editData'])->name('student.edit');
// delete data 
Route::get('/delete/{id}', [CrudController::class, 'delete'])->name('student.delete');
//update data
Route::post('/update-data/{id}', [CrudController::class, 'updateData']);