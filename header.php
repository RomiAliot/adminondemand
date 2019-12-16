<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		

			<div id="header-custom" class="clearfix ">

			       

			         <img class="img-fluid float-left" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
			       

					<div class="responsive-nav ">

					      

							  <?php /* Primary navigation */
									wp_nav_menu(array(
										'theme_location' => 'header-menu',
										'menu_id' => 'myTopnav',
										'menu_class' =>' topnav'
										
									));
									?>
							<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
							
							<div class="header-info float-right">
								<p class="header-number float-left">214-354-0024</p>
								<a class="btn btn-primary btn-lg know-about-btn " href="#" role="button">Get a free quote</a>
							</div>
					</div>

           </div>
				  

