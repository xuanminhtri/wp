<?php
/**
 * Bottom Bar
 *
 * @package ametok
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Exit if disabled via Customizer
if ( ! ametok_get_mod( 'bottom_bar', true ) ) return false;

$copyright = ametok_get_mod( 'bottom_copyright', '&copy; ametok - Construction Multipurpose WordPress Theme.' );

$css = ametok_element_bg_css( 'bottom_background_img' );
?>

<div id="bottom" style="<?php echo esc_attr( $css ); ?>">
    <div class="ametok-container">
        <div class="bottom-bar-inner-wrap">
            <div class="inner-wrap">
                <?php if ( $copyright ) : ?>
                    <div id="copyright">
                        <?php printf( '%s', do_shortcode( $copyright ) ); ?>
                    </div>
                <?php endif; ?>
            </div><!-- /.bottom-bar-copyright -->

            <?php get_template_part( 'templates/scroll-top'); ?>
        </div>
    </div>
</div><!-- /#bottom -->