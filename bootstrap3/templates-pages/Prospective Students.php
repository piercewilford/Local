<?php
/**
 * Template Name: Prospective Students
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php

 echo "<div class='hero-unit gradient span12' style='width:100%;margin-top:-20px;margin-left:0px;-webkit-border-radius:0px;height:290px;'>";
                            echo "<p class='span2'>";
                            echo "<img class='span2' style='box-shadow: 5px 5px 2px #888888;border-radius:5px;margin-top:-25%;' src='http://optionsforanimals.com/wp-content/uploads/2013/09/photoalumniwithdog.jpg' alt='bug'>";
                            echo "</p>"; // span3
                            echo "<div class='span8'>";
                              echo "<h1 class='span11' style='color:white;'>";
                                echo "Prospective Students";
                              echo "</h1>";
                              echo "<div class='span8' style='color:white;'>";
                              echo "Chiropractic care for animals is one of the fastest growing and most valuable occupations available in animal healthcare today.";
                              echo "</div>";
                              echo "</div>";
                              
                           echo "</div>";// hero
?>

<div class="row-fluid sk" style="width:1024px;margin-left:auto;margin-right:auto;">
<div class="span12">  


       <?php query_posts( array('category_name' => 'Prospective Students', 'orderby' => 'date', 'order' => 'ASC'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                          echo "<div class='span4' style='margin-left:10px;'>";
                            echo "<div class='card' style='box-shadow:5px 5px 5px #888888;height:360px;'>";
                              echo "<div class='card-heading simple' style='background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;height:61px;'>";
                               echo "<a style='color:white;' href='";
                                the_permalink();
                                echo "'>";
                                the_title();
                                echo "</a>";
                              echo "</div>";
                                echo "<div class='card-body'>";
                               echo "<div style='margin-top:20px;height:90%;'>";
                              substr(the_excerpt(), 0,100);
                              echo "<div style='margin-left:auto;margin-right:auto;box-shadow:5px 5px 5px #888888;width:90%;'>";
                              the_post_thumbnail();
                              echo "</div>";
                              echo "</div>"; 
                            echo "</div>";
                            
                               echo "</div>";
                              echo "</div>";
              endwhile; // end of the loop. ?>

               <?php query_posts( array('category_name' => 'Videos'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                           echo "<div class='span4' style='margin-left:10px;'>";
                            echo "<div class='card' style='box-shadow:5px 5px 5px #888888;height:360;'>";
                              echo "<div class='card-heading simple' style='background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;height:61px;'>";
                               echo "<a style='color:white;' href='";
                                the_permalink();
                                echo "'>";
                                the_title();
                                echo "</a>";
                              echo "</div>";
                                echo "<div class='card-body'>";
                               echo "<div style='margin-top:20px;'>";
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
        <div class="card" style="box-shadow:5px 5px 5px #888888;height:360;">
            <div class="card-heading simple" style="background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;height:61px;">
                <a href="http://optionsforanimals.com/coming-soon" style="color:white;"><p style="margin:5px;">Student Life</p></a>
            </div>

             <?php query_posts( array('category_name' => 'Student Life'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                          
                              echo "<div class='card-body'>";
                             
                               substr(the_excerpt(), 0,100);
                            echo "</div>";
                           
              endwhile; // end of the loop. ?>

                      
        </div><!-- card -->
    </div><!-- span3 -->
    

      <!-- <div class="row fluid"> -->
      <div class="span4" style="margin-left:10px;">
        <div class="card" style="box-shadow:5px 5px 5px #888888;height:360;">
            <div class="card-heading simple" style="background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;height:61px;">
                <a href="http://optionsforanimals.com/lodging/"><p style="margin:5px;color:white;">Lodging</p></a>
            </div>

             <?php query_posts( array('post_type' => 'Hotels'));
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

                      
        </div><!-- card -->
    </div><!-- span3 -->

    <div class="span4" style="margin-left:10px;">
      <div class="card" style="box-shadow:5px 5px 5px #888888;height:360;">
        <div class="card-heading simple" style="background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;height:61px;">
          <p style="margin:5px;">Airlines to Kansas City</p>
        </div>
            <div class="card-body">
              <a href="http://www.united.com/web/en-US/default.aspx?root=1" target="_blank">United Airlines</a>
            </div>
            <div class="card-body">
              <a href="http://www.delta.com/" target="_blank">Delta Airlines</a>
            </div>
            <div class="card-body">
              <a href="http://www.aa.com/homePage.do" target="_blank">American Airlines</a>
            </div>
            <div class="card-body">
              <a href="http://www.airtran.com/Home.aspx" target="_blank">Air Tran Airways</a>
            </div>

      </div>
    </div>

     <div class="span4" style="margin-left:10px;">
      <div class="card" style="box-shadow:5px 5px 5px #888888;height:360;">
        <div class="card-heading simple" style="background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;height:61px;">
          <p style="margin:5px;">Car Rentals near Airport</p>
        </div>
            <div class="card-body">
              <a href="http://www.enterprise.com/car_rental/deeplinkmap.do?gpbr=05C1&bid=004&cnty=US" target="_blank">Enterprise rent-a-car</a>
            </div>
            <div class="card-body">
              <a href="http://www.hertz.com/rentacar/location/index.jsp?targetPage=locationDetailsView.jsp&eoag=MCIT11" target="_blank">Hertz</a>
            </div>
            <div class="card-body">
              <a href="http://www.avis.com/car-rental/html/landing/kansascity-rental.html" target="_blank">Avis</a>
            </div>
            <div class="card-body">
              <a href="http://www.budget.com/budgetWeb/html/rentals/kansascity-rental.html" target="_blank">Budget</a>
            </div>

      </div>
    </div>


        </div> <!-- row fluid -->
        </div>   <!-- span12 -->


    <?php get_footer(); ?>
    
    
