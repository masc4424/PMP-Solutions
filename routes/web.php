<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\VerticalController;
use App\Http\Controllers\HighestEducationValueController;
use App\Http\Controllers\ProjectMemberController;
use App\Http\Controllers\ProjectRoleController;
use App\Http\Controllers\OpportunityStatusController;
use App\Http\Controllers\OpportunityController;
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

Route::get('/', function () {
    return view('welcome');
});



// Route::resource('projects', ProjectsController::class);
// Route::get('projects/create', [ProjectsController::class, 'create'])->name('projects.create');

Route::group(['prefix' => 'projects'], function () {
    Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
    Route::get('/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/{project}', [ProjectsController::class, 'show'])->name('projects.show');
    Route::get('/{project}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
    Route::put('/{project}', [ProjectsController::class, 'update'])->name('projects.update');
    Route::delete('/{project}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
});

Route::group(['prefix' => 'verticals'], function () {
    Route::get('/', [VerticalController::class, 'index'])->name('verticals.index');
    Route::get('/create', [VerticalController::class, 'create'])->name('verticals.create');
    Route::post('/', [VerticalController::class, 'store'])->name('verticals.store');
    Route::get('/{vertical}', [VerticalController::class, 'show'])->name('verticals.show');
    Route::get('/{vertical}/edit', [VerticalController::class, 'edit'])->name('verticals.edit');
    Route::put('/{vertical}', [VerticalController::class, 'update'])->name('verticals.update');
    Route::delete('/{vertical}', [VerticalController::class, 'destroy'])->name('verticals.destroy');
});

Route::resource('highest-education-values', HighestEducationValueController::class);

Route::resource('opportunity_status', OpportunityStatusController::class);
Route::resource('opportunities', OpportunityController::class);
