<?php
/**
 * Template Name: Contact Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<header class="page-title sk">
 <h3><?php the_title();?></h3>
</header>
        <div class="row-fluid span12">
                <div class="container-fluid">  
                     <div class="row-fluid span9 content well">
                        <div class="row-fluid span3">
                             <img class="alignleft" style="padding-right: 20px; padding-bottom: 200px;" alt="Robbie Hroza, VP of Operations" src="<?php echo site_url() ?>/wp-content/uploads/2014/01/robbie_hroza.jpg" width="183" height="249" />
                        </div>
                        <div class="row-fluid">
                            <h3><strong>Robbie Hroza, VP of Operations</strong></h3>
                                For questions and general information on any of our courses or to just say Hello,
                                please contact Robbie at the Registration and Administration Department or
                                use the handy contact form below.
                        </div>
                        <div class="row-fluid">
                            <div class="accordion" style="background-color:transparent;">
                                    <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#corresp"></p>
                                            <div class="btn btn-primary">Correspondences to:</div><p></a>
                                     </div>
                                 </div>
                                </div>
                                    <div class="accordion-body collapse" id="corresp">
                                     <div class="accordion-inner">PO Box 3682 Cartersville, GA 30120
                                     </div>
                                     <div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#main"></p>
                            <div class="btn btn-primary">Main Campus
                            </div><p></a>
                        </div>

                    <div class="accordion-body collapse" id="main"><div class="accordion-inner">4267 Virginia Rd. Wellsville, KS 66092</div></div>
                    </div>
                    </div>
                    <strong>Phone:&nbsp&nbsp</strong> (+1) 309-658-2920 &nbsp&nbsp&nbsp<strong>Fax:&nbsp&nbsp&nbsp</strong>(+1) 678-721-2523</em><strong>&nbsp&nbsp&nbspEmail:</strong><a href="mailto:robbie@optionsforanimals.com">robbie@optionsforanimals.com</em></em></em></a>
                <h4 style="text-align: justify;">Office Hours: Monday to Friday – 8:30 am to 4:30 pm (United States Central Time)</h4>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
    </div>
    </div>
    </div>
<div class="row-fluid span3">
        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
