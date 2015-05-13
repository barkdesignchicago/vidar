<?php get_header(); ?>

	<!-- Article Template
	================================================== -->
	<div class="container">
		<div class="twelve columns">
			<article id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1><?php the_title();?></h1>
					<div class="entry-content">
						<?php the_content();?>
					</div>
				</div>
			<?php endwhile; endif; ?>
			</article>
		</div>
		<div class="four columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<!-- End Article Template -->

<?php get_footer(); ?>


