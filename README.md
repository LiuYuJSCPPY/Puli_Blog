# 埔里觀光網站



## Live demo





## 功能

* 網站後台管理系統(Content Management System, CMS ):
   * 設有使用者權限判別，如果登入管理者身分(Admin)，才能進入後台介面，新增、編輯以及刪除文章。
   * 使用者可以編寫價目表。(價目表的方式使用AJAX)
   * 使用者可以上傳該文章的圖片。
   * 使用者首頁了解所有文章現在的狀態。
   * 每個文章中抖有設定圖片庫


* 前台的部分:
  * 首頁:顯示所有文章，可以顯示最新的文章。
  * 顯示單一文章 : 該文章所有資訊以及圖片。
  * 留言 : 使用者可發布該文章的留言。
  
  
## 環境配置
* 語言：PHP ^8.0.3
* 框架：Laravel ^8.63.0
* 資料庫：MySQL
* 資料庫管理工具：MySQL Workbench


## 專案啟動方式
1. 下載專案壓縮檔或使用git clone至個人電腦 

```
https://github.com/LiuYuJSCPPY/Puli_Blog.git
```



## 過程中遇到的問題與除錯(debug)

1. 景點的圖片跟景點資料是不一樣，前台抓不到景點的圖片。

* 以下的程式碼是使用DB方式使用，然後在前台頁面是沒有出來圖片的路徑的
* 
Laravel 程式碼
  ```php
  $Post_Attractions = DB::table('attractions')->orderBy('id','DESC')->limit(5)->get();
  ```
  
前台Blade 程式碼
```php
  $Post_Attractions->Attraction_img->path_img;
  因為我使用的是DB方式去抓資料，所以它是抓不到別的資料庫的資料
 ```
 
 發現問題
 
 DB是不能使用ORM的方式去抓別的資料的
 
  
3.  問題1 (使用DB是不能使用ORM 的函數):取得最新5個景點的文章，Attractions Model來取得文章的圖片路徑
```php

```

4. 無法刪除圖檔
 
  * 在Laravel 圖檔刪除使用方法
  ```PHP
  use Illuminate\Support\Facades\Storage;

  Storage::delete('file.jpg');

  Storage::delete(['file.jpg', 'file2.jpg']);

  Storage::disk('s3')->delete('path/file.jpg');
  
  ```
  但是我在資料庫存圖檔名稱是有附加路由的所在使用 Storage::disk 的時候是沒辦法的
  


  解決的方法: 先抓取資料庫圖檔路由 > 再把路由前面字元給刪掉(http://127.0.0.1:8000/storage/) > 再使用Storage::disk()->delete()
  
  前面字元刪掉的方法 : substr ( 字串, 起始位置, 長度 )。
  
  ```PHP
  
  
  
  ```


