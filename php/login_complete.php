<?php
$conn=mysqli_connect('localhost','root','111111','treesoap');
session_start();
if( !isset($_POST["userid"]) || !isset($_POST["userpw"]) )exit;

else{
$userid=$_POST['userid'];
$userpw=$_POST['userpw'];
}
$sql="SELECT *from member WHERE userid= '$userid' AND userpw='$userpw'";
$result=mysqli_query($conn,$sql);



//아이디가 있다면 비밀번호 검사
if(mysqli_num_rows($result)==1) {
  $row=mysqli_fetch_assoc($result);
  //비밀번호가 맞다면 세션 생성
  if($row['userpw']===$userpw){
    $_SESSION['userid']=$userid;
    $_SESSION['userpw']=$userpw;
    $_SESSION['username']=$row['username'];
    $_SESSION['tel']=$row['tel'];
    $_SESSION['custom_id']=$row['custom_id'];
    $_SESSION['userbirth']=$row['userbirth'];
    $_SESSION['email']=$row['email'];
    $_SESSION['userpoint']=$row['userpoint'];
    $_SESSION['useraddr']=$row['useraddr'];
    $_SESSION['useraddr_num']=$row['useraddr_num'];
    $_SESSION['useraddr_detail']=$row['useraddr_detail'];

    if(isset($_POST["userid_ck"])) {
      setcookie("userid",$userid,time()+1000 * 3600 * 24 * 30);
    }

    if(isset($_SESSION['userid'])){
      ?><script>
          window.alert("로그인 되었습니다.");
        history.go(-2);
          </script>

<?php

    }
    else{
      echo "session fail";
      echo ("<meta http-equiv='Refresh' content='0; URL=login.php'>");
    }
  }

  else {
  ?>  <script>
        window.alert("아이디 혹은 비밀번호가 잘못되었습니다.");

        history.back();
      </script>
<?php
  }
  }

      else{
    ?><script>
          alert("아이디 혹은 비밀번호가 잘못되었습니다.");

          history.back();
      </script>
<?php
      }

?>
