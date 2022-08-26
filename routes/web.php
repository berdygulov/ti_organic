<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;

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

Route::group([
    'as' => 'pages.'
], function () {
    Route::get('/', [PagesController::class, 'indexPage'])->name('index');
    Route::get('/test', function () {
        return view('front.test');
    });
});
