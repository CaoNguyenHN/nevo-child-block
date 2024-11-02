<?php
/**
 * Title: Magazine List
 * Slug: nevo/magazine-post-list
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html('Post List', 'nevo') ?></h2>
<!-- /wp:heading -->

<!-- wp:read-more {"content":"See all"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":44,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"default","columnCount":4}} -->
<!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","height":"","align":"wide","style":{"border":{"radius":"5px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:0"><!-- wp:avatar {"size":25,"style":{"border":{"radius":"50px"}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"title","className":"is-style-title-hover-primary-color","fontSize":"large"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"foreground"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","textColor":"meta","fontSize":"normal"} /-->

<!-- wp:post-date {"textColor":"meta","fontSize":"normal"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->