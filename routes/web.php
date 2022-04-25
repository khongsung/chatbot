<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ChatbotController;
use App\Http\Controllers\Backend\TelegramBotController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/chatbot', [ChatbotController::class, 'index']);

Route::get('/updated-activity', [TelegramBotController::class, 'updatedActivity']);
Route::get('/webhook', [TelegramBotController::class, 'webhook']);

Route::get('/contact', [TelegramBotController::class, 'contactForm']);
Route::post('/send-message', [TelegramBotController::class, 'sendMessage']);

