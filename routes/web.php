<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;

/*
 * Blog use controllers
 */

use App\Http\Controllers\Blog\IndexController as BlogIndex;

/*
 * Order use controllers
 */

use App\Http\Controllers\Order\CreateController as OrderCreate;
use App\Http\Controllers\Order\StoreController as OrderStore;

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
    'prefix' => 'system'
], function () {
    Route::get('migrate/fresh/seed', function () {
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed');
    });
});

Route::group([
    'as' => 'pages.'
], function () {
    Route::get('/', [PagesController::class, 'indexPage'])->name('index');
    Route::get('/contacts', function () {
        return view('front.contacts');
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

Route::get('/products-session-delete', function (\Illuminate\Http\Request $request) {
    $request->session()->forget('basket');
});

Route::group([
    'prefix' => 'products',
    'as' => 'products.'
], function () {
    Route::get('/', [ProductIndex::class, 'front'])->name('index');
    Route::get('/{product_id}', [ProductShow::class, 'front'])->name('show');
});

Route::group([
    'prefix' => 'orders',
    'as' => 'orders.'
], function () {
    Route::group([
        'prefix' => 'create',
        'as' => 'create.'
    ], function () {
        Route::get('confirm', [OrderCreate::class, 'confirm'])->name('confirm');
        Route::get('send', [OrderCreate::class, 'send'])->name('send');
    });
    Route::post('/', OrderStore::class)->name('store');
});

