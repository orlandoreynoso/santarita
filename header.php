<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="m-header">
				<div class="col-xs-12 col-sm-8 col-md-6">
					<div class="ls">
						<?php logo(); ?>
					</div>
				</div>
				<div class="col-xs-12  col-sm-4 col-md-6">
					<div class="sm">
						<div class="ubicacion">
							<span class="icon fa fa-map-marker"></span>
							<span id="texto">Mixco, Guatemala</span>
						</div>
						<div class="search"><?php  get_search_form(); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="e-menu">
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<?php // include (TEMPLATEPATH . '/libs/menuviejo.php');  ?>
					<?php get_template_part( 'template/header', 'menu') ?>
			</div>
		</div>
	</div>
</div>
