<?php
/**
 * Title: Magazine Featured Grid
 * Slug: nevo/magazine-featured-grid
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Category Name', 'nevo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:read-more {"content":"See all"} /--></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":44,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"460px","align":"wide","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:0"><!-- wp:avatar {"size":30,"style":{"border":{"radius":"50px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"meta","fontSize":"base"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.4}},"textColor":"title","className":"is-style-title-hover-primary-color","fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"textColor":"base","fontSize":"normal"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","fontSize":"normal"} /-->

<!-- wp:post-date {"fontSize":"normal"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":33,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"textColor":"title","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"260px","align":"wide","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","lineHeight":"1.6"},"elements":{"link":{"color":{"text":"var:preset|color|dark-heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"title","className":"is-style-title-hover-primary-color","fontSize":"base"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.7rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":25,"style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"var:preset|spacing|xx-small"}}}} /-->

<!-- wp:post-author-name {"textAlign":"right","style":{"typography":{"textTransform":"capitalize"}},"textColor":"meta","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"textColor":"meta","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->