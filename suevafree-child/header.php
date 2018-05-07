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

      <!-- This header is different than the main site - it has only one menu item. -->
      <nav class="navbar navbar-custom navbar-fixed-top one-page" role="navigation">
        <div class="container">
          <div class="navbar-header" style:"display: inline-block">
            <a class="navbar-brand section-scroll" href="#home">Inbetween Realities Blog</a>
          </div>
          
          <div class="">
<ul class="nav navbar-nav navbar-right">
              <!--<li><a class="section-scroll" href="#totop">Home</a></li>-->
              <li><a align="right" href="http://www.inbetweenrealitiesescaperoom.com">Main Site</a></li>
</ul>         
 </div>

        </div>
      </nav>      
      <!-- END different header -->


									
								</div>
                            </div>
                        </div>
                    </header>
                </div>
	
<?php do_action( 'suevafree_' . suevafree_setting( 'suevafree_header_layout', 'none'), 'main-menu', 'default-menu' ); ?>
