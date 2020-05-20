<?php
 include 'lib/session.php';
 include_once "connect.php";
 Session::checkSession();


?>
	<?php
			if(isset($_GET['action'])&&$_GET['action'] == "logout"){
				Session::destroy();
			}else{
				
			}
		
		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                                       
</head>                                       
<body class="animsition">

	<!-- Header -->                     
	<header class="header1">                                 
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				
					<form action ="search.php" method ="post">
							<input type="text" name="searchVal" placeholder="Search here"onkeydown="searchq();"/> <button type="submit" class="searchButton">
							  <i class="fa fa-search"></i>
						   </button>
                                   </form>
						
			    <div class="topbar-child2">
					<div class="topbar-language rs1-select2">
							<a href="registration.html">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register
								</a>
						<a href="login.php">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;login
						</a>
						
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					OnlineBookSystem
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
				<nav class="menu">
						<ul class="main_menu">
						
							<li>
								<a href="latest.php">Latest</a>
								
							</li>

							
							

							<li>
								<a href="notification.php">Notification</a>
							</li>
							<li>
								<a href="list.php">Save List</a>
							</li>
							<li>
								<a href="feedback.php">Feedback</a>
							</li>


							
						</ul>
					</nav>
				</div>

				
				<!-- Header Icon -->
				<div class="header-icons">
					<a href="profile.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<?php
						$count=0;
						$userid=Session::get('userId');

						$readsql="SELECT * FROM savelist s, books b where s.uid='$userid' AND s.bid=b.bid ";
						$result = mysqli_query($con,$readsql);
						
			             if(!empty($result)){
							
							while($row = mysqli_fetch_array( $result )){
								   $count++;
							}
								   ?>
									   <span class="header-icons-noti"><?php echo $count;?></span>
									   <div class="header-cart header-dropdown">
							

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									
								
								
									<!-- Button -->
									<a href="list.php" class="btn btn-primary">
									See Read Later List
									</a>
							
								
								</div>

								
							</div>
						</div>
									   <?php

							}else{

							}

						?>
					
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Button to Open the Modal -->


