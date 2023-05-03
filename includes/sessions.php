<?php
session_start();
error_reporting(0);

include 'Dbconnect.php';
$dbuser=$_SESSION['user_id_wel'];

$lock_screen=$_SESSION['lockapp'];
	
$semail="";
$firstname="";
$lastname="";
$credit_limit="";
$user_id='';
$todayDate=date('Y-m-d');
$profilePic="";
$cust_id="";

date_default_timezone_set("Africa/Harare");
 $todayDate=date('Y-m-d');

   $query="SELECT * FROM `customer` INNER JOIN `users_tbl` on `users_tbl`.`user_id`=`customer`.`user_id` WHERE `user_name`=:dbuser";
      
    
	$stmt = $conn2->prepare($query);
	 $stmt->bindParam(":dbuser",$dbuser);
	
	$stmt->execute();
   while($row = $stmt->fetch()){
           
           
   $_SESSION['user_id_wel']=$row['user_name'];

			$firstname=$row['first_name'];
			$lastname=$row['last_name'];
			$user_id=$row['user_id'];
			$cust_id=$row['customer_id'];
            }




?> 