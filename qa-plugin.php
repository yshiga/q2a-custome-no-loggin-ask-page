<?php

/*
	Plugin Name: Custome No Loggin Ask Page
	Plugin URI:
	Plugin Description: Custom HTML for No logged in users Ask page.
	Plugin Version: 0.1
	Plugin Date: 2015-06-16
	Plugin Author:38qa.net
	Plugin Author URI:
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.7
	Plugin Update Check URI:
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

// language file
qa_register_plugin_phrases('qa-custome-no-loggin-ask-page-lang-*.php', 'no_loggin_ask_page');
// admin
qa_register_plugin_module('module', 'qa-custome-no-loggin-ask-page-admin.php', 'qa_custome_no_loggin_ask_page_admin', 'Custom No Loggin Ask Page Admin');
// layer
qa_register_plugin_layer('qa-custome-no-loggin-ask-page-layer.php', 'Custom No Loggin Ask Page');

/*
	Omit PHP closing tag to help avoid accidental output
*/
