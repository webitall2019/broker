<?php
/*
Template Name: Мой шаблон страницы контактов
Template Post Type: page
*/
get_header();
?>

<div class="page-title-overlay">
    
    <div class="container">
        <div class="row">
            <div class="post-title">
                <?php  echo '<h1>'. esc_html( get_the_title() ) .'</h1>'; ?>
            </div>
        </div>
    </div>
</div>
<div class="crumbs-line">
    <div class="container">
        <div class="row">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <?php if ( have_rows('contact-info') ) {?>
                    <?php 
                            while (have_rows('contact-info') ) { ?>
                    <?php
                        the_row();
                        ?>
                    <h2><?php the_sub_field('contact-info-title');?></h2>
                    <div class="contact-info">
                        <?php the_sub_field('contact-infoText');?>
                    </div>
                    <?php }?>
                    <?php }
                    ?>

                    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
                    <div class="container">
                        <div class="row">
                            <div class="contact-page contact-form  col-lg-6">
                                <?php the_content(); 
                                the_custom_logo();?>

                            </div>
                            <?php } /* конец while */ ?>

                            <?php
            } // конец if

            else 
            echo "<h2>Записей нет.</h2>";?>

                            <!-- MAP BLOCK -->
                            <div class="map-block col-lg-6">
                                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                                    <script>
                                        (function () {
                                            var setting = {
                                                "height": 420,
                                                "width": '',
                                                "zoom": 15,
                                                "queryString": "улица Привокзальная, 9а, Запоріжжя, Запорожская область, Украина",
                                                "place_id": "EnXRg9C70LjRhtCwINCf0YDQuNCy0L7QutC30LDQu9GM0L3QsNGPLCA50LAsINCX0LDQv9C-0YDRltC20LbRjywg0JfQsNC_0L7RgNC-0LbRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAiMBIuChQKEgnFUbRoUF7cQBGeAX3f5GREERAJKhQKEgkLFkCxW17cQBHK3V3qS_9VRQ",
                                                "satellite": false,
                                                "centerCoord": [47.789226617506934, 35.17176310000002],
                                                "cid": "0x8f318077c268df11",
                                                "cityUrl": "/ukraine/zaporizhia-46653",
                                                "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                                                "embed_id": "65355"
                                            };
                                            var d = document;
                                            var s = d.createElement('script');
                                            s.src = 'https://1map.com/js/script-for-user.js?embed_id=65355';
                                            s.async = true;
                                            s.onload = function (e) {
                                                window.OneMap.initMap(setting)
                                            };
                                            var to = d.getElementsByTagName('script')[0];
                                            to.parentNode.insertBefore(s, to);
                                        })();
                                    </script><a href="https://1map.com/map-embed?embed_id=65355">1map.com</a>
                                </div>
                                </iframe>


                            </div>
                        </div>
                    </div>
                    <div class="more-info col-lg-6">
                       <?php if(have_rows('pages-main-content') ) {?>
                            <?php while(have_rows('pages-main-content') ) {?>
                                <?php the_row(); ?>
                                <div class="more-info-content" ><p><?php the_sub_field('pages-main-content-blocks');?></p>
                            </div>

                                <?php }?>
                            <?php }?>
                    </div>
                </main>
            </div>
        </div>
       
    </div>
</div>
<?php get_footer(); ?>