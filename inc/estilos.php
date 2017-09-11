<?php

function molino8(){

	// Registrar los estilos
  wp_register_style('fonts_google', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald:400,600,700', array(), '1.0.0');
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.0.0');
	wp_register_style('style', get_template_directory_uri().'/style.css', array('bootstrap'), '1.0');
	wp_register_style('estilo', get_template_directory_uri().'/css/estilo.css', array('bootstrap'), '7.0');
	wp_register_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array('bootstrap'), '4.7.0');
	wp_register_style('animate', get_template_directory_uri().'/css/animate.css', array('bootstrap'), '4.7.0');

	//Llamar a los estilos
	wp_enqueue_style('style');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('estilo');
	wp_enqueue_style('fonts_google' );
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('animate');

	//registrar Js, agregamos al final true para que nuestros Js se cargen en el footer.
	//wp_register_script('analitics', get_template_directory_uri().'/js/analitycs.js', array(), '1.0.0', true );
	wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'),'1.0.0', true);
	wp_register_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'4.0.0', true);
	wp_register_script('prefixfree', get_template_directory_uri().'/js/prefixfree.min.js', array('bootstrapjs'),'3.0.0', true);

	wp_enqueue_script('jquery');
	//wp_enqueue_script('analitics');
	wp_enqueue_script('bootstrapjs');
	wp_enqueue_script('scripts');
	wp_enqueue_script('prefixfree');

}

add_action('wp_enqueue_scripts','molino8');


?>
