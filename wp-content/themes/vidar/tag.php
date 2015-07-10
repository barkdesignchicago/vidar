<?php get_header(); ?>

	<!-- Tag Template
	================================================== -->
	<section>
	<div class="container">
		<div class="twelve columns">
			<?php the_post(); ?>
			<h1 class="page-title"><?php _e( 'Tag Archives:', 'ribs' ) ?> <span><?php single_tag_title() ?></span></h1>
			<?php rewind_posts(); ?>
		</div>
		<div class="eight columns">

			<div class="blog-box">
				<section>
					<?php 
					global $query_string;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;				
					query_posts($query_string.'&paged=' . $paged); 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
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
											<?php
												$ismore = @strpos( $post->post_content, '<!--more-->');
												if($ismore) : 
													the_content('<span class="read-more">Read more &raquo;</span>');
												else : 
													echo wp_trim_words( get_the_content(), 70, '...<p><a href="'.get_the_permalink($post->postID).'"><span class="read-more">Read more &raquo;</span></a></p>' );
												endif;
											?>
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
						?>
						  <nav class="pagination">
						    <div class="prev-posts-link">
						      <?php echo get_next_posts_link( 'Older Entries' ); // display older posts link ?>
						    </div>
						    <div class="next-posts-link">
						      <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
						    </div>
						  </nav>
						
						<?php
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
			<?php get_sidebar(); ?>
		</div>
	</div>
	</section>
	<!-- End Category Template -->

<?php get_footer(); ?>