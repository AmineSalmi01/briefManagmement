<?php

use App\Http\Controllers\apprenants_controller;
use App\Http\Controllers\assignController;
use App\Http\Controllers\Promotion_controller;
use App\Http\Controllers\GestionBrief;
use App\Http\Controllers\GestionTask;
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

Route::resource('Promotion', Promotion_controller::class);

Route::get('search', [Promotion_controller::class, 'search']);
Route::get('search/{name}', [Promotion_controller::class, 'search']);

Route::get('Appre_Form/{id}', [apprenants_controller::class, 'form_apprenants'])->name('Form_appr');
Route::post('/insert', [apprenants_controller::class, 'Add_apprenants'])->name('add_appr');

Route::get('edited/{id}', [apprenants_controller::class, 'edit_form'])->name('edit_form_appr');
Route::post('edited/{id}', [apprenants_controller::class, 'edit_apprenants'])->name('edit_apprenants');
Route::delete('delete_apprenants/{id}', [apprenants_controller::class, 'delete_appr'])->name('delete_apprenants');




Route::resource('/brief', GestionBrief::class);
Route::resource('brief.Tasks', GestionTask::class)->shallow();
Route::get('Assign/{id_brief}', [assignController::class, 'assign_view'])->name('Assign_brief');
Route::get('Attach/{id_brief}/{id_apprenant}', [assignController::class, 'assign'])->name('Attach_brief');
Route::get('Detach/{id_brief}/{id_apprenant}', [assignController::class, 'dettach'])->name('detach_brief');



