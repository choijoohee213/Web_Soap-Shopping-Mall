<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');

$email=$_POST["email"];
$tel=$_POST["tel"];
$userid=$_SESSION['id'];

$check="SELECT *from member WHERE userid='$userid'  ";
$result=mysqli_query($conn,$check);
$row= mysqli_fetch_array($result);
if($row){
  if( ($_SESSION['id']===$row['userid']) && ($tel===$row['tel'])){
    $userpw=$row['userpw'];?>
    <script>
    var a='<?= $userpw ?>';

      window.alert("회원님의 비밀번호는 "+a +"입니다.");

       location.replace("/treesoap/ index.php");

    </script>
    <?php
  }
  else if(($_SESSION['id']===$row['userid']) && ($email===$row['email'])){
    $userpw=$row['userpw'];?>
    <script>
    var a='<?= $userpw ?>';

      window.alert("회원님의 비밀번호는 "+a+"입니다.");
       location.replace("/treesoap/index.php");

    </script>
    <?php
  }
  else {?>
    <script>
      window.alert("회원님의 등록된 정보가 아닙니다.");
      location.replace("/treesoap/find_password2.php");
    </script>
    <?php
  }

}
else{?>
  <script>
    window.alert("회원님의 정보가 없습니다.");
     location.replace("/treesoap/find_password.php");

  </script>
<?php

}
?>
