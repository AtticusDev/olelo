<?php

$condition = new CPT(array(
	'post_type_name' => 'condition',
	'singular' => __('Condition', 'olelo'),
	'plural' => __('Conditions', 'olelo'),
	'slug' => 'condition'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'category'),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-carrot'
));