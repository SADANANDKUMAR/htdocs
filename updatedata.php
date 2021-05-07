<?php
 echo $stu_id = $_POST['sid'];
 echo $stu_name = $_POST['sname']; 
 echo $stu_email = $_POST['semail'];
 echo $stu_class = $_POST['suser'];
 echo $stu_phone = $_POST['sphone'];

 $conn=mysqli_connect('localhost', 'root', '','crud')
 or die('connection faild');
 $sql= "UPDATE student SET sname='{$stu_name}',semail='{$stu_email}',suser='{$stu_class}',sphone='{$stu_phone}' where sid={$stu_id}";
 $result=  mysqli_query($conn,$sql) or die('query unsuccessful');

 header("Location: http://localhost/index.php");
mysqli_close($conn);




?>