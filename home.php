<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();
$mail = $userRow['email'];
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Placement Cell</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" />
                    
        </noscript>
      
                        
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            
* {
  margin: 0;
  padding: 0;
  border: 0;
}

/* relevant styles */
.img__wrap {
  position: absolute;
  height: 200px;
  width: 200px;
left:90%;
}

.img__description {
  position: absolute;
  top: 10%;
  bottom: 10%;
  left: 5%;
  right: 0;
    border: 2px solid black
  background: rgba(29, 106, 154, 1);
  color: #000;
  visibility: hidden;
  opacity: 0;
    font-size: 22px;
    text-shadow: black;
    font-weight: 900;

  /* transition effect. not necessary */
  transition: opacity .3s, visibility .3s;
}

.img__wrap:hover .img__description {
  visibility: visible;
  opacity: 1;
}
        </style>
        
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">
                
				<!-- Header -->
					<header id="header">
                        <div class="logo" ><img src="images/presi.png" height="70" width="70" style="position:absolute;top:20%; left:20%" /></div>
						<div class="content">
                            
							<div class="inner">
								<h1>Placement Cell</h1>
								<p>Welcome to Placement Cell @<a href="#"> <?php echo $userRow['username']; ?></a> 
                               
                                    
            
          
          
                                </p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">About</a></li>
                                <li><a href="company/index.php">Companies</a></li>
                                <li><a href="#profile">Profile </a></li>
                                 <li><a href="#noti">Notification</a></li>
                                <li><a href="#alumini">Alumini</a></li>
                                <li><a href="#contact">Feedback </a></li>
                                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" /></span>
                                <H3>GREETINGS! WE AT PRESIDENCY COLLEGE, EXTEND A HEARTY INVITATION TO ALL OUR RECRUITING PARTNERS.<br /></H3>
<p>The relationship between educational institutions and industry is highly synergetic. Since the primary objective of students in pursuing higher education is to get a good job on completion of their studies, the institutions need the support of industry to help the eligible students in their final placements. On the other hand, industry looks to the educational institutions for their requirement of qualified and trained manpower. Thus, it is in the interest of both Industry &amp; Institutions to develop a strong cooperation, which can be win-win for both and will also be beneficial to the students.

This has been the guiding principle for us at Presidency College. Apart from excelling in academics, we want our students to be corporate ready professionals. Hence we conduct extensive Employability Enhancement Program designed to develop professional skills and provide value added training and certifications in their domain areas. They are also exposed to practical aspects of industry through guest lectures, industrial visits, internships etc.

While we highly appreciate the confidence reposed in us and the invaluable support extended by our recruiters over the years, we are eager to know the experience and expectations in terms of required skill sets. We would be happy to partner with our recruiters in upgrading the skills of our students as per specific industry needs, so that they can be productive from first day and be the preferred choice for hiring.
<br /><i>
We are committed to ensure the best recruiting experience and assure you of our best efforts. Happy hiring!</i>
<br /><br />
Warm regards,
<b><br />
Mr. A. Preeteesh</b><br />
                                   Head – <i>Training &amp; Placement</i></p>
							</article>

						
<!-- Profile -->
                        <article id="profile">
                            <div class="img__wrap">
                          <a href="company/display_profile.php" class="icon" style="float:right;"><img src="images/view.png" class="img__img" height="50" width="50" />
                              <p class="img__description">View</p></a></div>
                            <section id="profile">
								<h2 class="major">Edit Your Profile</h2>
								<form method="post" action="pro.php">
		                          <div class="field half first" >
										<label for="name">First Name</label>
										<input type="text" name="fname" placeholder="First Name" id="name" value=" <?php echo $userRow['fname']; ?>" />
									</div>
									<div class="field half">
										<label for="email">Last Name</label>
										<input type="text" name="lname" placeholder="Last Name" id="email" value=" <?php echo $userRow['lname']; ?>" />
									</div>							
                                   
                                    
                                      <div class="field">
										<label for="message">Father's Name</label>
										<input type="text" id="father" name="father" placeholder="Father's Name" rows="4"/>
									</div>
                                    <div class="field">
										<label for="message">Mail</label>
										<input type="email" id="mail" name="mail" placeholder="mail" value=" <?php echo $userRow['email']; ?>" rows="4"/>
									</div>
                                      <div class="field">
										<label for="message">Address</label>
										<input type="text" id="address" name="address" placeholder="Address" rows="4"/>
									</div>
                                     <div class="field ">
										<label for="message">Date Of Birth</label>
										<input type="date" name="date" id="date" style="background:transparent;"  rows="4"/>
									</div>
                                      <div class="field half first">
										<label for="message">State</label>
										<input type="text" id="state" name="state" placeholder="State" rows="4"/>
									</div>
                                      <div class="field half">
										<label for="message">Country</label>
										<input type="text" id="country" name="country" placeholder="Country" rows="4"/>
									</div>
                                      <div class="field" >
										<label for="message">Contact Number</label>
										<input type="text" id="number"  name="number"
                    placeholder="Ph. Number" style="width: 50%;" rows="4"/>
									</div>
                                    <br />
                                    
                                    
         <h2 class="major">Academic Information</h2>     
                                    <br />
								<div class="field">
										<label for="message">Enroll No.</label>
										<input type="text" id="eno." name="eno" placeholder="Enroll No." rows="4"/>
									</div>
                                    <div class="field half first">
										<label for="message">College</label>
										<input type="text" id="col" name="col" placeholder="College" rows="4"/>
									</div>
                                    <div class="field half">
										<label for="demo-category">Cource</label>
											<div class="select-wrapper">
												<select name="course" id="course">
													<option value="BCA">BCA</option>
													<option value="BBA">BBA</option>
													<option value="BCom">BCom</option>
													<option value="BAJ">BAJ</option>
													<option value="MBA">MBA</option>
                                                    <option value="MFA">MFA</option>
                                                    <option value="MCA">MCA</option>
                                                    <option value="MCom">MCom</option>
												</select>
											</div>
									</div>
                                    <div class="field">
										<label for="demo-category">Year</label>
											<div class="select-wrapper">
												<select name="year" id="year">
													<option value="">-</option>
													<option value="I">I Year</option>
													<option value="II">II Year</option>
													<option value="III">III Year</option>
													
												</select>
											</div>
									</div>
                                
                                     <div class="field half first">
										<label for="demo-category">Sem</label>
											<div class="select-wrapper">
												<select name="sem" id="sem">
													<option value="1 sem">1 sem</option>
													<option value="2 sem">2 sem</option>
													<option value="3 sem">3 sem</option>
													<option value="4 sem">4 sem</option>
													<option value="5 sem">5 sem</option>
                                                    <option value="6 sem">6 sem</option>
												</select>
											</div>
									</div>
                                     <div class="field half">
										<label for="demo-category">Backlog?</label>
											<div class="select-wrapper">
												<select name="backlog" id="backlog">
													<option value="">-</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>	
												</select>
											</div>
									</div>
                                    <table>
                                     <tr>
                                         <td> <div class="field half first">
										<label for="message">10th Marks</label>
										<input type="text" id="ten" name="ten" placeholder="10th Marks" rows="4"/>
                                         </div>
                                        <div class="field half first">
										<label for="message">10th Board</label>
										<input type="text" id="tenb" name="tenb" placeholder="10th Board" rows="4"/>
                                         </div>
                                         <div class="field">
										<label for="message">Year of passing </label>
										<input type="text" id="yp1" name="yp1" placeholder="Year of passing" rows="4"/>
                                         </div></td></tr>
                                   <br />
                                        
                                        <tr>
                                         <td> <div class="field half first">
										<label for="message">12th Marks</label>
										<input type="text" id="twl" name="twl" placeholder="12th Marks" rows="4"/>
                                         </div>
                                        <div class="field half first">
										<label for="message">12th Board</label>
										<input type="text" id="twlb" name="twlb" placeholder="12th Board" rows="4"/>
                                         </div>
                                         <div class="field">
										<label for="message">Year of passing </label>
										<input type="text" id="yp2" name="yp2" placeholder="Year of passing" rows="4"/>
                                         </div></td></tr>                  
                                    </table>
                                    <h2 class="major">Degree Marks</h2>
                                    <div class="field half" style="width:25%">
										<label for="message">I sem Marks</label>
										<input type="text" id="1sem" name="1sem" placeholder="I sem Marks" rows="4"/>
									</div>
                                     <div class="field half" style="width:25%">
										<label for="message">II sem Marks</label>
										<input type="text" id="2sem" name="2sem" placeholder="II sem Marks" rows="4"/>
									</div>
                                     <div class="field half" style="width:25%">
										<label for="message">III sem Marks</label>
										<input type="text" id="3sem" name="3sem" placeholder="III sem Marks" rows="4"/>
									</div>
                                     <div class="field half" style="width:25%">
										<label for="message">IV sem Marks</label>
										<input type="text" id="4sem" name="4sem" placeholder="IV sem Marks" rows="4"/>
									</div>
                                    <div class="field first half" style="width:25%">
										<label for="message">V sem Marks</label>
										<input type="text" id="5sem" name="5sem" placeholder="V sem Marks" rows="4"/>
									</div>
                                    <div class="field half" style="width:25%">
										<label for="message">VI sem Marks</label>
										<input type="text" id="6sem" name="6sem" placeholder="VI sem Marks" rows="4"/>
									</div><br />
                                     <div class="field half" >
										<label for="message"> Aggregate</label>
										<input type="text" id="agg" name="agg" placeholder="Aggregate" rows="4"/>
									</div><br />
                                   
                  <ul class="actions">
										<li><input type="submit" value="Submit" name="submitp" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							
                                      
                      
                      
                        </section>
                        </article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="feedback.php">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="namef" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="email" name="mailf"  id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="messagef" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" name="submit1" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								
    
							</article>

                        <!--about->

						<!-- About -->
							<article id="noti">
								<h2 class="major">Notifications</h2>
								<?php 
$con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
$q=mysqli_query($con,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Notice found !!!</h2>";
?>

<?php
}
else
{
?>


                                
<table class="table table-bordered">
	
	<Tr class="success">
		
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>

	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";

echo "<td>".$row['topic']."</td>";
echo "<td>".$row['des']."</td>";
echo "<td>".$row['date']."</td>";

?>



<?php 

}
		?>
		
</table>
<?php }?>
							</article>
                        
    	<!-- About -->
							<article id="alumini">
								<h2 class="major">Alumini Details</h2>
								<?php 
$con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
$q=mysqli_query($con,"select * from alumini ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Notice found !!!</h2>";
?>

<?php
}
else
{
?>


                                
<table class="table table-bordered">
	
	<Tr class="success">
		
		<th>name</th>
		<th>branch</th>
		<th>company name</th>
        <th>package</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";

echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "<td>".$row['cname']."</td>";
echo "<td>".$row['package']."</td>";
?>



<?php 

}
		?>
		
</table>
<?php }?>
							</article>                    
						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions vertical">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="field half first">
											<label for="demo-name">Name</label>
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
										</div>
										<div class="field half">
											<label for="demo-email">Email</label>
											<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
										</div>
										<div class="field">
											<label for="demo-category">Category</label>
											<div class="select-wrapper">
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
										</div>
										<div class="field half first">
											<input type="radio" id="demo-priority-low" name="demo-priority" checked>
											<label for="demo-priority-low">Low</label>
										</div>
										<div class="field half">
											<input type="radio" id="demo-priority-high" name="demo-priority">
											<label for="demo-priority-high">High</label>
										</div>
										<div class="field half first">
											<input type="checkbox" id="demo-copy" name="demo-copy">
											<label for="demo-copy">Email me a copy</label>
										</div>
										<div class="field half">
											<input type="checkbox" id="demo-human" name="demo-human" checked>
											<label for="demo-human">Not a robot</label>
										</div>
										<div class="field">
											<label for="demo-message">Message</label>
											<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">@Copyright 2018<b> Placements </b></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

