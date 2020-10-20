<?php
session_start();
$conn=mysqli_connect('localhost','root','111111','treesoap');

$custom_id=$_POST['deleteid'];
$date=$_POST['deletedate'];


$query="DELETE from board_ask WHERE custom_id='$custom_id' and ask_date='$date'";

$result=mysqli_query($conn,$query);
  if($result===true){

 ?>
    <script>
    window.alert("삭제되었습니다.");
    history.go(-3);
    </script>

 <?php
}
else {
  echo("

    <script>
    window.alert('오류가 발생했습니다.');
    history.back(2);


    </script>");

}


mysqli_close($conn);

?>
