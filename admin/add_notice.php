<html>
<h2>Add New Notice</h2>
<form method="post"  style="width:60%;">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Topic</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>	</div>
	
	<div class="row">
		<div class="col-sm-4">Description</div>
		<div class="col-sm-5">
		<textarea name="des" class="form-control"></textarea></div>
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
		<input type="submit" value="Add New Notice" name="submit" class="btn btn-success" />
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
    </form>	</html>

<?php
    if(isset($_POST['submit']))
    {
        $text = $_POST['sub'];
        $des = $_POST['des'];
       $date= date("d-m-Y");
        $con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
        
        //insert
        $query = mysqli_query($con, "INSERT INTO notice (topic,des,date) VALUES ('$text','$des',NOW())");
       
         if($query)
    {
           
            echo "<script type ='text/javascript'>alert('notification sent!'); window.location='index.php?page=notification';</script>"; 
           
    }else {echo"error";}
}
    
    

?>
