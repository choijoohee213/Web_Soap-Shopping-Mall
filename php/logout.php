
<?php
    session_start();
    unset($_SESSION["userid"]);
?>
    <script type="text/javascript">alert("정상적으로 로그아웃 되었습니다.");</script>
  <?php
    session_destroy();
  echo ("<script>history.back(1);</script>");



?>
