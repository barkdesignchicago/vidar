<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<!-- Home
	================================================== -->
	<section>
		<div class="container home">
			<div class="row">
				<div class="eight columns">
					<section>
						<?php
							$heroimage = get_field('hero_image');
							if( !empty($image) ): 
								$hero_bg_image = $heroimage['url'];
							else:
								$hero_bg_image = get_bloginfo('template_directory') . "/assets/images/bg_hero.png";

							endif;

						?>
						<div id="home-hero" style="background-image:url(<?php echo $hero_bg_image;?>); background-position:center center; background-size:cover;">
							<div id="hero-text">
								<header>
									<?php the_field('intro_block'); ?>

								</header>
							</div>
						</div>
					</section>
				</div>
				<div class="four columns">
					<section>
						<div id="home-intro-container">
							<?php the_field('callout'); ?>
						</div>
					</section>
				</div>
			</div>
			<div class="row">
				<div class="four columns">
					<section>
						<div id="twitter-container">
							<h1>VLG on <span>Twitter</span></h1>
							<p>
								<span>DEC 29</span>
								Stability is more important than high-flying numbers. Headline misses the important part of the story. http://www.entrepreneur.com/article/241306 #bitcoin
							</p>
							<p>
								<span>NOV 22</span>
								Article regarding small businesses using Bitcoin. http://www.nfib.com/article/bitcoin-for-small-business-pros-and-cons-bizhelp-66685/ #bitcoin #cryptocurrency #smallbusiness #legal 
							</p>
							<p>
								<span>NOV 22</span>
								Article regarding small businesses using Bitcoin. http://www.nfib.com/article/bitcoin-for-small-business-pros-and-cons-bizhelp-66685/ #bitcoin #cryptocurrency #smallbusiness #legal												
							</p>
						</div>
					</section>
				</div>
				<div class="eight columns">
					<section>
						<div id="home-blog-container">					
							<aside>
								<h1><a href="/blog">VLG <span>Blog</span></a></h1>

								<?php 
									$args = array(
										'posts_per_page' => '2'
									);
									
									$the_query = new WP_Query($args); ?>
									<?php 
									if ( $the_query->have_posts() ) :
										$i=0;
										while ( $the_query->have_posts() ) : $the_query->the_post();
											?>
											<div class="four columns <?php echo ($i == 0 ? 'alpha' : 'omega') ?>">

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


												<h2><a href="<?php the_permalink(); ?>" class-"entry-title"><?php the_title(); ?></a></h2>
												<div class="entry-content">
													
													<?php echo wp_trim_words( get_the_content(), 40, '... <a href="'.get_permalink().'"><span class="read-more">Read more &raquo;</span></a>' ); ?>
												</div>
											</div>
											<?php 
											$i++;
										endwhile; 
									else: 
										?>
										<p><?php _e( 'Sorry, There are no blog posts right now. Please try again later.' ); ?></p>
										<?php 
									endif; 
									wp_reset_postdata();

									?>
							</aside>
						</div>
					</section>
				</div>
			</div>
			<div class="row">
				<div class="seven columns">
					<section>
						<div class="quote-container">
							<?php the_field('quote_text'); ?>
						</div>
					</section>
				</div>
				<div class="five columns">
					<section>
						<aside>
							<div class="bio-container clearfix">
								<h1><?php the_field('bio_title'); ?></h1>
								<?php the_field('bio_text'); ?>
							</div>
						</aside>
					</section>
				</div>
			</div>
		</div>
	</section>
	<!-- End Home Template -->

<?php get_footer(); ?>

