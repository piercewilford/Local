<?php
/**
 * OLD Default Page Header
 *
 * @package    WordPress
 * @subpackage BootstrapWP
 */
?>
 <?php 
    if ((bp_is_member() || bp_is_directory()) && !current_user_can('read_private_posts')){
       wp_redirect( site_url('/the-barn-landing/', 'http'), 301 ); exit;
  }

//   function wpa54064_inspect_scripts() {
//     global $wp_scripts;
//     foreach( $wp_scripts->queue as $handle ) :
//         echo $handle . ' | ';
//     endforeach;
// }
// add_action( 'wp_print_scripts', 'wpa54064_inspect_scripts' );

//   function wpa54064_inspect_styles() {
//     global $wp_styles;
//     foreach( $wp_styles->queue as $handle ) :
//         echo $handle . ' | ';
//     endforeach;
// }
// add_action( 'wp_print_styles', 'wpa54064_inspect_styles' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.png">
		<link href="http://fonts.googleapis.com/css?family=Oswald:700|Droid+Serif:400,700italic" rel="stylesheet" type="text/css" />
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>"> <img src="<?php echo get_template_directory_uri();?>/assets/img/ofalogo.png"></a>
					<?php
            if(is_user_logged_in()){ ?>
           <div class="pull-right">
                <ul class="nav">
                    <li class="dropdown" style="margin-right:50px;"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:20;font-size:14;font-weight:bold;margin-top:15%;">Welcome, 
                      <?php 
                     global $current_user;
    get_currentuserinfo();
    $useremail = $current_user->user_email;
    $display_name = $current_user->display_name;
    $user_id = $current_user->ID;
    $profilelink = '<li><a href="' . bp_loggedin_user_domain( '/' ) . '">' . __('TheBarn™') . '</a></li>';
    $menu = $menu . $profilelink;
                     echo $display_name ?> <div class="icon-chevron-down"></div>
                     <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('/your-invoices/', 'http'); ?>"><i class="icon-briefcase"></i>   Your Payments</a></li>
                            <?php echo  '<li><a href="' . bp_loggedin_user_domain( '/' ) . '"><i class="icon-user"></i>Your Profile</a></li>'; ?> 
                            <li><a href="<?php echo site_url('/courses/', 'http'); ?>"><i class="icon-pencil"></i>   Register for Courses</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo wp_logout_url( $_SERVER['REQUEST_URI']); ?>" title="Logout"><i class="icon-off"></i>   Logout</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
              <?php } 
              else {?>
              <a href="http://skunkboxstudios.com/ofatest/how-to/"><div class="btn btn-danger" style="float:right;margin-right:2%;margin-top:1%;width:150px;height:50px;font-size:12pt;padding-top:12px;">Start Here!</div></a>
               <div class="pull-right">
                <ul class="nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:20;font-size:14;font-weight:bold;margin-top:15%;">Register or Login here!<div class="icon-chevron-down"></div><?php 

                     global $current_user;
    get_currentuserinfo();
    $useremail = $current_user->user_email;
    $display_name = $current_user->display_name;
    $user_id = $current_user->ID;

     $profilelink = '<li><a href="' . bp_loggedin_user_domain( '/' ) . '">' . __('TheBarn™') . '</a></li>';
        $menu = $menu . $profilelink;
 ?> 
                     <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="width:250px;">
                          <div >
                          <ul style="margin-right:7px;margin-left:7px;"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Fill Out Profile Widget')) :
endif; ?></ul>
                        </div>
                        </ul>
                    </li>
                </ul>
              </div>
              <?php } ?>
            </div>

        </div>
  
    <div class="navbar navbar-top p navbar-default">
        <div class="push-in container" style="-webkit-border-radius:0px;">
            <div class="row">
                <a class="btn btn-navbar btn-default" >
                    <span class="icon-bar"></span>
                   	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <?php wp_nav_menu(
                        array(
                            'menu' => 'main-menu',
                            'container_class' => 'nav-collapse collapse',
                            'menu_class' => 'nav',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new Bootstrapwp_Walker_Nav_Menu()
                                 )
                                ); ?>
            </div>
        </div>
    </div>  
    <!-- End Header. Begin Template Content -->