<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');

//  var_dump($_POST);
$id=$_POST['id'];

$check="SELECT *from member WHERE userid='$id'";
$result=mysqli_query($conn,$check);
$row=mysqli_fetch_array($result);
$custom_id=$row['custom_id'];
$que="DELETE from cart WHERE custom_id='$custom_id'";
$res=mysqli_query($conn,$que);
if($res===true){


 ?>
    <script>
    history.go(-1);
    </script>

 <?php
}

mysqli_close($conn);

?>
