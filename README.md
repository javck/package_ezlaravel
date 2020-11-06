<p align="center"><a href="http://goblinlab.org" target="_blank"><img width="400" src="http://goblinlab.org/storage/images/logo_panda.png"></a></p>

#EzLaravel - 教您如何快速入門Laravel + Voyager的極速開發術 ❤️ by [Goblin Lab Studio](http://goblinlab.org)
架構於Laravel框架，針對Voyager套件加以擴展的快速開發術
陪著你一起快速入門Laravel，最終做出帶後台的形象網站
![Voyager Screenshot](https://s3.amazonaws.com/thecontrolgroup/voyager-screenshot.png)
<hr>
參考連結：

Demo網頁 : https://demo.goblinlab.org

Ezlaravel Github : https://github.com/javck/package_ezlaravel

Website & Documentation: https://laravelvoyager.com

Video Tutorial Here: https://laravelvoyager.com/academy/

Join our Slack chat: https://voyager-slack-invitation.herokuapp.com/

View the Voyager Cheat Sheet: https://voyager-cheatsheet.ulties.com/

<hr>

利用Laravel Blade來構建前台，使用Voyager套件來快速產生後台，並用以管理前台的選單與內容。
Ezlaravel套件目的為方便學習Laravel，相關程式碼均會在專案內放置一份，方便學習與修改。程式撰寫也力求簡單，以求讓初學者更好理解
> 支持 Laravel 8.x版本

PS:此套件使用到第三方的Bootstrap4 Template :Moderna
版權仍屬原開發者所有，如需自行下載可參考以下網址
https://bootstrapmade.com/demo/Moderna/

<hr>

## 安裝步驟
### 1.建立新Laravel專案

執行以下指令來建立最新版本的Laravel專案
```bash
laravel new 專案名稱
```

### 2. 設定資料庫參數與APP_URL

接著請建立專案的新資料庫，並在.env檔案裡面設定：

```
APP_URL=http://ezlaravel.test(設定你專案的首頁網址)
DB_HOST=localhost
DB_DATABASE=ezlravel
DB_USERNAME=root
DB_PASSWORD=
```

### 3.下載Ezlaravel套件

切換到專案目錄，輸入以下指令來安裝Ezlaravel套件

```bash
正式環境 composer require javck/ezlaravel
測試環境 composer require javck/ezlaravel --dev
```
### 3.安裝此套件所需的檔案和資料

切換到專案目錄，輸入以下指令

```bash
php artisan ezlaravel:install
```

### 4.(可選)可載入DebuggerBar

此套件可以幫助您進行除錯，切換到專案目錄，輸入以下指令

```bash
composer require barryvdh/laravel-debugbar --dev
```
### 5.完成

現在您已經具有一個Laravel + Voyager的極速開發學習環境，希望您的學習能夠一切順利
> 已自動安裝好Voyager套件，所有相關指令都能使用

## 後台登入

後台登入路徑為/admin，假如專案首頁網址為http://ezlaravel.test，後台網址即為http://ezlaravel.test/admin

### 帳號密碼

超級管理員(具備所有後台權限) super/passw0rd
管理員(具備管理前台資料的後台權限) admin/passw0rd
一般用戶(不具任何後台權限) user/passw0rd
