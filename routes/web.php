<?php

use App\Http\Controllers\PdfExport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\StudentCertificateController;
use App\Http\Controllers\VisitorRequestController;
use App\Models\VisitorRequest;

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
// Route::get('/dashboard', function (){
//     return view('dashboard.dashboard');
// });

Route::group(['middleware' => 'auth'], function () {

	Route::get('/', [HomeController::class, 'home']);
    Route::get('dashboard', function () {
		return view('dashboard.dashboard');
	})->name('dashboard');

	Route::get('/logout', [SessionsController::class, 'logout']);

    //student certificates
	Route::get('/certificates/students', [StudentCertificateController::class, 'index']);
	Route::get('/certificates/students/create', [StudentCertificateController::class, 'create']);
	Route::post('/certificates/students/store', [StudentCertificateController::class, 'store']);
	Route::get('/certificates/students/{studentCertificateInfo}/edit', [StudentCertificateController::class, 'edit']);
	Route::put('/certificates/students/{studentCertificateInfo}', [StudentCertificateController::class, 'update']);
	Route::get('/certificates/students/{studentCertificateInfo}/delete', [StudentCertificateController::class, 'destroy']);
	Route::get('/certificates/students/{studentCertificateInfo}/show', [StudentCertificateController::class, 'show']);
	Route::get('/visitor/request', [VisitorRequestController::class, 'index']);

    Route::get('certificates/students/{studentCertificateInfo}/export', [PdfExport::class, 'pdf']);
});


Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', [RegisterController::class, 'create']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [SessionsController::class, 'login']);
	Route::post('/session', [SessionsController::class, 'authentication']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
	return view('session/login-session');
})->name('login');

Route::get('/visitor', [VisitorController::class, 'index']);
Route::post('/visitor/request', [VisitorRequestController::class, 'store']);

