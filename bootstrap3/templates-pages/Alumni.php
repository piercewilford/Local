<?php
/**
 * Template Name: OFA Alumni
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<?php

 echo "<div class='hero-unit gradient span12' style='width:100%;margin-top:-20px;margin-left:0px;-webkit-border-radius:0px;height:290px;'>";
                            echo "<p class='span3'>";
                            echo "<img class='span3' style='box-shadow: 5px 5px 2px #888888;border-radius:5px;' src='http://optionsforanimals.com/wp-content/uploads/2013/09/xBDv5j7n8rBYx9-FdoVecu0609Tbd8uH0xvbPO_BnN0.jpeg' alt='bug'>";
                            echo "</p>"; // span3
                            echo "<div class='span5'>";
                              echo "<h1 class='span11' style='color:white;'>";
                                echo "Alumni";
                              echo "</h1>";
                              echo "<div class='span8' style='color:white;'>";
                              echo "Staying on top of your game is now easier than ever! Strive for excellence; be the best Animal Chiropractor you can be… our animals are depending on it!";
                              echo "</div>";
                              echo "</div>";
                              
                           echo "</div>";// hero
?>


<div class="row-fluid sk" style="width:1024px;margin-left:auto;margin-right:auto;">
<!-- <div class="span1"></div> -->
<div class="span12">  

 

<!-- <img id="float" class="span1" style="float:right;" src="http://optionsforanimals.com/wp-content/uploads/2013/07/bug-final.png" alt="bug"> -->

      <!-- <div class="row fluid"> -->
             <?php query_posts( array('category_name' => 'Alumni'));
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
                               echo "<div style='margin-top:20px;height:300;'>";
                              substr(the_excerpt(), 0,100);
                              echo "<div style='margin-left:auto;margin-right:auto;box-shadow:5px 5px 5px #888888;width:90%;'>";
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
                <a href="http://optionsforanimals.com/notable-alumni/" style="margin:5px;color:white;">Notable Alumni</a>
            </div>

             <?php query_posts( array('category_name' => 'Notable Alumni'));
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
  
    