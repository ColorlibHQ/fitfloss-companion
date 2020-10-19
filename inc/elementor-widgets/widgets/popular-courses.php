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
 * Fitfloss elementor popular courses widget.
 *
 * @since 1.0
 */
class Fitfloss_Popular_Courses extends Widget_Base {

	public function get_name() {
		return 'fitfloss-popular-courses';
	}

	public function get_title() {
		return __( 'Popular Courses', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Popular Courses content ------------------------------
        $this->start_controls_section(
            'popular_courses_content',
            [
                'label' => __( 'Popular Courses Content', 'fitfloss-companion' ),
            ]
        );
        
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Our Popular Courses', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'As you pour the first glass of your favorite Chianti or Chardonnay and settle into an intimate Friday evening.', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'show_items',
            [
                'label' => esc_html__( 'Show Items', 'fitfloss-companion' ),
                'type' => Controls_Manager::NUMBER,
                'label_block' => true,
                'default'   => esc_html__( '3', 'fitfloss-companion' ),
            ]
        );
        $this->end_controls_section(); // End about us content

        //------------------------------ Style title ------------------------------
        
        // Top Section Styles
        $this->start_controls_section(
            'left_sec_style', [
                'label' => __( 'Popular Orders Styles', 'fitfloss-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'big_title_col', [
				'label' => __( 'Big title Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .popular_cource .section_tittle h2' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'text_col', [
				'label' => __( 'Sub Title Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .popular_cource .section_tittle p' => 'color: {{VALUE}};',
				],
			]
        );
        $this->end_controls_section();


        // Single Item Styles
        $this->start_controls_section(
            'single_item_styles', [
                'label' => __( 'Single item Styles', 'fitfloss-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'price_col', [
				'label' => __( 'Course Fee Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .popular_cource .single_popular_cource h3 span' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
            'btn_styles_seperator',
            [
                'label' => esc_html__( 'Button Styles', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'btn_txt_col', [
                'label' => __( 'Button Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popular_cource .single_popular_cource .btn_2' => 'color: {{VALUE}}; border-color: {{VALUE}}',
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
                    '{{WRAPPER}} .popular_cource .single_popular_cource .btn_2:hover' => 'background-color: {{VALUE}}; border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_col', [
                'label' => __( 'Button Hover Text Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popular_cource .single_popular_cource .btn_2:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

    }

	protected function render() {
    $settings       = $this->get_settings();    
    $sec_title      = !empty( $settings['sec_title'] ) ?  $settings['sec_title'] : '';
    $sub_title      = !empty( $settings['sub_title'] ) ?  $settings['sub_title'] : '';
    $show_items     = !empty( $settings['show_items'] ) ?  $settings['show_items'] : '';
    $dynamic_class  = is_front_page() ? 'popular_cource section_padding' : 'popular_cource padding_top single_page_popular_cource';
    ?>

    <!-- popular cource part here-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center">
                        <h2><?php echo esc_html( $sec_title )?></h2>
                        <p><?php echo nl2br( wp_kses_post($sub_title) )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php fitfloss_course_section( $show_items )?>
            </div>
        </div>
    </section>
    <!-- popular cource part end-->
    <?php

    }
}