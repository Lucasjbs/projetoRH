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

Route::get('/', WelcomeController::class)->name('welcome.get');

Route::get('view/proposals', [ProposalsController::class, 'viewProposalForm'])->name('proposals.get.view');

Route::post('new/proposals', [ProposalsController::class, 'insertProposalData'])->name('proposals.post.new');

Route::get('view/proposals/list', [ProposalsController::class, 'listAllProposals'])->name('list.get.view.proposals');

Route::get('view/proposal/{id}', [ProposalsController::class, 'listProposalById'])->name('listId.get.view.proposal.{id}');

Route::get('view/proposal/edit/{id}', [ProposalsController::class, 'editProposalForm'])->name('edit.get.view.proposal.{id}');

Route::put('edit/proposal/{id}', [ProposalsController::class, 'updateProposalData'])->name('edit.put.proposal.{id}');

Route::delete('delete/proposal/{id}', [ProposalsController::class, 'deleteProposalData'])->name('list.delete.proposal.{id}');