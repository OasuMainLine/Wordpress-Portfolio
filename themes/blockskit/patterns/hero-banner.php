<?php
/**
 * Title: Hero banner
 * Slug: blockskit/hero-banner
 * Categories: banner
 * Keywords: Hero Banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/hero-banner.jpg","id":5,"dimRatio":70,"overlayColor":"surface","minHeight":680,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xx-large);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-surface-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-5" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/hero-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:0"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":1.1},"spacing":{"padding":{"right":"0","bottom":"var:preset|spacing|xx-small","top":"0"}}},"className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-text-align-center" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--xx-small);letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'Enhance your website design &amp; solution', 'blockskit' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|x-large"}}}} -->
<p class="has-text-align-center" style="padding-right:var(--wp--preset--spacing--x-large)"><?php esc_html_e( 'Dignis esse fugit, natus pharetra, tempus metus soluta. Perferendis, laboriosam purusin, autem, iaculis, officiis hac. Perferendis saepe bibendum.', 'blockskit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"style":{"border":{"radius":"6px"},"color":{"background":"#2253cb"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="border-radius:6px;background-color:#2253cb;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'Discover More', 'blockskit' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"light","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"}},"border":{"radius":"6px"},"color":{"text":"#2253cb"}},"className":"is-style-swt-button-secondary"} -->
<div class="wp-block-button is-style-swt-button-secondary"><a class="wp-block-button__link has-light-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:6px;color:#2253cb;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'Get Started', 'blockskit' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->