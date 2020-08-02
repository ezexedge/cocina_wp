<?php
/*
        creamos un widgets con los proximos cursos

*/

require_once dirname(__FILE__) . '/inc/widgets.php';

/*


/*
        agrega los post type de profesores y clases

*/

require_once dirname(__FILE__) . '/inc/posttype.php';

/*

queries reutilizables
*/
require_once dirname(__FILE__) . '/inc/queries.php';


require_once dirname(__FILE__) . '/cmb2.php';

require_once dirname(__FILE__) . '/inc/custom-fiels.php';

/*

queries reutilizables
*/
require_once dirname(__FILE__) . '/inc/opciones.php';


/* imagenes destacada */
add_action('init','edc_imagen_destacada');
function edc_imagen_destacada($id){
        $imagen = get_the_post_thumbnail_url($id,'full');
        $html = '';
        $clase = false;
        if($imagen){
                $clase = true;
                $html .= '<div class="container">';
                $html .= '<div class="row imagen-destacada"></div>';
                $html .= '</div>';


                //agregamos stilos de manera virtual pero no se agregan al tema

                wp_register_style('custom',false);
                //false por que no va existir en el tema
                wp_enqueue_style('custom');

                //creamos el css
                $imagen_destacada_css = "

                        .imagen-destacada{
                                    background-image: url({$imagen});
                                }


                ";

                wp_add_inline_style('custom',$imagen_destacada_css);
        }

        return array($html,$clase);
}

function edc_setup(){

//definir tamaño de imagenes
add_image_size('mediano',510,340,true);
add_image_size('cuadrada_mediana',350,350,true);


add_theme_support('post-thumbnails');


//mejoro el seo

add_theme_support('title-tag');


//registramos menu de navegacion



register_nav_menus(array(
        'menu_principal' => esc_html( 'Menu Principal' , 'escueladecocina')
));

}
add_action('after_setup_theme','edc_setup');



/* agega la clase nav_link de bootstrap menu princial */


function edc_enlace_class($atts,$item,$args){
        if($args -> theme_location == 'menu_principal'){
                $atts['class'] = 'nav-link';
        }

        return $atts;
}

add_filter('nav_menu_link_attributes','edc_enlace_class',10,3);

function edc_scripts(){


        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css'  , false, '4.1.3');
        

        //en la parte de dependencias lo ponemos para que carge primerop bootstrap
        wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css'));


        //scripts
        wp_enqueue_script('jquery');

        //el ultimo va un true el true me dice si va o no en el footer de mi sitio web
        wp_enqueue_script('popper',get_template_directory_uri() . '/js/popper.js',array('jquery'),'1.0',true);


        wp_enqueue_script('bootstrap-js',get_template_directory_uri() . '/js/bootstrap.js',array('popper'),'4.1.3',true);

        
}

add_action( 'wp_enqueue_scripts', 'edc_scripts');



/* 
agragar un mensaje personalizadonen la pagina del admin
*/

add_filter('display_post_states','edc_cambiar_estado',10,2);

function edc_cambiar_estado($states,$post){
        if(('page' == get_post_type($post->ID)) && ('page-clases.php' == get_page_template_slug($post->ID))){
                $states[] = __('Pagina de clases <a href="post-new.php?post_type=clases_cocina" >Agregar nueva clase</a>');
        }

        return  $states;
}


/*
soporte de widgets
*/

add_action('widgets_init','edc_widgets_sidebar');

function edc_widgets_sidebar(){


        register_sidebar(array(

                'name' => 'Widget lateral',
                'id'   => 'sidebar_widget',
                'before_widget' => '<div class="widgets">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="text-center text-light separador-inverso">',
                'after_title' => '</h2>',



        ));
}

?>