<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');
if(isset($_SESSION['userid'])){
  $userid =$_SESSION['userid'];
    $userpw=$_SESSION['userpw'];
    $custom_id=$_SESSION['custom_id'];
}

$userpwchk=$_POST['userpw'];

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


if($userpw===$userpwchk){


  $que1="DELETE from cart WHERE custom_id='$custom_id'";
  $res1=mysqli_query($conn,$que1);
  $que2="DELETE from board_ask WHERE custom_id='$custom_id'";
  $res2=mysqli_query($conn,$que2);
  $que3="DELETE from board_review WHERE custom_id='$custom_id'";
  $res3=mysqli_query($conn,$que3);
  $que4="DELETE from member WHERE custom_id='$custom_id'";
  $res4=mysqli_query($conn,$que4);
  unset($_SESSION["userid"]);

  ?>

 <script>
  window.alert("회원탈퇴가 정상적으로 처리되었습니다");

  location.replace("/treesoap/index.php");

</script>

<?php
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
