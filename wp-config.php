<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'vr6tyjjzm9k9trp7' );

/** データベースのユーザー名 */
define( 'DB_USER', 'utkvqvmz30htaedj' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'df4q4z6qx7swc1us' );

/** データベースのホスト名 */
define( 'DB_HOST', 'cxmgkzhk95kfgbq4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6:a>Ftdf_%[s5.Pr1kU@nA%/uq4$8[~Z@Wa#iqg|&]m2HzHVD:fPw5@(O|mlZ,WS' );
define( 'SECURE_AUTH_KEY',  'z.Rv/(LG7bi?z4p6!eUVKazB3;sEi[,g&I3.&sZ6|?*~(968_:m=)rVIUUz,]t}C' );
define( 'LOGGED_IN_KEY',    '6Pj7FY[h_]fFR=|0w)16s-M>z#`Sqlh*_/<L(v}SQB(9y,|HAFA;wdckX2_.+oKg' );
define( 'NONCE_KEY',        ':+.@aSpa3^n@IV^/|NdwA!L~H_5Mwzs./&v)<1HG+p!)[*I>gHH>lYnwto@+_1+s' );
define( 'AUTH_SALT',        '+9$5fCa#-,qqQz!q`m}6y#^)h!D9]F&a~|Mn56x-MmNL08$/xFEqVKIE;Lh=uVRd' );
define( 'SECURE_AUTH_SALT', 'j`jncVK13Ag]^Xp])i&R6l((1NlPpPs/?Irkl-#&Wlhf)h9 Lo]CrFYm1>~Dl+<x' );
define( 'LOGGED_IN_SALT',   'UMpbfr4M-SK$b */ggfx6qx-m6YDA9%m=:7=eiRx~Iv0f!_gyG/7n.!B#bgYlv?X' );
define( 'NONCE_SALT',       'VlEUp5O;3Ji k]EtZ~bLX$?jSDNpN3_xdbDLVk93~Kj6S2)mVsDS09j<hBw3qB<r' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

$_SERVER['HTTPS'] = 'on'; 

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
