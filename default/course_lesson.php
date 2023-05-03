<?php include '../includes/sessions.php'; 
$lecture_id=$_GET['l_id'];$course_id=$_GET['c_id'];?><!DOCTYPE html>
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
    <title>we learn course Lecture</title>
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
      <!--header end -->
        <!--Breadcrumb start-->
        <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Course Lesson</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="courses.html">educo courses</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="course_single.html">Single course</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="course_lesson.html">Course Lesson</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Single content start-->

        <div class="ed_graysection ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
				<?php  
							
										 $dataSQL="SELECT `lecture_id`, `lecture_number`, `lecture_descriition`, `lecture_name`, `couse_id`, 
										 `date_recorded`, `video_url`, `teacher_id`, `lecture_notes`, `lecture_status`, `duration` FROM `lecture` WHERE `lecture_id`=:lecture_id ";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam("lecture_id",$lecture_id);
											
											$stmt->execute();
											while($row = $stmt->fetch()){
											 
											
            ?>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="ed_course_single_item">
                            <div class="ed_course_single_image">

                                <div class="ed_video_section">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <div class="ed_video">
                                            <!--<img src="https://dummyimage.com/800x450/000/fff" class="img-responsive" alt="1" />-->
											<video width="800" height="450" controls>
											  <source src="../videos/<?php echo $row['video_url'];?>" type="video/mp4">
											 
											 
											</video>
                                           
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <div class="ed_course_single_info">
                                <h2 class="ed_toppadder20"><?php echo $row['lecture_name'];?></h2>

                                  <p> <?php echo $row['lecture_notes'];?></p>

                                <button type="button" class="btn ed_btn pull-left ed_orange">preview lesson</button>
                                <button type="button" class="btn ed_btn pull-right ed_orange">next lesson</button>

                            </div>
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
					
					      <?php  
											}
											 
											
            ?>

                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="sidebar_wrapper_upper">
                            <div class="sidebar_wrapper">

                                <aside class="widget widget_progress_bar">
                                    <h4 class="widget-title">lessons status</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                            <span class="sr-only">75% Complete</span>
                                            <p>75% Completed</p>
                                        </div>
                                    </div>
                                </aside>

                                <aside class="widget widget_categories">
                                    <h4 class="widget-title">Search lessons</h4>
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> School Psychology</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Youth Counselling</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Exam Stress</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Our Expertise</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Vocational Counselling</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Student Guidance</a></li>
                                    </ul>
                                </aside>

                                <aside class="widget widget_sharing">
                                    <h4 class="widget-title">share this lesson</h4>
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