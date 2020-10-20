<?php
$conn=mysqli_connect('localhost','root','111111','treesoap');

$username=$_POST["username"];
$email=$_POST["email"];


$check="SELECT *from member WHERE username='$username' AND email='$email' ";
$result=mysqli_query($conn,$check);
$row= mysqli_fetch_array($result);

if($row){
  if(($row['username']===$username) && $row['email']===$email){
    $userid=$row['userid'];

?>
  <script>
   var a='<?= $userid ?>';

   window.alert("회원님의 아이디는 " +a +" 입니다.");
   location.replace("/treesoap/login.php");

  </script>
<?php

}else{?>
  <script>
  window.alert("회원님의 정보가 없습니다.");
  </script>
  <?php
}


}
else{
  ?>
  <script>
    window.alert("회원님의 정보가 없습니다.");
    history.back();
  </script>
<?php

}
?>
