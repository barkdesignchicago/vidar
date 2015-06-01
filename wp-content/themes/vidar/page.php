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
			</section>
		</div>
		<div class="four columns">
			<section>
				<?php
				$children = get_pages('child_of='.$post->ID);
					if( count( $children ) != 0 ):
						the_sub_nav($post->ID, 1);
					elseif ( is_page() && $post->post_parent > 0 ): 
						the_sub_nav($post->post_parent, 1);
					else:
						// Nothing
					endif;
				?>

				<?php get_sidebar(); ?>
			</section>
		</div>
	</div>
	</section>
<?php get_footer(); ?>

