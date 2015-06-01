<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

	<!-- Blog Template
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
		<div class="eight columns">
			<div class="blog-box">
				<section>
				
					<?php 
					$args = array(
						'posts_per_page' => '6'
					);
					
					$the_query = new WP_Query($args); ?>
					<?php 
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
							<div class="row">
								<div class="border-box clearfix">
									
									<div class="three columns alpha image">
										<?php 
										if ( has_post_thumbnail() ) : 
											?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full', array( 'class' => 'scale-with-grid' )); ?></a>
											<?php 
										else:
											?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="http://placehold.it/780x585" class="scale-with-grid" /></a>
											<?php 
										endif; 
										?>
									</div>
									<div class="four columns alpha-omega content ">
										<h2><a href="<?php the_permalink(); ?>" class-"entry-title"><?php the_title(); ?></a></h2>
										<div class="entry-meta">
											<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
											<?php edit_post_link( __( 'Edit', 'ribs' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
										</div>
										<div class="entry-content">
											<?php the_content('<span class="read-more">Read more &raquo;</span>'); ?>
										</div>
										<div class="entry-categories">
											<ul>
												Filed Under: <?php the_category(', '); ?>
											</ul>								
										</div>
										<div class="entry-tags">
											<ul>
											<?php the_tags( 'Tagged as: ', ', ', '' ); ?> 
											</ul>								
										</div>
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
					?>
					
				</section>
			</div>
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

