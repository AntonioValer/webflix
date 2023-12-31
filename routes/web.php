<?php

use App\Http\Controllers\aProposController;
use App\Http\Controllers\FiorellaFriendController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/fiorella/{friend?}', [FiorellaFriendController::class, 'show']);

Route::get('/a-propos', [aProposController::class, 'person']);

Route::get('/a-propos/{user}', [aProposController::class, 'aproposPerson']); 