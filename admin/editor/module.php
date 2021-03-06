<?php

// -----------------------------------------
// semplice
// admin/editor/module.php
// -----------------------------------------

if(!class_exists('module_api')) {
	class module_api {

		// public vars
		public $module;
		public $detect;
		public $post_id;
		public $script_execution;

		public function __construct() {
			global $detect;
			$this->detect = $detect;
		}

		// -----------------------------------------
		// generate html output while iterate through ram
		// -----------------------------------------

		public function generate_output($ram, $section_id, $section) {
	
			// assign public vars
			$this->post_id = isset($ram['post_id']) ? $ram['post_id'] : 0;
			$this->script_execution = isset($ram['script_execution']) ? $ram['script_execution'] : 'normal';

			// output
			$output = array(
				'html'	=> '',
				'css'	=> '',
				'motion'	=> array(
					'css' => '',
					'js'  => array(
						'on_load'   => '',
						'on_scroll' => '',
						'on_hover'  => '',
						'on_click'  => '',
					),
				),
			);
			$custom_height = '';
			$css_classes = '';
			$section_class = 'content-block';
			$section_element = $section_id;
			$append_content = '';

			// add section element to ram
			$ram['section_element'] = $section_element;

			// section height
			$ram['section_height'] = array(
				'mode' => 'dynamic',
				'height' => 'auto',
			);

			// check if section is in ram
			if(isset($ram[$section_id])) {

				// assign styles
				$styles = $ram[$section_id]['styles']['xl'];

				// css classes
				if(isset($ram[$section_id]['classes']) && !empty($ram[$section_id]['classes'])) {
					$css_classes = ' ' . $ram[$section_id]['classes'];
				}

				// section only module?
				if(isset($ram[$section_id]['type']) && $ram[$section_id]['type'] == 'section-module') {
					$css_classes .= ' section-module';
				}

				// section height
				if(isset($ram[$section_id]['layout']['data-height'])) {
					if($ram[$section_id]['layout']['data-height'] == 'fullscreen') {
						$ram['section_height'] = array(
							'mode' => 'fullscreen',
							'height' => 'auto',
						);
					} else if($ram[$section_id]['layout']['data-height'] == 'custom') {
						$ram['section_height'] = array(
							'mode' => 'custom',
							'height' => $ram[$section_id]['customHeight']['xl']['height'],
						);
						$output['css'] .= $this->generate_css('container', $ram[$section_id]['customHeight'], $section_id, false);
					}
				}

				// get row content
				$row_content = $this->row_iterate($ram, $section);

				// cover
				if($section_id == 'cover') {
					// cover visibility
					$cover_visibility = isset($ram['cover_visibility']) ? $ram['cover_visibility'] : 'hidden';
					// add cover visibility to layout attributes
					$ram[$section_id]['layout']['data-cover'] = $cover_visibility;
					// set cover as section class
					$section_class = 'semplice-cover';
					// is cover empty?
					$first_key = key($section);
					if(isset($section['columns']) && empty($section['columns']) || isset($section[$first_key]['columns']) && empty($section[$first_key]['columns'])) {
						$section_class .= ' is-empty-cover';
					}
					// frontend only options
					if($ram['visibility'] == 'frontend') {
						// cover parallax
						if(isset($styles['parallax']) && $styles['parallax'] == 'on') {
							$ram[$section_id]['layout']['data-parallax'] = 'parallax';
						}
						// transparent navbar while in cover
						$output['css'] .= '.cover-transparent { background: rgba(0,0,0,0) !important; }';
						// start at top
						$output['css'] .= '#content-holder .sections { margin-top: 0px !important; }';
					}
					// scroll down visibility
					$arrow_visibility = isset($styles['arrow_visibility']) ? $styles['arrow_visibility'] : 'visible';
					// scroll down arrow
					$append_content .= '<a class="show-more show-more-' . $arrow_visibility . ' semplice-event" data-event-type="helper" data-event="scrollToContent">' . get_svg('frontend', '/icons/arrow_down') . '</a>';
					// add color css
					if(isset($styles['arrow_color'])) {
						$output['css'] .= '#content-holder .semplice-cover .show-more svg { fill: ' . $styles['arrow_color'] . '; }';
					}
					// on the frontend, change the section element id to avoid problems in the coverslider and single page app motions
					if($ram['visibility'] == 'frontend') {
						// change section element id
						$section_element = 'cover-' . $this->post_id;
					}
				}

				// get bg video on frontend
				if(isset($styles['background_type']) && $styles['background_type'] == 'vid') {
					// get fallback
					$output['css'] .= semplice_background_video_fallback($styles, $section_element, $ram['visibility']);
					// get video on frontend desktiop only
					$append_content .= semplice_background_video($styles, $ram['visibility'], true);				
				} else if($section_id == 'cover' && $ram['visibility'] == 'frontend') {
					// is cover zoom?
					if(isset($styles['zoom']) && $styles['zoom'] == 'on') {
						$append_content .= '<div class="cover-zoom fp-bg"><div class="cover-image" data-cover-zoom="zoom"></div></div>';
					} else {
						// add cover image
						$append_content .= '<div class="cover-image fp-bg"></div>';
					}
					// cover img css
					$output['css'] .=  '#' . $section_element . ' .cover-image {' . semplice_get_bg_css($styles) . ' }';
					// responsive cover css (background position)
					$output['css'] .= semplice_responsive_cover($ram[$section_id]['styles'], '#' . $section_element . ' .cover-image');
				}

				// section start
				$output['html'] = '
					<section id="' . $section_element . '" class="' . $section_class . $css_classes . '" ' . $this->get_attributes($ram[$section_id]['layout']) . '>
						' . $append_content . '
						<div class="container">
						' . $row_content['html'] . '
						</div>
					</section>				
				';

				// section css styles (not on cover)
				if($section_id != 'cover' || $ram['visibility'] == 'editor') {
					$output['css'] .= $this->generate_css('section', $ram[$section_id]['styles'], $section_id, false);
				}				

				// section styles
				$output['css'] .= $row_content['css'];

				// motion css / js
				$motion = $this->get_motion_output($ram, $section_id, 'section');

				// check if event is set
				if(isset($motion['event']) && !empty($motion['event'])) {
					// motion css
					$output['motion']['css'] = $motion['css'];
					// motion js
					$output['motion']['js'][$motion['event']] = $motion['js'];
				}

				// add motion css from rows
				if(isset($row_content['motion']['css'])) {
					$output['motion']['css'] .= $row_content['motion']['css'];
				}

				// define motion events
				$motion_events = array('on_load', 'on_scroll', 'on_hover', 'on_click');

				// loop through motion events
				foreach ($motion_events as $event) {
					if(isset($row_content['motion']['js'][$event])) {
						$output['motion']['js'][$event] .= $row_content['motion']['js'][$event];
					}
				}
			}

			// output
			return $output;
		}

		// -----------------------------------------
		// row, iterate through columns
		// -----------------------------------------

		public function row_iterate($ram, $section) {

			// output
			$output = array(
				'html' => '',
				'column_html' => '',
				'css'  => '',
				'motion'	=> array(
					'css' => '',
					'js'  => array(
						'on_load'   => '',
						'on_scroll' => '',
						'on_hover'  => '',
						'on_click'  => '',
					),
				),
			);

			// is old single row mode?
			if(isset($section['columns'])) {
				// iterate columns
				foreach($section['columns'] as $column_id => $column_content) {
					$output = $this->get_columns($output, $ram, $column_id, $column_content);
				}
				// add row to output
				$output['html'] = '<div id="' . $section['row_id'] . '" class="row">' . $output['column_html'] . '</div>';
			} else {
				foreach($section as $row_id => $columns) {
					// rest column html before iterate
					$output['column_html'] = '';
					// iterate columns
					foreach($columns['columns'] as $column_id => $column_content) {
						// column html
						$output = $this->get_columns($output, $ram, $column_id, $column_content);
					}
					// add row to output
					$output['html'] .= '<div id="' . $row_id . '" class="row">' . $output['column_html'] . '</div>';
				}
			}

			return $output;
		}

		// -----------------------------------------
		// get columns and iterate through them
		// -----------------------------------------

		public function get_columns($output, $ram, $column_id, $column_content) {
			// column html
			$columns_content = $this->column_iterate($ram, $column_id, $column_content);
			// add to html output
			$output['column_html'] .= $columns_content['html'];
			// add to css output
			$output['css'] .= $columns_content['css'];
			// motion css
			if(isset($columns_content['motion']['css'])) {
				$output['motion']['css'] .= $columns_content['motion']['css'];
			}
			// define motion events
			$motion_events = array('on_load', 'on_scroll', 'on_hover', 'on_click');
			// loop through motion events
			foreach ($motion_events as $event) {
				if(isset($columns_content['motion']['js'][$event])) {
					$output['motion']['js'][$event] .= $columns_content['motion']['js'][$event];
				}
			}
			// return output
			return $output;
		}

		// -----------------------------------------
		// iterate through column contents
		// -----------------------------------------

		public function column_iterate($ram, $column_id, $column_content) {

			// output
			$output = array(
				'html' => '',
				'css'  => '',
				'motion'	=> array(
					'css' => '',
					'js'  => array(
						'on_load'   => '',
						'on_scroll' => '',
						'on_hover'  => '',
						'on_click'  => '',
					),
				),
			);
			$content_html = '';
			$column_classes = '';

			// check if column id is in ram
			if(isset($ram[$column_id])) {

				// column css
				$output['css'] = $this->generate_css('column', $ram[$column_id]['styles'], $column_id, false);

				// motion css / js
				$motion = $this->get_motion_output($ram, $column_id, 'column');

				// check if event is set
				if(isset($motion['event']) && !empty($motion['event'])) {
					// motion css
					$output['motion']['css'] .= $motion['css'];
					
					// motion js
					$output['motion']['js'][$motion['event']] = $motion['js'];
				}

				// get column content
				foreach($column_content as $content_id) {

					// look if content id is in ram
					if(isset($ram[$content_id])) {
						// set module file
						$module = get_template_directory() . '/admin/editor/modules/' . $ram[$content_id]['module'] . '.php';

						// add section element to ram content
						$ram[$content_id]['section_element'] = '#' . $ram['section_element'];

						// add fullscreen
						$ram[$content_id]['section_height'] = $ram['section_height'];

						// check if module exists
						if(file_exists($module)) {
							$values = array(
								'module_name'		=> $ram[$content_id]['module'],
								'content_id'  		=> $content_id,
								'content'	  		=> $ram[$content_id],
							);
							
							// get content
							$content = $this->content($values, $ram['visibility'], false);

							// add to html output
							$content_html .= $content['html'];

							// add module specific css
							$output['css'] .= $content['css'];

							// add to css output
							$output['css'] .= $this->generate_css('content', $ram[$content_id]['styles'], $content_id, $ram[$content_id]['module']);

							// motion css / js
							$motion = $this->get_motion_output($ram, $content_id, 'content');

							// check if event is set
							if(isset($motion['event']) && !empty($motion['event'])) {
								// motion css
								$output['motion']['css'] .= $motion['css'];

								// motion js
								$output['motion']['js'][$motion['event']] .= $motion['js'];
							}	
						}				
					}
				}

				// column type
				if(isset($ram[$column_id]['type']) && $ram[$column_id]['type'] == 'spacer') {
					$column_classes = ' spacer-column';
				}

				// css classes
				if(isset($ram[$column_id]['classes']) && !empty($ram[$column_id]['classes'])) {
					$column_classes = ' ' . $ram[$column_id]['classes'];
				}

				// get bg video on frontend
				$styles = $ram[$column_id]['styles']['xl'];
				if(isset($styles['background_type']) && $styles['background_type'] == 'vid') {
					// define default
					$bg_video = '<div class="background-video"></div>';
					// get fallback
					$output['css'] .= semplice_background_video_fallback($styles, $column_id, $ram['visibility']);
					// get video on frontend desktiop only
					if($ram['visibility'] == 'frontend') {
						$bg_video = semplice_background_video($styles, $ram['visibility'], true);
					}
				} else {
					$bg_video = '';
				}

				// column start
				$output['html'] = '<div id="' . $column_id . '" class="column' . $column_classes . '" ';

				// column width
				foreach ($ram[$column_id]['width'] as $width => $value) {
					if(!empty($width)) {
						$output['html'] .= 'data-' . $width . '-width="' . $value . '" ';
					}
				}

				// column end
				$output['html'] .= $this->get_attributes($ram[$column_id]['layout']) . '>';

				// bg video
				$output['html'] .= $bg_video;

				// column edit head
				if($ram['visibility'] == 'editor') {
					$type = '';
					if(isset($ram[$column_id]['type']) && $ram[$column_id]['type'] == 'spacer') {
						$type = 'Spacer ';
					}
					$output['html'] .= $this->column_edit_head($column_id, $type);	
				}

				// content wrapper
				$output['html'] .= '
					<div class="content-wrapper">
						' . $content_html . '
					</div>
				';

				// column end
				$output['html'] .= '</div>';
			}

			return $output;
		}

		// -----------------------------------------
		// create content
		// -----------------------------------------

		public function content($values, $visibility, $is_duplicate) {

			// output
			$output = array(
				'html' => '',
				'css'  => ''
			);

			// atts
			$atts = array();

			// include module
			require_once get_template_directory() . '/admin/editor/modules/' . $values['module_name'] . '.php';

			// vars
			$css_classes = '';

			// public values to content
			$values['content']['post_id'] = isset($this->post_id) ? $this->post_id : 0;
			$values['content']['script_execution'] = isset($this->script_execution) ? $this->script_execution : 'normal';

			// visibility
			if($visibility == 'editor') {
				$module_content = $this->module[$values['module_name']]->output_editor($values['content'], $values['content_id']);
			} else {
				$module_content = $this->module[$values['module_name']]->output_frontend($values['content'], $values['content_id']);
			}

			// css
			if($module_content['css'] && !empty($module_content['css'])) {
				$output['css'] = $module_content['css'];
			}

			// get css if is duplicate
			if($is_duplicate) {
				$output['css'] .= $this->generate_css('content', $values['content']['styles'], $values['content_id'], $values['content']['module']);
			}

			// css classes
			if(isset($values['content']['classes']) && !empty($values['content']['classes'])) {
				$css_classes .= ' ' . $values['content']['classes'];
			}

			// add css classes for individual modules
			switch($values['module_name']) {
				case "advancedportfoliogrid":
					// get preset
					$preset = 'horizontal-fullscreen';
					if(isset($values['content']['options']['preset']) && !empty($values['content']['options']['preset'])) {
						$preset = $values['content']['options']['preset'];
					}
					$atts['data-apg-preset'] = $preset;
				break;
			}

			// generate output
			$output['html'] = '
				<div id="' . $values['content_id'] . '" class="column-content' . $css_classes . '" data-module="' . $values['module_name'] . '" ' . $this->get_attributes($atts) . '>
					' . $module_content['html'] . '
				</div>
			';

			// return output
			return $output;
		}

		// -----------------------------------------
		// column edit head
		// -----------------------------------------

		public function column_edit_head($column_id, $type) {
			return '
				<div class="column-edit-head">
					<a class="column-handle">' . get_svg('backend', '/icons/column_reorder') . '</a>
					<p>' . $type . 'Col</p>
				</div>
			';
		}

		// -----------------------------------------
		// generate data attributes
		// -----------------------------------------

		public function get_attributes($values) {

			// vars
			$attributes = '';

			foreach ($values as $attribute => $value) {
				if ((array) $value !== $value) {
					$attributes .= $attribute . '="' . $value . '" ';
				}	
			}

			return $attributes;
		}

		// -----------------------------------------
		// styles
		// -----------------------------------------

		public function generate_css($mode, $css, $content_id, $module) {

			// define output
			$output = '';

			// desktop
			if(!empty($css['xl'])) {
				$output .= '#content-holder ' . $this->container_styles($mode, $css['xl'], $content_id, $module);
			}

			// get breakpoints
			$breakpoints = semplice_get_breakpoints();

			// iterate breakpoints
			foreach ($breakpoints as $breakpoint => $width) {
				if(!empty($css[$breakpoint])) {
					// desktop
					$output .= '@media screen' . $width['min'] . $width['max'] . ' { #content-holder ' . $this->container_styles($mode, $css[$breakpoint], $content_id, $module) . '}';
				}
			}

			return $output;
		}

		// -----------------------------------------
		// module container styles
		// -----------------------------------------

		public function container_styles($mode, $styles, $id, $module) {
			// element css open
			if($mode == 'container') {
				$css = '#' . $id . ' .container {';
			} else if($mode == 'branding') {
				$css = $id . ' {';
			} else {
				$css = '#' . $id . ' {';
			}

			// directions
			$directions = array('top', 'right', 'bottom', 'left');

			// branding specific
			if($mode != 'branding') {
				foreach ($directions as $direction) {
					if(!empty($styles['padding-' . $direction])) {
						$css .= 'padding-' . $direction . ': ' . $styles['padding-' . $direction] . ';';
					}
					if(!empty($styles['margin-' . $direction])) {
						$css .= 'margin-' . $direction . ': ' . $styles['margin-' . $direction] . ';';
					}
				}
			}

			if($mode != 'content') {
				// border width
				$css .= $this->get_border($styles);
			}

			// background
			$css .= semplice_get_bg_css($styles);
			
			// height
			if(!empty($styles['height'])) {
				$css .= 'height: ' . $styles['height'] . ';';
			}

			// opacity
			if(!empty($styles['opacity'])) {
				$css .= 'opacity: ' . $styles['opacity'] . ';';
			}

			// z-index
			if(!empty($styles['z-index'])) {
				$css .= 'z-index: ' . $styles['z-index'] . ';';
			}

			// order
			if(!empty($styles['order'])) {
				$css .= 'order: ' . $styles['order'] . ';';
			}

			// element css close
			$css .= '}';

			// apply to is content
			if($mode == 'content') {
				$css .= '#content-holder #' . $id . ' .is-content {';
					// box sahdow
					if(!empty($styles['box-shadow']) && $module != 'paragraph') {
						$css .= 'box-shadow: ' . $styles['box-shadow'] . ';';
					} else if(!empty($styles['text-shadow']) && $module == 'paragraph') {
						// only show shadow if values are set
						if(strpos($styles['text-shadow'], '0rem 0rem 0rem') === false) {
							$css .= 'text-shadow: ' . $styles['text-shadow'] . ';';
						}
					}
					if($module != 'button') {
						$css .= $this->get_border($styles);
					}

				$css .= '}';
			}

			return $css;
		}

		// -----------------------------------------
		// get border
		// -----------------------------------------

		public function get_border($styles) {

			$css = '';

			if(!empty($styles['border-width']) && $styles['border-width'] !== '0rem') {
				$css .= 'border-width: ' . $styles['border-width'] . ';';
			}

			// border style
			if(!empty($styles['border-style'])) {
				// border style
				$css .= 'border-style: ' . $styles['border-style'] . ';';
			}

			// border color
			if(!empty($styles['border-color'])) {
				$css .= 'border-color: ' . $styles['border-color'] . ';';
			}

			return $css;
		}

		// -----------------------------------------
		// get motion output
		// -----------------------------------------

		public function get_motion_output($atts, $id, $mode) {

			// atts
			$atts = $atts[$id];

			// check if id is cover and change it
			if($id == 'cover') {
				$id = '#cover-' . $this->post_id;
			} else {
				$id = '#' . $id;
			}

			// output
			$output = array(
				'css' 	=> '',
				'js' 	=> '',
				'event'	=> '',
			);

			if(!empty($atts['motions']['active'])) {

				// get event
				$output['event'] = 'on_load';
				if(isset($atts['motions']['event'])) {
					$output['event'] = $atts['motions']['event'];
				}
				// get css
				$output['css'] .= $this->get_motion_css($mode, $atts['motions']['start'], $atts['motions']['active'], $id);
				// add to output
				$output['js'] .= $this->generate_js($output['event'], $mode, $atts['motions'], $atts['styles']['xl'], $id);
			} else {
				$output['event'] = false;
			}

			// return
			return $output;
		}

		// -----------------------------------------
		// motion css
		// -----------------------------------------

		public function get_motion_css($mode, $styles, $active_styles, $id) {
			// element css open
			if($mode == 'container') {
				$css = '#content-holder ' . $id . ' .container {';
			} else {
				$css = '#content-holder ' . $id . ' {';
			}

			// transform
			$transform = '';
			$transformAtts = array('scale', 'translateX', 'translateY', 'rotate');

			// get styles
			foreach ($styles as $attribute => $value) {
				if(in_array($attribute, $active_styles) || $attribute == 'translateX' && in_array('move', $active_styles) || $attribute == 'translateY' && in_array('move', $active_styles)) {
					if(in_array($attribute, $transformAtts)) {
						$transform .= ' ' . $attribute . '(' . $value . ')';
					} else {
						$css .= $attribute . ': ' . $value . ';';
					}
				}
			}

			// add transform to css
			$css .= 'transform:' . $transform .  ';';

			// element css close
			$css .= '}';

			return $css;
		}

		// -----------------------------------------
		// motion js
		// -----------------------------------------

		public function generate_js($event, $mode, $atts, $styles, $content_id) {

			// vars
			$effects = '';

			// values
			$values = array(
				'content_id'			=> $content_id,
				'duration' 				=> 800,
				'delay'	   				=> 0,
				'easing'  				=> 'Power0.easeNone',
				'trigger_hook'			=> .5,
				'trigger_hook_custom'	=> .5,
				'push_followers'		=> 'pushFollowers: false',
				'onscroll_movement'		=> '',
				'onscroll_duration'		=> '50%',
				'show_indicators'		=> '',
				'atts'					=> $atts,
				'styles'				=> $styles,
			);

			// list of attributes
			$atts_list = array(
				'opacity' 			=> 'opacity',
				'translateX' 		=> 'x',
				'translateY'		=> 'y',
				'rotate'			=> 'rotation',
				'scale'				=> 'scale',
				'background-color'	=> 'backgroundColor',
			);

			// duration
			if(isset($atts['duration'])) {
				$values['duration'] = $atts['duration'];
			}

			// delay
			if(isset($atts['delay'])) {
				$values['delay'] = $atts['delay'];
			}

			// easing
			if(isset($atts['easing'])) {
				$values['easing'] = $atts['easing'];
			}

			// check event
			if ($event == 'on_load') {
				// return js
				return '
					if($("' . $values['content_id'] . '").isOnScreen(0.01, 0.01)) {
						' . $this->get_tween($values, $event, 'end', $atts_list, false) . '
					}
				';
			} else if($event == 'on_scroll') {
				// trigger hook
				if(isset($atts['trigger_hook'])) {
					if($atts['trigger_hook'] == 'custom') {
						// isset trigger hook custom?
						if(!isset($atts['trigger_hook_custom'])) {
							$atts['trigger_hook_custom'] = $values['trigger_hook_custom'];
						}
						$values['trigger_hook'] = '.' . str_replace('.', '', $atts['trigger_hook_custom'] / 10);
					} else {
						$values['trigger_hook'] = $atts['trigger_hook'];
					}
					
				}

				// on scroll duration
				if(isset($atts['onscroll_duration'])) {
					$values['onscroll_duration'] = $atts['onscroll_duration'] . '%';
				}

				// pin
				if(isset($atts['onscroll_movement']) && $atts['onscroll_movement'] == 'sticky') {
					// check if push followers is enabled
					if(isset($atts['push_followers']) && $atts['push_followers'] == 'enabled') {
						$values['push_followers'] = 'pushFollowers: true';
					}
					$values['onscroll_movement'] = '.setPin("' . $values['content_id'] . '", { ' . $values['push_followers'] . ' })';
				}

				// show indicators
				if(isset($atts['show_indicators']) && $atts['show_indicators'] == 'enabled') {
					$values['show_indicators'] = '.addIndicators({name: "for ' . $values['content_id'] . '"})';
				}
			
				return '// create a scene
					var scene = new ScrollMagic.Scene({
								triggerElement: "' . $values['content_id'] . '",
								triggerHook: "' . $values['trigger_hook'] . '",
								duration: "' . $values['onscroll_duration'] . '",
							})
							.setTween("' . $values['content_id'] . '", { ' . rtrim($this->get_tween($values, $event, 'end', $atts_list, true), ',') . ' })
							' . $values['onscroll_movement'] . '
							' . $values['show_indicators'] . '
							.addTo(window.sempliceAnimationsController);
				';
			} else if ($event == 'on_hover') {
				// return js
				return '
					$(document).on("mouseover", "' . $values['content_id'] . '", function() {
						' . $this->get_tween($values, $event, 'end', $atts_list, false) . '
					});
					$(document).on("mouseout", "' . $values['content_id'] . '", function() {
						' . $this->get_tween($values, $event, 'start', $atts_list, false) . '
					});
				';
			} else if ($event == 'on_click') {
				// return js
				return '
					$("' . $values['content_id'] . '").css("cursor", "pointer");
					$(document).on("click", "' . $values['content_id'] . '", function() {
						' . $this->get_tween($values, $event, 'end', $atts_list, false) . '
					});
				';
			}
		}

		// -----------------------------------------
		// get tween
		// -----------------------------------------

		public function get_tween($values, $event, $mode, $atts_list, $is_on_scroll) {

			// vars
			$output = '';
			// loop throught atts list and it to animation
			foreach ($atts_list as $index => $attribute) {
				if(isset($values['atts'][$mode][$index]) && in_array($index, $values['atts']['active']) || $index == 'translateX' && in_array('move', $values['atts']['active']) || $index == 'translateY' && in_array('move', $values['atts']['active'])) {
					// remove rem on translate to avoid problems with transform matrix
					if($event == 'on_hover' && $mode == 'start' && strpos($index, 'translate') !== false) {
						$output .= $attribute . ': "' . intval(str_replace('rem', '', $values['atts'][$mode][$index]) * 18) . '",';
					} else {
						$output .= $attribute . ': "' . $values['atts'][$mode][$index] . '",';
					}
				}
			}

			// is background color in end? set the default one for start. if no default make it transparent
			if($mode == 'start' && isset($values['atts']['end']['background-color'])) {
				if(isset($values['styles']['background-color'])) {
					$output .= 'backgroundColor: "' . $values['styles']['background-color'] . '",';
				} else {
					$output .= 'backgroundColor: "transparent",';
				}
			}

			// add delay
			if(!$is_on_scroll) {
				// animation header and footer
				$tween_start = 'TweenLite.to("' . $values['content_id'] . '", ' . $values['duration'] . ' / 1000, {';
				$tween_end = '
						ease: "' . $values['easing'] . '",
						delay: "' . $values['delay'] / 1000 . '",
					});
				';
				$output = $tween_start . $output . $tween_end;
			}

			// output
			return $output;
		}
	}

	// instance
	$this->module_api = new module_api;

}

?>