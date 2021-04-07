<?php if ( $cg_page_banner_image ) { ?>

<?php $danchor = 'cg-strip-' . rand(); ?>

<div class="cg-strip cg-strip-wrap fade-in animate" style="background-color:#333333!important; height:<?php echo esc_attr( $page_banner_height ); ?>;">
    <div class="cg-strip-bg cg_parallax skrollable skrollable-between" style="background-image: url(<?php echo esc_url( $cg_page_banner_image ); ?>);" data-center="background-position: 50% 50%;" data-top-bottom="background-position: 50% 0%" data-bottom-top="background-position: 50% 95%"></div>
    <div class="row">
        <div style="width: 50%;" class="cg-pos valign-center halign-center">
            <div class="cg-strip-content <?php echo esc_attr( $danchor ); ?> light text-align-center skrollable skrollable-before" data-center-bottom="opacity: 1" data--150-top="opacity: 0" data-anchor-target=".<?php echo esc_attr( $danchor ); ?>" style="opacity: 1;">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<?php } ?>