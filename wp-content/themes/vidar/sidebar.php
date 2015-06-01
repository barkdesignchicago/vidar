<!-- Sidebar
================================================== -->

<aside id="sidebar">
	<?php
	if( have_rows('sidebar_callout_box') ):
		?>
		<div id="pre-widget-area" class="widget-area">
			<ul class="sid">
			<?php
				while ( have_rows('sidebar_callout_box') ) : the_row();
					?>
					<li class="sidebar-callout-box">
						<?php
						the_sub_field('text');
						?>
					</li>
					<?php
				endwhile;
			?>
			</ul>
		</div>
	<?php
	endif;
	?>


	<?php if ( is_active_sidebar('primary-widget-area') ) : ?>
		<div id="primary" class="widget-area">
			<ul class="sid">
				<?php dynamic_sidebar('primary-widget-area'); ?>
			</ul>
		</div>
	<?php endif; ?>
</aside>

<!-- End Sidebar
================================================== -->
