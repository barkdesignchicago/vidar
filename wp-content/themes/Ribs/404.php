<?php get_header(); ?>

	<!-- 404
	================================================== -->
	<div class="container">
		<div class="twelve columns">
			<div id="post-0" class="post error404 not-found">
				<h1><?php _e('Not Found', 'ribs'); ?></h1>
				<div class="entry-content">
					<p><?php _e('Nothing found for the requested page. Try a search instead?', 'ribs'); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
		<div class="four columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<!-- End 404 Template -->

<?php get_footer(); ?>

