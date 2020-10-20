<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');

$deleteid=$_POST['deleteid'];
$username = $_POST['username'];

$query="DELETE from board_review WHERE id='$deleteid'";
if($_SESSION['username'] == $username ){
  $result=mysqli_query($conn,$query);
  if($result===true){

 ?>
    <script>
    window.alert("삭제되었습니다.");
    history.back(1);
    </script>

 <?php
}
else {
  echo("

    <script>
    window.alert('오류가 발생했습니다.');
    history.back(1);

    </script>");

}
}

else if($_SESSION['username'] != $username){
  echo("

    <script>
    window.alert('작성자만 글을 삭제할 수 있습니다.');
    history.back(1);

    </script>");

}

mysqli_close($conn);

?>
