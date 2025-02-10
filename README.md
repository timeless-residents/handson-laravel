# Laravel Todoアプリケーション

<p align="center">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

## 概要

このプロジェクトは、LaravelフレームワークとDockerを使用して構築されたTodoアプリケーションです。RESTful APIエンドポイントとWebインターフェースの両方を提供し、Renderプラットフォームにデプロイされています。

## 機能

- Todoタスクの作成、読取、更新、削除（CRUD操作）
- RESTful API エンドポイント
- Webインターフェース
- Dockerコンテナ化による簡単なセットアップ
- TailwindCSSによるモダンなUI

## 使用技術

- Laravel 10.x
- PHP 8.2
- MySQL
- Docker & Docker Compose
- Nginx
- TailwindCSS
- Render（デプロイメントプラットフォーム）

## ローカル開発環境のセットアップ

1. リポジトリのクローン:
```bash
git clone https://github.com/timeless-residents/handson-laravel
cd handson-laravel
```

2. 環境設定:
```bash
cd src
cp .env.example .env
```

3. Dockerコンテナの起動:
```bash
docker-compose up -d
```

4. 依存関係のインストール:
```bash
docker-compose exec app composer install
docker-compose exec app npm install
```

5. アプリケーションキーの生成:
```bash
docker-compose exec app php artisan key:generate
```

6. データベースのマイグレーション:
```bash
docker-compose exec app php artisan migrate
```

## APIエンドポイント

| メソッド | エンドポイント | 説明 |
|----------|----------------|------|
| GET      | /api/todos     | Todo一覧の取得 |
| POST     | /api/todos     | 新規Todoの作成 |
| GET      | /api/todos/{id}| 特定のTodoの取得 |
| PUT      | /api/todos/{id}| Todoの更新 |
| DELETE   | /api/todos/{id}| Todoの削除 |

## デプロイメント

このアプリケーションは[Render](https://render.com)にデプロイされています。

デプロイ済みアプリケーション: https://handson-laravel.onrender.com/todos

## ライセンス

[MIT license](https://opensource.org/licenses/MIT)
