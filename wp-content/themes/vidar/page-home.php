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
						<div id="home-hero" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/bg_hero.png); background-position:center center; background-size:cover;">
							<div id="hero-text">
								<header>
									<h1>
										Experience.<br />
										Innovation.<br />
										<span>Results.</span>
									</h1>
								</header>
							</div>
						</div>
					</section>
				</div>
				<div class="four columns">
					<section>
						<div id="home-intro-container">
							<p>
								<span>Vidar Law Group</span>, based in Chicago, has been representing businesses in commercial litigation matters and business transactions for more than a dozen years. 
							</p>
							<p>
								Our attorneys were trained at some of the top law schools and some of the biggest law firms in the country. Vidar Law Group was founded in order to combine its attorneys&rsquo; strong traditional background and education with the latest technology and entrepreneurial innovation.  
							</p>
							<p>
								<a href="#">See more &raquo;</a>
							</p>
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
							<p>
								Businesses cannot be successful if they don&rsquo;t fully understand their expenses. Legal fees are a necessary component of any business, but unlike other law firms, Vidar believes those fees should be as transparent as possible... 
							</p>
							<p>
								<a href="#">See more &raquo;</a>
							</p>
						</div>
					</section>
				</div>
				<div class="five columns">
					<section>
						<aside>
							<div class="bio-container clearfix">
								<h1>Chris Werner <span>\ Founding Partner</span></h1>
								<img src="http://placehold.it/120x155" class="scale-with-grid" />
								<p>
									&ldquo;Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Suspendisse vel maximus ex, at blandit diam. Pellen tesque imperdiet auctor lorem, eu digni ssim turpis auctor pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&rdquo; 
								</p>
								<p>
									<a href="#">See more &raquo;</a>
								</p>
							</div>
						</aside>
					</section>
				</div>
			</div>
		</div>
	</section>
	<!-- End Home Template -->

<?php get_footer(); ?>

