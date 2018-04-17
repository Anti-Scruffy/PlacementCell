<?php

    if(isset($_POST['submitp']))
    {
        $fname = $_POST['fname'];
       $lname = $_POST['lname'];
        $father = $_POST['father'];
        $mail = $_POST['mail'];
        $address = $_POST['address'];
       $date = date('Y-m-d',strtotime($_POST['date']));
        $state = $_POST['state'];
        $country = $_POST['country'];
        $number = $_POST['number'];
        $eno = $_POST['eno'];
        $col = $_POST['col'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $sem = $_POST['sem'];
        $backlog = $_POST['backlog'];
        $ten = $_POST['ten'];
        $tenb = $_POST['tenb'];
        $yp1 = $_POST['yp1'];
        $twl = $_POST['twl'];
        $twlb = $_POST['twlb'];
        $yp2 = $_POST['yp2'];
        $one = $_POST['1sem'];
        $two = $_POST['2sem'];
        $three = $_POST['3sem'];   
        $four = $_POST['4sem'];   
        $five = $_POST['5sem'];
        $six = $_POST['6sem'];    
         $agg = $_POST['agg'];   
            
        $con = mysqli_connect('localhost','root','','mysqli_login2') or die("error!");
        
        //insert
        $query = mysqli_query($con, "INSERT INTO profile (fname,lname,father,mail,address,date,state,country,num,eno,col,course,year,sem,back,ten,tenb,yp1,twl,twlb,yp2,one,two,three,four,five,six,aggr) VALUES ('$fname','$lname','$father','$mail','$address','$date','$state','$country','$number','$eno','$col','$course','$year','$sem','$backlog','$ten','$tenb','$yp1','$twl','$twlb','$yp2','$one','$two','$three','$four','$five','$six','$agg')");
       
         if($query)
    {
           
            echo "<script type ='text/javascript'>alert('Details Added! View in Profile Available');
            window.location='company/display_profile.php?';</script>"; 
           
    }else {echo"error";}
}
    
    

?>