<?php
/**
 * Template Name: Page - Static Home BS3
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="jumbotron">
        </div
<div class="row">
           
<div class="navbar navbar-inverse" style="-webkit-border-radius:0px;">
    <div class="navbar-inner2" style="-webkit-border-radius:0px;!important background-image:#333366;">
        <div class="container-fluid" style="-webkit-border-radius:0px;">
        </div>
        <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
</div>
<!--/.navbar -->
<div class="alert alert-warning" style="-webkit-border-radius:0px;">
    <div class="row" style="-webkit-border-radius:0px;-moz-border-radius:0;">
    <h4 style="color:red; display: block; text-align: center; font-size:23px; font-weight:200;margin-top:-40px;margin-bottom:-7px;width:1000;margin-left:auto;margin-right:auto;"> <?php query_posts( array('category_name' => 'Home Alert'));
                while (have_posts()) : the_post(); 
                the_content();
                endwhile; // end of the loop. 
                wp_reset_query(); ?>
            </h4>
</div>
</div>
<section class="main">
                <ul class="ch-grid" style="margin-top:5px;">
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                 <a href="<?php echo site_url() ?>/animal-owners"><h3>Animal Owners</h3></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="<?php echo site_url() ?>/prospective-students"><h3>Prospective Students</h3></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info">
                                <a href="<?php echo site_url() ?>/alumni"><h3>Current Students &amp; Alumni</h3></a>
                            </div>
                        </div>
                    </li>
                </ul> 
            </section>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>