<?$conn = mysqli_connect(
  'localhost',
  'jjikkyu',
  'wjdwlsrbs9^',
  'jjikkyu');

	mysqli_query($conn, "set session character_set_connection=utf8;");
	mysqli_query($conn, "set session character_set_results=utf8;");
	mysqli_query($conn, "set session character_set_client=utf8;");
	?>

<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <title>국밥계산기 - Gukbap Calculator</title>
</head>
<body>

        
    <header id="header">
        <!-- 좌상단 햄버거 메뉴 -->
        <div class="navBar">
            <div id="hambugerMenu"></div>
        </div>

        <!-- 메인 타이틀 -->
        <div class="title">
            <h1 class="titleText">
                <input type="text" value="에어팟프로" id="product" maxlength="8"><input type="text" value="330000" id="price"><span id="priceWon">원</span></span>에 살 바에 <br>
                뜨끈하고 든든한 <span id="titleYellow"></span> <br>
                <span id="bowl"></span><span id="bowlAfterText"> 먹고말지</span>
            </h1>

            <a href="#gukbap-select"><div class="arrow"></div></a>
        </div>
        
        <!-- 우측 국밥 이미지 -->
        <div id="gukbap">
            <img id="titleGukbapImg" src="" alt="">
        </div>
        

    </header>

    <section id="introduce">
        <div class="gukbap-select" id="gukbap-select">
            <div class="container">
                <div class="gukbapBar" id="gukbapBar" data-parallax='{"y":21, "from-scroll": 7, "distance":21, "smoothness":0}'>
                    <div class="verticalLine"></div>
                    <ul>
                        <li id="navSDK" onclick="gukbapSelectClick('sdk');">순대국밥</li>
                        <li id="navPIG" onclick="gukbapSelectClick('pig');">돼지국밥</li>
                        <li id="navHEAD" onclick="gukbapSelectClick('head');">소머리국밥</li>
                        <li id="navSEED" onclick="gukbapSelectClick('seed');">콩나물국밥</li>
                    </ul>
                </div>
                <!-- 여러분의 국밥 원픽 선택 -->
                <div id="gukbapTitle" data-parallax='{"y":21, "from-scroll": 7, "distance":21, "smoothness":0}'>
                    <h1 >여러분의 국밥 원픽을<br>선택해주세요!</h1>
                </div>
                <div class="gukbapImg" id="sdkImg" onclick="gukbapSelectClick('sdk');">
                    <div class="gukbapTipText" id ="gukbapTipText">
                        <div id="border-left"></div>
                        <h3>쫄깃한 식감</h3>
                        <h1>순대국밥</h1>
                    </div>
                </div><!-- gukbapImg -->
                <div class="imgHoverBG" id="sdkImgHover"></div>
            </div><!-- container -->
        </div> <!-- gukbap-select -->

        <div class="gukbap-select" id="gukbap-select">
            <div class="container">

                <div class="gukbapImg" id ="pigImg" onclick="gukbapSelectClick('pig');">
                    <div class="gukbapTipText" id="gukbapTipTextPig">
                        <div id="border-left"></div>
                        <h3>오리지날은 영원하다</h3>
                        <h1>돼지국밥</h1>
                    </div>
                </div><!-- gukbapImg -->
                <div class="imgHoverBG" id="pigImgHover"></div>
            </div><!-- container -->
        </div> <!-- gukbap-select -->

        <div class="gukbap-select" id="gukbap-select">
            <div class="container">
                <div class="gukbapImg" id ="headImg" onclick="gukbapSelectClick('head');">
                    <div class="gukbapTipText" id="gukbapTipTextHead">
                        <div id="border-left"></div>
                        <h3>마음까지 든든-한</h3>
                        <h1>소머리국밥</h1>
                    </div>
                </div><!-- gukbapImg -->
                <div class="imgHoverBG" id="headImgHover"></div>
            </div><!-- container -->
        </div> <!-- gukbap-select -->

        <div class="gukbap-select" id="gukbap-select">
            <div class="container">
                <div class="gukbapImg" id ="seedImg" onclick="gukbapSelectClick('seed');">
                    <div class="gukbapTipText" id="gukbapTipTextSeed">
                        <div id="border-left"></div>
                        <h3>고소한 참기름향</h3>
                        <h1>콩나물국밥</h1>
                    </div>
                </div><!-- gukbapImg -->
                <div class="imgHoverBG" id="seedImgHover"></div>
            </div><!-- container -->
        </div> <!-- gukbap-select -->

        <div class="gukbap-introduce" id="sdk-introduce">
            <div class="contents-container">
                <div class="sdk-title">
                    <h1 class="introduce-title">순대는 몽골리안<br>순대국은 코리안</h1>
                    <div class="bar"></div>
                    <p class="para">순대는 동물의 내장에 선지, 부속고기, 곡물, 채소 등을 넣어서 쪄낸 음식입니다.
                            순대의 기원에 대해서는 여러 가지 설(說) 중, 가장 신빙성 있는 것은 몽골 유래설입니다.
                            몽골의 칭기즈칸이 돼지의 창자에다 쌀과 채소를 혼합해 말리거나 얼려 전쟁터의
                            전시음식으로 먹었다는 것이 시초로 알려집니다.</p>
                    <p class="para">순대국밥은 한반도의 탕반(湯飯)문화에서 비롯된 우리 고유의 음식이라는 것이 정설입니다.
                            순댓국에 대한 정확한 문헌은 없으나, 일제강점기 이후 유행한 음식으로 짐작됩니다. </p>
                </div><!-- sdk-title -->
                <div id="sdk-sky">
                    <img id="moon" src="images/sdk_introduce_3.png" alt="" data-parallax='{"y":1 ,"from-scroll": 28, "distance":10,"smoothness":5}'>
                    <img id="star1" src="images/sdk_introduce_10.png" alt=""data-parallax='{"y":-1.5 ,"from-scroll": 28, "distance":10,"smoothness":5}'>
                    <img id="star2" src="images/sdk_introduce_9.png" alt=""data-parallax='{"y":2 ,"from-scroll": 28, "distance":10,"smoothness":5}'>
                    <img id="star3" src="images/sdk_introduce_8.png" alt=""data-parallax='{"y":1.6 ,"from-scroll": 28, "distance":10,"smoothness":5}'>
                    <img id="star4" src="images/sdk_introduce_7.png" alt=""data-parallax='{"y":-2 ,"from-scroll": 28, "distance":10,"smoothness":0}'>
                    <!-- <img id="star5" src="images/sdk_introduce_6.png" alt=""data-parallax='{"y":-150 ,"from-scroll": 4300, "distance":700,"smoothness":5}'> -->
                    <img id="star6" src="images/sdk_introduce_11.png" alt=""data-parallax='{"y":-10 ,"from-scroll": 28, "distance":10,"smoothness":5}'>
                </div><!-- sdk-sky -->
                <div id="sdk-greenGround" data-parallax='{"y":0, "from-scroll": 28, "distance":10,"smoothness":0}'></div>
                <div id="sdk-horse1" data-parallax='{"y":-1, "from-scroll": 28, "distance":10,"smoothness":0}'></div>
                <div id="sdk-horse2" data-parallax='{"x":-350, "from-scroll": 26, "distance":10,"smoothness":5}'></div>
                <div id="sdk-yellowGround" data-parallax='{"y":-1, "from-scroll": 26, "distance":10, "smoothness":5}'></div>
                <div id="sdk-house" data-parallax='{"y":-1, "from-scroll": 28.3, "distance":5, "smoothness":5}'></div>
            </div><!-- container -->
        </div><!-- gukbap-introduce -->

        <div class="gukbap-introduce" id="pig-introduce">
            <div class="contents-container">
                <div id="pig-map">
                    <img src="images/pig_introduce_1_before.png" alt="">
                    <img src="images/pig_introduce_1.png" alt="" data-parallax='{"from-scroll":36, "distance":5, "smoothness":5, "op":0, "op-scr":10, "op-sp":4}'>
                    <img src="images/pig_introduce_2.png" alt="" data-parallax='{"y":0, "from-scroll":35, "distance":10, "smoothness":5, "op":0, "op-scr":10, "op-sp":4}'>
                    <img src="images/pig_introduce_3.png" alt="" data-parallax='{"y":0, "from-scroll":35, "distance":10, "smoothness":5, "op":0, "op-scr":10, "op-sp":4}'>
                </div>
                <div class="pig-titleBox">
                    <h1 class="introduce-title" id="pig-title">서민의 애환이 담긴<br>돼지국밥</h1>
                    <div class="bar" id="pig-bar"></div>
                    <p class="para" id="pig-para">국밥은 '국에 만 밥이나 국수 또는 미리 국에 밥을 말아 끓인 음식'입니다.
                                    조선시대 이전부터 먹어 왔던 국밥의 조리법은 사골을
                                    맹물에 끓여 먹었던 설농탕(설렁탕)에서 국밥이 유래되었습니다.</p>
                    <p class="para" id="pig-para">돼지국밥은 1950년 한국전쟁 당시 경상도 지방으로 피난 온 피난민들이
                                    먹을 것이 부족하자 미군부대에서 나오는 돼지뼈를 이용해 설렁탕을
                                    만들어 먹은 데서 유래되었다고 합니다.</p>
                </div><!-- pig-titleBox -->
                <div id="pig-bottom"></div>
            </div><!-- contents-container -->
        </div><!-- gukbap-introduce -->

        <div class="gukbap-introduce" id="head-introduce">
            <div class="contents-container">
                <div class="head-titleBox">
                    <h1 class="introduce-title" id="head-title">값비싼 소의 가장 싼 부위<br>소머리 국밥</h1>
                    <div class="bar"></div><br>
                    <p class="para" id="head-para">농경 사회에서 가장 중요한 가축이었던 소는 조선 시대엔 무단으로 도축하면
                                중형에 처할 정도로 중요한 자원 취급했습니다. 그러므로 한 번 소를 잡게 되면
                                우육 외에도 내장과 각종 부산물을 하나도 버리는 것 없이 이것저것 응용했죠.</p><br>
                    <p class="para" id="head-para">그중에서도 소꼬리, 도가니, 머리뼈 등 처치 곤란한 부위들 중 소머리뼈를 가져다
                                무쇠 가마솥에 고아서 푹 끓인 후 밥을 말아 낸 요리가 소머리국밥입니다.</p>
                </div><!-- pig-titleBox -->
                <div id="head-interaction">
                    <div id="light">
                        <img id="head" src="images/head_introduce_0.png" alt="">
                        <img id="light1" src="images/head_introduce_1.png" alt="">
                        <img id="light2" src="images/head_introduce_2.png" alt="">
                        <img id="light3" src="images/head_introduce_3.png" alt="">
                        <img id="light4" src="images/head_introduce_4.png" alt="">
                    </div>
                    <div id="leftMoney">
                        <img src="images/head_introduce_money_left_1.png" alt="" data-parallax='{"y":-30, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_left_2.png" alt="" data-parallax='{"y":-50, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_left_3.png" alt="" data-parallax='{"y":-150, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_left_4.png" alt="" data-parallax='{"y":-400, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_left_5.png" alt="" data-parallax='{"y":-200, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                    </div>
                    <div id="rightMoney">
                        <img src="images/head_introduce_money_right_1.png" alt="" data-parallax='{"y":-60, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_right_5.png" alt="" data-parallax='{"y":-300, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_right_3.png" alt="" data-parallax='{"y":-40, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_right_4.png" alt="" data-parallax='{"y":-120, "from-scroll": 42.5, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_right_2.png" alt="" data-parallax='{"y":-250, "from-scroll": 43, "distance":1000, "smoothness":5}'>
                        <img src="images/head_introduce_money_blur_0.png" alt="" data-parallax='{"y":-1200, "from-scroll": 41, "distance":1200, "smoothness":10}'>
                    </div>
                </div>
            </div><!-- contents-container -->
        </div><!-- gukbap-introduce -->

        <div class="gukbap-introduce" id="seed-introduce">
            <div class="contents-container">
                <div class="seed-titleBox">
                    <h1 class="introduce-title" id="seed-title">아삭한 식감이<br>매력적인<br>콩나물국밥</h1>
                    <div class="bar"></div><br>
                    <p class="para" id="seed-para">콩나물의 역사를 보면 고려시대와 조선시대 나물로 무쳐먹었다는 정도의 기록만 있습니다.
                                그 이후 1910년부터 나타난 조리법이 바로 전주의 '콩나물국밥'입니다.
                                즉 콩나물국밥은 전주에서 유래되었다는 것을 의미하며 지금도 이곳 전주에서는
                                수십년간 영업을 해온 전국적으로 유명한 콩나물국밥집이 많습니다.</p>
                    <p class="para" id="seed-para">콩나물은 독성이 없고 위장 장애를 풀어주며 아스파라긴산이 함유되어 있어
                                알콜 분해해 특히 효과가 있는데요. 그래서 콩나물을 주재료로 숙취해소를
                                돕는 음식을 만들어 먹었습니다. 콩나물은 구하기 쉽고 가격도 저렴해서 부담없어
                                누구나 요리할 수 있는 식재료여서 더욱 즐겨먹게 되었나봅니다.</p>
                </div><!-- seed titleBox -->
                <div id="seed-bottomImg">
                    <img src="images/seed_introduce_1.png" alt="" data-parallax='{"y":-2, "scale" : 2,"from-scroll": 50.5, "distance":3, "smoothness":5}'>
                </div>
                <!-- <div id="seed-bottom" data-parallax='{"y":-1, "from-scroll": 53, "distance":10, "smoothness":5}'></div> -->
                <div id="sketchYellowGround-container">
                        <div id="sketchYellowGroundSeed"> </div>
                </div>
            </div><!-- contents-container -->
        </div><!-- gukbap-introduce -->
    </section><!-- introduce section -->

    <section id="make-gukbap">
        <div class="gukbap-make" id="sagol">
            <div class="contents-container">
                    <div class="gukbapBar" id="gukbapMakeBar" data-parallax='{"y":34, "from-scroll": 59.5, "distance":34, "smoothness":0}'>
                            <div class="verticalLine" id="gukbapMakeVerticalLine"></div>
                            <ul>
                                <li id="nav1">사골우리기</li>
                                <li id="nav2">재료 넣기</li>
                                <li id="nav3">양념 추가</li>
                                <li id="nav4">국밥 완성</li>
                            </ul>
                        </div>
                <h1 id="sagolTitle">깊은 맛을 낼 수 있도록<br>사골을 잘 담궈주세요!!</h1>
                <div id="gukbapMakePlate">
                    <img id="plate" src="images/make_0.png" alt="">
                    <img id="fire" src="images/make_1.png" alt="">
                    <img id="plateCover" src="images/make_2.png" alt="" >
                    <img id="bone1" src="images/make_3.png" alt="" data-parallax='{"y":1.5, "rotateZ":-30,"from-scroll": 54, "distance":10, "smoothness":5}'>
                    <img id="bone2" src="images/make_3.png" alt="" data-parallax='{"y":1.5, "rotateZ":40,"from-scroll": 54, "distance":10, "smoothness":5}'>
                </div>
                <div class="gukbap-make-ground"></div>
            </div><!-- contents-container -->
        </div><!-- gukbap-make -->
        
        <div class="gukbap-introduce" id="why-introduce">
            <div class="contents-container">
                <div class="why-titleBox">
                    <h1 class="introduce-title" id="why-title">국밥은 어쩌다<br>가성비 음식이 되었을까요?</h1>
                    <div class="bar"></div><br>
                    <p class="para" id="why-para">돼지국밥은 서민들의 쓰린 속을 시원하게 풀어주는 해장 음식으로 속을 든든하게 하는
                        한 끼 식사인 서민음식으로 자리 잡았습니다. 돼지뼈와 내장, 수육 등을 이용해 깊고 진한 맛을
                         가지며 쇠고기보다 돼지고기의 소비가 많아 돼지고기의 수급이 원활하고 고기를 먹고 난
                         부산물인 뼈를 사용하여 가격이 저렴합니다. 또한 칼슘, 단백질 등 영양소가 많이 함유되어
                         영양 면에서도 우수해 오늘날 가성비 음식으로 자리메김 하게 되었다고 합니다.</p>
                </div><!-- pig-titleBox -->
            </div><!-- contents-container -->
        </div><!-- gukbap-introduce -->

        <div class="gukbap-make">
            <div class="contents-container" id="material">
                <img id="materialPig1" src="images/material_pig_0.png" alt="" data-parallax='{"y":1.5, "rotateZ":-10, "from-scroll": 64, "distance":13, "smoothness":10}'>
                <img id="materialPig2" src="images/material_pig_1.png" alt="" data-parallax='{"y":1.3, "rotateZ":-40,"from-scroll": 65, "distance":13, "smoothness":20}'>
                <img id="materialPig3" src="images/material_pig_2.png" alt="" data-parallax='{"y":1.1, "rotateZ":30,"from-scroll": 65.5, "distance":13, "smoothness":15}'>
                <img id="materialPig4" src="images/material_pig_3.png" alt="" data-parallax='{"y":1, "rotateZ":-10,"from-scroll": 66, "distance":13, "smoothness":20}'>

                <img id="materialOnion1" src="images/material_0.png" alt=""data-parallax='{"y":1.8, "rotateZ":30,"from-scroll": 67, "distance":13, "smoothness":10}'>
                <img id="materialOnion2" src="images/material_1.png" alt=""data-parallax='{"y":1.6, "rotateZ":-20,"from-scroll": 68, "distance":13, "smoothness":10}'>
                <img id="materialOnion3" src="images/material_2.png" alt=""data-parallax='{"y":1.3, "rotateZ":15,"from-scroll": 68.5, "distance":13, "smoothness":5}'>
                <img id="materialOnion4" src="images/material_3.png" alt=""data-parallax='{"y":1, "rotateZ":-10,"from-scroll": 69, "distance":13, "smoothness":10}'>
                <img id="materialOnion5" src="images/material_4.png" alt=""data-parallax='{"y":1, "rotateZ":20,"from-scroll": 69.5, "distance":13, "smoothness":20}'>
            </div><!-- contents-container -->
        </div><!-- gukbap-make -->

        <div class="gukbap-introduce" id="why-introduce">
            <div class="contents-container">
                    <div id="makeResult" data-parallax='{"y":-1,"from-scroll": 74, "distance":3, "smoothness":10, "op":0, "op-scr":3, "op-sp":1}'></div>
                <div class="plate-titleBox">
                    <h1 class="introduce-title" id="plate-title">국밥에 <span class="green">뚝배기</span>를 사용하는 이유!</h1>
                    <div class="bar"></div><br>
                    <p class="para" id="plate-para">돼빨리 끓고 빨리 식는 금속으로 만든 냄비와는 달리 열 전도율이 낮은 재질 특성과 열에 버텨야 하는 그릇의 목적상
                        두께가 금속제 그릇보다 상당히 두꺼운데, 이러한 특징이 합쳐져 끓는 속도가 느리지만 식는 속도도 역시 느립니다.
                        이러한 뚝배기의 특성 때문에 오랫동안 뜨끈-하고 든든-하게 먹을 수 있도록 국밥과 천생연분 이랍니다!</p>
                </div><!-- pig-titleBox -->
            </div><!-- contents-container -->
        </div><!-- gukbap-introduce -->

        <div class="gukbap-make">
        
            <div class="contents-container" id="seasoningContainer">
            
                <div class="seasoning-titleBox">
                    <h1>기호에 맞도록 <span class="yellow">양념</span>을 <span class="yellow">추가</span>해주세요!</h1>
                    <ul>
                        <li onclick="window.location.href='index.php'">다시만들기</li>
                        <li id="shirimp" onclick="addSause('shirimp')">새우젓</li>
                        <li id="sause" onclick="addSause('sause')">다대기</li>
                        <li id="pepper" onclick="addSause('pepper')">후추</li>
                        <li id="egg" onclick="addSause('egg')">달걀</li>
                    </ul>
                </div>
                
                <div id="seasoning-plate" data-parallax='{"y":9,"rotateZ":360, "x":500, "scale":1.2,"from-scroll": 89, "distance":3, "smoothness":10}'>
                
                    <img id="resultGukbap" src="images/material_pig_5.png" alt="">
                    <img id="resultShadow" src="images/result_shadow.png" alt="">
                </div>
            </div><!-- contents-container -->
        </div><!-- gukbap-make -->
        <div id="sketchYellowGround-container">
                <div id="sketchYellowGround"> </div>
        </div>
        <div class="gukbap-make" id="complete">
            <div class="contents-container">
                <div class="complete-titleBox">
                    <h1>뜨뜻-하고 든든-한<br><span id="gukbapName">돼지국밥</span> 대령이요!</h1>
                    <div class="resultScore">
                        <ul class="titleScore">
                            <li>짠맛</li>
                            <li>매운맛</li>
                            <li>MSG</li>
                            <li>고소함</li>
                            <li>총점</li>
                        </ul>
                        <ul class="rateScore">
                            <li><div id="salted"></div><br></li>
                            <li><div id="hot"></div></li>
                            <li><div id="msg"></div></li>
                            <li><div id="egged"></div></li>
                            <li><div id="resultRate"></div></li>
                        </ul>
                        <p id="scoreText-container" >
                        <span id="scoreText">50점</span><br>
                        <form name="comment_form" id="jjikkyu" action="" method="post">
                            
                            <h2 id="scroeTitle">국밥 점수를 등록해보세요!</h2><br>                            
                            <input type="hidden" name="kind" id="kind" value="돼지국밥">
                                <input type="hidden" name="score" id="score" value="">
                                <input type="text" name="name" id="name" value="이름을 입력해주세요." onclick="this.value=''">
                                <span id="submit" onclick="formSubmit()">순위등록</span>
                            
                                <span id="ranking" onclick="list()">순위 업데이트</span>
                                </form>
                                
                        </p>
                        <div id="comment_container">
                            
                        </div>
                    </div>
                    
                </div>
                
                <!-- <div class="completeGroundTop"></div> -->
            </div><!-- contents-container -->
        </div><!-- gukbap-make -->
        <!-- 
        <div class="gukbap-make" id="completeMask">
            <img src="images/gukbap-complete_1.png" alt="">
                <div class="completeGroundBottom2"></div>
        </div>
    -->
        
        <!-- 

        <div class="gukbap-make" id="ending">
            <div class="contents-container">
                <div class="ending-titleBox">
                    <h1>국밥 하나만 기억해주세요.<br>
                        진심을 다해 전합니다.</h1>
                    <div class="bar"></div>
                    <p class="para">여러분들이 직접 만든 국밥을 친구에게 카카오톡으로 전달해보세요!<br>
                        오늘은 친구와 함께 뜨끈-하고 든든-한 국밥 어떠신가요?</p>
                </div>
                <div class="share">
                    <div id="myGukbap">

                    </div>
                    <div id="shareTitle">
                        <span id="productBottom">에어팟 프로</span> 살 돈이면<br>
                        뜨끈-하고 든든-한<br>
                        <span id="bowlBottom">국밥 55그릇</span><br>
                        먹고말지
                    </div>
                    <div class="myGukbapBar"></div>
                    <div id="shareBtn">
                        <h3>카카오톡으로 공유하기</h3>
                    </div>
                </div>
            </div>
        </div>
    -->

    </section><!-- make-gukbap -->
    <section id="sketch">
            
        </section>
    <!-- footer -->
    <footer>
            <div id="sketch-container" data-parallax='{"y":-1.4,"from-scroll": 97, "distance":3, "smoothness":20}'>
                    <div id="my-sketch"> </div>
            </div>
        <div class="contents-container" id ="footer-container">
            <div id="top" data-parallax='{"y":-1,"from-scroll": 93, "distance":6, "smoothness":20}'>
                <span><a href="#header" >Top</a></span>
            </div>
            <div class="name">
                <div class="icon"></div>
                <div class="footerName">
                        <h1 class="Kr">국밥 계산기</h1>
                        <h3 class="Eng">Gukbap Calculator</h3>
                </div><!-- footerName -->
            </div><!-- name -->


            <div class="copyright">
                <span>Copyrightⓒ. 2019. JJIKKYU. All Rights Reserved</span><br>
                <span>HongikUniv. Digital Media Design. JJIKKYU</span><br>
                <span>jjikkyu.com/gukbapCalc</span>
            </div><!-- copyright -->
        </div><!-- contents-container -->
    </footer><!-- footer -->
    
</body>
<script src="js/jquery.parallax-scroll.js"></script>
<script src="js/script.js"></script>
<script src="js/p5.js"></script>
<script src="js/sketch.js"></script>
<script type="text/javascript">
        
    function formSubmit() {
        var params = jQuery("#jjikkyu").serialize();
        jQuery.ajax({
            url: 'jjikkyu_comment_process.php',
            type: 'POST',
            data: params,
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            dataType: 'html',
            success: function(data) {
            //   document.getElementById('description_form').innerHTML='';
            //   document.getElementById('description_form').value = '';
            list();
            console.log("submit complete!");
    }})};

    function list() {
        $.ajax({
    	type: 'post',
  	    url: 'list.php?start=0',
  		dataType: 'html',
  		success: function(data) {
  			$("#comment_container").html(data);
  		}
  	});
  }
  

  list();
</script>
<!-- <script src="js/sketch_yellowGround.js"></script> -->


<svg>
        <clipPath id="wave" clipPathUnits="objectBoundingBox">
                <path class="st0" d="M0.08,0C0.08,0.08,0,0.14,0,0.26S0.1,0.4,0.1,0.52S0,0.65,0,0.77S0.08,0.9,0.08,1h1.87V0H0.08z"/>
        </clipPath>
        <clipPath id="waveHover" clipPathUnits="objectBoundingBox">
                <path class="st0" d="M0.08,0C0.08,0.12,0,0.22,0,0.38s0.1,0.21,0.1,0.39S0,0.98,0,1.16S0.08,1.34,0.08,1.5h1.87V0H0.08z"/>
        </clipPath>
</svg>
    
</html>