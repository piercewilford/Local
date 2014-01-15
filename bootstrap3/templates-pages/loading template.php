<?php
/**
 * Template Name: Loading Template
 *
 * This is the default page template.  It is used when a more specific template can't be found to display 
 * singular views of pages.....
 *
 * @package rainbow
 * @subpackage Template
 */


if (!is_user_logged_in() ) {
 wp_redirect (site_url('/wp-login.php', 'http'));
 exit;

echo "You need to be logged in to enroll in a course. <a href='http://optionsforanimals.com/wp-login'>Click here</a> to login and try again.";

 }

$urlid = $_GET['ID'];
$price = get_post_meta($urlid, 'incsub_event_fee', true);
$capacity = get_post_meta($urlid, 'eab_capacity', true);
$getpost = get_post($urlid);
$title = $getpost->post_title;

global $current_user;
get_currentuserinfo();
$useremail = $current_user->user_email;
$display_name = $current_user->display_name;
$user_id = $current_user->ID;

$billing = get_post_meta(3321, 'billing', true);

$invoice = get_invoice($invoice_id);


$item_list = array(array('name' => $title, 
	'description' => '',
	'quantity' => 1, 
	'price' => $price, 
	'tax_rate' => 0,
	'line_total_tax' => 0,
	'line_total_before_tax' => $price,
	'line_total_after_tax' => $price
	));
$discount = array('', array(
	'name' => 'Paid in Full Discount', 
	'amount' => '250',
	'type' => 'amount'
	));
$total_discount = '250';
$net = $price - $total_discount;

global $wpdb;
$invoice_post = array(
	'post_type' => 'wpi_object',
	'post_status' => 'active',
	'post_title' => ''.$title.'',
	'ping_status' => 'open'

);

wp_insert_post( $invoice_post );

$lastid = $wpdb->insert_id;
$new_post = get_post($lastid);
$new_post_id = $new_post->ID;
$invoice_id = rand(10000000, 99999999);

add_post_meta($new_post_id, 'subtotal', $price);
add_post_meta($new_post_id, 'type', 'invoice');
add_post_meta($new_post_id, 'user_email', $useremail);
add_post_meta($new_post_id, 'invoice_id', $invoice_id);
add_post_meta($new_post_id, 'hash', md5($invoice_id));
add_post_meta($new_post_id, 'billing', $billing);
add_post_meta($new_post_id, 'itemized_list', $item_list);
add_post_meta($new_post_id, 'total_discount', $total_discount);
add_post_meta($new_post_id, 'discount', $discount);
add_post_meta($new_post_id, 'default_payment_method', 'wpi_authorize');
add_post_meta($new_post_id, 'deposit_amount', '350');
add_post_meta($new_post_id, 'total_tax', '0');
add_post_meta($new_post_id, 'default_currency_code', 'USD');
add_post_meta($new_post_id, 'default_payment_method', 'wpi_authorize');
add_post_meta($new_post_id, 'client_change_payment_method', 'on');
add_post_meta($new_post_id, 'net', $net);
add_post_meta($new_post_id, 'total_payments', '');
add_post_meta($new_post_id, 'adjustments', '');
add_post_meta($new_post_id, 'event_id', $urlid);
add_post_meta($new_post_id, 'min_payment_made', '0');
add_post_meta($new_post_id, 'multipayment', '0');
add_post_meta($new_post_id, 'invoice_user_id', $user_id);
add_post_meta($urlid, 'user_id', $user_id);




$hash = md5($invoice_id);

$post_hash = get_post_meta($new_post_id, 'hash', true);



wp_redirect( site_url('/invoice/?invoice_id='.$hash.'', 'http'), 301 ); exit;

?>