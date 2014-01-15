<?php
/**
 * Template Name: OFA Signs and Symptoms
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>



 <div class="hero-unit gradient span12" style="width:100%;margin-top:-20px;margin-left:0;-webkit-border-radius:0px;">
         <div class="container">
          <div>
            <h1 style="color:white;">Signs and Symptoms</h1>
            <p style="color:white;">You love your pet; and as a conscientious owner, you want to keep them healthy and protect their wellbeing. Owning an animal is a responsibility which requires continual observation, management, and occasionally the ability to detect unusual behaviors which may reveal signs of illness or injury. Because your animal communicates in a language other than words, they must rely on your capacity to observe and distinguish the subtle changes in their behavior which might indicate a warning sign for health concerns.</p>
          </div>
                        
         </div>
        <!--  <img class="span2" style="margin-bottom:-40px;margin-top:-40px;" src="http://skunkboxstudios.com/dev/wp-content/uploads/2013/07/bug-final.png" alt="bug"> -->
      </div>

<div class="row-fluid sk">
<div class="span12">  

 
             <?php query_posts( array('category_name' => 'Symptoms'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                          echo "<div class='span4' style='margin-left:10px;'>";
                            echo "<div class='card' style='box-shadow:5px 5px 5px #888888;height:400px;'>";
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
                            echo "<div class='card-media' style=height:60%;width:80%;margin-left:auto;margin-right:auto;>";
                              echo "<div style='margin-left:auto;margin-right:auto;'>";
                              the_post_thumbnail();
                              echo "</div>";
                              echo "</div>";
                           echo "</div>";
                          echo "</div>";
              endwhile; // end of the loop. ?>
    

        </div> 
        </div>  
       


    <?php get_footer(); ?>
  
    