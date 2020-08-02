<?php 
 
function edc_posttype_clases() {
    $labels = array(
        'name'                  => _x('CLases Cocina', 'edc'),
        'singular_name'         => _x('CLases Cocina', 'edc'),
        'menu_name'             => _x('CLases Cocina', 'Admin Menu text', 'edc'),
        'name_admin_bar'        => _x('CLases Cocina', 'Add new on Toobal', 'edc'),
        'add_new'               => __('Agregar Nueva','edc'),
        'add_new_item'          => __('Agregar Nueva Clase','edc'),
        'new_item'              => __('Nueva Clase','edc'),
        'edit_item'             => __('Editar Clase','edc'),
        'view_item'             => __('Ver Clase','edc'),
        'all_items'             => __('Todas las Clases de Cocina','edc'),
        'search_items'          => __('Buscar Clases Cocina','edc'),
        'parent_item_colon'     => __('Padre Clases Cocina','edc'),
        'not_found'             => __('No se encontranron Clases.','edc'),
        'not_found_in_trash'    => __('No se encontrar clases en la Papelera','edc'),
        'featured_image'        => _x('Imagen Destacada', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3','edc'),
        'set_featured_image'    => _x('Agregar imagen Destacada', 'Overrides the  "Set featured image" phrase for this post type. Added in 4.3', 'edc'),
        'remove_featured_image' => _x('Borrar imagen destacada', 'Overrides the "Remove featured image" phrase for this post type. Added in 4.3', 'edc'),
        'use_featured_image'    => _x('Usar imagen destacada', 'Overrides the "use as featured image" phrase for this post type. Added in 4.3', 'edc'),
        'archives'              => _x('Archive de Clases', 'The post type archivelabel used in nav menus. default "Post Archives. Added in 4.4','edc'),
        'insert_into_item'      => _x('Insetar en Clases', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media into a post). Added in 4.4', 'edc'),
        'uploaded_to_this_item' => _x('Cargadas En Clases', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post). Added in 4.4', 'edc'),
        'filter_items_list'     => _x('Filtrar Lista de Clases', 'Screen reader text for the filter Links heading on the post type listing screen. Defult "Filter post list"/"Filter pages list". Added in 4.4', 'edc'),
        'items_list_navigation' => _x('CLases Cocina navegación', 'Screen reader text for the pagination heading on the post type listing sreen. Defult "Posts list navigation"/"Pages list navigation". Added 4.4','edc'),
        'items_list'            => _x('Clases Cocina Lista', 'Screen reader text for the items list heading on the post type listing screen. Default "Post list"/"Pages list. Added 4.4','edc'),
 
    );
 
    $args = array(
        'labels'               => $labels,
        'public'               => true,
        'publicly_queryable'   => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'query_var'            => true,
        'rewrite'              => array ( 'slug' => 'classes-cocina'),
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_icon'            => 'dashicons-welcome-learn-more',
        //true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'         => false,
        'menu_position'        => 6,
        'supports'             => array( 'title', 'editor', 'thumbnail'),
        'show_in_rest'         => true,
        'rest_base'            => 'clases-cocina' 
    );
 
    register_post_type( 'clases_cocina', $args);
}
 
  add_action('init', 'edc_posttype_clases' );
 
 
  /**
   * Agregando el post type chefs instructores
   */
  function edc_posttype_chefs_instructores() {
    $labels = array(
        'name'                  => _x('Chefs / Instructores', 'edc'),
        'singular_name'         => _x('Chef / Instructor', 'edc'),
        'menu_name'             => _x('Chefs / instructores', 'Admin Menu text', 'edc'),
        'name_admin_bar'        => _x('Chefs / instructores', 'Add new on Toobal', 'edc'),
        'add_new'               => __('Agregar','edc'),
        'add_new_item'          => __('Agregar Nuevo Chef','edc'),
        'new_item'              => __('Nueva Chef','edc'),
        'edit_item'             => __('Editar Chef','edc'),
        'view_item'             => __('Ver Chef','edc'),
        'all_items'             => __('Todas los Chef','edc'),
        'search_items'          => __('Buscar Chefs','edc'),
        'parent_item_colon'     => __('Padre Chefs','edc'),
        'not_found'             => __('No se encontranron Chefs.','edc'),
        'not_found_in_trash'    => __('No se encontrar chefs en la Papelera','edc'),
        'featured_image'        => _x('Imagen Destacada', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3','edc'),
        'set_featured_image'    => _x('Agregar imagen Destacada', 'Overrides the  "Set featured image" phrase for this post type. Added in 4.3', 'edc'),
        'remove_featured_image' => _x('Borrar imagen destacada', 'Overrides the "Remove featured image" phrase for this post type. Added in 4.3', 'edc'),
        'use_featured_image'    => _x('Usar imagen destacada', 'Overrides the "use as featured image" phrase for this post type. Added in 4.3', 'edc'),
        'archives'              => _x('Archive de Chefs', 'The post type archivelabel used in nav menus. default "Post Archives. Added in 4.4','edc'),
        'insert_into_item'      => _x('Insetar en Chefs', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media into a post). Added in 4.4', 'edc'),
        'uploaded_to_this_item' => _x('Cargadas En Chefs', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post). Added in 4.4', 'edc'),
        'filter_items_list'     => _x('Filtrar Lista de Chefs', 'Screen reader text for the filter Links heading on the post type listing screen. Defult "Filter post list"/"Filter pages list". Added in 4.4', 'edc'),
        'items_list_navigation' => _x('Chefs  navegación', 'Screen reader text for the pagination heading on the post type listing sreen. Defult "Posts list navigation"/"Pages list navigation". Added 4.4','edc'),
        'items_list'            => _x('Chefs  Lista', 'Screen reader text for the items list heading on the post type listing screen. Default "Post list"/"Pages list. Added 4.4','edc'),
 
    );
    $args = array(
        'labels'               => $labels,
        'public'               => true,
        'publicly_queryable'   => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'query_var'            => true,
        'rewrite'              => array ( 'slug' => 'chefs-instructores'),
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_icon'            => 'dashicons-admin-users',
        //true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'         => false,
        'menu_position'        => 7,
        'supports'             => array( 'title', 'editor', 'thumbnail'),
        'show_in_rest'         => true,
        'rest_base'            => 'chefs-instructores' 
    );
 
    register_post_type( 'chefs', $args);
}
 
  add_action('init', 'edc_posttype_chefs_instructores' );
 
  ?>
 