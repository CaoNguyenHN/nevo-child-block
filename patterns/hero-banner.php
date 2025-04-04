<?php
/**
 * Title: Hero Banner
 * Slug: nevo/hero-banner
 * Categories: nevo-banner
 * Keywords: hero, banner
 *
 * @package Nevo
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0","bottom":"0"}},"color":{"background":"#8dd2fc33"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#8dd2fc33;margin-top:0px;margin-bottom:0px;padding-top:0;padding-bottom:0"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-small"}}},"textColor":"primary","fontSize":"base"} -->
<p class="has-primary-color has-text-color has-base-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Make a Difference', 'nevo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><strong><?php esc_html_e( 'Business Planning, Strategy &amp; Execution', 'nevo' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'We design an elegant set of WordPress Themes & Plugins

that help you create the website you always wanted!', 'nevo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"textColor":"white","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="#" style="padding-top:10px;padding-bottom:10px"><?php esc_html_e( 'Get Started', 'nevo' ); ?> →</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Learn More', 'nevo' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"align":"right","id":178,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/page-content/banner.png' ) ); ?>" alt="" class="wp-image-178"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
