<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

	
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
        
                <div id="header-wrapper" class="header-1">
                    
                    <header id="header" >
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12" >
									
								  <!-- Manually copy from Titan-Master which is the authorative version -->
								  <nav class="navbar navbar-custom navbar-fixed-top one-page" role="navigation">
									<div class="container">
									  <div class="navbar-header">
										<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="#">Inbetween Realities Blog</a>
									  </div>
									  <div class="collapse navbar-collapse" id="custom-collapse">
										<ul class="nav navbar-nav navbar-right">
										  <li><a href="http://inbetweenrealitiesescaperoom.com/index.html">Main Site</a></li>
										</ul>
									  </div>
									</div>
								  </nav>
									
								</div>
                            </div>
                        </div>
                    </header>
                </div>
	
<?php do_action( 'suevafree_' . suevafree_setting( 'suevafree_header_layout', 'none'), 'main-menu', 'default-menu' ); ?>