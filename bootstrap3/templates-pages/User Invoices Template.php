<?php
/**
 * Template Name: User Invoices Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<?php
if (!is_user_logged_in() ) {
 wp_redirect (site_url('/wp-login.php', 'http'));
 exit;
}
 ?>

  
<div class="row-fluid sk">
<!-- <div class="span1"></div> -->
<div class="span9 sk">  

 
<header class="page-title">
        <h3><?php the_title();?></h3>
    </header>

  <div class="row content well">

<?php 
    global $current_user;
get_currentuserinfo();
$useremail = $current_user->user_email;
$display_name = $current_user->display_name;
$user_id = $current_user->ID;
  
   $args = array('post_type' => 'wpi_object', 'post_status' => array('active', 'paid', 'publish'), 'author' => $user_id);


      query_posts($args);

       while (have_posts() ): the_post();
       $id = get_the_ID();
       $hash = get_post_meta($id, 'hash', true);
       $eventid = get_post_meta($id, 'event_id', true);
       $eventname = get_post($eventid, OBJECT);
       $eventtitle = $eventname->post_title;

       echo "</br>";
       echo "<li>";
       echo '<a href="';
      echo  site_url('/invoice/?invoice_id='.$hash.'', 'http');
        echo '">';
       
       echo "<strong style='text-decoration:underline;'>$eventtitle</strong>";
       echo '</a>';
       echo "</li>";
        endwhile;

?>


        
       
        </div>

        </div> 
       <div pull>
        <?php get_sidebar(); ?>
    </div>
        </div>	
        </div>		
	
    <?php get_footer(); 
    ?>