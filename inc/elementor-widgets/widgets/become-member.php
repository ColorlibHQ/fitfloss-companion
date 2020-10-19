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
 * Fitfloss elementor become-member section widget.
 *
 * @since 1.0
 */
class Fitfloss_Become_Member extends Widget_Base {

	public function get_name() {
		return 'fitfloss-become-member-section';
	}

	public function get_title() {
		return __( 'Become Member', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-play-o';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Become Member Section content ------------------------------
        $this->start_controls_section(
            'become_member_content',
            [
                'label' => __( 'Become Member Content', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Video Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Many more Features are Waiting!', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel?', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'btn_txt',
            [
                'label' => esc_html__( 'Button Text', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Become A Member', 'fitfloss-companion' ),
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
            'bg_img',
            [
                'label' => esc_html__( 'Background Image', 'fitfloss-companion' ),
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
                'label' => __( 'Top Section Styles', 'fitfloss-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'sec_title_col', [
				'label' => __( 'Big Title Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .become_member h2' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'sub_title_col', [
				'label' => __( 'Sub title Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .become_member p' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'btn_bg_col', [
				'label' => __( 'Button BG Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .become_member .btn_1' => 'background: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'btn_hov_bg_col', [
				'label' => __( 'Button Hover Bg Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .become_member .btn_1:hover' => 'background-color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
			'bg_overlay_col', [
				'label' => __( 'Bg Overlay Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .become_member:after' => 'background: {{VALUE}};',
				],
			]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings       = $this->get_settings();
    $sec_title    = !empty( $settings['sec_title'] ) ?  $settings['sec_title'] : '';
    $sub_title     = !empty( $settings['sub_title'] ) ?  $settings['sub_title'] : '';
    $btn_txt     = !empty( $settings['btn_txt'] ) ?  $settings['btn_txt'] : '';
    $btn_url      = !empty( $settings['btn_url']['url'] ) ?  $settings['btn_url']['url'] : '';
    $bg_img         = !empty( $settings['bg_img']['url'] ) ? $settings['bg_img']['url'] : '';
    ?>

    <!-- become a member part here -->
    <section class="become_member section_padding" <?php echo fitfloss_inline_bg_img( esc_url( $bg_img ) ); ?>>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="become_member_text">
                        <h2><?php echo esc_html( $sec_title )?></h2>
                        <p><?php echo esc_html( $sub_title )?></p>
                        <a class="btn_1" href="<?php echo esc_url( $btn_url )?>"><?php echo esc_html( $btn_txt )?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- become a member part end -->
    <?php

    }
}
