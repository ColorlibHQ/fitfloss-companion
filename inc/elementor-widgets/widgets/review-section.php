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
 * Fitfloss Review Contents section widget.
 *
 * @since 1.0
 */
class Fitfloss_Review_Contents extends Widget_Base {

	public function get_name() {
		return 'fitfloss-review-contents';
	}

	public function get_title() {
		return __( 'Review Contents', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-testimonial-carousel';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Review contents  ------------------------------
		$this->start_controls_section(
			'reviews_content',
			[
				'label' => __( 'Review Contents', 'fitfloss-companion' ),
			]
        );
        
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'What Customer’s Say About Us', 'fitfloss-companion' ),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'As you pour the first glass of your favorite Chianti or Chardonnay and settle into an <br> intimate Friday evening.',
            ]
        );
        $this->add_control(
            'reviews_inner_settings_seperator',
            [
                'label' => esc_html__( 'Review Items', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

		$this->add_control(
            'reviews_contents', [
                'label' => __( 'Create New', 'fitfloss-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ reviewer_name }}}',
                'fields' => [
                    [
                        'name' => 'reviewr_img',
                        'label' => __( 'Reviewer Image', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'reviewer_name',
                        'label' => __( 'Reviewer Name', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Helena Phillips', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'reviewer_designation',
                        'label' => __( 'Reviewer Designation', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'CEO at Google', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'review_txt',
                        'label' => __( 'Review Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'fitfloss-companion' ),
                    ],
                ],
                'default'   => [
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Helena Phillips', 'fitfloss-companion' ),
                        'reviewer_designation'  => __( 'CEO at Google', 'fitfloss-companion' ),
                        'review_txt'            => __( 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'fitfloss-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'John Doe', 'fitfloss-companion' ),
                        'reviewer_designation'  => __( 'CEO at Apple', 'fitfloss-companion' ),
                        'review_txt'            => __( 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'fitfloss-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Helena Phillips', 'fitfloss-companion' ),
                        'reviewer_designation'  => __( 'CEO at HTC', 'fitfloss-companion' ),
                        'review_txt'            => __( 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'fitfloss-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Jonathan Doe', 'fitfloss-companion' ),
                        'reviewer_designation'  => __( 'CEO at Samsung', 'fitfloss-companion' ),
                        'review_txt'            => __( 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'fitfloss-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Helena Phillips', 'fitfloss-companion' ),
                        'reviewer_designation'  => __( 'CEO at Google', 'fitfloss-companion' ),
                        'review_txt'            => __( 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'fitfloss-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Helena Phillips', 'fitfloss-companion' ),
                        'reviewer_designation'  => __( 'CEO at Google', 'fitfloss-companion' ),
                        'review_txt'            => __( 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'fitfloss-companion' ),
                    ],
                    [
                        'reviewr_img'           => [
                            'url'               => Utils::get_placeholder_image_src(),
                        ],
                        'reviewer_name'         => __( 'Helena Phillips', 'fitfloss-companion' ),
                        'reviewer_designation'  => __( 'CEO at Google', 'fitfloss-companion' ),
                        'review_txt'            => __( 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'fitfloss-companion' ),
                    ],
                ]
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
                'label' => __( 'Style Review Section', 'fitfloss-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'rev_title_col', [
                'label' => __( 'Title Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'rev_txt_col', [
                'label' => __( 'Sub Title Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_item_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Styles', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'reviewer_name_col', [
                'label' => __( 'Reviewer Name Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .client_review_single h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'reviewer_desig_col', [
                'label' => __( 'Reviewer Designation Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .client_review_single span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'review_text_col', [
                'label' => __( 'Review Text Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .client_review_single p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'slider_active_nav_col', [
                'label' => __( 'Slider Active Nav Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .owl-dots .active' => 'background-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    // call load widget script
    $this->load_widget_script(); 
    $settings       = $this->get_settings();
    $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $reviews        = !empty( $settings['reviews_contents'] ) ? $settings['reviews_contents'] : '';
    ?>

    <!-- our feature part start-->
    <section class="client_review padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle text-center">
                        <h2><?php echo esc_html( $sec_title )?></h2>
                        <p><?php echo wp_kses_post( nl2br( $sub_title ) )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_review_iner owl-carousel">
                        <?php
                        if( is_array( $reviews ) && count( $reviews ) > 0 ){
                            foreach ( $reviews as $review ) {
                                $reviewer_name = !empty( $review['reviewer_name'] ) ? $review['reviewer_name'] : '';
                                $reviewr_img   = !empty( $review['reviewr_img']['id'] ) ? wp_get_attachment_image( $review['reviewr_img']['id'], 'fitfloss_widget_post_thumb', '', array('alt' => $reviewer_name . ' image' ) ) : '';
                                $reviewer_designation    = !empty( $review['reviewer_designation'] ) ? $review['reviewer_designation'] : '';
                                $review_txt    = !empty( $review['review_txt'] ) ? $review['review_txt'] : '';
                                ?>
                                <div class="client_review_single">
                                    <?php 
                                        if ( $reviewr_img ) { 
                                            echo $reviewr_img;
                                        }
                                    ?>
                                    <h4><?php echo esc_html( $reviewer_name )?></h4>
                                    <span><?php echo esc_html( $reviewer_designation )?></span>
                                    <p><?php echo wp_kses_post( nl2br( $review_txt ) )?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testmonial_area_end -->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            //testmonial_active
            var review = $('.client_review_iner');
            if (review.length) {
                review.owlCarousel({
                items: 3,
                loop: true,
                dots: true,
                autoplay: true,
                autoplayHoverPause: true,
                autoplayTimeout: 5000,
                nav: false,
                margin: 30,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                    },
                    576:{
                        items:2,
                    },
                    991:{
                        items:3,
                    }
                }
                });
            }
        })(jQuery);
        </script>
        <?php 
        }
    }	
}
