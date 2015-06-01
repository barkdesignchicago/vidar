<?php
/*
Template Name: Case Study
*/
?>
<?php get_header(); ?>

	<!-- Page Template
	================================================== -->
	<section>
	<div class="container">
		<div class="twelve columns">
			<h1><?php the_title();?></h1>
		</div>
		<div class="eight columns">
			<section>
				<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php include('includes/dynamic-layout.php'); ?>	
				</div>

				<?php 
				$args = array(
					'post_type' => 'case-study',
					'posts_per_page' => '-1'
				);
				
				$the_query = new WP_Query($args); ?>
				<?php 
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
						<div class="row case-study-excerpt">
							<div class="eight columns alpha-omega">
								<h2><a href="<?php the_permalink(); ?>" class="entry-title"><?php the_title(); ?></a></h2>
								<div class="entry-content">
									<?php the_field('excerpt', $post->ID); ?>
									<a href="<?php the_permalink(); ?>" class="read-more">Read More &raquo;</a>
								</div>
							</div>
						</div>
						<?php 
					endwhile; 
				else: 
					?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php 
				endif; 
				wp_reset_postdata();
				?>

	
			</section>
		</div>
		<div class="four columns">
			<section>
				<?php get_sidebar(); ?>
			</section>
		</div>
	</div>
	</section>
<?php get_footer(); ?>

