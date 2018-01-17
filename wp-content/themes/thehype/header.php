<!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true); 
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>



      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>

      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
      <?php
      wp_nav_menu( array(
        'theme_location'  => 'navbar',
        'container'       => false,
        'menu_class'      => '',
        'fallback_cb'     => '__return_false',
        'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'           => 2,
        'walker'          => new themehype_walker_nav_menu()
      ) );
    ?>

<i class="cart-items">
    <a href="http://localhost/themehype/cart/"> <span class="fas fa-shopping-cart fa-sm"></span></a>
      </i>
      <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>

    </li>
    </ul>

  </nav>


