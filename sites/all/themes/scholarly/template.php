<?php

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
function scholarly_breadcrumb($variables){

	$breadcrumb = $variables['breadcrumb'];
	
	if (!empty($breadcrumb)) {
	$breadcrumb[] = drupal_get_title();
	return '<div>' . implode(' <span class="breadcrumb-separator"></span>', $breadcrumb) . '</div>';
	}
	
}

/**
 * Add classes to block.
 */
function scholarly_preprocess_block(&$variables) {

	$variables['title_attributes_array']['class'][] = 'title';
	$variables['classes_array'][]='clearfix';
	
}

/**
 * Override or insert variables into the html template.
 */
function scholarly_preprocess_html(&$variables) {

	if (empty($variables['page']['banner'])) {
		$variables['classes_array'][] = 'no-banner';
	}
	
	$color_scheme = theme_get_setting('color_scheme');
	
	if ($color_scheme != 'default') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/style-' .$color_scheme. '.css', array('group' => CSS_THEME, 'type' => 'file'));
	}

	if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') {
		$protocol = "/https";
	} else {
		$protocol = "/http";
	}

	if (theme_get_setting('sitename_font_family')=='sff-1' &&
		theme_get_setting('slogan_font_family')=='slff-1' ||
		theme_get_setting('headings_font_family')=='hff-1' ||
		theme_get_setting('paragraph_font_family')=='pff-1') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/merriweather-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-2' ||
		theme_get_setting('slogan_font_family')=='slff-2' ||
		theme_get_setting('headings_font_family')=='hff-2' ||
		theme_get_setting('paragraph_font_family')=='pff-2') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/sourcesanspro-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-3' ||
		theme_get_setting('slogan_font_family')=='slff-3' ||
		theme_get_setting('headings_font_family')=='hff-3' ||
		theme_get_setting('paragraph_font_family')=='pff-3') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/ubuntu-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-4' ||
		theme_get_setting('slogan_font_family')=='slff-4' ||
		theme_get_setting('headings_font_family')=='hff-4' ||
		theme_get_setting('paragraph_font_family')=='pff-4') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/ptsans-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-5' ||
		theme_get_setting('slogan_font_family')=='slff-5' ||
		theme_get_setting('headings_font_family')=='hff-5' ||
		theme_get_setting('paragraph_font_family')=='pff-5') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/roboto-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-6' ||
		theme_get_setting('slogan_font_family')=='slff-6' ||
		theme_get_setting('headings_font_family')=='hff-6' ||
		theme_get_setting('paragraph_font_family')=='pff-6') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/opensans-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-7' ||
		theme_get_setting('slogan_font_family')=='slff-7' ||
		theme_get_setting('headings_font_family')=='hff-7' ||
		theme_get_setting('paragraph_font_family')=='pff-7') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/lato-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-8' ||
		theme_get_setting('slogan_font_family')=='slff-8' ||
		theme_get_setting('headings_font_family')=='hff-8' ||
		theme_get_setting('paragraph_font_family')=='pff-8') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/roboto-condensed-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-9' ||
		theme_get_setting('slogan_font_family')=='slff-9' ||
		theme_get_setting('headings_font_family')=='hff-9' ||
		theme_get_setting('paragraph_font_family')=='pff-9') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/exo-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-10' ||
		theme_get_setting('slogan_font_family')=='slff-10' ||
		theme_get_setting('headings_font_family')=='hff-10' ||
		theme_get_setting('paragraph_font_family')=='pff-10') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/roboto-slab-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-11' ||
		theme_get_setting('slogan_font_family')=='slff-11' ||
		theme_get_setting('headings_font_family')=='hff-11' ||
		theme_get_setting('paragraph_font_family')=='pff-11') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/raleway-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-12' ||
		theme_get_setting('slogan_font_family')=='slff-12' ||
		theme_get_setting('headings_font_family')=='hff-12' ||
		theme_get_setting('paragraph_font_family')=='pff-12') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/josefin-sans-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-14' ||
		theme_get_setting('slogan_font_family')=='slff-14' ||
		theme_get_setting('headings_font_family')=='hff-14' ||
		theme_get_setting('paragraph_font_family')=='pff-14') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/playfair-display-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-15' ||
		theme_get_setting('slogan_font_family')=='slff-15' ||
		theme_get_setting('headings_font_family')=='hff-15' ||
		theme_get_setting('paragraph_font_family')=='pff-15') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/philosopher-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-16' ||
		theme_get_setting('slogan_font_family')=='slff-16' ||
		theme_get_setting('headings_font_family')=='hff-16') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/cinzel-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-17' ||
		theme_get_setting('slogan_font_family')=='slff-17' ||
		theme_get_setting('headings_font_family')=='hff-17' ||
		theme_get_setting('paragraph_font_family')=='pff-16') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/oswald-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-18' ||
		theme_get_setting('slogan_font_family')=='slff-18' ||
		theme_get_setting('headings_font_family')=='hff-18' ||
		theme_get_setting('paragraph_font_family')=='pff-17') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/playfairdisplaysc-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
    
	if (theme_get_setting('sitename_font_family')=='sff-19' ||
		theme_get_setting('slogan_font_family')=='slff-19' ||
		theme_get_setting('headings_font_family')=='hff-19' ||
		theme_get_setting('paragraph_font_family')=='pff-18') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/cabin-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-20' ||
		theme_get_setting('slogan_font_family')=='slff-20' ||
		theme_get_setting('headings_font_family')=='hff-20' ||
		theme_get_setting('paragraph_font_family')=='pff-19') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/notosans-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-22' ||
		theme_get_setting('slogan_font_family')=='slff-22' ||
		theme_get_setting('headings_font_family')=='hff-22' ||
		theme_get_setting('paragraph_font_family')=='pff-21') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/droidserif-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-23' ||
		theme_get_setting('slogan_font_family')=='slff-23' ||
		theme_get_setting('headings_font_family')=='hff-23' ||
		theme_get_setting('paragraph_font_family')=='pff-22') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/ptserif-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-24' ||
		theme_get_setting('slogan_font_family')=='slff-24' ||
		theme_get_setting('headings_font_family')=='hff-24' ||
		theme_get_setting('paragraph_font_family')=='pff-23') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/vollkorn-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-25' ||
		theme_get_setting('slogan_font_family')=='slff-25' ||
		theme_get_setting('headings_font_family')=='hff-25' ||
		theme_get_setting('paragraph_font_family')=='pff-24') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/alegreya-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}	

	if (theme_get_setting('sitename_font_family')=='sff-26' ||
		theme_get_setting('slogan_font_family')=='slff-26' ||
		theme_get_setting('headings_font_family')=='hff-26' ||
		theme_get_setting('paragraph_font_family')=='pff-25') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/notoserif-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-27' ||
		theme_get_setting('slogan_font_family')=='slff-27' ||
		theme_get_setting('headings_font_family')=='hff-27' ||
		theme_get_setting('paragraph_font_family')=='pff-26') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/crimsontext-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-28' ||
		theme_get_setting('slogan_font_family')=='slff-28' ||
		theme_get_setting('headings_font_family')=='hff-28' ||
		theme_get_setting('paragraph_font_family')=='pff-27') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/gentiumbookbasic-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-29' ||
		theme_get_setting('slogan_font_family')=='slff-29' ||
		theme_get_setting('headings_font_family')=='hff-29' ||
		theme_get_setting('paragraph_font_family')=='pff-28') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/volkhov-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-31' ||
		theme_get_setting('slogan_font_family')=='slff-31' ||
		theme_get_setting('headings_font_family')=='hff-31') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts'.$protocol. '/alegreyasc-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-32' ||
		theme_get_setting('slogan_font_family')=='slff-32' ||
		theme_get_setting('headings_font_family')=='hff-32') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts' .$protocol. '/montserrat-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-33' ||
		theme_get_setting('slogan_font_family')=='slff-33' ||
		theme_get_setting('headings_font_family')=='hff-33' ||
		theme_get_setting('paragraph_font_family')=='pff-30') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts' .$protocol. '/firasans-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-34' ||
		theme_get_setting('slogan_font_family')=='slff-34' ||
		theme_get_setting('headings_font_family')=='hff-34' ||
		theme_get_setting('paragraph_font_family')=='pff-31') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts' .$protocol. '/lora-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-35' ||
		theme_get_setting('slogan_font_family')=='slff-35' ||
		theme_get_setting('headings_font_family')=='hff-35' ||
		theme_get_setting('paragraph_font_family')=='pff-32') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts' .$protocol. '/quattrocentosans-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	if (theme_get_setting('sitename_font_family')=='sff-36' ||
		theme_get_setting('slogan_font_family')=='slff-36' ||
		theme_get_setting('headings_font_family')=='hff-36') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts' .$protocol. '/juliussansone-font.css', array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => FALSE));
	}

	drupal_add_css(path_to_theme() . '/fonts' .$protocol. '/sourcecodepro-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	
	drupal_add_css(path_to_theme() . '/fonts' .$protocol. '/ptserif-blockquote-font.css', array('group' => CSS_THEME, 'type' => 'file'));

	if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') {
		drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external')); 
	} else {
		drupal_add_css('http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external')); 
	}

	drupal_add_css(path_to_theme() . '/ie9.css', array('group' => CSS_THEME, 'browsers' => array('IE' => '(IE 9)&(!IEMobile)', '!IE' => FALSE), 'preprocess' => FALSE));
    
	/**
	 * Add local.css file for CSS overrides.
	 */
	drupal_add_css(drupal_get_path('theme', 'scholarly') . '/local.css', array('group' => CSS_THEME, 'type' => 'file'));

	/**
	* Add Javascript for enable/disable Bootstrap 3 Javascript.
	*/
	if (theme_get_setting('bootstrap_js_include', 'scholarly')) {
	drupal_add_js(drupal_get_path('theme', 'scholarly') . '/bootstrap/js/bootstrap.min.js');
	}
	//EOF:Javascript
	
	/**
	 * Add Javascript for enable/disable scrollTop action.
	 */
	if (theme_get_setting('scrolltop_display')) {
	
		drupal_add_js('jQuery(document).ready(function($) { 
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$("#toTop").addClass("show");	
			} else {
				$("#toTop").removeClass("show");
			}
		});
		
		$("#toTop").click(function() {
			$("body,html").animate({scrollTop:0},800);
		});	
		
		});',
		array('type' => 'inline', 'scope' => 'header'));
	
	}
	//EOF:Javascript
	
	/**
	 * Add Javascript for Google Map
	 */
	if (theme_get_setting('google_map_js', 'scholarly')) {

		drupal_add_js('jQuery(document).ready(function($) { 

	    var map;
	    var myLatlng;
	    var myZoom;
	    var marker;
		
		});',
		array('type' => 'inline', 'scope' => 'header')
		);

		$google_maps_key = theme_get_setting('google_map_key');
		if (!empty($google_maps_key)) {
			$google_maps_key_string = '&key='.$google_maps_key;
		} else {
			$google_maps_key_string = '';
		}

		drupal_add_js('https://maps.googleapis.com/maps/api/js?v=3'.$google_maps_key_string,array('type' => 'external', 'scope' => 'header', 'group' => 'JS_THEME'));

		$google_map_latitude = theme_get_setting('google_map_latitude','scholarly');
        drupal_add_js(array('scholarly' => array('google_map_latitude' => $google_map_latitude)), 'setting');
		$google_map_longitude = theme_get_setting('google_map_longitude','scholarly');
        drupal_add_js(array('scholarly' => array('google_map_longitude' => $google_map_longitude)), 'setting');
		$google_map_zoom = (int) theme_get_setting('google_map_zoom','scholarly');
		$google_map_canvas = theme_get_setting('google_map_canvas','scholarly');
        drupal_add_js(array('scholarly' => array('google_map_canvas' => $google_map_canvas)), 'setting');
		
		drupal_add_js('jQuery(document).ready(function($) { 

		if ($("#'.$google_map_canvas.'").length>0) {
		
			myLatlng = new google.maps.LatLng(Drupal.settings.scholarly[\'google_map_latitude\'], Drupal.settings.scholarly[\'google_map_longitude\']);
			myZoom = '.$google_map_zoom.';
			
			function initialize() {
			
				var mapOptions = {
				zoom: myZoom,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: myLatlng,
				scrollwheel: false
				};
				
				map = new google.maps.Map(document.getElementById(Drupal.settings.scholarly[\'google_map_canvas\']),mapOptions);
				
				marker = new google.maps.Marker({
				map:map,
				draggable:true,
				position: myLatlng
				});
				
				google.maps.event.addDomListener(window, "resize", function() {
				map.setCenter(myLatlng);
				});
		
			}
		
			google.maps.event.addDomListener(window, "load", initialize);
			
		}
		
		});',
		array('type' => 'inline', 'scope' => 'header')
		);
		
	}

	$fixed_header = theme_get_setting('fixed_header');
	if ($fixed_header) {

		/**
		 * Add Javascript for the fixed header
		 */
		drupal_add_js('jQuery(document).ready(function($) { 

			var	headerTopHeight = $("#header-top").outerHeight(),
			headerHeight = $("#header").outerHeight();
			
			$(window).scroll(function() {
			if(($(this).scrollTop() > headerTopHeight+headerHeight) && ($(window).width() > 767)) {
				$("body").addClass("onscroll");
				if (($("#site-name").length > 0) && ($("#logo").length > 0)) {
					$(".onscroll #logo").addClass("hide");
				}

				if ($("#banner").length > 0) { 
 					$("#banner").css("marginTop", (headerHeight)+"px");
				} else if ($("#page-intro").length > 0) {
					$("#page-intro").css("marginTop", (headerHeight)+"px");
				} else {
					$("#page").css("marginTop", (headerHeight)+"px");
				}
			} else {
				$("body").removeClass("onscroll");
				$("#logo").removeClass("hide");
				$("#page,#banner,#page-intro").css("marginTop", (0)+"px");
			}
			});
		});',
		array('type' => 'inline', 'scope' => 'header'));
		//EOF:Javascript
		
	}

	$responsive_meanmenu = theme_get_setting('responsive_multilevelmenu_state');

	if ($responsive_meanmenu) {

	drupal_add_css(drupal_get_path('theme', 'scholarly') . '/js/meanmenu/meanmenu.css');
	drupal_add_js(drupal_get_path('theme', 'scholarly') .'/js/meanmenu/jquery.meanmenu.fork.js', array('preprocess' => false));
	
		/**
		 * Add Javascript for the mobile mean menu
		 */
		drupal_add_js('jQuery(document).ready(function($) {

			$("#main-navigation .sf-menu, #main-navigation .content>ul.menu, #main-navigation ul.main-menu").wrap("<div class=\'meanmenu-wrapper\'></div>");
			$("#main-navigation .meanmenu-wrapper").meanmenu({
				meanScreenWidth: "767",
				meanRemoveAttrs: true,
				meanMenuContainer: "#header-inside",
				meanMenuClose: ""
			});

			$("#header-top .sf-menu, #header-top .content>ul.menu").wrap("<div class=\'header-top-meanmenu-wrapper\'></div>");
			$("#header-top .header-top-meanmenu-wrapper").meanmenu({
				meanScreenWidth: "767",
				meanRemoveAttrs: true,
				meanMenuContainer: "#header-top-inside",
				meanMenuClose: ""
			});

		});',
		array('type' => 'inline', 'scope' => 'header'));
		//EOF:Javascript	

	} 

    /**
     * Add Javascript for the auto height of the accordion items
     */
    drupal_add_js('
        (function($) {
		Drupal.FieldGroup = Drupal.FieldGroup || {};
		Drupal.FieldGroup.Effects = Drupal.FieldGroup.Effects || {};

            Drupal.FieldGroup.Effects.processAccordion = {
              execute: function (context, settings, type) {
                $("div.field-group-accordion-wrapper", context).once("fieldgroup-effects", function () {
                  var wrapper = $(this);

                  wrapper.accordion({
                    heightStyle: "content",
                    autoHeight: true,
                    active: ".field-group-accordion-active",
                    collapsible: true,
                    changestart: function(event, ui) {
                      if ($(this).hasClass("effect-none")) {
                        ui.options.animated = false;
                      }
                      else {
                        ui.options.animated = "slide";
                      }
                    }
                  });
                });
              }
            }
	
    	})(jQuery);',
    array('type' => 'inline', 'scope' => 'header'));
    //EOF:Javascript
    
}

/**
 * Override or insert variables into the html template.
 */
function scholarly_process_html(&$vars) {

	$classes = explode(' ', $vars['classes']);
	$classes[] = theme_get_setting('sitename_font_family');
	$classes[] = theme_get_setting('slogan_font_family');
	$classes[] = theme_get_setting('headings_font_family');
	$classes[] = theme_get_setting('paragraph_font_family');
	$classes[] = theme_get_setting('form_style');	
	$vars['classes'] = trim(implode(' ', $classes));

}

/**
 * Preprocess variables for page template.
 */
function scholarly_preprocess_page(&$variables) {
	
	$three_columns_grid_layout = theme_get_setting('three_columns_grid_layout', 'scholarly');
	$sidebar_first = $variables['page']['sidebar_first'];
	$sidebar_second = $variables['page']['sidebar_second'];
	$header_top_left = $variables['page']['header_top_left'];
	$header_top_right = $variables['page']['header_top_right'];
	$footer_top_left = $variables['page']['footer_top_left'];
	$footer_top_right = $variables['page']['footer_top_right'];
	$footer_first = $variables['page']['footer_first'];
	$footer_second = $variables['page']['footer_second'];
	$footer_third = $variables['page']['footer_third'];
	$footer_fourth = $variables['page']['footer_fourth'];
	$breadcrumb = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb()));

	/**
	 * Insert variables into the page template.
	 */
	if (isset($variables['node']) && $variables['node']->type != 'page' ) { 
		if($sidebar_first && $sidebar_second) { 
			if ($three_columns_grid_layout == 'grid_3_6_3') {
				$variables['main_grid_class'] = 'col-md-6';
				$variables['sidebar_first_grid_class'] = 'col-md-3';
				$variables['sidebar_second_grid_class'] = 'col-md-3';
			} elseif ($three_columns_grid_layout == 'grid_2_6_4') {
				$variables['main_grid_class'] = 'col-md-6';
				$variables['sidebar_first_grid_class'] = 'col-md-2';
				$variables['sidebar_second_grid_class'] = 'col-md-4';
			} elseif ($three_columns_grid_layout == 'grid_4_6_2') {
				$variables['main_grid_class'] = 'col-md-6';
				$variables['sidebar_first_grid_class'] = 'col-md-4';
				$variables['sidebar_second_grid_class'] = 'col-md-2';
			}
		} elseif ($sidebar_first && !$sidebar_second) {
			$variables['main_grid_class'] = 'col-md-8';
			$variables['sidebar_first_grid_class'] = 'col-md-4 fix-sidebar-first';
		} elseif (!$sidebar_first && $sidebar_second) {
			$variables['main_grid_class'] = 'col-md-8';
			$variables['sidebar_second_grid_class'] = 'col-md-4 fix-sidebar-second';		
		} else {
			$variables['main_grid_class'] = 'col-md-8 col-md-offset-2';
			$variables['sidebar_first_grid_class'] = '';	
			$variables['sidebar_second_grid_class'] = '';			
		}
	} else {
		if($sidebar_first && $sidebar_second) { 
			if ($three_columns_grid_layout == 'grid_3_6_3') {
				$variables['main_grid_class'] = 'col-md-6';
				$variables['sidebar_first_grid_class'] = 'col-md-3';
				$variables['sidebar_second_grid_class'] = 'col-md-3';
			} elseif ($three_columns_grid_layout == 'grid_2_6_4') {
				$variables['main_grid_class'] = 'col-md-6';
				$variables['sidebar_first_grid_class'] = 'col-md-2';
				$variables['sidebar_second_grid_class'] = 'col-md-4';
			} elseif ($three_columns_grid_layout == 'grid_4_6_2') {
				$variables['main_grid_class'] = 'col-md-6';
				$variables['sidebar_first_grid_class'] = 'col-md-4';
				$variables['sidebar_second_grid_class'] = 'col-md-2';
			}
		} elseif ($sidebar_first && !$sidebar_second) {
			$variables['main_grid_class'] = 'col-md-8';
			$variables['sidebar_first_grid_class'] = 'col-md-4 fix-sidebar-first';
		} elseif (!$sidebar_first && $sidebar_second) {
			$variables['main_grid_class'] = 'col-md-8';
			$variables['sidebar_second_grid_class'] = 'col-md-4 fix-sidebar-second';		
		} else {
			$variables['main_grid_class'] = 'col-md-12';
			$variables['sidebar_first_grid_class'] = '';	
			$variables['sidebar_second_grid_class'] = '';			
		}
	}	

	if($header_top_left && $header_top_right) { 
		$variables['header_top_left_grid_class'] = 'col-md-8';
		$variables['header_top_right_grid_class'] = 'col-md-4';
	} elseif ($header_top_right || $header_top_left) {
		$variables['header_top_left_grid_class'] = 'col-md-12';
		$variables['header_top_right_grid_class'] = 'col-md-12';		
	}

	if($footer_top_left && $footer_top_right) { 
		$variables['footer_top_left_grid_class'] = 'col-sm-6';
		$variables['footer_top_right_grid_class'] = 'col-sm-6';
		$variables['footer_top_regions'] = 'two-regions';
	} elseif ($footer_top_right || $footer_top_left) {
		$variables['footer_top_regions'] = 'one-region';		
		$variables['footer_top_left_grid_class'] = 'col-md-12';
		$variables['footer_top_right_grid_class'] = 'col-ms-12';		
	}

	if ($footer_first && $footer_second && $footer_third && $footer_fourth) { 
		$variables['footer_grid_class'] = 'col-sm-3';
	} elseif ((!$footer_first && $footer_second && $footer_third && $footer_fourth) || ($footer_first && !$footer_second && $footer_third && $footer_fourth) 
	|| ($footer_first && $footer_second && !$footer_third && $footer_fourth) || ($footer_first && $footer_second && $footer_third && !$footer_fourth)) { 
		$variables['footer_grid_class'] = 'col-sm-4';
	} elseif ((!$footer_first && !$footer_second && $footer_third && $footer_fourth) || (!$footer_first && $footer_second && !$footer_third && $footer_fourth) 
	|| (!$footer_first && $footer_second && $footer_third && !$footer_fourth) || ($footer_first && !$footer_second && !$footer_third && $footer_fourth)
	|| ($footer_first && !$footer_second && $footer_third && !$footer_fourth) || ($footer_first && $footer_second && !$footer_third && !$footer_fourth)) {
		$variables['footer_grid_class'] = 'col-sm-6';		
	} else { 
		$variables['footer_grid_class'] = 'col-sm-12';
	}

	/**
	 * Generate page intro markup
	 */
	if (arg(0) == "node" && is_numeric(arg(1))) {
	    
	    $nid = arg(1);
	    $node = node_load($nid);
	    $lang= "und";
	    $banner_class = "";

	    if (empty($node->field_teaser_image) || (!isset($node->field_internal_banner) || $node->field_internal_banner[$lang][0]["value"] == "0")) { 
	    $banner_class = "no-internal-banner-image";
	    } else {
	    $banner_class = "with-internal-banner-image ";
	    }

	    if ( (!empty($breadcrumb) && theme_get_setting("breadcrumb_display")) || (!empty($node->field_teaser_image) && (isset($node->field_internal_banner) && $node->field_internal_banner[$lang][0]["value"] == "1"))) {

	        if (!empty($node->field_teaser_image) && (isset($node->field_internal_banner) && $node->field_internal_banner[$lang][0]["value"] == "1")) {
	            $image = image_style_url("slideshow", $node->field_teaser_image[$lang][0]["uri"]);
	            $image_alt = $node->field_teaser_image[$lang][0]["alt"];
	            $image_title = $node->field_teaser_image[$lang][0]["title"]; 
	            $banner_image_markup = "<div class=\"container\"><div class=\"internal-banner-image\"><img src=\"".$image."\" alt=\"".$image_alt."\" title=\"".$image_title."\"/></div></div>";
	        } else {
	            $banner_image_markup = "";
	        }

	        if (!empty($breadcrumb) && theme_get_setting("breadcrumb_display")) {
	            $page_intro_inside_markup = "<div id=\"page-intro-inside\" class=\"clearfix internal-banner $banner_class\"><div class=\"container\"><div class=\"row\"><div class=\"col-md-12\">
	            <div id=\"breadcrumb\" class=\"clearfix\"><div id=\"breadcrumb-inside\" class=\"clearfix\">$breadcrumb</div></div></div></div></div></div>";
	        } else { 
	            $page_intro_inside_markup = "";
	        }

	        $variables['page_intro_markup'] = "<div id=\"page-intro\" class=\"clearfix\">$banner_image_markup $page_intro_inside_markup</div>";
	    
	    } else {
	    	$variables['page_intro_markup'] = "";
	    }

	} else {

	    if (!empty($breadcrumb) && theme_get_setting("breadcrumb_display")) {
	        $variables['page_intro_markup'] = "<div id=\"page-intro\" class=\"clearfix\"><div id=\"page-intro-inside\" class=\"clearfix internal-banner no-internal-banner-image\"><div class=\"container\"><div class=\"row\">
	        <div class=\"col-md-12\"><div id=\"breadcrumb\" class=\"clearfix\"><div id=\"breadcrumb-inside\" class=\"clearfix\">$breadcrumb</div></div></div></div></div></div></div>";
	    } else {
	    	$variables['page_intro_markup'] = "";
	    }
	    
	}

}

/**
* Implements hook_preprocess_maintenance_page().
*/
function scholarly_preprocess_maintenance_page(&$variables) {

	$color_scheme = theme_get_setting('color_scheme');
	if ($color_scheme != 'default') {
		drupal_add_css(drupal_get_path('theme', 'scholarly') . '/style-' .$color_scheme. '.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') {
		$protocol = '/https';
	} else {
		$protocol = '/http';
	}
	drupal_add_css(drupal_get_path('theme', 'scholarly') . '/fonts' .$protocol. '/lato-font.css', array('group' => CSS_THEME, 'type' => 'file'));

}

function scholarly_page_alter($page) {

	$mobileoptimized = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'MobileOptimized',
		'content' =>  'width'
		)
	);
	$handheldfriendly = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'HandheldFriendly',
		'content' =>  'true'
		)
	);
	$viewport = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'viewport',
		'content' =>  'width=device-width, initial-scale=1'
		)
	);
	drupal_add_html_head($mobileoptimized, 'MobileOptimized');
	drupal_add_html_head($handheldfriendly, 'HandheldFriendly');
	drupal_add_html_head($viewport, 'viewport');
	
}

function scholarly_preprocess_node(&$variables) {

	$node = $variables['node'];

	// node--mt_event.tpl.php file
	if ($node->type == 'mt_event'){
	    if ($node->field_mt_event_latitude && $node->field_mt_event_longitude) {
			/**
			 * Add Javascript for Google Map
			 */
			if (theme_get_setting('google_map_event_js', 'scholarly')) {

				drupal_add_js('jQuery(document).ready(function($) { 

			    var map;
			    var myLatlng;
			    var myZoom;
			    var marker;
				
				});',
				array('type' => 'inline', 'scope' => 'header')
				);

				$google_map_event_latitude = $node->field_mt_event_latitude['und'][0]['value'];
		        drupal_add_js(array('scholarly' => array('google_map_event_latitude' => $google_map_event_latitude)), 'setting');
				$google_map_event_longitude = $node->field_mt_event_longitude['und'][0]['value'];
		        drupal_add_js(array('scholarly' => array('google_map_event_longitude' => $google_map_event_longitude)), 'setting');
				$google_map_event_zoom = (int) theme_get_setting('google_map_event_zoom','scholarly');
				$google_map_event_canvas = "event-map";
		        drupal_add_js(array('scholarly' => array('google_map_event_canvas' => $google_map_event_canvas)), 'setting');
				
				drupal_add_js('jQuery(document).ready(function($) { 

				if ($("#'.$google_map_event_canvas.'").length>0) {
				
					myLatlng = new google.maps.LatLng(Drupal.settings.scholarly[\'google_map_event_latitude\'], Drupal.settings.scholarly[\'google_map_event_longitude\']);
					myZoom = '.$google_map_event_zoom.';
					
					function initialize() {
					
						var mapOptions = {
						zoom: myZoom,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						center: myLatlng,
						scrollwheel: false
						};
						
						map = new google.maps.Map(document.getElementById(Drupal.settings.scholarly[\'google_map_event_canvas\']),mapOptions);
						
						marker = new google.maps.Marker({
						map:map,
						draggable:true,
						position: myLatlng
						});
						
						google.maps.event.addDomListener(window, "resize", function() {
						map.setCenter(myLatlng);
						});
				
					}
				
					google.maps.event.addDomListener(window, "load", initialize);
					
				}
				
				});',
				array('type' => 'inline', 'scope' => 'header')
				);
				
			}
		}
	}

}

function scholarly_form_alter(&$form, &$form_state, $form_id) {
	
	if ($form_id == 'search_block_form') {
	unset($form['search_block_form']['#title']);
	$form['search_block_form']['#title_display'] = 'invisible';
	$form_default = t('Enter terms then hit Search...');
	$form['search_block_form']['#default_value'] = $form_default;

	$form['actions']['submit']['#attributes']['value'][] = '';

	$form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}" );
	}

	if(substr($form_id, 0, 30) == 'commerce_cart_add_to_cart_form'){
		$form['submit']['#attributes']['value'][] = 'Subscribe to course';
	}

}

?>