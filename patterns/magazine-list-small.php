<?php
/**
 * Title: Magazine List Small
 * Slug: nevo/magazine-list-small
 * Categories: nevo-magazine
 * Keywords: Magazine, Nevo Template
 *
 * @package Nevo
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Post List Small', 'nevo' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
<div class="wp-block-column"><!-- wp:query {"queryId":33,"query":{"perPage":"4","pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
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