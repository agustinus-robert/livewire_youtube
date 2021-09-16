<?php

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

Route::get('/wire', [\App\Http\Livewire\Episode1\Wire::class,'__invoke']);
Route::get('/actions', [\App\Http\Livewire\Episode2\Actions::class,'__invoke']);
Route::get('/listen',[\App\Http\Livewire\Episode3\Eventlist::class,'__invoke']);
Route::get('/valid',[\App\Http\Livewire\Episode4\Valid::class,'__invoke']);
Route::get('/dirty',[\App\Http\Livewire\Episode5\Dirych::class,'__invoke']);
Route::get('/pools',[\App\Http\Livewire\Episode6\Pools::class,'__invoke']);