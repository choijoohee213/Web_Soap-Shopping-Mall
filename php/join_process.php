<?php
          $conn=mysqli_connect('localhost','root','111111','treesoap');

        //  var_dump($_POST);
          $username=$_POST['username'];
          $userid=$_POST['userid'];
          $userpw=$_POST['userpw'];
          $userpwchk=$_POST['userpwchk'];
          $userbirth=$_POST['userbirth'];
          $tel=$_POST['tel'];
          $user_email=$_POST['email']."".$_POST['email_addr'];
          $user_addr=$_POST['useraddr'];
          $useraddr_num=$_POST['useraddr_num'];
          $useraddr_detail=$_POST['useraddr_detailAddress'];
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

          $check="SELECT *from member WHERE userid='$userid'";
          $result1=mysqli_query($conn,$check);
          if($result1->num_rows>=1){
            echo '중복된 아이디';
            echo('

              <script>
                      window.alert("중복된 id입니다");
                      history.back(1);

              </script>');
          }

          else{
          $sql= "
          INSERT INTO member
            (username,userid,userpw,userbirth,tel,email,userpoint,useraddr,useraddr_num,useraddr_detail)
            VALUES(
              '$username',
              '$userid',
              '$userpw',
              '$userbirth',
              '$tel',
              '$user_email',
              DEFAULT,
              '$user_addr',
              '$useraddr_num',
              '$useraddr_detail'
              )
          ";

          $result=mysqli_query($conn,$sql);

          if($result===true){

           ?>
<script>
  window.alert("트리솝 회원이 되신 것을 축하드립니다!");
  location.replace("/treesoap/index.php");
</script>

<?php
          }
          else {
            echo('
              <script>
                      history.back(1);

              </script>');

          }
        }

          mysqli_close($conn);

          ?>