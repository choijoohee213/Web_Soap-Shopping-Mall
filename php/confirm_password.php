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
  <link rel="stylesheet" type="text/css" href="/treesoap/css/confirm_password.css">
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

  <div id="wrap">
    <div id="container">
      <div class="side_wrapper">
        <div id="side">
          <div class="lnb mypage-lnb">
            <h2 color=#dbffb7>마이페이지</h2>
            <h3>혜택관리</h3>
            <ul>
              <a href="/treesoap/mileage.php">
                <li>적립금</li><a>
            </ul>
            <h3>쇼핑정보</h3>
            <ul>
              <a href="/treesoap/cart.php">
                <li>장바구니</li>
              </a>
              <a href="/treesoap/order_list.php">
                <li>배송조회</li>
              </a>
              <a href="/treesoap/shoplist.php">
                <li>취소/반품/교환 내역</li>
              </a>
            </ul>
            <h3>회원정보</h3>
            <ul>
              <a href="/treesoap/confirm_password.php">
                <li>회원정보 변경</li>
              </a>
              <a href="/treesoap/withdraw.php">
                <li>회원 탈퇴</li>
              </a>
              <a href="/treesoap/confirm_password.php">
                <li>배송지 관리</li>
              </a>
            </ul>
            <h3 class="my-question">나의 상품문의</h3>
            <h3 class="my-review">나의 상품후기</h3>
            <hr>
          </div>
        </div>
      </div>


      <div class="main_content">
        <div class="title">
          <h3>l 비밀번호 확인</h3>
        </div>
        <form id="confirm_password" class="confirm_password" method="post" action="/treesoap/confirm_password_process.php">
          <div class="form">
            <div class="input">
              <input style="width:190px; height:37px; margin:16px 0 0 10px;" name="userpwchk" type="password" required>
            </div>
            <div class="btn"><button class="button6">확인</button></div>
          </div>
        </form>
      </div>
    </div>
    <div>


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
