<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
include_once 'conn.php';
$con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
$q=mysqli_query($conn,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Notice found !!!</h2>";
?>
<h4 style="color:Blue"><b><a href="index.php?page=add_notice">Send new notice</a></b></h4>
<?php
}
else
{
?>
<h2 style="color:#00FFCC">All Notice</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice">Add New notice</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{
$id = $row['id'];
echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['topic']."</td>";
echo "<td>".$row['des']."</td>";
echo "<td>".$row['date']."</td>";

?>

<td><a href="display_notification.php?delete=<?php echo $id ;?>" onclick="return confirm('Are you sure?');" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>

<td><a href="<?= 'update_story.php?id='.$row['id']?>" onclick="return confirm('Are you sure?');" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>

<?php 

$i++;
}
     if(isset($_GET['delete'])){
        $delete_id=$_GET['delete'];
        mysqli_query($conn,"DELETE FROM notice WHERE id='$delete_id'");
        header ('location: index.php?page=notification');
    }
		?>
		
</table>
<?php }?>