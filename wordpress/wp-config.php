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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'kyoudou_group' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'kyoudou_group' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'TbxCP7P2ZT' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z4(y!]HD99<p#-]5Ct79IK~</z%_~<]#WgKs2D.Mkuh)#Y)j8r!<f7bB)EkymxQQ' );
define( 'SECURE_AUTH_KEY',  '(TsA<jQ3pX/L/cVY<w0}lt/P<z<258jZNdjh7hi`2P|pVz.VgEe<OOV kl8j%Q^c' );
define( 'LOGGED_IN_KEY',    'Ivl/N.Qc>Ca!`}_>ZO(U})Wz9brtdbF,X0T4]D@s3fR/iO#s{avk@!mqNk8Xe=s:' );
define( 'NONCE_KEY',        'p:,~W1CynYoOj U#7+PBoi]T2:<#n9l:;gF4OOg},;U?jg?:f#A_bfcV@>Xs^&5g' );
define( 'AUTH_SALT',        'P546$u&01mTJjxyK2Hj@xrjL+W3=GJpb[W:JEp>3DybkYC-%Y{V:z(il&?Zz}C])' );
define( 'SECURE_AUTH_SALT', 'uCVI!q9E;&<}-S=h2jS{Wvu7uy0O|qrliweq%yT<f}ETfe^3-Jzw;EJv%F2}=yta' );
define( 'LOGGED_IN_SALT',   '*gV@;/ll(.ovX4Rl-D&Lkl.Iaw}BG$++AEB){T7%}dZo^DS4o]no9!D)h.gT+n&M' );
define( 'NONCE_SALT',       '0}f%~J|i-_l>t?,)2[$w6AisqQM0G.3px@Lba+FH_Zj)]7:vpcd=L?W@m8loSPZR' );

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
