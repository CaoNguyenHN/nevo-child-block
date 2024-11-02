<?php
/**
 * Title: Magazine - Grid layout 3
 * Slug: nevo/magazine-grid-layout-3
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Grid layout 3', 'nevo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:read-more {"content":"See all"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":33,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-columns-responsive","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0.5rem","bottom":"0.5rem"},"blockGap":"0"},"border":{"radius":"0px"}},"backgroundColor":"neutral-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-neutral-color-background-color has-background" style="border-radius:0px;padding-top:0.5rem;padding-right:var(--wp--preset--spacing--30);padding-bottom:0.5rem;padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"30%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true,"height":"100px","align":"wide","style":{"border":{"radius":"5px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-heading-color"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xx-small","left":"0","right":"0"}}},"textColor":"title","className":"is-style-title-hover-primary-color"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":24,"style":{"border":{"radius":"50px"}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"var:preset|spacing|xx-small","right":"0"}}},"textColor":"meta","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"textColor":"meta","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->