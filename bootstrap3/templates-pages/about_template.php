<?php
/**
 * Template Name: OFA About Us 
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

                
               <?php query_posts( array('category_name' => 'Our Founder'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                          // echo "<div class='span11' style='margin-left:10px;'>";
                        
                            echo "<div class='hero-unit gradient span12' style='width:100%;margin-top:-20px;margin-left:0px;-webkit-border-radius:0px;'>";
                            echo "<p class='span2'>";
                            the_post_thumbnail();
                            echo "</p>"; // span3
                            echo "<div class='span8'>";
                              echo "<h1 class='span11' style='color:white;'>";
                                the_title();
                              echo "</h1>";
                              echo "<div class='span8' style='color:white;'>";
                              substr(the_excerpt(), 0,100);
                              echo "</div>";
                              echo "</div>";
                              
                           echo "</div>";// hero
                          echo "</div>"; // span11
              endwhile; // end of the loop. ?>
              

<div class="row-fluid sk" style="width:1024px;margin-left:auto;margin-right:auto;">
<div class="span12">  


             <?php query_posts( array('category_name' => 'About Us'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();

 echo "<div class='span4' style='margin-left:10px;'>";
                            echo "<div class='card' style='box-shadow:5px 5px 5px #888888;height:360;'>";
                              echo "<div class='card-heading simple' style='background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;'>";
                               echo "<a style='color:white;' href='";
                                the_permalink();
                                echo "'>";
                                the_title();
                                echo "</a>";
                              echo "</div>";
                                echo "<div class='card-body'>";
                               echo "<div style='margin-top:20px;height:300px;'>";
                              substr(the_excerpt(), 0,100);
                              echo "<div style='margin-left:auto;margin-right:auto;width:90%;'>";
                              the_post_thumbnail();
                              echo "</div>";
                              echo "</div>"; 
                            echo "</div>";
                               echo "</div>";
                              echo "</div>";
                        
              endwhile; // end of the loop. ?>

              <div class="span4" style="margin-left:10px;">
        <div class="card" style="height:360;box-shadow:5px 5px 5px #888888;">
            <div class="card-heading simple" style="background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;">
                <a href="http://optionsforanimals.com/faculty-and-staff-directory/" style="margin:5px;color:white;">Faculty and Staff</a>
            </div>

             <?php query_posts( array('post_type' => 'staff', 'posts_per_page' => 7, 'order' => 'ASC'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                          
                              echo "<div class='card-body'>";
                              echo "<a href='";
                              the_permalink(); 
                              echo "?>'>";
                               the_title(); 
                               echo "</a>";
                            echo "</div>";
                           
              endwhile; // end of the loop. ?>
    

        </div> 
      </div>
    </div>
  </div>
 


    <?php get_footer(); ?>
	
    