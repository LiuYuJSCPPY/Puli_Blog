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
    Route::get('attraction/{post_id}/Material/{M_id}/edit',[AttractionControll::class,'attractionMaterialEdit'])->name('attractionMaterial.edit');
    Route::put('attraction/Material/{post_id}/Material/{M_id}/Update',[AttractionControll::class,'attractionMaterialUpdate'])->name('attractionMaterial.update');

    // 圖片
    Route::get('attraction/Img/{post_id}',[AttractionControll::class,'AttractionImg'])->name('AttractionImgs');
    Route::get('attraction/Img/{post_id}/img/{M_id}/edit',[AttractionControll::class,'AttractionImgEdit'])->name('AttractionImg.edit');
    Route::put('attraction/Img/{post_id}/img/{M_id}/Update',[AttractionControll::class,'AttractionImgUpdate'])->name('attractionImg.update');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
