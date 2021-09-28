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


Route::prefix('admin')->name('admin.')->group(function(){
    // 景點
    Route::resource('attraction',AttractionControll::class);
    // 新增
    Route::get('attraction/{post_id}/create',[AttractionControll::class,'attractionMaterialCreate'])->name('attractionMaterial.create');
    Route::get('attraction/{post_id}/img/create',[AttractionControll::class,'AttractionImgCreate'])->name('AttractionImg.create');
    Route::post('attraction/{post_id}/store',[AttractionControll::class,'attractionMaterialStore'])->name('attractionMaterial.store');
    Route::post('attraction/{post_id}/img/create',[AttractionControll::class,'AttractionImgStore'])->name('attractionImg.Store');
    // 更新
    Route::get('attraction/{post_id}/edit',[AttractionControll::class,'attractionMaterialEdit'])->name('attractionMaterial.create');
    Route::get('attraction/{post_id}/img/edit',[AttractionControll::class,'AttractionImgEdit'])->name('AttractionImg.create');
    Route::put('attraction/{post_id}/store',[AttractionControll::class,'attractionMaterialUpdate'])->name('attractionMaterial.store');
    Route::put('attraction/{post_id}/img/create',[AttractionControll::class,'AttractionImgUpdate'])->name('attractionImg.Store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
