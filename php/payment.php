<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['userid'])){
  $userid =$_SESSION['userid'];
    $username=$_SESSION['username'];
}

else $userid="";

?>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="/treesoap/img/favicon (5).ico" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:300&display=swap&subset=korean" rel="stylesheet">
  <title>트리솝에 오신걸 환영합니다.</title>
  <link rel="stylesheet" type="text/css" href="/treesoap/css/payment.css">
</head>

<body>
  <div class="top_box">
    <div>
      <a href="/treesoap/index.php">
        <img class="top_logo" src="/treesoap/img/logo.png" alt="트리솝로고"></a>
    </div>

    <div class="top_header">
      <div class="top_header_top_banner">
        <?php
                           if($userid!=="") {

                        ?>

        <a href="/treesoap/logout.php"><button class="button1">로그아웃</button></a>
        <a href="/treesoap/mypage.php">
          <button class="button2">마이페이지</button></a>

        <?php
                        }
                      else if($userid==""){
                        ?>
        <a href="/treesoap/login.php"><button class="button1">로그인</button></a>
        <a href="/treesoap/join_agree.php">
          <button class="button2">회원가입</button></a>
        <?php
                      }
                         if($userid!=="") {
                  ?>
        <a href="/treesoap/cart.php">
          <button class="button2">장바구니</button></a>
        <a href="/treesoap/order_list.php">
          <button class="button2">주문조회</button></a>
        <?php
                  }
                    else if($userid==""){
                             ?>
        <a onclick="alert('로그인이 필요한 서비스입니다.')">
          <button class="button2">장바구니</button></a>
        <a onclick="alert('로그인이 필요한 서비스입니다.')">
          <button class="button2">주문조회</button></a>
        <?php
                          }
                           ?>
        <a href="/treesoap/ask.php">
          <button class="button3">고객만족센터</button></a>
        <p style="clear:both">
      </div>

      <div class="top_header_bottom_banner">
        <div class="navbar" id="mynavbar">
          <div class="dropdown">
            <a href="/treesoap/goods_list.php">
              <button class="button5" class="dropbtn"><strong>제품구매 <i class="fa fa-caret-down"></i></strong></button></a>
            <div class="dropdown-content">
              <a href="/treesoap/goods_view1.php">유칼립투스 비누</a>
              <a href="/treesoap/goods_view2.php">올리브 비누</a>
              <a href="/treesoap/goods_view3.php">라벤더 비누</a>
              <a>낫슬리피 비누</a>
              <a>스타 비누</a>
              <a>플로팅 플라워 비누</a>
            </div>
          </div>

          <a href="/treesoap/skinlab.php">
            <button class="button4"><strong>피부연구실</strong></button></a>
          <a href="/treesoap/brand.php">
            <button class="button4"><strong>브랜드</strong></button></a>
          <a href="/treesoap/community.php">
            <button class="button4"><strong>커뮤니티</strong></button></a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("mynavbar");
      if (x.className === "navbar") {
        x.className += " responsive";
      } else {
        x.className = "navbar";
      }
    }
  </script>

  <div class="quick_box">
    <div class="join" style="background-color: #fbeded;height: 80px;width:90px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);">
      <?php
                         if($userid!=="") {
                        ?>
      <div style="padding-top:2vh; width:90px; text-align:center;">
        <strong style="color: #d23459; font-size: 15px;
                           text-align: center;"><?=$username?>님,</strong>
        <p style="color: #676464;font-size: 12px;">즐거운</p>
        <p style="color: #676464;font-size: 12px;">쇼핑되세요!</p>
      </div>
    </div>
    <div class="quick_box_img" style="width:90px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);cursor: pointer;">
      <a style="text-decoration:none;" href="/treesoap/mypage.php">
        <img src="/treesoap/img/price-tag.png" alt="마이페이지" style="height: 30px;width: 30px;margin-left: 30px;margin-top: 2vh;"><br>
        <strong style="font-size: 14px;margin-left: 19px;color: #777777;">MYPAGE</strong>
      </a>
    </div>
    <div class="quick_box_img" style="width:90px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);cursor: pointer;">
      <a style="text-decoration:none;" href="/treesoap/cart.php">
        <img src="/treesoap/img/cart.png" alt="장바구니" style="height: 30px;width: 30px;margin-left:30px;margin-top: 2vh;"><br>
        <strong style="font-size: 14px;margin-left: 30px;color: #777777;">CART</strong>
      </a>
    </div>
    <div class="quick_box_img" style="width:90px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);cursor: pointer;">
      <a style="text-decoration:none;" href="/treesoap/order_list.php">
        <img src="/treesoap/img/tracking.png" alt="배달조회" style="height: 40px;margin-left: 30px;margin-top: 1vh;"><br>
        <strong style="font-size: 14px;margin-left: 9px;color: #777777;">TRACKING</strong>
      </a>
    </div>
    <div class="top_go" style="width:90px; background-color: #d25459;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);height: 35px;cursor: pointer;">
      <a style="text-decoration:none;" href="#">
        <p style="color:#ffffff;font-size: 21px;margin-left: 5px;">↑ TOP</p>
      </a>
    </div>
    <div style="margin-left: 0.5vw;;margin-top: 1vh;">
      <img src="/treesoap/img/카톡상담.png" style="width:5vw; padding-right:20px; cursor:pointer;" />
    </div>
    <div style="margin-left: 0.5vw;;margin-top: 1vh;">
      <img src="/treesoap/img/네이버톡.png" style="width:5vw; padding-right:20px; cursor:pointer;" />
    </div>
  </div>


  <?php
                                  }
                                      else if($userid==""){
                                    ?>
  <div style="padding-top:2vh; width:90px; cursor: pointer; text-align:center;">
    <a style="text-decoration:none;" href="/treesoap/join_agree.php">
      <strong style="color: #d23459; font-size: 16px; ">treesoap</strong>
      <p style="color: #676464;font-size: 13px;">회원이</p>
      <p style="color: #676464;font-size: 13px;"> 아니신가요?</p>
    </a>
  </div>
  </div>
  <div class="quick_box_img" style="width:90px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);cursor: pointer;">
    <a style="text-decoration:none;" onclick="alert('로그인이 필요한 서비스입니다.')">
      <img src="/treesoap/img/price-tag.png" alt="마이페이지" style="height: 30px; width: 30px;margin-left: 30px;margin-top: 2vh;"><br>
      <strong style="font-size: 14px;margin-left: 19px;color: #777777;">MYPAGE</strong>
    </a>
  </div>
  <div class="quick_box_img" style="width:90px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);cursor: pointer;">
    <a style="text-decoration:none;" onclick="alert('로그인이 필요한 서비스입니다.')">
      <img src="/treesoap/img/cart.png" alt="장바구니" style="height: 30px;width: 30px;margin-left:30px;margin-top: 2vh;"><br>
      <strong style="font-size: 14px;margin-left: 30px;color: #777777;">CART</strong>
    </a>
  </div>
  <div class="quick_box_img" style="width:90px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);cursor: pointer;">
    <a style="text-decoration:none;" onclick="alert('로그인이 필요한 서비스입니다.')">
      <img src="/treesoap/img/tracking.png" alt="배달조회" style="height: 40px;margin-left: 30px;margin-top: 1vh;"><br>
      <strong style="font-size: 14px;margin-left: 9px;color: #777777;">TRACKING</strong>
    </a>
  </div>
  <div class="top_go" style="width:90px; background-color: #d25459;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);height: 35px;cursor: pointer;">
    <a style="text-decoration:none;" href="#">
      <p style="color:#ffffff;font-size: 21px;margin-left: 5px;">↑ TOP</p>
    </a>
  </div>
  <div style="margin-left: 0.5vw;;margin-top: 1vh;">
    <img src="/treesoap/img/카톡상담.png" style="width:5vw; padding-right:20px; cursor:pointer;" />
  </div>
  <div style="margin-left: 0.5vw;;margin-top: 1vh;">
    <img src="/treesoap/img/네이버톡.png" style="width:5vw; padding-right:20px; cursor:pointer;" />
  </div>
  </div>

  <?php
                                 }
                                  ?>

  <div class="blink"></div>
  <div class="content">
    <div class="title">
      <h3>l 주문상세내역</h3>
    </div>
    <div class="table1 type1">
      <!-- 장바구니 상품리스트 시작 -->
      <table>
        <thead>
          <tr>
            <th style="padding:10px;text-align: center; background-color:#f2f2f2;">상품/옵션 정보</th>
            <th style="text-align: center; background-color:#f2f2f2;">수량</th>
            <th style="text-align: center; background-color:#f2f2f2;">상품금액</th>
            <th style="text-align: center; background-color:#f2f2f2;">할인/적립</th>
            <th style="text-align: center; background-color:#f2f2f2;">합계금액</th>
            <th style="text-align: center; background-color:#f2f2f2;">배송비</th>
          </tr>
        </thead>
        <tbody>
          <?php
                         if(isset($_POST['check'])){
                         $a = implode(',',$_POST['check']);
                         $check_num=count($a);
                         $explode=explode(',',$a);
                       }
                         else
                         $a= "취미없음";

                      //   echo "$a";
                      $conn=mysqli_connect('localhost','root','111111','treesoap');

                          ?>
          <?php
                          $qqq="SELECT *from product WHERE prd_id={$_GET['prd_id']}";
                          $rrr=mysqli_query($conn,$qqq);
                          $rowrow=mysqli_fetch_array($rrr);?>

          <tr>

            <td class="gi this-product"  style="padding:20px; text-align:center;">


                  <img width="70" class="middle" style=""
                  src="<?= $rowrow['prd_photo']?>"><br />
              <span>
                  <?php
                      $prd_namee=$rowrow['prd_name'];
                      echo "$prd_namee";
                    ?>
              </span>

            </td>

            <td class="ta-c count this-product" style="padding:20px;text-align: center;">
              <?php echo $_GET['amount'];?>
            </td>
            <td class="ta-c this-product" style="padding:20px;text-align: center;">
              <strong class="price"><?php echo $_GET['sell_price'];?></strong>
            </td>
            <td class="benefits" style="padding:20px;text-align: center;">
              <dl class="mileage" style="padding:20px;text-align: center;">
                <dt>적립</dt>
                <dd>상품 <strong>+<?php echo $_GET['mileage'];?>원</strong></dd>
                <dd>회원 <strong>+<?php echo $_GET['mileage'];?>원</strong></dd>
              </dl>
            </td>

            <td class="ta-c" style="padding:20px;text-align: center;">
              <strong class="price"><?php echo $_GET['sum'];?></strong>
            </td>
            <td class="ta-c" rowspan="1" style="padding:20px;text-align: center;">
              <span class="c-gray"> [조 건]
                <br> 2,500원
              </span>
            </td>
          </tr>
        </tbody>
      </table>

      <!-- 장바구니 상품리스트 끝 -->


    </div>
    <div class="price-box">
      <div class="blink2"></div>

      <div style="padding:30px;text-align: right; color:gray;
                         font-size:14px; font-weight: bold; border:#d9d9d9 solid 2px; ">

        총<span style="margin-left: 7px;font-size:22px; color:#29a329;">1</span>개의 상품금액 <strong style="margin-left:
                              15px;font-size:20px; color:black;"><?php echo $_GET['sum'];?></strong>원
        <span><img width=19 src="/treesoap/img/plus.png" /> 배송비 <strong style="margin-left: 7px;font-size:22px; color:black;">2,500</strong> 원</span>
        <img width=19 src="/treesoap/img/total.png" /> <strong style="margin-left: 7px;font-size:22px; color:#29a329;"><?php echo $_GET['sum']+('2500');?></strong> 원

      </div>

    </div>

    <div class="blink"></div>

    <font color=#717171>
      <div class="title">
        <h3>l 주문자 정보</h3>
      </div>
      <div class="table1">
        <table>
          <colgroup>
            <col style="width:133px;">
            </col>
          </colgroup>
          <tbody>
            <tr>
              <th class="ta-1">주문자 이름</th>
              <td>

                <input type="text" name="username" id="username" size="10" value="<?=$username?>">

              </td>
            </tr>
            <tr>
              <th class="ta-l">주소</th>
              <td>
                <input type="text" name="useraddr_num" id="useraddr_num" placeholder="우편번호" value="<?=$_SESSION['useraddr_num']?>" style="margin-bottom:4pt;" size="13">
                <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기" style="margin-left:4pt;
                               border:none; background-color:#cccccc; width:100px; cursor:pointer; "><br>
                <input type="text" name="useraddr" id="useraddr" placeholder="주소" value="<?=$_SESSION['useraddr']?>" style="margin-bottom:4pt;" size="55"><br>
                <input type="text" name="useraddr_detailAddress" id="useraddr_detailAddress" placeholder="상세주소" value="<?=$_SESSION['useraddr_detail']?>" style="margin-bottom:4pt;" size="25">
                <input type="text" id="sample6_extraAddress" placeholder="참고항목" style="margin-bottom:4pt;" size="25">

                <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
                <script>
                  function sample6_execDaumPostcode() {
                    new daum.Postcode({
                      oncomplete: function(data) {
                        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                        // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                        var addr = ''; // 주소 변수
                        var extraAddr = ''; // 참고항목 변수

                        //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                        if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                          addr = data.roadAddress;
                        } else { // 사용자가 지번 주소를 선택했을 경우(J)
                          addr = data.jibunAddress;
                        }

                        // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                        if (data.userSelectedType === 'R') {
                          // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                          // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                          if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                            extraAddr += data.bname;
                          }
                          // 건물명이 있고, 공동주택일 경우 추가한다.
                          if (data.buildingName !== '' && data.apartment === 'Y') {
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                          }
                          // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                          if (extraAddr !== '') {
                            extraAddr = ' (' + extraAddr + ')';
                          }
                          // 조합된 참고항목을 해당 필드에 넣는다.
                          document.getElementById("sample6_extraAddress").value = extraAddr;

                        } else {
                          document.getElementById("sample6_extraAddress").value = '';
                        }

                        // 우편번호와 주소 정보를 해당 필드에 넣는다.
                        document.getElementById('useraddr_num').value = data.zonecode;
                        document.getElementById("useraddr").value = addr;
                        //document.getElementById("useraddr").value
                        // 커서를 상세주소 필드로 이동한다.
                        document.getElementById("useraddr_detailAddress").focus();
                        //document.getElementById("useraddr_detailAddress").value


                      }
                    }).open();
                  }
                </script>

              </td>

            </tr>
            <tr>
              <th class="ta-l">휴대폰번호</th>
              <td>
                <input type=text name="tel" id="tel" maxlength="11" data-pattern="gdNum" placeholder=" - 없이 입력하세요." value="<?=$_SESSION['tel']?>" size="30">
      </div>
      </td>
      </tr>

      <tr>
        <th class="ta-l">
          이메일
        </th>
        <td>
          <div>

            <input type="text" name="email" id="email" style="margin-bottom:5px;" value="<?=  $_SESSION['email']?>">

            <select name="email_addr" style="height:25px; margin-left: 3pt;">
              <option value="">직접입력</option>
              <option value="@naver.com">@naver.com</option>
              <option value="@hanmail.net">@hanmail.net</option>
              <option value="@daum.net">@daum.net</option>
              <option value="@nate.com">@nate.com</option>
              <option value="@hotmail.com">@hotmail.com</option>
              <option value="@gmail.com">@gmail.com</option>
              <option value="@icloud.com">@icloud.com</option>
            </select>
          </div>
        </td>
      </tr>


      </tbody>
      </table>
  </div>

  <div class="blink">
  </div>
  <font color=#717171>
    <div class="title" style="margin-bottom:20px;">
      <h3 style="margin-bottom:5px;">l 결제수단 선택/결제</h3>
      <h5 style="color:#248f24; font-size:11px;">※ 고객님은 안전거래를 위해 현금으로 결제시 저희 쇼핑몰에서 가입한 구매안전서비스인 KG 이니시스의 구매안전(에스크로)서비스를 이용하실 수 있습니다.</h5>
    </div>
    <div class="table1">
      <table style=" border-collapse: collapse; vertical-align: middle;  text-align: left;">
        <colgroup>
          <col style="width:133px;">
          </col>
        </colgroup>
        <tbody>
          <tr>
            <th style="background-color:#f2f2f2;">

              <span class="pay" style="margin-left:0">
                <input name="payradio" type="radio" id="howpay1" checked onclick="document.getElementById('normal').style.display='block';
                                   document.getElementById('ascro').style.display='none';
                                   document.getElementById('mutong').style.display='block';
                                   document.getElementById('mutong2').style.display='block';
                                   document.getElementById('mutong3').style.display='none';
                                   document.getElementById('mutong4').style.display='none';
                                   document.getElementById('howpay3').checked='checked';
                                   document.getElementById('howpay8').checked='checked';" />
                <label style="cursor:pointer;" for="howpay1">일반결제</label>
              </span>

              <span class="pay">
                <input name="payradio" type="radio" id="howpay2" onclick="document.getElementById('normal').style.display='none';
                                   document.getElementById('ascro').style.display='block';
                                   document.getElementById('mutong').style.display='none';
                                   document.getElementById('mutong2').style.display='none';
                                   document.getElementById('mutong3').style.display='none';
                                   document.getElementById('mutong4').style.display='none';" />
                <label style="cursor:pointer;" for="howpay2">에스크로결제</label>
              </span>

            </th>
          </tr>
          <tr>
            <th id="normal">
              <span class="pay" style="margin-left:0">
                <input name="payradio2" type="radio" id="howpay3" onclick="document.getElementById('mutong').style.display='block';
                                     document.getElementById('mutong2').style.display='block';
                                     document.getElementById('mutong3').style.display='none';
                                     document.getElementById('mutong4').style.display='none';" checked />
                <label style="cursor:pointer;" for="howpay3">무통장입금</label>
              </span>

              <span class="pay">
                <input name="payradio2" type="radio" id="howpay4" onclick="document.getElementById('mutong').style.display='none';
                                     document.getElementById('mutong2').style.display='none';
                                     document.getElementById('mutong3').style.display='none';
                                     document.getElementById('mutong4').style.display='none';" />
                <label style="cursor:pointer;" for="howpay4">신용카드</label>
              </span>

              <span class="pay">
                <input name="payradio2" type="radio" id="howpay5" onclick="document.getElementById('mutong').style.display='none';
                                     document.getElementById('mutong2').style.display='none';
                                     document.getElementById('mutong3').style.display='none';
                                     document.getElementById('mutong4').style.display='none';" />
                <label style="cursor:pointer;" for="howpay5">계좌이체</label>
              </span>

              <span class="pay">
                <input name="payradio2" type="radio" id="howpay6" onclick="document.getElementById('mutong').style.display='none';
                                     document.getElementById('mutong2').style.display='none';
                                     document.getElementById('mutong3').style.display='none';
                                     document.getElementById('mutong4').style.display='none';" />
                <label style="cursor:pointer;" for="howpay6">가상계좌</label>
              </span>

              <span class="pay">
                <input name="payradio2" type="radio" id="howpay7" onclick="document.getElementById('mutong').style.display='none';
                                     document.getElementById('mutong2').style.display='none';
                                     document.getElementById('mutong3').style.display='none';
                                     document.getElementById('mutong4').style.display='none';" />
                <label style="cursor:pointer;" for="howpay7">휴대폰결제</label>
              </span>

              <p style="padding-left:1vw; padding-bottom:1vw;">
                ( 무통장 입금의 경우 입금확인 후부터 배송단계가 진행됩니다.)
              </p>
            </th>
          </tr>


          <tr>
            <th id="ascro" style="display:none;">
              <span class="pay" style="margin-left:0">
                <input name="payradio2-1" type="radio" id="howpay3-1" checked />
                <label style="cursor:pointer;" for="howpay3-1">신용카드</label>
              </span>

              <span class="pay">
                <input name="payradio2-1" type="radio" id="howpay4-1" />
                <label style="cursor:pointer;" for="howpay4-1">계좌이체</label>
              </span>

              <span class="pay">
                <input name="payradio2-1" type="radio" id="howpay5-1" />
                <label style="cursor:pointer;" for="howpay5-1">가상계좌</label>
              </span>


            </th>
          </tr>


          <tr>
            <th id="mutong" style="display:block; padding:20px;">입금자명
              <input type=text maxlength="11" size="30" style="margin-left:10px;"><br /><br />
              입금은행 <span style="cursor:auto;
                                    font-size:13px; margin-left:10px;">12345667899 (주)treesoap</span>
            </th>
          </tr>



          <tr>
            <th id="mutong2" style=" background-color:#f2f2f2; width:100%;">
              <span class="pay">현금영수증/계산서 발행</span>
              <span class="pay" style="margin-left:0">
                <input name="payradio3" type="radio" id="howpay8" checked onclick="document.getElementById('mutong3').style.display='none';
                                   document.getElementById('mutong4').style.display='none';" />
                <label style="cursor:pointer;" for="howpay8">신청안함</label>
              </span>

              <span class="pay">
                <input name="payradio3" type="radio" id="howpay9" onclick="document.getElementById('mutong3').style.display='block';
                                   document.getElementById('mutong4').style.display='none';" />
                <label style="cursor:pointer;" for="howpay9">현금영수증</label>
              </span>

              <span class="pay">
                <input name="payradio3" type="radio" id="howpay10" onclick="document.getElementById('mutong3').style.display='none';
                                   document.getElementById('mutong4').style.display='block';" />
                <label style="cursor:pointer;" for="howpay10">세금계산서</label>
              </span>
            </th>
          </tr>

          <tr>
            <th id="mutong3" style="display:none; padding:20px;">
              <input name="payradio4" type="radio" id="howpay11" checked />
              <label style="cursor:pointer;" for="howpay11">소득공제용</label>
              <input name="payradio4" type="radio" id="howpay12" style="margin-left:10px;" />
              <label style=" cursor:pointer;" for="howpay12">지출증빙용</label><br /><br />
              사업자번호
              <input type=text maxlength="11" size="30" style="margin-left:10px;">
            </th>
          </tr>

          <tr>
            <th id="mutong4" style="display:none; padding:20px;">
              <p><span style=" padding-right:0.8vw; ">사업자번호</span><input type=text maxlength="11" size="30"></p><br />
              <p><span style=" padding-right:2vw;">회사명</span> <input type=text maxlength="11" size="30"></p><br />
              <p><span style="padding-right:1.2vw;">대표자명</span> <input type=text maxlength="11" size="30"></p><br />
              <p><span style="padding-right:2.7vw;">업태</span> <input type=text maxlength="11" size="30"></p><br />
              <p><span style="padding-right:2.7vw;">종목</span> <input type=text maxlength="11" size="30"></p><br />
            </th>

          </tr>
        </tbody>
      </table>
    </div>

    <br /><br />

    <div style="padding:30px;text-align: right; color:black;
                       font-size:18px; font-weight: bold; border:#d9d9d9 solid 2px; ">

      최종 결제 금액<span style="margin-left: 15px;font-size:25px; color:green;"><img width=19 src="/treesoap/img/total.png" /> <?php echo $_GET['sum']+('2500');?></span> 원

    </div>

    <br /><br /><br /><br />

    <center>
      <p>
        <input type="checkbox" id="agr" /><label for="agr" class="agr" style="font-weight:bold; font-size:13px; color:black; cursor:pointer;">
          <span style="font-weight:bold; font-size:17px; color:#6fa56f;">(필수)</span>
          구매하실 상품의 결제정보를 확인하였으며, 구매진행에 동의합니다.</label>
      </p>
      <button onclick="history.back(1);" class="button6" id="cancel" style="margin-left: 0; background-color: #6fa56f">취소하기</button>
      <button class="button7" id="pay" style="margin-left: 0; background-color: #a4d18e" onclick="buy()">결제하기</button>
      <script type="text/javascript">
        function buy() {
          var t = document.getElementById('pay');
          t.addEventListener('click', function(event) {
            if (document.getElementById('username').value.length == 0) {
              alert('이름을 입력해주세요.');
              event.preventDefault();

            } else if (document.getElementById('tel').value.length == 0) {
              alert('휴대폰 번호를 입력해주세요.');
              event.preventDefault();
            } else if (document.getElementById("useraddr").value.length == 0) {
              alert('주소를 입력해주세요.');
              event.preventDefault();
            } else if (document.getElementById('email').value.length == 0) {
              alert('이메일을 입력해주세요.');
              event.preventDefault();
            } else if (document.getElementById('useraddr_num').value.length == 0) {
              alert('우편번호를 입력해주세요.');
              event.preventDefault();
            } else {
              window.alert("구매가 완료되었습니다");
              location.replace("/treesoap/index.php");
            }



          });

        }
      </script>
    </center>
    </div>



    <div class="bottom_box">
      <div style="margin-top: 22px;">
        <div class="bottom_box_1">
          <p class="a1">WWW CENTER</p>
          <strong class="a2"> treesoap 고객센터</strong><br>
          <div style="margin-top: 3vh;">
            <img class="telephon" src="/treesoap/img/telephon.png" alt="전화">
            <strong class="telephon2">041-160-1234</strong><br>
          </div>
          <span class="a4" style="font-size :13px">평일 : 09:00 - 17:00</span>
          <p class="a6" style="font-size :13px"> (점심시간 12:00-13:00)</p>
          <p class="a5" style="font-size :12px">토,일,공휴일 휴무입니다.</p>
          <p class="a5" style="font-size :12px">문의사항은 문의게시판을 이용</p>
        </div>

        <div class="bottom_box_2">
          <p class="a1">BANK INFO</p>
          <strong class="a2"> 입금계좌안내</strong><br>
          <p class="a3" style="font-size :13px;margin-top: 11px;">농협 : 351-0123-7516-01</p>
          <p class="a3" style="font-size :13px;margin-bottom: 8px;">국민 :596513-12-946523</p>
          <strong class="a4" style="font-size :14px">예금주 : WWW_벤처(TREESOAP)</strong>
          <p></p>
          <p></p>
        </div>

        <div class="bottom_box_3">
          <p class="a1">QUICK MENU</p>
          <strong class="a2"> 퀵메뉴</strong><br>
          <div style=" margin-top: 13px;">
            <div class="quick_menu_box" style="cursor: pointer;">
              <button class="temp2" type="temp2" name="button" onclick="location.href='/treesoap/community.php'">
                <img src="/treesoap/img/help-operator.png" alt="공지사항" style="width:2.5vw;cursor: pointer;">
              </button>
              <div style="font-size: 14px; color :#5f5f5f;">
                <strong class="quick_menu_box2" style="font-size: 1vw;">공지사항</strong>
              </div>
            </div>
            <div class="quick_menu_box" style="cursor: pointer;">
              <button class="temp2" type="button" name="button">
                <img src="/treesoap/img/camera.png" alt="후기" style="width:2.5vw;cursor: pointer;">
              </button>
              <div style="font-size: 14px; color :#5f5f5f;">
                <strong style="font-size: 1vw;">사용후기</strong>
              </div>
            </div>
            <div class="quick_menu_box" style="cursor: pointer;">
              <button class="temp2" type="temp2" name="button" onclick="location.href='/treesoap/community.php'">
                <img src="/treesoap/img/gift-box.png" alt="이벤트" style="width:2.5vw ;cursor: pointer;">
              </button>
              <div style="font-size: 14px; color :#5f5f5f;">
                <strong style="font-size: 1vw;">이벤트</strong>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="bottom_box_under">

      <div class="bottom_box_under_1" style="margin-left: 23vw;">
        <div class="bottom_box_under_2">
          <strong>피부연구실</strong>
        </div>
        <div class="bottom_box_under_3">
          <p>복합성/민감성</p>
          <p>피부꿀팁</p>
          <p>여드름</p>
          <p>&nbsp</p>
        </div>
      </div>

      <div class="bottom_box_under_1">
        <div class="bottom_box_under_2">
          <strong>제품구매</strong>
        </div>
        <div class="bottom_box_under_3">
          <p>천연비누</p>
          <p>세트상품</p>
          <p>&nbsp</p>
          <p>&nbsp</p>
        </div>
      </div>

      <div class="bottom_box_under_1">
        <div class="bottom_box_under_2">
          <strong>상품 후기</strong>
        </div>
        <div class="bottom_box_under_3">
          <p>제품리뷰</p>
          <p>회원혜택</p>
          <p>이벤트</p>
          <p>&nbsp</p>
        </div>
      </div>

      <div class="bottom_box_under_1">
        <div class="bottom_box_under_2">
          <strong>브랜드</strong>
        </div>
        <div class="bottom_box_under_3">
          <p>브랜드 스토리</p>
          <p>나눔캠페인</p>
          <p>&nbsp</p>
          <p>&nbsp</p>
        </div>
      </div>

      <div class="bottom_box_under_1">
        <div class="bottom_box_under_2">
          <strong>고객만족센터</strong>
        </div>
        <div class="bottom_box_under_3">
          <p>공지사항</p>
          <p>자주 묻는 질문</p>
          <p>문의게시판</p>
          <p>미확인 입금자</p>
        </div>
      </div>

    </div>


    <div class="bottom_box_unders">
      <div class="f" style="margin-left: 23vw;">
        <p>회사소개</p>
      </div>
      <div class="f">
        <p>이용약관</p>
      </div>
      <div class="f">
        <p>개인정보처리방침</p>
      </div>
      <div class="f">
        <p>이용안내</p>
      </div>
      <div class="f">
        <p>사업자정보확인</p>
      </div>
    </div>


    <div class="bottom_box_underss">
      <div style="margin-left:15vw;margin-top: 1vh;">
        <div style="display:inline-block;">
          <img class="top_logo2" src="/treesoap/img/logo.png" alt="트리솝로고">
        </div>
        <div style="display:inline-block; font-size:0.9vw;">
          <div>
            <div class="k"><strong>TreeSoap화장품</strong></div>
            <div class="k"><span>대표이사 : RAHYOJIN</span></div>
            <div class="k"><span>주소 : 충청남도 천안시 동남구 병천면 충절로 1600</span></div>
            <div class="k"><span>사업자등록번호 : 201-81-36031</span></div>
          </div>
          <div>
            <div class="k"><span>통신판매업신고 : 제 2019-2공학관-404호</span></div>
            <div class="k"><span>개인정보관리 책임자 : 이수경</span></div>
            <div class="k"><span>Email : gywls18@koreateck.ac.kr</span></div>
          </div>
          <div>
            <span class="k2">고객센터 : 02-479-1943(운영시간:09:00~18:00,점심시간:12:00~13:00)</span>
          </div>
          <div>
            <span style="color:#aaaaaa">COPYRIGHT (C) 2019 TREESOAP.CO.KR ALL RIGHT RESERVER</span>
          </div>
        </div>
        <div style="display:inline-block;">
          <img src="/treesoap/img/escrow.gif" alt="안심마크" style="width: 5.8vw;height: 10.5vh;margin-left: 1vw;">
        </div>
      </div>
    </div>

</body>

</html>
