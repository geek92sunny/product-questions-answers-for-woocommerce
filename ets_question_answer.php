<?php
/**
 * Plugin Name: Product Questions & Answers for WooCommerce
 * Plugin URI:  https://www.expresstechsoftwares.com
 * Description: <code><strong>ETS WooCommerce Questions And Answers</strong></code> offers a rapid way to manage dynamic discussions about your Woo products. <a href="https://www.expresstechsoftwares.com">Get more plugins and custom development for WordPress on <strong>ETS</strong></a>.
 * Version: 1.1.1
 * Author: ExpressTech Software Solutions Pvt. Ltd.
 * Author URI: https://www.expresstechsoftwares.com
 * Requires at least: 5.6
 * WC tested up to: 5.7.1
 * Requires PHP: 7.0
 * Text Domain: ets_q_n_a
 * Domain Path: /languages
 */   
 
if ( ! defined( 'ABSPATH' ) ) exit; 

define('ETS_WOO_QA_PATH', plugin_dir_url( __FILE__ ));

class ETS_WOO_PRODUCT_QUESTION_ANSWER {
	public function __construct() { 
		add_action( 'init', array($this, 'qa_load_local'));	
		require ( 'includes/ets_admin_qa_function.php' );
		require( 'includes/ets_user_qa_function.php' );	
	}  

	public function qa_load_local() {
		$localeDir = dirname(plugin_dir_path( __FILE__ ) ) . '/question-answer-plugin-by-ets/languages/ets_q_n_a-'.get_locale() .'.mo';
        $res = load_textdomain( 'ets_q_n_a', $localeDir );   
    }
} 
$etsWooProductQuestionAnswer = new ETS_WOO_PRODUCT_QUESTION_ANSWER();