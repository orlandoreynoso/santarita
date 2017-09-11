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
					<nav class="navbar navbar-default" role="navigation">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
			    		  <a class="navbar-brand" href="#">Menu</a>
					    </div>
					        <?php
					            wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                'container_class'   => 'collapse navbar-collapse',
					        		'container_id'      => 'bs-example-navbar-collapse-1',
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					        ?>
					    </div>
					</nav>
			</div>
		</div>
	</div>
</div>
