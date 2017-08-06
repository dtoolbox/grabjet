<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="container">
  
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?php echo get_theme_file_uri('/img/grabjet-logo.png');?>" /></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
			<?php wp_nav_menu( array(
				'theme_location' => 'topnav',
				'menu_id'        => 'top-menu',
				'menu_class' => 'nav navbar-nav navbar-right'
			) ); ?>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
      
      
      
      <div class="booking-wrapper">
      	<img id="airplane" src="<?php echo get_theme_file_uri('/img/airplane.png');?>" class="img-responsive center-block" />
      </div>