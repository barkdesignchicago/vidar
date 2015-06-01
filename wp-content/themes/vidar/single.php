<?php get_header(); ?>

	<!-- Blog Template
	================================================== -->
	<section>
	<div class="container">
		<div class="twelve columns">
			<?php the_post(); ?>
			<h1 class="single-title"><?php the_title();?></h1>
			<div class="entry-meta">
				<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				<?php edit_post_link( __( 'Edit', 'ribs' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
			</div>
		</div>
		<div class="eight columns content">
			<section>
				<?php the_content(); ?>

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