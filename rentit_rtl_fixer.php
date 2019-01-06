<?php
/**
 * @package Rentit_RTL_Fixer
 * @version 1.0
 */
/*
Plugin Name: Rentit RTL Fixer
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: Compatible with Bootstrap 3
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_RTL_Fixer
*/
//SOURCE v bootstrap 3:https://github.com/bassjobsen/Bootstrap-3-Typeahead  =>>>>> we use edited version a small edit
//SOURCE v bootstrap 4:https://github.com/bassjobsen/typeahead.js-bootstrap4-css

//
/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_RTL_Fixer_dequeue_scripts', 400 );
add_action( 'wp_footer', 'Rentit_RTL_Fixer_enqueue_scripts', 400 );
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_RTL_Fixer_dequeue_scripts', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_RTL_Fixer_enqueue_scripts', 400 );
/******************************************/
//Updating scripts
/******************************************/
function Rentit_RTL_Fixer_dequeue_scripts() {}
function Rentit_RTL_Fixer_enqueue_scripts() {
	//need to be footer to be sure jquery is loaded of use wp_enqueue_script and with 3th param say load first jquery
	echo '<script>';
	?>
	jQuery( document ).ready( function( $ ) {
		jQuery('.owl-rtl').removeClass('owl-rtl');

		jQuery('.inner').find('.fa.fa-plus-circle').each(function() {
			//alert(jQuery(this).className );

			//jQuery(this).attr('style', 'float:right;padding-top:18px;');
			//jQuery(this).attr('style', 'float:right;');
			//jQuery(this).next().attr('style', 'float:right;');
			//jQuery(this).next().next().attr('style', 'float:left !important;');

		})
	});
	<?php
	echo '</script>';
	/*
	<div class="inner">
                                                      	
                                                        <i class="fa fa-plus-circle" style="float:right;padding-top: 18px;"></i>
                                                        <a href="https://app.ejarehkhodro.com/shop/" style="float:right;">															جستجوی پیشرفته                                                        </a>
                                                        <button type="submit" id="formSearchSubmit" class="btn btn-submit btn-theme pull-right" style="float:left !important">
															جستجو خودرو                                                        </button>
                                                    </div>
													*/

}
/*************************************
*************************************/
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_RTL_Fixer_dequeue_styles', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_RTL_Fixer_enqueue_styles', 400 );
/* add forntend */
/******************************************/
//Updating styles
/******************************************/
add_action( 'wp_enqueue_scripts', 'Rentit_RTL_Fixer_dequeue_styles', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_RTL_Fixer_enqueue_styles', 400 );
function Rentit_RTL_Fixer_dequeue_styles() {

}
function Rentit_RTL_Fixer_enqueue_styles() {

}
/*********************************************************************************
if you want to use this bootstrap-datetimepicker-rtl-ltr-by-var.min.js file (can be used for rtl and ltr)
add_action must be used to pass variable to js can understand which direction you need
	//bootstrap-datetimepicker-rtl-ltr-by-var.min.js
********************************************************************************/
add_action( 'admin_enqueue_scripts', 'RentIt_Date_Changer_pass_vars',9999 );
function RentIt_Date_Changer_pass_vars(){
	$vars = array('rtl'=>1);
	wp_localize_script( 'renita_bootstrap-datetimepicker', 'directon',$vars );

}