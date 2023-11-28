<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [Controller::class, 'index']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/category', [PostController::class, 'categories']);
Route::get('/post/category/{category:slug}', [PostController::class, 'showCategory']);
Route::get('/contact', [ContactController::class, 'index']);

// route comment
Route::post('/comment', [CommentController::class, 'store']);

// Route Contact sendMail
Route::post('contact_mail', [CommentController::class, 'contact_mail_send']);

// Route Login AND register
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'storeUser']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/category', DashboardCategoryController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('admin')->except('show',  'create', 'store');

// route myaccount
Route::get('dashboard/my-account/{user:username}', [MyAccountController::class, 'show'])->middleware('auth');
Route::get('dashboard/my-account/{user:username}/edit', [MyAccountController::class, 'edit']);
Route::post('dashboard/my-account/{user:username}', [MyAccountController::class, 'update']);
