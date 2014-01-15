<?php
/**
 * Template Name: Page - Static Home BS2
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row-fluid">
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
               <div class="active item">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/slide-01.jpg" alt="">    
                        <div class="container">
                            <div class="carousel-caption" style="margin-top:375px;">
                            
                            <h2 class="lead" style="color: white;">Expanding relationships and improving animal life.</h2>
                            
                            </div>
                        </div> 
                </div>
                <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/slide-02.jpg" alt="">    
                        <div class="container">
                            <div class="carousel-caption" style="margin-top:375px;">
                            
                            <h2 class="lead">Encouraging active and engaged learning using traditional tools, up to date technology and live animals to develop correct techniques.</h2>
                          
                            </div>
                        </div> 
                </div>
                <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/slide-03.jpg" alt="">    
                        <div class="container">
                            <div class="carousel-caption" style="margin-top:375px;">
                           
                            <p class="lead">Celebrating 25 years of educational excellence in animal chiropractic as the only global school whose sole focus is the animal.</p>
                            </div>
                        </div> 
                </div>  
                <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/slide-05.jpg" alt="">    
                        <div class="container">
                            <div class="carousel-caption" style="margin-top:375px;">
                            <p class="lead">The oldest and most experienced animal chiropractic teaching institution in the world.</p>
                            </div>
                        </div> 
                </div>       
        </div>
    </div>
    <a class="carousel-control left" href="carousel.html#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="carousel.html#myCarousel" data-slide="next">&rsaquo;</a> 
</div><!-- /.carousel -->
<div class="navbar navbar-inverse" style="-webkit-border-radius:0px;">
    <div class="navbar-inner2" style="-webkit-border-radius:0px;!important background-image:#333366;">
        <div class="container-fluid" style="-webkit-border-radius:0px;">
        </div>
        <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
</div>
<!--/.navbar -->
<div class="alert alert-block" style="-webkit-border-radius:0px;">
    <div class= "fluid row" style="-webkit-border-radius:0px;-moz-border-radius:0;">
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
                                <a href="<?php echo site_url() ?>/alumni"><h3>Current Students & Alumni</h3></a>
                            </div>
                        </div>
                    </li>
                </ul> 
            </section>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>