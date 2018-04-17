<?php

if(isset($_POST['submit1']))
    {
        $namef = $_POST['namef'];
        $mailf = $_POST['mailf'];
       $msgf = $_POST['messagef'];
        $con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
        
        //insert
        $query = mysqli_query($con, "INSERT INTO feedback (name,email,msg) VALUES ('$namef','$mailf','$msgf')");
       
         if($query)
    {
           
            echo "<script type ='text/javascript'>alert('Thank You For the Feedback!'); window.location='index.php';</script>"; 
           
    }else {echo"error";}
}
    
    

?>