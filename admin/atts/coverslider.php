<?php

// -----------------------------------------
// semplice
// admin/atts/modules.php
// -----------------------------------------

// vp button options
$vp_button_options = get_vp_button_options(true);

$coverslider = array(
	'options' => array(
		'preview' => array(
			'title'  	 => 'Refresh',
			'hide-title' => true,
			'break'		 => '1',
			'posts' => array(
				'data-input-type' 	=> 'button',
				'title'		 		=> 'Preview',
				'help'				=> 'Please note that the drag and move (swipe) is only available in the frontend.',
				'button-title'		=> 'Refresh Preview',
				'size'		 		=> 'span4',
				'class'				=> 'semplice-button coverslider-preview admin-click-handler',
				'data-handler'		=> 'previewCoverslider',
			),
		),
		'posts' => array(
			'title'  	 => 'Posts',
			'hide-title' => true,
			'break'		 => '1',
			'posts' => array(
				'data-input-type' 	=> 'button',
				'title'		 		=> 'Add Covers',
				'help'				=> 'Please select the pages and projects to pull the fullscreen covers from.',
				'button-title'		=> 'Select Projects and Pages',
				'size'		 		=> 'span4',
				'class'				=> 'semplice-button white-button admin-click-handler',
				'data-handler'		=> 'addCovers',
			),
		),
		'main' => array(
			'title' 	 => 'Main Options',
			'hide-title' => true,
			'break'		 => '2,2,2,1,1',
			'navigation' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Navigation',
				'size'		 				=> 'span2',
				'class'						=> 'editor-listen',
				'data-handler'				=> 'coverSlider',
				'default' 	 				=> 'dots',
				'switch-values' => array(
					'dots'  		=> 'Dots',
					'arrows'	 	=> 'Arrows',
				),
			),
			'color' => array(
				'title'			=> 'Color',
				'size'			=> 'span2',
				'data-input-type'	=> 'color',
				'default'		=> 'transparent',
				'class'			=> 'color-picker admin-listen-handler',
				'data-picker'	=> 'coverSlider',
				'data-handler'  => 'colorPicker',
			),
			'orientation' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Orientation',
				'size'		 				=> 'span2',
				'class'						=> 'editor-listen',
				'data-handler'				=> 'coverSlider',
				'default' 	 				=> 'vertical',
				'switch-values' => array(
					'vertical'  		=> 'Vert',
					'horizontal'	 	=> 'Hor',
				),
			),
			'infinite_slider' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Infinite Slider',
				'size'		 				=> 'span2',
				'class'						=> 'editor-listen',
				'data-handler'				=> 'coverSlider',
				'default' 	 				=> 'enabled',
				'help'						=> 'If enabled, your slider will automatically restart after the last slide.',
				'switch-values' => array(
					'enabled'  		=> 'Yes',
					'disabled'	 	=> 'No',
				),
			),
			'autoplay' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Autoplay',
				'size'		 				=> 'span2',
				'class'						=> 'editor-listen',
				'data-handler'				=> 'coverSlider',
				'default' 	 				=> 'disabled',
				'switch-values' => array(
					'enabled'  		=> 'On',
					'disabled'	 	=> 'Off',
				),
			),
			'timeout' => array(
				'title'				 => 'Timeout',
				'help'				 => 'Set the time out between your slides in the autoplay mode.',
				'size'				 => 'span2',
				'data-input-type'    => 'select-box',
				'class'				 => 'editor-listen',
				'data-handler'		 => 'coverSlider',
				'default'			 => '4000',
				'select-box-values' => array(
					'1000' => '1s',
					'1500' => '1.5s',
					'2000' => '2s',
					'2500' => '2.5s',
					'3000' => '3s',
					'3500' => '3.5s',
					'4000' => '4s',
					'4500' => '4.5s',
					'5000' => '5s',
					'5500' => '5.5s',
					'6000' => '6s',
					'6500' => '6.5s',
					'7000' => '7s',
					'7500' => '7.5s',
					'8000' => '8s',
					'8500' => '8.5s',
					'9000' => '9s',
					'9500' => '9.5s',
					'10000' => '10s',
				),
			),
			'content_after_slider' => array(
				'title'				 => 'Content after Slider',
				'help'				 => 'If you want to display a normal page after the cover slider you can select your page here.<br /><br /><b>Note:</b> This feature is only available for a horizontal cover slider and there will be no preview in the editor.',
				'size'				 => 'span4',
				'data-input-type'    => 'select-box',
				'class'				 => 'editor-listen',
				'data-handler'		 => 'coverSlider',
				'default'			 => '1',
				'select-box-values' => semplice_get_post_dropdown('page'),
			),
			'hide_post_cover' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Hide Covers on Projects / Pages',
				'help'						=> 'For a better user experience you can hide the cover on the project or page you are navigating to with the \'View Project\' button from the coverslider. The covers will be still visible if you visit them from any other link. (portfolio grid, direct link, google etc.)',
				'size'		 				=> 'span4',
				'class'						=> 'editor-listen',
				'data-handler'				=> 'coverSlider',
				'default' 	 				=> 'disabled',
				'switch-values' => array(
					'disabled'  		=> 'Disabled',
					'enabled'	 		=> 'Enabled',
				),
			),
		),
		'vp-button-switch' => array(
			'title'  	 => 'View Project Button',
			'break'		 => '1,1',
			'help'		 => 'Please note that this settings will be overwritten from individual customized \'View Project\' buttons.',
			'data-hide-mobile' => true,
			'vp_button_type' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Design',
				'size'		 				=> 'span4',
				'data-visibility-switch' 	=> true,
				'data-visibility-values' 	=> 'default,custom',
				'data-visibility-prefix'	=> 'ov-vp-button',
				'default' 	 				=> 'default',
				'class'						=> 'editor-listen',
				'data-handler'				=> 'coverSlider',
				'switch-values' => array(
					'default'  	=> 'Default',
					'custom'	=> 'Custom',
				),
			),
		),
		// coverslider view project button
		'vp-button-general' => $vp_button_options['general'],
		'vp-button-link'	=> $vp_button_options['link'],
		'vp-button-hover'	=> $vp_button_options['hover'],
	),
	'transitions' => array(
		'animation-options' => array(
			'title' 	 => 'Parallax',
			'hide-title' => true,
			'break'		 => '2,1',
			'easing' => array(
				'title'				 => 'Easing',
				'size'				 => 'span2',
				'data-input-type'    => 'select-box',
				'class'				 => 'editor-listen',
				'data-handler'		 => 'coverSlider',
				'default'			 => 'ease',
				'select-box-values' => array(
					'ease'			=> 'ease (default)',
					'linear'		=> 'linear',
					'ease-in'		=> 'ease-in',
					'ease-out'		=> 'ease-out',
					'ease-in-out'	=> 'ease-in-out',
					'cubic-bezier(0.550, 0.085, 0.680, 0.530)' => 'easeInQuad',
					'cubic-bezier(0.250, 0.460, 0.450, 0.940)' => 'easeOutQuad',
					'cubic-bezier(0.455, 0.030, 0.515, 0.955)' => 'easeInOutQuad',
					'cubic-bezier(0.550, 0.055, 0.675, 0.190)' => 'easeInCubic',
					'cubic-bezier(0.215, 0.610, 0.355, 1.000)' => 'easeOutCubic',
					'cubic-bezier(0.645, 0.045, 0.355, 1.000)' => 'easeInOutCubic',
					'cubic-bezier(0.895, 0.030, 0.685, 0.220)' => 'easeInQuart',
					'cubic-bezier(0.165, 0.840, 0.440, 1.000)' => 'easeOutQuart',
					'cubic-bezier(0.770, 0.000, 0.175, 1.000)' => 'easeInOutQuart',
					'cubic-bezier(0.755, 0.050, 0.855, 0.060)' => 'easeInQuint',
					'cubic-bezier(0.230, 1.000, 0.320, 1.000)' => 'easeOutQuint',
					'cubic-bezier(0.860, 0.000, 0.070, 1.000)' => 'easeInOutQuint',
					'cubic-bezier(0.470, 0.000, 0.745, 0.715)' => 'easeInSine',
					'cubic-bezier(0.390, 0.575, 0.565, 1.000)' => 'easeOutSine',
					'cubic-bezier(0.445, 0.050, 0.550, 0.950)' => 'easeInOutSine',
					'cubic-bezier(0.950, 0.050, 0.795, 0.035)' => 'easeInExpo',
					'cubic-bezier(0.190, 1.000, 0.220, 1.000)' => 'easeOutExpo',
					'cubic-bezier(1.000, 0.000, 0.000, 1.000)' => 'easeInOutExpo',
					'cubic-bezier(0.600, 0.040, 0.980, 0.335)' => 'easeInCirc',
					'cubic-bezier(0.075, 0.820, 0.165, 1.000)' => 'easeOutCirc',
					'cubic-bezier(0.785, 0.135, 0.150, 0.860)' => 'easeInOutCirc',
					'cubic-bezier(0.600, -0.280, 0.735, 0.045)' => 'easeInBack',
					'cubic-bezier(0.175, 0.885, 0.320, 1.275)' => 'easeOutBack',
					'cubic-bezier(0.680, -0.550, 0.265, 1.550)' => 'easeInOutBack',
				),
			),
			'duration' => array(
				'title'				=> 'Duration',
				'size'				=> 'span2',
				'offset'			=> false,
				'data-input-type' 	=> 'range-slider',
				'class'				=> 'editor-listen',
				'data-handler'		=> 'coverSlider',
				'default'			=> 900,
				'min'				=> 0,
				'max'				=> 9999,
				'data-range-slider' => 'coverSlider',
			),
			'custom_easing' => array(
				'data-input-type'	=> 'input-text',
				'title'		 	=> 'Custom Easing',
				'help'			=> 'Add your custom easing here.<br /><br /><b>Format:</b><br />cubic-bezier(0, 0, 0, 0)<br /><br /><b>Note:</b><br />This will overwrite the selected easing above unless its completely empty. You can create your own easing <a href="http://cubic-bezier.com" target="_blank">here</a>.',
				'size'		 	=> 'span4',
				'placeholder'	=> 'cubic-bezier(0, 0, 0, 0)',
				'default'		=> '',
				'class'			=> 'editor-listen',
				'data-handler'	=> 'coverSlider',
			),
		),
		'parallax-options' => array(
			'title' 	 => 'Parallax',
			'break'		 => '1,2,2',
			'parallax' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Parallax',
				'hide-title'				=> true,
				'size'		 				=> 'span4',
				'class'						=> 'editor-listen',
				'data-handler'				=> 'coverSlider',
				'data-visibility-switch' 	=> true,
				'data-visibility-values' 	=> 'enabled,disabled',
				'data-visibility-prefix'	=> 'ov-cs-parallax',
				'default' 	 				=> 'disabled',
				'switch-values' => array(
					'enabled'  	=> 'Enabled',
					'disabled'	=> 'Disabled',
				),
			),
			'parallax_type' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Type',
				'size'		 				=> 'span2',
				'class'						=> 'editor-listen',
				'data-handler'				=> 'coverSlider',
				'style-class'				=> 'ov-cs-parallax-enabled',
				'default' 	 				=> 'cover',
				'help'						=> 'Note: If you have content below a horizontal slider, set to \'Cover\' to avoid scroll problems that can occur with the \'Reveal\' setting.',
				'switch-values' => array(
					'cover'  		=> 'Cover',
					'reveal'	 	=> 'Reveal',
				),
			),
			'parallax_offset' => array(
				'title'				=> 'Offset in %',
				'size'				=> 'span2',
				'offset'			=> false,
				'data-input-type' 	=> 'range-slider',
				'class'				=> 'editor-listen',
				'data-handler'		=> 'coverSlider',
				'default'			=> 60,
				'min'				=> 0,
				'max'				=> 100,
				'style-class'		=> 'ov-cs-parallax-enabled',
				'data-range-slider' => 'coverSlider',
			),
		),
	),
);

?>