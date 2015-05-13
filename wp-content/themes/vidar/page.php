<?php get_header(); ?>

	<!-- Page Template
	================================================== -->
	<div class="container">
		<div class="twelve columns">
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title();?></h1>
				<div class="entry-content">
					<?php the_content();?>
					<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'ribs' ) . '&after=</div>') ?>
					<?php edit_post_link( __( 'Edit', 'ribs' ), '<div class="edit-link">', '</div>' ) ?>
				</div>
			</div>
		</div>
		<div class="four columns">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>

