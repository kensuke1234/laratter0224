<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

実現したこと:

HTML+CSS+JavascriptのフォームからリクエストをAPIエンドポイントのLaravelに投げて、データベースにデータが追加される。
今回はリクエストはユーザデータの追加のリクエストという機能だったが、このリクエストをどのようなリクエストにして、その受け口である
Laravelのサーバサイドでどのような実装をするかで、アプリケーションの設計についてまで考えてみると色々発展しそうだと思う。


フロントエンド　→　サーバサイド(データベース)

-
-
-

苦戦したこと:

LarvelをAPIエンドポイントとして使用して、フロントエンド部分の実装について、もう少し練ってリクエストをどのようなものにするか考えて、
設計してみると今後の発展につながったと思うが、今回はあまり時間がかけられなかったため、最小限の実装。
