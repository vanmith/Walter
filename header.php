<!DOCTYPE html>
<html>
<head>
	<title>Walter Digital</title>

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

	<?php wp_head(); ?>

</head>
<body>
	<div class="container-fluid" id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					
				</div>
				<div class="col-lg-8">
					<nav class="navbar navbar-expand-lg navbar-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbar-content">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'header-menu',
								'menu_id'        => 'primary-menu',
								'container'      => false,
								'depth'          => 2,
								'menu_class'     => 'navbar-nav ml-auto',
								'walker'         => new Bootstrap_NavWalker(),
								'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
							) );
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>