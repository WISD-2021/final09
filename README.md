# 系統畫面

## 前台

### 首頁
##### — 瀏覽商品及商品分類
![Imgur](https://i.imgur.com/n5xV9OZ.png)
- - -

### 商品分類
##### — 根據商品的類別瀏覽商品
![Imgur](https://i.imgur.com/yzkqvZz.png)
- - -

### 產品頁面
##### — 查看產品詳細資訊
![Imgur](https://i.imgur.com/gyWX0Ev.png)
- - -


- - -

## 後台


### 查看/編輯基本資料
##### — 可查看或更改密碼
![Imgur](https://imgur.com/UAU3ALn.png)
- - -

### 審核賣家權限(管理者功能)
##### — 可審核申請成為賣家之會員
![Imgur](https://imgur.com/Gao4wiL.png)
- - -

### 訂單管理
##### — 可在完成訂單後按下完成訂單
![Imgur](https://imgur.com/hOgMUYJ.png)
- - -

### 商品上架(賣家及管理者功能)
##### — 可上架想販賣的商品
![Imgur](https://imgur.com/7fCYH0q.png)

# 系統名稱及作用

## 小藍網購
* 會員在首頁或商品分類頁面選擇想查看的商品
* 會員可以選擇想要的商品及數量進行購買
* 會員在確認商品及數量無誤後，可以按下加入購物車
* 會員可在購物車頁面刪除購物車商品
* 會員可在購物車頁面確認商品及數量無誤後進行結帳
* 會員可以在會員中心修改密碼
* 會員可以在會員中心申請成為賣家
* 賣家可以上架商品
* 管理者可以上架產品
* 管理者可以審核申請成為賣家的會員
* 管理者可以處理訂單(完成訂單)
* 管理者可以編輯、新增、刪除產品

- - -
# 系統的主要功能

## 前台 — [3A832035 廖琮愷](https://github.com/3A832035)
* 首頁      |Route::get('index', [\App\Http\Controllers\PagesController::class, 'index'])->name('index');
* 登入頁面|Route::get('loginn', [\App\Http\Controllers\PagesController::class, 'login'])->name('loginn');
* 註冊頁面|Route::get('registerr', [\App\Http\Controllers\PagesController::class, 'register'])->name('registerr');
* 購物車頁面|Route::get('cart', [\App\Http\Controllers\PagesController::class, 'cart'])->name('cart');
* 商品資訊頁面|Route::get('product/{product}', [\App\Http\Controllers\PagesController::class, 'product'])->name('product');
* 查看訂單頁面|Route::get('dindan/{dindan}', [\App\Http\Controllers\PagesController::class, 'dindan'])->name('dindan');
* 商品類別頁面|Route::get('category/{category}', [\App\Http\Controllers\PagesController::class, 'category'])->name('category');
## 前台 — [3A832052 郭庭瑞](https://github.com/s3A832052)
* 會員中心頁面|Route::get('accountadjust/{accountadjust}', [\App\Http\Controllers\PagesController::class, 'accountadjust'])->name('accountadjust');
## 後台
* 登入、註冊|Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
    return redirect()->route('index');
})->name('dashboard');
* 會員修改密碼、申請成為賣家、管理者審核賣家、商品上架|Route::post('/user/store', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
* 將商品加入購物車|Route::post('/cartitem', [\App\Http\Controllers\CartItemController::class, 'create'])->name('cartitem.create');
* 刪除購物車商品|Route::get('/cartitem/{cartitem}', [\App\Http\Controllers\CartItemController::class, 'destroy'])->name('cartitem.destroy');
* 下訂單|Route::post('/order', [\App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
* 管理者完成訂單|Route::post('/order/store', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
- - -
## ERD
![Imgur](https://imgur.com/)
- - -
## 關聯式綱要圖
![Imgur](https://imgur.com/)
- - -
## 資料表欄位設計
![Imgur](https://imgur.com/)
- - -
![Imgur](https://imgur.com/)
- - -

# 初始專案與DB負責的同學
* 初始專案 — [3A832052 郭庭瑞](https://github.com/s3A832052)
* 資料庫建立、資料庫關聯 — [3A832035 廖琮愷](https://github.com/3A832035)
- - -
# 系統測試資料存放位置
#### 本專案資料夾final09底下的sql/final09.sql
- - -
# 系統復原
##### 1.複製在Github的專案 https://github.com/WISD-2021/final09.git ，打開Cmder，在www底下輸入：
    git clone https://github.com/WISD-2021/final09.git 

##### 2.進入專案資料夾
    cd final09

##### 3.復原專案三步驟
    composer install
    composer run-script post-root-package-install
    composer run-script post-create-project-cmd

##### 4.打開專案的.env檔案，修改資料庫IP、Port、名稱、密碼及資料庫
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=33060
    DB_DATABASE=final09
    DB_USERNAME=root
    DB_PASSWORD=root

##### 5.登入Adminer，在Admin內匯入final09專案的sql/final09.sql
    資料庫系統：MySQL
    伺服器：localhost:33060
    帳號：root
    密碼：root

##### 6.修改UwAmp的Document Root
    {DOCUMENTPATH}/final09/public
- - -
# 系統使用者測試帳號

## 前台
##### 會員
    帳號：4566@email.com
    密碼：11111111
- - -
##### 賣家
    帳號：taisan@shsh.ttt
    密碼：11111111
- - -
## 後台
##### 管理者
    帳號：234@email.com
    密碼：11111111
- - -
# 系統開發人員與工作分配

## 前台 — [3A832035 廖琮愷](https://github.com/3A832035)
    ．首頁
    ．商品分類頁面
    ．登入頁面
    ．註冊頁面
    ．購物車頁面
    ．商品資訊頁面
    ．查看訂單頁面
    ．商品類別頁面
## 前台 — [3A832052 郭庭瑞](https://github.com/s3A832052)
    ．會員中心頁面    
    ．README編寫
 - - -
## 後台 — [3A832052 郭庭瑞](https://github.com/s3A832052)
    ．商品加入購物車資料表
    ．登入、註冊
    ．會員修改密碼
    ．申請成為賣家
    ．管理者審核賣家
    ．商品上架
    ．將商品加入購物車
    ．刪除購物車商品
    ．下訂單
    ．管理者完成訂單
