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
              <li><a href="display_feed.php"><span class="glyphicon glyphicon-envelope"></span> Manage  feedbacks</a></li>
            
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
<h2>Add New Admin</h2><hr /><br />
            <a href="display_alumini.php" style="float:right;"><input type="button" value="View Alumini"  class="btn btn-success" /></a>
<form method="post"  style="width:50%;">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Name:</div>
		<div class="col-sm-5">
		<input type="text" name="uname" class="form-control" placeholder="name"/></div>
	</div>
	
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
    <br />
    
	<div class="row">
		<div class="col-sm-4">Branch</div>
		<div class="col-sm-5">
							<select name="branch" id="rpost">
													<option value="">-</option>
													<option value="BCA">BCA</option>
													<option value="BCom">BCom</option>
                                <option value="BBA">BBA</option>
                                <option value="BAJ">BAJ</option>
                                <option value="MBA">MBA</option>
                                <option value="MCA">MCA</option>
                                <option value="MIB">MIB</option>
                                <option value="MCom">MCom</option>
                                
												</select>
											</div><br/>
    </div>
	<br />
	
	
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Company name:</div>
		<div class="col-sm-5">
		<input type="text" name="cname" class="form-control" placeholder="Companay name"/></div>
	</div>
	
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
    <br />
    
    <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Package:</div>
		<div class="col-sm-5">
		<input type="text" name="package" class="form-control" placeholder="package"/></div>
	</div>
	
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
    <br />
    
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add" name="submit" class="btn btn-success" />
		<input type="reset" class="btn btn-success"/>
            <a href="index.php"><input type="button" value="Go back"  class="btn btn-success" /></a>
            
		</div>
	</div>
    </form>	

<?php
    if(isset($_POST['submit']))
    {
        $user = $_POST['uname'];
        $branch = $_POST['branch'];
        $cname = $_POST['cname'];
        $package = $_POST['package'];
        $con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
        
        //insert
        $query = mysqli_query($con, "INSERT INTO alumini (name,branch,cname,package) VALUES ('$user','$branch','$cname','$package')");
       
         if($query)
    {
           
            echo "<script type ='text/javascript'>alert(' Alumini Added :)'); window.location='display_alumini.php';</script>"; 
           
    }else {echo"error";}
}
    
    

?>
