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
use App\Http\Controllers\KendouiController;
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
Route::group([
    'prefix' => '/',
    'as' => 'route.',
    'middleware' => ['role:admin']
], function () {
    Route::get('/index', [IndexController::class, 'getPage'])->name('index');
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
    Route::get('/kendoui_autocomplete', [KendouiController::class, 'getKendouiAutocompletePage']);
    Route::get('/kendoui_calendar', [KendouiController::class, 'getKendouiCalendar']);
    Route::get('/kendoui_colorpicker', [KendouiController::class, 'getKendouiColorPicker']);
    Route::get('/kendoui_combobox', [KendouiController::class, 'getKendouiCombobox']);
    Route::get('/kendoui_datepicker', [KendouiController::class, 'getKendouiDatepicker']);
    Route::get('/kendoui_dropdown_list', [KendouiController::class, 'getKendouiDropDownList']);
    Route::get('/kendoui_masked_input', [KendouiController::class, 'getKendouiMaskedInput']);
    Route::get('/kendoui_menu', [KendouiController::class, 'getKendouiMenu']);
    Route::get('/kendoui_multiselect', [KendouiController::class, 'getKendouiMultiSelect']);
    Route::get('/kendoui_numeric_textbox', [KendouiController::class, 'getKendouiNumericTextBox']);
    Route::get('/kendoui_panelbar', [KendouiController::class, 'getKendouiPanelBar']);
    Route::get('/kendoui_timepicker', [KendouiController::class, 'getKendouiTimePicker']);
    Route::get('/kendoui_toolbar', [KendouiController::class, 'getKendouiToolbar']);
    Route::get('/kendoui_window', [KendouiController::class, 'getKendouiWindow']);
});