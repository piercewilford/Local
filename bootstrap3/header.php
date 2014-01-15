<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
 
?>
 <?php 
    if ((bp_is_member() || bp_is_directory()) && !current_user_can('read_private_posts')){
       wp_redirect( site_url('/the-barn-landing/', 'http'), 301 ); exit;
  }
    ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.png">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>/wp-content/themes/bootstrap3/style.css" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <?php wp_head(); ?>
    <style type="text/css">

</style>
</head>
<body <?php body_class(); ?>>
    
    <div class="navbar navbar-fixed-top">
      <div class="container-nav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="dropdown" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="width:25%;" class="navbar-brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img style="width:100%;" src="<?php echo site_url(); ?>/wp-content/themes/bootstrap3/ofalogo.png" />

          </a>
        </div>

        <?php
          wp_nav_menu(
            array(
              'menu'            => 'main-menu',
              'container_class' => 'collapse navbar-collapse',
              'menu_class'      => 'nav navbar-nav',
              'fallback_cb'     => '',
              'menu_id'         => 'main-menu',
              'walker'          => new Bootstrapwp_Walker_Nav_Menu()
            )
          );
        ?>

      </div>
    </div>
    <div class="container">
    <!-- End Header. Begin Template Content -->