<?php

//  var_dump($_POST);
$userid=$_POST['userid'];
$userpw=$_POST['userpw'];
$userpwchk=$_POST['userpwchk'];

$tel=$_POST['tel'];
$user_email=$_POST['email']."".$_POST['email_addr'];
$user_addr=$_POST['useraddr'].$_POST['useraddr_detailAddress'];
$useraddr_num=$_POST['useraddr_num'];
if($user_email==""){
?>
<script>
        window.alert("이메일을 입력해주세요");
        history.back(1);


</script>
<?php
exit;
}
if($userpw!==$userpwchk){
  $_POST['userpw']=NULL;
  $_POST['userpwchk']=NULL;

  ?>
    <script>
            window.alert("비밀번호와 비밀번호 확인이 서로다릅니다");
            history.back(1);

    </script>
    <?php
}
else{
$conn=mysqli_connect('localhost','root','111111','treesoap');

$check="SELECT *from member WHERE userid='$userid'";
$result1=mysqli_query($conn,$check);
if($result1->num_rows>=1){

$sql= "
UPDATE member
SET
userpw='{$userpw}', tel='{$tel}', email='{$user_email}', useraddr='{$user_addr}', useraddr_num='{$useraddr_num}' WHERE userid='{$userid}'";

$result=mysqli_query($conn,$sql);

if($result===true){

 ?>
    <script>
    window.alert("회원정보가 수정되었습니다!");
    location.replace("/treesoap/index.php");
    </script>

 <?php
}
else {
  echo('

    <script>
            window.alert("저장하는 과정에서 문제가 발생했습니다!");


    </script>');
error_log(mysqli_error($conn));
}
}

mysqli_close($conn);
}

?>
