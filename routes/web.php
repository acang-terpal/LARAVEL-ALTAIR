<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MailBoxController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ScrumBoardController;
use App\Http\Controllers\SnippetsController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LayoutController;
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

Route::get('/', [LoginController::class, 'getLoginPage'])->name('getLoginPage');
Route::post('/doLogin', [LoginController::class, 'doLogin'])->name('doLogin');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/index', [IndexController::class, 'getPage'])->name('index');
});

Route::get('/mailbox', [MailBoxController::class, 'getPage']);
Route::get('/page_invoices', [InvoiceController::class, 'getPage']);
Route::get('/page_chat', [ChatController::class, 'getPage']);
Route::get('/page_scrum_board', [ScrumBoardController::class, 'getPage']);
Route::get('/page_snippets', [SnippetsController::class, 'getPage']);
Route::get('/page_user_profile', [UserProfileController::class, 'getPage']);
Route::get('/page_user_edit', [UserProfileController::class, 'getUserEditPage']);
Route::get('/forms_regular', [FormController::class, 'getFormRegularPage']);
Route::get('/forms_advanced', [FormController::class, 'getFormAdvancePage']);
Route::get('/forms_dynamic', [FormController::class, 'getFormDynamicPage']);
Route::get('/forms_file_input', [FormController::class, 'getFormFileinputPage']);
Route::get('/forms_file_upload', [FormController::class, 'getFormFileUploadPage']);
Route::get('/forms_validation', [FormController::class, 'getFormValidationPage']);
Route::get('/forms_wizard', [FormController::class, 'getFormWizardPage']);
Route::get('/forms_wysiwyg_ckeditor', [FormController::class, 'getWysiwygCkeditorPage']);
Route::get('/forms_wysiwyg_inline', [FormController::class, 'getWysiwygInlinePage']);
Route::get('/forms_wysiwyg_tinymce', [FormController::class, 'getWysiwygTinymcePage']);
Route::get('/layout_top_menu', [LayoutController::class, 'getTopMenuPage']);
Route::get('/layout_header_full', [LayoutController::class, 'getHeaderFullPage']);