<?php

use App\Http\Controllers\sharePageController;
use App\Http\Livewire\AboutUs;
use App\Http\Livewire\Admin\EditUser;
use App\Http\Livewire\Admin\ManageArticles;
use App\Http\Livewire\Admin\ManageEvents;
use App\Http\Livewire\Admin\ManageMembers;
use App\Http\Livewire\Admin\ManageProjects;
use App\Http\Livewire\Admin\ManageReports;
use App\Http\Livewire\Admin\ManageSettings;
use App\Http\Livewire\Admin\ManageTrainings;
use App\Http\Livewire\ArticleDetails;
use App\Http\Livewire\Articles;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Events;
use App\Http\Livewire\Objectives;
use App\Http\Livewire\Reports;
use App\Http\Livewire\TrainingDetails;
use App\Http\Livewire\Trainings;

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

Route::get('/', Home::class);
Route::get('/about-us', AboutUs::class);
Route::get('/articles', Articles::class);
Route::get('/reports', Reports::class);
Route::get('/trainings', Trainings::class);
Route::get('/events', Events::class);
Route::get('/contact-us', ContactUs::class);
Route::get('/objectives', Objectives::class);
Route::get('/trainings/{training}',TrainingDetails::class);
Route::get('/articles/{article}',ArticleDetails::class);
Route::get('/test',function() {
    return view('test');
});

// Route::get('/file/download/{file}', function($file){
//     return response()->download(public_path('uploads/data/'.$file));
// })->name('download');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', ManageProjects::class)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('admin')->group( function () {
        Route::get('/articles', ManageArticles::class);
        Route::get('/events', ManageEvents::class);
        Route::get('/trainings', ManageTrainings::class);
        Route::get('/reports', ManageReports::class);
        Route::get('/members', ManageMembers::class);
        Route::get('/settings', ManageSettings::class);
        Route::get('/edit-profile', EditUser::class);
    });
});