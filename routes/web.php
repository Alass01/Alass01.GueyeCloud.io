<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;

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

Route::get('/candidat', [App\Http\Controllers\CandidatController::class, 'liste_candidat' ]);
Route::get('/ajouter', [App\Http\Controllers\CandidatController::class, 'ajouter_candidat' ]);
Route::post('/ajouter/traitement', [App\Http\Controllers\CandidatController::class, 'ajouter_candidat_traitement' ]);

Route::post('/delete/candidat/{candidat_id}', [App\Http\Controllers\CandidatController::class, 'delete_candidat' ])->name('delete_candidat');
