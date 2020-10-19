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
 * Fitfloss Course Schedule section widget.
 *
 * @since 1.0
 */
class Fitfloss_Course_Schedule extends Widget_Base {

	public function get_name() {
		return 'fitfloss-course-schedule';
	}

	public function get_title() {
		return __( 'Course Schedule', 'fitfloss-companion' );
	}

	public function get_icon() {
		return 'eicon-countdown';
	}

	public function get_categories() {
		return [ 'fitfloss-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Course Schedule contents  ------------------------------
		$this->start_controls_section(
			'schedules_content',
			[
				'label' => __( 'Course Schedule Content', 'fitfloss-companion' ),
			]
        );
        $this->add_control(
            'style_type',
            [
                'label' => esc_html__( 'Select Style Type', 'fitfloss-companion' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => true,
                'default'     => 'style_1',
                'options'     => [
                    'style_1' => esc_html__( 'Style 1', 'fitfloss-companion' ),
                    'style_2' => esc_html__( 'Style 2', 'fitfloss-companion' ),
                ]
            ]
        );
        $this->add_control(
            'left_img',
            [
                'label' => esc_html__( 'Left Image', 'fitfloss-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ],
                'condition'   => [
                    'style_type' => 'style_1'
                ]
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Get Your Schedule', 'fitfloss-companion' ),
                'condition'   => [
                    'style_type' => 'style_1'
                ]
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'fitfloss-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'As you pour the first glass of your favorite Chianti or Chardonnay and settle <br> into an intimate Friday evening.',
                'condition'   => [
                    'style_type' => 'style_1'
                ]
            ]
        );
        $this->add_control(
            'schedules_inner_settings_seperator',
            [
                'label' => esc_html__( 'Course Schedules', 'fitfloss-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        
		$this->add_control(
            'schedule_tbl_contents', [
                'label' => __( 'The first item will be the schedule table heading row.', 'fitfloss-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ col1_text }}}',
                'fields' => [
                    [
                        'name' => 'col1_text',
                        'label' => __( 'Column 1 Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Course Name', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'col2_text',
                        'label' => __( 'Column 2 Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Mon', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'col3_text',
                        'label' => __( 'Column 3 Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Tue', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'col4_text',
                        'label' => __( 'Column 4 Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Wed', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'col5_text',
                        'label' => __( 'Column 5 Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Thu', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'col6_text',
                        'label' => __( 'Column 6 Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Fri', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'col7_text',
                        'label' => __( 'Column 7 Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Sat', 'fitfloss-companion' ),
                    ],
                    [
                        'name' => 'col8_text',
                        'label' => __( 'Column 8 Text', 'fitfloss-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Sun', 'fitfloss-companion' ),
                    ],
                ],
                'default'   => [
                    [
                        'col1_text'   => __( 'Course Name', 'fitfloss-companion' ),
                        'col2_text'   => __( 'Mon', 'fitfloss-companion' ),
                        'col3_text'   => __( 'Tue', 'fitfloss-companion' ),
                        'col4_text'   => __( 'Wed', 'fitfloss-companion' ),
                        'col5_text'   => __( 'Thu', 'fitfloss-companion' ),
                        'col6_text'   => __( 'Fri', 'fitfloss-companion' ),
                        'col7_text'   => '',
                        'col8_text'   => '',
                    ],
                    [
                        'col1_text'   => __( 'Fitness Aero', 'fitfloss-companion' ),
                        'col2_text'   => __( '02.00', 'fitfloss-companion' ),
                        'col3_text'   => __( '03.00', 'fitfloss-companion' ),
                        'col4_text'   => __( '04.00', 'fitfloss-companion' ),
                        'col5_text'   => __( '05.00', 'fitfloss-companion' ),
                        'col6_text'   => __( '06.00', 'fitfloss-companion' ),
                        'col7_text'   => '',
                        'col8_text'   => '',
                    ],
                    [
                        'col1_text'   => __( 'Fitness Aero', 'fitfloss-companion' ),
                        'col2_text'   => __( '02.00', 'fitfloss-companion' ),
                        'col3_text'   => __( '03.00', 'fitfloss-companion' ),
                        'col4_text'   => __( '04.00', 'fitfloss-companion' ),
                        'col5_text'   => __( '05.00', 'fitfloss-companion' ),
                        'col6_text'   => __( '06.00', 'fitfloss-companion' ),
                        'col7_text'   => '',
                        'col8_text'   => '',
                    ],
                    [
                        'col1_text'   => __( 'Fitness Aero', 'fitfloss-companion' ),
                        'col2_text'   => __( '02.00', 'fitfloss-companion' ),
                        'col3_text'   => __( '03.00', 'fitfloss-companion' ),
                        'col4_text'   => __( '04.00', 'fitfloss-companion' ),
                        'col5_text'   => __( '05.00', 'fitfloss-companion' ),
                        'col6_text'   => __( '06.00', 'fitfloss-companion' ),
                        'col7_text'   => '',
                        'col8_text'   => '',
                    ],
                    [
                        'col1_text'   => __( 'Fitness Aero', 'fitfloss-companion' ),
                        'col2_text'   => __( '02.00', 'fitfloss-companion' ),
                        'col3_text'   => __( '03.00', 'fitfloss-companion' ),
                        'col4_text'   => __( '04.00', 'fitfloss-companion' ),
                        'col5_text'   => __( '05.00', 'fitfloss-companion' ),
                        'col6_text'   => __( '06.00', 'fitfloss-companion' ),
                        'col7_text'   => '',
                        'col8_text'   => '',
                    ],
                    [
                        'col1_text'   => __( 'Fitness Aero', 'fitfloss-companion' ),
                        'col2_text'   => __( '02.00', 'fitfloss-companion' ),
                        'col3_text'   => __( '03.00', 'fitfloss-companion' ),
                        'col4_text'   => __( '04.00', 'fitfloss-companion' ),
                        'col5_text'   => __( '05.00', 'fitfloss-companion' ),
                        'col6_text'   => __( '06.00', 'fitfloss-companion' ),
                        'col7_text'   => '',
                        'col8_text'   => '',
                    ],
                    [
                        'col1_text'   => __( 'Fitness Aero', 'fitfloss-companion' ),
                        'col2_text'   => __( '02.00', 'fitfloss-companion' ),
                        'col3_text'   => __( '03.00', 'fitfloss-companion' ),
                        'col4_text'   => __( '04.00', 'fitfloss-companion' ),
                        'col5_text'   => __( '05.00', 'fitfloss-companion' ),
                        'col6_text'   => __( '06.00', 'fitfloss-companion' ),
                        'col7_text'   => '',
                        'col8_text'   => '',
                    ],
                ]
            ]
        );
        $this->end_controls_section(); // End Hero content

    }
    
    public function fitfloss_schedule_table_contents( $schedule_tbl_contents ) {
        ?>
        <table class="table table-bordered">
            <?php
            if( is_array( $schedule_tbl_contents ) && count( $schedule_tbl_contents ) > 0 ){
                $count = 0;
                foreach ( $schedule_tbl_contents as $item ) {
                    $col1_text = !empty( $item['col1_text'] ) ? $item['col1_text'] : '';
                    $col2_text = !empty( $item['col2_text'] ) ? $item['col2_text'] : '';
                    $col3_text = !empty( $item['col3_text'] ) ? $item['col3_text'] : '';
                    $col4_text = !empty( $item['col4_text'] ) ? $item['col4_text'] : '';
                    $col5_text = !empty( $item['col5_text'] ) ? $item['col5_text'] : '';
                    $col6_text = !empty( $item['col6_text'] ) ? $item['col6_text'] : '';
                    $col7_text = !empty( $item['col7_text'] ) ? $item['col7_text'] : '';
                    $col8_text = !empty( $item['col8_text'] ) ? $item['col8_text'] : '';
                    $count++;
                    if ( $count == 1 ) {
                        ?>
                        <thead>
                            <tr>
                                <?php
                                    if ( $col1_text ) {
                                        echo '<th scope="col">'. esc_html( $col1_text ) .'</th>';
                                    }
                                    if ( $col2_text ) {
                                        echo '<th scope="col">'. esc_html( $col2_text ) .'</th>';
                                    }
                                    if ( $col3_text ) {
                                        echo '<th scope="col">'. esc_html( $col3_text ) .'</th>';
                                    }
                                    if ( $col4_text ) {
                                        echo '<th scope="col">'. esc_html( $col4_text ) .'</th>';
                                    }
                                    if ( $col5_text ) {
                                        echo '<th scope="col">'. esc_html( $col5_text ) .'</th>';
                                    }
                                    if ( $col6_text ) {
                                        echo '<th scope="col">'. esc_html( $col6_text ) .'</th>';
                                    }
                                    if ( $col7_text ) {
                                        echo '<th scope="col">'. esc_html( $col7_text ) .'</th>';
                                    }
                                    if ( $col8_text ) {
                                        echo '<th scope="col">'. esc_html( $col8_text ) .'</th>';
                                    }
                                ?>
                            </tr>
                        </thead>
                        <?php
                    } else {
                        echo $count == 2 ? '<tbody>' : '';
                        ?>
                        <tr>
                        <?php
                            if ( $col1_text ) {
                                echo '<th scope="row">'. esc_html( $col1_text ) .'</th>';
                            }
                            if ( $col2_text ) {
                                echo '<td>'. esc_html( $col2_text ) .'</td>';
                            }
                            if ( $col3_text ) {
                                echo '<td>'. esc_html( $col3_text ) .'</td>';
                            }
                            if ( $col4_text ) {
                                echo '<td>'. esc_html( $col4_text ) .'</td>';
                            }
                            if ( $col5_text ) {
                                echo '<td>'. esc_html( $col5_text ) .'</td>';
                            }
                            if ( $col6_text ) {
                                echo '<td>'. esc_html( $col6_text ) .'</td>';
                            }
                            if ( $col7_text ) {
                                echo '<td>'. esc_html( $col7_text ) .'</td>';
                            }
                            if ( $col8_text ) {
                                echo '<td>'. esc_html( $col8_text ) .'</td>';
                            }
                        ?>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                    <?php
                }
            }
            ?>
        </table>
        <?php
    }

	protected function render() {
    $settings               = $this->get_settings();
    $style_type             = !empty( $settings['style_type'] ) ? $settings['style_type'] : '';
    if ( $style_type == 'style_1' ) {
        $left_img               = !empty( $settings['left_img']['id'] ) ? wp_get_attachment_image( $settings['left_img']['id'], 'fitfloss_schedule_about_thumb_780x946', '', array( 'alt' => 'schedule left image' ) ) : '';
        $sec_title              = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
        $sub_title              = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    }    
    $schedule_tbl_contents  = !empty( $settings['schedule_tbl_contents'] ) ? $settings['schedule_tbl_contents'] : '';
    $dynamic_class  = is_front_page() ? 'shedule_part overflow-hidden' : 'shedule_part overflow-hidden section_padding';
    ?>

    <!-- shedule part here-->
    <?php
        if ( $style_type == 'style_1' ) {
        ?>
        <section class="<?php echo esc_attr( $dynamic_class )?>">
            <div class="container-fluid p-lg-0">
                <div class="row align-items-center">
                    <div class="col-lg-5 d-md-none d-lg-block">
                        <div class="shedule_img">
                            <?php
                                if ( $left_img ) {
                                    echo $left_img;
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="shedule_content">
                            <h2><?php echo esc_html( $sec_title )?></h2>
                            <p><?php echo wp_kses_post( nl2br( $sub_title ) )?></p>
                            <?php $this->fitfloss_schedule_table_contents( $schedule_tbl_contents )?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        } else { ?>
        <section class="shedule_part single_page_shedule section_padding overflow-hidden">
            <div class="container p-lg-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="shedule_content">
                            <?php $this->fitfloss_schedule_table_contents( $schedule_tbl_contents )?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        }
    ?>
    <!-- shedule part end here-->
    <?php

    }
}