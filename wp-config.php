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
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'ddr1qb9ehpt1qq');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'avffexkstluncd');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '2823a540d85b41cfac2472e70f9d5b2cf9f07e3e5ead3d8e3d46b54017689259');

/** MySQL のホスト名 */
define('DB_HOST', 'Qec2-184-73-169-163.compute-1.amazonaws.com');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
/*
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
*/

define('AUTH_KEY',         'S*Kx_pwUW&],2!nD(}=N/Ok+2p&.U-XL$$%T,@DM!&E52nx.|]SgD~5+mhTNpNGv');
define('SECURE_AUTH_KEY',  'z3rcYN,%U%7eY[D#u/. Q0:|Z_2TXm$B3lt!vNta^Jlkq,}T:%l;]E}ZeV&0}b2h');
define('LOGGED_IN_KEY',    '{UIH oF$xy&*c}=]p|:PLIu&D) {a_C@O@!+K%8-bcwA4gZ%uejY3WS@jmo+?Nk^');
define('NONCE_KEY',        'k&BrTRY=;+Jb*X`A3j.{:)!+*8WaC0MS}f;,d#agpZQXyyp7TaU`YALJcCN?aeaC');
define('AUTH_SALT',        '8pm!H1mdj 7 [*?O|Iq tt4o3m|]r`3-4NYW=%#elaheMII5Y%Jh/z/`je^*Acjh');
define('SECURE_AUTH_SALT', '`xmE&cg}AukP{e,O*mj7C$xY5+}M|b)-wZWo5yP~=RN!$+2&]8XI4]15VmI80>M2');
define('LOGGED_IN_SALT',   '(WI_w3}{xTFf%L<vE!3?xHE|=|$.x.):j-Ha2p]Cn<%tVSI pBN@I@E{|sn/n;B>');
define('NONCE_SALT',       'l 1=^_7O}nVc9~.af!Oifsm&b{gF&]w9,[my7G-y%V[og/y7*DBNm/=/BYg|`-{^');



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
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
