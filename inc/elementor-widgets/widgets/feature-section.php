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
 * Fitfloss elementor feature section widget.
 *
 * @since 1.0
 */
class Fitfloss_Feature_Section extends Widget_Base {

	public function get_name() {
		return 'fitfloss-features';
	}

	public function get_title() {
		return __( 'Our Features', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Feature content ------------------------------
		$this->start_controls_section(
			'feature_content',
			[
				'label' => __( 'Features content', 'fitfloss-companion' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Why You Should Choose Us', 'fitfloss-companion' )
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'As you pour the first glass of your favorite Chianti or Chardonnay and settle into an intimate Friday evening.',
            ]
        );

        $this->add_control(
            'feature_inner_settings_seperator',
            [
                'label' => esc_html__( 'Feature Items', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

		$this->add_control(
            'fitflossfeatures', [
                'label' => __( 'Create New', 'fitfloss-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ feature_title }}}',
                'fields' => [
                    [
                        'name' => 'feature_icon',
                        'label' => __( 'Feature Icon Image', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA
                    ],
                    [
                        'name' => 'feature_title',
                        'label' => __( 'Feature Title', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Quality Training', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'feature_text',
                        'label' => __( 'Feature Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'fitfloss-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'feature_icon'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'feature_title'     => __( 'Quality Training', 'fitfloss-companion' ),
                        'feature_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'fitfloss-companion' ),
                    ],
                    [      
                        'feature_icon'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'feature_title'     => __( 'Flexible Timeframe', 'fitfloss-companion' ),
                        'feature_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'fitfloss-companion' ),
                    ],
                    [      
                        'feature_icon'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'feature_title'     => __( 'Qualified Trainers', 'fitfloss-companion' ),
                        'feature_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'fitfloss-companion' ),
                    ],
                    [      
                        'feature_icon'    => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'feature_title'     => __( 'Affordable Price', 'fitfloss-companion' ),
                        'feature_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'fitfloss-companion' ),
                    ],
                ]
            ]
		);
		$this->end_controls_section(); // End service content

    /**
     * Style Tab
     * ------------------------------ Style Section Heading ------------------------------
     *
     */

        $this->start_controls_section(
            'style_room_section', [
                'label' => __( 'Style Service Section', 'fitfloss-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'big_title_col', [
                'label' => __( 'Big Title Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_feature .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_feature .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings           = $this->get_settings();
    $sec_title          = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title          = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $fitflossfeatures   = !empty( $settings['fitflossfeatures'] ) ? $settings['fitflossfeatures'] : '';
    $dynamic_class      = is_front_page() ? 'service_part section_padding services_bg' : 'service_part section_padding';
    ?>

    <!-- our feature part start-->
    <section class="our_feature section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle text-center">
                        <h2><?php echo esc_html( $sec_title )?></h2>
                        <p><?php echo wp_kses_post( nl2br( $sub_title ) )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                if( is_array( $fitflossfeatures ) && count( $fitflossfeatures ) > 0 ) {
                    foreach( $fitflossfeatures as $feature ) {
                        $feature_icon   = ( !empty( $feature['feature_icon']['id'] ) ) ? wp_get_attachment_image( $feature['feature_icon']['id'], 'fitfloss_np_thumb' ) : '';
                        $feature_title  = ( !empty( $feature['feature_title'] ) ) ? $feature['feature_title'] : '';
                        $feature_text   = ( !empty( $feature['feature_text'] ) ) ? $feature['feature_text'] : '';
                        ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_feature">
                                <?php
                                    if ( $feature_icon ) {
                                        echo $feature_icon;
                                    }
                                ?>
                                <h4><?php echo esc_html( $feature_title )?></h4>
                                <p><?php echo esc_html( $feature_text )?></p>
                            </div>
                        </div>
                        <?php 
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- feature_area-end -->
    <?php
    }
}