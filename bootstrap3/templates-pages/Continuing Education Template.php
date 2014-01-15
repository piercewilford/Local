<?php
/**
 * Template Name: OFA Continuing Education
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<style type="text/css">
#float{
  position: fixed;
  top:100px;
  right:0;
}
</style>


 <div class="hero-unit gradient span12" style="width:100%;margin-top:-20px;margin-left:0;-webkit-border-radius:0px;">
         <div class="container span9">
          <div class="span9">
            <h1 style="color:white;">Continuing Education</h1>
            <p style="color:white;">This is a starting point to create something more unique.</p>
          </div>
                        
         </div>
        <!--  <img class="span2" style="margin-bottom:-40px;margin-top:-40px;" src="http://skunkboxstudios.com/dev/wp-content/uploads/2013/07/bug-final.png" alt="bug"> -->
      </div>

<div class="row-fluid sk">
<!-- <div class="span1"></div> -->
<div class="span12">  

 

<img id="float" class="span1" style="float:right;" src="<?php echo site_url() ?>/wp-content/uploads/2013/07/bug-final.png" alt="bug">

      <!-- <div class="row fluid"> -->
             <?php query_posts( array('category_name' => 'CE'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                          echo "<div class='span3' style='margin-left:10px;'>";
                            echo "<div class='card' style='box-shadow:5px 5px 5px #888888;'>";
                              echo "<div class='card-heading simple' style='background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;'>";
                               echo "<a style='color:white;' href='";
                                the_permalink();
                                echo "'>";
                                the_title();
                                echo "</a>";
                              echo "</div>";
                              echo "<div class='card-body'>";
                              substr(the_excerpt(), 0,100);
                            echo "</div>";
                           echo "</div>";
                          echo "</div>";
              endwhile; // end of the loop. ?>
    

        </div> 
        </div>  
       


    <?php get_footer(); ?>
  
    