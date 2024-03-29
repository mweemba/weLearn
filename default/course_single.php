<?php 
include '../includes/sessions.php'; 
$course_id=$_GET['c_id'];
?><!DOCTYPE html>
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
    <title>welearn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Educo" />
    <meta name="keywords" content="Educo, html template, Education template" />
    <meta name="author" content="Kamleshyadav" />
    <meta name="MobileOptimized" content="320" />

    <!--srart theme style -->
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/default-style.css" rel="stylesheet" type="text/css" />

    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="../assets/images/header/favicon.png" />
</head>

<body>
    <!--Page main section start-->
    <div id="educo_wrapper">
        <!--Header start-->
		<?php include '../includes/header.php';?>
		
		<?php  
							
										 $dataSQL="SELECT *  FROM `course` INNER JOIN `teacher` ON `course`.`teacher_id`=`teacher`.`teacher_id` WHERE `course_id`=:course_id ";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam("course_id",$course_id);
											
											$stmt->execute();
											while($row = $stmt->fetch()){
											 
											
            ?>
        <!--header end -->
        <!--Breadcrumb start-->
        <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2><?php echo $row['course_name'];?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="courses.html">weLearn courses</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="course_single.html"><?php echo $row['course_name'];?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Single content start-->
        <div class="ed_graysection ed_course_single ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="ed_course_single_item">
                            <div class="ed_course_single_image">
                                <img src="https://dummyimage.com/800x450/000/fff" alt="event image" />
                            </div>
                            <div class="ed_course_single_info">
                                <h2><?php echo $row['course_name'];?> <span>$<?php echo $row['course_price'];?></span></h2>
                                <div class="ed_rating">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="ed_stardiv">
                                                        <div class="star-rating"><span style="width:80%;"></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <span>(5 review)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 pull-right text-right">
                                            <div class="ed_views">
                                                <i class="fa fa-users"></i>
                                                <span>35 students</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                                <div class="row  w-100 justify-content-between">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="course_detail">
                                            <div class="course_faculty">
                                                <img src="<?php echo $row['teacher_picture'];?>" alt=""> <a href="instructor_dashboard.php?t_id=<?php echo $row['teacher_id'];?>"><?php echo $row['first_name'];?> <?php echo $row['midle_name'];?> <?php echo $row['last_name'];?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 pull-right text-right">
                                        <div class="ed_course_duration">
                                            time duration: 75 days
                                            <p>post graduation course</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ed_course_single_tab">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"><a class="active" href="#description" aria-controls="description" role="tab" data-bs-toggle="tab">description</a></li>
                                        <li role="presentation"><a href="#students" aria-controls="students" role="tab" data-bs-toggle="tab">students</a></li>
                                        <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-bs-toggle="tab">news</a></li>
                                        <li role="presentation"><a href="#events" aria-controls="events" role="tab" data-bs-toggle="tab">events</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="description">cxgA
                                            <div class="ed_course_tabconetent">
                                                <h2>about course</h2>
                                                <p><?php echo $row['course_decription'];?></p>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="students">
                                            <div class="ed_inner_dashboard_info">
                                                <div class="ed_course_single_info">
                                                    <h2>total students :- <span>20</span></h2>
                                                    <h5>10 students recently join this course</h5>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>adler braxton</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>baldwin dallas</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>carney Tate</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>dwight easton</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>elbert wade</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>hailey kyler</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>graham ryder</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>jaxon keegan</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>kealy sage</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>lavern gunner</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class="ed_blog_bottom_pagination ed_toppadder40">
                                                                <nav>
                                                                    <ul class="pagination">
                                                                        <li><a href="javascript:void(0);">1</a></li>
                                                                        <li><a href="javascript:void(0);">2</a></li>
                                                                        <li><a href="javascript:void(0);">3</a></li>
                                                                        <li class="active"><a href="javascript:void(0);">Next <span class="sr-only">(current)</span></a></li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="news">
                                            <div class="ed_course_tabconetent">
                                                <h2>course news</h2>
                                                <h5>some recent news about this course....</h5>
                                                <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer
                                                    of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter
                                                    consequences that are extremely painful. </p>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="events">
                                            <div class="ed_course_single_info">
                                                <h2>total events on this course :-<span>5</span></h2>
                                                <div class="ed_course_single_inner_tab">
                                                    <div role="tabpanel">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation"><a class="active" href="#upcoming" aria-controls="upcoming" role="tab" data-bs-toggle="tab">upcoming</a></li>
                                                            <li role="presentation"><a href="#past" aria-controls="past" role="tab" data-bs-toggle="tab">past</a></li>
                                                        </ul>
                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="upcoming">
                                                                <div class="ed_course_event">
                                                                    <h5>1. mobile capabilities</h5>
                                                                    <p><span>orgnaiger :-</span> James Marco</p>
                                                                    <p><span>held on :-</span> October 1 @ 7:30 Am - 9:00 Am</p>
                                                                    <p>It is pleasure, expound the actual teachings of the great explorer of the truthI will give you a complete account of the system, and No one rejects, dislikes, or avoids pleasure itself,
                                                                        because.
                                                                    </p>
                                                                </div>
                                                                <div class="ed_course_event">
                                                                    <h5>2. Management Prog.</h5>
                                                                    <p><span>orgnaiger :-</span> Fumes Sarcoma</p>
                                                                    <p><span>held on :-</span>October 3 @ 10:30 Am - 2:00 Pm</p>
                                                                    <p>I will give you a complete account of the system, and No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, expound the actual teachings of the great explorer of
                                                                        the truth.</p>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="past">
                                                                <div class="ed_course_event">
                                                                    <h5>1. JavaScript Campus.</h5>
                                                                    <p><span>orgnaiger :-</span> Tina Fibonacci</p>
                                                                    <p><span>held on :-</span>September 20 @ 7:30 Pm - 12:00 Am</p>
                                                                    <p>avoids pleasure itself, because it is pleasure, expound the actual teachings of the great explorer of the truth will give you a complete account of the system, and No one rejects, dislikes.</p>
                                                                </div>
                                                                <div class="ed_course_event">
                                                                    <h5>2. Coding Seminar</h5>
                                                                    <p><span>orgnaiger :-</span> James Marco</p>
                                                                    <p><span>held on :-</span> September 10 @ 7:30 Am - 9:00 Am</p>
                                                                    <p>great explorer of the complete account of the system, and No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, expound the actual teachings of the truth.</p>
                                                                </div>
                                                                <div class="ed_course_event">
                                                                    <h5>3. Project Learning</h5>
                                                                    <p><span>orgnaiger :-</span> Shy Tommy</p>
                                                                    <p><span>held on :-</span>September 30 @ 10:30 Am - 2:00 Pm</p>
                                                                    <p>one rejects, dislikes, or avoids pleasure itself, because it is pleasure, of the system, and No expound the actual teachings of the great explorer of the truth.</p>
                                                                </div>
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
                            <!--tab End-->
                        </div>
											
                        <div class="ed_time_executor ed_toppadder40">
                            <ul>
							
                                <li><a href="course_lesson.html">lessons</a> <span>estimated time</span></li>
								<?php $active='Active';
							
										 $dataSQL="SELECT `lecture_id`, `lecture_name`, `couse_id`, `date_recorded`, `video_url`, `teacher_id`, 
										 `lecture_notes`, `lecture_status`, `duration` FROM `lecture` WHERE `lecture_status`=:status and `couse_id`=:course_id";
											$stmt = $conn2->prepare($dataSQL);
											
											$stmt->bindParam("status",$active);
											$stmt->bindParam("course_id",$course_id);
											$stmt->execute();
											while($row = $stmt->fetch()){
											 
											
            ?>
                                 <li><a href="course_lesson.php?l_id=<?php echo $row['lecture_id']; ?>&c_id=<?php echo $row['couse_id']; ?>"><?php echo $row['lecture_name']; ?></a> <span><?php echo $row['duration']; ?> Hrs</span></li>
                             <?php  
											}
											 
											
            ?>
                                
                               
                            </ul>
                        </div>
                    </div>
                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="sidebar_wrapper_upper">
                            <div class="sidebar_wrapper">
                                <aside class="widget widget_button">
                                    <a href="purchase_course.php?c_id=<?php echo $row['course_id']; ?>" class="ed_btn ed_green">Join this course</a>
                                </aside>
                                <aside class="widget widget_categories">
                                    <h4 class="widget-title">related courses</h4>
                                    <ul>
                                        <li><a href="course_single.html"><i class="fa fa-chevron-right"></i> Management Prog.</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-chevron-right"></i> ethical heaking</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-chevron-right"></i> Mobile Capabilities</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-chevron-right"></i> Javascript Campus</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-chevron-right"></i> Coding Seminar</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-chevron-right"></i> html css</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-chevron-right"></i> it skills</a></li>

                                    </ul>
                                </aside>
                                <aside class="widget widget_sharing">
                                    <h4 class="widget-title">share this course</h4>
                                    <ul>
                                        <li><a href="course_single.html"><i class="fa fa-facebook"></i> facebook</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-linkedin"></i> linkedin</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-twitter"></i> twitter</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-google-plus"></i> google+</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                        <div class="ed_sidebar_slider ed_bottompadder10">
                            <h3>popular courses</h3>
                            <div id="owl-demo3" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">Project Learning </a><span>£25</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item2" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">billing seminar</a><span>free</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item3" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">User experience Jam </a><span>£38</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item4" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">Girls on Rails </a><span>free</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">Coding Seminar </a><span>free</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item2" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">Javascript Campus </a><span>£60</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Sidebar End-->
                </div>
            </div>
        </div>
        <!--Single content end-->
        <!--Newsletter Section six start-->
        <div class="ed_newsletter_section">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="ed_newsletter_section_heading">
                                    <h4>Let us inform you about everything important directly.</h4>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="row">
                                    <div class="ed_newsletter_section_form">
                                        <form class="form row m-0">
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                                <input class="form-control" type="text" placeholder="Newsletter Email" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                <button class="btn ed_btn ed_green">confirm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
        <!--Newsletter Section six end-->
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
</body>

</html>