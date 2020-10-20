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
  <link rel="stylesheet" type="text/css" href="/treesoap/css/community.css">

</head>

<body>

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


  <div id="notice">
    <div id="wrap">
      <h2>커뮤니티</h2>
      <div class="blink"></div>
      <button class="button7" onclick="document.getElementById('notice').style.display='block';
      document.getElementById('qna').style.display='none';  document.getElementById('event').style.display='none';" style="background-color:  #71da71;"><strong>공지사항</strong></button>
      <button class="button8" onclick="document.getElementById('notice').style.display='none';
      document.getElementById('qna').style.display='block';  document.getElementById('event').style.display='none';" style="background-color: white"><strong>자주묻는질문</strong></button>
      <button class="button6" onclick="document.getElementById('notice').style.display='none';
      document.getElementById('qna').style.display='none';  document.getElementById('event').style.display='block';" style="background-color: white"><strong>이벤트</strong></button>
      </center>
    </div>





    <br /><br />

    <div class="board_ask" style="margin-left:15vw; margin-bottom:3vw;">
      <div class="title">
        <h3 style="
            display: block;
        font-size: 25px;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-right: 190px;
        font-weight: bold;">l 공지사항</h3>
      </div>

      <br />
      <div class="ask_list" style="font-size: 14px;
          ">
        <div class='accordion' id='accordion' style="height:5vh;padding-top: 13px;
        cursor: auto;
        background-color:#d9d9d9;">
          <div class="num"><span>번호</span></div>

          <div class="ask_title" style="text-align:center; width:70%"><span>제목</span></div>
          <div class="sub">
            <span>작성일자</span>
          </div>
        </div>
      </div>

      <div class="ask_list" style="font-size: 14px;
       ">
        <button class='accordion' id='accordion'>
          <div class="num"><span>4</span></div>

          <div class="ask_title" style="width:70%"><span>2019년 설 연휴 안내</span></div>
          <div class="sub">
            <span>2019.1.29</span>
          </div>
        </button>
        <div class='panel'>

          <div class="adv">
            <p style="
border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:20pt;">
              배송일정 및 고객센터 이용 관련 사항에 대해 안내드립니다.
              <br /><br />* 배송 마감일 *
              1월 30일(수) 16:00 (입금완료확인 기준)
              위의 마감시간까지 입금완료된 주문은 수요일 당일에 출고가 되어
              빠르면 1월 31일인 목요일,
              지연이 되면 2월 7일 이후 모든 제품을 받아보실 수 있습니다.
              <br /><br />* 배송 안내 *
              마감시간 이후에 주문된 건은 설 연휴가 지난 후(2월 7일 목요일)부터 순차적으로 발송되어 2월 8일 이후에 받아보실 수 있습니다.
              연휴 이후에도 차질 없이 빠르게 배송될 수 있도록 처리 중이오니
              배송이 다소 지연되더라도 넓은 마음으로 양해해주시길 부탁드립니다.<br /><br />
              * 고객 센터 이용 안내 *
              추석연휴기간 동안에는 고객센터를 운영하지 않습니다.
              고객센터 휴무 : 2019.02.02(토) ~ 02.06(수)
              주문 및 배송에 관해 궁금하신 사항이 있으신 경우,
              문의게시판을 이용하시면, 최대한 신속하게 답변 드리겠습니다.
              즐거운 명절 되시길 기원합니다.
              감사합니다 ^^
            </p>
          </div>
        </div>
      </div>


      <div class="ask_list" style="font-size: 14px;
                  ">
        <button class='accordion' id='accordion'>
          <div class="num"><span>3</span></div>

          <div class="ask_title" style="width:70%"><span>당일 발송 안내입니다.</span></div>
          <div class="sub">
            <span>2019.2.25</span>
          </div>
        </button>
        <div class='panel'>

          <div class="adv">
            <p style="
        border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:20pt;">
              평일 월~금 오후 4시 이전 결제된 주문에 한해 당일 발송 처리를 원칙으로 하고 있습니다.
              <br /><br />
              주말, 공휴일을 제외한 택배사 영업일로부터
              평균 1~2일 이내 안전하게 받아 보실 수 있습니다.<br /><br />
              *참고 : 명절, 악천우 등 택배사 사정에 따라 배송이 지연될 수도 있으니
              홈페이지 상단 주문조회를 통해 배송현황을 확인 하시기 바랍니다.
            </p>
          </div>
        </div>
      </div>


      <div class="ask_list" style="font-size: 14px;
                      ">
        <button class='accordion' id='accordion'>
          <div class="num"><span>2</span></div>

          <div class="ask_title" style="width:70%"><span>트리솝 할인 세트 공지입니다.</span></div>
          <div class="sub">
            <span>2019.4.20</span>
          </div>
        </button>
        <div class='panel'>

          <div class="adv">
            <p style="
                border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:20pt;">
              트리솝이 스페셜한 혜택으로 여러분께 다가갑니다.
              인생에 가장 젊은날~ 다양한 구성으로 선물해 보세요^^<br />
              최대 10%~13% 할인 된 가격으로
              만나보 실 수 있습니다.<br /><br />
              세트 상품만 할인이 적용되며
              비누 2개 구성 = 10% 할인
              세럼+스킨+로션 = 10% 할인
              천연비누2+세럼+토너+로션 = 13% 할인
              (비누포함 세트상품 : 천연비누 2+1이벤트 적용 추가로 원하시는 비누 하나 더 드립니다.)<br /><br />
              배송란에 원하시는비누 적어주세요.
              *이벤트는 내부 사정에 따라 변경될 수 있습니다.
            </p>
          </div>
        </div>
      </div>

      <div class="ask_list" style="font-size: 14px;">
        <button class='accordion' id='accordion'>
          <div class="num"><span>1</span></div>

          <div class="ask_title" style="width:70%"><span>유칼립투스 비누 2+1 이벤트 공지입니다.</span></div>
          <div class="sub">
            <span>2019.5.29</span>
          </div>
        </button>
        <div class='panel'>

          <div class="adv">
            <p style="
                        border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:20pt;">
              오늘도 수고한 당신께
              이벤트를 진행합니다.<br />

              트리솝 유칼립투스 비누 2개 구매시
              원하시는 비누로 1개 더 드리고 있습니다.
              (이벤트 상품도 트리솝 정품 입니다.)
              <br /><br />
              ex)
              2개 구매시 정품비누 1개 증정
              4개 구매시 정품 비누 2개 증정
            </p>
          </div>
        </div>
      </div>
    </div>

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


    <br />
    <div class="pagination" style="margin-top:20px;">
      <?php
              echo "<a class='active' style='border:1px solid #71da71;border-radius: .25em;
              color: #71da71;'>1</a>";
            ?>

    </div>
  </div>
  </div>



  <div id="qna">
    <div id="wrap">
      <h2>커뮤니티</h2>
      <div class="blink"></div>
      <button class="button7" onclick="document.getElementById('notice').style.display='block';
      document.getElementById('qna').style.display='none';  document.getElementById('event').style.display='none';" style="background-color: white"><strong>공지사항</strong></button>
      <button class="button8" onclick="document.getElementById('notice').style.display='none';
      document.getElementById('qna').style.display='block';  document.getElementById('event').style.display='none';" style="background-color:  #71da71;"><strong>자주묻는질문</strong></button>
      <button class="button6" onclick="document.getElementById('notice').style.display='none';
      document.getElementById('qna').style.display='none';  document.getElementById('event').style.display='block';" style="background-color: white"><strong>이벤트</strong></button>
      </center>
    </div>




    <br /><br />

    <div class="board_ask" style="margin-left:15vw; margin-bottom:3vw;">
      <div class="title">
        <h3 style="
            display: block;
        font-size: 25px;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-right: 190px;
        font-weight: bold;">l 자주묻는질문</h3>
      </div>

      <br />
      <div class="ask_list" style="font-size: 14px; ">
        <div class='accordion' id='accordion' style="height:5vh;padding-top: 13px;
        cursor: auto;
        background-color:#d9d9d9;">
          <div class="num"><span>번호</span></div>
          <div class="sub"><span>
              분류
            </span></div>
          <div class="ask_title" style="text-align:center;"><span>제목</span></div>
        </div>
      </div>

      <div class="ask_list" style="font-size: 14px;">
        <button class='accordion2' id='accordion2'>
          <div class="num"><span>5</span></div>
          <div class="sub"><span>
              회원가입정보
            </span></div>
          <div class="ask_title"><span>아이디와 패스워드가 생각나지 않으면 어떻게 하나요?</span></div>
        </button>
        <div class='panel2'>
          <div class="qst">
            <p>
              <span style="color:blue;">Q</span> : 아이디와 패스워드가 생각나지 않으면 어떻게 하나요?
            </p>
          </div>

          <div class="adv">
            <p style="
  border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:15pt;"><span style="color:red;">A</span> :
              홈페이지 로그인 화면 하단에서 아이디/비밀번호찾기 버튼 클릭,<br />아이디 찾기는 회원가입 시, 입력하신 이름 + 이메일 또는 휴대폰 번호로 확인하실 수 있으며,<br />비밀번호 찾기는 가입하신 아이디 + 이메일 또는 휴대폰 번호를 입력, <br />본인인증을 통해 이메일 또는 휴대폰 번호로 임시 비밀번호를 보내드립니다. <br />확인 후 로그인하셔서 반드시 비밀번호를 변경하시기 바랍니다.
            </p>
          </div>
        </div>
      </div>


      <div class="ask_list" style="">
        <button class='accordion2' id='accordion2'>
          <div class="num"><span>4</span></div>
          <div class="sub"><span>
              회원가입정보
            </span></div>
          <div class="ask_title"><span>회원정보를 변경하고 싶어요. 어떻게 하나요?</span></div>
        </button>
        <div class='panel2'>
          <div class="qst">
            <p>
              <span style="color:blue;">Q</span> : 회원정보를 변경하고 싶어요. 어떻게 하나요?
            </p>
          </div>

          <div class="adv">
            <p style="
    border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:15pt;"><span style="color:red;">A</span> :
              회원 정보 변경은 홈페이지 상단에 있는 메뉴 중 정보수정을 클릭하고 들어가서 변경 가능합니다.<br />

              회원 아이디와 성함를 제외한 모든 내용은 언제든지 수정이 가능하며,<br />
              상품 배송과 관련 된 거주지나 연락처가 변경되신 경우 반드시 수정 후에 주문해주시기 바랍니다.
            </p>
          </div>
        </div>
      </div>


      <div class="ask_list" >
        <button class='accordion2' id='accordion2'>
          <div class="num"><span>3</span></div>
          <div class="sub"><span>
              결제/배송
            </span></div>
          <div class="ask_title"><span> 배송비용과 배송기간은 어떻게 되나요?</span></div>
        </button>
        <div class='panel2'>
          <div class="qst">
            <p>
              <span style="color:blue;">Q</span> : 배송비용과 배송기간은 어떻게 되나요?
            </p>
          </div>

          <div class="adv">
            <p style="
            border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:15pt;"><span style="color:red;">A</span> :
              30,000원 이상 주문시 무료배송이 적용 되며<BR>배송지역에 따라 결제일로부터 평균 1~3일정도 소요 됩니다.<BR>산간 도서지역의 경우 5일이상 소요될 수 있습니다.<br />>명절, 악천후 등 택배사 사정에 따라 배송이 지연될 수도 있으니<BR>홈페이지 상단 주문조회를 통해 배송현황을 확인 하시기 바랍니다.
            </p>
          </div>
        </div>
      </div>

      <div class="ask_list" >
        <button class='accordion2' id='accordion2'>
          <div class="num"><span>2</span></div>
          <div class="sub"><span>
              교환/반품/환불
            </span></div>
          <div class="ask_title"><span> 상품의 교환 및 반품이 가능한가요?</span></div>
        </button>
        <div class='panel2'>
          <div class="qst">
            <p>
              <span style="color:blue;">Q</span> : 상품의 교환 및 반품이 가능한가요?
            </p>
          </div>

          <div class="adv">
            <p style="
                    border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:15pt;"><span style="color:red;">A</span> :
              고객에게 인도될 당시 해당 상품이 훼손된 경우<br>2) 주문한 상품이 아닌 다른 상품이 배달되었을 경우<br>3) 배송이나 용역이 약관에 표시된 기간 (2일~5일)을 초과한 경우<br>4) 단순 변심에 의한 교환, 반품(수령 후 7일 이내에 요청해야 가능 고객님께서 왕복 배송비를 부담하셔야 합니다.)<br><br>1)~3)에 해당될 경우 교환, 반품시 아이지아에서 배송비(교환시 5000원, 반품시 2,500원)를
              <br>부담하며 반품 후 상품 금액을 전액 돌려드립니다.<br><br>고객님의 변심에 의해 다른 상품으로 교환을 원하실 경우 왕복 배송비 5,000원을 부담하셔야 하며,<br>추가 금액이 있을 경우 입금이 확인되어야 합니다. 단순 변심 교환은 전화로 상담해 주십시오.<br>&nbsp;</p>
            <p>이미 개봉된 상품의 반품은 불가능합니다.</p>
            <p>트러블이 우려될 경우 성분을 꼼꼼히 살피신 후 주문하시길 바랍니다.</p>

            </p>
          </div>
        </div>
      </div>

      <div class="ask_list" >
        <button class='accordion2' id='accordion2'>
          <div class="num"><span>1</span></div>
          <div class="sub"><span>
              제품관련
            </span></div>
          <div class="ask_title"><span> 천연비누에 하얀색 스팟현상이 뭔가요?</span></div>
        </button>
        <div class='panel2'>
          <div class="qst">
            <p>
              <span style="color:blue;">Q</span> : 천연비누에 하얀색 스팟현상이 뭔가요?
            </p>
          </div>

          <div class="adv">
            <p style="
                            border-top: 1px dashed #d8d8d8; margin-right:100px; line-height:15pt;"><span style="color:red;">A</span> :
              천연비누에는 천연보습제 및 천연오일 등이 다량 포함되어 있습니다.<br />
              이런 원료들이 추운 겨울철에 일시적으로 응고가 되면서<br />
              하얀색 스팟 현상으로 표현될 수 있습니다.<br />
              사용시에 아무런 문제가 없습니다. </p>

            </p>
          </div>
        </div>
      </div>
    </div>

    <script>
      var acc = document.getElementsByClassName('accordion2');
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel2 = this.nextElementSibling;
          if (panel2.style.display === "block") {
            panel2.style.display = "none";
          } else {
            panel2.style.display = "block";
          }
        });
      }
    </script>


    <br />
    <div class="pagination" style="margin-top:20px;">
      <?php
              echo "<a class='active' style='border:1px solid #71da71;border-radius: .25em;
              color: #71da71;'>1</a>";
            ?>

    </div>
  </div>
  </div>



  <div id="event">
    <div id="wrap">
      <h2>커뮤니티</h2>
      <div class="blink"></div>
      <button class="button7" onclick="document.getElementById('notice').style.display='block';
      document.getElementById('qna').style.display='none';  document.getElementById('event').style.display='none';" style="background-color: white"><strong>공지사항</strong></button>
      <button class="button8" onclick="document.getElementById('notice').style.display='none';
      document.getElementById('qna').style.display='block';  document.getElementById('event').style.display='none';" style="background-color: white"><strong>자주묻는질문</strong></button>
      <button class="button6" onclick="document.getElementById('notice').style.display='none';
      document.getElementById('qna').style.display='none';  document.getElementById('event').style.display='block';" style="background-color:  #71da71"><strong>이벤트</strong></button>
      </center>
    </div>




    <br /><br />

    <div class="board_ask2" style=" margin-bottom:3vw; ">

      <div class="title" style="">
        <h3 style="
            display: block;
        font-size: 30px;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
          margin-left:17vw;
          margin-bottom: 30px;

        font-weight: bold;">l EVENT</h3>
      </div>
      <br />

      <center>
        <div class="event_img">
          <table class="img_table" style="text-align:center;">
            <tr>
              <td>
                <span style="  "><img src="/treesoap/img/앱.jpg" />
                  <p style="margin-top:10px;">
                    하나멤버스 앱 신규 가입하고 <br />무료배송 쿠폰받자!
                  </p>
                  <p style="margin-bottom:50px;">
                    [기간] 2016.08.05 ~ 2019.12.31
                  </p>
                </span>
              </td>
              <td>
                <span style="  "><img src="https://www.66girls.co.kr/file_data/mall66/gallery/2019/01/31/33827aa8a56f59fdb3231f5124e8c7b5.jpg" />
                  <p style="margin-top:10px;">
                    2019설날맞이 SALE: <br />연휴내내 전상품 10% 할인
                  </p>
                  <p style="margin-bottom:50px;">
                    [기간] 2019.02.02 ~ 2019.02.07
                  </p>
                </span>
              </td>
              <td>
                <span style="  "><img src="/treesoap/img/인증.jpg" />
                  <p style="margin-top:10px;">
                    [댓글 이벤트] 트리솝 단골 인증하면,<br />푸짐한 선물이?
                  </p>
                  <p style="margin-bottom:50px;">
                    [기간] 2019.01.25 ~ 2019.03.05
                  </p>
                </span>
              </td>
            </tr>
            <tr>
              <td>
                <span style="  "><img src="/treesoap/img/크리스마스.jpg" />
                  <p style="margin-top:10px;">
                    [댓글 이벤트] 크리스마스 소원<br /> 말하고 선물 받아가자!
                  </p>
                  <p style="margin-bottom:50px;">
                    [기간] 2018.12.01 ~ 2018.12.28
                  </p>
                </span>
              </td>
              <td>

                <span style="">
                  <img src="https://www.blla.co.kr/file_data/blla2018/gallery/2018/06/25/0b73965795a95c324e1edfafcf030276.jpg" />
                  <p style="margin-top:10px;">
                    인스타 리뷰 이벤트!<br /> 비누 후기 누가 이쁘게 올리나?
                  </p>
                  <p style="margin-bottom:50px;">
                    [기간] 2018.10.03 ~ 2018.11.10
                  </p>
                </span>
              </td>
              <td>
                <span style="  "><img src="/treesoap/img/원플원.jpg" />
                  <p style="margin-top:10px;">
                    2018 추석맞이 세일!<br /> 풍성한 한가위를 위해 준비했어요~
                  </p>
                  <p style="margin-bottom:50px;">
                    [기간] 2018.09.01 ~ 2018.10.01
                  </p>
                </span>
              </td>
            </tr>
          </table>








      </center>
    </div>


  </div>
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
        <p class="a5" style="font-size :12px">문의사항은 이벤트을 이용</p>
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
        <p>이벤트</p>
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
