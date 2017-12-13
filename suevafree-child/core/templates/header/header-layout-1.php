<!-- Manually replaced in parent due to function_exists -->

<?php

if (!function_exists('suevafree_header_layout_1_function')) {

	function suevafree_header_layout_1_function($theme_location, $menu_class) { 
		
	?>
        
            <div id="wrapper">
        
                <div id="header-wrapper" class="header-1">
                    
                    <header id="header" >
                        
                        <div class="container">
                        
                            <div class="row">
                                    
                                <div class="col-md-12" >
                                        
                                    <div id="logo">
                                    
                                    	<?php 
										
											do_action( 'suevafree_logo_layout', 'on');
											echo suevafree_header_cart(); 
										
										?>
                        
                                    </div>
                                                       
                                </div>
                                
                            </div>
                            
                        </div>
                            
                    </header>
                        
                </div>
                
<?php
		
	}

	add_action( 'suevafree_header_layout_1', 'suevafree_header_layout_1_function', 10, 2 );

}

?>
