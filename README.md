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
  
## 展示圖片
* 前端:
  1. 首頁
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/blog_%E9%A6%96%E9%A0%81.PNG)
  
  2. 單文章
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%96%AE%E6%96%87%E7%AB%A0.PNG)
  
  3. 登入(登入是可以使用留言板，登入會員才可以使用後台)
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E7%99%BB%E5%85%A5%E9%A0%81%E9%9D%A2.PNG)
  
  4. 註冊會員
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E7%94%B3%E8%AB%8B%E6%9C%83%E5%93%A1.PNG)
  
* 後端:
  1. 後台首頁可以去了解每個景點資料的狀態
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%BE%8C%E7%AB%AF%E9%A6%96%E9%A0%81.PNG)
  2. 新增文章
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E6%96%B0%E5%A2%9E%E6%96%87%E7%AB%A0.PNG)
  3. 單文章
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E6%9F%A5%E7%9C%8B%E5%96%AE%E6%96%87%E7%AB%A0.PNG)
  4. 更新文章
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E6%9B%B4%E6%96%B0%E6%96%87%E7%AB%A0.PNG)
  5. 價目表: 價目表使用AJAX技術，讓使用者操作變得比較順暢。
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%83%B9%E7%9B%AE%E8%A1%A8.PNG)
  6. 單文章圖片庫: 圖片庫是使用者能夠方便更新圖片以及刪除。
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%9C%96%E7%89%87%E5%BA%AB.PNG)
  7. 新增圖片
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E6%96%B0%E5%A2%9E%E5%9C%96%E7%89%87.PNG)
  8. 更新圖片
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E6%9B%B4%E6%96%B0%E5%9C%96%E7%89%87.PNG)
  
## 操作影片  
  


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
* 問題: Laravel 檔案刪除時是需要路徑的，但在資料庫存的是圖檔路徑前面是有加![http://127.0.0.1:8000/storage/](http://127.0.0.1:8000/storage/)路由所以刪除圖檔是找不到檔案路徑。

* 解決: 先抓取資料庫圖檔路由 > 再把路由前面字元給刪掉(http://127.0.0.1:8000/storage/) > 再使用Storage::disk()->delete()
 
  
  前面字元刪掉的方法 : substr ()。
  
  ```PHP
    substr ( 字串, 起始位置, 長度 )
  
  ```

