	<!-- Footer
	================================================== -->
	<div class="big-container full-width footer">
		<div class="container">
			<div class="one column">
<!-- 				<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo_vidar_wolf.png" alt="Vidar Law Wolf Logo" width="31" height="40" /> -->
			</div>
			<div class="three columns copyright">
				<p>
					&copy;2015 Vidar Law Group, LLC.<br />
					All Rights Reserved.
				</p>
				<p>
					This web site is attorney advertising and is designed for general informational purposes only and is not formal legal advice.
				</p>
			</div>
			<div class="two columns address">
				<strong>VIDAR LAW GROUP</strong><br />
				53 West Jackson Blvd<br />
				Suite 1627<br />
				Chicago, Illinois 60604<br />
				<a href="#">MAP &raquo;</a>
			</div>
			<div class="two columns contact">
				p: <a href="tel:1312.895.4993">312.895.4993</a><br />
				e: <a href="mailto:info@vidarlaw.com">info@vidarlaw.com</a>				
			</div>
			<div class="two columns">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu' ) ); ?>
			</div>
			<div class="two columns">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-utility-menu', 'menu_class' => 'footer-utility' ) ); ?>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
	<!-- End Footer Template -->

<!-- End Document
================================================== -->
</body>
</html>
