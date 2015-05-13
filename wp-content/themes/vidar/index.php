<?php get_header(); ?>

	<!-- Index
	================================================== -->
	<div class="container">
		<div class="twelve columns">
			<?php while ( have_posts() ) : the_post() ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1><?php the_title();?></h1>
					<div class="entry-content">
						<?php the_content();?>
					</div>
					<?php global $authordata; ?>
					<div class="entry-meta">
						<span class="meta-prep meta-prep-author"><?php _e('By', 'ribs'); ?> </span>
						<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s', 'ribs' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
						<span class="meta-sep"> | </span>
						<span class="meta-prep meta-prep-entry-date"><?php _e('Published', 'ribs'); ?> </span>
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<?php edit_post_link( __( 'Edit', 'ribs' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
					</div>
				</div>
			<? endwhile;?>
		</div>
		<div class="four columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<!-- End Home Template -->

<?php get_footer(); ?>

