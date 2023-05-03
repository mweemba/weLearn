<?php include '../includes/sessions.php'; ?> <!DOCTYPE html>
<!-- 
Template Name: Educo
Version: 3.0.0
Author: 
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Begin Head -->

<head>
    <meta charset="utf-8" />
    <title>Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Educo" />
    <meta name="keywords" content="Educo, html template, Education template" />
    <meta name="author" content="Kamleshyadav" />
    <meta name="MobileOptimized" content="320" />

    <!--srart theme style -->
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/default-style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../assets/css/slim.min.css"/>

    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="../assets/images/header/favicon.png" />
	
</head>

<body>
<style>
th, td {
  border-bottom: 1px solid #ddd;
}
table{
	border:0;
}
table {
  border-collapse: collapse;
}

table tr:first-child td {
  border-top: 0;
}
table tr td:first-child {
  border-left: 0;
}
table tr:last-child td {
  border-bottom: 0;
}
table tr td:last-child {
  border-right: 0;
}div#imgContainer {
    min-width: 240px;
   min-height: 240px;
    padding: 13px;
    display: inline-block;
}
</style>
    <!--Page main section start-->
    <div id="educo_wrapper">
        <!--Header start-->
		<?php include '../includes/header.php';?>
       <!--header end -->
        <!--Breadcrumb start-->
        <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Educo Student</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="dashboard.html">Educo Student</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--single student detail start-->
        <div class="ed_dashboard_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="ed_sidebar_wrapper">
                            <div class="ed_profile_img">
							<?php 
							
										  $dataSQL="SELECT * FROM `customer`
										 INNER JOIN `users_tbl` on `users_tbl`.`user_id`=`customer`.`user_id` WHERE `users_tbl`.`user_id`=:dbuser";
											$stmt = $conn2->prepare($dataSQL);
											
											$stmt->bindParam("dbuser",$user_id);
									
											$stmt->execute();
											while($row = $stmt->fetch()){
											 
											
                                            ?>
                                <img src="<?php  if(!$row['picture']){ echo '../assets/images/user.png'; } else{ echo '../assets/images/profile/'.$row['picture']; };?>" alt="Dashboard Image" />
								
											<?php } ?>
                            </div>
                            <h3><?php echo $firstname;?>  <?php echo $lastname;?></h3>
                            <div class="ed_tabs_left">
                                <ul class="nav nav-tabs">
                                    <li><a class="active" href="#dashboard" data-bs-toggle="tab">dashboard</a></li>
									 <li><a href="#profile" data-bs-toggle="tab">profile & Passwords</a></li>
                                    <li><a href="#courses" data-bs-toggle="tab">courses <span> <?php $dataSQL="SELECT * FROM `order_course` INNER JOIN `course` 
										 ON `order_course`.`course_id`=`course`.`course_id` WHERE `customer_id`=:cust_id";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam(":cust_id",$cust_id);
											$number=0;
											$stmt->execute();
											while($row = $stmt->fetch()){
											$number+=1;
											} 
											echo $number;
											?></span></a></li>
                                    <li><a href="#notification" data-bs-toggle="tab">notifications <span>0</span></a></li>
                                   
                                  
                                    <li><a href="#forums" data-bs-toggle="tab">forums</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="ed_dashboard_tab">
                            <div class="tab-content">
                                <div class="tab-pane active" id="dashboard">
                                    <div class="ed_dashboard_tab_info">
                                        <h1>hello, <span><?php echo $firstname;?></span></h1>
                                        <h1>welcome to dashboard</h1>
                                        <p>Hi <strong><?php echo $firstname;?>  <?php echo $lastname;?></strong>, here you have to see and update your profile, subscribed courses, activities, notifications and other things. All the above updates can be modified from the left panel provided.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="courses">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#my" aria-controls="my" role="tab" data-bs-toggle="tab">my courses</a></li>
                                                 <!--<li role="presentation"><a href="#result" aria-controls="result" role="tab" data-bs-toggle="tab">result</a></li>
                                                <li role="presentation"><a href="#status" aria-controls="status" role="tab" data-bs-toggle="tab">status</a></li>-->
                                                <li role="presentation"><a href="#instructing" aria-controls="instructing" role="tab" data-bs-toggle="tab">instructing courses</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="my">
                                                    <div class="ed_inner_dashboard_info">
                                                        <h2>you have 				<?php  
							
										
											echo $number;
                                                      ?> subscribed course(s)</h2>
                                                        <div class="ed_mostrecomeded_course_slider">
                                                            <div class="row">
															<?php  
							
										 $dataSQL="SELECT * FROM `order_course` INNER JOIN `course` 
										 ON `order_course`.`course_id`=`course`.`course_id` WHERE `customer_id`=:cust_id";
											$stmt = $conn2->prepare($dataSQL);
											 $stmt->bindParam(":cust_id",$cust_id);
											
											$stmt->execute();
											while($row = $stmt->fetch()){
											 
											
                                                      ?>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="course_single.html"><?php echo $row['course_image']; ?> </a><span>$ <?php echo $row['course_price']; ?></span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(5 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span> <?php $dataSQL="SELECT * FROM `order_course` INNER JOIN `course` 
										 ON `order_course`.`course_id`=`course`.`course_id` WHERE `customer_id`=:cust_id";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam(":cust_id",$cust_id);
											$numb_two=0;
											$stmt->execute();
											while($row3 = $stmt->fetch()){
											$numb_two+=1;
											} 
											echo $numb_two;
											?> students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo $row['course_decription']; ?></p>
                                                                        <a href="course_single.php?c_id=<?php echo $row['course_id']; ?>" class="ed_getinvolved">Go to lessons <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
																
											<?php } ?>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="result">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>result details</h2>
                                                        <p>Nam id ligula tristique, porta dolor ac, pretium leo. Maecenas scelerisque vulputate dapibus. Quisque sodales tincidunt sapien, eu consequat erat tempus et. Nullam ipsum est, interdum quis posuere
                                                            sed, imperdiet quis nisi. Proin quis justo est. Vestibulum imperdiet leo sit amet tortor suscipit, id cursus ligula pharetra. Uctus ac eros a, faucibus iaculis quam. Nam non iaculis justo. Donec
                                                            maximus varius velit.</p>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="status">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>some recent status about this course</h2>
                                                        <p>Sed ultricies posuere magna elementum laoreet. Suspendisse elementum sagittis nisl, id pellentesque purus auctor finibus. Donec elementum quam est, a condimentum diam tempor ac. Sed quis magna lobortis,
                                                            pulvinar est at, commodo mauris. Nunc in mollis erat. Integer aliquet orci non auctor pretium. Pellentesque eu nisl augue. Curabitur vitae est ut sem luctus tristique. Suspendisse euismod sapien
                                                            facilisis tellus aliquam pellentesque.</p>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="instructing">
                                                    <div class="ed_dashboard_inner_tab">
                                                           
                                                        <h2> <?php $dataSQL="SELECT * FROM `order_course` INNER JOIN `course` 
										 ON `teaching_course`.`course_id`=`course`.`course_id` WHERE `customer_id`=:cust_id";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam(":cust_id",$cust_id);
											$number_=0;
											$stmt->execute();
											while($row = $stmt->fetch()){
											$number_+=1;
											} 
                                            If($number_<1){
												
												echo 'You have not submited any Instructing course';
											}else{
												
												echo 'you have'.$number_.' Instructing course(s)';
											}											
											
											?></h2>
                                                        <div class="ed_mostrecomeded_course_slider">
                                                            <div class="row">
															<?php  
							
										 $dataSQL="SELECT * FROM `order_course` INNER JOIN `course` 
										 ON `teaching_course`.`course_id`=`course`.`course_id` WHERE `customer_id`=:cust_id";
											$stmt = $conn2->prepare($dataSQL);
											 $stmt->bindParam(":cust_id",$cust_id);
											
											$stmt->execute();
											while($row = $stmt->fetch()){
											 
											
                                                      ?>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="course_single.html"><?php echo $row['course_image']; ?> </a><span>$ <?php echo $row['course_price']; ?></span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(5 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span> <?php $dataSQL="SELECT * FROM `order_course` INNER JOIN `course` 
										 ON `order_course`.`course_id`=`course`.`course_id` WHERE `customer_id`=:cust_id";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam(":cust_id",$cust_id);
											$numb_two=0;
											$stmt->execute();
											while($row3 = $stmt->fetch()){
											$numb_two+=1;
											} 
											echo $numb_two;
											?> students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo $row['course_decription']; ?></p>
                                                                        <a href="course_single.php?c_id=<?php echo $row['course_id']; ?>" class="ed_getinvolved">Go to lessons <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
																
											<?php } ?>
                                                                </div>
                                                        </div>
														
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="activity">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#personal" aria-controls="personal" role="tab" data-bs-toggle="tab">personal</a></li>
                                                <li role="presentation"><a href="#mentions" aria-controls="mentions" role="tab" data-bs-toggle="tab">mentions</a></li>
                                                <li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-bs-toggle="tab">favourites</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="personal">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>What's new, andrehouse@123 ?</h2>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <form class="ed_tabpersonal">
                                                                    <div class="form-group">
                                                                        <textarea name="whats_new" class="form-control" id="whats_new" cols="50" rows="5"></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button class="btn ed_btn ed_green">post update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="mentions">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>sorry, there was no mentions event found. please try a different filter</h2>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="favourites">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>sorry, there was no favourites event found. please try a different filter</h2>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="notification">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#unread" aria-controls="unread" role="tab" data-bs-toggle="tab">unread</a></li>
                                                <li role="presentation"><a href="#read" aria-controls="read" role="tab" data-bs-toggle="tab">read</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="unread">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>you have no unread notifications</h2>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="read">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>you have no notifications</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
											
                                <div class="tab-pane" id="profile">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#view" aria-controls="view" role="tab" data-bs-toggle="tab">view</a></li>
                                                <li role="presentation"><a href="#edit" aria-controls="edit" role="tab" data-bs-toggle="tab">edit</a></li>
												 <li role="presentation"><a href="#passchange" aria-controls="change" role="tab" data-bs-toggle="tab">change Password</a></li>
                                                <li role="presentation"><a href="#change" aria-controls="change" role="tab" data-bs-toggle="tab">change profile photo</a></li>
                                            </ul>
                                            <!-- Tab panes -->
										<?php 
							
										  $dataSQL="SELECT * FROM `customer`
										 INNER JOIN `users_tbl` on `users_tbl`.`user_id`=`customer`.`user_id` WHERE `users_tbl`.`user_id`=:dbuser";
											$stmt = $conn2->prepare($dataSQL);
											
											$stmt->bindParam("dbuser",$user_id);
									
											$stmt->execute();
											while($row = $stmt->fetch()){
											 
											
                                            ?>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="view">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>your profile</h2>
                                                      <section class="content-area">
														  <div class="table-area">
															<table >
															
															  <tbody>
																<tr>
																  <td>  First Name</td>
																  <td><?php echo $row['first_name'];?></td>
																  
																</tr>
																<tr>
																  <td> Middle Name: </td>
																  <td><?php echo $row['middle_name'];?></td>
																 
																</tr>
																<tr>
																  <td>Last Name</td>
																  <td><?php echo $row['last_name'];?></td>
																 
																 
																</tr>
																<tr>
																  <td>Gender</td>
																  <td><?php echo $row['gender'];?></td>
																
																 
																</tr>
																<tr>
																  <td>Date of Birth</td>
																  <td><?php echo $row['dob'];?></td>
																  
																</tr>
																<tr>
																  <td>Email</td>
																  <td><?php echo $row['email'];?></td>
																  
																</tr>
																<tr>
																  <td> Contact Number</td>
																  <td><?php echo $row['contact_no'];?></td>
																  
																</tr>
																<tr>
																  <td>Address</td>
																  <td><?php echo $row['address'];?></td>
																  
																</tr>
														 
															  </tbody>
															</table>
														  </div>
														 
														</section>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="edit">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>edit profile</h2>
                                                        <form class="ed_tabpersonal" method="POST"  id="self_user_edit_form">
                                                            <div class="form-group">
                                                                <p>First Name: <input type="text" class="form-control" required placeholder="Your Name" name="first_name" value="<?php echo $row['first_name'];?>">
                                                            </div>
															<div class="form-group">
                                                                <p>Middle Name:<input type="text" class="form-control" placeholder="Your Name" name="middle_name"  value="<?php echo $row['middle_name'];?>">
                                                            </div>
															<div class="form-group">
                                                                <p>Last Name:<input type="text" class="form-control" required placeholder="Your Name" name="last_name" value="<?php echo $row['last_name'];?>">
                                                            </div>
															<div class="form-group">
                                                                <p>Gender:<input type="text" class="form-control" required placeholder="Your Name" name="gender" value="<?php echo $row['gender'];?>">
                                                            </div>
															<div class="form-group">
                                                                <p>Date of Birth:<input type="text" class="form-control" required placeholder="Your Name" name="dob"  value="<?php echo $row['dob'];?>">
                                                            </div>
															<div class="form-group">
                                                                <p>Email:<input type="text" class="form-control" required placeholder="Your Name"  name="email" value="<?php echo $row['email'];?>">
                                                            </div>
															<div class="form-group">
                                                                <p>Contact:<input type="text" class="form-control" required  placeholder="Your Name" name="contact_no" value="<?php echo $row['contact_no'];?>">
                                                            </div>
															<div class="form-group">
                                                                <p>Address:<input type="text" class="form-control" required placeholder="Your Name" name="address"  value="<?php echo $row['address'];?>">
                                                            </div>
                                                         
                                                            <div class="form-group">
															<input class="form-control" name="user_id" type="hidden" value="<?php echo $row['user_id'];?>" />
                                                                <button type="submit"  class="btn ed_btn ed_green">save changes</button>
                                                            </div>
															
                                                        </form>
														<div id="self_edit_response"></div>
                                                    </div>
                                                </div>
												  <div role="tabpanel" class="tab-pane" id="passchange">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>Change Password</h2>
                                                        <form class="ed_tabpersonal"  method="POST" id="self_user_pass_form">
                                                            
                                                         
															 <div class="form-group">
                                                                <p> Current Password<input type="password" name="current_password" onkeyup="oldpassvalidate()" id="current_password"  class="form-control" placeholder="Current Password"><span id="old_pass_response"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" name="new_password" id="new_password" onkeyup="passidvalidation()" placeholder="New Password"><span id="passwordValidate"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" onkeyup="checkBothpasswords()" placeholder="Repeat New Password"><span id="checkbothpass"></span>
																<input class="form-control" name="user_id" type="hidden" value="<?php echo $row['user_id'];?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn ed_btn ed_green">save changes</button>
                                                            </div>
															<div id="self_edit_pass" class="form-group"></div>
                                                        </form>
														
                                                    </div>
													
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="change">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>change photo</h2>
                                                        <form class="ed_tabpersonal">
                                                            <div>
																<div class="slim" id="imgContainer"
																 data-label="Drop your picture here"
																 data-fetcher="fetch.php"
																 data-service="async.php"
																 data-size="240,240"
																 data-ratio="1:1"
																 data-max-file-size="10"
																 data-instant-edit="true"
															     data-meta-memberid="<?php echo $row['user_id'];?>"
															     >
															     <input type="file" name="slim[]" required />
																<img class="editable img-responsive"  src="<?php  if(!$row['picture']){ echo '../assets/images/user.png'; } else{ echo '../assets/images/profile/'.$row['picture']; };?>" />
															
                                                                 </div>
														</div>
                                                            
                                                            <div class="form-group">
                                                                <p>If you'd like to delete your current avatar but not upload a new one, please use the delete avatar button.</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn ed_btn ed_orange">delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
											<?php } ?>
                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
											
                                <div class="tab-pane" id="setting">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#general" aria-controls="general" role="tab" data-bs-toggle="tab">general</a></li>
                                                <li role="presentation"><a href="#email" aria-controls="email" role="tab" data-bs-toggle="tab">email</a></li>
                                                <li role="presentation"><a href="#visibility" aria-controls="visibility" role="tab" data-bs-toggle="tab">profile visibility</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="general">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>general setting</h2>
                                                        <form class="ed_tabpersonal">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Your Account Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <p>Change Password <strong>(leave blank for no change)</strong></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="New Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Repeat New Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn ed_btn ed_green">save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="email">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>email notification</h2>
                                                        <span>Send an email notice when:</span>
                                                        <table id="notification_settings">
                                                            <thead>
                                                                <tr>
                                                                    <th class="title">Activity</th>
                                                                    <th class="yes">Yes</th>
                                                                    <th class="no">No</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>A member mentions you in an update using "@andrehouse123"</td>
                                                                    <td class="yes"><input type="radio" name="activity1" value="yes" checked="checked"></td>
                                                                    <td class="no"><input type="radio" name="activity1" value="no"></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>A member replies to an update or comment you've posted</td>
                                                                    <td><input type="radio" name="activity2" value="yes" checked="checked"></td>
                                                                    <td><input type="radio" name="activity2" value="no"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <button class="btn ed_btn ed_green">save changes</button>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="visibility">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>profile visibility</h2>
                                                        <table id="visibility_settings">
                                                            <thead>
                                                                <tr>
                                                                    <th class="title">Name</th>
                                                                    <th class="yes">Visibility</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>Andre House</td>
                                                                    <td>Everyone</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <button class="btn ed_btn ed_green">save setting</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="forums">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#started" aria-controls="started" role="tab" data-bs-toggle="tab">topics started</a></li>
                                                <li role="presentation"><a href="#replies" aria-controls="replies" role="tab" data-bs-toggle="tab">replies created</a></li>
                                                <li role="presentation"><a href="#favourite" aria-controls="favourite" role="tab" data-bs-toggle="tab">favourite</a></li>
                                                <li role="presentation"><a href="#subscribed" aria-controls="subscribed" role="tab" data-bs-toggle="tab">subscribed</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="started">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>forum topics started</h2>
                                                        <span>You have not created any topics.</span>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="replies">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>forum replies created</h2>
                                                        <span>You have not replied to any topics.</span>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="favourite">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>favorite forum topics</h2>
                                                        <span>You currently have no favourite topics.</span>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="subscribed">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>subscribed forums</h2>
                                                        <span>You are not currently subscribed to any forums.</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--single student detail end-->
        <!--Footer Top section start-->
        <div class="ed_footer_wrapper">
            <div class="ed_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <p>
                                    <a href="index.html"><img src="../assets/images/footer/F_Logo.png" alt="Footer Logo" /></a>
                                </p>
                                <p>Edution is an outstanding PSD template targeting educational institutions, helping them establish strong identity on the internet without any real developing knowledge.
                                </p>
                                <div class="ed_sociallink">
                                    <ul>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <h4 class="widget-title">find us</h4>
                                <p><i class="fa fa-safari"></i>Wimbledon Street 42a, 45290 Wimbledon, <br/>United Kingdom</p>
                                <p><i class="fa fa-envelope-o"></i><a href="javascript:void(0);">info@edutioncollege.gov.co.uk</a> <a href="javascript:void(0);">public@edutioncollege.gov.co.uk</a></p>
                                <p><i class="fa fa-phone"></i> 1-220-090-080</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <h4 class="widget-title">social media</h4>
                                <p><strong>@education </strong> How many students do you educate monthly? Open <a href=""> http://t.co/KFDdzLSD9</a><br/>2 days ago</p>

                                <p><strong>@educationUK </strong> Web Design that works. Have a look at this masterpiece. <a href="">http://t.co/9j8DH93zrO</a><br/>5 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Top section end-->
        <!--Footer Bottom section start-->
        <div class="ed_footer_bottom">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="ed_copy_right">
                                <p>&copy; Copyright 2021, All Rights Reserved, <a href="javascript:void(0);">EDUCO</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="ed_footer_menu">
                                <ul>
                                    <li><a href="index.html">home</a></li>
                                    <li><a href="private_policy.html">private policy</a></li>
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Bottom section end-->
    </div>
    <!--Page main section end-->
    <!--Main js file start-->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/modernizr.js"></script>
    <script src="../assets/js/owl.carousel.js"></script>
    <script src="../assets/js/smooth-scroll.js"></script>
    <script src="../assets/js/plugins/revel/jquery.themepunch.tools.min.js"></script>
    <script src="../assets/js/plugins/revel/jquery.themepunch.revolution.min.js"></script>
    <script src="../assets/js/plugins/revel/revolution.extension.layeranimation.min.js"></script>
    <script src="../assets/js/plugins/revel/revolution.extension.navigation.min.js"></script>
    <script src="../assets/js/plugins/revel/revolution.extension.slideanims.min.js"></script>
    <script src="../assets/js/plugins/countto/jquery.countTo.js"></script>
    <script src="../assets/js/plugins/countto/jquery.appear.js"></script>
    <script src="../assets/js/default-custom.js"></script>
	 <script src="../assets/js/myscripts.js"></script>
	 <script src="../assets/js/usersfunctions.js"></script>
	 <script src="../assets/js/slim.kickstart.min.js"></script>
</body>

</html>