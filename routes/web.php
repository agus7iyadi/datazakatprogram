<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\dashboardZakat;

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
    return view('v_dashboard');
});

Route::get('login', [dashboardZakat::class, 'dashboardf'])->name('v_dashboardZakat');

// Route::get('/', function () {
//     return view('welcome');
// });
