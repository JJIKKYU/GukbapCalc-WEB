resizable(document.getElementById('product'),44);
resizable(document.getElementById('price'),28);
calculator();
headColorChange();
fireColorChange();

function calculator() {
    var sdk = 6000;
    var productBottom = document.getElementById("productBottom");
    var bowlBottom = document.getElementById("bowlBottom");
    var productTop = document.getElementById("product");

    var priceObj = document.getElementById('price');
    priceObj.addEventListener("keyup", calc);

    function calc(){
        var inputPrice = priceObj.value;
        var result = parseInt(inputPrice / sdk);
        if (result <= 0){
            document.getElementById('bowl').innerHTML = "안";
        }
        else{
            bowlBottom.innerHTML = "국밥" + result + "그릇";
            productBottom.innerHTML = productTop.value;
            document.getElementById('bowl').innerHTML = result + "그릇";
        }
        
    }
}

// 텍스트필드 자동으로 조절해주는 함수
function resizable (el, factor) {
    var int = Number(factor) || 7.7;

    el.style.width = 100 + 'px';

    function resize() {el.style.width = ((el.value.length+1) * int) + 'px'}
    var e = 'keyup,keypress,focus,blur,change'.split(',');
    for (var i in e) el.addEventListener(e[i],resize,false);
    resize();
}

var GukbapSelect;
var Gukbap = {
    sdk : 1,
    pig : 2,
    head : 3,
    seed : 4,
    properties : {
        1 : {name : "sdk", value : 1},
        2 : {name : "pig", value : 2},
        3 : {name : "head", value : 3},
        4 : {name : "seed", value : 4}
    }
}

var scrollPercent;

$(window).on('scroll', function(){
    var s = $(window).scrollTop(),
        d = $(document).height(),
        c = $(window).height();
  
    scrollPercent = (s / (d - c)) * 100;
    
    console.clear();
    console.log(scrollPercent);
  })

var scrollYPos = 0;
var changes = false;
window.addEventListener('scroll', function SelectGukbap() {
    // 첫번째 Bar
    var sdk = document.getElementById('navSDK');
    var pig = document.getElementById('navPIG');
    var head = document.getElementById('navHEAD');
    var seed = document.getElementById('navSEED');
    var gukbapBar = document.getElementById("gukbapBar");

    scrollYPos = 0;
    var scrollYPosNomarlize = 0;

    scrollYPos = Math.round(window.scrollY);
    scrollYPosNomarlize = window.scrollY;

    

    if (scrollYPos > 95 && scrollYPos < 1450)
    {
        // 나머지 리스트 컬러 초기화
        pig.style.backgroundColor = "#FFFFFF";
        pig.style.color = "#747474";
        head.style.backgroundColor = "#FFFFFF";
        head.style.color = "#747474";
        seed.style.backgroundColor = "#FFFFFF";
        seed.style.color = "#747474";

        // 순대국밥 선택관련
        console.log("순대국밥 선택");
        sdk.style.backgroundColor = "#FFC854";
        sdk.style.color = "#FFFFFF";
        GukbapSelect = Gukbap.sdk;
    }
    else if (scrollYPos > 1450 && scrollYPos < 2350)
    {
        // 나머지 리스트 컬러 초기화
        sdk.style.backgroundColor = "#FFFFFF";
        sdk.style.color = "#747474";
        head.style.backgroundColor = "#FFFFFF";
        head.style.color = "#747474";
        seed.style.backgroundColor = "#FFFFFF";
        seed.style.color = "#747474";

        console.log("돼지국밥 선택");
        pig.style.backgroundColor = "#FFC854";
        pig.style.color = "#FFFFFF";
        GukbapSelect = Gukbap.pig;
    }
    else if (scrollYPos > 2350 && scrollYPos < 3250)
    {
        // 나머지 리스트 컬러 초기화
        sdk.style.backgroundColor = "#FFFFFF";
        sdk.style.color = "#747474";
        pig.style.backgroundColor = "#FFFFFF";
        pig.style.color = "#747474";
        seed.style.backgroundColor = "#FFFFFF";
        seed.style.color = "#747474";

        console.log("소머리국밥 선택");
        head.style.backgroundColor = "#FFC854";
        head.style.color = "#FFFFFF";
        GukbapSelect = Gukbap.head;
    }
    else if (scrollYPos > 3250 && scrollYPos < 4250)
    {
        // 나머지 리스트 컬러 초기화
        sdk.style.backgroundColor = "#FFFFFF";
        sdk.style.color = "#747474";
        pig.style.backgroundColor = "#FFFFFF";
        pig.style.color = "#747474";
        head.style.backgroundColor = "#FFFFFF";
        head.style.color = "#747474";

        console.log("콩나물국밥 선택");
        seed.style.backgroundColor = "#FFC854";
        seed.style.color = "#FFFFFF";
        GukbapSelect = Gukbap.seed;
    }

    // 두번째 Bar
    var nav1 = document.getElementById("nav1");
    var nav2 = document.getElementById("nav2");
    var nav3 = document.getElementById("nav3");
    var nav4 = document.getElementById("nav4");
    var verticalLine = document.getElementById("gukbapMakeVerticalLine");
    var gukbapMakeBar = document.getElementById("gukbapMakeBar");
    var shadow = document.getElementById("resultShadow");
    var resultFrom = document.getElementById("seasoning-plate");
    var resultTo = document.getElementById("myGukbap");
    var resultBack = document.getElementById("seasoningContainer");

    if (scrollYPos > 7800 && scrollYPos < 9000){
        // 나머지 리스트 컬러 초기화
        verticalLine.style.border = "1px solid white";
        nav2.style.backgroundColor = "#FFFFFF";
        nav2.style.color = "#747474";
        nav3.style.backgroundColor = "#FFFFFF";
        nav3.style.color = "#747474";
        nav4.style.backgroundColor = "#FFFFFF";
        nav4.style.color = "#747474";

        console.log("사골우리기 단계");
        nav1.style.backgroundColor = "#00AD5D";
        nav1.style.color = "#FFFFFF";
    }
    else if(scrollYPos >= 9000 && scrollYPos < 11000) {
        // 나머지 리스트 컬러 초기화
        verticalLine.style.border = "1px solid #999999";
        nav1.style.backgroundColor = "#FFFFFF";
        nav1.style.color = "#747474";
        nav3.style.backgroundColor = "#FFFFFF";
        nav3.style.color = "#747474";
        nav4.style.backgroundColor = "#FFFFFF";
        nav4.style.color = "#747474";

        console.log("사골우리기 단계");
        nav2.style.backgroundColor = "#00AD5D";
        nav2.style.color = "#FFFFFF";
    }
    else if(scrollYPos >= 11000 && scrollYPos < 12500) {
        // 나머지 리스트 컬러 초기화
        verticalLine.style.border = "1px solid #999999";
        nav1.style.backgroundColor = "#FFFFFF";
        nav1.style.color = "#747474";
        nav2.style.backgroundColor = "#FFFFFF";
        nav2.style.color = "#747474";
        nav4.style.backgroundColor = "#FFFFFF";
        nav4.style.color = "#747474";

        console.log("사골우리기 단계");
        nav3.style.backgroundColor = "#00AD5D";
        nav3.style.color = "#FFFFFF";
    }
    else if(scrollYPos >= 12500 && scrollYPos < 13000) {
        // 나머지 리스트 컬러 초기화
        verticalLine.style.border = "1px solid white";
        nav1.style.backgroundColor = "#FFFFFF";
        nav1.style.color = "#747474";
        nav2.style.backgroundColor = "#FFFFFF";
        nav2.style.color = "#747474";
        nav3.style.backgroundColor = "#FFFFFF";
        nav3.style.color = "#747474";

        console.log("사골우리기 단계");
        nav4.style.backgroundColor = "#00AD5D";
        nav4.style.color = "#FFFFFF";
    } else if (scrollYPos >= 13000) {
        gukbapMakeBar.style.opacity = 0;
        shadow.style.opacity = 1;
    }

    if (scrollYPos < 13000)
    {
        shadow.style.opacity = 0;
    }

    if (scrollYPos > 11300 && !changes) {
        var gukbap = document.getElementById("seasoning-plate");
        gukbap.style.animation = "Gukbap 1s";
        changes = true;
    }

    console.log(scrollYPosNomarlize);

    sdkIntroduceAnimation(scrollYPos);
});

function gukbapSelectClick(inputGukbap) {
    var gukbapName = document.getElementById("gukbapName");

    console.log(inputGukbap)
    if ("sdk" == inputGukbap) {
        GukbapSelect = Gukbap.sdk;
        gukbapName.innerHTML = "순대국밥";
        console.log("순대국밥 선택완료");
        location.href = "#sdk-introduce";
    }
    else if ("pig" == inputGukbap) {
        GukbapSelect = Gukbap.pig;
        gukbapName.innerHTML = "돼지국밥";
        console.log("돼지국밥 선택완료");
        location.href = "#pig-introduce";
    }
    else if ("head" == inputGukbap) {
        GukbapSelect = Gukbap.head;
        gukbapName.innerHTML = "소머리국밥";
        console.log("소머리국밥 선택완료");
        location.href = "#head-introduce";
    }
    else {
        GukbapSelect = Gukbap.seed;
        gukbapName.innerHTML = "콩나물국밥";
        console.log("콩나물국밥 선택완료")
        location.href = "#seed-introduce";
    }
    console.log("현재 GukbapSelect = " + GukbapSelect);
}

// 소머리 인터랙션
function headColorChange() {
    var change = true;

setInterval(function() {
    var head = document.getElementById("head");
    var light1 = document.getElementById("light1");
    var light2 = document.getElementById("light2");
    var light3 = document.getElementById("light3");
    var light4 = document.getElementById("light4");

    if (change && scrollYPos >= 6000 && scrollYPos < 7000) {
        head.src = "images/head_introduce_0_changer.png"
        light1.style.opacity = 0;
        light2.style.opacity = 0;
        light3.style.opacity = 0;
        light4.style.opacity = 0;
        change = false;
    }
    else if (change == false && scrollYPos >= 6000 && scrollYPos < 7000){
        head.src = "images/head_introduce_0.png"
        light1.style.opacity = 1;
        light2.style.opacity = 1;
        light3.style.opacity = 1;
        light4.style.opacity = 1;
        change = true;
    }
}, 1000);
}

// 사골 끓이기 인터랙션
function fireColorChange() {
    var change = true;

setInterval(function() {
    var fire = document.getElementById("fire");

    if (change && scrollYPos >= 7500 && scrollYPos < 9500) {
        fire.src = "images/make_1_after.png"
        change = false;
    }
    else if (change == false && scrollYPos >= 7500 && scrollYPos < 9500){
        fire.src = "images/make_1.png"
        change = true;
    }
}, 1500);
}


function sdkIntroduceAnimation(scrollYPos) {
    var map = document.getElementById("pig-map");
    map.style.backgroundImage = "../images/pig_introduce_1.png";
    // 돼지국밥 소개
    if (scrollYPos > 4800) {
        // map.style.backgroundImage = "url('images/pig_introduce_1.png')";
    }
    else {
        // map.style.backgroundImage = "url('images/pig_introduce_1_before.png')";
    }


    // 소머리국밥
    var light1 = document.getElementById("light1");
    var light2 = document.getElementById("light2");
    var light3 = document.getElementById("light3");
    var light4 = document.getElementById("light4");

    if (scrollYPos >= 7000){
        light1.style.opacity = 0;
        light2.style.opacity = 0;
        light3.style.opacity = 0;
        light4.style.opacity = 1;    
    }
}
