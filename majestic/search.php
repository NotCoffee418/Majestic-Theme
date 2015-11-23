<?php get_header(); ?>

	<main role="main" class="col-sm-9 col-md-9 col-lg-9">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'majestic' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
