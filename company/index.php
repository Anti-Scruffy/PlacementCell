<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Companies</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="../home.php" id="logo">Placement Cell</a></h1>
								<hr />
								<p>All Placement Related Company details</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Start</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index2.php">Upcoming Companies</a></li>
								
								<li><a href="../home.php">Home</a></li>
								<li><a href="display_profile.php">Profile</a></li>
								
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2><strong>RECRUITERS</strong>.</h2>
						<p>
							
						</p>
					</header>
				</section>

			<!-- Carousel -->
            
				<section class="carousel">
					<div class="reel">
<?php
                    $con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
                    
                    $query = mysqli_query($con,"SELECT * FROM company WHERE rpost='done'");
                    while($row = mysqli_fetch_array($query))
    {?>
						<article>
							<a href="#" class="image featured">  
                         <?php echo 
                                    '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200"/>  
                               '?>
                      </a>
							<header>
								<h3 style="font-weight:bold;"><?php echo $row['cname']; ?></h3>
							</header>
							<p>Profile : <?php echo $row['jpro']; ?></p>
                            <p>Package : <?php echo $row['package']; ?> LPA</p>
                            <p>Date : <?php echo $row['date']; ?></p>
						</article>

						
				
                 <?php   
 					
   }
    					

        
                    ?>
					</div>
</section>
    
					<section id="banner">
					<header>
						<h2><strong>Top Paying RECRUITERS</strong>.</h2>
						<p>
							
						</p>
					</header>
				</section>	
            
				<section class="carousel">
					<div class="reel">
<?php
                    $con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
                    
                    $query = mysqli_query($con,"SELECT * FROM company WHERE package>300000");
                    while($row = mysqli_fetch_array($query))
    {?>
						<article>
							<a href="#" class="image featured">  
                         <?php echo 
                                    '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200"/>  
                               '?>
                      </a>
							<header>
								<h3 style="font-weight:bold;"><?php echo $row['cname']; ?></h3>
							</header>
							<p>Profile : <?php echo $row['jpro']; ?></p>
                            <p>Package : <?php echo $row['package']; ?> LPA</p>
                            <p>Date : <?php echo $row['date']; ?></p>
						</article>

						
				
                 <?php   
 					
   }
    					

        
                    ?>
					</div>
</section>

			<!-- Features -->
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Best RECRUITERS</h2>
							
						</header>
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Gravida aliquam penatibus</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Sed quis rhoncus placerat</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Magna laoreet et aliquam</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
						</div>
					</section>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						
							<!-- Posts 
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Nisl fermentum integer</a></h3>
												</header>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Phasellus portitor lorem</a></h3>
												</header>
												<span class="timestamp">6 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Magna tempus consequat</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Feugiat lorem ipsum</a></h3>
												</header>
												<span class="timestamp">2 days ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Photos 
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<!--<div class="row 25%">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
										</div>
									</div>
</section>

						</div>
						<hr />
						<div class="row">
							<div class="12u"-->

							

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Placements. All rights reserved.</li>
										</ul>
									</div>

							

						
        </div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>