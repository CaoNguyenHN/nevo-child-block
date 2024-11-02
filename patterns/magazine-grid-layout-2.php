<?php
/**
 * Title: Magazine - Grid layout 2
 * Slug: nevo/magazine-grid-layout-2
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Grid layout 2', 'nevo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:read-more {"content":"See all"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":44,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":2}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"focalPoint":{"x":0.5,"y":0.5},"minHeight":561,"contentPosition":"bottom left","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","right":"var:preset|spacing|40","left":"var:preset|spacing|50"},"blockGap":"0","margin":{"bottom":"var:preset|spacing|medium"}},"border":{"radius":"5px"}},"className":"is-style-default"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-default" style="border-radius:5px;margin-bottom:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:561px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-terms {"term":"category","textColor":"white","className":"is-style-categories-primary-background-color","fontSize":"normal"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"white","className":"is-style-title-hover-primary-color","fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":25,"style":{"border":{"radius":"40px"}}} /-->

<!-- wp:post-author-name {"textAlign":"left","style":{"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"right":"0","left":"var:preset|spacing|xx-small"}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"textColor":"white","fontSize":"normal"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":33,"query":{"perPage":"6","pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"is-style-columns-responsive","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"},"blockGap":"0"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:0px;padding-top:var(--wp--preset--spacing--xx-small);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true,"height":"100px","align":"wide","style":{"border":{"radius":"5px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-heading-color"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|xx-small"}}},"textColor":"title","className":"is-style-title-hover-primary-color"} /-->

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