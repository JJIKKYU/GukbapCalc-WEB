resizable(document.getElementById('product'),44);
resizable(document.getElementById('price'),28);
calculator();

function calculator() {
    var sdk = 6000;
    var priceObj = document.getElementById('price');
    priceObj.addEventListener("keyup", calc);

    function calc(){
        console.log("IN");
        var inputPrice = priceObj.value;
        var result = parseInt(inputPrice / sdk);
        if (result <= 0){
            document.getElementById('bowl').innerHTML = "안";
        }
        else{
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

window.addEventListener('scroll', function SelectGukbap() {
    var sdk = document.getElementById('navSDK');
    var pig = document.getElementById('navPIG');
    var head = document.getElementById('navHEAD');
    var seed = document.getElementById('navSEED');

    var scrollYPos = 0;

    scrollYPos = Math.round(window.scrollY);
    if (scrollYPos > 375 && scrollYPos < 935) {
        console.log("너 순대꾹밥");
        sdk.style.backgroundColor = "#FFC854";
        sdk.style.color = "white";
        GukbapSelect = Gukbap.sdk;
    }
    console.log(scrollYPos);
    console.log(GukbapSelect);
});


function gukbapSelectClick(inputGukbap) {
    console.log(inputGukbap)
    if ("sdk" == inputGukbap) {
        GukbapSelect = Gukbap.sdk;
        console.log("순대국밥 선택완료");
    }
    else if ("pig" == inputGukbap) {
        GukbapSelect = Gukbap.pig;
        console.log("돼지국밥 선택완료");
    }
    else if ("head" == inputGukbap) {
        GukbapSelect = Gukbap.head;
        console.log("소머리국밥 선택완료");
    }
    else {
        GukbapSelect = Gukbap.seed;
        console.log("콩나물국밥 선택완료")
    }
    console.log("현재 GukbapSelect = " + GukbapSelect);
}
