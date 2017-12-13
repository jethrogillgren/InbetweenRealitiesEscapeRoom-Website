<!-- Manually replaced in parent due to function_exists -->

<?php

if (!function_exists('suevafree_logo_layout_function')) {

	function suevafree_logo_layout_function( $description ) { 
	
	?>

	<!--<div>
	  <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Inbetween Realities</a>
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
	</div>-->


	<?php	
	}

	add_action( 'suevafree_logo_layout', 'suevafree_logo_layout_function', 10, 2 );

}

?>
