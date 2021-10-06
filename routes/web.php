<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JsonController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/regular_expression', function () {
    return view('regular_expressions');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('send-mail', [MailController::class, 'sendMail']);

Route::get('pdf-index', [PdfController::class, 'index']);

Route::get('pdf-download', [PdfController::class, 'download']);

Route::get('/upload', [UploadController::class, 'uploadForm']);

Route::get('/all-user', [UserController::class, 'index'])->name('index');

 Route::get('/json-file-save',  [JsonController::class, 'jsonFileSave'])->name('save-json');

 Route::get('/json-file-read/{id}',  [JsonController::class, 'readJson'])->name('read-json');

 Route::get('/user-edit/{id}',  [JsonController::class, 'edit'])->name('user-edit');

 Route::post('/update/{id}',  [JsonController::class, 'update'])->name('user-update');
