
<?php
session_start();
if(isset($_SESSION['userid'])){
  $userid =$_SESSION['userid'];
  $username=$_SESSION['username'];

}

else $userid="";
if(isset($_GET['amount'])){
  $prd_num=$_GET['amount'];
  $total_price=$_GET['sum'];

  $prd_id=$_GET['prd_id'];

}
else {$prd_num="";$total_price="";$prd_id="";}

        $conn=mysqli_connect('localhost','root','111111','treesoap');
        $check="SELECT *from member WHERE userid='$userid'";
        $result=mysqli_query($conn,$check);
        $row=mysqli_fetch_array($result);
        $custom_id=$row['custom_id'];

        if($result->num_rows>=1){
          $sql="
            INSERT INTO cart
            (prd_num,wdate,prd_id,custom_id,total_price)
            VALUES(
              '$prd_num',
              NOW(),
              '$prd_id',
              '$custom_id',
              '$total_price'
              )
          ";
          $result2=mysqli_query($conn,$sql);
          if($result2===true){
          //  echo "성공";
          header("Location:/treesoap/cart.php");
          }
        else{?>
          <script>
          window.alert("잠시 문제가 생겼으니 다시 시도해주세요");
          </script>

          <?php

           }

        }
        mysqli_close();
        ?>
