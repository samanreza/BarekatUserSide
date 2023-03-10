<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\MainCategoryController;
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

Route::group([
    //'middleware' => '',
    'prefix' => 'category',
], function () {
    Route::get('list', [MainCategoryController::class,'index']);
});
