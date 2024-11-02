<?php
/**
 * Title: Team Members 2
 * Slug: nevo/team-members-2
 * Categories: nevo-teams
 * Keywords: team, member
 *
 * @package Nevo
 */

$nevo_url = trailingslashit(get_stylesheet_directory_uri());
$nevo_images = array(
  $nevo_url  . 'assets/images/page-content/testimonial_1.png',
  $nevo_url  . 'assets/images/page-content/testimonial_2.png',
  $nevo_url  . 'assets/images/page-content/testimonial_3.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-bottom:0"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong><?php esc_html_e( 'OUR TEAM', 'nevo' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html('Meet the Experts', 'nevo') ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large"},"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large)"><!-- wp:column {"style":{"spacing":{"padding":{"right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-right:0"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"dimensions":{"minHeight":"100%"}},"className":"is-style-nevo-boxshadow is-style-boxshadow-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nevo-boxshadow is-style-boxshadow-large" style="border-radius:10px;min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"align":"center","id":1822,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($nevo_images[0]) ?>" alt="" class="wp-image-1822" style="width:120px;height:120px" width="120" height="120"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('Alex T', 'nevo') ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html('Software Engineer', 'nevo') ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"size":"has-small-icon-size","align":"center"} -->
<ul class="wp-block-social-links aligncenter has-small-icon-size"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('The placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'nevo') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"dimensions":{"minHeight":"100%"}},"className":"is-style-nevo-boxshadow is-style-boxshadow-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nevo-boxshadow is-style-boxshadow-large" style="border-radius:10px;min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"align":"center","id":1823,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}},"className":"is-style-nevo-boxshadow"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-nevo-boxshadow"><img src="<?php echo esc_url($nevo_images[1]) ?>" alt="" class="wp-image-1823" style="border-radius:50%;width:120px;height:120px" width="120" height="120"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('Liyana R', 'nevo') ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html('Software Engineer', 'nevo') ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"size":"has-small-icon-size","align":"center"} -->
<ul class="wp-block-social-links aligncenter has-small-icon-size"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('The placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'nevo') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column" style="padding-left:0"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"dimensions":{"minHeight":"100%"}},"className":"is-style-nevo-boxshadow is-style-boxshadow-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nevo-boxshadow is-style-boxshadow-large" style="border-radius:10px;min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"align":"center","id":1826,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($nevo_images[2]) ?>" alt="" class="wp-image-1826" style="width:120px;height:120px" width="120" height="120"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('Lexy M', 'nevo') ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html('Software Engineer', 'nevo') ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"size":"has-small-icon-size","align":"center"} -->
<ul class="wp-block-social-links aligncenter has-small-icon-size"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('The placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'nevo') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->