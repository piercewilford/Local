<?php
/**
 * Template Name: Payment Confirmation
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
        <h3>Confirmation</h3>
    </header>

  <div class="row content well">
  
         <h1 style="text-align: center;"><strong><img src-full="<?php echo site_url('/wp-content/uploads/2013/10/OFA_logo-e1380649177746.png', 'http'); ?>" src="http://optionsforanimals.com/wp-content/uploads/2013/10/OFA_logo-300x205.png" alt="OFA_logo" height="164" width="240" class=" wp-image-2616 aligncenter" /></strong></h1>
<h1 style="text-align: center;"></h1>

<h1 style="text-align: center;"><strong>Thank you for your payment!</strong></h1>
<h3 style="text-align: center;">You are enrolled in the course.</h3>
</br>


<div class="span12" style="text-alight:center;padding-bottom:30px;">
  <h3 style="color:red;text-align:center;">Click here to return to your invoice to continue making payments.
  </br>
<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
  <button class="btn btn-primary"> Return to my Invoice</button>
</a>
  </h3>
</div>
</br>
</br>
</br>

<div class="span3" style="text-align:center;">

Click the button below to view our upcoming courses and enroll in a course.
</br>
</br>
<a href="<?php echo site_url('/courses/', 'http'); ?>">
<div class="btn btn-primary" style="width:100%">Upcoming Courses</div>
</a>
</div>

<div class="span1"></div>

<div class="span3" style="text-align:center;">

Click this button to get in touch with your friends and new classmates in The Barn
</br>
</br>
<a href="<?php echo site_url('/thebarn/', 'http'); ?>">
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