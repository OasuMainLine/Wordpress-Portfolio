<?php

/** 

 * @package Portfolio-Addons
 */
/* 

Plugin Name: Porfolio-addons

description: A compilation of addons for my portfolio

Version: 0.1.0 

Author: Orlando Sandi 

*/

function init_blocks()
{
    register_block_type(__DIR__ . '/blocks/badge/build');
}
add_action('init', 'init_blocks');
