<?php
/*
Template Name: news
*/
?>
<?php get_template_part('pages/ind-header'); ?>
<main role="main" class="news">
	<h1>NEWS</h1>
	<section class="container">
	<!-- SLUG-POST -->
	<?php
		$wp_query = new WP_Query();
		$my_posts = array(
			'post_type' => 'post',
			'category_name' => 'news',
			'posts_per_page'=> '-1',
		);
		$wp_query->query( $my_posts );
		if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
	?>
	<article id="post-<?php the_ID(); ?>">
		<time datetime="<?php echo get_the_date(); ?>">
			<span><?php echo get_the_date( 'Y' ); ?></span><span><?php echo get_the_date( 'm/d' ); ?></span>
		</time>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>
	<?php endwhile; endif; wp_reset_postdata(); ?>
	<!-- SLUG-POST -->
	</section>
<?php get_footer(); ?>
