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
 * Fitfloss elementor hero section widget.
 *
 * @since 1.0
 */
class Fitfloss_Hero extends Widget_Base {

	public function get_name() {
		return 'fitfloss-hero';
	}

	public function get_title() {
		return __( 'Hero Section', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Hero content ------------------------------
		$this->start_controls_section(
			'hero_content',
			[
				'label' => __( 'Hero content', 'fitfloss-companion' ),
			]
        );
        
        $this->add_control(
            'banner_img',
            [
                'label' => esc_html__( 'Banner Image', 'fitfloss-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Banner Sub Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Working hard in order to get perfect shape.', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Banner Big Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Fitfloss Fitness Studio', 'fitfloss-companion' ),
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
        
        $this->end_controls_section(); // End Hero content


    /**
     * Style Tab
     * ------------------------------ Style Title ------------------------------
     *
     */
        $this->start_controls_section(
			'style_title', [
				'label' => __( 'Style Hero Section', 'fitfloss-companion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'sub_title_col', [
				'label' => __( 'Sub Title Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner_part .banner_text p' => 'color: {{VALUE}};',
					'{{WRAPPER}} .banner_part .banner_text p::after' => 'background-color: {{VALUE}};',
				],
			]
        );
		$this->add_control(
			'big_title_col', [
				'label' => __( 'Big Title Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner_part .banner_text h1' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'btn_bg_col', [
				'label' => __( 'Button Bg Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner_part .banner_text .btn_1' => 'background: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'btn_bg_hov_col', [
				'label' => __( 'Button Bg Hover Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner_part .banner_text .btn_1:hover' => 'background: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}
    
	protected function render() {
    $settings   = $this->get_settings();
    $banner_img = !empty( $settings['banner_img']['url'] ) ? $settings['banner_img']['url'] : '';    
    $sub_title  = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';    
    $sec_title  = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';    
    $btn_text   = !empty( $settings['btn_text'] ) ? $settings['btn_text'] : '';    
    $btn_url    = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';    
    ?>

    <!-- banner part start-->
    <section class="banner_part" <?php echo fitfloss_inline_bg_img( esc_url( $banner_img ) ); ?>>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <p><?php echo esc_html( $sub_title )?></p>
                            <h1><?php echo esc_html( $sec_title )?></h1>
                            <a href="<?php echo esc_url( $btn_url )?>" class="btn_1"><?php echo esc_html( $btn_text )?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
    <?php

    }
}