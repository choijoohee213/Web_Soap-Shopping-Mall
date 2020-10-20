<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');
if(isset($_SESSION['userid'])){
  $userid =$_SESSION['userid'];
    $userpw=$_SESSION['userpw'];

}

$userpwchk=$_POST['userpwchk'];

if($userpw!==$userpwchk){
  $userpw=NULL;
  $userpwchk=NULL;
  ?>
<script>
  window.alert("비밀번호가 맞지 않습니다");
  history.back(1);
</script>
<?php
    exit;
}



$check="SELECT *from member WHERE userid='$userid' AND userpw='$userpw'";
$result1=mysqli_query($conn,$check);
if($result1->num_rows>=1){
  ?>
<script>
  location.replace("/treesoap/change_inform.php");
</script>
<?php
exit;
}

else{
  ?>
<script>
  window.alert("잠시 오류가 발생했으니 다시 시도해 주세요");
</script>
<?php

}

mysqli_close($conn);


?>