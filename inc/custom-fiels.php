<?php

	//metabox homepage

	add_action( 'cmb2_admin_init', 'edc_campos_homepage' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_homepage() {
	$prefix = 'edc_homepage_';
	$id_home = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$edc_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Campos homepage', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

	$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto superior 1', 'cmb2' ),
		'desc'    => esc_html__( 'texto para la parte superior del sitio web', 'cmb2' ),
		'id'      => $prefix . 'texto_superior_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

		$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero 1', 'cmb2' ),
		'desc' => esc_html__( 'primera imagen para la parte superior', 'cmb2' ),
		'id'   => $prefix . 'imagen_superior_1',
		'type' => 'file',
	) );

		$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto superior 2', 'cmb2' ),
		'desc'    => esc_html__( 'texto para la parte superior del sitio web', 'cmb2' ),
		'id'      => $prefix . 'texto_superior_2',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );


		$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero 2', 'cmb2' ),
		'desc' => esc_html__( 'segunda imagen para la parte superior', 'cmb2' ),
		'id'   => $prefix . 'imagen_superior_2',
		'type' => 'file',
	) );
	

			$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto licenciatura', 'cmb2' ),
		'desc'    => esc_html__( 'texto para la licenciatura', 'cmb2' ),
		'id'      => $prefix . 'texto_licenciatura',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );


		$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen fondo Licenciatura', 'cmb2' ),
		'desc' => esc_html__( 'imagen de fondo de la licenciatura', 'cmb2' ),
		'id'   => $prefix . 'imagen_licenciatura',
		'type' => 'file',
	) );
	

}



add_action( 'cmb2_admin_init', 'edc_seccion_nosotros' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_seccion_nosotros() {

	$prefix = 'edc_group_';
	/**
	 * Repeatable Field Groups
	 */
	$edc_iconos = new_cmb2_box( array(
		'id'           =>  $prefix . 'metabox',
		'title'        => esc_html__( 'iconos con descripcion', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => 'true',
		'show_on'      => array(
			'key'      => 'page-template',
			'value'    => 'page-iconos.php'
		)
 	) );

	$edc_iconos->add_field( array(
		'name' => esc_html__( 'Titulo seccion', 'cmb2' ),
		'desc' => esc_html__( 'anade un titulo de la seccion', 'cmb2' ),
		'id'   => $prefix . 'titulo_iconos',
		'type' => 'text',
	) );


	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $edc_iconos->add_field( array(
		'id'          =>  $prefix . 'nosotros',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue opciones segun sea necesario', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Caracteristica {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar otro grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar grupo', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );



	

	$edc_iconos->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo', 'cmb2' ),
		'id'         => 'titulo_icono',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Description', 'cmb2' ),
		'description' => esc_html__( 'Agregar descripcion', 'cmb2' ),
		'id'          => 'desc_icono',
		'type'        => 'textarea_small',
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Icono', 'cmb2' ),
		'id'   => 'imagen_icono',
		'type' => 'file',
	) );



}



/*

campos del blog

*/


	add_action( 'cmb2_admin_init', 'edc_campos_blog' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_blog() {
	$prefix = 'edc_blog_';
	$id_blog = get_option('page_for_posts');

		$edc_campos_blog = new_cmb2_box( array(
		'id'           => $prefix . 'blog',
		'title'        => esc_html__( 'Campos blog', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_blog ),
		), // Specific post IDs to display this metabox
	) );

			$edc_campos_blog->add_field( array(
		'name' => esc_html__( 'Slogan blog', 'cmb2' ),
		'desc' => esc_html__( 'anade una descripcion a la pagina web', 'cmb2' ),
		'id'   => $prefix . 'slogan_blog',
		'type' => 'text',
	) );
}


add_action( 'cmb2_admin_init', 'edc_campos_clases' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_campos_clases() {

	$prefix = 'edc_cursos_';
	/**
	 * Repeatable Field Groups
	 */
	$edc_campos_cursos = new_cmb2_box( array(
		'id'           =>  $prefix . 'metabox',
		'title'        => esc_html__( 'Informacion de clases y cursos', 'cmb2' ),
		'object_types' => array( 'clases_cocina' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => 'true',
 	) );

 		$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Subtitulo de curso', 'cmb2' ),
		'desc' => esc_html__( 'Añade subtitulo para el curso', 'cmb2' ),
		'id'   => $prefix . 'subtitulo',
		'type' => 'text',
	) );


		$edc_campos_cursos->add_field( array(
		'name'     => esc_html__( 'Informacion sobre la fecha y hora del curso', 'cmb2' ),
		'desc'     => esc_html__( 'añade informacion sobre la fecha y hora del curso', 'cmb2' ),
		'id'       => $prefix . 'info',
		'type'     => 'title'
		
	) );

 		//horas y dias

 			$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'indiciaciones de los dias', 'cmb2' ),
		'desc' => esc_html__( 'Añade indiciaciones de los dias ej: todos los sabados', 'cmb2' ),
		'id'   => $prefix . 'indiciaciones',
		'type' => 'text',
	) );

 			$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Fecha de inicio de curso', 'cmb2' ),
		'desc' => esc_html__( 'añade fecha de inicio de curso', 'cmb2' ),
		'id'   => $prefix . 'fecha_inicio_curso',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
		'column' => true
	) );

 					$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Fecha de fin de curso', 'cmb2' ),
		'desc' => esc_html__( 'añade fecha de fin de curso', 'cmb2' ),
		'id'   => $prefix . 'fecha_fin_curso',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
	) );
 		$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Hora inicio de curso', 'cmb2' ),
		'desc' => esc_html__( 'Añada de la hora de inicio', 'cmb2' ),
		'id'   => $prefix . 'hora_inicio_clase',
		'type' => 'text_time',
		// 'time_format' => 'H:i', // Set to 24hr format
	) );

 			$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Hora fin de curso', 'cmb2' ),
		'desc' => esc_html__( 'Añada de la hora de fin de clase', 'cmb2' ),
		'id'   => $prefix . 'hora_fin_clase',
		'type' => 'text_time',
		// 'time_format' => 'H:i', // Set to 24hr format
	) );
//añadade informacion de curso cupos etc

 						$edc_campos_cursos->add_field( array(
		'name'     => esc_html__( 'Informacion extra del curso', 'cmb2' ),
		'desc'     => esc_html__( 'añade  cupo,precio , instructor' , 'cmb2' ),
		'id'       => $prefix . 'bloque',
		'type'     => 'title'
		
	) );

 		$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Precio del curso', 'cmb2' ),
		'desc' => esc_html__( 'Añade el costo del curso', 'cmb2' ),
		'id'   => $prefix . 'costo',
		'column' => true,
		'type' => 'text_money',
		// 'before_field' => '£', // override '$' symbol if needed
		// 'repeatable' => true,
	) );


 		$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'cupo', 'cmb2' ),
		'desc' => esc_html__( 'cupo para el curso', 'cmb2' ),
		'id'   => $prefix . 'cupo',
		'type' => 'text',
	) );

 		$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'que incluye el curso', 'cmb2' ),
		'desc' => esc_html__( 'añade lo que incluye el curso (1 por linea )', 'cmb2' ),
		'id'   => $prefix . 'incluye',
		'type' => 'text',
		'repeatable' => true
	) );

	$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'chef instructor del curso', 'cmb2' ),
		'desc' => esc_html__( 'seleccone el chef que impartira el curso', 'cmb2' ),
		'id'   => $prefix . 'chef',
		'limit' => 10,
		'type' => 'post_search_ajax',
		'query_args'	=> array(
			'post_type'			=> array( 'chefs' ),
			'post_status'		=> array( 'publish' ),
			'posts_per_page'	=> -1
		)
	) );



 	}

 		add_action( 'cmb2_admin_init', 'edc_campos_galeria' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_galeria() {
	$prefix = 'edc_galeria_';

			$edc_galeria = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Galeria de imagenes', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'key' => 'page_templete',
			'value' => 'page-galeria.php'
		), // Specific post IDs to display this metabox
	) );
	

 		$edc_galeria->add_field( array(
		'name'         => esc_html__( 'Imagenes', 'cmb2' ),
		'desc'         => esc_html__( 'Cargue imagenes de la galeria', 'cmb2' ),
		'id'           => $prefix . 'imagenes',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );

 	}