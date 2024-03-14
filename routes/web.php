<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\BloodCenterController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('index');
// });

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/bloodCenters', [PagesController::class, 'bloodCenters']);

Route::get('/donors', [PagesController::class, 'donors']);

Route::get('/loginPage', [PagesController::class, 'loginPage']);

Route::get('/registerPage', [PagesController::class, 'registerPage']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('login', [CustomAuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomAuthController::class, 'login'])->name('login.post');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::get('forgot-password', [CustomAuthController::class, 'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password', [CustomAuthController::class, 'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}', [CustomAuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [CustomAuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout.get');
Route::post('logout', [CustomAuthController::class, 'logout'])->name('logout.post');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registration/success', function () {
    return view('registration.success');
})->name('registration.success');

Auth::routes();


Route::get('/verify-email', 'AuthController@verifyEmail');

Route::post('/donor/register', [DonorController::class, 'register'])->name('donor.register');
Route::post('/blood-center/register', [BloodCenterController::class, 'register'])->name('center.register');
