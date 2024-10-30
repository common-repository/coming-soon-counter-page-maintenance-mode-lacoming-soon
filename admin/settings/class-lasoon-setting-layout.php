<?php
/**
 * Lasoon General Settings
 *
 * @package Lasoon\Admin
 */

defined( 'ABSPATH' ) || exit;

if ( class_exists( 'Lasoon_Settings_Layout', false ) ) {
	return new Lasoon_Settings_Layout();
}
include_once dirname( __FILE__ ) . '/class-lasoon-setting-page.php';

/**
 * Lasoon_Admin_Settings_General.
 */
class Lasoon_Settings_Layout extends Lasoon_Settings_Page {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->id    = 'layout';
		$this->label = esc_html__( 'Layout', 'lasoon' );

		parent::__construct();
	}

	/**
	 * Get settings or the default section.
	 *
	 * @return array
	 */
	protected function get_settings_for_default_section() {

		$settings =
		array(



			array(
				'title' => esc_html__( 'Main Layout', 'lasoon' ),
				'type'  => 'title',
				'desc'  => esc_html__( 'Here you can set Coming Soon Page designs.', 'lasoon' ),
				'id'    => 'layout_page_settings',
			),

			array(
				'title'    => esc_html__( 'Layout', 'lasoon' ),
				'desc'     => esc_html__( 'This option lets you set layout for blogs.', 'lasoon' ),
				'id'       => 'lasoon_blog_layout',
				'default'  => 'layout_1',
				'type'     => 'select',
				'class'    => 'lasoon-enhanced-select',
				'css'      => 'min-width: 350px;',
				'desc_tip' => true,
				'options'  => array(
					'layout_1'  => array(esc_html__( 'Layout 1', 'lasoon' ), LASOON_PLUGIN_FILE.'images/layout_1.jpg'),
					'layout_2'  => array(esc_html__( 'Layout 2', 'lasoon' ), LASOON_PLUGIN_FILE.'images/layout_2.jpg'),
				)
			),

			array(
				'title'    => esc_html__( '', 'lasoon' ),
				'desc'     => esc_html__( 'This Preview is for layout.', 'lasoon' ),
				'id'       => 'lasoon_blog_layout_preview',
				'type'     => 'preview_design',
				'class'    => 'lasoon-preview-design',
				'desc_tip' => true,
			),
			
			array(
				'title'    => esc_html__( 'Background Type', 'lasoon' ),
				'desc'     => esc_html__( 'Select type of background', 'lasoon' ),
				'id'       => 'lasoon_background_type',
				'default'  => esc_html__('Disable', 'lasoon'),
				'unable'   => esc_html__('Image', 'lasoon'),
				'disable'   => esc_html__('Video', 'lasoon'),
				'type'     => 'switchbox',
				'desc_tip' => esc_html__( 'Background will be change after change it.', 'lasoon' ),
			),

			array(
				'id' => 'lasoon_back_1_image',
				'type' => 'file',
				'title' => esc_html__('Slider 1 Image', 'lasoon'),
				'desc' => esc_html__('','lasoon'),
				'field_desc' => esc_html__('Select <strong> Slider Image </strong> for Background.', 'lasoon'),
				'class' => 'lasoon-loader back_img',
				'default' => '',
			),
			array(
				'id' => 'lasoon_back_2_image',
				'type' => 'file',
				'title' => esc_html__('Slider 2 Image', 'lasoon'),
				'desc' => esc_html__('','lasoon'),
				'field_desc' => esc_html__('Select <strong> Slider Image </strong> for Background.', 'lasoon'),
				'class' => 'lasoon-loader back_img',
				'default' => '',
			),
			array(
				'id' => 'lasoon_back_3_image',
				'type' => 'file',
				'title' => esc_html__('Slider 3 Image', 'lasoon'),
				'desc' => esc_html__('','lasoon'),
				'field_desc' => esc_html__('Select <strong> Slider Image </strong> for Background.', 'lasoon'),
				'class' => 'lasoon-loader back_img',
				'default' => '',
			),

			array(
				'title'    => esc_html__( 'Video Option', 'lasoon' ),
				'desc'     => esc_html__( 'Select type of video background', 'lasoon' ),
				'id'       => 'lasoon_background_video_type',
				'default'  => esc_html__('Disable', 'lasoon'),
				'unable'   => esc_html__('Upload', 'lasoon'),
				'disable'   => esc_html__('Embed', 'lasoon'),
				'type'     => 'switchbox',
				'class'    => 'video_type_select',
				'desc_tip' => esc_html__( 'Background will be change after change it.', 'lasoon' ),
			),

			array(
				'id' => 'lasoon_back_video',
				'type' => 'file',
				'title' => esc_html__('Background Video', 'lasoon'),
				'desc' => esc_html__('','lasoon'),
				'field_desc' => esc_html__('Select <strong> Video </strong> for Background.', 'lasoon'),
				'class' => 'lasoon-loader back_video',
				'default' => '',
			),

			array(
				'id' => 'lasoon_embed_url',
				'type' => 'text',
				'title' => esc_html__('Youtube/Vimeo Iframe', 'lasoon'),
				'class' => 'lasoon-loader embed_url',
				'default' => '',
			),

			array(
				'type' => 'sectionend',
				'id'   => 'layout_page_settings',
			),
			array(
				'title' => esc_html__( 'Animation', 'lasoon' ),
				'type'  => 'title',
				'desc'  => esc_html__( 'Here you can set Animation designs.', 'lasoon' ),
				'id'    => 'layout_page_settings_animation',
			),
			array(
				'title'    => esc_html__( 'Background Animation', 'lasoon' ),
				'desc'     => esc_html__( 'This option lets you set animation for Background.', 'lasoon' ),
				'id'       => 'lasoon_back_animation',
				'default'  => esc_html__('particles', 'lasoon'),
				'type'     => 'select',
				'class'    => 'lasoon-enhanced-select',
				'css'      => 'min-width: 350px;',
				'desc_tip' => true,
				'options'  => array(
					'none'    => esc_html__( 'None', 'lasoon' ),
					'fire_ball'    => esc_html__( 'Fire Ball', 'lasoon' ),
					'snow-rain'    => esc_html__( 'Snow Rain', 'lasoon' ),
					'magical_particles'    => esc_html__( 'Magical Particles', 'lasoon' ),
					'lighting_ball' => esc_html__( 'Lighting Ball', 'lasoon' ),
					'particles'  => esc_html__( 'Particles', 'lasoon' ),
					'particle_waves'  => esc_html__( 'Particle Waves', 'lasoon' ),
				)
			),

			array(
				'title'    => esc_html__( 'Heading Animation', 'lasoon' ),
				'desc'     => esc_html__( 'This option lets you set animation for Heading Title.', 'lasoon' ),
				'id'       => 'lasoon_heading_animation',
				'default'  => esc_html__('animate_1', 'lasoon'),
				'type'     => 'select',
				'class'    => 'lasoon-enhanced-select',
				'css'      => 'min-width: 350px;',
				'desc_tip' => true,
				'options'  => array(
					'none'    => esc_html__( 'None', 'lasoon' ),
					'line_up'    => esc_html__( 'Line Up', 'lasoon' ),
					'text_flip'  => esc_html__( 'Text Flip', 'lasoon' ),
					'top_bottom' => esc_html__( 'Top Bottom', 'lasoon' ),
					'bounce' => esc_html__( 'Bounce', 'lasoon' ),
					'blink' => esc_html__( 'Blink', 'lasoon' ),
					'jello' => esc_html__( 'Jello', 'lasoon' ),
				)
			),

			array(
				'title'    => esc_html__( 'Counter Shape', 'lasoon' ),
				'desc'     => esc_html__( 'This option lets you set shapes for Counter.', 'lasoon' ),
				'id'       => 'lasoon_shape_animation',
				'default'  => esc_html__('dash_circle', 'lasoon'),
				'type'     => 'select',
				'class'    => 'lasoon-enhanced-select',
				'css'      => 'min-width: 350px;',
				'desc_tip' => true,
				'options'  => array(
					'dash_circle'    =>array(esc_html__( 'Dash Circle', 'lasoon' ), LASOON_PLUGIN_FILE.'images/dash_circle.jpg'),
					'dash_diamond'  => array(esc_html__( 'Dash Diamond', 'lasoon' ),  LASOON_PLUGIN_FILE.'images/dash_diamond.jpg'),
					'glass_circle'  =>  array(esc_html__( 'Glass Circle', 'lasoon' ), LASOON_PLUGIN_FILE.'images/glass_circle.jpg'),
					'glass_square'  => array(esc_html__( 'Glass Square', 'lasoon' ), LASOON_PLUGIN_FILE.'images/glass_square.jpg'),
					'glass_diamond'  => array(esc_html__( 'Glass Diamond', 'lasoon' ), LASOON_PLUGIN_FILE.'images/glass_diamond.jpg'),
					'glass_square_note'  => array(esc_html__( 'Glass Square Note', 'lasoon' ), LASOON_PLUGIN_FILE.'images/glass_square_note.jpg'),
				)
			),
array(
	'title'    => esc_html__( '', 'lasoon' ),
	'desc'     => esc_html__( 'This Preview is for layout.', 'lasoon' ),
	'id'       => 'lasoon_shape_animation_preview',
	'type'     => 'preview_design',
	'class'    => 'lasoon-preview-design',
	'desc_tip' => true,
),


array(
	'type' => 'sectionend',
	'id'   => 'layout_page_settings_animation',
),

array(
	'title' => esc_html__( 'Email Template', 'lasoon' ),
	'type'  => 'title',
	'desc'  => esc_html__( 'This email template is for Sending alert for Live Mode to Subscribers.', 'lasoon' ),
	'id'    => 'layout_page_settings_email_template',
),


array(
	'id' => 'lasoon_back_image_for_email',
	'type' => 'file',
	'title' => esc_html__('Email Background Image', 'lasoon'),
	'desc' => esc_html__('','lasoon'),
	'field_desc' => esc_html__('Select <strong> Background Image </strong> for Email.', 'lasoon'),
	'class' => 'lasoon-loader',
	'default' => '',
),


array(
	'title'     => esc_html__( 'Email Heading Title', 'lasoon' ),
	'desc'      => esc_html__( 'Set heading title for your email template.', 'lasoon' ),
	'id'        => 'lasoon_heading_title_for_email',
	'default'   => esc_html__("Visit Our New Website", 'lasoon'),
	'desc_tip'  => true,
	'type'      => 'text',
),

array(
	'title'     => esc_html__( 'Email Heading Subtitle', 'lasoon' ),
	'desc'      => esc_html__( 'Set heading subtitle for your email template.', 'lasoon' ),
	'id'        => 'lasoon_heading_subtitle_for_email',
	'default'   => esc_html__("See better than ever how lasoon can help you...", 'lasoon'),
	'desc_tip'  => true,
	'type'      => 'text',
),

array(
	'title'     => esc_html__( 'Email Button Text', 'lasoon' ),
	'desc'      => esc_html__( 'Set Button Text for your email template.', 'lasoon' ),
	'id'        => 'lasoon_button_text_for_email',
	'default'   => esc_html__("Visit Now", 'lasoon'),
	'desc_tip'  => true,
	'type'      => 'text',
),

array(
	'title'     => esc_html__( 'Email Subject', 'lasoon' ),
	'desc'      => esc_html__( 'Set Subject for your email reminder.', 'lasoon' ),
	'id'        => 'lasoon_subject_for_email',
	'default'   => esc_html__("Our site is Launched", 'lasoon'),
	'desc_tip'  => true,
	'type'      => 'text',
),

array(
	'title'     => esc_html__( 'Send Reminder', 'lasoon' ),
	'desc'      => esc_html__( 'Here you can send Reminder to Subscription Users When Site is Live.', 'lasoon' ),
	'id'        => 'lasoon_send_reminder',
	'class'     => 'lasoon_send_reminder',
	'default'   => esc_html__("Send Reminder", 'lasoon'),
	'desc_tip'  => false,
	'type'      => 'button',
),

array(
	'type' => 'sectionend',
	'id'   => 'layout_page_settings_email_template',
),

array(
	'id'       => 'lasoon_email_preview',
	'type'     => 'preview',
	'class'    => 'lasoon-enhanced-select',				
),
);

return apply_filters( 'lasoon_layout_settings', $settings );
}
}

return new Lasoon_Settings_Layout();