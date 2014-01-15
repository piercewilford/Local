<?php
/**
 * Template Name: OFA Notable Alumni
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

 <div class="alert-error span12"><!-- style="width:100%;margin-top:-20px;margin-left:0;-webkit-border-radius:0px;"> -->
         <div class="container span9">
          <div class="span9">
            <h1 style="color:white;">Notable Alumni</h1>

            <?php $wpdb->show_errors(); ?> </br>

            <?php global $current_user;

      get_currentuserinfo();
      echo 'Username: ' . $current_user->user_login . "</br>";
      echo 'User email: ' . $current_user->user_email . "</br>";
      echo 'User first name: ' . $current_user->user_firstname . "</br>";
      echo 'User last name: ' . $current_user->user_lastname . "</br>";
      echo 'User display name: ' . $current_user->display_name . "</br>";



function getRows($result_resource) {
 $row = mysql_num_rows($result_resource) or die(mysql_error());
 return $row;
}
$query = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = 2 AND field_id = 13";
$result = mysql_query($query);
$totalRows = getRows($result);
echo $totalRows;


                     $busCityquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 66";
                    $busCityresult = mysql_query($busCityquery);
                    if ($_POST[busCity] === false) {
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




                        $bpbusinessCity = bp_get_profile_field_data( array('field' => '66','user_id' => $user_id = $current_user->ID) );
                    if ($bpbusinessCity == null) { 
                        $bpbusinessCityif = 'Business City'; 
                        $stylebusinessCity = "background-color:#f2dede;border-color:#eed3d7;color:#b94a48";
                    }
                    else {
                        $bpbusinessCityif = $bpbusinessCity;
                    };
                    echo $busCityresult;


       // echo 'User ID: ' . $current_user->ID . "</br>";
      // echo "</br>";
      // echo "</br>";
      // echo "</br>";
      // echo "</br>";
 $dobquery = "SELECT value FROM wp_bp_xprofile_data WHERE user_id = $user_id AND field_id = 45";
// echo 
// $user = get_user_by( 'user_id', 2 );
// echo 'User is ' . $user->first_name . ' ' . $user->last_name;

//  echo "</br>";
//       echo "</br>";
//       echo "</br>";
//       echo "</br>";

      // $result = $wpdb->get_results('SELECT * FROM wp_bp_xprofile_data');
      //           foreach($result as $row) {
      //           echo 'ID: '.$row->user_id.', Value: '.$row->value.'<br/>';
      //           }

 ?>
                          <form action="" method="post">
            <fieldset>
                <h4 style="margin:0px;">Priority Information</h4>
               <h4 style="margin:0px;">Business Information</h4>
               <input type="text" id="busCity" name="busCity" class="input-block-level span9" style="<?php echo $stylebusinessCity; ?>" placeholder="<?php echo $bpbusinessCityif; ?>">
                <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right">Submit</button>
            </fieldset>
        </form>
<!--   WHERE user_id='$cuser_ID');
 $user_id = $current_user->ID); -->

            <!-- <p style="color:white;">Local hotels welcome all Options for Animals students. Here are a few of them.</p> -->
          </div>
                        
         </div>
      </div>

<div class="row-fluid sk" style="width:1024px;margin-left:auto;margin-right:auto;">
<div class="span12">  
  

 
             <?php query_posts( array('post_type' => 'staff', 'order' => 'ASC'));
                 while (have_posts()) : the_post(); 
                $id = get_the_id();
                             echo "<div class='span4' style='margin-left:10px;'>";
                            echo "<div class='card' style='box-shadow:5px 5px 5px #888888;height:380px;'>";
                              echo "<div class='card-heading simple' style='background-color:rgb(52,51,75);color:white;padding-bottom:10px;margin-top:-20px;padding-top:10px;'>";
                               echo "<a style='color:white;' href='";
                                the_permalink();
                                echo "'>";
                                the_title();
                                echo "</a>";
                              echo "</div>";
                                echo "<div class='card-body'>";
                               echo "<div style='margin-top:20px;height:300;'>";
                              // substr(the_excerpt(), 10,25);
                              echo "<div style='margin-left:auto;margin-right:auto;width:90%;'>";
                               echo "<a href='";
                                the_permalink();
                                echo "'>";
                              the_post_thumbnail();
                               echo "</a>";
                              echo "</div>";
                              echo "</div>"; 
                            echo "</div>";
                            
                               echo "</div>";
                              echo "</div>";
              endwhile; // end of the loop. ?>

        </div> 
        </div>  
       


    <?php get_footer(); ?>
  
    