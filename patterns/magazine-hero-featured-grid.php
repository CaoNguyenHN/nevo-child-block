<?php
/**
 * Title: Hero - Featured Grid
 * Slug: nevo/magazine-hero-featured-grid
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--medium);padding-bottom:0;padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":44,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":2}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"minHeight":561,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"is-style-wnt-cover-round-style"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-wnt-cover-round-style" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small);min-height:561px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textColor":"white","className":"is-style-categories-primary-background-color","fontSize":"normal"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"},"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"0","right":"0"}}},"textColor":"white","className":"is-style-title-hover-primary-color","fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":30,"style":{"border":{"radius":"40px"}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"var:preset|spacing|xx-small","right":"0"}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"textColor":"white","fontSize":"normal"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":44,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"minHeight":270,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"className":"is-style-wnt-cover-round-style"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-wnt-cover-round-style" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small);min-height:270px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textColor":"white","className":"is-style-categories-primary-background-color","fontSize":"normal"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":1.4,"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"textColor":"white","className":"is-style-title-hover-primary-color","fontSize":"base"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|xx-small","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":25,"style":{"border":{"radius":"40px"}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0","left":"var:preset|spacing|xx-small","right":"0"}}},"textColor":"white","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"textColor":"white","fontSize":"small"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->