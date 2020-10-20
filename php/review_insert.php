<?php
session_start();
$conn=mysqli_connect('localhost','root','111111', 'treesoap');
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

switch( $_POST['prd_id']){
  case 1:
  $prd_id=1;
  break;

  case 2:
  $prd_id=2;
  break;

  case 3:
  $prd_id=3;
  break;

  default:
  $prd_id=4;
  break;

}

$sql="
INSERT INTO board_review
(name,  star, review_title, review_content, review_photo, wdate,prd_id,custom_id)
VALUES(
  '{$_SESSION['username']}',
  '{$_POST['star']}',
  '{$_POST['review_title']}',
  '{$_POST['review_content']}',
  '{$_POST['review_photo']}',
  NOW(),
  '{$prd_id}',
  '{$custom_id}'
  )";
  $result = mysqli_query($conn,$sql);
  if($result==false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));

  }
  else echo" <script> location.href=\"$_SERVER[HTTP_REFERER]#prdreview\"; </script>";



?>
