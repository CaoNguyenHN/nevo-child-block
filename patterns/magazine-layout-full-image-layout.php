<?php

/**
 * Title: Magazine - Full Image with Grid
 * Slug: nevo/magazine-layout-full-image-layout
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Full Image with Grid', 'nevo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:read-more {"content":"See all"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":44,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"650px","align":"wide","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|medium","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:avatar {"size":30,"style":{"border":{"radius":"50px"}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"textColor":"meta"} /-->

<!-- wp:post-date {"textColor":"meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"0","right":"0"}}},"textColor":"title","className":"is-style-title-hover-primary-color","fontSize":"large"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"var:preset|spacing|large"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":44,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"350px","align":"wide","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:avatar {"size":25,"style":{"border":{"radius":"50px"}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"textColor":"meta"} /-->

<!-- wp:post-date {"textColor":"meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"textColor":"title","className":"is-style-title-hover-primary-color","fontSize":"medium"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->