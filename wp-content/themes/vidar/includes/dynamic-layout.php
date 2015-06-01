	<?php
	if( have_rows('layout_builder') ):
	    while ( have_rows('layout_builder') ) : the_row();
	        if( get_row_layout() == 'intro_block' ):
				?>
				<div class="row">
					<div class="eight columns alpha">
						<?php 
						$bgimage = get_sub_field('background_image');
						if( !empty($image) ): 
							?>
							<div class="intro-block" style="background-image:url(<?php echo $image['url']; ?>); background-position:center center; background-size: cover;">
							
							<?php
						else:
							?>
							<div class="intro-block" style="background-image:url(<?php bloginfo('template_directory') ?>/assets/images/bg_intro_block_default.jpg); background-position:center center; background-size: cover;">
							<?php								
						endif;
								the_sub_field('text');
							?>					
							</div>
					</div>						
				</div>
				<?php
		    elseif( get_row_layout() == 'full_width_block' ):
				?>
				<div class="row">
					<div class="eight columns alpha">
						<?php
						the_sub_field('text');
						?>
					</div>
				</div>
				<?php
		    elseif( get_row_layout() == 'two_column_block' ):
				?>
				<div class="row">
					<div class="four columns alpha">
						<?php
						the_sub_field('column_1');
						?>
					</div>
					<div class="four columns omega">
						<?php
						the_sub_field('column_2');
						?>
					</div>
				</div>
				<?php
	        elseif( get_row_layout() == 'image_and_text_block' ):
				?>
				<div class="row">
				<?php
					$image = get_sub_field('image');
					if( !empty($image) ): 
					?>
					<div class="two columns alpha">
						<?php
						echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="scale-with-grid" />';
						?>
					</div>
					<div class="six columns omega">
					<?php
					else:					
					?>
					<div class="eight columns alpha">
					<?php
					endif;
						the_sub_field('text');
						?>
					</div>
				</div>
				<?php
	        elseif( get_row_layout() == 'callout_block' ):
				?>
				<div class="row">
					<div class="eight columns alpha" style="background-color: <?php the_sub_field('background_color') ;?>">
						<div class="callout-block">
							<?php
							the_sub_field('text');
							?>
						</div>
					</div>
				</div>
				<?php
				;
	        elseif( get_row_layout() == 'quote_block' ):
				?>
				<div class="row">
					<div class="eight columns alpha">
						<div class="quote-block">
							&ldquo;<?php the_sub_field('quote_text');?>&rdquo; <span>- <?php the_sub_field('quote_author');?></span>
						</div>
					</div>
				</div>
				<?php
				;
	        endif;
	
	    endwhile;
	else :
	    // no layouts found
	endif;
			
	?>
