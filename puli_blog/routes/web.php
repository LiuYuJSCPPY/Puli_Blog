<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractionControll;

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
Route::resource('admin',AttractionControll::class);

Route::get('admim/attraction/{post_id}/create',[AttractionControll::class,'AttractionsCreate'])->name('attraction.create');
Route::get('admim/attraction/{post_id}/img/create',[AttractionControll::class,'AttractionsImgCreate'])->name('AttractionImg.create');
Route::post('admim/attraction/{post_id}/store',[AttractionControll::class,'AttractionsStore'])->name('attraction.store');
Route::post('admim/attraction/{post_id}/img/create',[AttractionControll::class,'AttractionsImgStore'])->name('attractionImg.Store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
