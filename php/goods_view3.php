<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['userid'])){
  $userid =$_SESSION['userid'];
  $username=$_SESSION['username'];
}

else $userid="";

?>
<html>

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="/treesoap/img/favicon (5).ico" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:300&display=swap&subset=korean" rel="stylesheet">
  <title>트리솝에 오신걸 환영합니다.</title>
  <script>
    //상품 상세정보 , 후기 등으로 이동하는 링크버튼
    $(document).ready(function() {
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 80, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>

  <link rel="stylesheet" type="text/css" href="/treesoap/css/goods_view3.css">
  
</head>

<body onload="init();">
  <div>
    <button class="open-button" onclick="openForm()"><img style="width:5vw;" src="/treesoap/img/soap.png" /></button>
  </div>


  <div class="form-popup animate2" id="myForm">
    <div class="form-container">
      <center>

        <img width="200px" src="/treesoap/img/logo.png" />

        <div class="slideshow-container">
          <a onclick="location.href='/treesoap/goods_view1.php '" style="cursor:pointer;">
            <div class="mySlides fade">
              <div class="numbertext">1 / 6</div>
              <img class="main_img" src="/treesoap/img/blueclean.png">
              <button type="submit" class="btn" style="background-color:#e6ff99; color:#262626;">
                <p>
                  유칼립투스 비누
                </p>
                <p>
                  9000원
                </p>
              </button>
            </div>
          </a>

          <div class="mySlides fade">
            <a onclick="location.href='/treesoap/goods_view2.php '" style="cursor:pointer;">
              <div class="numbertext">2 / 6</div>
              <img class="main_img" src="/treesoap/img/greenclean.png">
              <button type="submit" class="btn" style="background-color:#e6ff99; color:#262626;">
                <p>
                  올리브 비누
                </p>
                <p>
                  12000원
                </p>
              </button>
          </div>

          <div class="mySlides fade">
            <a onclick="location.href='/treesoap/goods_view3.php '" style="cursor:pointer;">
              <div class="numbertext">3 / 6</div>
              <img class="main_img" src="/treesoap/img/pinkclean.png">
              <button type="submit" class="btn" style="background-color:#e6ff99; color:#262626;">
                <p>
                  라벤더 비누
                </p>
                <p>
                  7000원
                </p>
              </button>
          </div>


          <div class="mySlides fade">
            <a style="cursor:pointer;">
              <div class="numbertext">4 / 6</div>
              <img class="main_img" src="/treesoap/img/yellowsoap.png">
              <button type="submit" class="btn" style="background-color:#e6ff99; color:#262626;">
                <p>
                  낫 슬리피 비누
                </p>
                <p>
                  10000원
                </p>
              </button>
          </div>

          <div class="mySlides fade">
            <a style="cursor:pointer;">
              <div class="numbertext">5 / 6</div>
              <img class="main_img" src="/treesoap/img/starsoap.png">
              <button type="submit" class="btn" style="background-color:#e6ff99; color:#262626;">
                <p>
                  스타 비누
                </p>
                <p>
                  9000원
                </p>
              </button>
          </div>

          <div class="mySlides fade">
            <a style="cursor:pointer;">
              <div class="numbertext">6 / 6</div>
              <img class="main_img" src="/treesoap/img/flowersoap.png">
              <button type="submit" class="btn" style="background-color:#e6ff99; color:#262626;">
                <p>
                  플로팅 플라워 비누
                </p>
                <p>
                  7000원
                </p>
              </button>
          </div>



        </div>

        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

      </center>
      <a class="grb-btn-cls close " onclick="closeForm();">
        <img style="margin-top: 24%; width: 15px; opacity: 1.5;
    height: 15px;" src="/treesoap/img/cancel_2.png" />
      </a>
    </div>
  </div>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 4000); // Change image every 2 seconds
    }

    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>


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


  <br /><br /><br />
  <div>
    <div class="left">
      <img class="product" src="/treesoap/img/pink.jpg" alt="라벤더 비누">
    </div>

    <div class="product_top">
      <li>
        <h2><br>라벤더 비누</h2>
      </li>
      <li>
        <h3>
          <font size="2pt" font color="gray">#트리솝#클렌징#복합성#라벤더#카모마일#향긋
        </h3>
      </li>
      <p class="a">
        <li>
          <font size="2pt" font color="#555"><b>판매가</b>
            <font size="4pt" font color="green"><b> 7,000</b>
              <font size="2pt" font color="#555"> 원
        </li>

        <li>
          <font size="2pt" font color="#555"><b>배송비</b>
            <font size="3pt"><b> 2,500</b>
              <font size="2pt"> 원
        </li>

        <div class="top">
          <div class="pricebox">
            <script language="JavaScript">
              var sell_price;
              var sell_mileage = 70;
              var amount;

              function init() {
                sell_price = document.form.sell_price.value;
                amount = document.form.amount.value;
                document.form.sum.value = sell_price;
                documet.form.mileage.value = sell_mileage;
                change();
              }

              function add() {
                hm = document.form.amount;
                sum = document.form.sum;
                mileage = document.form.mileage;
                hm.value++;
                sum.value = parseInt(hm.value) * sell_price;
                mileage.value = parseInt(hm.value) * sell_mileage;
              }

              function del() {
                hm = document.form.amount;
                sum = document.form.sum;
                mileage = document.form.mileage;
                if (hm.value > 1) {
                  hm.value--;
                  sum.value = parseInt(hm.value) * sell_price;
                  mileage.value = parseInt(hm.value) * sell_mileage;
                }
              }

              function change() {
                hm = document.form.amount;
                sum = document.form.sum;
                mileage = document.form.mileage;
                if (hm.value < 0) {
                  hm.value = 0;
                }
                sum.value = parseInt(hm.value) * sell_price;
                mileage.value = parseInt(hm.value) * sell_mileage;
              }
            </script>

            <form name="form" method="get">
              <input name="prd_id" type="hidden" value="3" />
              <p style="margin-left:10px; margin-top:8px;">
                수량 : <input type=hidden name="sell_price" value="7000">
                <input type="text" name="amount" value="1" size="3" onchange="change();" style=" font-size:15px; text-align:right;">
                <input type="button" value="▲" onclick="add();" style="height:20px; background-color:white; border:1px solid black; color:#6fa56f; cursor:pointer;">
                <input type="button" value="▼" onclick="del();" style="height:20px; background-color:white; border:1px solid black; color:#6fa56f; cursor:pointer;">
              </p>
              <p style="margin-left:10px;margin-top:5px;">
                금액 : <input style="border:0px; background-color:#f0ffe5; text-align:right; font-size:15px;" type="text" name="sum" size="10" readonly>원
              </p>
              <p style="margin-left:10px;margin-top:5px;">
                적립금 : <input style="border:0px; background-color:#f0ffe5; text-align:right; font-size:15px;" type="text" value="70" name="mileage" size="8" readonly />원
              </p>


          </div>
        </div>
        <div class="bottom">
          <div class="btn-group4">

            <?php
                 if($userid!=="") {

               ?>

            <button class="button4" formaction="/treesoap/cart_process.php" style="background-color: #6fa56f; margin-right:10px;">장바구니</button>

            <button formaction="/treesoap/payment.php" class="button4" style="background-color: #a4d18e;  ">구매하기</button>
            <?php
                  }
                  else if($userid==""){
                    ?>
            <a onclick="event.preventDefault(); alert('로그인이 필요한 서비스입니다.');">
              <button class="button4" style="background-color: #6fa56f; margin-right:10px;">장바구니</button></a>

            <a onclick="event.preventDefault(); alert('로그인이 필요한 서비스입니다.');">
              <button class="button4" style="background-color: #a4d18e;  ">구매하기</button></a>
            <?php
                  }
                  ?>
            </form>
          </div>
          <div style="padding-top:130px;  padding-left:90px;"><img style=" cursor:pointer; width:250px; height:80px;" src="/treesoap/img/네이버.png" /></div>
        </div>
    </div>
  </div>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />



  <div class="main" id="prddetail">
    <center>
      <br><br>
      <div class="link">
        <a href="#prddetail" class="linkbtn" style="position: relative;
        border: 1px solid #999999;
        border-bottom: 1px solid #fff;
        color:#3CB371;
        font-weight: bold;margin-left: 10vw;
      ">
          상품상세정보</a>
        <a href="#prdinform" class="linkbtn">
          구매안내
        </a>
        <a href="#prdreview" class="linkbtn">
          상품후기
        </a>
        <a href="#prdqna" class="linkbtn" style="margin-right: 5vw;">
          상품문의
        </a>
      </div>
      <br /><br /><br />


      <div style="margin-bottom:10vw;">

        <img src="/treesoap/img/goods3_detail.jpg" alt="성분">

        <img left class="wash" src="/treesoap/img/wash.jpg" alt="사람씻는거">

      </div>
  </div>
  </center>




  <!--구매안내-->
  <div class="main" id="prdinform">
    <br><br>
    <div class="link">
      <a href="#prddetail" class="linkbtn" style="margin-left:10vw;">
        상품상세정보</a>
      <a href="#prdinform" class="linkbtn" style="position: relative;
    border: 1px solid #999999;
    border-bottom: 1px solid #fff;
    color:#3CB371;
    font-weight: bold; ">
        구매안내
      </a>
      <a href="#prdreview" class="linkbtn">
        상품후기
      </a>
      <a href="#prdqna" class="linkbtn" style="margin-right:5vw;">
        상품문의
      </a>
    </div>

    <br /><br /><br />
    <div>
      <p style="font-size:13px; margin-left:13vw; line-height:35px;">
        <br /><br />
        <strong style="font-size:20px;">배송안내</strong><br />
        - 배송비 : 기본배송료는 2,500원 입니다. (도서,산간,오지 일부지역은 배송비가 추가될 수 있습니다) 27,000원 이상 구매시 무료배송입니다.<br />
        - 본 상품의 평균 배송일은 1-4일입니다.(입금 확인 후) 설치 상품의 경우 다소 늦어질수 있습니다.[배송예정일은 주문시점(주문순서)에 따른 유동성이 발생하므로<br />&nbsp;&nbsp;평균 배송일과는 차이가 발생할 수 있습니다.]<br />
        - 본 상품의 배송 가능일은 5일 입니다. 배송 가능일이란 본 상품을 주문 하신 고객님들께 상품 배송이 가능한 기간을 의미합니다.<br />&nbsp; (단, 연휴 및 공휴일은 기간 계산시 제외하며 현금 주문일 경우 입금일 기준 입니다.)<br /><br /><br /><br />

        <strong style="font-size:20px;">교환 및 반품안내</strong><br />
        - 상품 택 제거 또는 개봉으로 상품 가치 훼손 시에는 상품수령후 7일 이내라도 교환 및 반품이 불가능합니다.<br />
        - 저단가 상품, 일부 특가 상품은 고객 변심에 의한 교환, 반품은 고객께서 배송비를 부담하셔야 합니다(제품의 하자,배송오류는 제외)<br />
        - 일부 상품은 신모델 출시, 원료가격 변동 등 본사 사정으로 가격이 변동될 수 있습니다.<br />
        - 제품 및 본 상품의 박스 훼손, 분실 등으로 인한 상품 가치 훼손 시 교환 및 반품이 불가능 하오니, 양해 바랍니다.<br />
        - 일부 특가 상품의 경우, 인수 후에는 제품 하자나 오배송의 경우를 제외한 고객님의 단순변심에 의한 교환, 반품이 불가능할 수 있사오니, 각 상품의 상품상세정보를 꼭 참조하십시오.<br /><br /><br />


        <strong style="font-size:20px;">환불안내</strong><br />
        - 상품 청약철회 가능기간은 상품 수령일로 부터 7일 이내 입니다.<br /><br /><br />

        <strong style="font-size:20px;">AS안내</strong><br />
        - 소비자분쟁해결 기준(공정거래위원회 고시)에 따라 피해를 보상받을 수 있습니다.<br /><br /><br /><br /><br /><br />
      </p>
    </div>
  </div>


  <!--상품후기-->
  <div class="main" id="prdreview">
    <br><br>
    <div class="link">
      <a href="#prddetail" class="linkbtn" style="margin-left:10vw;">
        상품상세정보</a>
      <a href="#prdinform" class="linkbtn">
        구매안내
      </a>
      <a href="#prdreview" class="linkbtn" style="position: relative;
    border: 1px solid #999999;
    border-bottom: 1px solid #fff;
    color:#3CB371;
    font-weight: bold; ">
        상품후기
      </a>
      <a href="#prdqna" class="linkbtn" style="margin-right:5vw;">
        상품문의
      </a>
    </div>

    <br /><br /><br />

    <div class="board_review">
      <div class="title">
        <h3 style="
    display: block;
    font-size: 30px;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-right: 190px;
    font-weight: bold;">l Review</h3>
      </div>

      <br />

      <?php
    $conn=mysqli_connect('localhost','root','111111', 'treesoap');
    $query = "SELECT * from board_review WHERE prd_id=1 order by id";  //limit 시작 인덱스, 레코드갯수
    $result = mysqli_query($conn,$query); //전체 레코드 개수 계산
    $starsum_1=0;
    $starsum_2=0;
    $starsum_3=0;
    $starsum_4=0;
    $starsum_5=0;
    $likepeople = 0;
    $starsum=0;
    $staravg=0;
    $cnt=0;
    while($row=mysqli_fetch_array($result))
    {
      $cnt++;

     if($row['prd_id']==1){
       if($row['star']==1){
         $starsum_1++;
       }
       else if($row['star']==2){
         $starsum_2++;
       }
       else if($row['star']==3){
         $starsum_3++;
        $likepeople++;
       }
       else if($row['star']==4){
         $starsum_4++;
        $likepeople++;
       }
       else if($row['star']==5){
         $starsum_5++;
        $likepeople++;
       }
       $starsum += $row['star'] ;
     }
   }

if($cnt==0){ $staravg=0; $likepercent=0;}
else{
   $staravg = round($starsum/$cnt,1);
   $likepercent = round(($likepeople/$cnt)*100,1);
}
   mysqli_close($conn);
   ?>

      <div>

        <div class="products_reviews_summary
                products_reviews_summary--small_with_score
                products_reviews_summary--without_write_form">
          <div class="products_reviews_summary__inner">

            <div class="products_reviews_summary__lcontent">
              <div class="score_summary score_summary--list">
                <div class="score_summary__body">
                  <div class="score_summary__avg_score">
                    <div class="score_summary__average"><?=$staravg?></div>

                    <div class="score_summary__reviews_count"><?=$cnt?>개 리뷰 평점</div>
                  </div>
                  <ul class="score_summary__score_filters">

                    <li class="score_summary__score_filter " data-score="5">
                      <a class="js-link-score">
                        <div class="score_summary__score_filter__title">5 Stars</div>
                        <div class="score_summary__score_filter__status">
                          <div class="score_summary__score_filter__count">(<?=$starsum_5?>)</div>
                          <div class="score_summary__score_filter__check sprites-check"></div>
                        </div>
                        <div class="score_summary__score_filter__gauge">
                          <div style="width:<?=round(($starsum_5/$cnt)*100,1);?>%" class="percentile"></div>
                        </div>
                      </a>
                    </li>

                    <li class="score_summary__score_filter " data-score="4">
                      <a class="js-link-score">
                        <div class="score_summary__score_filter__title">4 Stars</div>
                        <div class="score_summary__score_filter__status">
                          <div class="score_summary__score_filter__count">(<?=$starsum_4?>)</div>
                          <div class="score_summary__score_filter__check sprites-check"></div>
                        </div>
                        <div class="score_summary__score_filter__gauge">
                          <div style="width:<?=round(($starsum_4/$cnt)*100,1);?>%" class="percentile"></div>
                        </div>
                      </a>
                    </li>

                    <li class="score_summary__score_filter " data-score="3">
                      <a class="js-link-score">
                        <div class="score_summary__score_filter__title">3 Stars</div>
                        <div class="score_summary__score_filter__status">
                          <div class="score_summary__score_filter__count">(<?=$starsum_3?>)</div>
                          <div class="score_summary__score_filter__check sprites-check"></div>
                        </div>
                        <div class="score_summary__score_filter__gauge">
                          <div style="width:<?=round(($starsum_3/$cnt)*100,1);?>%" class="percentile"></div>
                        </div>
                      </a>
                    </li>

                    <li class="score_summary__score_filter " data-score="2">
                      <a class="js-link-score">
                        <div class="score_summary__score_filter__title">2 Stars</div>
                        <div class="score_summary__score_filter__status">
                          <div class="score_summary__score_filter__count">(<?=$starsum_2?>)</div>
                          <div class="score_summary__score_filter__check sprites-check"></div>
                        </div>
                        <div class="score_summary__score_filter__gauge">
                          <div style="width:<?=round(($starsum_2/$cnt)*100,1);?>%" class="percentile"></div>
                        </div>
                      </a>
                    </li>

                    <li class="score_summary__score_filter " data-score="1">
                      <a class="js-link-score">
                        <div class="score_summary__score_filter__title">1 Star</div>
                        <div class="score_summary__score_filter__status">
                          <div class="score_summary__score_filter__count">(<?=$starsum_1?>)</div>
                          <div class="score_summary__score_filter__check sprites-check"></div>
                        </div>
                        <div class="score_summary__score_filter__gauge">
                          <div style="width:<?=round(($starsum_1/$cnt)*100,1);?>%" class="percentile"></div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>
                <div class="score_summary__footer">
                  <span class="percentage"><?=$likepercent?>%</span>
                  의 구매자들이 이 상품을 좋아합니다.


                  <span class="score_summary__likes_count">( <?=$cnt?>명 중 <?=$likepeople?>명 )</span>
                </div>
              </div>

            </div>


          </div>
        </div>

      </div>

      <br />



      <?php
  $conn=mysqli_connect('localhost','root','111111', 'treesoap');
  $page_size=10;  //페이지당 게시물 수
  $page_list_size=10;  //한 화면에 표시할 페이지 갯수

  $no="";  //레코드 시작 번호
  if(isset($_GET['no'])){  //변수값이 설정되어 있으면
  $no=$_GET['no'];
  }
  if(!$no||$no<0) $no=0; //no변수값이 음수이거나 없으면 레코드 시작 번호를 0으로

  $query = "SELECT * from board_review order by id desc limit $no,$page_size";  //limit 시작 인덱스, 레코드갯수

  $result = mysqli_query($conn,$query); //전체 레코드 개수 계산
  $result_count=mysqli_query($conn,"SELECT count(*) from board_review");
  $result_row=mysqli_fetch_array($result_count);
  $total_row=$result_row[0];

  if($total_row<=0) $tota_row=0;

  $total_page=ceil($total_row/$page_size); //전체 페이지 갯수 계산
  $current_page=ceil(($no+1)/$page_size); //현재 페이지 계산



  while($row=mysqli_fetch_array($result))
  {
    if($row['prd_id']==3){
  echo

  "<div class='review_list'>
  <button class='accordion' id='accordion'>

          <img class='photo' value='".$row['id']."'
          src='".$row['review_photo']."' />

        <div class='content'>
          <div class='star'>";


  if($row['star']==5){
  echo "
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  ";
  }
  else if($row['star']==4){
  echo"
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star'></span>
  ";
  }

  else if($row['star']==3){
  echo "
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star'></span>
  <span class='fa fa-star'></span>
  ";
  }
  else if($row['star']==2){
  echo "
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star'></span>
  <span class='fa fa-star'></span>
  <span class='fa fa-star'></span>
  ";
  }
  else if($row['star']==1){
  echo "
  <span class='fa fa-star checked'></span>
  <span class='fa fa-star'></span>
  <span class='fa fa-star'></span>
  <span class='fa fa-star'></span>
  <span class='fa fa-star'></span>
  ";
  }

  if($row['review_photo'] == '/treesoap/img/blueclean.png') $row['review_photo']="";

  echo"

    </div>
    <div class='review_title' style='text-align:left; padding-left:10px;'>".$row['review_title']."
    </div>
    </div>

    <div class='summary'>
    <div class='name'>".$row['name']."</div>";

    if($row['wdate']){
      $date=date_create($row['wdate']);
      $review_date=date_format($date,"Y-m-d");

    echo"

    <div class='date'>".$review_date."</div>";
  }
echo "
  </div>

    </button>
    <div class='panel'>
    <p style='font-size:16px; float:left;'><img style='width:10vw; padding-bottom:10px;' src='".$row['review_photo']."'/><br /><span style='margin-left:30px;'>
    ".$row['review_content']."</span><p style='float:right;'>";
    if($userid == ""){
      echo"
      <button style='background-color:#009933; border:none;  border-radius: 5px;
      cursor:pointer; color:white; padding:5px; padding-left:15px;
      padding-right:15px; float:right; margin-top:2vh' onclick=\"alert('로그인이 필요한 서비스입니다.')\";>삭제</button>";
    }
    else if($userid!=""){
      echo"
    <form method='post' action='/treesoap/review_delete.php'>
      <button style='background-color:#009933; border:none;  border-radius: 5px;
      cursor:pointer; color:white; padding:5px; padding-left:15px;
      padding-right:15px; float:right; margin-top:2vh'>삭제</button>
      <input type='hidden' name='deleteid' value='$row[id]' />
        <input type='hidden' name='username' value='$row[name]' />
      </form>";
    }
    echo"
    </p>
    </p>
    </div>
  </div>
  ";


       }
     }
            mysqli_close($conn);
         ?>


      <div style="float: right;">
        <?php
                 if($userid!=="") {

              ?>

        <button class="write" style="font-weight: bold;" onclick="document.getElementById('id01').style.display='block'">
          상품후기 글쓰기</button>

        <?php
              }
            else if($userid==""){
              ?>
        <a onclick="alert('로그인이 필요한 서비스입니다.')">
          <button class="write" style="font-weight: bold;">
            상품후기 글쓰기</button></a>
        <?php
            }
            ?>
      </div>
      <div id="id01" class="modal">
        <div id="write-layer" class="write-layer animate">
          <table>
            <tr>
              <td width="200%">
                <h4>상품후기 글쓰기</h4>
              </td>
              <td>
                <button onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</button>
              </td>
            </tr>
          </table>


          <form class="modal-content" name="frmWrite" id="frmWrite" method="post">

            <legend>상품 문의/후기 작성 폼</legend>
            <div class="scroll-box">
              <div class="goods">
                <div class="thumbnail">
                  <img width="900" title="라벤더 비누" class="middle" alt="라벤더비누" src="/treesoap/img/pinkclean.png">
                </div>
                <div class="txt">

                  <h2>라벤더 비누</h2>
                  <p>복합성 피부에 수분감을 더해줄 비누!</p>

                </div>
              </div>
              <div class="board-write">
                <table border="1" cellpadding="0" summary="글쓰기 폼입니다.">
                  <colgroup>
                    <col width="11%">
                    <col>
                  </colgroup>
                  <tbody>
                    <input name="prd_id" type="hidden" value="3" />
                    <tr>
                      <th>작성자</th>
                      <td>
                        <?php echo "$username";?>
                        <input name="writerNm" type="hidden" value="writerNm">
                      </td>
                    </tr>
                    <tr>
                      <th>제목</th>
                      <td>
                        <input name="review_title" class="text" type="text" placeholder="제목 입력" id="review_title">
                      </td>
                    </tr>
                    <tr>
                      <th>별점</th>
                      <td>
                        <select name="star" style='height:35px;'>
                          <option value="5">★★★★★
                          </option>
                          <option value="4">★★★★☆</option>
                          <option value="3">★★★☆☆</option>
                          <option value="2">★★☆☆☆</option>
                          <option value="1">★☆☆☆☆</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>내용</th>
                      <td>
                        <textarea name="review_content" id="review_content"></textarea>
                      </td>
                    </tr>
                    <tr>
                      <th>파일</th>
                      <td id="uploadBox">
                        <div class="file_input">
                          <input type="text" id="file_route" value="/treesoap/img/pinkclean.png" name="review_photo">
                          <label>
                            파일선택
                            <input type="file" onchange="javascript: document.getElementById('file_route').value=this.value">
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="btn">
              <button onclick="event.preventDefault(); document.getElementById('id01').style.display='none'" class="button6" style="background-color: #6fa56f">취소</button>
              <button class="button6" type="submit" id="upload_review" formaction="/treesoap/review_insert.php" style="background-color: #a4d18e">등록</button>

            </div>

          </form>

        </div>
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }

        //required 구현하도록

        var t = document.getElementById('frmWrite');
        t.addEventListener('submit', function(event) {
          if (document.getElementById('review_title').value.length == 0) {
            alert('제목을 입력해주세요.');
            event.preventDefault();
          } else if (document.getElementById('review_content').value.length == 0) {
            alert('내용을 입력해주세요.');
            event.preventDefault();
          }

        });
      </script>

    </div>
  </div>
  </div>

  <br /><br /><br />

  <div class="pagination">
    <?php
  $start_page= floor(($current_page-1)/$page_list_size)
  *$page_list_size+1;

  $end_page= $start_page + $page_list_size -1;
  //페이지 리스트의 마지막 페이지가 몇번쨰 페이지인지 계산

  if($total_page < $end_page)
  $end_page = $total_page;
  if($start_page >= $page_list_size)
  {

  $prev_list = ($start_page -2) * $page_size;
  //이전 페이지 블록으로 이동
  echo "<a href=\"$_SERVER[PHP_SELF]?no=$prev_list#prdreview\">◀</a>\n";
  }  //$_SERVER[PHP_SELF] 현재 페이지의 주소

  for($i=$start_page; $i<=$end_page; $i++){
  $page=($i-1)*$page_size; //페이지 값을 no값으로
  if($no!=$page){  //현재 페이지가 아닐경우만 링크
    echo "<a href=\"$_SERVER[PHP_SELF]?no=$page#prdreview\">$i</a>\n";
  }
  else {
    echo "<a class='active' style='border:1px solid #71da71;border-radius: .25em;
  color: #71da71;'>$i</a>";
  } //페이지를 표시

  }

  if($total_page>$end_page){  //다음페이지 리스트 출력
  $next_list=$end_page*$page_size;
  echo "<a href='$_SERVER[PHP_SELF]?no=$next_list#prdreview'>▶</a>";
  }
  ?>

  </div>

  </div>
  <br /><br /><br /><br /><br />


  <script>
    var acc = document.getElementsByClassName('accordion');
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>




  <!--상품문의-->
  <div class="main" id="prdqna">
    <br><br>
    <div class="link">
      <a href="#prddetail" class="linkbtn" style="margin-left:10vw;">
        상품상세정보</a>
      <a href="#prdinform" class="linkbtn">
        구매안내
      </a>
      <a href="#prdreview" class="linkbtn">
        상품후기
      </a>
      <a href="#prdqna" class="linkbtn" style="position: relative;
      border: 1px solid #999999;
      border-bottom: 1px solid #fff;
      color:#3CB371;
      font-weight: bold; margin-right:5vw;">
        상품문의
      </a>
    </div>

    <?php
  $conn=mysqli_connect('localhost','root','111111', 'treesoap');
  $page_size=10;  //페이지당 게시물 수
  $page_list_size=10;  //한 화면에 표시할 페이지 갯수

  $no="";  //레코드 시작 번호
  if(isset($_GET['no'])){  //변수값이 설정되어 있으면
  $no=$_GET['no'];
  }
  if(!$no||$no<0) $no=0; //no변수값이 음수이거나 없으면 레코드 시작 번호를 0으로

  $query = "SELECT * from board_review order by id desc limit $no,$page_size";  //limit 시작 인덱스, 레코드갯수

  $result = mysqli_query($conn,$query); //전체 레코드 개수 계산
  $result_count=mysqli_query($conn,"SELECT count(*) from board_review");
  $result_row=mysqli_fetch_array($result_count);
  $total_row=$result_row[0];

  if($total_row<=0) $tota_row=0;

  $total_page=ceil($total_row/$page_size); //전체 페이지 갯수 계산
  $current_page=ceil(($no+1)/$page_size); //현재 페이지 계산
  ?>

    <br /><br /><br /><br />

    <div class="board_ask" style="margin-left:15vw; margin-bottom:10vw;">
      <div class="title">
        <h3 style="
        display: block;
    font-size: 25px;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-right: 190px;
    font-weight: bold;">l 상품 문의</h3>
      </div>

      <div class="ask_list" style="font-size: 14px;
    font-family:맑은 고딕; margin-top:20px; ">
        <table class="asktable" style=" border-top: 2px solid #dbdbdb; width:100%;">

          <?php
        $conn=mysqli_connect('localhost','root','111111', 'treesoap');
        $page_size=10;  //페이지당 게시물 수
        $page_list_size=10;  //한 화면에 표시할 페이지 갯수

        $no="";  //레코드 시작 번호
        if(isset($_GET['no'])){  //변수값이 설정되어 있으면
        $no=$_GET['no'];
        }
        if(!$no||$no<0) $no=0; //no변수값이 음수이거나 없으면 레코드 시작 번호를 0으로

        $query = "SELECT * from board_ask WHERE prd_id=3 order by num  desc limit $no,$page_size ";  //limit 시작 인덱스, 레코드갯수

        $result = mysqli_query($conn,$query); //전체 레코드 개수 계산
        $result_count=mysqli_query($conn,"SELECT count(*) from board_ask WHERE prd_id=3");
        $result_row=mysqli_fetch_array($result_count);
        $total_row=$result_row[0];

        if($total_row<=0) $tota_row=0;

        $total_page=ceil($total_row/$page_size); //전체 페이지 갯수 계산
        $current_page=ceil(($no+1)/$page_size); //현재 페이지 계산



        while($row=mysqli_fetch_array($result))
        {

         if($row['prd_id']==3){

           if($row['num']){
             $_SESSION['num']=$row['num'];

     }?>
          <form method="POST" action="/treesoap/ask_process.php">
            <?php
         if($row['ask_type']!==NULL){
         ?> <input type='hidden' name='custom_id' value='<?=$row['custom_id']?>' />
            <input type='hidden' name='num' value='<?=$row['num']?>' />
            <?php  echo "<td class='sub'><img style='margin-right:4pt' src='http://www.soonnoc.com/data/skin/front/1801_T/board/skin/qa/img/icon/icon_board_secret.png'><button class='titlebtn' type ='submit' formaction='/treesoap/ask_process.php'><a>".$row['ask_type']."문의</a></button></td>";
       ?>
          </form>
          <?php
    }

        $que="SELECT t1.username from member t1 ,board_ask t2 WHERE t1.custom_id ={$row['custom_id']}";
        $res=mysqli_query($conn,$que);
        if($row2=mysqli_fetch_assoc($res)){
         $username= $row2['username'];
          echo "<td class='name'>".$username."</td>";

        }
        if($row['ask_date']){
          $date=date_create($row['ask_date']);
          $ask_date=date_format($date,"Y-m-d");
          echo"<td class='date'>".$ask_date."</td>";
        }
        if($row['ask_yorn']=='0'){
          echo "<td class='reply'>답변완료</td>";
        }
        echo "</tr>";

          }

        }
                mysqli_close($conn);
             ?>


        </table>
      </div>


      <div style="float: right;">
        <button class="write" style="border:2px solid #71da71; background-color:white; color:black;" onclick="location.href='/treesoap/ask.php'">
          상품문의 전체보기</button>
        <?php
                   if($userid!=="") {

                ?>
        <button class="write" style="font-weight: bold;" onclick="document.getElementById('id02').style.display='block'">상품문의 글쓰기</button>
        <?php
                }
              else if($userid==""){
                ?>
        <a onclick="alert('로그인이 필요한 서비스입니다.')">
          <button class="write" style="font-weight: bold;">상품문의 글쓰기</button></a>
        <?php
              }
              ?>
      </div>
      <br /><br /><br />
      <div class="pagination" style="margin-top:20px;">
        <?php
          $start_page= floor(($current_page-1)/$page_list_size)
          *$page_list_size+1;

          $end_page= $start_page + $page_list_size -1;
          //페이지 리스트의 마지막 페이지가 몇번쨰 페이지인지 계산

          if($total_page < $end_page)
          $end_page = $total_page;
          if($start_page >= $page_list_size)
          {

          $prev_list = ($start_page -2) * $page_size;
          //이전 페이지 블록으로 이동
          echo "<a href=\"$_SERVER[PHP_SELF]?no=$prev_list#prdreview\">◀</a>\n";
          }  //$_SERVER[PHP_SELF] 현재 페이지의 주소

          for($i=$start_page; $i<=$end_page; $i++){
          $page=($i-1)*$page_size; //페이지 값을 no값으로
          if($no!=$page){  //현재 페이지가 아닐경우만 링크
            echo "<a href=\"$_SERVER[PHP_SELF]?no=$page#prdreview\">$i</a>\n";
          }
          else {
            echo "<a class='active' style='border:1px solid #71da71;border-radius: .25em;
          color: #71da71;'>$i</a>";
          } //페이지를 표시

          }

          if($total_page>$end_page){  //다음페이지 리스트 출력
          $next_list=$end_page*$page_size;
          echo "<a href='$_SERVER[PHP_SELF]?no=$next_list#prdreview'>▶</a>";
          }
          ?>
      </div>

      <div id="id02" class="modal">
        <div id="write-layer" class="write-layer animate">
          <table>
            <tr>
              <td width="200%">
                <h4>상품문의 글쓰기</h4>
              </td>
              <td>
                <button onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</button>
              </td>
            </tr>
          </table>


          <form class="modal-content" name="frmWrite2" id="frmWrite2" method="post">

            <legend>상품 문의/후기 작성 폼</legend>
            <div class="scroll-box">
              <div class="goods">
                <div class="thumbnail">
                  <img width="900" title="라벤더 비누" class="middle" alt="라벤더비누" src="/treesoap/img/pinkclean.png">
                </div>
                <div class="txt">

                  <h2>라벤더 비누</h2>
                  <p>복합성 피부에 수분감을 더해줄 비누!</p>

                </div>
              </div>
              <div class="board-write">
                <table border="1" cellpadding="0" summary="글쓰기 폼입니다.">
                  <colgroup>
                    <col width="11%">
                    <col>
                  </colgroup>
                  <tbody>
                    <input name="prd_id" type="hidden" value="3" />
                    <tr>
                      <th>작성자</th>
                      <td>
                        <?php echo "{$_SESSION['username']}";?>
                        <input name="writerNm" type="hidden" value="writerNm">
                      </td>
                    </tr>
                    <tr>
                      <th>질문 유형</th>
                      <td>
                        <select name="about" style='width:10vw; line-height: 30px;'>
                          <option value="피부상담">피부상담</option>
                          <option value="상품">상품</option>
                          <option value="배송">배송</option>
                          <option value="반품/환불">반품/환불</option>
                          <option value="교환/변경">교환/변경</option>
                          <option value="기타">기타</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>제목</th>
                      <td>
                        <input name="ask_title" class="text" type="text" placeholder="제목 입력" id="ask_title">
                      </td>
                    </tr>

                    <tr>
                      <th>내용</th>
                      <td>
                        <h5 style="margin-top:5px; font-size: 12px; color:#999999;">해당글은 비밀글로만 작성이 됩니다.</h5>
                        <textarea name="ask_content" id="ask_content"></textarea>
                      </td>
                    </tr>
                    <tr>
                      <th>파일</th>
                      <td id="uploadBox">
                        <div class="file_input">
                          <input type="text" id="file_route" value="/treesoap/img/pinkclean.png" name="ask_photo">
                          <label>
                            파일선택
                            <input type="file" onchange="javascript: document.getElementById('file_route').value=this.value">
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="btn">
              <button onclick="event.preventDefault(); document.getElementById('id02').style.display='none'" class="button6" style="background-color: #6fa56f">취소</button>
              <button class="button6" type="submit" id="upload_ask" formaction="/treesoap/ask_insert1.php" style="background-color: #a4d18e">등록</button>

            </div>
            <br /><br />

          </form>

        </div>
      </div>


      <script>
        // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }

        //required 구현하도록

        var t = document.getElementById('frmWrite2');
        t.addEventListener('submit', function(event) {
          if (document.getElementById('ask_title').value.length == 0) {
            alert('제목을 입력해주세요.');
            event.preventDefault();
          } else if (document.getElementById('ask_content').value.length == 0) {
            alert('내용을 입력해주세요.');
            event.preventDefault();
          }

        });
      </script>

    </div>
  </div>
  <br /><br /><br /><br /><br /><br />

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
