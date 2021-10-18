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
  1. 首頁 : 
  * 首頁功能:
     * 分類 : 快速地知道現在公開文章有多少個
     * 新增文章 : 可以知道現在最新5個文章，也可以點擊圖片或文字到最新文章觀看
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/blog_%E9%A6%96%E9%A0%81.PNG)
  
  2. 單文章  :
   * 單文章功能:
     * 分類 : 快速地知道現在公開文章有多少個
     * 新增文章 : 可以知道現在最新5個文章，也可以點擊圖片或文字到最新文章觀看
     * 留言板 : 使用留言板必須會員才可以使用。
  ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%96%AE%E6%96%87%E7%AB%A0.PNG)
  
  3. 登入(登入是可以使用留言板和後台管理系統)
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
  * 前端:
    #### 未登入狀態 :
    ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%9F%94%E9%87%8C%E9%83%A8%E8%90%BD%E6%A0%BC%E5%89%8D%E7%AB%AF_%E6%9C%AA%E7%99%BB%E5%85%A5.gif)
    
    #### 已登入狀態 :
    ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%9F%94%E9%87%8C%E9%83%A8%E8%90%BD%E6%A0%BC%E5%89%8D%E7%AB%AF_%E7%99%BB%E5%85%A5.gif)
    
    
  * 後端:
    #### 文章:新增、更新、刪除、讀取
     ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/Attractions_CRUD.gif)
     
    #### 價目表 (AJAX) :新增、更新、刪除、讀取
      ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%83%B9%E7%9B%AE%E8%A1%A8.gif)
      
    #### 圖片 : 新增、更新、刪除、讀取
      ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/image_CRUD.gif)


## 環境配置
* 語言：PHP ^8.0.3
* 框架：Laravel ^8.63.0
* 資料庫：MySQL
* 資料庫管理工具：MySQL Workbench


## 資料表設計

 ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%9F%94%E9%87%8C%E8%A7%80%E5%85%89-%E8%B3%87%E6%96%99%E5%BA%AB.drawio.png)

### 安裝

1. 遠端下載repo
```
https://github.com/LiuYuJSCPPY/Laravel_FullCalendar.git
```
2. 到 .env 資料庫使用者以及密碼請填寫

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelfullcalendar
DB_USERNAME=請輸入資料庫使用者
DB_PASSWORD=請輸入資料庫密碼
```
3. 請確保資料庫 schema名稱是否有: puli_blog

4. 請輸入指令 

```
php artisan migrate

```
5. 請輸入指令

```
php artisan serve

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

