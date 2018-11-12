<?php
 //carregamento de folhas de estilo e scripts

 function load_scripts() {
     //add stylesheet on wp - adicionando estilo ao wordpress
     wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' , array(), '4.1.3', 'all');
     wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0', 'all');
     //add javascript file on wp - Adicionando javascript no wordpress
     wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true );
 }

 add_action('wp_enqueue_scripts','load_scripts');
//Função de Configuração do Tema
 function wpcurso_config() {
    //registrando menus
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'menu_footer' => 'Menu Footer'
        )
    );
    $args = array(
        'height'  => 225,
        'width'   =>1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
 }

 add_action('after_setup_theme', 'wpcurso_config', 0);
?>