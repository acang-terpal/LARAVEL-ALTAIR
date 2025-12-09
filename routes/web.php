<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MailBoxController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ScrumBoardController;
use App\Http\Controllers\SnippetsController;
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
//     return view('login');
// });

Route::get('/', [LoginController::class, 'getLoginPage']);
Route::get('/index', [IndexController::class, 'getPage']);
Route::get('/mailbox', [MailBoxController::class, 'getPage']);
Route::get('/page_invoices', [InvoiceController::class, 'getPage']);
Route::get('/page_chat', [ChatController::class, 'getPage']);
Route::get('/page_scrum_board', [ScrumBoardController::class, 'getPage']);
Route::get('/page_snippets', [SnippetsController::class, 'getPage']);