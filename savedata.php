 <?php
 
  echo $stu_name = $_POST['sname']; 
  echo $stu_email = $_POST['semail'];
  echo $stu_class = $_POST['class'];
  echo $stu_phone = $_POST['sphone'];

  $conn=mysqli_connect('localhost', 'root', '','crud')
  or die('connection faild');
  $sql= "INSERT INTO student(sname,semail,suser,sphone) VALUES ('{$stu_name}','{$stu_email}','{$stu_class}','{$stu_phone}')";
  $result=  mysqli_query($conn,$sql) or die('query unsuccessful');

  header("Location: http://localhost/add.php");
 mysqli_close($conn);

 ?>