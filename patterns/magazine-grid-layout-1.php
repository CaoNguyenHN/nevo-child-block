<?php
/**
 * Title: Magazine - Grid layout 1
 * Slug: nevo/magazine-grid-layout-1
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Grid layout 1', 'nevo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:read-more {"content":"See all"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":44,"query":{"perPage":"3","pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","align":"wide","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:avatar {"size":25,"style":{"border":{"radius":"50px"}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"textColor":"meta"} /-->

<!-- wp:post-date {"textColor":"meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"textColor":"title","className":"is-style-title-hover-primary-color","fontSize":"base"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->