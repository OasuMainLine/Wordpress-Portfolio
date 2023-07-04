<?php
/**
 * Title: Call to action.
 * Slug: blockskit/call-to-action
 * Categories: banner
 * Keywords: Call to action
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/callback-bg.png","id":144,"dimRatio":50,"overlayColor":"surface","focalPoint":{"x":0.6,"y":0.75},"minHeight":280,"isDark":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-surface-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-144" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/callback-bg.png" style="object-position:60% 75%" data-object-fit="cover" data-object-position="60% 75%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"style":{"typography":{"lineHeight":1.1,"letterSpacing":"-0.03em"}}} -->
<h2 class="wp-block-heading" style="letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'Are you eager to getting started with us ?', 'blockskit' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"16px","right":"20px","bottom":"16px","left":"20px"}},"border":{"radius":"6px"},"color":{"background":"#2253cb"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background wp-element-button" href="#" style="border-radius:6px;background-color:#2253cb;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'Get Started', 'blockskit' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->