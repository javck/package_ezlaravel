<p align="center"><a href="http://goblinlab.org" target="_blank"><img width="400" src="http://demo.goblinlab.org/storage/settings/July2019/UqH0sJ6usPDlZpYy7E5f.png"></a></p>

# **EzLaravel - 教您如何快速入門Laravel + Voyager的極速開發術 ❤️ by [Goblin Lab Studio](http://goblinlab.org)
架構於Laravel框架，針對Voyager套件加以擴展的快速開發術
陪著你一起快速入門Laravel

![Voyager Screenshot](https://s3.amazonaws.com/thecontrolgroup/voyager-screenshot.png)

Website & Documentation: https://laravelvoyager.com

Video Tutorial Here: https://laravelvoyager.com/academy/

Join our Slack chat: https://voyager-slack-invitation.herokuapp.com/

View the Voyager Cheat Sheet: https://voyager-cheatsheet.ulties.com/

Canvas Template: https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123

<hr>

支持 Laravel 8

PS:此套件使用到第三方的Bootstrap4 Template :Moderna
版權仍屬原開發者所有，如需自行下載可參考以下網址
https://bootstrapmade.com/demo/Moderna/

可安裝Laravel最新版本，可使用以下指令來建立
PS：如需輸入指令，均需要切換到Terminal，並跳到專案根目錄資料夾


## 安裝步驟
### 1.(可選)如為新專案，需要在AppServiceProvider.php的boot()裡加入 Schema::defaultStringLength(191);
### 2.(可選)設定config/app.php，主要是locale改為zh_TW
### 3.載入套件javck/Ezlaravel

```bash
正式環境 composer require javck/Ezlaravel
測試環境 composer require javck/Ezlaravel --dev
```

### 4.(可選)可載入DebuggerBar
```bash
composer require barryvdh/laravel-debugbar --dev
```

### 5.安裝Voyager套件
```bash
php artisan voyager:install
```

### 6.移除routes/web.php裡頭的voyager路由，並加入以下程式碼
```
Route::get('admin/login', ['uses' => 'Auth\VoyagerAuthController@login', 'as' => 'voyager.login']);
Route::post('admin/login', ['uses' => 'Auth\VoyagerAuthController@postLogin', 'as' => 'voyager.postlogin']);
Route::post('admin/logout', ['uses' => 'Auth\VoyagerAuthController@logout', 'as' => 'voyager.logout']);
```

### 7.移除storage/app/public/users資料夾
### 8.輸入指令以下指令以複製Ezlaravel套件的publish檔案
```bash
php artisan vendor:publish
```

### 9.建立資料庫表格與資料，執行以下指令並匯入SQL檔：easyweb.sql
```bash
 php artisan migrate:refresh
 ```

### 10.修改config/voyager.php設定檔，如以下範例：
```
'dashboard' => [
        //修改後台navbar下拉選單的選項
        'navbar_items' => [
            '個人資料' => [
                'route'      => 'voyager.profile',
                'classes'    => 'class-full-of-rum',
                'icon_class' => 'voyager-person',
            ],
            '返回前台' => [
                'route'        => '/',
                'icon_class'   => 'voyager-home',
                'target_blank' => true,
            ],
            '登出' => [
                'route'      => 'voyager.logout',
                'icon_class' => 'voyager-power',
            ],
        ],


        'widgets' => [
            'Javck\\Ezlaravel\\Widgets\\ContactsWidget',
            'Javck\\Ezlaravel\\Widgets\\UsersWidget',
        ],


    ],

'storage' => [
        'disk' => 'public',
    ],

'compass_in_production' => true,
```

### 11.(可選)移除public 路徑
####    1. 將root path的server.php檔案更名為index.php
####    2. 將public資料夾的.htaccess檔案複製一份到root資料夾
```
Options -MultiViews -Indexes


 
RewriteEngine On
 
# Handle Authorization Header
RewriteCond %{HTTP:Authorization} .
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
 
# Redirect Trailing Slashes If Not A Folder...
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} (.+)/$
RewriteRule ^ %1 [L,R=301]
 
# Handle Front Controller...
RewriteCond %{REQUEST_URI} !(\.css|\.js|\.png|\.jpg|\.gif|robots\.txt)$ [NC]
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
 
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_URI} !^/public/
RewriteRule ^(css|js|images)/(.*)$ public/$1/$2 [L,NC]
```

### 12.修改.env的APP_URL路徑，更正為應用的DNS，格式請參考以下
```
APP_NAME=EasyWeb
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=21
DB_DATABASE=goblinah_
DB_USERNAME=goblinah_coder
DB_PASSWORD=A79siqCf!,g0
DEBUG_IP=114.32.18.161

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=sg1-ss5.a2hosting.com
MAIL_PORT=25
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=null

NOCAPTCHA_SITEKEY=
NOCAPTCHA_SECRET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

ECPAY_MERCHANT_ID=2000132
ECPAY_HASH_KEY=5294y06JbISpM5x9
ECPAY_HASH_IV=v77hoKGq4kWxNNIS
ECPAY_INVOICE_HASH_KEY=
ECPAY_INVOICE_HASH_IV=

SMG_USERNAME=
SMG_PASSWORD=
SMG_APIKEY=
```

### 13.將Select2版本改為4.0.2版本以下(目前預設為4.0.3)
####    1. 變更voyager套件根目錄的package.json，將select2版本指定為4.0.2
####    2. 將Terminal目錄切換到voyager套件目錄，依序執行npm install 和 npm run production
####    3. 將voyager/publishable/assets/js/app.js複製到public/vendor/tcg/voyager/assets/js/app.js

### 14.修改DataType，把用戶的Model改為App\User

### 15.將Canvas的HTML資料夾所有檔案複製到專案的public資料夾，記得移除index.html

### 16.修改webpack.mix.js，內容如下
```
const mix = require('laravel-mix');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'public/css/bootstrap.css',
    'public/style.css',
    'public/css/swiper.css',
    'public/css/dark.css',
    'public/css/font-icons.css',
    'public/css/animate.css',
    'public/css/magnific-popup.css',
    'public/css/responsive.css',
], 'public/css/all.css');


mix.scripts([
    'public/js/jquery.js',
    'public/js/plugins.js',
    'public/js/functions.js',
], 'public/js/all.js');


mix.disableSuccessNotifications();
```

### 17.如果需要忘記密碼或註冊功能，在routes/web.php加入
```
Auth::routes();
```

### 18.修改app/Http/Middleware/Authenicate.php，改成
```
route(‘voyager.login');
```

### 19.設定Canvas Setting
