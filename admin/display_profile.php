<?php 
session_start();
include('conn.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
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
		  <!-- container end-->
		 <?php } ?> 
		  
		    
    
    
<?php 
            
require_once 'config/config.php';

  //Get Input data from query string
$search_string = filter_input(INPUT_GET, 'search_string');
$filter_col = filter_input(INPUT_GET, 'filter_col');
$order_by = filter_input(INPUT_GET, 'order_by');
//Get current page.
$page = filter_input(INPUT_GET, 'page');
//Per page limit for pagination.
$pagelimit = 20;

$db = getDbInstance();
if (!$page) {
    $page = 1;
}
// If filter types are not selected we show latest added data first
if (!$filter_col) {
    $filter_col = "id";
}
if (!$order_by) {
    $order_by = "Desc";
}

$db = getDbInstance();
// select the columns
$select = array('id', 'fname','lname','father','mail','address','date', 'state','country', 'eno','num','course','year','sem','back','ten','tenb','yp1','twl','twlb','yp2','one','two','three','four','five','six','aggr');

//Start building query according to input parameters.
// If search string
if ($search_string) 
{
    $db->where('fname', '%' . $search_string . '%', 'like');
    $db->orwhere('lname', '%' . $search_string . '%', 'like');//
}
//If order by option selected
if ($order_by)
{
    $db->orderBy($filter_col, $order_by);
}

//Set pagination limit
$db->pageLimit = $pagelimit;

//Get result of the query.
$customers = $db->arraybuilder()->paginate("profile", $page, $select);
$total_pages = $db->totalPages;

// get columns for order filter
foreach ($customers as $value) {
    foreach ($value as $col_name => $col_value) {
        $filter_options[$col_name] = $col_name;
    }
    //execute only once
    break;
}
         
            
$con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
$q=mysqli_query($con,"select * from profile ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Companies</h2>";
?>
<h4 style="color:Blue"><b><a href="add_profile.php">Add Profile</a></b></h4>
<?php
}
else
{
?>
            
            <div id="page-wrapper">
    <div class="row">

        <div class="col-lg-6">
            <h1 class="page-header">Profiles</h1>
        </div>
        <div class="col-lg-6" style="">
            <div class="page-action-links text-right">
	            <a href="add_profile.php">
	            	<button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add new </button>
	            </a>
            </div>
        </div>
    </div>
                <div class="well text-center filter-form">
        <form class="form form-inline" action="">
            <label for="input_search">Search</label>
            <input type="text" class="form-control" id="input_search" name="search_string" value="<?php echo $search_string; ?>">
            <label for ="input_order">Order By</label>
            <select name="filter_col" class="form-control">

                <?php
                foreach ($filter_options as $option) {
                    ($filter_col === $option) ? $selected = "selected" : $selected = "";
                    echo ' <option value="' . $option . '" ' . $selected . '>' . $option . '</option>';
                }
                ?>

            </select>

            <select name="order_by" class="form-control" id="input_order">

                <option value="Asc" <?php
                if ($order_by == 'Asc') {
                    echo "selected";
                }
                ?> >Asc</option>
                <option value="Desc" <?php
                if ($order_by == 'Desc') {
                    echo "selected";
                }
                ?>>Desc</option>
            </select>
            <input type="submit" value="Go" class="btn btn-primary">

        </form>
    </div>
 <hr>


    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father's Name</th>
                <th>Email</th> 
                <th>address</th>
                <th>DOB</th>
                <th>state</th>
                <th>country</th>
                <th>Phone no.</th> 
                <th>Register No.</th>
                <th>course</th>
                <th>year</th>
                <th>Semester</th>
                <th>Backlog</th> 
                <th>10th Marks</th>
                <th>10th Board</th>
                <th>10th Year</th>
                <th>12th Marks</th>
                <th>12th Board</th>
                <th>12th Year</th>
                <th>1 Sem</th>
                <th>2 Sem</th>
                <th>3 Sem</th>
                <th>4 Sem</th>
                <th>5 Sem</th>
                <th>6 Sem</th>
                <th>Aggregate</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
 foreach ($customers as $row) : ?>
                <tr>
	               
	                <td><?php echo htmlspecialchars($row['fname']); 
                        $id = $row['id'];?></td>
                    <td><?php echo htmlspecialchars($row['lname']); ?></td>
	                <td><?php echo htmlspecialchars($row['father']) ?></td>
                    <td><?php echo htmlspecialchars($row['mail']) ?></td>
                    <td><?php echo htmlspecialchars($row['address']) ?></td>
	                <td><?php echo htmlspecialchars($row['date']) ?> </td>
                    <td><?php echo htmlspecialchars($row['state']) ?> </td>
                    <td><?php echo htmlspecialchars($row['country']) ?> </td>
                    <td><?php echo htmlspecialchars($row['num']) ?> </td>
                    <td><?php echo htmlspecialchars($row['eno']) ?> </td>
                    <td><?php echo htmlspecialchars($row['course']) ?> </td>
                    <td><?php echo htmlspecialchars($row['year']) ?> </td>
                    <td><?php echo htmlspecialchars($row['sem']) ?> </td>
                    <td><?php echo htmlspecialchars($row['back']) ?> </td>
                    <td><?php echo htmlspecialchars($row['ten']) ?> </td>
                    <td><?php echo htmlspecialchars($row['tenb']) ?> </td>
                    <td><?php echo htmlspecialchars($row['yp1']) ?> </td>
                    <td><?php echo htmlspecialchars($row['twl']) ?> </td>
                    <td><?php echo htmlspecialchars($row['twlb']) ?> </td>
                    <td><?php echo htmlspecialchars($row['yp2']) ?> </td>
                    <td><?php echo htmlspecialchars($row['one']) ?> </td>
                    <td><?php echo htmlspecialchars($row['two']) ?> </td>
                    <td><?php echo htmlspecialchars($row['three']) ?> </td>
                    <td><?php echo htmlspecialchars($row['four']) ?> </td>
                    <td><?php echo htmlspecialchars($row['five']) ?> </td>
                    <td><?php echo htmlspecialchars($row['six']) ?> </td>
                    <td><?php echo htmlspecialchars($row['aggr']) ?> </td>
	               
                    <td><a href="<?= 'update_profile.php?id='.$row['id']?>" onclick="return confirm('Are you sure?');" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>

<td>
                        <a href="display_profile.php?delete=<?php echo $id ;?>"   class="btn btn-danger delete_btn" data-toggle="modal"  style="margin-right: 8px;"><span class="glyphicon glyphicon-trash"></span></a></td>
				</tr>

						<!-- Delete Confirmation Modal-->
					 <div class="modal fade" id="confirm-delete-<?php echo $row['id'] ?>" role="dialog">
					    <div class="modal-dialog">
					      <form action="delete_profile.php" method="POST">
					      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Confirm</h4>
						        </div>
						        <div class="modal-body">
						      
						        		<input type="hidden" name="del_id" id = "del_id" value="<?php echo $row['id'] ?>">
						        	
						          <p>Are you sure you want to delete this customer?</p>
						        </div>
						        <div class="modal-footer">
						        	<button type="submit" class="btn btn-default pull-left">Yes</button>
						         	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						        </div>
						      </div>
					      </form>
					      
					    </div>
  					</div>
            <?php endforeach; ?>      
        </tbody>
    </table>


   
<!--    Pagination links-->
    <div class="text-center">

        <?php
        if (!empty($_GET)) {
            //we must unset $_GET[page] if previously built by http_build_query function
            unset($_GET['page']);
            //to keep the query sting parameters intact while navigating to next/prev page,
            $http_query = "?" . http_build_query($_GET);
        } else {
            $http_query = "?";
        }
        //Show pagination links
        if ($total_pages > 1) {
            echo '<ul class="pagination text-center">';
            for ($i = 1; $i <= $total_pages; $i++) {
                ($page == $i) ? $li_class = ' class="active"' : $li_class = "";
                echo '<li' . $li_class . '><a href="customers.php' . $http_query . '&page=' . $i . '">' . $i . '</a></li>';
            }
            echo '</ul></div>';
        }
        ?>
        <?php
 $conn = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
  if(isset($_GET['delete'])){
        $delete_id=$_GET['delete'];
        mysqli_query($conn,"DELETE FROM profile WHERE id='$delete_id'");
       echo "<script type ='text/javascript'>alert('deleted!'); window.location='display_profile.php';</script>"; 
           
    }
	?>
    </div>
    <!--    Pagination links end-->

</div>
<?php }?>
            <a href="index.php"><input type="button" value="go back"/></a></div></div></div></body></html>