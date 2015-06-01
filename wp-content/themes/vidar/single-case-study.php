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

				<?php include('includes/dynamic-layout.php'); ?>	


				<div class="entry-categories">
					<ul>
					Categories: <?php the_category(', '); ?>
					</ul>								
				</div>
				<div class="entry-tags">
					<ul>
						<?php the_tags( 'Tags: ', ', ', '' ); ?> 
					</ul>								
				</div>

			</section>
		</div>
		<div class="four columns">
			<section>
				<div id="case-study-widget-area" class="widget-area">
					<ul class="sid">
						<li class="widget_case_study">
							<h3 class="widget-title">Case Studies</h3>
							<ul>
							<?php 
							$args = array(
							  'post_type'=>'case-study',
							  'title_li' => ''
							);
							wp_list_pages( $args ); 
							?> 								
							</ul>
						</li>
					</ul>
				</div>
				<?php get_sidebar(); ?>
			</section>
		</div>
	</div>
	</section>
<?php get_footer(); ?>