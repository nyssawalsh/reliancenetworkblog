<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				
				
  				
  				<div class="footer-contact-info">
    				<ul class="no-bullet">
      				<li>Contact us today!</li>
      				<li><i class="fa fa-mobile"></i> 877-231-3209</li>
    				</ul>
    				
    				<div class="copyright">
      				&copy;<?php echo date('Y'); ?> Reliance Network. All rights reserved. US Reg. Copyright TX-5-910-991, TX-5-910-992, TX-5-910-993, and TX-5-910-994.
    				</div>
  				</div>
  				
				
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>


</body>
</html>
