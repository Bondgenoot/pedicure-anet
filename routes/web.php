<?php

use App\Models\PriceListCategory;
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

Route::get('', function () {
    $categories = PriceListCategory::ordered()
        ->with('items')
        ->get();

    return view('welcome', [
        'priceList' => $categories
    ]);
})->name('home');
