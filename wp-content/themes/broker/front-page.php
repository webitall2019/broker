<?php
/**
 * The template for displaying all pages.
 * @package commercegurus
 */
get_header();



?>
<!-- <div class="stickly-top-menu">
<?php
    //get_template_part( 'partials/header', 'left' ); ?>
</div> -->
<div class="front-slider" id="front-slider">

    <?php // check if the repeater field has rows of data
        if( have_rows('images') ):

            // loop through the rows of data
            while ( have_rows('images') ) : the_row();?>
    <div class="slider__item">
        <div class="slider__item__content">
            <h2 class="slider__item__content__title" data-wow-delay='1s'><?php the_sub_field('gallery_title')?></h2>
            <span class="wow fadeInRight" data-wow-delay='1.2s'><?php the_sub_field('gallery_description')?></span>
            <?php
                    if( have_rows('gallery_buttons') ): ?>

            <div class="slider__item__content__connect">

                <?php
                    while( have_rows('gallery_buttons') )
                  { the_row();?>
                <a href="#" class="btn-primary wow fadeInRight"
                    data-wow-delay='3s'>
                    <?php the_sub_field('gallery_button_nameOne')?>
                </a>
                <a href="#" class="btn-primary button-secondary wow fadeInRight" data-wow-delay='3s'>
                    <?php the_sub_field('gallery_button_nameSecond')?>
                </a>
                <?php }
                                ?>

            </div>

            <?php endif; ?>
        </div>
        <img src="<?php the_sub_field('gallery_image');?> " />

    </div>

    <?php endwhile;

        else :
endif;
?>
</div>
</div>
<div class="wow fadeInDown service-block__title" data-wow-delay='1s'>
    <span class="1"></span>
    <h2>НАШИ УСЛУГИ</h2>
    <span class="2"></span>
</div>

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <?php
                    if( have_rows('services') ): ?>

                        <div class="service-block">

                            <?php
                                while( have_rows('services') ){ the_row();?>
                            <div class="service-block__column col-lg-3">
                                <img class="service-block__column__img wow bounceIn" data-wow-delay='1s' src="<?php the_sub_field('service-icon'); ?>"
                                    alt="">
                                <div class="service-block__column__text">
                                    <?php 
                                        $pst = get_sub_field('service-title');
                                        ?>
                                    <h4><a href="<?php the_sub_field('service-page')?>">

                                            <?php the_sub_field('service-title')?></a>
                                    </h4>
                                    <?php the_sub_field('service-text')?>
                                </div>
                            </div>
                            <?php }
                                ?>

                        </div>

                        <?php endif; ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>

        </div>
        <!--/row -->
    </div>
    <!--/content -->
</div>
<!--/container -->
<div class="custom-block">
    <div class="container">
        <div class="row">
        
            <div class="post-content col-lg-6">
                <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
                <div class="post-content__text">
                    <?php the_content(); ?>
                </div>

                <?php } /* конец while */ ?>


                <?php
                    } // конец if
                    else 
                    echo "<h2>Записей нет.</h2>";
                ?>
            </div>
            <div class="post-questions col-lg-6">

                <h3>Часто задаваемые вопросы</h3>
                <?php if ( have_rows('popular-question') ) {?>
                <?php 
                            while (have_rows('popular-question') ) { ?>
                <?php
                        the_row();
                        ?>
                <a class="post-questions__title dtr" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    <?php the_sub_field('question')?>
                    <i class="fal fa-plus-circle non-block active-block"></i>
                    <i class="fal fa-minus-circle"></i>
                </a>
                <div class="post-questions__content non-block" id="collapseExample">
                    <div class="card card-body">
                        <?php the_sub_field('answer')?>
                    </div>
                </div>
                <?php }?>
                <?php }
                    ?>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <?php if ( have_rows('statistic') ) {?>
            <div class="statistic-block">
        <?php while (have_rows('statistic') ) { ?>
            <?php the_row();
                        ?>
                <div class="statistic-block__item">
                    <span class="stat-numb"><?php the_sub_field('statistic-number')?></span>
                    <p class="stat-descrp"><?php the_sub_field('statistic-decript')?></p>
                </div>
                <?php }?>
            <?php }
                ?>


    </div>
    </div>
    <div class="container">
        <div class="row">
        <h3 class="cooperation__header">Почему стоит сотрудничать с нами?</h3>
        <?php if ( have_rows('cooperation') ) {?>
            <div class="cooperation">
            <?php while (have_rows('cooperation') ) { ?>
                <?php the_row(); ?>
                        
                <div class="cooperation__item col-lg-4 col-md-12">
                    <div class="cooperation__item__image wow fadeInUp" data-wow-delay='2s'>
                        <img src="<?php the_sub_field('cooperation-image')?>">
                    </div>
                    <div class="cooperation__item__title">
                    <?php the_sub_field('cooperation-title')?>
                    </div>
                    <div class="cooperation__item__decr">
                    <?php the_sub_field('cooperation-descr')?>
                    </div>
                </div>
                <?php }?>
            <?php }?>
                
            </div>
        </div>
    </div>
   
        <?php  
        if ( have_rows('low-banner') ) {?>
            <?php while ( have_rows('low-banner') ) {?>
            <?php the_row();
        ?>
                                
        <div class="small-banner wrap" style="background-image:url(<?php echo the_sub_field('low-banner-image')?>)">
                <p><?php the_sub_field('low-banner-text')?></p>
        </div>
         <?php }?>
        <?php }?>
   
</div>
<div class="container">
    <div class="row">
        <div class="main-content-block">
    <?php  
        if ( have_rows('main-content-block') ) {?>
            <?php while ( have_rows('main-content-block') ) {?>
            <?php the_row();
        ?>
        <h2 class="main-content-title"><?php the_sub_field('main-content-title')?></h2>
        <p class="main-content-text"><?php the_sub_field('main-content-text')?></p>
      
         <?php }?>
        <?php }?>
        </div>
    </div>
    <div class="row">
        <div class="contact-custom-form">
            <div class="contact-custom-form__info col-lg-6">
                <?php $formInfo = get_field('contact-custom-form-info');
                if( $formInfo) {?>
                        <?php echo $formInfo ;?>
                <?php  };?>
            </div>
            <div class="contact-custom-form__fields col-lg-6">
                <?php $contactCustomForm = get_field('contact-custom-form');
                    if( $contactCustomForm ) {?>
                        <?php echo do_shortcode('[contact-form-7 id="766" title="Контактнная форма"]') ;?>
                <?php  };?>
            </div>
      </div>
    </div>
</div>


    <?php get_footer(); ?>