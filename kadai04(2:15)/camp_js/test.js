// alert(1111);

// console.log('はじめてのジャバスクリプト');

// console.log(23+5);
// console.log(2000-1800);
// console.log('18+5');

// var name="邊見麻子";
// console.log('自分の名前を表示');
// console.log(name);

// var point=90;

// if(point >=80){
//     console.log('素晴らしい！おめでとう！');
// }else{
//     console.log('もっと頑張りましょう');
// }

// // これは0から４までの５パターン乱数
// var math= Math.floor( Math.random() *5);
// console.log(math);

// if(math==1){
//     console.log('a');
// }else if(math==2){
//     console.log('b');
// }else if(math==3){
//     console.log('c');
// }else if(math==4){
//     console.log('d');
// }else{
//     console.log('e');
//     // これは０の時
// }

// $(document).ready(function(){
//     $("#test").on("click",function(){
// // $('#test').html('ああああ');
// // $('#test').css('color','#f00');


// $('#test').fadeOut(2000);
// $('#test').fadeIn(2000);
// });
// });

$(document).ready(function(){
    $('#hide').on("click",function(){
    $('#hide').fadeOut(2000);
});
});

$(document).ready(function(){
    $('#hide').on("click",function(){
    $('#hide').fadeOut(2000);
    });
});

$(document).ready(function(){
    var box=0;
    $('#show').on("click",function(){
        box++;
        // box = box +1 のこと
        console.log(box);
        $('#test').html(box);
        $('#test').css('border',box + "px solid pink");
    });
});







