<?php

// -----------------------------------------
// semplice
// admin/atts/customize/projectpanel.php
// -----------------------------------------

$projectpanel = array(
	'tabs' => array(
		'options' => array(
			'pp-options' => array(
				'title' => 'Options',
				'hide-title'	=> true,
				'break'	=> '2,2,2',
				'visibility' => array(
					'title'				=> 'Panel Visibility',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'projectpanel',
					'default'			=> 'visible',
					'select-box-values' => array(
						'visible'		=> 'Visible',
						'hidden'		=> 'Hidden',
					),
				),
				'hide_active_project' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Hide Active Project',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'projectpanel',
					'default' 	 				=> 'no',
					'switch-values' => array(
						'no'  	=> 'No',
						'yes'	=> 'Yes',
					),
				),
				'images_per_row' => array(
					'title'				=> 'Thumbs per row',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'projectpanel',
					'default'			=> '2',
					'select-box-values' => array(
						'1'				=> '12',
						'2'				=> '6',
						'3'				=> '4',
						'4'				=> '3',
						'6'				=> '2',
						'12'			=> '1',
					),
				),
				'background' => array(
					'title'				=> 'BG Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'		=> '.pp-title a',
					'default'			=> '#f5f5f5',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'projectpanel',
				),
				'width' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Width',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'projectpanel',
					'default' 	 				=> 'container',
					'switch-values' => array(
						'container'  	=> 'Grid',
						'container-fluid'	 	=> 'Fluid',
					),
				),
				'gutter' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Gutter',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'projectpanel',
					'default' 	 				=> 'yes',
					'switch-values' => array(
						'yes'  => 'Keep',
						'no'   => 'Remove',
					),
				),
			),
			'panel_title_options' => array(
				'title'  	 => 'Panel Title Options',
				'break'		 => '1,2,2,2,2',
				'data-hide-mobile' => true,
				'panel_label'  => array(
					'title'				=> 'Label',
					'data-input-type'	=> 'input-text',
					'default'			=> 'Selected Works',
					'placeholder'		=> 'Selected Works',
					'size'				=> 'span4',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'projectpanel',
				),
				'title_visibility' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Visibility',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'projectpanel',
					'default' 	 				=> 'visible',
					'switch-values' => array(
						'visible'  	=> 'Visible',
						'hidden'	=> 'Hidden',
					),
				),
				'panel_text_align' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Alignment',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'projectpanel',
					'default' 	 				=> 'left',
					'data-css-attribute'		=> 'text-align',
					'data-target'				=> '.panel-label',
					'switch-values' => array(
						'left'  	=> 'Left',
						'center'	=> 'Center',
					),
				),
				'panel_title_color' => array(
					'title'				=> 'Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'		=> '.panel-label',
					'default'			=> '#000000',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'projectpanel',
				),
				'panel_title_font' => array(
					'data-input-type' => 'select-fonts',
					'title'		 		=> 'Font Family',
					'size'		 		=> 'span2',
					'default' 	 		=> 'regular',
					'data-target'		=> '.panel-label span',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'projectpanel',
					'select-box-values' => $fonts,
				),
				'panel_title_fontsize' => array(
					'title'			=> 'Font Size',
					'size'			=> 'span2',
					'offset'		=> false,
					'data-input-type' 	=> 'range-slider',
					'default'		=> 32,
					'min'			=> 0,
					'max'			=> 999,
					'class'			=> 'admin-listen-handler',
					'data-target'	=> '.panel-label',
					'data-css-attribute' => 'font-size',
					'data-has-unit'	=> true,
					'data-range-slider'   => 'projectpanel',
					'data-handler'		  => 'projectpanel',
					//'responsive'	=> true,
				),
				'panel_title_text_transform' => array(
					'title'				=> 'Text Transform',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'projectpanel',
					'data-css-attribute'=> 'text-transform',
					'default'			=> 'none',
					'data-target'		=> '.panel-label',
					'select-box-values' => array(
						'none'			=> 'None',
						'uppercase'		=> 'Uppercase',
					),
				),
			),
			'title_options' => array(
				'title'  	 => 'Project Title Options',
				'break'		 => '1,2,2',
				'data-hide-mobile' => true,
				'meta_visibility' => array(
					'data-input-type' 	=> 'select-box',
					'title'		 		=> 'Title Visibility',
					'size'		 		=> 'span4',
					'class'				=> 'admin-listen-handler',
					'default' 	 		=> 'both',
					'data-handler'  	=> 'projectpanel',
					'select-box-values' => array(
						'both' 			=> 'Show both title and project type',
						'title'			=> 'Show only title',
						'category'		=> 'Show only project type',
						'hidden'		=> 'Hide Both',
					),
				),
				'title_color' => array(
					'title'				=> 'Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'		=> '.pp-title a',
					'default'			=> '#000000',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'projectpanel',
				),
				'title_font' => array(
					'data-input-type' => 'select-fonts',
					'title'		 		=> 'Font Family',
					'size'		 		=> 'span2',
					'default' 	 		=> 'none',
					'data-target'		=> '.pp-title a',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'projectpanel',
					'select-box-values' => $fonts,
				),
				'title_fontsize' => array(
					'title'			=> 'Font Size',
					'size'			=> 'span2',
					'offset'		=> false,
					'data-input-type' 	=> 'range-slider',
					'default'		=> 13,
					'min'			=> 0,
					'max'			=> 999,
					'class'			=> 'admin-listen-handler',
					'data-target'	=> '.pp-title a',
					'data-css-attribute' => 'font-size',
					'data-has-unit'	=> true,
					'data-range-slider'   => 'projectpanel',
					'data-handler'		  => 'projectpanel',
					//'responsive'	=> true,
				),
				'title_text_transform' => array(
					'title'				=> 'Text Transform',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'default'			=> 'none',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'projectpanel',
					'data-css-attribute'=> 'text-transform',
					'data-target'		=> '.pp-title a',
					'select-box-values' => array(
						'none'			=> 'None',
						'uppercase'		=> 'Uppercase',
					),
				),
			),
			'type_options' => array(
				'title'  	 => 'Project Type Options',
				'break'		 => '2,2',
				'data-hide-mobile' => true,
				'category_color' => array(
					'title'				=> 'Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'		=> '.pp-title span',
					'default'			=> '#999999',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'projectpanel',
				),
				'category_font' => array(
					'data-input-type' => 'select-fonts',
					'title'		 		=> 'Font Family',
					'size'		 		=> 'span2',
					'default' 	 		=> 'none',
					'data-target'		=> '.pp-title span',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'projectpanel',
					'select-box-values' => $fonts,
				),
				'category_fontsize' => array(
					'title'			=> 'Font Size',
					'size'			=> 'span2',
					'offset'		=> false,
					'data-input-type' 	=> 'range-slider',
					'default'		=> 13,
					'min'			=> 0,
					'max'			=> 999,
					'class'			=> 'admin-listen-handler',
					'data-target'	=> '.pp-title span',
					'data-css-attribute' => 'font-size',
					'data-has-unit'	=> true,
					'data-range-slider'   => 'projectpanel',
					'data-handler'		  => 'projectpanel',
					//'responsive'	=> true,
				),
				'category_text_transform' => array(
					'title'				=> 'Text Transform',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'projectpanel',
					'data-css-attribute'=> 'text-transform',
					'data-target'		=> '.pp-title span',
					'default'			=> 'none',
					'select-box-values' => array(
						'none'			=> 'None',
						'uppercase'		=> 'Uppercase',
					),
				),
			),
		),
		'paddings' => array(
			'panel-padding' => array(
				'title'			=> 'Panel',
				'break'			=> '1',
				'panel_padding' => array(
					'title'			=> 'Vertical',
					'size'			=> 'span2',
					'offset'		=> false,
					'data-input-type' 	=> 'range-slider',
					'default'		=> 45,
					'min'			=> 0,
					'max'			=> 999,
					'class'			=> 'admin-listen-handler',
					'data-target'	=> '.project-panel',
					'data-has-unit'	=> true,
					'data-range-slider'   => 'projectpanel',
					'data-handler'		  => 'projectpanel',
					//'responsive'	=> true,
				),
			),
			'panel-title-padding' => array(
				'title'			=> 'Panel Title',
				'break'			=> '2',
				'panel_padding_left' => array(
					'title'			=> 'Left',
					'size'			=> 'span2',
					'offset'		=> false,
					'data-input-type' 	=> 'range-slider',
					'default'		=> 0,
					'min'			=> 0,
					'max'			=> 999,
					'class'			=> 'admin-listen-handler',
					'data-target'	=> '.panel-label',
					'data-css-attribute' => 'padding-left',
					'data-has-unit'	=> true,
					'data-range-slider'   => 'projectpanel',
					'data-handler'		  => 'projectpanel',
					//'responsive'	=> true,
				),
				'panel_padding_bottom' => array(
					'title'			=> 'bottom',
					'size'			=> 'span2',
					'offset'		=> false,
					'data-input-type' 	=> 'range-slider',
					'default'		=> 30,
					'min'			=> 0,
					'max'			=> 999,
					'class'			=> 'admin-listen-handler',
					'data-target'	=> '.panel-label',
					'data-css-attribute' => 'padding-bottom',
					'data-has-unit'	=> true,
					'data-range-slider'   => 'projectpanel',
					'data-handler'		  => 'projectpanel',
					//'responsive'	=> true,
				),
			),
			'project-padding' => array(
				'title'			=> 'Project Title Padding',
				'break'			=> '2',
				'title_padding_top' => array(
					'title'			=> 'Top',
					'size'			=> 'span2',
					'offset'		=> false,
					'data-input-type' 	=> 'range-slider',
					'default'		=> 10,
					'min'			=> 0,
					'max'			=> 999,
					'class'			=> 'admin-listen-handler',
					'data-target'	=> '.pp-title',
					'data-css-attribute' => 'padding-top',
					'data-has-unit'	=> true,
					'data-range-slider'   => 'projectpanel',
					'data-handler'		  => 'projectpanel',
					//'responsive'	=> true,
				),
				'title_padding_bottom' => array(
					'title'			=> 'Bottom',
					'size'			=> 'span2',
					'offset'		=> false,
					'data-input-type' 	=> 'range-slider',
					'default'		=> 30,
					'min'			=> 0,
					'max'			=> 999,
					'class'			=> 'admin-listen-handler',
					'data-target'	=> '.project-panel',
					'data-target'	=> '.pp-title',
					'data-css-attribute' => 'padding-bottom',
					'data-has-unit'	=> true,
					'data-range-slider'   => 'projectpanel',
					'data-handler'		  => 'projectpanel',
					'help'				  => 'You will only see a preview if you have more than 1 row of thumbnails.'
					//'responsive'	=> true,
				),
			),
		),
	),
);