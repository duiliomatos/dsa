<?php
/*
  Configurações do Tema.
*/
function theme_setup() {

  /* Thumbnails personalizados.*/
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'custon-page', 500, 500, true );
  add_image_size( 'custom-blog', 600, 400, true );


  /* Adiciona Logo na Página de Personalizar*/
  add_theme_support(
      'custom-logo',
      array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      )
  );
}
add_action( 'after_setup_theme', 'theme_setup');

/* Registrando local do Menu Principal*/
register_nav_menus(
  array(
    'menu-top' => esc_html__( 'Topo'),
  )
);

/* Personalizando Tema*/
function customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'footer',
		array(
			'title'    => __( 'Rodapé'),
			'priority' => 201,
		)
	);

  $wp_customize->add_setting( 'copyright' );
  $wp_customize->add_control(
    'copyright',
    array(
      'label'   => __( 'Copyright'),
      'section' => 'footer',
      'description' => 'Texto do Rodapé',
    )
  );

  $wp_customize->add_setting( 'logo_footer' );
  $wp_customize->add_control(
    new WP_Customize_Media_Control(
      $wp_customize,
      'logo_footer',
      array(
        'label'     => __( 'Logo'),
        'section'   => 'footer',
        'mime_type' => 'image',
        'description' => 'Imagem do Rodapé',
      )
    )
  );

	$wp_customize->add_section(
		'main',
		array(
			'title'    => __( 'Página Inicial'),
			'priority' => 200,
		)
	);

  $wp_customize->add_setting( 'image_bg' );
  $wp_customize->add_control(
    new WP_Customize_Media_Control(
      $wp_customize,
      'image_bg',
      array(
        'label'     => __( 'Imagem'),
        'section'   => 'main',
        'mime_type' => 'image',
        'description' => 'Imagem da Página Inicial',
      )
    )
  );
}
add_action( 'customize_register', 'customize_register' );


/* Register widget area.*/
function widget_footer() {
	register_sidebar(
		array(
			'name'           => esc_html__( 'Rodapé', 'widget' ),
			'id'             => 'sidebar-footer',
			'description'    => esc_html__( 'Adiciona Widget no Rodapé.', 'widget' ),
      'before_widget'  => '',
  		'after_widget'   => "",
  		'before_title'   => '<h3>',
  		'after_title'    => "</h3>",
  		'before_sidebar' => '',
  		'after_sidebar'  => ''
		)
	);
}
add_action( 'widgets_init', 'widget_footer' );

function widget_page() {
	register_sidebar(
		array(
			'name'           => esc_html__( 'Página', 'widget' ),
			'id'             => 'sidebar-page',
			'description'    => esc_html__( 'Adiciona Widget na Página.', 'widget' ),
      'before_widget'  => '',
  		'after_widget'   => "",
  		'before_title'   => '<h3>',
  		'after_title'    => "</h3>",
  		'before_sidebar' => '',
  		'after_sidebar'  => ''
		)
	);
}
add_action( 'widgets_init', 'widget_page' );

// Post type
add_action( 'init', 'register_pet_post_type' );

function register_pet_post_type() {
    $labels = array(
    'name'               => __( 'Pets' ),
    'singular_name'      => __( 'Pet' ),
    'add_new'            => __( 'Novo Pet' ),
    'add_new_item'       => __( 'Novo Pet' ),
    'edit_item'          => __( 'Editar Pet' ),
    'new_item'           => __( 'Novo Pet' ),
    'all_items'          => __( 'Listar Pets' ),
    'view_item'          => __( 'Ver todos Pets' ),
    'search_items'       => __( 'Buscar Pet' ),
    'featured_image'     => 'Imagem',
    'set_featured_image' => 'Adicioanar imagem'
  );
  $args = array(
    'labels' => $labels,
    'description' => 'Post Type',
    'public' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'thumbnail', 'custom-fields', 'post-formats' ),
    'rewrite'  => array( 'slug' => 'pet' )
  );
  register_post_type( 'pets', $args );
}
?>
