<?php

// -----------------------------------------
// semplice
// admin/atts/customize/typography.php
// -----------------------------------------

$typography = array(
	'tabs' => array(
		'heading' => array(
			'h1_switch' => array(
				'title' => 'Customize Headings',
				'break' => '1',
				'class'	=> 'add-effects-heading',
				'h1_customize' => array(
					'data-input-type' => 'onoff-switch',
					'style-class'=> 'first-switch',
					'title'		 => 'H1 Heading',
					'hide-title' => true,
					'size'		 => 'span4',
					'data-handler'  	=> 'typography',
					'class'		 => 'admin-listen-handler',
					'default' 	 => 'off',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'on,off',
					'data-visibility-prefix'	=> 'ov-h1',
					'switch-values' => array(
						'on'	 => 'On',
						'off'	 => 'Off',
					),
				),
			),
			'h1' => array(
				'title' => 'H1 Options',
				'break' => '2,2',
				'hide-title' => true,
				'class'			=> 'motion-sub',
				'h1_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'data-target'		=> '.preview-h1',
					'style-class'		=> 'ov-h1-on',
					'select-box-values' => $fonts,
				),
				'h1_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.preview-h1',
					'data-has-unit'		=> true,
					'default'			=> 42,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h1-on',
					'data-range-slider' => 'typography',
				),
				'h1_line_height' => array(
					'title'				=> 'Line height',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'line-height',
					'data-target'		=> '.preview-h1',
					'data-has-unit'		=> true,
					'default'			=> 54,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h1-on',
					'data-range-slider' => 'typography',
				),
				'h1_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'letter-spacing',
					'data-target'		=> '.preview-h1',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'style-class'		=> 'ov-h1-on',
					'data-range-slider' => 'typography',
				),
			),
			'h2_switch' => array(
				'title' => 'Enable Options',
				'break' => '1',
				'hide-title' => true,
				'h2_customize' => array(
					'data-input-type' => 'onoff-switch',
					'title'		 => 'H2 Heading',
					'hide-title' => true,
					'size'		 => 'span4',
					'data-handler'  	=> 'typography',
					'class'		 => 'admin-listen-handler',
					'default' 	 => 'off',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'on,off',
					'data-visibility-prefix'	=> 'ov-h2',
					'switch-values' => array(
						'on'	 => 'On',
						'off'	 => 'Off',
					),
				),
			),
			'h2' => array(
				'title' => 'H2 Options',
				'break' => '2,2',
				'hide-title' => true,
				'class'	=> 'motion-sub',
				'h2_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'data-target'		=> '.preview-h2',
					'style-class'		=> 'ov-h2-on',
					'select-box-values' => $fonts,
				),
				'h2_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.preview-h2',
					'data-has-unit'		=> true,
					'default'			=> 36,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h2-on',
					'data-range-slider' => 'typography',
				),
				'h2_line_height' => array(
					'title'				=> 'Line height',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'line-height',
					'data-target'		=> '.preview-h2',
					'data-has-unit'		=> true,
					'default'			=> 48,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h2-on',
					'data-range-slider' => 'typography',
				),
				'h2_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'letter-spacing',
					'data-target'		=> '.preview-h2',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'style-class'		=> 'ov-h2-on',
					'data-range-slider' => 'typography',
				),
			),
			'h3_switch' => array(
				'title' => 'Enable Options',
				'break' => '1',
				'hide-title' => true,
				'h3_customize' => array(
					'data-input-type' => 'onoff-switch',
					'title'		 => 'H3 Heading',
					'hide-title' => true,
					'size'		 => 'span4',
					'data-handler'  	=> 'typography',
					'class'		 => 'admin-listen-handler',
					'default' 	 => 'off',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'on,off',
					'data-visibility-prefix'	=> 'ov-h3',
					'switch-values' => array(
						'on'	 => 'On',
						'off'	 => 'Off',
					),
				),
			),
			'h3' => array(
				'title' => 'H3 Options',
				'break' => '2,2',
				'hide-title' => true,
				'class'	=> 'motion-sub',
				'h3_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'data-target'		=> '.preview-h3',
					'style-class'		=> 'ov-h3-on',
					'select-box-values' => $fonts,
				),
				'h3_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.preview-h3',
					'data-has-unit'		=> true,
					'default'			=> 28,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h3-on',
					'data-range-slider' => 'typography',
				),
				'h3_line_height' => array(
					'title'				=> 'Line height',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'line-height',
					'data-target'		=> '.preview-h3',
					'data-has-unit'		=> true,
					'default'			=> 40,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h3-on',
					'data-range-slider' => 'typography',
				),
				'h3_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'letter-spacing',
					'data-target'		=> '.preview-h3',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'style-class'		=> 'ov-h3-on',
					'data-range-slider' => 'typography',
				),
			),
			'h4_switch' => array(
				'title' => 'Enable Options',
				'break' => '1',
				'hide-title' => true,
				'h4_customize' => array(
					'data-input-type' => 'onoff-switch',
					'title'		 => 'H4 Heading',
					'hide-title' => true,
					'size'		 => 'span4',
					'data-handler'  	=> 'typography',
					'class'		 => 'admin-listen-handler',
					'default' 	 => 'off',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'on,off',
					'data-visibility-prefix'	=> 'ov-h4',
					'switch-values' => array(
						'on'	 => 'On',
						'off'	 => 'Off',
					),
				),
			),
			'h4' => array(
				'title' => 'H4 Options',
				'break' => '2,2',
				'hide-title' => true,
				'class' => 'motion-sub',
				'h4_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'data-target'		=> '.preview-h4',
					'style-class'		=> 'ov-h4-on',
					'select-box-values' => $fonts,
				),
				'h4_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.preview-h4',
					'data-has-unit'		=> true,
					'default'			=> 24,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h4-on',
					'data-range-slider' => 'typography',
				),
				'h4_line_height' => array(
					'title'				=> 'Line height',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'line-height',
					'data-target'		=> '.preview-h4',
					'data-has-unit'		=> true,
					'default'			=> 36,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h4-on',
					'data-range-slider' => 'typography',
				),
				'h4_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'letter-spacing',
					'data-target'		=> '.preview-h4',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'style-class'		=> 'ov-h4-on',
					'data-range-slider' => 'typography',
				),
			),
			'h5_switch' => array(
				'title' => 'Enable Options',
				'break' => '1',
				'hide-title' => true,
				'h5_customize' => array(
					'data-input-type' => 'onoff-switch',
					'title'		 => 'H5 Heading',
					'hide-title' => true,
					'size'		 => 'span4',
					'data-handler'  	=> 'typography',
					'class'		 => 'admin-listen-handler',
					'default' 	 => 'off',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'on,off',
					'data-visibility-prefix'	=> 'ov-h5',
					'switch-values' => array(
						'on'	 => 'On',
						'off'	 => 'Off',
					),
				),
			),
			'h5' => array(
				'title' => 'H5 Options',
				'break' => '2,2',
				'hide-title' => true,
				'class'	=> 'motion-sub',
				'h5_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'data-target'		=> '.preview-h5',
					'style-class'		=> 'ov-h5-on',
					'select-box-values' => $fonts,
				),
				'h5_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.preview-h5',
					'data-has-unit'		=> true,
					'default'			=> 20,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h5-on',
					'data-range-slider' => 'typography',
				),
				'h5_line_height' => array(
					'title'				=> 'Line height',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'line-height',
					'data-target'		=> '.preview-h5',
					'data-has-unit'		=> true,
					'default'			=> 32,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h5-on',
					'data-range-slider' => 'typography',
				),
				'h5_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'letter-spacing',
					'data-target'		=> '.preview-h5',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'style-class'		=> 'ov-h5-on',
					'data-range-slider' => 'typography',
				),
			),
			'h6_switch' => array(
				'title' => 'Enable Options',
				'break' => '1',
				'hide-title' => true,
				'h6_customize' => array(
					'data-input-type' => 'onoff-switch',
					'title'		 => 'H6 Heading',
					'hide-title' => true,
					'size'		 => 'span4',
					'data-handler'  	=> 'typography',
					'class'		 => 'admin-listen-handler',
					'default' 	 => 'off',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'on,off',
					'data-visibility-prefix'	=> 'ov-h6',
					'switch-values' => array(
						'on'	 => 'On',
						'off'	 => 'Off',
					),
				),
			),
			'h6' => array(
				'title' => 'H6 Options',
				'break' => '2,2',
				'hide-title' => true,
				'class'	=> 'motion-sub',
				'h6_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'data-target'		=> '.preview-h6',
					'style-class'		=> 'ov-h6-on',
					'select-box-values' => $fonts,
				),
				'h6_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.preview-h6',
					'data-has-unit'		=> true,
					'default'			=> 18,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h6-on',
					'data-range-slider' => 'typography',
				),
				'h6_line_height' => array(
					'title'				=> 'Line height',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'line-height',
					'data-target'		=> '.preview-h6',
					'data-has-unit'		=> true,
					'default'			=> 30,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-h6-on',
					'data-range-slider' => 'typography',
				),
				'h6_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'letter-spacing',
					'data-target'		=> '.preview-h6',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'style-class'		=> 'ov-h6-on',
					'data-range-slider' => 'typography',
				),
			),
		),
		'paragraph' => array(
			'p' => array(
				'title' => 'paragraph Options',
				'break' => '2,2',
				'hide-title' => true,
				'p_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'data-target'		=> '.preview-paragraph',
					'style-class'		=> 'ov-paragraph-on',
					'select-box-values' => $fonts,
				),
				'p_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.preview-paragraph',
					'data-has-unit'		=> true,
					'default'			=> 18,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-paragraph-on',
					'data-range-slider' => 'typography',
				),
				'p_line_height' => array(
					'title'				=> 'Line height',
					'help'				=> 'Please note the paragraph does not use a pixel line-height value, but instead is relative to the base font size (18px) and your paragraph font size.<br /><br /><b>Example</b><br />In order to calculate the relative value for a desired line height in px, use: (desired px line-height / paragraph font size) * 18 = relative value.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'line-height',
					'data-target'		=> '.preview-paragraph',
					'data-divider'	    => 18,
					'default'			=> 30,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-paragraph-on',
					'data-range-slider' => 'typography',
				),
				'p_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'letter-spacing',
					'data-target'		=> '.preview-paragraph',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'style-class'		=> 'ov-paragraph-on',
					'data-range-slider' => 'typography',
				),
			),
		),
		'custom' => array(
			'custom-styles-options' => array(
				'title' => 'Custom Styles',
				'help'  => 'You can select your custom styles in the WYSIWYG editor from the \'Format\' dropdown.<br /><br />Note: The \'letter spacing\' option is only working for block elements.',
				'break' => '2,2',
				'class' => 'custom-style-button',
				'custom_styles_button' => array(
					'data-input-type' 	=> 'button',
					'title'		 		=> 'Custom Styles',
					'hide-title'		=> true,
					'button-title'		=> 'Add custom style',
					'size'		 		=> 'span4',
					'class'				=> 'semplice-button white-button expand-options',
					'data-expand-options' => 'custom-styles-new',
				),
			),
		),
		'custom_template' => array(
			'custom-styles-template' => array(
				'title' 	 => 'Custom Style',
				'break' 	 => '2,2,2,2,2,2,2,2,1',
				'class'		 => 'custom-style-options',
				'hide-title' => true,
				'custom_style_name' => array(
					'data-input-type'	=> 'input-text',
					'title'		 	=> 'Name',
					'size'		 	=> 'span2',
					'placeholder'	=> 'Style name',
					'default'		=> '',
					'class'     	=> 'admin-listen-handler',
					'data-handler'  => 'typography',
					'data-target'	=> '.preview-label',
				),
				'custom_style_preview_bg' => array(
					'title'				=> 'Preview Background',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'default'			=> 'bright',
					'data-target'		=> '.custom-style',
					'select-box-values' => array(
						'bright'	=> 'Bright',
						'dark'		=> 'Dark',
					),
				),
				'custom_style_background_color' => array(
					'title'			=> 'Text BG Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'Transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-css-attribute'=> 'background-color',
					'data-picker'		=> 'typography',
					'data-target'		=> '.custom-style',
				),
				'custom_style_color' => array(
					'title'			=> 'Text Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-css-attribute'=> 'color',
					'data-picker'		=> 'typography',
					'data-target'		=> '.custom-style',
				),
				'custom_style_text_transform' => array(
					'title'				=> 'Text Transform',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'default'			=> 'none',
					'data-css-attribute'=> 'text-transform',
					'data-target'		=> '.custom-style',
					'select-box-values' => array(
						'none'			=> 'None',
						'uppercase'		=> 'Uppercase',
					),
				),
				'custom_style_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'data-target'		=> '.custom-style',
					'select-box-values' => $fonts,
				),
				'custom_style_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'font-size',
					'data-has-unit'		=> true,
					'default'			=> 18,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'typography',
					'data-target'		=> '.custom-style',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'custom_style_line_height' => array(
					'title'				=> 'Line height',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'line-height',
					'data-target'		=> '.custom-style',
					'data-has-unit'		=> true,
					'default'			=> 30,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'typography',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'custom_style_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'letter-spacing',
					'data-target'		=> '.custom-style',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'data-range-slider' => 'typography',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'custom_style_padding' => array(
					'title'				=> 'Padding',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'padding',
					'data-target'		=> '.custom-style',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'typography',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'custom_style_text_decoration' => array(
					'title'				=> 'Text Decoration',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'default'			=> 'none',
					'data-css-attribute'=> 'text-decoration',
					'data-target'		=> '.custom-style',
					'select-box-values' => array(
						'none'			=> 'None',
						'overline'		=> 'Overline',
						'line-through'  => 'Line Through',
						'underline'		=> 'Underline',
					),
				),
				'custom_style_text_decoration_color' => array(
					'title'			=> 'Decoration Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-css-attribute'=> 'text-decoration-color',
					'data-target'		=> '.custom-style',
					'data-handler'  => 'colorPicker',
					'data-picker'		=> 'typography',
				),
				'custom_style_text_stroke' => array(
					'title'				=> 'Text Stroke',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'text-stroke',
					'data-target'		=> '.custom-style',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'typography',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'custom_style_text_stroke_color' => array(
					'title'			=> 'Stroke Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-css-attribute'=> 'text-stroke',
					'data-target'		=> '.custom-style',
					'data-handler'  => 'colorPicker',
					'data-picker'		=> 'typography',
				),
				'custom_style_border_color' => array(
					'title'			=> 'Border Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-css-attribute'=> 'border-color',
					'data-target'		=> '.custom-style',
					'data-handler'  => 'colorPicker',
					'data-picker'		=> 'typography',
				),
				'custom_style_border_width' => array(
					'title'				=> 'Border Width',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'typography',
					'data-css-attribute'=> 'border-width',
					'data-target'		=> '.custom-style',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'typography',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'custom_style_border_style' => array(
					'title'				=> 'Border Style',
					'size'				=> 'span4',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'typography',
					'default'			=> 'none',
					'data-css-attribute'=> 'border-style',
					'data-target'		=> '.custom-style',
					'select-box-values' => array(
						'solid'		=> 'Solid',
						'dashed' 	=> 'Dashed',
						'dotted'	=> 'Dotted',
					),
				),
			),
		),
	),
);