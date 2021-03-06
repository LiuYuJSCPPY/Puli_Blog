# 埔里觀光網站


 ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/blog_%E9%A6%96%E9%A0%81.PNG)


## 功能

* 網站後台管理系統(Content Management System, CMS ):
   * 設有使用者權限判別，如果登入管理者身分(Admin)，才能進入後台介面，新增、編輯以及刪除文章。
   * 使用者可以編寫價目表。(價目表的方式使用AJAX)
   * 使用者可以上傳該文章的圖片。
   * 使用者首頁了解所有文章現在的狀態。
   * 每個文章中都有設定圖片庫


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


## 技術與工具
* 前端:
  * HTML5
  * CSS3
  * jquery
  * AJAX
  
* 後端:
   * Laravel:
     * Authentication
     * File Storage
     
 * 資料庫:
    * MySQL Workbench


## 資料表設計

 ![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E5%9F%94%E9%87%8C%E8%A7%80%E5%85%89-%E8%B3%87%E6%96%99%E5%BA%AB.drawio.png)
  * uesr : Laravel 內建的使用者資料表。
  * post : user_id 為 belong_to 與 user(id) 資料表做關聯 ，post_categroy_id 為 belong_to 與 post_categroy 資料表做關聯 ，artice_id 為 foreign key 與 Attractions 資料表做關聯。
  * post_categroy : post_categroy_id 為 has_Many 與 post_categroy 資料表做關聯。
  * comments : posts_id 為 belong_to 與 post 資料表做關聯，user_id 為 belong_to 與 user_id 資料表做關聯。
  * Attractions : 文章資料如: name、add、artice、display(bool)。
  * Attractions_img :Attractions_id 為 Foreign key 與 Attractions 資料表做關聯
  * Attractions_price :Attractions_id 為 Foreign key 與 Attractions 資料表做關聯

## 本地端建立環境
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
DB_DATABASE=puli_blog
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

### 1. 前端最新文章圖片抓取不到

問題 : Laravel 讓資料庫連線與執行查詢語句變得相當簡單DB使用方式比較屬於正規資料庫語法，Eloquent ORM提供資料庫互動。 每個資料庫表會和一個對應的「模型」互動。

* 最新文章圖片抓取不到程式碼
  ```php
  $Post_Attractions = DB::table('attractions')->orderBy('id','DESC')->limit(5)->get();
  ```
  
* 前台Blade 程式碼
```php
  $Post_Attractions->Attraction_img->path_img;
  因為使用的是DB方式去抓資料，所以它是抓不到別的資料庫的資料
 ```
 
解決 : 
```php
  $Post_Attractions = Attractions::orderBy('id','DESC')->limit(5)->get();
 ```

### 2. git push 發生衝突

問題 : github 上有更改的行為導致，git push 時發現是舊版本所以無法更新

![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E9%81%87%E5%88%B0%E7%9A%84%E5%95%8F%E9%A1%8C/Git%20%E6%9B%B4%E6%96%B0%E9%87%8D%E7%96%8A%E5%95%8F%E9%A1%8C.PNG)

#### 解決 : 
![image](https://github.com/LiuYuJSCPPY/Puli_Blog/blob/master/%E9%81%87%E5%88%B0%E7%9A%84%E5%95%8F%E9%A1%8C/%E8%A7%A3%E6%B1%BAgit%E5%95%8F%E9%A1%8C.PNG)

### 3. 無法刪除圖檔
* 問題: Laravel 檔案刪除時是需要路徑的，但在資料庫存的是圖檔路徑前面是有加![http://127.0.0.1:8000/storage/](http://127.0.0.1:8000/storage/)路由所以刪除圖檔是找不到檔案路徑。

* 解決: 先抓取資料庫圖檔路由 > 再把路由前面字元給刪掉(http://127.0.0.1:8000/storage/) > 再使用Storage::disk()->delete()
 
  
  前面字元刪掉的方法 : substr ()。
  
  ```PHP
    substr ( 字串, 起始位置, 長度 )
  
  ```

