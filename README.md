
# Add Thumbnail to RSS Feed


WordPress の RSS フィードに投稿のアイキャッチ画像（サムネイル）を追加するシンプルなプラグインです。
Snow Monkey Blocks の RSS ブロックにも対応しています。

---


## 特徴
- 投稿のアイキャッチ画像を RSS フィードに `<media:thumbnail>` タグで追加します。
- Snow Monkey Blocks の RSS ブロックでサムネイル表示が可能です。
- 1ファイル構成で外部依存はありません。
- WordPress Coding Standards に準拠しています。


## 使い方
1. このリポジトリをダウンロードし、`add-thumbnail-to-rss-feed.php` を `wp-content/plugins` ディレクトリに配置します。
2. WordPress 管理画面からプラグインを有効化します。
3. RSS フィード（例: `/feed`）を取得すると、各 `<item>` に `<media:thumbnail url="..." />` タグが追加されます。


## 動作環境
- WordPress 5.0 以上
- PHP 7.4 以上


## インストール
1. プラグインファイル（`add-thumbnail-to-rss-feed.php`）を `wp-content/plugins` フォルダにアップロードします。
2. 管理画面「プラグイン」から「Add Thumbnail to RSS Feed」を有効化します。


## ライセンス
GPLv2 or later


## Author
Rocket Martue

---

ご質問・ご要望は [GitHub Issues](https://github.com/rocket-martue/add-thumbnail-to-rss-feed/issues) までお寄せください。
