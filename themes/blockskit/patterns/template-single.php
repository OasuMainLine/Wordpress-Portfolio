<?php
/**
 * Title: Template single
 * Slug: blockskit/template-single
 * Categories: template
 * Inserter: false
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:post-title {"textAlign":"center","level":1} /-->
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"textColor":"neutral","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group has-neutral-color has-text-color">
            <!-- wp:post-author {"showAvatar":false} /-->
            <!-- wp:paragraph -->
            <p>·</p>
            <!-- /wp:paragraph -->
            <!-- wp:post-date {"format":"M j, Y"} /-->
            <!-- wp:paragraph -->
            <p>·</p>
            <!-- /wp:paragraph -->
            <!-- wp:post-terms {"term":"category"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:post-content /-->
    <!-- wp:post-terms {"term":"post_tag","className":"is-style-swt-post-terms-pill"} /-->
    <!-- wp:separator {"backgroundColor":"outline","className":"is-style-wide"} -->
    <hr
        class="wp-block-separator has-text-color has-outline-color has-alpha-channel-opacity has-outline-background-color has-background is-style-wide" />
    <!-- /wp:separator -->
    <!-- wp:post-author {"showBio":true} /-->
    <!-- wp:separator {"backgroundColor":"outline","className":"is-style-wide"} -->
    <hr
        class="wp-block-separator has-text-color has-outline-color has-alpha-channel-opacity has-outline-background-color has-background is-style-wide" />
    <!-- /wp:separator -->
    <!-- wp:comments -->
    <div class="wp-block-comments">
        <!-- wp:post-comments-form /-->
        <!-- wp:comments-title {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} /-->
        <!-- wp:comment-template -->
        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}},"border":{"top":{"width":"1px","color":"var:preset|color|outline"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"
            style="border-top-color:var(--wp--preset--color--outline);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
            <div class="wp-block-group">
                <!-- wp:avatar {"size":32,"style":{"border":{"radius":"20px"}}} /-->
                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:comment-author-name {"fontSize":"small"} /-->
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex"}} -->
                    <div class="wp-block-group">
                        <!-- wp:comment-date {"format":"M j, Y","isLink":false,"textColor":"neutral","fontSize":"x-small"} /-->
                        <!-- wp:comment-edit-link {"fontSize":"x-small"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- wp:comment-content /-->
            <!-- wp:comment-reply-link {"fontSize":"small"} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:comment-template -->
        <!-- wp:comments-pagination -->
        <!-- wp:comments-pagination-previous /-->
        <!-- wp:comments-pagination-numbers /-->
        <!-- wp:comments-pagination-next /-->
        <!-- /wp:comments-pagination -->
    </div>
    <!-- /wp:comments -->
</div>
<!-- /wp:group -->