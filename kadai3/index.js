// チェック
// alert(1111);

$(document).ready(function(){
$('#photo1').fadeIn(2000);
$('#photo2').fadeIn(4000);
$('#photo3').fadeIn(6000);
});

$(function () {
    $("form :input").focus(function() {
        $("label[for='" + this.id + "']").addClass("labelfocus");
    });
    
    $("form :input").blur(function() {
        $("label[for='" + this.id + "']").removeClass("labelfocus");
    });
});

$(function(){
    $("#name").focus(function(){
      if(this.value == "作品名を入力"){
        this.val("").css("color","#f39");
      }
    });
    $("#name").blur(function(){
      if(this.value == ""){
        $(this).val("作品名を入力").css("color","#969696");
      }
    });
    $("#actor").focus(function(){
        if(this.value == "主演を入力"){
          this.val("").css("color","#f39");
        }
      });
      $("#actor").blur(function(){
        if(this.value == ""){
          $(this).val("主演を入力").css("color","#969696");
        }
      });
      $("#director").focus(function(){
        if(this.value == "監督を入力"){
          this.val("").css("color","#f39");
        }
      });
      $("#director").blur(function(){
        if(this.value == ""){
          $(this).val("監督を入力").css("color","#969696");
        }
      });
  });


  $(document).ready(function(){
        $("#submit").on("click",function(){
            alert("登録しました")
        });
    });
