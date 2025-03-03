<?php

defined( 'ABSPATH' ) || exit;

return [

	'touch' => [
		'type'  => 'checkbox',
		'title' => __( 'Deactivate touch rule', 'side-menu-lite' ),
		'label' => __( 'Enable', 'side-menu-lite' ),
	],

	'notranslate_off' => [
		'type'  => 'checkbox',
		'title' => __( 'Disable no translate', 'side-menu-lite' ),
		'label' => __( 'Apply', 'side-menu-lite' ),
		'tooltip' => __('By default, the menu items aren’t translated by Google Translate.', 'side-menu-lite'),
	],

];