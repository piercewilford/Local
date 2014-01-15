<?php
/**
 * Template Name: Enrolled Students Page Template
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  
<div class="row-fluid sk">
<!-- <div class="span1"></div> -->
<div class="span9 sk">  

 
<header class="page-title">
        <h3><?php the_title();?></h3>
    </header>

  <div class="row content well">
  
      
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>

        <?php endwhile; // end of the loop. ?>

        <?php 
        $eventid = $_GET['event_id'];
        $getusers = get_post_meta($eventid, 'user_id');

        global $current_user;
        get_currentuserinfo();
        $ofauser_id = $current_user->ID;

        
        

        foreach($getusers as $getuser){
            $user_info = get_userdata($getuser);

            $userid = $user_info->ID;
             $args = array('post_type' => 'wpi_object', 'post_status' => array('paid', 'active'), 'author' => $userid, 'meta_value' => $eventid);
             query_posts($args);
             while (have_posts() ): the_post();
             $invoice = get_the_ID();
             $amountpaid = get_post_meta($invoice, 'total_payments', true);
             endwhile;


            echo "</br>";
            echo "</br>";
            echo 'Student: '. $user_info->display_name. "\n";
            echo "</br>"; 
            echo 'Amount Payed: $'.$amountpaid.'';
            echo "</br>"; 
            if($amountpaid > '249'){
             echo "Status: <strong style='color:green;'>Enrolled</strong>";   
            }
            else{
                echo "Status: <strong style='color:red;'>Pending Minimum Payment</strong>";
            }

              }

      ?>
        
       
        </div>

        </div> 
       <div pull>
        <?php get_sidebar(); ?>
    </div>
        </div>	
        </div>		
	
    <?php get_footer(); ?>
