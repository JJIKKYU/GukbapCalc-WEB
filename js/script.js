resizable(document.getElementById('product'),44);
resizable(document.getElementById('price'),28);
calculator();

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

$(window).on('scroll', function(){
    var s = $(window).scrollTop(),
        d = $(document).height(),
        c = $(window).height();
  
    var scrollPercent = (s / (d - c)) * 100;
    
    console.clear();
    console.log(scrollPercent);
  })

window.addEventListener('scroll', function SelectGukbap() {
    
    var sdk = document.getElementById('navSDK');
    var pig = document.getElementById('navPIG');
    var head = document.getElementById('navHEAD');
    var seed = document.getElementById('navSEED');
    var gukbapBar = document.getElementById("gukbapBar");

    var scrollYPos = 0;
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
    // console.log(scrollYPos);
    console.log(scrollYPosNomarlize);
    // console.log(GukbapSelect);

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

function sdkIntroduceAnimation(scrollYPos) {
    var light1 = document.getElementById("light1");
    var light2 = document.getElementById("light2");
    var light3 = document.getElementById("light3");
    var light4 = document.getElementById("light4");

    if (scrollYPos >= 6400 && scrollYPos < 7400) {
        light1.style.opacity = 1;
        light2.style.opacity = 1;
        light3.style.opacity = 1;
        light4.style.opacity = 1;
    }
    else if (scrollYPos >= 7400){
        light1.style.opacity = 0;
        light2.style.opacity = 0;
        light3.style.opacity = 0;
        light4.style.opacity = 1;
    }
    else {
        light1.style.opacity = 0;
        light2.style.opacity = 0;
        light3.style.opacity = 0;
        light4.style.opacity = 0;
    }
}