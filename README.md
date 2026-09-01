# Job Portal Laravel

Figmaのデザインをもとに制作したJob Portal（求人サイト）のLaravel版です。

静的なHTML / CSS / JavaScriptで制作したサイトをLaravelへ移行し、求人情報をSQLiteデータベースから取得する動的なWebサイトとして実装しました。

## 📌 概要

求人一覧・求人詳細・検索・絞り込み・ソート・ページネーションなど、求人サイトに必要な基本機能をLaravelで実装しています。

Figmaのデザインをできるだけ維持しながら、LaravelのRouting、Controller、Model、Migration、Seeder、Eloquent、Bladeなどを使用して、静的サイトを動的なWebサイトへ変換しました。

### 制作の流れ

```text
Figma
  ↓
HTML / CSS / JavaScript
  ↓
Laravel
  ↓
SQLite
  ↓
Eloquent
  ↓
検索・絞り込み・ソート・ページネーション
```

## ✨ 実装した機能

### 求人検索・絞り込み

* 求人タイトル・会社名によるキーワード検索
* 勤務地による絞り込み
* カテゴリーによる絞り込み
* Job Typeによる絞り込み
* 経験レベルによる絞り込み
* タグによる絞り込み
* 最低給与による絞り込み

### 給与ソート

* Salary: High to Low
* Salary: Low to High

給与はデータベース上で最低給与と最高給与に分けて管理しています。

```text
salary_min
40000

salary_max
42000
```

これにより、データベース上で給与の絞り込みやソートを行えるようにしています。

### 求人一覧

* 求人カード表示
* 求人詳細ページ
* 関連求人表示
* ページネーション
* Nextボタン
* 現在の表示件数 / 全件数の動的表示

### その他

* Browse by Categoryからカテゴリー検索へのリンク
* Job Cardのお気に入りUI
* レスポンシブ対応
* FigmaデザインをもとにしたUI実装

> お気に入り機能は現在フロントエンドのUIとして実装しています。お気に入り情報はデータベースには保存されません。

## 🛠 使用技術

* PHP 8.3
* Laravel 13
* SQLite
* Blade
* HTML
* CSS
* JavaScript
* Git / GitHub
* GitHub Codespaces

## 🧩 Laravelで使用した機能

* Routing
* Controller
* Blade
* Eloquent ORM
* Modelリレーション
* Migration
* Seeder
* Query Builder
* GETパラメータ
* `where()`
* `whereBetween()`
* `whereHas()`
* `orderBy()`
* Pagination

## 🗄️ データベース構成

求人情報と、1つの求人に複数存在するデータを分けて管理しています。

```text
jobs
├── id
├── title
├── company
├── category
├── type
├── salary_min
├── salary_max
├── location
├── experience
├── degree
└── description

job_responsibilities
├── id
├── job_id
└── responsibility

job_skills
├── id
├── job_id
└── skill

job_tags
├── id
├── job_id
└── tag
```

### Modelのリレーション

```text
Job
 ├── hasMany → JobResponsibility
 ├── hasMany → JobSkill
 └── hasMany → JobTag
```

`JobResponsibility`、`JobSkill`、`JobTag`は、それぞれ`Job`に所属する1対多のリレーションになっています。

## 🎓 学習目的

このプロジェクトはLaravel学習の一環として制作しました。

Figmaのデザインをもとに制作した静的サイトを、Laravelを使用した動的なWebサイトへ移行することで、Laravelの基本的な仕組みを実践的に学ぶことを目的としています。

主に以下の内容を学習・実践しました。

* データベース設計
* Migrationの作成
* Seederの作成
* Eloquent Model
* Modelリレーション
* GETパラメータ
* データベースを利用した検索・絞り込み
* ソート機能
* ページネーション
* ControllerからBladeへのデータ受け渡し
* Bladeによる動的な表示

## 📌 制作状況

Laravel版のJob Portalとして完成。

Laravelの基本機能を実践しながら、Figmaベースの静的サイトを動的な求人サイトへ移行したポートフォリオ作品です。
