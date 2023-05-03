<?php include '../includes/sessions.php'; ?><<!DOCTYPE html>
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
    <title>Educo Multipurpose Responsive HTML Template</title>
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
		<?php  if($student_id==""){
			
			$student_id=0;
		}
							
										 $dataSQL="SELECT * FROM `course` ";
											$stmt = $conn2->prepare($dataSQL);
											
											$stmt->execute();
											while($row = $stmt->fetch()){
											 $category=$row['category_id']
											
            ?>
        <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Purchase Course</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="courses.html">single course</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="purchase_course.html"><?php echo $row['course_name'];?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Single content start-->
		
        <div class="ed_graysection ed_purchase_course ed_toppadder80 ed_bottompadder80 course_purchase_wrapper">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="ed_course_single_item">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="ed_course_single_image">
                                        <img src="https://dummyimage.com/800x450/000/fff" alt="event image" />
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="ed_course_single_info">
                                        <h2><?php echo $row['course_name'];?> <span> $<?php echo $row['course_price'];?></span></h2>
                                        <div class="ed_abbcart">
                                            <button href="javascript:void(0);" class="btn ed_btn ed_green" onclick="cartAdd('<?php if($row['student_id']){ echo $row['student_id']; }else{ echo 0; } ?>','<?php echo $_COOKIE[$session_id] ?>','<?php echo $row['course_id'] ?>')" >add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="ed_course_single_tab ed_toppadder40">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-bs-toggle="tab">description</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="description">
                                                    <div class="ed_course_tabconetent">
                                                        <h2>about course</h2>
                                                        <p><?php echo $row['course_decription'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab End-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="ed_mostrecomeded_course_slider ed_toppadder40 ed_bottompadder40">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h2 class="ed_bottompadder20">related courses</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="ed_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_item_description ed_most_recomended_data">
                                                <h4><a href="course_single.html">Project Learning </a><span>£25</span></h4>
                                                <div class="row">
                                                    <div class="ed_rating">
                                                        <div class="col-lg-6 col-md-7 col-sm-7 col-6">
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
                                                        <div class="col-lg-6 col-md-5 col-sm-5 col-6">
                                                            <div class="ed_views">
                                                                <i class="fa fa-users"></i>
                                                                <span>35 students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="course_detail">
                                                    <div class="course_faculty">
                                                        <img src="https://dummyimage.com/263x263/000/fff" alt=""> <a href="instructor_dashboard.html">Joanna Simpson</a>
                                                    </div>
                                                </div>
                                                <p>Project-Based Learning is a flexible tool for framing given academic standards into flexible tool for framing.</p>
                                                <a href="javascript:void(0);" class="btn ed_btn ed_orange btn-sm">add to cart</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="ed_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_item_description ed_most_recomended_data">
                                                <h4><a href="course_single.html">Billing Seminar </a><span>free</span></h4>
                                                <div class="row">
                                                    <div class="ed_rating">
                                                        <div class="col-lg-6 col-md-7 col-sm-7 col-6">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="ed_stardiv">
                                                                        <div class="star-rating"><span style="width:80%;"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="row">
                                                                        <p>(10 review)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-5 col-sm-5 col-6">
                                                            <div class="ed_views">
                                                                <i class="fa fa-users"></i>
                                                                <span>55 students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="course_detail">
                                                    <div class="course_faculty">
                                                        <img src="https://dummyimage.com/263x263/000/fff" alt=""> <a href="instructor_dashboard.html">DESPERATE SCOTT </a>
                                                    </div>
                                                </div>
                                                <p>We offer these billing seminars to AMA member physicians along with their staff (at least must attend the seminar)</p>
                                                <a href="javascript:void(0);" class="btn ed_btn ed_orange btn-sm">add to cart</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="ed_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_item_description ed_most_recomended_data">
                                                <h4><a href="course_single.html">programming </a><span>£38</span></h4>
                                                <div class="row">
                                                    <div class="ed_rating">
                                                        <div class="col-lg-6 col-md-7 col-sm-7 col-6">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="ed_stardiv">
                                                                        <div class="star-rating"><span style="width:80%;"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="row">
                                                                        <p>(9 review)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-5 col-sm-5 col-6">
                                                            <div class="ed_views">
                                                                <i class="fa fa-users"></i>
                                                                <span>60 students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="course_detail">
                                                    <div class="course_faculty">
                                                        <img src="https://dummyimage.com/263x263/000/fff" alt=""> <a href="instructor_dashboard.html">MIKE TUSSLE</a>
                                                    </div>
                                                </div>
                                                <p>Sometimes students need help with things unrelated to school. Where we come in and make sure you are happy .</p>
                                                <a href="javascript:void(0);" class="btn ed_btn ed_orange btn-sm">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="sidebar_wrapper_upper">
                            <div class="sidebar_wrapper">
                                <aside class="widget widget_cart">
                                    <div class="course_single_item">
                                        <div class="course_single_info">
											<?php  
											
							                $total=0;
										 $dataSQL="SELECT * FROM `order_course` INNER JOIN  `course` ON `course`.`course_id`=`order_course`.`course_id` WHERE `session_id`=:session_id OR `student_id`=:student_id";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam(":student_id",$student_id);
											$stmt->bindParam(":session_id",$_COOKIE[$session_id]);
											$stmt->execute();
											while($row = $stmt->fetch()){
												$total=+$row['course_price'];
											 
											
            ?>
                                            <div class="purchase_title">
                                                <img src="https://dummyimage.com/800x450/000/fff" alt="event image" /><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Remove Item">x</a>
                                                <h5><?php echo $row['course_name'];?></h5>
                                                <p class="quantity">1 X <span>$<?php echo $row['course_price'];?></span></p>
                                            </div>
											
											<?php }?>
                                          
                                            <p class="total">Subtotal: <span>$<?php echo $total;?> </span></p>
                                            <div class="button_cart">
                                                <a href="cart.php" class="btn ed_btn ed_green">view cart</a><a href="checkout.php" class="btn ed_btn ed_orange pull-right">checkout</a>
                                            </div>
                                        </div>
                                    </div>
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

                            </div>
                        </div>
                    </div>
                    <!--Sidebar End-->

                </div>
            </div>

        </div>
											<?php }?>
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
	 <script src="../assets/scripts/addcart.js"></script>
</body>

</html>