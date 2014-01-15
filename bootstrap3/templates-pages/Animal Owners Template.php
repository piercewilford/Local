<?php
/**
 * Template Name: OFA Animal Owners
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class='hero-unit gradient col-md-12' style='width:100%;margin-top:-20px;margin-left:0px;-webkit-border-radius:0px;height:290px;'>
          <p class='col-md-3'>
            <img class='col-md-3' style='box-shadow: 5px 5px 2px #888888;border-radius:5px;' src='http://optionsforanimals.com/wp-content/uploads/2013/06/boy_dog_2.jpg' alt='bug'>
                <div class='col-md-7'>
                <h1 class='col-md-11' style="color:white;">
                          Animal Owners
                            </h1>
                            <div class='col-md-8' style="color:white;">
                            Animals lift our lives and touch our hearts. At Options for Animals, they are more than just a pet, they are a part of your family. As a result, we’ll do everything we can to make sure they are happy and comfortable during treatment.
                            </div>
                            </div>
                           </div>
<div class="sk row" style="width:1024px;margin-left:auto;margin-right:auto;">
<div class="col-md-12">  
             <?php query_posts( array('category_name' => 'Animal Owners', 'order' => 'ASC'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();    
                        echo "<div class='col-md-4' style='margin-left:10px;'>";
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
        </div> 
</div> 
    <?php get_footer(); ?>