<?php
/**
 * The template for displaying all pages.
 * @package commercegurus
 */
get_header();
?>
<div class="page-title-overlay">
    <div class="container"> 
        <div class="row">
            <div class="post-title">
             <?php  echo '<h1>'. the_title() .'</h1>'; ?>
            </div> 
         </div>
    </div>
</div>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-md-push-3 col-lg-push-3">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">
                           <?php  echo '<h1>'. esc_html( get_the_title() ) .'</h1>'; ?>
                                <?php if(get_field('page-title-image')) {?>
                                    
                                        <?php $postImage = get_field('page-title-image');?>
                                        <div class="page-title-image">
                                             <img class="page-title-image__img" src="<?php echo $postImage?>" alt="img">
                                        </div>
                                   <?php }?>
                                  

                                <?php if ( have_rows('pages-main-content') ) {?>
                                    <div class="pages-main-content">
                                <?php while ( have_rows('pages-main-content') ) { ?>
                                
                                    <?php the_row();  ?>
                                            <div class="pages-main-content-text"><?php the_sub_field('pages-main-content-blocks')?></div>
                                    
                                        <?php }?>
                                        </div>
                                    <?php }?>
          

                                    <?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', 'page' ); ?>


<?php endwhile; // end of the loop.  
                                
                        
                               $table = get_field( 'commonTable' );

                               if ( ! empty ( $table ) ) {
                               
                                   echo '<table border="0">';
                               
                                       if ( ! empty( $table['caption'] ) ) {
                               
                                           echo '<caption>' . $table['caption'] . '</caption>';
                                       }
                               
                                       if ( ! empty( $table['header'] ) ) {
                               
                                           echo '<thead>';
                               
                                               echo '<tr>';
                               
                                                   foreach ( $table['header'] as $th ) {
                               
                                                       echo '<th>';
                                                           echo $th['c'];
                                                       echo '</th>';
                                                   }
                               
                                               echo '</tr>';
                               
                                           echo '</thead>';
                                       }
                               
                                       echo '<tbody>';
                               
                                           foreach ( $table['body'] as $tr ) {
                               
                                               echo '<tr>';
                               
                                                   foreach ( $tr as $td ) {
                               
                                                       echo '<td>';
                                                           echo $td['c'];
                                                       echo '</td>';
                                                   }
                               
                                               echo '</tr>';
                                           }
                               
                                       echo '</tbody>';
                               
                                   echo '</table>';
                               }?>
                
                            </main><!-- #main -->
                        </div><!-- #primary -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-md-pull-9 col-lg-pull-9 sidebar">
                        <div id="secondary">
                            <?php dynamic_sidebar( 'sidebar-pages' ); ?>
                        </div>
                    </div>
                </div>
                <!--/row -->
            </div>
            <!--/content -->
        </div>
        <!--/container -->

        <?php get_footer(); ?>