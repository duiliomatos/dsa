<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>?<?php echo date("Yis");?>">
   <?php wp_head(); ?>
 </head>
<body <?php body_class(); ?>>

<header>

  <?php if(is_home()) { ?>

    <?php
    $image_bg = get_theme_mod( 'image_bg' );

    if ( $image_bg ) {
      $image_attributes = wp_get_attachment_image_src( $image_bg, 'full');
      $image_src = $image_attributes[0];
    }else{
      $image_src = get_template_directory_uri()."/images/image-background.png";
     }?>

    <div class="container-fluid main p-0 overflow-hidden" style="background-image: url('<?php echo $image_src;?>');">

    <?php } else { ?>

      <div class="container-fluid secundary p-0 overflow-hidden">

    <?php } ?>

    <div class="container">
      <div class="row top">
        <div class="col-lg-4 text-center">
          <?php
          if( has_custom_logo() )
          {
            the_custom_logo();
          }else{
              ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo_wp.png" class="custom-logo" />
              </a>
              <?php
          }
          ?>
        </div>

        <div class="col-lg-8">
          <?php
          if ( has_nav_menu( 'menu-top' ) ) {
          wp_nav_menu(
            array(
              'theme_location' => 'menu-top',
              'menu_id'        => 'menu-top',
              'menu_class'     => 'nav justify-content-center justify-content-lg-end'
            )
          );
        }
          ?>
        </div>
      </div>


    </div>

    </div>

</header>
