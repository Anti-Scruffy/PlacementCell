<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Placement management cell Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
          img:hover{
            opacity: .7;
              border: 2px solid black;
             
          }
        
      </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			
        
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Manage  Notification</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
              
            if($page=="add_users")
			{
				include('add_users.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
			
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
		  }
		  
		  else
		  {
		  ?>
            <?php } ?>

      <form method="post" action="../pro.php">
      
<h2 class="major">Profile Information</h2>  <hr /><br />
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">First Name</div>
		<div class="col-sm-5">
		<input type="text" name="fname" placeholder="First Name"  class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Last Name</div>
		<div class="col-sm-5">
		<input type="text" name="lname" placeholder="Last Name" id="email" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Topic</div>
		<div class="col-sm-5">
		<input type="file" name="sub" name="image" id="image" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Father's Name</div>
		<div class="col-sm-5">
		<input type="text" id="father" name="father" placeholder="Father's Name"  class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Mail</div>
		<div class="col-sm-5">
		<input type="email" id="mail" name="mail" placeholder="mail" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Address</div>
		<div class="col-sm-5">
		<input type="text" name="address" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Date Of Birth</div>
		<div class="col-sm-5">
		<input type="date" name="date" id="date"  class="form-control"/></div>
	</div>
	
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">State</div>
		<div class="col-sm-5">
		<input type="text" id="state" name="state" placeholder="State"  class="form-control"/></div>
	</div>
	
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Country</div>
		<div class="col-sm-5">
		<input type="text" id="country" name="country" placeholder="Country"   class="form-control"/></div>
	</div>
	
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Contact Number</div>
		<div class="col-sm-5">
		<input type="text" id="number"  name="number"
                    placeholder="Ph. Number"  class="form-control"/></div>
	</div>
	<br />
          <h2 class="major">Academic Information</h2>  <hr />
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enroll No.</div>
		<div class="col-sm-5">
		<input type="text" id="eno." name="eno" placeholder="Enroll No."  class="form-control"/></div>
	</div>
	
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">College</div>
		<div class="col-sm-5">
		<input type="text" id="col" name="col" placeholder="College"   class="form-control"/></div>
	</div>
    
          <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Cource</div>
		<div class="col-sm-5">
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
											</div></div>
	</div>
        
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Year</div>
		<div class="col-sm-5">
		<div class="select-wrapper">
												<select name="year" id="year">
													<option value="">-</option>
													<option value="I">I Year</option>
													<option value="II">II Year</option>
													<option value="III">III Year</option>
													
												</select>
											</div></div>
	</div>
          
     <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Sem</div>
		<div class="col-sm-5">
		<div class="select-wrapper">
												<select name="sem" id="sem">
													<option value="1 sem">1 sem</option>
													<option value="2 sem">2 sem</option>
													<option value="3 sem">3 sem</option>
													<option value="4 sem">4 sem</option>
													<option value="5 sem">5 sem</option>
                                                    <option value="6 sem">6 sem</option>
												</select>
											</div></div>
	</div>
          
     <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Backlog?</div>
		<div class="col-sm-5">
		<div class="select-wrapper">
												<select name="backlog" id="backlog">
													<option value="">-</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>	
												</select>
											</div></div>
	</div>
          
     <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">10th Marks</div>
		<div class="col-sm-5">
		<input type="text" id="ten" name="ten" placeholder="10th Marks"   class="form-control"/></div>
	</div>
          
     <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">10th Board</div>
		<div class="col-sm-5">
		<input type="text" id="tenb" name="tenb" placeholder="10th Board"   class="form-control"/></div>
	</div>
          
     <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Year of passing </div>
		<div class="col-sm-5">
		<input type="text" id="yp1" name="yp1" placeholder="Year of passing"   class="form-control"/></div>
	</div>
          
     <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">12th Marks</div>
		<div class="col-sm-5">
		<input type="text" id="twl" name="twl" placeholder="12th marks"   class="form-control"/></div>
	</div>
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">12th Board</div>
		<div class="col-sm-5">
		<input type="text" id="twlb" name="twlb" placeholder="12th Board"   class="form-control"/></div>
	</div>     
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Year of passing</div>
		<div class="col-sm-5">
		<input type="text" id="yp2" name="yp2" placeholder="Year of passing"   class="form-control"/></div>
	</div> 
   
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">I sem Marks</div>
		<div class="col-sm-5">
		<input type="text" id="1sem" name="1sem" placeholder="I sem Marks"   class="form-control"/></div>
	</div> 
          
     <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">II sem Marks</div>
		<div class="col-sm-5">
		<input type="text" id="2sem" name="2sem" placeholder="II sem Marks"  class="form-control"/></div>
	</div> 
          
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">III sem Marks</div>
		<div class="col-sm-5">
		<input type="text" id="3sem" name="3sem" placeholder="III sem Marks" class="form-control"/></div>
	</div> 
      
        <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">IV sem Marks</div>
		<div class="col-sm-5">
		<input type="text" id="4sem" name="4sem" placeholder="IV sem Marks"   class="form-control"/></div>
	</div> 
          
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">V sem Marks</div>
		<div class="col-sm-5">
		<input type="text" id="5sem" name="5sem" placeholder="V sem Marks"   class="form-control"/></div>
	</div> 
          
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">VI sem Marks</div>
		<div class="col-sm-5">
		<input type="text" id="6sem" name="6sem" placeholder="VI sem Marks"   class="form-control"/></div>
	</div> 
          
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Aggregate</div>
		<div class="col-sm-5">
		<input type="text" id="agg" name="agg"   class="form-control"/></div>
	</div> 
          
    <div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
          
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Upload Resume!</div>
		<div class="col-sm-5">
		<input type="text" type="file" name="file_res" id="file_res" placeholder="12th Board"   class="form-control"/></div>
	</div> 
                
          
        
          
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="submit" class="btn btn-success" />&nbsp;&nbsp;&nbsp;
            
		<input type="reset" class="btn btn-success"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="display_profile.php"> <input type="button" value="View Profile Details" name="submit" class="btn btn-success" /></a>
		</div>
	</div>
    </form></div></div></div></body></html>