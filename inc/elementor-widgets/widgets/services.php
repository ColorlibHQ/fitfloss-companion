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
 * Fitfloss elementor service section widget.
 *
 * @since 1.0
 */
class Fitfloss_Services extends Widget_Base {

	public function get_name() {
		return 'fitfloss-services';
	}

	public function get_title() {
		return __( 'Services', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Service content ------------------------------
		$this->start_controls_section(
			'service_content',
			[
				'label' => __( 'Services content', 'fitfloss-companion' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Our Services', 'fitfloss-companion' )
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.',
            ]
        );

        $this->add_control(
            'service_inner_settings_seperator',
            [
                'label' => esc_html__( 'Service Items', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

		$this->add_control(
            'fitflossservices', [
                'label' => __( 'Create New', 'fitfloss-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ service_title }}}',
                'fields' => [
                    [
                        'name' => 'service_icon',
                        'label' => __( 'Service Icon', 'fitfloss-companion' ),
                        'label_block' => true,
                        'default'     => 'fa fa-gift',
                        'type' => Controls_Manager::ICON,
                        'options' => fitfloss_themify_icon()
                    ],
                    [
                        'name' => 'service_title',
                        'label' => __( 'Service Title', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Birthday Catering', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'service_text',
                        'label' => __( 'Service Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fitfloss-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'service_icon'    => 'fa fa-gift',
                        'service_title'     => __( 'Birthday Catering', 'fitfloss-companion' ),
                        'service_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fitfloss-companion' ),
                    ],
                    [      
                        'service_icon'    => 'fa fa-gift',
                        'service_title'     => __( 'Wedding Service', 'fitfloss-companion' ),
                        'service_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fitfloss-companion' ),
                    ],
                    [      
                        'service_icon'    => 'fa fa-gift',
                        'service_title'     => __( 'Party Catering', 'fitfloss-companion' ),
                        'service_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fitfloss-companion' ),
                    ],
                    [      
                        'service_icon'    => 'fa fa-gift',
                        'service_title'     => __( 'Event Catering', 'fitfloss-companion' ),
                        'service_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fitfloss-companion' ),
                    ],
                    [      
                        'service_icon'    => 'fa fa-gift',
                        'service_title'     => __( 'Corporate Service', 'fitfloss-companion' ),
                        'service_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fitfloss-companion' ),
                    ],
                    [      
                        'service_icon'    => 'fa fa-gift',
                        'service_title'     => __( 'Catering On Demand', 'fitfloss-companion' ),
                        'service_text'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fitfloss-companion' ),
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
                    '{{WRAPPER}} .service_area .section_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .section_title p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

		//------------------------------ Services Item Style ------------------------------
		$this->start_controls_section(
			'style_serv_items_sec', [
				'label' => __( 'Style Single Item', 'fitfloss-companion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'item_icon_color', [
				'label' => __( 'Icon Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service_area .single_service .service_icon i' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'item_title_color', [
				'label' => __( 'Title Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service_area .single_service h4' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'item_text_color', [
				'label' => __( 'Text Color', 'fitfloss-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service_area .single_service p' => 'color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
            'hvr_styles_seperator',
            [
                'label' => esc_html__( 'Hover Styles', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'item_hvr_bg_col', [
                'label' => __( 'Item Hover Bg Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .single_service:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'item_hvr_text_col', [
                'label' => __( 'Item Hover Text Color', 'fitfloss-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .single_service:hover .service_icon i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service_area .single_service:hover h4' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service_area .single_service:hover p' => 'color: {{VALUE}};',
                ],
            ]
        );
		$this->end_controls_section();

	}

	protected function render() {
    $settings       = $this->get_settings();
    $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $fitflossservices = !empty( $settings['fitflossservices'] ) ? $settings['fitflossservices'] : '';
    $dynamic_class  = is_front_page() ? 'service_part section_padding services_bg' : 'service_part section_padding';
    ?>

    
    <!-- service_area-start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3><?php echo esc_html( $sec_title )?></h3>
                        <p><?php echo wp_kses_post( nl2br( $sub_title ) )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                if( is_array( $fitflossservices ) && count( $fitflossservices ) > 0 ) {
                    foreach( $fitflossservices as $service ) {
                        $service_icon     = ( !empty( $service['service_icon'] ) ) ? $service['service_icon'] : '';
                        $service_title     = ( !empty( $service['service_title'] ) ) ? $service['service_title'] : '';
                        $service_text     = ( !empty( $service['service_text'] ) ) ? $service['service_text'] : '';
                        ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="single_service">
                                <div class="service_icon">
                                    <i class="<?php echo esc_attr($service_icon)?>"></i>
                                </div>
                                <h4><?php echo esc_html( $service_title )?></h4>
                                <p><?php echo esc_html( $service_text )?></p>
                            </div>
                        </div>
                        <?php 
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- service_area-end -->
    <?php
    }
}