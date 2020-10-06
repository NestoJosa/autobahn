<?php
/**
* The template for displaying the footer.
*
* @package Salient WordPress Theme
* @version 10.5
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nectar_options = get_nectar_theme_options();
$header_format  = ( !empty($nectar_options['header_format']) ) ? $nectar_options['header_format'] : 'default';

?>

<div class="footer-wrapper" <?php nectar_footer_attributes(); ?>>

  <div class="footer footer--horizontal">
    <div class="footer__newsletter-signup">
      <!-- embedded newsletter goes here -->
      Newsletter Signup
    </div>
    <div class="footer__links footer__links--flex-dir-rows">
      <a href="https://www.linkedin.com/company/autobahncph/">LinkedIn</a>
      <a href="http://web1.autobahncph.dk/gratis-analyse/">Kontakt Os</a>
      <a href="#">Privatlivspolitik</a>
    </div>
    <a class="footer__logo-link" href="http://localhost:8888/web1" >
      <img class="footer__logo-image" src="http://web1.autobahncph.dk/wp-content/uploads/2020/07/Autobahn-logo.svg" alt="logo" />
    </a>
  </div><!-- /footer -->

	<?php
	get_template_part( 'includes/partials/footer/call-to-action' );
	get_template_part( 'includes/partials/footer/main-widgets' );
  get_template_part( 'includes/partials/footer/copyright-bar' ); 
	?>
	
</div><!--/footer-wrapper-->

<?php

nectar_hook_before_outer_wrap_close();

get_template_part( 'includes/partials/footer/off-canvas-navigation' );

?>

</div> <!--/ajax-content-wrap-->

<?php
	
	// Boxed theme option closing div.
	if ( ! empty( $nectar_options['boxed_layout'] ) && 
	'1' === $nectar_options['boxed_layout'] && 
	'left-header' !== $header_format ) {

		echo '</div><!--/boxed closing div-->'; 
	}
	
	get_template_part( 'includes/partials/footer/back-to-top' );
	get_template_part( 'includes/partials/footer/body-border' );
	
	nectar_hook_after_wp_footer();
	nectar_hook_before_body_close();
	
  wp_footer();
  
?>

</body>
</html>