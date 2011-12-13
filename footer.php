<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="footer-top">
		</div><!-- #footer-top -->
		<div id="footer-bottom">
			<div id="footer-bottom-inner">
				<div id="copyright">
					Content &copy;copyright <?php echo date("Y"); ?> Darkroom Software, LLC. All Rights Reserved. Made by <a href="http://mojomedialabs.com/">Mojo Media Labs</a>.
				</div><!-- #copyright -->
				<div id="footer-buttons">
					<ul>
						<li id="buy-button">
							<a href="<?php echo home_url( '/' ); ?>buy/buy-direct">
								<!-- <img src="<?php bloginfo('template_directory'); ?>/images/buy-button.png" onmouseover="this.src='<?php bloginfo("template_directory"); ?>/images/buy-button-hover.png'" onmouseout="this.src='<?php bloginfo("template_directory"); ?>/images/buy-button.png'"> -->
								<img src="<?php bloginfo('template_directory'); ?>/images/buy-button.png" />
							</a>
						</li>
						<li id="try-button">
							<a href="<?php echo home_url( '/' ); ?>learn/try-for-free">
								<img src="<?php bloginfo('template_directory'); ?>/images/try-button.png" />
							</a>
						</li>
						<li id="contact-button">
							<a href="<?php echo home_url( '/' ); ?>contact-us">
								Contact Us
							</a>
						</li>
					</ul>
				</div><!-- #footer-buttons -->
				<div id="footer-search">
					<form action="<?php echo home_url( '/' ); ?>" method="get" role="search">
						<label for="s" class="screen-reader-text">Search for:</label>
						<input type="text" id="s" name="s" value="<?php echo get_search_query() ?>" />
						<input type="image" value="Search" id="searchsubmit" src="<?php bloginfo('template_directory'); ?>/images/search.png" />
					</form>
				</div>
			</div><!-- #footer-bottom-inner -->
		</div><!-- #footer-bottom -->
	</div><!-- #footer -->

</div><!-- #wrapper-inner -->
</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
