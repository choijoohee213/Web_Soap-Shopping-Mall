<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');

$userid=$_SESSION['userid'];

$post_customid=$_POST['custom_id'];
$num=$_POST['num'];
$_SESSION['num']=$num;
$que= "SELECT userid from member WHERE custom_id='$post_customid'";
$result=mysqli_query($conn,$que);
$row= mysqli_fetch_array($result);


if($userid===$row['userid']){
  Header("Location:/treesoap/ask_list.php");

}
else{
  echo("
  <script>
    window.alert('작성자만 글을 볼 수 있습니다.');
    history.back(1);

    </script>");

}

?>
