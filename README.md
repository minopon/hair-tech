# WordPress を Heroku にデプロイする手順（Windows版）

完成サイト例

https://dry-shore-62911.herokuapp.com/

## Windows版 Git インストール

https://gitforwindows.org/

## Windows版 Heroku CLI インストール

https://devcenter.heroku.com/ja/articles/heroku-cli#install-the-heroku-cli

## WPローカル開発環境 XAMPP手順実施

htdocs の下に wordpress ディレクトリを配置するところまで進める。

XAMPPコントロールパネル「Config」ボタンをクリックして php.ini を開き以下2点対応する

・設定値（処理タイムアウト無制限）に変更する。
```
max_execution_time=0
```

その後、XAMPPコントロールパネルで「Apache」のみ起動させておく。

## HerokuアプリとDB作成

コマンドプロンプトを起動して以下コマンド実行。
```
cd C:\xampp\htdocs\wordpress
git config --global user.name ユーザ名
git config --global user.email メールアドレス
git init
```
アプリ作成
```
heroku create -a アプリ名
```
DB作成
```
heroku addons:create jawsdb-maria:kitefin
heroku config
=== cryptic-wildwood-65131 Config Vars
=== dry-shore-62911 Config Vars
JAWSDB_MARIA_URL: mysql://...
```
JAWSDB_MARIA_URLに作成したDBの設定が以下のように入る。

`mysql://username:password@host:port/database`

## WordPress初期セットアップ

初期設定のDB設定内容は、JAWSDB_MARIA_URLの各DBの設定を入れる。

DB処理がかなり遅いのでクリック後はしばらく待つ。

http://localhost/wordpress/

## WP美容室5.3章メディアアップロードまでの作業実施

以下の wordpress ディレクトリ配下にファイルを作成する系の作業をローカル環境で構築しておく。

- WPForms プラグインインストール
- 「Flash」テーマインストール
- 「Flashをはじめよう」ボタンをクリックして Demo Impoter インストール
- Demo Impoter で Flash OnePage をインポート
- メディアアップロード
- サイトロゴ設定
- サイトアイコン設定（**「選択」クリック後は裏でアイコン画像が作られるのでしばらく待つ**）

## 残りのWP美容室5.4章以降の作業をHerokuサイト側で行うための作業

WordPressの設定 > 一般の「WordPress アドレス (URL)」と「サイトアドレス (URL)」の両方のURLをHerokuのURLに変更する。
```
http://localhost/wordpress
↓変更例
https://dry-shore-62911.herokuapp.com
```
※設定保存後はローカル環境ではログインできなくなる。（再度逆に設定を行えばローカル環境で再びログインできる）

HerokuのURLをhttpsにするため、wordpress/wp-config.php を開き96行目あたり（ABSPATHの上）に以下を追加する
```
$_SERVER['HTTPS'] = 'on'; 
```

## wordpress ディレクトリ直下に github 用の README.md を作る

Heroku側でもURL直打ちで参照できるので記載内容は注意

## Heroku にデプロイ

コマンドプロンプトを起動して以下コマンドでデプロイ。
```
cd C:\xampp\htdocs\wordpress
git add .
git commit -m init
git push heroku master
```

## Herokuサイト側でWP美容室5.4章以降の作業をする

https://dry-shore-62911.herokuapp.com/

## Github にプッシュ

```
git remote add origin git@github.com:minopon/hair-tech.git
git push origin master
```
