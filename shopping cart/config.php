<?php
$currency = 'LKR '; //Currency 

$db_username = 'root';
$db_password = '';
$db_name = 'sportsdirect';
$db_host = 'localhost';

$shipping_cost      = 300; //shipping cost
$taxes              = array( //Tax Percentages in sri lanka
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );						
//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>