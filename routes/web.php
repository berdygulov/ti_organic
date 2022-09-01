<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;

/*
 * Blog use controllers
 */

use App\Http\Controllers\Blog\IndexController as BlogIndex;


/*
 * Product use controllers
 */

use App\Http\Controllers\Product\ShowController as ProductShow;
use App\Http\Controllers\Product\IndexController as ProductIndex;


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

/*
 * Blogs routes
 */

Route::group([
    'prefix' => 'blogs',
    'as' => 'blogs.'
], function () {
    Route::get('/', [BlogIndex::class, 'front'])->name('index');
});

/*
 * Categories routes
 */

Route::group([
    'prefix' => 'categories',
    'as' => 'categories.'
], function () {
    //
});

/*
 * Products routes
 */

Route::group([
    'prefix' => 'products',
    'as' => 'products.'
], function () {
    Route::get('/', [ProductIndex::class, 'front'])->name('index');
    Route::get('/1', [ProductShow::class, 'front'])->name('show');
});

