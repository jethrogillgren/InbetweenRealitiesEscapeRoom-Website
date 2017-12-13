<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>
	
<script>
    console.log("Child  header.php!");
	</script>


	
</head>

<body <?php body_class(); ?>>

		<h1>
		Child header.php
	</h1>
	
<?php do_action( 'suevafree_' . suevafree_setting( 'suevafree_header_layout', 'header_layout_inbetweenrealities'), 'main-menu', 'default-menu' ); ?>
	
	
			<h1>
		Child header.php
	</h1>
	<script>
    console.log("/ Child header.php");
	</script>

	<h1>
		/ Child header.php
	</h1>