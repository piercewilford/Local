<?php
/**
 * Template Name: OFA Lodging
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>



 <div class="hero-unit gradient span12" style="width:100%;margin-top:-20px;margin-left:0;-webkit-border-radius:0px;">
         <div class="container span9">
          <div class="span9">
            <h1 style="color:white;">Lodging</h1>
            <p style="color:white;">Local hotels welcome all Options for Animals students. Here are a few of them.</p>
          </div>
                        
         </div>
      </div>

<div class="row-fluid sk">
<div class="span12">  

 
             <?php query_posts( array('post_type' => 'Hotels'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                           echo "<div class='span4' style='margin-left:10px;'>";
                            echo "<div class='card' style='box-shadow:5px 5px 5px #888888;height:400;'>";
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
    

        </div> 
        </div>  
       


    <?php get_footer(); ?>
  
    