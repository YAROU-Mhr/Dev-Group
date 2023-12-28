<?php

use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

    // Route::middleware([
    //     'auth:sanctum',
    //     config('jetstream.auth_session'),
    //     'verified',
    // ])->group(function () {
    //     Route::get('/dashboard', function () {
    //         return view('dashboard');
    //     })->name('dashboard');
    // });


Route::get('/',[FrontController::class,'home'])->name('home');

Route::get('/about',[FrontController::class,'about'])->name('about');

Route::get('/blog',[FrontController::class,'blog'])->name('blog');

Route::get('/blog-details',[FrontController::class,'blogDetails'])->name('blog-details');

Route::get('/contact',[FrontController::class,'contact'])->name('contact');

Route::get('/feature',[FrontController::class,'feature'])->name('feature');

Route::get('/price',[FrontController::class,'price'])->name('price');

Route::get('/quote',[FrontController::class,'quote'])->name('quote');

Route::get('/services',[FrontController::class,'services'])->name('services');

Route::get('/mhr-dev-team',[FrontController::class,'mhrDevTeam'])->name('mhr-dev-team');

Route::get('/testimonial',[FrontController::class,'testimonial'])->name('testimonial');


