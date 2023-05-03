<?php 
$prog_cat_id=$_GET['prog_cat_id'];
include '../includes/sessions.php'; ?><<!DOCTYPE html>
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
    <title>weLearn</title>
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
                            <h2><?php  
							              
										 $dataSQL="SELECT `prog_category_id`, `prog_category_name` FROM `program_category` WHERE `prog_category_id`=:prog_cat_id";
											$stmt = $conn2->prepare($dataSQL);
										   $stmt->bindParam(":prog_cat_id",$prog_cat_id);
											
											$stmt->execute();
											while($row = $stmt->fetch()){
												
											 
											
                                          ?>
                                              <?php echo $row['prog_category_name'];?>
											<?php } ?> Programs</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="events.html">Programs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Single content start-->
        <div class="ed_single_wrapper ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              
                                
                            </div>
                            <!-- Section eleven start -->
                            <div class="ed_event_wrapper">
                                <div class="row">
								<?php  
							              
										 $dataSQL="SELECT `prog_id`, `programname`, `program_category`, `level`, `description`, `small_image`, `large-image` FROM `programs` WHERE `program_category`=:prog_cat_id";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam(":prog_cat_id",$prog_cat_id);
											
											$stmt->execute();
											while($row = $stmt->fetch()){
												
											 
											
                                          ?>
                                     <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="<?php echo $row['small_image'];?> alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="program_courses.php?prog_id=<?php echo $row['prog_id'];?>"><?php echo $row['programname'];?></a></h4>
                                               
                                                <p><?php echo $row['description'];?></p>
                                                <a href="program_courses.php?prog_id=<?php echo $row['prog_id'];?>">see courses<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
											<?php } ?>
                                </div>

                                <div class="col-lg-12">
                                    <div class="ed_blog_bottom_pagination">
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
                        <!-- Section eleven end -->
                    </div>
                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="sidebar_wrapper">
                            <aside class="widget widget_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
							</span>
                                </div>
                            </aside>
                            <aside class="widget widget_calendar">
                                <h4 class="widget-title">Events calendar</h4>
                                <div class="jquery-calendar"></div>
                            </aside>
                            <aside class="widget widget_categories">
                                <h4 class="widget-title">Events Documented</h4>
                                <ul>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Physics Championship</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> The First Color Run</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Tea For Everyone</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Catrina Charity</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Edution Orchestra</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Welcome Party</a></li>
                                </ul>
                            </aside>
                            <aside class="widget widget_tag_cloud">
                                <h4 class="widget-title">Search by Tags</h4>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">university</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">skill</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">tests</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">exams</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">elementary school</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">college</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">edution</a>
                            </aside>
                        </div>
                    </div>
                    <!--Sidebar End-->
                </div>
            </div>
        </div>
        <!--Single content end-->
        <!--skill section start -->
        <div class="ed_graysection ed_toppadder90 ed_bottompadder90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="skill_section">
                            <h4><a href="javascript:void(0);">See our events gallery</a></h4>
                            <p>We excell in multiple areas, but there are some in which we are absolutely rocking.</p>
                            <span><i class="fa fa-file-image-o"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="skill_section">
                            <h4><a href="javascript:void(0);">Want to be a volunteer? <i class="fa fa-long-arrow-right"></i></a></h4>
                            <p>Not a member yet? You need to download this sign-in sheet and make sure you become one.</p>
                            <span><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--skill section end -->
        <!--Newsletter Section six start-->
		
		
       <?php include '../includes/footer.php'; ?>
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