<?php
include_once 'conn.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    echo "not found";
}
?>
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
<h2>Enter Upcoming Company Details!</h2><hr /><br />
<form method="post"  style="width:60%;" enctype="multipart/form-data">
	<?php 
    $query = mysqli_query($conn, "SELECT * FROM company WHERE id='$id'");
    $row = mysqli_fetch_array($query);
    ?>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Company Name</div>
		<div class="col-sm-5">
            <input type="text" name="cname" value="<?= $row['cname'];?>" class="form-control"/></div><br />
        
	</div>
	
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div><br />
    <div class="row">
		<div class="col-sm-4">Company Pic</div>
		<div class="col-sm-5">
            <input type="file" name="image"  id="image" class="form-control"/></div><br />
        
	</div>
    <br />
    
    <div class="row">
		<div class="col-sm-4">Job Profile</div>
		<div class="col-sm-5">
		<input type="text" name="jpro" value="<?= $row['jpro'];?>" class="form-control" placeholder="Profile"/></div>
	</div><br />
	
	
	
	<div class="row">
		<div class="col-sm-4">Required Post</div>
		<div class="col-sm-5">
							<select name="rpost" id="rpost">
													<option value="">-</option>
													<option value="upcoming">upcoming</option>
													<option value="done">done</option>	
												</select>
											</div><br/>
    </div>
	<br />
	
	
	
	<div class="row">
		<div class="col-sm-4">Eligibility Criteria</div>
		<div class="col-sm-5">
		<input type="text" name="ec" value="<?= $row['ec'];?>"  class="form-control"/></div>
	</div>
	
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
    <br />
    
   
	
    
    <div class="row">
		<div class="col-sm-4">Package</div>
		<div class="col-sm-5">
		<input type="number" name="pac" value="<?= $row['package'];?>" class="form-control" placeholder="Per-Annum"/></div>
	</div>
	
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
    <br />
    
    <div class="row">
		<div class="col-sm-4">Date</div>
		<div class="col-sm-5">
		<input type="date" name="date" value="<?= $row['date'];?>" id="date" min="2017-01-02" max="2020-12-31" class="form-control"/></div>
	</div>
	
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
    <br />
    
    <div class="row">
		<div class="col-sm-4">Location</div>
		<div class="col-sm-5">
		<input type="text" name="loc" value="<?= $row['loc'];?>" class="form-control"/></div>
	</div>
	
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
    <br />
    
    <div class="row">
		<div class="col-sm-4">Company mail</div>
		<div class="col-sm-5">
		<input type="mail" name="mail" value="<?= $row['mail'];?>" class="form-control"/></div>
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
		<input type="submit" value="Add Details" name="submit" id="submit" class="btn btn-success" />
		<input type="reset" class="btn btn-success"/><br />
            
		</div>
            <a href="display_companies.php">  <input type="button" class="btn btn-success" value="Company details"/></a>
	</div>
    </form>	

<?php
    if(isset($_POST['submit']))
    { $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

 /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'mysqli_login2';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
      $cname = $_POST['cname'];
        $profile = $_POST['jpro'];
         $rpost = $_POST['rpost'];
         $ec = $_POST['ec'];
         $package = $_POST['pac'];
         $date = date('Y-m-d',strtotime($_POST['date']));
         $loc = $_POST['loc'];
        $mail = $_POST['mail'];
        
        //Insert image content into database
 $insert = $db->query("UPDATE 'company' SET ('cname' = '$cname','image' = '$imgContent','jpro' = '$profile','rpost'= '$rpost','ec' = '$ec','package' = '$package','date' = '$date','loc' = '$loc','mail'= '$mail' WHERE `notice`.`id` ='$id'");
        if($insert){
             echo "<script type ='text/javascript'>alert('Company details updated!'); window.location='display_companies.php';</script>"; 
        }else{
            echo "<script type ='text/javascript'>alert('Something's not right. Try Again!); </script>"; 
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
