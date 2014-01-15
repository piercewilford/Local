<?php
/**
 * Template Name: Find A Doctor(Europe) Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>


  
<div class="row-fluid sk">
<!-- <div class="span1"></div> -->
<div class="span12">  

 
<header class="page-title">
        <h3>Select a state and view the doctors in that state below the map.</h3>
        <a href="http://optionsforanimals.com/find-a-doctor/?state_name=select"><button style="float:right;font-family:inherit;" class="btn btn-primary">For US Map Click Here</button></a>
    </header>

    <a href="http://optionsforanimals.com/listings"><h4>Click here to view Doctors in list view</h4></a>

   <?php  $country = $_GET['country']; ?>

<iframe src="http://createaclickablemap.com/map.php?id=16265&online=true" width="800" height="467" style="border: none;"></iframe>
<script>if (window.addEventListener){ window.addEventListener("message", function(event) { if(event.data.length >= 22) { if( event.data.substr(0, 22) == "__MM-LOCATION.REDIRECT") location = event.data.substr(22); } }, false); } else if (window.attachEvent){ window.attachEvent("message", function(event) { if( event.data.length >= 22) { if ( event.data.substr(0, 22) == "__MM-LOCATION.REDIRECT") location = event.data.substr(22); } }, false); } </script>

<div class="row-fluid sk" style="width:1024px;margin-left:auto;margin-right:auto;">
<!-- <div class="span1"></div> -->
<div class="span12">  

 

<!-- <img id="float" class="span1" style="float:right;" src="http://skunkboxstudios.com/dev/wp-content/uploads/2013/07/bug-final.png" alt="bug"> -->

      <!-- <div class="row fluid"> -->
             <?php query_posts( array('post_type' => 'directory_listing', 'listing_category' => $country));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                          echo "<div class='span4' style='margin-left:10px;'>";
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
