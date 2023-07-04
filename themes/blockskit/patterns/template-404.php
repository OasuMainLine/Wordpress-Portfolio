<?php
 /**
  * Title: Template 404
  * Slug: blockskit/template-404
  * Categories: template
  * Inserter: false
  */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<main class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"archive","textAlign":"center"} /-->

<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 30vw, 15rem)","fontWeight":"400","lineHeight":"1"}},"textColor":"foreground","className":"has-text-align-center"} -->
<h2 class="has-text-align-center has-foreground-color has-text-color" style="font-size:clamp(4rem, 30vw, 15rem);font-weight:400;line-height:1">
<?php echo esc_html__( '404', 'blockskit' ); ?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'blockskit' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","backgroundColor":"primary","textColor":"light"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
