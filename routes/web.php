<?php

use App\Http\Controllers\ProposalsController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class)->name('welcome.get./');

Route::get('/view/proposals', [ProposalsController::class, 'createProposalForm'])->name('proposals.get.view');

Route::post('/new/proposals', [ProposalsController::class, 'createProposalData'])->name('proposals.post.new');

Route::get('/view/proposals/list', [ProposalsController::class, 'readAllProposals'])->name('proposals.get.view_list');

Route::get('/view/proposal/{id}', [ProposalsController::class, 'readProposalById'])->name('proposals.get.view_by_id');

Route::get('/edit/proposal/{id}', [ProposalsController::class, 'updateProposalForm'])->name('proposals.get.edit_form');

Route::put('/edit/proposal/{id}', [ProposalsController::class, 'updateProposalData'])->name('proposals.put.edit');

Route::delete('/delete/proposal/{id}', [ProposalsController::class, 'deleteProposalData'])->name('proposals.delete.id');