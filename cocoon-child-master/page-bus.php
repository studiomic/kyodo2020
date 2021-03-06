<?php
/*
Template Name: bus
*/
?>
<?php get_template_part('pages/ind-header'); ?>
	<link rel="stylesheet" href="/wp/css/page-bus.css">
<?php get_template_part('pages/ind-nav'); ?>
<main role="main" class="pb4" id="bus">
	<!-- SLUG-POST -->
	<?php
		$wp_query = new WP_Query();
		$my_posts = array(
			'post_type' => 'post',
			'category_name' => 'bus',
			'posts_per_page'=> '-1',
		);
		$wp_query->query( $my_posts );
		if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
	?>
<?php the_content(); ?>
	<?php endwhile; endif; wp_reset_postdata(); ?>
	<!-- SLUG-POST -->
	<section class="contactUs">
		<h3>お問い合わせは、お電話かEメールで</h3>
		<div>
			<p>
				<svg class="phone" xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><path d="M17.5 2c.276 0 .5.224.5.5v19c0 .276-.224.5-.5.5h-11c-.276 0-.5-.224-.5-.5v-19c0-.276.224-.5.5-.5h11zm2.5 0c0-1.104-.896-2-2-2h-12c-1.104 0-2 .896-2 2v20c0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2v-20zm-9.5 1h3c.276 0 .5.224.5.501 0 .275-.224.499-.5.499h-3c-.275 0-.5-.224-.5-.499 0-.277.225-.501.5-.501zm1.5 18c-.553 0-1-.448-1-1s.447-1 1-1c.552 0 .999.448.999 1s-.447 1-.999 1zm5-3h-10v-13h10v13z"/></svg>
			</p>
			<p class="grow">
				<address>
					<a href="tel:045-851-1551">045-438-9161</a> (乗合バス)<br>
					<a href="tel:045-851-1551">045-438-9168</a> (貸切バス)<br>
					<span>FAX &nbsp;045-438-9162 (共通)</span>
				</address>
			</p>
			<p>
				<a href="mailto:info@kyoudou-group.jp">
				<svg class="atto" xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><path d="M13.718 10.528c0 .792-.268 1.829-.684 2.642-1.009 1.98-3.063 1.967-3.063-.14 0-.786.27-1.799.687-2.58 1.021-1.925 3.06-1.624 3.06.078zm10.282 1.472c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-1.194c0-3.246-2.631-5.601-6.256-5.601-4.967 0-7.744 3.149-7.744 7.073 0 3.672 2.467 6.517 7.024 6.517 2.52 0 4.124-.726 5.122-1.288l-.687-.991c-1.022.593-2.251 1.136-4.256 1.136-3.429 0-5.733-2.199-5.733-5.473 0-5.714 6.401-6.758 9.214-5.071 2.624 1.642 2.524 5.578.582 7.083-1.034.826-2.199.799-1.821-.756 0 0 1.212-4.489 1.354-4.975h-1.364l-.271.952c-.278-.785-.943-1.295-1.911-1.295-2.018 0-3.722 2.19-3.722 4.783 0 1.73.913 2.804 2.38 2.804 1.283 0 1.95-.726 2.364-1.373-.3 2.898 5.725 1.557 5.725-3.525z"/></svg></a>
			</p>
		</div>
	</section>
<?php get_footer(); ?>
