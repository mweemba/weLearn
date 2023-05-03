 <?php $time=time();
$session_id = "session_id";
 if(!isset($_COOKIE[$session_id])){	  
  $session_idval   = md5(rand(1,100000000));
setcookie($session_id, $session_idval, time() +( 86400 * 60), "/");

 }
 ?>
 <header id="ed_header_wrapper">
            <div class="ed_header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p>welcome <?php if(isset($_SESSION['user_id_wel'])){ echo $firstname;} ?> to our new session of education</p>
                            <div class="ed_info_wrapper">
							<?php 
							
							if(!isset($_SESSION["user_id_wel"])){
								
	
							?>
                                <a href="javascript:void(0);" id="login_button">Login</a>
                                <div id="login_one" class="ed_login_form">
                                    <h3>log in</h3>
                                    <form class="form row m-0" id="loginform" onsubmit="return false" method="post">
                                        <div class="form-group">
                                            <label class="control-label">Email :</label>
                                            <input type="email" id="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Password :</label>
                                            <input  type="password"  id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit">login</button>
                                            <a href="signup.html">registration</a>
                                        </div>
										<div id="LoginResponse" class="register-link m-t-15 text-center">
                                        
                                    </div>
                                    </form>
                                </div>
								
							<?php } ?>
                            </div>
							 
                        </div>
                    </div>
                </div>
            </div>
            <div class="ed_header_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="educo_logo">
                                <a href="index.html"><img src="../assets/images/header/logo.png" alt="logo" /></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-2 col-md-1 col-sm-12 col-12">
                            <div class="main-menu-container">
                                <div class="main-menu">
                                    <ul>
                                        <li class="has-sub-menu">
                                            <a href="index.php">Home</a>
                                           
                                        </li>
                                     <!--   <li><a href="about.html">about us</a></li> -->
                                        
                                        <li class="has-sub-menu">
                                            <a href="javascript:void(0);">Short courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.html">Business</a></li>
												<li><a href="courses.html">Finance & Accounting</a></li>
												<li><a href="courses.html">IT & Software</a></li>
												<li><a href="courses.html">Office Productivity</a></li>
												<li><a href="courses.html">Design</a></li>
												<li><a href="courses.html">Marketing</a></li>
												<li><a href="courses.html">Hearlth and Fitness</a></li>
												<li><a href="courses.html">Music</a></li>
												<li><a href="courses.html">Art</a></li>
												
                                               
                                            </ul>
                                        </li>
										   <li class="has-sub-menu">
                                            <a href="javascript:void(0);">GCE/IGCSE</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
												<li><a href="courses.html">Development</a></li>
                                               
                                            </ul>
                                        </li>
										   <li class="has-sub-menu">
                                            <a href="javascript:void(0);">Diploma/Gradate/PostGraduate</a>
                                            <ul class="sub-menu">
											<?php  
							              
										 $dataSQL="SELECT `prog_category_id`, `prog_category_name` FROM `program_category`";
											$stmt = $conn2->prepare($dataSQL);
										
											
											$stmt->execute();
											while($row = $stmt->fetch()){
												
											 
											
                                          ?>
                                                <li><a href="programs_category.php?prog_cat_id=<?php echo $row['prog_category_id'];?>"><?php echo $row['prog_category_name'];?></a></li>
											<?php } ?>
                                            </ul>
                                        </li>
                                        <li class="has-sub-menu">
                                            <a href="javascript:void(0);">Colleges/Universities</a>
                                            <ul class="sub-menu">
												<?php  
							              
										 $dataSQL="SELECT `institution_id`, `institution_name`, `institution_country`, `status` FROM `institutions`";
											$stmt = $conn2->prepare($dataSQL);
										
											
											$stmt->execute();
											while($row = $stmt->fetch()){
												
											 
											
                                          ?>
                                               
                                                <li><a href="programs_institution.php?inst_id=<?php echo $row['institution_id'];?>"><?php echo $row['institution_name'];?></a></li>
                                                	<?php } ?>
                                            </ul>
                                        </li>
                                        <!--<li><a href="contact.html">Contact</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-7 col-md-8 col-sm-12 col-12">
						
                            <div class="educo_call edu-info-menu">
                           
								 <div class="dropdown ">
								  <a href="javascript:void(0);">(
								  <?php  $total=0;
										 $dataSQL="SELECT * FROM `order_course` INNER JOIN  `course` ON `course`.`course_id`=`order_course`.`course_id` WHERE `session_id`=:session_id OR `student_id`=:student_id";
											$stmt = $conn2->prepare($dataSQL);
											$stmt->bindParam(":student_id",$student_id);
											$stmt->bindParam(":session_id",$_COOKIE[$session_id]);
											$stmt->execute();
											echo $count = $stmt->rowCount();
												?> )<i class="fa fa-shopping-cart" style="font-size:30px;color:blue"></i><span></span></a>    
								  <div class="dropdown-content">
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
                                               
                                                <p><?php echo $row['course_name'];?></p>
                                                <p class="quantity">1 X <span>$<?php echo $row['course_price'];?></span></p>
                                            </div>
											
											<?php }?>
                                          
                                            <p class="total">Subtotal: <span>$<?php echo $total;?> </span></p>
                                            <div class="button_cart">
                                               <a href="checkout.php" class="btn ed_btn ed_orange pull-right">checkout</a>
                                            </div>
                                        </div>
									
								  </div>
								</div>
								
								
								 <div class="dropdown ">
								  <a href="javascript:void(0);"><i class="fa fa-heart" style="font-size:30px;color:blue"></i></a>
								  <div class="dropdown-content">
									<a href="Logout.php">Logout</a>
									<a href="#">Change Password </a>
									<a href="#">My information</a>
									
								  </div>
								</div>
                               
							   	<?php if(isset($_SESSION["user_id_wel"])){ ?>
							               
                                   
								 <div class="dropdown ">
								  <div class="ed_table_price" style="font-size: 20px;   height: 38px; width: 43px;background-color: #000000; border-radius: 50%; text-align:left;margin: auto;" ><b><?php echo strtoupper(substr($firstname, 0, 1).substr($lastname, 0, 1)); ?></b></div>
								  <div class="dropdown-content">
									<a href="Logout.php">Logout</a>
									<a href="#">Change Password </a>
									<a href="profile.php">My information</a>
									<hr class="divider"></hr>
										<a href="profile.php">My Learning</a>
									<a href="profile.php">Watchlist</a>
									<a href="#">become a teacher</a>
									
								  </div>
								</div>
										

							
							<?php } ?>
                            </div>
						
                        </div>
                    </div>
                </div>
            </div>
        </header>
       