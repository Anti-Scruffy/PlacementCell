<?php
if(isset($_GET['user_id'])){
$id = $_GET['user_id'];}?><?php
require_once '../dbconnect.php';
if(isset($_POST['btn-signup'])) {
	
	$uname = strip_tags($_POST['username']);
    $fname = strip_tags($_POST['fname']);
    $lname = strip_tags($_POST['lname']);
	$email = strip_tags($_POST['email']);

	
	$uname = $DBcon->real_escape_string($uname);
    $fname = $DBcon->real_escape_string($fname);
    $lname = $DBcon->real_escape_string($lname);
	$email = $DBcon->real_escape_string($email);
	
	
	
	
	$check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = ("UPDATE ''tbl_users' SET 'username' = '$uname','fname' = '$fname','lname' = '$lname','email' = '$email'");

		if ($DBcon->query($query)) {
			
echo "<script type='text/javascript'>alert('Successfully updated');
window.location='index.php';
</script>";

		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}

?>
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
          <a class="navbar-brand" href="index.php">Welcome Admin !</a>
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
       <form class="form-signin" method="post" id="register-form" style="width:30%;margin-left:auto;margin-right:auto;">
      
        <h2 class="form-signin-heading">Add User</h2><hr />
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          <?php 
    $query = mysqli_query($DBcon, "SELECT * FROM tbl_users WHERE user_id='$id'");
    $row = mysqli_fetch_array($query);
    ?>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required value="<?= $row['username'];?>"  />
        </div>
           
         <div class="form-group">
        <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?= $row['fname'];?>" id="fname" required  />
        </div>
           
         <div class="form-group">
        <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?= $row['lname'];?>" id="lname" required  />
        </div>
           
           
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" value="<?= $row['email'];?>" id="email" required  />
        <span id="check-e"></span>
        </div>
        
       
        
     	<hr />
        
        <div class="form-group">
            <input type="submit" class="btn btn-default" name="btn-signup" onclick="fun()" value="Add"/>
    		 &nbsp;&nbsp;&nbsp;&nbsp;
           <input type="reset" name="reset"/> &nbsp; &nbsp; &nbsp;
           <a href="manage_users.php"> <input type="submit" class="btn btn-default" name="btn-signup" onclick="fun()" value="Go Back"/></a>
        </div> 
     
      </form>