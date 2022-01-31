<?php

use App\Http\Controllers\FileUploadController;
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
Route::get('/files',[FileUploadController::class,'FileUpload'])->name('files.upload');
Route::get('/files/create',[FileUploadController::class,'FileCreate'])->name('files.Create');
Route::post('/file/store',[FileUploadController::class,'FileStore'])->name('file.store');
Route::post('/file/delete/{id}',[FileUploadController::class,'FileDelete'])->name('file.delete');


