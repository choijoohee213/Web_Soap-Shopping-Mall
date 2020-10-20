<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');

//var_dump($_POST);
$userid=$_POST["userid"];
//$email=$_POST["email"];


$check="SELECT *from member WHERE userid='$userid'  ";
$result=mysqli_query($conn,$check);
$row= mysqli_fetch_array($result);
if($row){
  $_SESSION['id']=$row['userid'];
  ?>
  <script>
    location.replace("/treesoap/find_password2.php");
  </script>
  <?php

}
else{?>
  <script>
    window.alert("등록되지 않은 아이디입니다");
    history.back();
  </script>
<?php

}
?>
