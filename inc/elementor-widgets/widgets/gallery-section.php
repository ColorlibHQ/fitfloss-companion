<?php
namespace Fitflosselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Fitfloss elementor gallery section widget.
 *
 * @since 1.0
 */
class Fitfloss_Galleries extends Widget_Base {

	public function get_name() {
		return 'fitfloss-galleries';
	}

	public function get_title() {
		return __( 'Galleries', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-photo-library';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Gallery content ------------------------------
		$this->start_controls_section(
			'gallery_content',
			[
				'label' => __( 'Galleries content', 'fitfloss-companion' ),
			]
        );
		$this->add_control(
            'fitflossgalleries', [
                'label' => __( 'Create New', 'fitfloss-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'gallery_img',
                        'label' => __( 'Gallery Image', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Gallery Title', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '1', 'fitfloss-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( '1', 'fitfloss-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( '2', 'fitfloss-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( '3', 'fitfloss-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( '4', 'fitfloss-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( '5', 'fitfloss-companion' ),
                    ],
                    [      
                        'gallery_img'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'     => __( '6', 'fitfloss-companion' ),
                    ],
                ]
            ]
        );
        
        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__( 'Button Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Load More Images', 'fitfloss-companion' )
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label' => esc_html__( 'Button URL', 'fitfloss-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#'
                ]
            ]
        );
		$this->end_controls_section(); // End Gallery content

    /**
     * Style Tab
     * ------------------------------ Style Gallery Section ------------------------------
     *
     */

        $this->start_controls_section(
            'style_gallery_section', [
                'label' => __( 'Style Gallery Section', 'fitfloss-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'btn_col', [
                'label' => __( 'Button Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .btn_2' => 'color: {{VALUE}}; border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_col', [
                'label' => __( 'Button Hover Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .btn_2:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_bg_col', [
                'label' => __( 'Button Hover Bg Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .btn_2:hover' => 'border-color: {{VALUE}}; background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings       = $this->get_settings();
    $fitflossgalleries = !empty( $settings['fitflossgalleries'] ) ? $settings['fitflossgalleries'] : '';
    $btn_text       = !empty( $settings['btn_text'] ) ? $settings['btn_text'] : '';
    $btn_url        = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
    ?>
    
    <!-- gallery part here -->
    <section class="gallery_part section_padding">
        <div class="container">
            <div class="row">
                <?php 
                if( is_array( $fitflossgalleries ) && count( $fitflossgalleries ) > 0 ) {
                    foreach( $fitflossgalleries as $gallery ) {
                        $gallery_img = !empty( $gallery['gallery_img']['id'] ) ? wp_get_attachment_image_src( $gallery['gallery_img']['id'], 'fitfloss_gallery_thumb_360x420' )[0] : '';
                        $item_title  = !empty( $gallery['item_title'] ) ? $gallery['item_title'] : '';
                        ?>
                        <div class="col-lg-4 col-sm-6">
                            <a href="<?php echo esc_url( $gallery_img ); ?>" class="single_gallery_part">
                                <img src="<?php echo esc_url( $gallery_img ); ?>" alt="<?php echo esc_attr( $item_title )?>">
                            </a>
                        </div>
                        <?php 
                    }
                }
                ?>
                <div class="col-lg-12 text-center">
                    <a href="<?php echo esc_url( $btn_url )?>" class="btn_2"><?php echo esc_html( $btn_text )?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery part end -->
    <?php
    }
}