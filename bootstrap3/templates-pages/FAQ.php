<?php
/**
 * Template Name: OFA FAQ's template
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

    
  <div class="row-fluid sk">
<!-- <div class="span1"></div> -->
<div class="span9 sk">  

 
<header class="page-title">
        <h3><?php the_title();?></h3>
    </header>


    <div class="row content well">

    <?php 


			query_posts( array('category_name' => 'FAQ'));


while (have_posts()) : the_post(); 
$id = get_the_id();


  echo "<div class='accordion-group'>";
    echo "<div class='accordion-heading' style='font-size:12pt;'>";
      echo "<a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#$id'>";
        the_title();
      echo "</a>";
    echo "</div>";
    echo "<div id='$id' class='accordion-body collapse'>";
     echo "<div class='accordion-inner' style='font-size:11pt;'>";
        the_content();
      echo "</div>";
   echo "</div>";
  echo "</div>";

  
         endwhile; // end of the loop. ?>
       
         </div>

        </div> 
        <?php 
        echo "<div pull>";
        get_sidebar();
        echo "</div>";  
        ?>  
        </div>  
        </div>    
  
    <?php get_footer(); ?>