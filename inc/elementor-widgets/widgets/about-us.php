<?php
namespace Fitflosselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Fitfloss elementor about us section widget.
 *
 * @since 1.0
 */
class Fitfloss_About_Us extends Widget_Base {

	public function get_name() {
		return 'fitfloss-aboutus';
	}

	public function get_title() {
		return __( 'About Us', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-column';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  About us content ------------------------------
        $this->start_controls_section(
            'about_content',
            [
                'label' => __( 'About Content', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'We are Fitfloss. A Dedicated Fitness Center Since 2004', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'sec_text',
            [
                'label' => esc_html__( 'About Text', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>',
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__( 'Button Text', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Browse Services', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label' => esc_html__( 'Button URL', 'fitfloss-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url'   => '#'
                ],
            ]
        );

        $this->add_control(
            'right_section_seperator',
            [
                'label' => esc_html__( 'Right Section', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'section_img',
            [
                'label' => esc_html__( 'Section Image', 'fitfloss-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        
        $this->end_controls_section(); // End about us content

        //------------------------------ Style title ------------------------------
        
        // Top Section Styles
        $this->start_controls_section(
            'left_sec_style', [
                'label' => __( 'About Section Styles', 'fitfloss-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'big_title_col', [
				'label' => __( 'Big Title Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text h2' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'sec_txt_col', [
				'label' => __( 'Text Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text p' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
            'btn_bg_col', [
                'label' => __( 'Button Bg Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_1' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_col', [
                'label' => __( 'Button Text Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_styles_seperator',
            [
                'label' => esc_html__( 'Button Hover Styles', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'btn_hvr_bg_col', [
                'label' => __( 'Button Hover Bg Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_1:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_col', [
                'label' => __( 'Button Hover Text Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_1:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->end_controls_section();

    }
    
    public function fitfloss_get_about_text_section( $sec_title, $about_text, $btn_text, $btn_url ) {
        ?>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="about_text">
                <h2><?php echo wp_kses_post( nl2br( $sec_title ) )?> </h2>
                <?php echo wp_kses_post( nl2br( $about_text ) )?>
                <a href="<?php echo esc_url( $btn_url )?>" class="btn_1"><?php echo esc_html( $btn_text )?></a>
            </div>
        </div>
        <?php
    }

    public function fitfloss_get_about_img_section( $about_img ) {
        ?>
        <div class="col-lg-5 offset-lg-1 col-md-6">
            <div class="about_img">
                <?php 
                    if ( $about_img ) { 
                        echo $about_img;
                    }
                ?>
            </div>
        </div>
        <?php
    }

	protected function render() {
    $settings       = $this->get_settings();    
    $sec_title      = !empty( $settings['sec_title'] ) ?  $settings['sec_title'] : '';
    $about_text     = !empty( $settings['sec_text'] ) ?  $settings['sec_text'] : '';
    $btn_text       = !empty( $settings['btn_text'] ) ?  $settings['btn_text'] : '';
    $btn_url        = !empty( $settings['btn_url']['url'] ) ?  $settings['btn_url']['url'] : '';
    $section_img    = !empty( $settings['section_img']['id'] ) ? wp_get_attachment_image( $settings['section_img']['id'], 'fitfloss_schedule_about_thumb_780x946', '', array( 'alt' => 'about image' ) ) : '';
    $dynamic_class  = is_front_page() ? 'about_part padding_bottom overflow-hidden' : 'about_part padding_top overflow-hidden';
    ?>

    <!-- about part here-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container-fluid p-lg-0">
            <div class="row align-items-center justify-content-end">
                <?php
                    $this->fitfloss_get_about_text_section( $sec_title, $about_text, $btn_text, $btn_url );
                    $this->fitfloss_get_about_img_section( $section_img );
                ?>                
            </div>
        </div>
    </section>
    <!-- about part end-->
    <?php
    }
}