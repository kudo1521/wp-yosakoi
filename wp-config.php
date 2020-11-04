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
define( 'DB_NAME', 'wp-yosakoi' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^~kw,LWsA4sT1ZV82K>LL%FQF&o0_+gC+?t![/XLaT3 F _&WRg]`|wvvScam97>' );
define( 'SECURE_AUTH_KEY',  'e4pKJ694)KVfl=xjj{mmI`)HXD7m3xW?Ho~GBousF|DC vi9S9Pq-cLtzN%Ne%j]' );
define( 'LOGGED_IN_KEY',    'O)c<$0Xr{rxzs&/GLFR6K7kHJP&aP6[th=y^|nG?E OUmok4@cTl`i&wVhVO_X8<' );
define( 'NONCE_KEY',        '$M$YZu{R&MW288B#ct:BgAh6/MaT9G%DZX!!Hq(zld>2AuwV7 <7/ng=EAURLN{o' );
define( 'AUTH_SALT',        '*/R!<[]Y#M_fj Yz}0;LsG>/mR`1LqqJxiC#XbltD=[+Fr+-=kLa{1vg;BKjKn`3' );
define( 'SECURE_AUTH_SALT', '[u1vA5rd$f&*/#Bzq/&)IsrjErd;6kNAuLcc7=z,o0.G,?+<9$d*.rYTwEqOQ=BH' );
define( 'LOGGED_IN_SALT',   '_a[ ]p*C!py{JF+M=inet,L`?K`V,;w{wOdi~+<qd~n*o0h(dyH1Ef(]h-Uf7A-+' );
define( 'NONCE_SALT',       ')h=@ShO]HLNrByJo{O&v@N`k#t$MGau5NX%:,+pv.(i$77Gv]b}IKaX%0I3F)3$O' );

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
