<?php
/**
 * Title: Magazine Featured List
 * Slug: nevo/magazine-featured-list
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Featured List', 'nevo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:read-more {"content":"See all"} /--></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":44,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"100%","height":"250px","align":"wide","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|small","bottom":"0"},"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:avatar {"size":25,"style":{"border":{"radius":"50px"}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"meta","fontSize":"base"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"textColor":"meta","fontSize":"base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"},"padding":{"right":"0","left":"0"}}},"textColor":"title","className":"is-style-title-hover-primary-color","fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"textColor":"foreground","fontSize":"normal"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
<div class="wp-block-column"><!-- wp:query {"queryId":33,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"120px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:120px"><!-- wp:post-featured-image {"isLink":true,"width":"120px","height":"86px","align":"wide","style":{"border":{"radius":"5px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|dark-heading-color"}}}},"textColor":"title","className":"is-style-title-hover-primary-color"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"textColor":"meta","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->