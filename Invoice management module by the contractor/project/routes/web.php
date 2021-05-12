<?php

use App\Http\Controllers\formController;
use App\Http\Controllers\ContractorsController;
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
   return view('index');
});
Route::get('/faktury', function () {
    return view('invoices.list_invoices');
});
Route::get('/faktury', [formController::class, 'index'])->name('invoices.index');

Route::get('/faktury/dodaj', [formController::class, 'create'])->name('invoices.create');
Route::post('/faktury/zapisz', [formController::class, 'store'])->name('invoices.store');
Route::get('/faktury/edytuj/{id}', [formController::class, 'edit'])->name('invoices.edit_invoices');
Route::put('/faktury/zmien/{id}', [formController::class, 'update'])->name('invoices.update');
Route::delete('/faktury/usun/{id}', [formController::class, 'delete'])->name('invoices.delete');

Route::resource('klienci', ContractorsController::class, ['names' => 'contractors']);



