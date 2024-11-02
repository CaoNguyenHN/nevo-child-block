<?php
/**
 * Title: Banner/Hero With CTA Box
 * Slug: nevo/hero-banner-with-cta-box
 * Categories: nevo-banner
 * Keywords: nevo, hero, banner
 *
 * @package Nevo
 */
$nevo_url = trailingslashit(get_stylesheet_directory_uri());
$nevo_icon_images = array(
    $nevo_url . 'assets/images/page-content/icon_easy_customize.svg',
    $nevo_url . 'assets/images/page-content/icon_mobile_first.svg',
    $nevo_url . 'assets/images/page-content/icon_pagebuilder.svg'
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|40"},"color":{"background":"#eff0f3"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#eff0f3;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"0","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained","contentSize":"660px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2}},"textColor":"heading-color","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html('Ultimate Partner for Your Business Growth', 'nevo') ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.7}},"textColor":"foreground"} -->
<p class="has-text-align-center has-foreground-color has-text-color" style="line-height:1.7"><?php echo esc_html('The passage experienced a surge in popularity during the 1960s when Letraset used.', 'nevo') ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"border":{"radius":"5px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><?php echo esc_html('Schedule an Appointment', 'nevo') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:columns {"className":"is-style-columns-124"} -->
<div class="wp-block-columns is-style-columns-124"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"4px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background","className":"is-style-nevo-boxshadow is-style-boxshadow-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nevo-boxshadow is-style-boxshadow-large has-background-background-color has-background" style="border-radius:4px;min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"nevo-duotone-primary"} -->
<figure class="wp-block-image aligncenter size-full nevo-duotone-primary"><img src="<?php echo esc_url($nevo_icon_images[0]) ?>" alt="" class="wp-image-974"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"medium"} -->
<h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size"><?php echo esc_html('Easy Customizable', 'nevo') ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'nevo') ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"transparent","textColor":"current-color","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-current-color-color has-transparent-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'nevo') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"4px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background","className":"is-style-nevo-boxshadow is-style-boxshadow-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nevo-boxshadow is-style-boxshadow-large has-background-background-color has-background" style="border-radius:4px;min-height:100%;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"nevo-duotone-primary"} -->
<figure class="wp-block-image aligncenter size-full nevo-duotone-primary"><img src="<?php echo esc_url($nevo_icon_images[1]) ?>" alt="" class="wp-image-974"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"medium"} -->
<h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size"><?php echo esc_html('Responsive Layout', 'nevo') ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'nevo') ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"transparent","textColor":"current-color","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-current-color-color has-transparent-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'nevo') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"4px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background","className":"is-style-nevo-boxshadow is-style-boxshadow-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nevo-boxshadow is-style-boxshadow-large has-background-background-color has-background" style="border-radius:4px;min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"align":"center","id":164,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"nevo-duotone-primary"} -->
<figure class="wp-block-image aligncenter size-full nevo-duotone-primary"><img src="<?php echo esc_url($nevo_icon_images[2]) ?>" alt="" class="wp-image-164"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"medium"} -->
<h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size"><?php echo esc_html('Pagebuilder', 'nevo') ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'nevo') ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"transparent","textColor":"current-color","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-current-color-color has-transparent-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'nevo') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"4px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background","className":"is-style-nevo-boxshadow is-style-boxshadow-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nevo-boxshadow is-style-boxshadow-large has-background-background-color has-background" style="border-radius:4px;min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","style":{"color":{}},"className":"nevo-duotone-primary"} -->
<figure class="wp-block-image aligncenter size-large nevo-duotone-primary"><img src="<?php echo esc_url($nevo_icon_images[1]) ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"medium"} -->
<h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size"><?php echo esc_html('SEO Optimized', 'nevo') ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'nevo') ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"transparent","textColor":"current-color","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-current-color-color has-transparent-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'nevo') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->