<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>
</main>
<!-- END.main -->
    <?php
    ////////////////////////////
    //コンテンツ下部ウィジェット
    ////////////////////////////
    if ( is_active_sidebar( 'content-bottom' ) ) : ?>
    <div id="content-bottom" class="content-bottom wwa">
      <div id="content-bottom-in" class="content-bottom-in wrap">
        <?php dynamic_sidebar( 'content-bottom' ); ?>
      </div>
    </div>
    <?php endif; ?>

    <?php //投稿パンくずリストがフッター手前の場合
    if ((is_single() || is_category()) && is_single_breadcrumbs_position_footer_before()){
      get_template_part('tmp/breadcrumbs');
    } ?>

    <?php //固定ページパンくずリストがフッター手前の場合
    if (is_page() && is_page_breadcrumbs_position_footer_before()){
      get_template_part('tmp/breadcrumbs-page');
    } ?>

    <?php //フッターにウィジェットが一つも入っていない時とモバイルの時は表示しない
    if ( (is_active_sidebar('footer-left') ||
      is_active_sidebar('footer-center') ||
      is_active_sidebar('footer-right') )  ): ?>
      <div class="footer-widgets cf">
         <div class="footer-left">
         <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-left') ) : else : ?>
         <?php endif; ?>
         </div>
         <div class="footer-center">
         <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-center') ) : else : ?>
         <?php endif; ?>
         </div>
         <div class="footer-right">
         <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-right') ) : else : ?>
         <?php endif; ?>
    <?php endif; ?>

    <?php //モバイルウィジェット
    if (is_active_sidebar('footer-mobile')): ?>
      <div class="footer-widgets-mobile cf">
         <div class="footer-mobile">
         <?php dynamic_sidebar('footer-mobile'); ?>
         </div>
      </div>
    <?php endif ?>

    <?php //管理者用パネル
    get_template_part('tmp/admin-panel'); ?>
    <?php //モバイルヘッダーメニューボタン
    get_template_part('tmp/mobile-header-menu-buttons'); ?>
    <?php //モバイルフッターメニューボタン
    get_template_part('tmp/mobile-footer-menu-buttons'); ?>
    <?php //トップへ戻るボタンテンプレート
    get_template_part('tmp/button-go-to-top'); ?>
    <?php if (!is_amp()) {
      //再利用用にフッターコードを取得
      //wp_footer()関数では、一度しか出力が行われないようなので事前にグローバル変数に格納しておく
      global $_WP_FOOTER;
      ob_start();
      wp_footer();
      $f = ob_get_clean();
      echo $f;
      $_WP_FOOTER = $f;
    } ?>
    <?php //フッターで読み込むscriptをまとめたもの
    //get_template_part('tmp/footer-scripts');?>
  <?php //barba.js処理
  get_template_part('tmp/footer-barba-js');?>

  <footer>
  	<h2><a href="#">株式会社共同</a></h2>
  	<address>
  		<p>〒244-0845 神奈川県横浜市栄区金井町164-1</p>
  		<p>TEL &nbsp; 045-851-1551 &nbsp; &nbsp; FAX &nbsp; 045-851-0081</p>
  	</address>
  	<small>Copyright &copy; <?php echo date( 'Y' ); ?> Kyoudou Co.,Ltd. All Rights Reserved.</small>
	</footer>
  <script>
  	$(document).ready(function() {
  	  $('.drawer').drawer();
  	});
  </script>
</body>
</html>
