<?php
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Elementor_Custom_Extension extends \Elementor\Widget_Base{

    public function get_name() {
        return 'Elementor_Custom_Extension';
    }

    public function get_title() {
        return __( 'custom_post_elementor', 'plugin-name' );
    }

    public function get_icon() {
        return 'fa fa-code';
    }

    public function get_categories() {
        return [ 'general' ];
    }
    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $post_types = get_post_types( [],
            'objects' );

        $options = [] ;

        foreach ( $post_types as $type ){
           $options [$type->name] = $type->label;
        }

        $this->add_control(                                                                  /*choose POST TYPE*/
            'title',
            [
                'label'         => __( 'post_type', 'plugin-name' ),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'default'       => 'post',
                'options'       => $options,
                'input_type'    => 'number',
                'placeholder'   => 'posts_count',
            ]
        );

        $this->add_control(                                                                 /*HOW MANY POSTS U WANT TO SHOW*/
            'posts_to_display',
            [
                'label'       => __( 'post_count', 'plugin-name' ),
                'type'        => \Elementor\Controls_Manager::NUMBER,
                'placeholder' => __( 'select', 'plugin-name' ),
                'default'     =>    null,
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $agrs = [
            'post_type'         =>  $settings['title'],
            'posts_per_page'    => $settings['posts_to_display'],
            'orderby'           => array(
                                'order' => 'ASC',

                                ),
        ];

        $query = new WP_Query($agrs);
        if( $query->have_posts() ) { ?>
             <div class="posts">
                <?php while( $query->have_posts() ) { $query->the_post(); ?>

                    <div class="post">
                       <a href="<?php the_permalink(); ?>">
                           <?php echo get_the_post_thumbnail(); ?>
                       </a>
                        <div class="category_links">
                           <?php the_category(); ?>
                        </div>
                        <a href="<?php the_permalink();?>"> <h3 class="post_title">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                        <div class="post_content">
                           <?php echo get_the_excerpt();?>
                        </div>
                    </div>

                <?php } ?>
            </div>
            <?php
            if ($query->max_num_pages > 1) {?>
                <button class="act" data-agrs='<?php echo json_encode( $agrs ) ; ?>' data-paged="1" data-maxPages="<?php echo $query->max_num_pages; ?>">
                    Load more
                </button>
            <?php } ?>

        <?php }
    }
}
