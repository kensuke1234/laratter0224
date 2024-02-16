<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

実現したこと:

Follow機能を追加

苦戦したこと:

画像ファイルをデータベースに追加して、tweet_imagesテーブルにimageIDとimageを組み合わせようとしたが、画像アップロードがうまくテーブルに保存されなかった。
データベースにimageのURLを保存して、Tweetと合わせるということの理解はしたが、途中で迷走。今度ゆっくりじっくりやってみます。
MVCの流れが掴めたのが良かった。Cotrollerが重要で実際のメソッドを書く。モデルを先に考えて、Viewを書くのか、その逆かが不明
ModelとControl、Routeの理解はできたが、Viewで反映する処理を実際書くのがわかりにくかった。
