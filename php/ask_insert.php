<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');

if(isset($_SESSION['userid'])){
  $userid=$_SESSION['userid'];
  $username=$_SESSION['username'];


  $check="SELECT *from member WHERE userid='$userid' ";
  $result=mysqli_query($conn,$check);
  if($result->num_rows>=1) {
    $row=mysqli_fetch_assoc($result);
    if($row['userid']===$userid){
      $custom_id=$row['custom_id'];
    }
  }
}
else {exit;}

switch( $_POST['soap_type']){
  case "none":
  $prd_id=4;
  $photo="/treesoap/img/logo.png";

  break;

  case "goods_1":
  $prd_id=1;
  $photo="/treesoap/img/blueclean.png";

  break;

  case "goods_2":
  $prd_id=2;
    $photo="/treesoap/img/greenclean.png";
  break;

  case "goods_3":
  $prd_id=3;
    $photo="/treesoap/img/pinkclean.png";
  break;

  default:
  $prd_id=4;
   $photo="/treesoap/img/logo.png";
  break;
}



$conn=mysqli_connect('localhost','root','111111', 'treesoap');
$sql="
INSERT INTO board_ask
(ask_date, ask_title, ask_content, ask_yorn, custom_id, prd_id ,ask_type,ask_photo)
VALUES(
   NOW(),
  '{$_POST['ask_title']}',
  '{$_POST['ask_content']}',
    DEFAULT,
  '{$custom_id}',
  '{$prd_id}',
  '{$_POST['about']}',
  '{$photo}'
  )";

  $result = mysqli_query($conn,$sql);
  if($result==false){

    echo mysqli_error($result);
    echo mysqli_error($conn);
  }
  else header('Location:/treesoap/ask.php');


?>
