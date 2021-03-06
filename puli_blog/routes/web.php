<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackControll\AttractionControll as BackAttraction;
use App\Http\Controllers\BackControll\AttractionImgMaterial;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\AttractionControll as FrontAttraction;
use App\Http\Controllers\CommentControll;

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

        // 圖片
        Route::post('{post_id}/img/create',[AttractionImgMaterial::class,'AttractionImgStore'])->name('attractionImg.Store');
        Route::put('Img/{post_id}/img/{M_id}/Update',[AttractionImgMaterial::class,'AttractionImgUpdate'])->name('attractionImg.update');
        Route::get('{post_id}/img/create',[AttractionImgMaterial::class,'AttractionImgCreate'])->name('AttractionImg.create');
        Route::get('Img/{post_id}/img/{M_id}/edit',[AttractionImgMaterial::class,'AttractionImgEdit'])->name('AttractionImg.edit');
        Route::delete('Img/{post_id}/img/{M_id}/delete',[AttractionImgMaterial::class,'AttractionImgDelete'])->name('attractionImg.delete');
        // Route::get('Material/update/{post_id}/{id}/test',[AttractionImgMaterial::class,'teatMaterialUpdate']);

        // 圖片庫
        Route::get('Img/{post_id}',[AttractionImgMaterial::class,'AttractionImg'])->name('AttractionImgs');
    });


        // ajaxv CRUD 系統
        Route::get('Material/{id}',[AttractionImgMaterial::class,'Materialindex'])->name('Material');
        Route::get('Materials',[AttractionImgMaterial::class,'Material'])->name('MaterialCreate');
        Route::get('Material/edit/{id}',[AttractionImgMaterial::class,'MaterialEdit'])->name('Materialedit');
        Route::post('Material/store',[AttractionImgMaterial::class,'attractionMaterialStore'])->name('attractionMaterial.store');
        Route::put('Material/update/{post_id}/{id}',[AttractionImgMaterial::class,'MaterialUpdate']);
        Route::DELETE('delete/{post_id}/Material/{id}',[AttractionImgMaterial::class,'Materialdestroy']);

});


// 前台

Route::get('/',[FrontAttraction::class,'index'])->name('attractions.index');
Route::get('puli_blog/attractions/show/{id}',[FrontAttraction::class,'show'])->name('attractions.show');

Route::get('comment/categroy/{categroy_id}/post/{post_id}',[CommentControll::class,'GetPostComment']);
Route::post('comment/categroy/{categroy_id}/post/{post_id}',[CommentControll::class,'StorePostComment'])->name('Store.Comment');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
