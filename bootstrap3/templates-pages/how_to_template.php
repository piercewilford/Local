<?php
/**
 * Template Name: How To Page Template
 * Description: Displays a page title and content without displaying a sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
     <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>/wp-content/themes/ofa/assets/css/default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>/wp-content/themes/ofa/assets/css/component.css" />
        <script type="text/javascript" src="<?php echo site_url() ?>/wp-content/themes/ofa/assets/js/modernizr.custom.js"></script> 

        <div class="container-fluid center trees white fold20 z1000 top-margin">
            <div class="row-fluid">
                <div class="span12 sk">
                    <h1 class="white pull-left">
                    Getting Started in 4 Easy Steps...
                    </h1>
                </div>
            </div>
            <div class="row-fluid">
                 <?php if ( is_user_logged_in() ) { ?>
                       <div class="span3">           
                    <ul class="grid cs-style-3">
                        <li>
                            <div class="completebrightness"> 
                                <div id="registrationwidget">                                 
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/hello.png"></a>
                                </div>
                            </div> 
                            <img class="checkmark" src="http://skunkboxstudios.com/ofatest/wp-content/uploads/2014/01/check-e1389036824890.png" />
                        </li>
                         <p class="completebrightness">First provide some basic information. Then choose a user name, and password for added protection.</p>
                    </ul>
                </div>
                <?php }
                else { ?>
                     <div class="span3 ">
                    <ul class="grid cs-style-3">
                        <li>
                                <figure>
                                    <div id="registrationwidget">
                                    <a href="#myModal" data-toggle="modal" data-target="#myModal"><img src="<?php echo get_template_directory_uri();?>/assets/img/hello.png"></a>
                                    </div>
                                    <figcaption>
                                        <h3>Start Here.</h3><p>
                                        <a href="#"><i class="fa fa-2x fa-hand-o-up"></i></a>
                                    </figcaption>
                                </figure>
                        </li>
                         <p>First provide some basic information. Then choose a user name, and password for added protection.</p>
                    </ul>
                </div>
              <?php  }

               get_currentuserinfo();
                    $user_id = $current_user->ID;

              $profilecompletionquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id";
             $profilecompletionresult = mysql_query($profilecompletionquery);
             if (mysql_num_rows($profilecompletionresult) > 0 && mysql_num_rows($profilecompletionresult) <= 34) { 
               if (mysql_num_rows($profilecompletionresult) < 5) {
                $progressbar = 

                "Your Profile is 15% complete:
                <div class='progress progress-danger progress-striped'>
                            <div class='bar' style='width: 15%'></div>
                            </div>";
              }
                elseif (mysql_num_rows($profilecompletionresult)<=9 && mysql_num_rows($profilecompletionresult)>=5) { 

                 $progressbar =  "<p>Your Profile is 15% complete:</p><div class='progress progress-danger progress-striped'>
                            <div class='bar' style='width: 30%'></div>
                            </div>";
                
                }

                elseif (mysql_num_rows($profilecompletionresult)<=14 && mysql_num_rows($profilecompletionresult)>=10) { 

                 $progressbar =  "<p>Your Profile is 42% complete:</p><div class='progress progress-danger progress-striped'>
                            <div class='bar' style='width: 42%'></div>
                            </div>";
                
                } 

                elseif (mysql_num_rows($profilecompletionresult)<=19 && mysql_num_rows($profilecompletionresult)>=15) { 

                 $progressbar =  "<p>Your Profile is 65% complete:</p><div class='progress progress-warning progress-striped'>
                            <div class='bar' style='width: 65%'></div>
                            </div>";
                
                }

                elseif (mysql_num_rows($profilecompletionresult)<=24 && mysql_num_rows($profilecompletionresult)>=20) { 

                 $progressbar =  "<p>Your Profile is 73% complete:</p><div class='progress progress-warning progress-striped'>
                            <div class='bar' style='width: 73%'></div>
                            </div>";
                
                }

                elseif (mysql_num_rows($profilecompletionresult)<=29 && mysql_num_rows($profilecompletionresult)>=25) { 

                 $progressbar =  "<p>Your Profile is 85% complete:</p><div class='progress progress-warning progress-striped'>
                            <div class='bar' style='width: 85%'></div>
                            </div>";
                
                }

                elseif (mysql_num_rows($profilecompletionresult)<=34 && mysql_num_rows($profilecompletionresult)>=30) { 

                 $progressbar =  "<p>Your Profile is 95% complete:</p><div class='progress progress-warning progress-striped'>
                            <div class='bar' style='width: 95%'></div>
                            </div>";
                
                }?>

                 <div class="span3">
                    <ul class="grid cs-style-3">
                        <li>
                            <figure>
                                <a href="#profileModal" data-toggle="modal"><img src="<?php echo get_template_directory_uri();?>/assets/img/profile.png"></a>
                                <figcaption>
                                    <h3>Let's Get to Know You.</h3>
                            </figcaption>
                            </figure>
                            <?php echo $progressbar; ?> 
                        </li>
                        <p style="margin-top:-37px;">Next you’ll fill out your Professional Profile, Student Profile, and tell us some more about yourself.</p>
                    </ul>
                </div>

                <?php }
                elseif (mysql_num_rows($profilecompletionresult) >= 35){ ?>

                    <div class="span3">
                    <ul class="grid cs-style-3">
                        <li>
                            <figure>
                                <div class="completebrightness">
                                <a href="#profileModal" data-toggle="modal" data-target="#profileModal"><img src="<?php echo get_template_directory_uri();?>/assets/img/profile.png"></a>
                            </div>
                                <figcaption>
                                    <h3>Let's Get to Know You.</h3>
                            </figcaption>
                            </figure>
                             <img class="checkmark" src="http://skunkboxstudios.com/ofatest/wp-content/uploads/2014/01/check-e1389036824890.png" />
                        </li>
                        <p class="completebrightness">Next you’ll fill out your Professional Profile, Student Profile, and tell us some more about yourself.</p>
                    </ul>
                </div>

                <?php } 

                else {

                    ?>
                    <div class="span3">
                    <ul class="grid cs-style-3">
                        <li>
                            <figure>   
                                <a href="#profileModal" data-toggle="modal" data-target="#profileModal"><img src="<?php echo get_template_directory_uri();?>/assets/img/profile.png"></a>
                                <figcaption>
                                    <h3>Let's Get to Know You.</h3>
                            </figcaption>
                            </figure>

                        </li>
                        <p>Next you’ll fill out your Professional Profile, Student Profile, and tell us some more about yourself.</p>
                    </ul>
                </div>
             <?php   }
                ?>

                 <div class="span3 ">
                    <ul class="grid cs-style-3">
                        <li>
                            <div>
                                <figure>
                                    <a href="#enrollModal" data-toggle="modal" data-target="#enrollModal"><img src="<?php echo get_template_directory_uri();?>/assets/img/enroll.png"></a>
                                <figcaption>
                                        <h3>Now let's find a Program!</h3>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <p>Next, search for the class or program you’re interested in, then press the "Enroll" button. It's that easy!</p>
                    </ul>
                </div>
                  <div class="span3 ">
                    <ul class="grid cs-style-3">
                        <li>
                            <div>
                                <figure>

                                    <?php if (!is_user_logged_in() ) { ?>
                                    <a href="#invoiceModal" data-toggle="modal"><img src="<?php echo get_template_directory_uri();?>/assets/img/pay.png"></a>
                                    <?php }
                                    else { ?>
                                    <a href="<?php echo site_url(); ?>/your-invoices/"><img src="<?php echo get_template_directory_uri();?>/assets/img/pay.png"></a>
                                    <?php } ?>
                                    <figcaption>
                                        <h3>Click Here for your Invoices.</h3>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <p>Finish the process by paying on-line or over the phone, and we will send you a Welcome Packet. Welcome to the family!</p>
                    </ul>
                </div>
                <!--  MODAL WINDOWS -->
            </div style="width:100%">
            <div id="invoiceModal" style="margin-left:38%;width:300px;" class="modal form-horizontal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">You need to be logged in to continue</h3>
                  </div>
                  <div class="modal-body">
                    <ul><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Fill Out Profile Widget')) :
endif; ?></ul>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Close</button>
                  </div>
                </div>
            <div id="enrollModal" style="margin-left:35%;"class="modal form-horizontal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel" style="text-align:center;">I want to enroll in:</h3>
                  </div>
                  <div class="modal-body">
                  <a href="<?php echo site_url('/courses/', 'http'); ?>"><button class="btn btn-primary" style="width:300px;height:50px;margin-top:20px;margin-bottom:15px;margin-left:auto;margin-right:auto;">Undergraduate Courses</button></a>
              </br>
          </br>
                  <a href="<?php echo site_url('upcoming-advanced-courses', 'http'); ?>"><button class="btn btn-primary" style="width:300px;height:50px;margin-top:20px;margin-bottom:15px;margin-left:auto;margin-right:auto;">CE/Advanced Courses</button></a>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancel</button>
                  </div>
                </div>
                <div id="myModal" style="margin-left:25%;width:50%;height:50%;text-align:center;" class="modal form-horizontal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Login or Create an Account</h3>
                  </div>
                  <div class="modal-body">
                    <ul style="margin:0px;"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Fill Out Profile Widget')) :
endif; ?></ul>
                  </div>
                  <!-- <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                  </div> -->
                </div>
                  <div id="profileModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Profile Information</h3>
                    <p>You can change this information later by editing your profile in TheBarn™</p>
                  </div>
                  <div class="modal-body">
                    <?php 

                    if (isset($_POST['submit'])) {

                       wp_redirect(site_url('/how-to', 'http'), 301);

                      global $wpdb;

                        global $current_user;
                    get_currentuserinfo();
                    $user_id = $current_user->ID;

                   $fnamequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 1";
                    $fnameresult = mysql_query($fnamequery);
                    if ($_POST[fname] != "") {
                    if (mysql_num_rows($fnameresult) > 0){
                     $fname = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[fname]'
                     WHERE user_id = $user_id
                     AND field_id = 1";
                     mysql_query($fname);
                     }
                     else {
                        $fnameadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (1, $user_id, '$_POST[fname]')";
                        mysql_query($fnameadd);
                     }
                 }

                   $lnamequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 2";
                    $lnameresult = mysql_query($lnamequery);
                    if ($_POST[lname] != "") {
                    if (mysql_num_rows($lnameresult) > 0){
                     $lname = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[lname]'
                     WHERE user_id = $user_id
                     AND field_id = 2";
                     mysql_query($lname);
                     }
                     else {
                        $lnameadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (2, $user_id, '$_POST[lname]')";
                        mysql_query($lnameadd);
                     }
                 }

                     $cphonequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 3";
                    $cphoneresult = mysql_query($cphonequery);
                    if ($_POST[cphone] != "") {
                    if (mysql_num_rows($cphoneresult) > 0){
                     $cphone = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[cphone]'
                     WHERE user_id = $user_id
                     AND field_id = 3";
                     mysql_query($cphone);
                     }
                     else {
                        $cphoneadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (3, $user_id, '$_POST[cphone]')";
                        mysql_query($cphoneadd);
                     }
                 }
                 

                    $wphonequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 4";
                    $wphoneresult = mysql_query($wphonequery);
                    if ($_POST[wphone] != "") {
                    if (mysql_num_rows($wphoneresult) > 0){
                     $wphone = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[wphone]'
                     WHERE user_id = $user_id
                     AND field_id = 4";
                     mysql_query($wphone);
                     }
                     else {
                        $wphoneadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (4, $user_id, '$_POST[wphone]')";
                        mysql_query($wphoneadd);
                     }
                 }

                    $faxquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 5";
                    $faxresult = mysql_query($faxquery);
                    if ($_POST[fax] != "") {
                    if (mysql_num_rows($faxresult) > 0){
                     $fax = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[fax]'
                     WHERE user_id = $user_id
                     AND field_id = 5";
                     mysql_query($fax);
                     }
                     else {
                        $faxadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (5, $user_id, '$_POST[fax]')";
                        mysql_query($faxadd);
                     }
                 }

                     $companyquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 8";
                    $companyresult = mysql_query($companyquery);
                    if ($_POST[company] != "") {
                    if (mysql_num_rows($companyresult) > 0){
                     $company = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[company]'
                     WHERE user_id = $user_id
                     AND field_id = 8";
                     mysql_query($company);
                     }
                     else {
                        $companyadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (8, $user_id, '$_POST[company]')";
                        mysql_query($companyadd);
                     }
                 }

                     $titlequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 9";
                    $titleresult = mysql_query($titlequery);
                    if ($_POST[title] != "") {
                    if (mysql_num_rows($titleresult) > 0){
                     $title = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[title]'
                     WHERE user_id = $user_id
                     AND field_id = 9";
                     mysql_query($title);
                     }
                     else {
                        $titleadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (9, $user_id, '$_POST[title]')";
                        mysql_query($titleadd);
                     }
                 }

                     $sitequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 10";
                    $siteresult = mysql_query($sitequery);
                    if ($_POST[site] != "") {
                    if (mysql_num_rows($siteresult) > 0){
                     $site = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[site]'
                     WHERE user_id = $user_id
                     AND field_id = 10";
                     mysql_query($site);
                     }
                     else {
                        $siteadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (10, $user_id, '$_POST[site]')";
                        mysql_query($siteadd);
                     }
                 }

                    $emailquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 11";
                    $emailresult = mysql_query($emailquery);
                    if ($_POST[workemail] != "") {
                    if (mysql_num_rows($emailresult) > 0){
                     $email = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[workemail]'
                     WHERE user_id = $user_id
                     AND field_id = 11";
                     mysql_query($email);
                     }
                     else {
                        $emailadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (11, $user_id, '$_POST[workemail]')";
                        mysql_query($emailadd);
                     }
                 }
    

                    $graduationyearquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 12";
                    $graduationyearresult = mysql_query($graduationyearquery);
                    if ($_POST[graduationyear] != "") {
                    if (mysql_num_rows($graduationyearresult) > 0){
                     $graduationyear = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[graduationyear]'
                     WHERE user_id = $user_id
                     AND field_id = 12";
                     mysql_query($graduationyear);
                     }
                     else {
                        $graduationyearadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (12, $user_id, '$_POST[graduationyear]')";
                        mysql_query($graduationyearadd);
                     }
                 }

                    $alumniquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 13";
                    $alumniresult = mysql_query($alumniquery);
                    if ($_POST[alumni] == 'Alumni') {
                    if (mysql_num_rows($alumniresult) > 0){
                     $alumni = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[alumni]'
                     WHERE user_id = $user_id
                     AND field_id = 13";
                     mysql_query($alumni);
                     }
                     else {
                        $alumniadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (13, $user_id, '$_POST[alumni]')";
                        mysql_query($alumniadd);
                     }
                 }
                 
                     elseif ($_POST[alumni] == 'Undergraduate') {
                     if (mysql_num_rows($alumniresult) > 0){
                     $alumni = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[alumni]'
                     WHERE user_id = $user_id
                     AND field_id = 13";
                     mysql_query($alumni);
                     }
                     else {
                        $alumniadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (13, $user_id, '$_POST[alumni]')";
                        mysql_query($alumniadd);
                     }

                 }
         

                  $streetaddressquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 34";
                    $streetaddressresult = mysql_query($streetaddressquery);
                    if ($_POST[streetaddress] != "") {
                    if (mysql_num_rows($streetaddressresult) > 0){
                     $streetaddress = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[streetaddress]'
                     WHERE user_id = $user_id
                     AND field_id = 34";
                     mysql_query($streetaddress);
                     }
                     else {
                        $streetaddressadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (34, $user_id, '$_POST[streetaddress]')";
                        mysql_query($streetaddressadd);
                     }
                 }

                  $streetaddress2query = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 84";
                    $streetaddress2result = mysql_query($streetaddress2query);
                    if ($_POST[streetaddress2] != "") {
                    if (mysql_num_rows($streetaddress2result) > 0){
                     $streetaddress2 = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[streetaddress2]'
                     WHERE user_id = $user_id
                     AND field_id = 84";
                     mysql_query($streetaddress2);
                     }
                     else {
                        $streetaddress2add = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (84, $user_id, '$_POST[streetaddress2]')";
                        mysql_query($streetaddress2add);
                     }
                 }

                     $streetCityquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 35";
                    $streetCityresult = mysql_query($streetCityquery);
                    if ($_POST[streetCity] != "") {
                    if (mysql_num_rows($streetCityresult) > 0){
                     $streetCity = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[streetCity]'
                     WHERE user_id = $user_id
                     AND field_id = 35";
                     mysql_query($streetCity);
                     }
                     else {
                        $streetCityadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (35, $user_id, '$_POST[streetCity]')";
                        mysql_query($streetCityadd);
                     }
                 }

                    $streetStatequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 36";
                    $streetStateresult = mysql_query($streetStatequery);
                    if ($_POST[streetState] != "") {
                    if (mysql_num_rows($streetStateresult) > 0){
                     $streetState = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[streetState]'
                     WHERE user_id = $user_id
                     AND field_id = 36";
                     mysql_query($streetState);
                     }
                     else {
                        $streetStateadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (36, $user_id, '$_POST[streetState]')";
                        mysql_query($streetStateadd);
                     }
                 }

                    $businessaddressquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 17";
                    $businessaddressresult = mysql_query($businessaddressquery);
                    if ($_POST[businessaddress] != "") {
                    if (mysql_num_rows($businessaddressresult) > 0){
                     $businessaddress = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[businessaddress]'
                     WHERE user_id = $user_id
                     AND field_id = 17";
                     mysql_query($businessaddress);
                     }
                     else {
                        $businessaddressadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (17, $user_id, '$_POST[businessaddress]')";
                        mysql_query($businessaddressadd);
                     }
                 }

                 $businessaddress2query = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 85";
                    $businessaddress2result = mysql_query($businessaddress2query);
                    if ($_POST[businessaddress2] != "") {
                    if (mysql_num_rows($businessaddress2result) > 0){
                     $businessaddress2 = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[businessaddress2]'
                     WHERE user_id = $user_id
                     AND field_id = 85";
                     mysql_query($businessaddress2);
                     }
                     else {
                        $businessaddress2add = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (85, $user_id, '$_POST[businessaddress2]')";
                        mysql_query($businessaddress2add);
                     }
                 }

                      $busCityquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 66";
                    $busCityresult = mysql_query($busCityquery);
                    if ($_POST[busCity] != "") {
                    if (mysql_num_rows($busCityresult) > 0){
                     $busCity = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[busCity]'
                     WHERE user_id = $user_id
                     AND field_id = 66";
                     mysql_query($busCity);
                     }
                     else {
                        $busCityadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (66, $user_id, '$_POST[busCity]')";
                        mysql_query($busCityadd);
                     }
                 }

                     $busStatequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 67";
                    $busStateresult = mysql_query($busStatequery);
                    if ($_POST[busState] != "") {
                    if (mysql_num_rows($busStateresult) > 0){
                     $busState = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[busState]'
                     WHERE user_id = $user_id
                     AND field_id = 67";
                     mysql_query($busState);
                     }
                     else {
                        $busStateadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (67, $user_id, '$_POST[busState]')";
                        mysql_query($busStateadd);
                     }
                 }

                    $emergcontactnamequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 18";
                    $emergcontactnameresult = mysql_query($emergcontactnamequery);
                    if ($_POST[emergcontactname] != "") {
                    if (mysql_num_rows($emergcontactnameresult) > 0){
                     $emergcontactname = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[emergcontactname]'
                     WHERE user_id = $user_id
                     AND field_id = 18";
                     mysql_query($emergcontactname);
                     }
                     else {
                        $emergcontactnameadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (18, $user_id, '$_POST[emergcontactname]')";
                        mysql_query($emergcontactnameadd);
                     }
                 }

                     $emergcontactphonequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 19";
                    $emergcontactphoneresult = mysql_query($emergcontactphonequery);
                    if ($_POST[emergcontactphone] != "") {
                    if (mysql_num_rows($emergcontactphoneresult) > 0){
                     $emergcontactphone = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[emergcontactphone]'
                     WHERE user_id = $user_id
                     AND field_id = 19";
                     mysql_query($emergcontactphone);
                     }
                     else {
                        $emergcontactphoneadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (19, $user_id, '$_POST[emergcontactphone]')";
                        mysql_query($emergcontactphoneadd);
                     }
                 }

                     $emergcontactrelationquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 20";
                    $emergcontactrelationresult = mysql_query($emergcontactrelationquery);
                    if ($_POST[emergcontactrelation] != "") {
                    if (mysql_num_rows($emergcontactrelationresult) > 0){
                     $emergcontactrelation = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[emergcontactrelation]'
                     WHERE user_id = $user_id
                     AND field_id = 20";
                     mysql_query($emergcontactrelation);
                     }
                     else {
                        $emergcontactrelationadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (20, $user_id, '$_POST[emergcontactrelation]')";
                        mysql_query($emergcontactrelationadd);
                     }
                 }

                    $speciestreatedquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 21";
                    $speciestreatedresult = mysql_query($speciestreatedquery);
                    if ($_POST[speciestreated] != "") {
                    if (mysql_num_rows($speciestreatedresult) > 0){
                     $speciestreated = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[speciestreated]'
                     WHERE user_id = $user_id
                     AND field_id = 21";
                     mysql_query($speciestreated);
                     }
                     else {
                        $speciestreatedadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (21, $user_id, '$_POST[speciestreated]')";
                        mysql_query($speciestreatedadd);
                     }
                 }

                    $certificationsquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 22";
                    $certificationsresult = mysql_query($certificationsquery);
                    if ($_POST[certifications] != "") {
                    if (mysql_num_rows($certificationsresult) > 0){
                     $certifications = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[certifications]'
                     WHERE user_id = $user_id
                     AND field_id = 22";
                     mysql_query($certifications);
                     }
                     else {
                        $certificationsadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (22, $user_id, '$_POST[certifications]')";
                        mysql_query($certificationsadd);
                     }
                 }

                   $dobquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 45";
                    $dobresult = mysql_query($dobquery);
                    if ($_POST[dob] != "") {
                    if (mysql_num_rows($dobresult) > 0){
                     $dob = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[dob]'
                     WHERE user_id = $user_id
                     AND field_id = 45";
                     mysql_query($dob);
                     }
                     else {
                        $dobadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (45, $user_id, '$_POST[dob]')";
                        mysql_query($dobadd);
                     }
                 }

                    $educationquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 48";
                    $educationresult = mysql_query($educationquery);
                    if ($_POST[education] != "") {
                    if (mysql_num_rows($educationresult) > 0){
                     $education = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[education]'
                     WHERE user_id = $user_id
                     AND field_id = 48";
                     mysql_query($education);
                     }
                     else {
                        $educationadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (48, $user_id, '$_POST[education]')";
                        mysql_query($educationadd);
                     }
                 }

                    $currentemploymentquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 49";
                    $currentemploymentresult = mysql_query($currentemploymentquery);
                    if ($_POST[currentemployment] != "") {
                    if (mysql_num_rows($currentemploymentresult) > 0){
                     $currentemployment = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[currentemployment]'
                     WHERE user_id = $user_id
                     AND field_id = 49";
                     mysql_query($currentemployment);
                     }
                     else {
                        $currentemploymentadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (49, $user_id, '$_POST[currentemployment]')";
                        mysql_query($currentemploymentadd);
                     }
                 }

                    $prioremploymentquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 50";
                    $prioremploymentresult = mysql_query($prioremploymentquery);
                    if ($_POST[prioremployment] != "") {
                    if (mysql_num_rows($prioremploymentresult) > 0){
                     $prioremployment = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[prioremployment]'
                     WHERE user_id = $user_id
                     AND field_id = 50";
                     mysql_query($prioremployment);
                     }
                     else {
                        $prioremploymentadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (50, $user_id, '$_POST[prioremployment]')";
                        mysql_query($prioremploymentadd);
                     }
                 }

                      $professionalexperiencequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 51";
                    $professionalexperienceresult = mysql_query($professionalexperiencequery);
                    if ($_POST[professionalexperience] != "") {
                    if (mysql_num_rows($professionalexperienceresult) > 0){
                     $professionalexperience = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[professionalexperience]'
                     WHERE user_id = $user_id
                     AND field_id = 51";
                     mysql_query($professionalexperience);
                     }
                     else {
                        $professionalexperienceadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (51, $user_id, '$_POST[professionalexperience]')";
                        mysql_query($professionalexperienceadd);
                     }
                 }

                    $societymembershipsquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 52";
                    $societymembershipsresult = mysql_query($societymembershipsquery);
                    if ($_POST[societymemberships] != "") {
                    if (mysql_num_rows($societymembershipsresult) > 0){
                     $societymemberships = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[societymemberships]'
                     WHERE user_id = $user_id
                     AND field_id = 52";
                     mysql_query($societymemberships);
                     }
                     else {
                        $societymembershipsadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (52, $user_id, '$_POST[societymemberships]')";
                        mysql_query($societymembershipsadd);
                     }
                 }

                    $presentationsquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 53";
                    $presentationsresult = mysql_query($presentationsquery);
                    if ($_POST[presentations] != "") {
                    if (mysql_num_rows($presentationsresult) > 0){
                     $presentations = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[presentations]'
                     WHERE user_id = $user_id
                     AND field_id = 53";
                     mysql_query($presentations);
                     }
                     else {
                        $presentationsadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (53, $user_id, '$_POST[presentations]')";
                        mysql_query($presentationsadd);
                     }
                 }

                       $emergcontactphonequery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 19";
                    $emergcontactphoneresult = mysql_query($emergcontactphonequery);
                    if ($_POST[emergcontactphone] != "") {
                    if (mysql_num_rows($emergcontactphoneresult) > 0){
                     $emergcontactphone = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[emergcontactphone]'
                     WHERE user_id = $user_id
                     AND field_id = 19";
                     mysql_query($emergcontactphone);
                     }
                     else {
                        $emergcontactphoneadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (19, $user_id, '$_POST[emergcontactphone]')";
                        mysql_query($emergcontactphoneadd);
                     }
                 }

                     $affiliationsquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 55";
                    $affiliationsresult = mysql_query($affiliationsquery);
                    if ($_POST[affiliations] != "") {
                    if (mysql_num_rows($affiliationsresult) > 0){
                     $affiliations = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[affiliations]'
                     WHERE user_id = $user_id
                     AND field_id = 55";
                     mysql_query($affiliations);
                     }
                     else {
                        $affiliationsadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (55, $user_id, '$_POST[affiliations]')";
                        mysql_query($affiliationsadd);
                     }
                 }

                     $publicationsquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 56";
                    $publicationsresult = mysql_query($publicationsquery);
                    if ($_POST[publications] != "") {
                    if (mysql_num_rows($publicationsresult) > 0){
                     $publications = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[publications]'
                     WHERE user_id = $user_id
                     AND field_id = 56";
                     mysql_query($publications);
                     }
                     else {
                        $publicationsadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (56, $user_id, '$_POST[publications]')";
                        mysql_query($publicationsadd);
                     }
                 }

                      $awardsquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 54";
                    $awardsresult = mysql_query($awardsquery);
                    if ($_POST[awards] != "") {
                    if (mysql_num_rows($awardsresult) > 0){
                     $awards = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[awards]'
                     WHERE user_id = $user_id
                     AND field_id = 54";
                     mysql_query($awards);
                     }
                     else {
                        $awardsadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (54, $user_id, '$_POST[awards]')";
                        mysql_query($awardsadd);
                     }

                 }

                   $perzipquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 83";
                    $perzipresult = mysql_query($perzipquery);
                    if ($_POST[perzip] != "") {
                    if (mysql_num_rows($perzipresult) > 0){
                     $perzip = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[perzip]'
                     WHERE user_id = $user_id
                     AND field_id = 83";
                     mysql_query($perzip);
                     }
                     else {
                        $perzipadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (83, $user_id, '$_POST[perzip]')";
                        mysql_query($perzipadd);
                     }
                 }

                     $buszipquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 68";
                    $buszipresult = mysql_query($buszipquery);
                    if ($_POST[buszip] != "") {
                    if (mysql_num_rows($buszipresult) > 0){
                     $buszip = "UPDATE wp_bp_xprofile_data 
                     SET value = '$_POST[buszip]'
                     WHERE user_id = $user_id
                     AND field_id = 68";
                     mysql_query($buszip);
                     }
                     else {
                        $buszipadd = "INSERT INTO wp_bp_xprofile_data (field_id, user_id, value) VALUES (68, $user_id, '$_POST[buszip]')";
                        mysql_query($buszipadd);
                     }

                 }
             
               }  
                    else {

                         global $current_user;
                    get_currentuserinfo();
                    $bpfname = array('field' => 'First Name','user_id' => $user_id = $current_user->ID);
                    $bplname = array('field' => 'Last Name','user_id' => $user_id = $current_user->ID); 
                    $useremail = $current_user->user_email; 
                    $bpdob = bp_get_profile_field_data( array('field' => 'Date of Birth','user_id' => $user_id = $current_user->ID) );
                    if ($bpdob == null) { 
                        $bpdobif = 'Date of Birth'; 
                        $style = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpdobif = $bpdob;
                    };

                     $bpcphone = bp_get_profile_field_data( array('field' => 'Cell Phone','user_id' => $user_id = $current_user->ID) );
                    if ($bpcphone == null) { 
                        $bpcphoneif = 'Cell Phone'; 
                        $stylecphone = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpcphoneif = $bpcphone;
                    };

                     $bpwphone = bp_get_profile_field_data( array('field' => 'Work Phone','user_id' => $user_id = $current_user->ID) );
                    if ($bpwphone == null) { 
                        $bpwphoneif = 'Work Phone'; 
                        $stylewphone = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpwphoneif = $bpwphone;
                    };

                     $bpfax = bp_get_profile_field_data( array('field' => 'Fax','user_id' => $user_id = $current_user->ID) );
                    if ($bpfax == null) { 
                        $bpfaxif = 'Fax'; 
                        $stylefax = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpfaxif = $bpfax;
                    };

                     $bpcompany = bp_get_profile_field_data( array('field' => '8','user_id' => $user_id = $current_user->ID) );
                    if ($bpcompany == null) { 
                        $bpcompanyif = 'Company'; 
                        $stylecompany = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpcompanyif = $bpcompany;
                    };

                     $bptitle = bp_get_profile_field_data( array('field' => '9','user_id' => $user_id = $current_user->ID) );
                    if ($bptitle == null) { 
                        $bptitleif = 'Job Title'; 
                        $styletitle = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bptitleif = $bptitle;
                    };

                    $bpstreetaddress = bp_get_profile_field_data( array('field' => '34','user_id' => $user_id = $current_user->ID) );
                    if ($bpstreetaddress == null) { 
                        $bpstreetaddressif = 'Street Address'; 
                        $stylestreetaddress = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpstreetaddressif = $bpstreetaddress;
                    };

                     $bpstreetaddress2 = bp_get_profile_field_data( array('field' => '84','user_id' => $user_id = $current_user->ID) );
                    if ($bpstreetaddress2 == null) { 
                        $bpstreetaddress2if = 'Street Address: Line 2'; 
                        $stylestreetaddress2 = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpstreetaddress2if = $bpstreetaddress2;
                    };

                     $bpstreetCity = bp_get_profile_field_data( array('field' => '35','user_id' => $user_id = $current_user->ID) );
                    if ($bpstreetCity == null) { 
                        $bpstreetCityif = 'Street City'; 
                        $stylestreetCity = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpstreetCityif = $bpstreetCity;
                    };

                     $bpstreetState = bp_get_profile_field_data( array('field' => '36','user_id' => $user_id = $current_user->ID) );
                    if ($bpstreetState == null) { 
                        $bpstreetStateif = 'Street State'; 
                        $stylestreetState = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpstreetStateif = $bpstreetState;
                    };

                     $bpsite = bp_get_profile_field_data( array('field' => '10','user_id' => $user_id = $current_user->ID) );
                    if ($bpsite == null) { 
                        $bpsiteif = ' Website'; 
                        $stylesite = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpsiteif = $bpsite;
                    };

                     $bpbusinessaddress = bp_get_profile_field_data( array('field' => '17','user_id' => $user_id = $current_user->ID) );
                    if ($bpbusinessaddress == null) { 
                        $bpbusinessaddressif = 'Business Address'; 
                        $stylebusinessaddress = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpbusinessaddressif = $bpbusinessaddress;
                    };

                    $bpbusinessaddress2 = bp_get_profile_field_data( array('field' => '85','user_id' => $user_id = $current_user->ID) );
                    if ($bpbusinessaddress2 == null) { 
                        $bpbusinessaddress2if = 'Business Address: Line 2'; 
                        $stylebusinessaddress2 = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpbusinessaddress2if = $bpbusinessaddress2;
                    };

                     $bpbusinessCity = bp_get_profile_field_data( array('field' => '66','user_id' => $user_id = $current_user->ID) );
                    if ($bpbusinessCity == null) { 
                        $bpbusinessCityif = 'Business City'; 
                        $stylebusinessCity = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpbusinessCityif = $bpbusinessCity;
                    };

                     $bpbusinessState = bp_get_profile_field_data( array('field' => '67','user_id' => $user_id = $current_user->ID) );
                    if ($bpbusinessState == null) { 
                        $bpbusinessStateif = 'Business State'; 
                        $stylebusinessState = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpbusinessStateif = $bpbusinessState;
                    };

                    $bpspeciestreated = bp_get_profile_field_data( array('field' => '21','user_id' => $user_id = $current_user->ID) );
                    if ($bpspeciestreated == null) { 
                        $bpspeciestreatedif = 'Species Treated'; 
                        $stylespeciestreated = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpspeciestreatedif = $bpspeciestreated;
                    };

                     $bpCertifications = bp_get_profile_field_data( array('field' => '22','user_id' => $user_id = $current_user->ID) );
                    if ($bpCertifications == null) { 
                        $bpCertificationsif = 'Certifications'; 
                        $styleCertifications = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpCertificationsif = $bpCertifications;
                    };

                      $bpeducation = bp_get_profile_field_data( array('field' => '48','user_id' => $user_id = $current_user->ID) );
                    if ($bpeducation == null) { 
                        $bpeducationif = 'Education'; 
                        $styleeducation = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpeducationif = $bpeducation;
                    };

                     $bpgraduationyear = bp_get_profile_field_data( array('field' => '12','user_id' => $user_id = $current_user->ID) );
                    if ($bpgraduationyear == null) { 
                        $bpgraduationyearif = 'Graduation Year'; 
                        $stylegraduationyear = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpgraduationyearif = $bpgraduationyear;
                    };

                     $bpcurrentemployment = bp_get_profile_field_data( array('field' => '49','user_id' => $user_id = $current_user->ID) );
                    if ($bpcurrentemployment == null) { 
                        $bpcurrentemploymentif = 'Current Employment'; 
                        $stylecurrentemployment = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpcurrentemploymentif = $bpcurrentemployment;
                    };

                    $bpprioremployment = bp_get_profile_field_data( array('field' => '50','user_id' => $user_id = $current_user->ID) );
                    if ($bpprioremployment == null) { 
                        $bpprioremploymentif = 'Prior Employment'; 
                        $styleprioremployment = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpprioremploymentif = $bpprioremployment;
                    };

                     $bpprofessionalexperience = bp_get_profile_field_data( array('field' => '51','user_id' => $user_id = $current_user->ID) );
                    if ($bpprofessionalexperience == null) { 
                        $bpprofessionalexperienceif = 'Professional Experience'; 
                        $styleprofessionalexperience = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpprofessionalexperienceif = $bpprofessionalexperience;
                    };

                      $bpsocietymemberships = bp_get_profile_field_data( array('field' => '52','user_id' => $user_id = $current_user->ID) );
                    if ($bpsocietymemberships == null) { 
                        $bpsocietymembershipsif = 'Society Memberships'; 
                        $stylesocietymemberships = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpsocietymembershipsif = $bpsocietymemberships;
                    };

                     $bppresentations = bp_get_profile_field_data( array('field' => '53','user_id' => $user_id = $current_user->ID) );
                    if ($bppresentations == null) { 
                        $bppresentationsif = 'Presentations'; 
                        $stylepresentations = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bppresentationsif = $bppresentations;
                    };

                     $bpemergcontactphone = bp_get_profile_field_data( array('field' => '54','user_id' => $user_id = $current_user->ID) );
                    if ($bpemergcontactphone == null) { 
                        $bpemergcontactphoneif = 'emergcontactphone'; 
                        $styleemergcontactphone = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpemergcontactphoneif = $bpemergcontactphone;
                    };

                     $bpaffiliations = bp_get_profile_field_data( array('field' => '55','user_id' => $user_id = $current_user->ID) );
                    if ($bpaffiliations == null) { 
                        $bpaffiliationsif = 'Affiliations'; 
                        $styleaffiliations = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpaffiliationsif = $bpaffiliations;
                    };

                     $bppublications = bp_get_profile_field_data( array('field' => '56','user_id' => $user_id = $current_user->ID) );
                    if ($bppublications == null) { 
                        $bppublicationsif = 'Publications'; 
                        $stylepublications = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bppublicationsif = $bppublications;
                    };

                     $bpemergcontactname = bp_get_profile_field_data( array('field' => '18','user_id' => $user_id = $current_user->ID) );
                    if ($bpemergcontactname == null) { 
                        $bpemergcontactnameif = 'Emergency Contact Name'; 
                        $styleemergcontactname = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpemergcontactnameif = $bpemergcontactname;
                    };

                     $bpemergcontactphone = bp_get_profile_field_data( array('field' => '19','user_id' => $user_id = $current_user->ID) );
                    if ($bpemergcontactphone == null) { 
                        $bpemergcontactphoneif = 'Emergency Contact Phone'; 
                        $styleemergcontactphone = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpemergcontactphoneif = $bpemergcontactphone;
                    };

                     $bpemergcontactrelation = bp_get_profile_field_data( array('field' => '20','user_id' => $user_id = $current_user->ID) );
                    if ($bpemergcontactrelation == null) { 
                        $bpemergcontactrelationif = 'Emergency Contact Relationship'; 
                        $styleemergcontactrelation = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpemergcontactrelationif = $bpemergcontactrelation;
                    };

                     $bpawards = bp_get_profile_field_data( array('field' => '54','user_id' => $user_id = $current_user->ID) );
                    if ($bpawards == null) { 
                        $bpawardsif = 'Honors and Awards'; 
                        $styleawards = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpawardsif = $bpawards;
                    };

                    $bpfname = bp_get_profile_field_data( array('field' => '1','user_id' => $user_id = $current_user->ID) );
                    if ($bpfname == null) { 
                        $bpfnameif = 'First Name'; 
                        $stylefname = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpfnameif = $bpfname; 
                    };

                     $bplname = bp_get_profile_field_data( array('field' => '2','user_id' => $user_id = $current_user->ID) );
                    if ($bplname == null) { 
                        $bplnameif = 'Last Name'; 
                        $stylelname = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bplnameif = $bplname;
                    };

                     $bpperzip = bp_get_profile_field_data( array('field' => '83','user_id' => $user_id = $current_user->ID) );
                    if ($bpperzip == null) { 
                        $bpperzipif = 'Zip Code'; 
                        $styleperzip = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpperzipif = $bpperzip;
                    };

                     $bpbuszip = bp_get_profile_field_data( array('field' => '68','user_id' => $user_id = $current_user->ID) );
                    if ($bpbuszip == null) { 
                        $bpbuszipif = 'Zip Code'; 
                        $stylebuszip = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpbuszipif = $bpbuszip;
                    };


                     $bpalumni = bp_get_profile_field_data( array('field' => '13','user_id' => $user_id = $current_user->ID) );
                    if ($bpalumni == null) { 
                        $bpalumniif = 'Select Status'; 
                        $bpalumniif1 = 'Alumni';
                        $bpalumniif2 = '<option value="Undergraduate">Undergraduate</option>';
                    }
                    else {
                        if ($bpalumni == 'Alumni'){
                        $bpalumniif = 'Alumni';
                        $bpalumniif1 = 'Undergraduate';
                    }
                    elseif ($bpalumni == 'Undergraduate'){
                        $bpalumniif = 'Undergraduate';
                        $bpalumniif1 = 'Alumni';
                    }
                };

                
                    
                        ?>
                    <form action="" method="post" >
            <fieldset>
                <h4 style="margin:0px;">Priority Information</h4>

                  <div class="control-group">
                <label class="control-label" for="inputEmail">First Name</label>
                <div class="controls">
                <input type="text" id="Firstname" name="fname" class="input-block-level"  style="<?php echo $stylefname; ?>" placeholder="<?php echo $bpfnameif; ?>"> 
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Last Name</label>
                <div class="controls">
                <input type="text" id="Lname" name="lname" class="input-block-level" style="<?php echo $stylelname; ?>" placeholder="<?php echo $bplnameif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Work Email</label>
                <div class="controls">
                <input type="text" id="workemail" name="workemail" class="input-block-level noinfo" placeholder="<?php echo $useremail; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Date of Birth</label>
                <div class="controls">
                <input type="text" id="dob" name="dob" class="input-block-level" style="<?php echo $style; ?>" placeholder="<?php echo $bpdobif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Cell Phone</label>
                <div class="controls">
                <input type="text" id="Cphone" name="cphone" class="input-block-level" style="<?php echo $stylecphone; ?>" placeholder="<?php echo $bpcphoneif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Work Phone</label>
                <div class="controls">
                <input type="text" id="wphone" name="wphone" class="input-block-level"  style="<?php echo $stylewphone; ?>" placeholder="<?php echo $bpwphoneif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Fax</label>
                <div class="controls">
                <input type="text" id="fax" name="fax" class="input-block-level" style="<?php echo $stylefax; ?>" placeholder="<?php echo $bpfaxif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Company</label>
                <div class="controls">
                <input type="text" id="company" name="company" class="input-block-level" style="<?php echo $stylecompany; ?>" placeholder="<?php echo $bpcompanyif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Title</label>
                <div class="controls">
                <input type="text" id="title" name="title" class="input-block-level" style="<?php echo $styletitle; ?>" placeholder="<?php echo $bptitleif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Alumni Status</label>
                <div class="controls">
                    <select type="dropdown" id="alumni" name="alumni" class="input-block-level" placeholder="Alumni Status">
                    <option value="<?php echo $bpalumniif; ?>"><?php echo $bpalumniif; ?></option>
                    <option value="<?php echo $bpalumniif1; ?>"><?php echo $bpalumniif1; ?></option>
                    <?php echo $bpalumniif2; ?>
                </select>
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Street Address</label>
                <div class="controls">
                <input type="text" id="streetaddress" name="streetaddress" class="input-block-level"  style="<?php echo $stylestreetaddress; ?>" placeholder="<?php echo $bpstreetaddressif; ?>">
                </div></div>

                 <div class="control-group">
                <label class="control-label" for="inputEmail">Address: Line 2</label>
                <div class="controls">
                <input type="text" id="streetaddress2" name="streetaddress2" class="input-block-level"  style="<?php echo $stylestreetaddress2; ?>" placeholder="<?php echo $bpstreetaddress2if; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">City</label>
                <div class="controls">
                <input type="text" id="streetCity" name="streetCity" class="input-block-level" style="<?php echo $stylestreetCity; ?>" placeholder="<?php echo $bpstreetCityif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">State</label>
                <div class="controls">
                <input type="text" id="streetState" name="streetState" class="input-block-level" style="<?php echo $stylestreetState; ?>" placeholder="<?php echo $bpstreetStateif; ?>">
                </div></div>

                 <div class="control-group">
                <label class="control-label" for="inputEmail">Zip Code</label>
                <div class="controls">
                <input type="text" id="perzip" name="perzip" class="input-block-level" style="<?php echo $styleperzip; ?>" placeholder="<?php echo $bpperzipif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Website</label>
                <div class="controls">
                <input type="text" id="site" name="site" class="input-block-level" style="<?php echo $stylesite; ?>" placeholder="<?php echo $bpsiteif; ?>">
                </div></div>

                <h4 style="margin:0px;">Business Information</h4>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Business Address</label>
                <div class="controls">
                <input type="text" id="businessaddress" name="businessaddress" class="input-block-level" style="<?php echo $stylebusinessaddress; ?>" placeholder="<?php echo $bpbusinessaddressif; ?>">
                </div></div>

                 <div class="control-group">
                <label class="control-label" for="inputEmail">Address: Line 2</label>
                <div class="controls">
                <input type="text" id="businessaddress2" name="businessaddress2" class="input-block-level" style="<?php echo $stylebusinessaddress2; ?>" placeholder="<?php echo $bpbusinessaddress2if; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">City</label>
                <div class="controls">
                <input type="text" id="busCity" name="busCity" class="input-block-level" style="<?php echo $stylebusinessCity; ?>" placeholder="<?php echo $bpbusinessCityif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">State</label>
                <div class="controls">
                <input type="text" id="busState" name="busState" class="input-block-level" style="<?php echo $stylebusinessState; ?>" placeholder="<?php echo $bpbusinessStateif; ?>">
                </div></div>

                 <div class="control-group">
                <label class="control-label" for="inputEmail">Zip Code</label>
                <div class="controls">
                <input type="text" id="buszip" name="buszip" class="input-block-level" style="<?php echo $stylebuszip; ?>" placeholder="<?php echo $bpbuszipif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Species Treated</label>
                <div class="controls">
                <input type="text" id="speciestreated" name="speciestreated" class="input-block-level" style="<?php echo $stylespeciestreated; ?>" placeholder="<?php echo $bpspeciestreatedif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Certifications</label>
                <div class="controls">
                <input type="text" id="Certifications" name="certifications" class="input-block-level" style="<?php echo $styleCertifications; ?>" placeholder="<?php echo $bpCertificationsif; ?>">  
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Education</label>
                <div class="controls">
                <textarea id="education" name="education" class="input-block-level" style="<?php echo $styleeducation; ?>" placeholder="<?php echo $bpeducationif; ?>"></textarea> 
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Graduation Year</label>
                <div class="controls">
                <input type="text" id="graduationyear" name="graduationyear" class="input-block-level" style="<?php echo $stylegraduationyear; ?>" placeholder="<?php echo $bpgraduationyearif; ?>"> 
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Current Employment</label>
                <div class="controls">
                <input type="text" id="currentemployment" name="currentemployment" class="input-block-level" style="<?php echo $stylecurrentemployment; ?>" placeholder="<?php echo $bpcurrentemploymentif; ?>"> 
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Prior Employment</label>
                <div class="controls">
                <input type="text" id="prioremployment" name="prioremployment" class="input-block-level" style="<?php echo $styleprioremployment; ?>" placeholder="<?php echo $bpprioremploymentif; ?>"> 
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Professional Experience</label>
                <div class="controls">
                <textarea id="professionalexperience" name="professionalexperience" class="input-block-level" style="<?php echo $styleprofessionalexperience; ?>" placeholder="<?php echo $bpprofessionalexperienceif; ?>"></textarea>
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Society Memberships</label>
                <div class="controls">
                <input type="text" id="societymemberships" name="societymemberships" class="input-block-level" style="<?php echo $stylesocietymemberships; ?>" placeholder="<?php echo $bpsocietymembershipsif; ?>"> </textarea>
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Presentations</label>
                <div class="controls">
                <textarea id="presentations" name="presentations" class="input-block-level" style="<?php echo $stylepresentations; ?>" placeholder="<?php echo $bppresentationsif; ?>"></textarea>
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Awards</label>
                <div class="controls">
                <textarea id="awards" name="awards" class="input-block-level" style="<?php echo $styleawards; ?>" placeholder="<?php echo $bpawardsif; ?>"></textarea> 
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Affiliations</label>
                <div class="controls">
                <textarea id="affiliations" name="affiliations" class="input-block-level" style="<?php echo $styleaffiliations; ?>" placeholder="<?php echo $bpaffiliationsif; ?>"></textarea>
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Publications</label>
                <div class="controls">
                <textarea id="publications" name="publications" class="input-block-level" style="<?php echo $stylepublications; ?>" placeholder="<?php echo $bppublicationsif; ?>"></textarea>
                </div></div>

                <h4 style="margin:0px;">Emergency Contact Information</h4> 
                <div class="control-group">
                <label class="control-label" for="inputEmail">Emergency Contact Name</label>
                <div class="controls">
                <input type="text" id="emergcontactname" name="emergcontactname" class="input-block-level" style="<?php echo $styleemergcontactname; ?>" placeholder="<?php echo $bpemergcontactnameif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Emergency Contact Phone Number</label>
                <div class="controls">
                <input type="text" id="emergcontactphone" name="emergcontactphone" class="input-block-level" style="<?php echo $styleemergcontactphone; ?>" placeholder="<?php echo $bpemergcontactphoneif; ?>">
                </div></div>

                <div class="control-group">
                <label class="control-label" for="inputEmail">Emergency Contact Relationship</label>
                <div class="controls">
                <input type="text" id="emergcontactrelation" name="emergcontactrelation" class="input-block-level" style="<?php echo $styleemergcontactrelation; ?>" placeholder="<?php echo $bpemergcontactrelationif; ?>">               
                </div></div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right">Continue</button>
            </fieldset>
        </form>
        <?php }?>
                  </div>
                  <!-- <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                  </div> -->
                </div>
            </div>

        </div>
            </div>
        </div>

        </div>

        <div class="container-fluid span12 well-large center">
            <div class="row-fluid span12">
                <div class="span4 well center">
                    <div class="thumbnail center well well-small text-center">
                        <?php if ( dynamic_sidebar('How To Page - Left', 'bootstrapwp') ) : else : endif; ?>
                    </div>
                </div>
                <div class="span4 well center">
                    <div class="thumbnail center well well-small text-center">
                                    <h3>
                                        Connect with us!
                                    </h3>
                            <div>
                            <a href="https://www.facebook.com/pages/Options-for-Animals-College-of-Animal-Chiropractic/196266403734490" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> | Connect with Facebook</a>
                            </div>
                        <hr>
                            <div>
                            <a href="https://twitter.com/OptionsForAnima" target="_blank" class="btn btn-twitter"> <i class="fa fa-twitter"> </i>| Connect with Twitter</a>         
                            </div>
                        <hr>
                            <div>
                            <a href="http://www.linkedin.com/pub/options-for-animals/35/742/841" target="_blank" class="btn btn-linkedin"> <i class="fa fa-linkedin"> </i>| Connect with LinkedIn</a>    
                      </div>
                      </div>
                    </div>
                <div class="span4 well center">
                    <div class="thumbnail center well well-small text-center">
                        <?php if ( dynamic_sidebar('How To Page - Right', 'bootstrapwp') ) : else : endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <script type="text/javascript" src="<?php echo site_url() ?>/wp-content/themes/ofa/assets/js/toucheffects.js"></script> 

        <?php endwhile; // end of the loop. ?>
        <!-- .row content -->
        <!--/.container -->
        <?php get_footer(); ?>