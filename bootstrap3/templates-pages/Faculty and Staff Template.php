<?php
/**
 * Template Name: OFA Faculty and Staff Directory
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>



 <div class="hero-unit gradient span12" style="width:100%;margin-top:-20px;margin-left:0;-webkit-border-radius:0px;height:200px;">
         <div class="container span9">
          <div class="span9">
            <h1 style="color:white;">Faculty and Staff</h1>
            <!-- <p style="color:white;">Local hotels welcome all Options for Animals students. Here are a few of them.</p> -->
          </div>
                        
         </div>
      </div>

         <script type="text/javascript">
                       // $(document).ready(function () {

                          jQuery(".btn btn-warning").click(function() {

                                var idbutton = $(this).data("id");
                              ("#advanced" + idbutton).modal('show');


                          });

                      // });
                                                                                    
                      </script>  

<div class="row-fluid sk">
<div class="span12">  

 
             <?php query_posts( array('post_type' => 'staff', 'order' => 'ASC'));
                while (have_posts()) : the_post(); 
                $id = get_the_id();
                $qualifications = get_post_meta($id, 'qualifications', true);
                $affiliations = get_post_meta($id, 'Affiliations', true);
                $experience = get_post_meta($id, 'Experience', true);
                $content = get_the_content();


                          echo "<ul class='thumbnails'>";
                        echo "<li class='span10 clearfix'>";
                          echo "<div class='thumbnail clearfix'>";
                            echo "<div alt='ALT NAME' class='pull-left span2 clearfix' style='margin-right:10px;width:150px;'>";
                            the_post_thumbnail();
                            echo "</div>";
                           echo " <div class='caption' class='pull-left'>";
                              // echo "<a href='http://bootsnipp.com/' class='btn btn-primary icon  pull-right'>Select</a>";
                              echo "<a href='#advanced$id' role='button' data-id='$programid' data-toggle='modal' class='btn btn-primary pull-right' style='margin-top:50;'>View Bio
                  </a>";
                              echo "<h4>  ";    
                              echo "<a href='";
                              the_permalink();
                              echo "' >";
                              the_title();
                              echo "</a>";
                              echo "</h4> ";
                              echo $qualifications;
                              echo "</br>";
                              echo $affiliations;
                            echo "</div>";
                          echo "</div>";
                        echo "</li> ";
                        echo "</ul>";

                        echo "<div id='advanced$id' class='container modal hide fade aria-labelledby='advancedSort' aria-hidden='true'>";
                        echo substr($content, 0, 2000);
                        echo "</br>";
                        echo "<a href='";
                        the_permalink();
                        echo "'>";
                        echo "<strong>Read more...</strong>";
                        echo "</a>";
                         echo "</div>";


                          // echo "<div class='span3' style='margin-left:10px;'>";
                          //   echo "<div class='card' style='box-shadow:5px 5px 5px #888888;'>";
                          //     echo "<div class='card-heading simple' style='background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;'>";
                          //      echo "<a style='color:white;' href='";
                          //       the_permalink();
                          //       echo "'>";
                          //       the_title();
                          //       echo "</a>";
                          //     echo "</div>";
                          //       echo "<div class='card-body'>";
                          //      echo "<div style='margin-top:20px;'>";
                          //     substr(the_excerpt(), 0,100);
                          //     echo "</div>"; 
                          //   echo "</div>";
                          //   echo "<div class='card-media' style=height:60%;width:80%;margin-left:auto;margin-right:auto;>";
                          //     echo "<div style='margin-left:auto;margin-right:auto;'>";
                          //     the_post_thumbnail();
                          //     echo "</div>";
                          //     echo "</div>";
                              
                          //  echo "</div>";
                          // echo "</div>";
              endwhile; // end of the loop. ?>
    

        </div> 
        </div>  
       


    <?php get_footer(); ?>
  
    