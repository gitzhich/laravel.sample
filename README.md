# 課題1,2,3 佐藤廷至

## 課題1
[Git研修完了後のSourceTreeのSS](./kadai1/Git%E7%A0%94%E4%BF%AESS.png)  

## 課題2
[ルーティング](./sample/routes/web.php)  
26行目でgetしてArticleControllerを呼び出し  

[コントローラー](./sample/app/Http/Controllers/ArticleController.php)  
ビューarticleを呼び出し  

[ビュー](./sample/resources/views/article.blade.php)  
Hello World!!!と表示  

## 課題3
[ルーティング](./sample/routes/web.php)  
28行目でUserControllerを呼び出し  

[コントローラー](./sample/app/Http/Controllers/UserController.php)  
indexでテーブルの値をすべて取得  
その後ビューuser\indexを呼び出し  

[ビュー](./sample/resources/views/user/index.blade.php)  
値を表示

### 課題3 SQLシートの作成
[マイグレーション](./sample/database/migrations/2022_03_30_151442_create_users_table.php)  
[シーディング](./sample/database/seeders/UsersTableSeeder.php)