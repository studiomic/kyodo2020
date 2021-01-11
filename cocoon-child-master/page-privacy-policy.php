<?php
/*
Template Name: privacy-policy
*/
?>
<?php get_template_part('pages/ind-header'); ?>
<main class="privacy-policy">
	<!-- SLUG-POST -->
	<?php
		$wp_query = new WP_Query();
		$my_posts = array(
			'post_type' => 'post',
			'category_name' => 'privacy-policy',
			'posts_per_page'=> '-1',
		);
		$wp_query->query( $my_posts );
		if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
	?>
<?php the_content(); ?>
	<?php endwhile; endif; wp_reset_postdata(); ?>
	<!-- SLUG-POST -->
<?php get_template_part('pages/section-contactus'); ?>
<?php get_footer(); ?>
