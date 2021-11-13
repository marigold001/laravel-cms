<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend;
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




Route::group(['middleware' => [
    'auth:sanctum',
    'verified'
]], function() {
   Route::get('/dashboard', function() {
      return view('dashboard');
   })->name('dashboard');

    Route::get('/contests', function() {
        return view('admin.contests');
    })->name('contests');
});

Route::get('/', Frontend::class)->name('/');
Route::get('/contact', \App\Http\Livewire\Contact::class);

Route::get('/about', \App\Http\Livewire\About::class);

Route::get('/contest/{url}', \App\Http\Livewire\ShowContests::class);


