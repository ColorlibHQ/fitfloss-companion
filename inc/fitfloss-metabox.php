<?php
function fitfloss_event_metabox( $meta_boxes ) {

	$fitfloss_prefix = '_fitfloss_';
	$meta_boxes[] = array(
		'id'        => 'event_single_metaboxs',
		'title'     => esc_html__( 'Page Additional Options', 'fitfloss-companion' ),
		'post_types'=> array( 'course' ),
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'    => $fitfloss_prefix . 'benifits',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Course Benifits', 'fitfloss-companion' ),
				'placeholder' => esc_html__( 'Describe The Course Benifits..', 'fitfloss-companion' ),
			),
			array(
				'id'    => $fitfloss_prefix . 'trainer_name',
				'type'  => 'text',
				'name'  => esc_html__( 'Trainer Name', 'fitfloss-companion' ),
				'placeholder' => esc_html__( 'Ex: George Mathews', 'fitfloss-companion' ),
			),
			array(
				'id'    => $fitfloss_prefix . 'course_fee',
				'type'  => 'text',
				'name'  => esc_html__( 'Course Fee', 'fitfloss-companion' ),
				'placeholder' => esc_html__( 'Ex: $230', 'fitfloss-companion' ),
			),
			array(
				'id'    => $fitfloss_prefix . 'available_seats',
				'type'  => 'text',
				'name'  => esc_html__( 'Available Seats', 'fitfloss-companion' ),
				'placeholder' => esc_html__( 'Ex: 15', 'fitfloss-companion' ),
			),
			array(
				'id'         => $fitfloss_prefix . 'schedule_time',
				'name'       => esc_html__( 'Schedule Time', 'fitfloss-companion' ),
				'type'       => 'time',
				'placeholder' => esc_html__( 'Ex: 02:30', 'fitfloss-companion' ),
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $fitfloss_prefix . 'enroll_url',
				'type'  => 'text',
				'name'  => esc_html__( 'Course Enroll URL', 'fitfloss-companion' ),
				'placeholder' => esc_html__( 'Ex: www.colorlib.com', 'fitfloss-companion' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'fitfloss_event_metabox' );