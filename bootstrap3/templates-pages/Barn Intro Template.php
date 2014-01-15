<?php
/**
 * Template Name: Barn Intro
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  
<div class="row-fluid sk">
<!-- <div class="span1"></div> -->
<div class="span12 sk">  

 
<!-- <header class="page-title">
        <h3>Registration Complete!</h3>
    </header> -->

  <div class="row content well">
  
         <h1 style="text-align: center;"><strong><img src-full="http://optionsforanimals.com/wp-content/uploads/2013/10/OFA_logo-e1380649177746.png" src="http://optionsforanimals.com/wp-content/uploads/2013/10/OFA_logo-300x205.png" alt="OFA_logo" height="164" width="240" class=" wp-image-2616 aligncenter" /></strong></h1>
<h1 style="text-align: center;"></h1>

<h1 style="text-align: center;"><strong>Welcome to TheBarn™</strong></h1>
<h3 style="text-align:center;"><strong>The Barn is Options for Animals very own social networking portal.</strong></h3>
<h3 style="text-align: center;">Access to the barn is restricted to enrolled students only.</br>
 <a href="http://optionsforanimals.com/courses/"><div class="btn btn-danger" style="margin-right:2%;margin-top:1%;width:150px;height:50px;font-size:12pt;padding-top:12px;">Enroll Here!</div></a>
</br>
With access to TheBarn™ </br> you can:
</h3>
</br>

<?php $ofaid = $_GET['OFACID']; 
$link = get_permalink($ofaid);?>



<div class="span3 well-nongradient" style="text-align:center;">

<p>Connect with students to discuss carpooling and lodging options.</p>
</div>

<div class="span1"></div>

<div class="span3 well-nongradient" style="text-align:center;">

Collaborate with other students to get help or help others with material.

</div>

<div class="span1"></div>

<div class="span3 well-nongradient" style="text-align:center;">

Reach out to instructors to ask any and every question you have.

</div>  
       
        </div>

        </div> 
       
        </div>  
        </div>      
    
    <?php get_footer(); ?>