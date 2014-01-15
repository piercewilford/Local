<?php
/**
 * Template Name: Registration Confirmation
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  
<div class="row-fluid sk">
<!-- <div class="span1"></div> -->
<div class="span9 sk">  

 
<!-- <header class="page-title">
        <h3>Registration Complete!</h3>
    </header> -->

  <div class="row content well">
  
         <h1 style="text-align: center;"><strong><img src-full="http://optionsforanimals.com/wp-content/uploads/2013/10/OFA_logo-e1380649177746.png" src="http://optionsforanimals.com/wp-content/uploads/2013/10/OFA_logo-300x205.png" alt="OFA_logo" height="164" width="240" class=" wp-image-2616 aligncenter" /></strong></h1>
<h1 style="text-align: center;"></h1>

<h1 style="text-align: center;"><strong>Welcome, and thanks for registering!</strong></h1>
<h3 style="text-align: center;"> Now that you're a member of the site you have access to much more!</h3>
</br>

<?php $ofaid = $_GET['OFACID']; 
$link = get_permalink($ofaid);?>

<?php 
if ($ofaid > '0'){
  echo "<div class='span12' style='text-align:center;padding-bottom:30px;'>";
  echo "<h3 style='color:red;'>You were trying to register for a course before. <a href='";
  echo $link;
  echo "'><button class='btn btn-primary'>Continue your course registration here</button></a></h3>";
  echo "</div>";
  echo "</br>";
  echo "</br>";
  echo "</br>";
}
else {
  echo "";
}
?>

<div class="span3" style="text-align:center;">

Click the button below to view our upcoming courses and enroll in courses
</br>
</br>
<a href="http://optionsforanimals.com/courses/">
<div class="btn btn-primary" style="width:100%">Upcoming Courses</div>
</a>
</div>

<div class="span1"></div>

<div class="span3" style="text-align:center;">

Click this button to get in touch with your friends and classmates in The Barn
</br>
</br>
<a href="http://optionsforanimals.com/thebarn/">
<div class="btn btn-primary" style="width:100%">The Barn</div>
</a>
</div>

<div class="span1"></div>

<div class="span3" style="text-align:center;">

Click the button below to start back at the home page and continue browsing
</br>
</br>
<a href="http://optionsforanimals.com">
<div class="btn btn-primary" style="width:100%">Home</div>
</a>
</div>  
       
        </div>

        </div> 
       <div pull>
        <?php get_sidebar(); ?>
    </div>
        </div>  
        </div>      
    
    <?php get_footer(); ?>