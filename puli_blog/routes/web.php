<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackControll\AttractionControll as BackAttraction;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\AttractionControll as FontAttraction;

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

Route::prefix('Auth')->name('auth')->group(function(){
    Route::get('facebook/login',[SocialController::class,'FBlogin'])->name('FBlogin');
    Route::get('facebook/callback',[SocialController::class,'FBcallback'])->name('FBcallback');
});


// 後臺管理系統
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function(){
    // 景點
    Route::resource('attraction',BackAttraction::class);


    Route::prefix('attraction')->group(function(){
         // 新增
        Route::get('{post_id}/create',[BackAttraction::class,'attractionMaterialCreate'])->name('attractionMaterial.create');
        Route::get('{post_id}/img/create',[BackAttraction::class,'AttractionImgCreate'])->name('AttractionImg.create');
        Route::post('{post_id}/store',[BackAttraction::class,'attractionMaterialStore'])->name('attractionMaterial.store');
        Route::post('{post_id}/img/create',[BackAttraction::class,'AttractionImgStore'])->name('attractionImg.Store');

        // 更新
        Route::get('{post_id}/Material/{M_id}/edit',[BackAttraction::class,'attractionMaterialEdit'])->name('attractionMaterial.edit');
        Route::put('Material/{post_id}/Material/{M_id}/Update',[BackAttraction::class,'attractionMaterialUpdate'])->name('attractionMaterial.update');

        // 圖片
        Route::get('Img/{post_id}',[BackAttraction::class,'AttractionImg'])->name('AttractionImgs');
        Route::get('Img/{post_id}/img/{M_id}/edit',[BackAttraction::class,'AttractionImgEdit'])->name('AttractionImg.edit');
        Route::put('Img/{post_id}/img/{M_id}/Update',[BackAttraction::class,'AttractionImgUpdate'])->name('attractionImg.update');
    });

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
