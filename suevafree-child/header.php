<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

	
</head>

<body <?php body_class(); ?>>
	
	<div>
	  <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Inbetween Realities!</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#totop">Home</a></li>
              <li><a class="section-scroll" href="#pricing">Prices</a></li>
              <li><a class="section-scroll" href="#booking">Book</a></li>
              <li><a class="section-scroll" href="blog.inbetweenrealitiesescaperoom.com">Blog</a></li>
            </ul>
          </div>
        </div>
      </nav>
	</div>
	
<?php do_action( 'suevafree_' . suevafree_setting( 'suevafree_header_layout', 'header_layout_inbetweenrealities'), 'main-menu', 'default-menu' ); ?>