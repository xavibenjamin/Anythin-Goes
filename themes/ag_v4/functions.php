<?php 

wp_register_script( 'custom-scripts', get_template_directory_uri() . '/js/stuff-ck.js', array( 'jquery' ) );
wp_enqueue_script( 'custom-scripts' );



?>