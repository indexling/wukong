
$(function(){
  $(document).ready(function() {
    //初始化选中
    $('.lp_joblist table').each(function(){
      if($(this).attr('data')=='hover'){
        $(this).show().siblings().hide();
      }
    });
  }); 
  //根据浏览器大小，适配样式
  var height = $(window).height();
  if(height < 670){
    $(".footer").css("height","55px");
    $(".footer").css("padding-top","11px");
    $(".footer").css("position","static");
    $(".middle .bg").css("position","absolute");
  } 
 

  //二维码
  $(".show_ma").mouseenter(function(){
      $(".ma").show();
  });
  $(".show_ma").mouseleave(function(){
      $(".ma").hide();
  });
  
  $(".show_qiyeban").click(function(){
    window.location.href="http://hr.lagou.com/";
  });
  //关闭卡片
  $(".job_box,.comp_box").on("click",".close",function(event){
      event.stopPropagation();
      $(this).closest("div").hide();
    });
  $('#lp_email').focus(function(){
    $('#lp_beError').hide();
  });
  /*出现萌版*/
  $(".left").on("click",".comp_box,.job_box,.yipai",function(e){
    e.stopPropagation();
    $(".comp_box").hide();
    $(".job_box").hide();
    $(".shade").show();
    $(".close2").show();
  });
  $(".left").on("click",".yipai,.model",function(){
    $(".yipai-shade").show();
    $(".close2").show();
    $(".comp_box").hide();
    $(".job_box").hide();
  });
  //萌版消失

  $(".close2").click(function(){
    $(".yipai-shade").hide();
    $(".shade").hide();
    $(".close2").hide();
  });
 
  //人才拍卖
  $(".show_yipai").click(function(){
    var htmlStr = '<img class="close2 aleft" src="../images/close2.png"><img class="yipai-shade" src="../images/shade.png"><img src="../images/yipai.png" class="yipai">';      
    $(".left").html(htmlStr);
    $(".close2").click(function(){
      $(".yipai-shade").hide();
      $(".shade").hide();
      $(".close2").hide();
    });
  });

    /**复选框**/
  $('.lp_agreeNotice').click(function(){
    var formbox = $(this).closest("form");
      if(formbox.find('.gree').prop('checked')){
        formbox.find('.lp_agreeNotice em').css('backgroundPosition','0px 0px');
        formbox.find('.gree').prop('checked',false);
        formbox.find('.lp_agreeNotice').next('span').show();
      }else{
        formbox.find('.gree').prop('checked',true);
        formbox.find('.lp_agreeNotice').next('span').hide();
        formbox.find('.lp_agreeNotice em').css('backgroundPosition','0px -12px');
          
      }
  });
  //刷新图形码
  var yzmNumber = 0;
  $(".reflash").click(function(){
    yzmNumber++;
    $(".yzm").attr("src","https://passport.lagou.com/vcode/create?from=register&amp;refresh="+yzmNumber);
  });


  //获取手机验证码，测试环境通用049281
  var clickFlag = true;
  $(".getcode").click(function(){
    if(clickFlag){
      var phoneFlag = $("input[name='phone']").valid();
      var zymFlag = $("input[name='yzm']").valid();
      var phone = $("#lp_phone").val();
      
      var request_form_verifyCode = $("#lp_yzm").val();
      if(phoneFlag && zymFlag){
        $.ajax({
           type:'GET',
           data: {
            phone:phone,
            request_form_verifyCode:request_form_verifyCode
          },
           url:'https://passport.lagou.com/register/getPhoneVerificationCode.json',
           dataType:'json'
         }).done(function(e){
            var msg = "";
            var errorbox = "#lp_coder";
            if(1==e.state){
                msg = "验证码已发送，请查收短信";
                $(".getcode").addClass("disablecode"); 
                clickFlag = false;
                var second = 60;
                var s = setInterval(function(){
                  if(second > 1){
                    second--;
                      $(".getcode").text(second+"秒后重试");
                  }else{
                    $(".getcode").removeClass("disablecode").text("获取验证码"); 
                    clearInterval(s);
                    clickFlag = true;
                  }
                  
                },1000);                    
             }else if(220==e.state){
                msg = "请输入正确的11位中国大陆地区手机号码";
                errorbox = "#lp_phone";
             }else if(221==e.state){
                msg = "系统错误";
             }else if(222==e.state){
                msg = "该手机已被注册，请重新输入或直接登录";
                errorbox = "#lp_phone";

             }else if(240==e.state){
                msg = "请输入手机号码";
                errorbox = "#lp_phone";

             }else if(310==e.state){
                msg = "该手机获取验证码已达上限，请明天再试";
             }else if(311==e.state){
                msg = "用户获取验证码频率过高，请稍后再试";
             }else if(500==e.state){
                msg = "系统错误";
             }else if(10010==e.state){
                msg = "验证码不正确";
                errorbox = "#lp_yzm";
             }else if(10011==e.state){
                msg = "系统错误";
             }else if(10012==e.state){
                msg = "系统错误";
             }else{
                msg = "网络错误，请重新尝试";
             }


            $("#lp_phone").next(".error").remove();
            var error = '<span for="lp_phone" generated="true" class="error" style="margin: -10px 0px 5px;">'+msg+'</span>';  
            $(errorbox).after(error);             
         });
      }
    }
    
  });






    function mouseover(company){
        if(company.find('i').length>0){
           company.find('i').show();
        }else{
            company.addClass('hover');
        }    
     }
     function mouseout(company){
        if(company.find('i').length>0){
           company.find('i').hide();
        } else{
          company.removeClass('hover');
        }
     }
    function stateToMsg(state){
      var obj = {}
    
      switch(state){

        case 220:
          obj.msg = "请输入有效的邮箱地址";
          obj.erroeboxId = "lp_email";
          break;
        case 211:
          obj.msg = "请输入6-16位密码，字母区分大小写";
          obj.erroeboxId = "password";
          break;
        case 222:
          obj.msg = "请输入11位大陆地区手机号码";
          break;
        case 240:
          obj.msg = "请输入常用邮箱地址或者手机号码";
          break;
        case 241:
          obj.msg = "请输入密码";
          obj.erroeboxId = "password";
          break;
        case 243:
          obj.msg = "请选择使用拉勾的目的";
          break;
        case 244:
          obj.msg = "请输入6位数字验证码";
          obj.erroeboxId = "lp_coder";
          break;
        case 245:
          obj.msg = "请输入6位数字验证码";
          obj.erroeboxId = "lp_coder";
          break;
        case 299:
          obj.msg = "你的操作太过频繁，请稍后再试";
          break;
        case 400:
          obj.msg = "该邮箱已被注册，请重新输入或直接登录";
          obj.erroeboxId = "lp_email";
          break;
        case 401:
          obj.msg = "手机验证码不正确";
          obj.erroeboxId = "lp_coder";
          break;
        case 402:
          obj.msg = "手机验证码不正确";
          obj.erroeboxId = "lp_coder";
          break;
        case 403:
          obj.msg = "系统错误";
          break;
        case 405:
          obj.msg = "该手机已被注册，请重新输入或直接登录";
          obj.erroeboxId = "lp_phone";
          break;
        case 498:
          obj.msg = "系统错误";
          break;
        case 499:
          obj.msg = "系统错误";
          break;


        case 501:
          obj.msg = "系统错误";
          break;
        case 502:
          obj.msg = "系统错误";
          break;
        case 10010:
          obj.msg = "验证码不正确";
          obj.erroeboxId = "lp_yzm";
          break;
        case 10011:
          obj.msg = "系统错误";
          break;
        case 10012:
          obj.msg = "系统错误";
          break;
      }
      return obj;
    }
     /**companylist**/
     $('.companylist li').css('opacity','0.5');
     $('.companylist li').hover(function(){  
         $(this).css({'opacity':'1','color':'#fff'});
     },function(){
          $(this).css('opacity','0.5');  
     });
     $('.lp_footer_qr').hover(function(){
       mouseover($(this));
     },function(){
       mouseout($(this));
     });
     $('.lp_c1 tr:not(".borderbottom")').hover(function(){
       mouseover($(this));
     },function(){
       mouseout($(this));
     });
     $('#lp_email').focus(function(){
         $('#beError').hide();
       });

    //手机、邮箱切换
    $(".phone").click(function(){
      $(this).find("img").attr("src","../images/common/phoneIcon2.png");
      $("mail").find("img").attr("src","../images/common/mailIcon.png");
      $(".mail").removeClass("active");
      $(this).addClass("active");
      $(".line").animate({left:"0px"});
      $("#mail_form").hide();
      $('#phone_form').show();
    }); 
    $(".mail").click(function(){
      $(this).find("img").attr("src","../images/common/mailIcon2.png");
      $(".phone").find("img").attr("src","../images/common/phoneIcon.png");
      $(".phone").removeClass("active");
      $(this).addClass("active");
      $(".line").animate({left:"151px"});
      $("#phone_form").hide();
      $("#mail_form").show();
    }); 
    $(".submitBtn").click(function(){
      $(this).parent("form").submit();
    });
    
    jQuery.validator.addMethod("isMobile", function(value, element) {
        var length = value.length;
        var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
        return this.optional(element) || (length == 11 && mobile.test(value));
    }, "请正确填写您的手机号码");
     /**邮箱注册表单验证**/
       $('#mail_form').validate({
         onkeyup: null,
         rules: {
             email: {
               required: true,
               email: true,
               maxlength:100
             },
             password: {
               required: true,
               rangelength: [6,16]
             },
             checkbox:{required:true}
         },
         messages: {
           email: {
               required: "请输入常用邮箱地址",
               email: "请输入有效的邮箱地址，如：vivi@lagou.com",
               maxlength:"请输入100字以内的邮箱地址"
             },
             password: {
               required: "请输入密码",
               rangelength: "请输入6-16位密码，字母区分大小写"
             },
             checkbox: {
               required: "请接受拉勾用户协议"
             }
         },
         errorPlacement:function(label, element){
           if(element.attr("type") == "radio"){
             label.insertAfter($(element).parents('ul')).css('marginTop','-20px');
           }else if(element.attr("type") == "checkbox"){          
             label.insertAfter($(element).parent()).css('clear','left');
             label.css('margin','-6px 0 5px 0');
           }else{
             label.insertAfter(element);
             label.css('margin','-10px 0 5px 0');
           };  
         },
         
         submitHandler:function(form){
           var email =$.trim($('#lp_email').val());
           var password =md5($('#mail_password').val());
           var vcode = $('#lp_vcode').val();
           var request_form_verifyCode = "";
           var ctx = 'https://passport.lagou.com';
           $(form).find(":submit").attr("disabled", true);
           //type=1默认为企业用户
               $.ajax({
                 type:'POST',
                 data: {isValidate:true,email:email,password:password,type:0},
                 url:ctx+'/register/register.json',
                 request_form_verifyCode:request_form_verifyCode,
                 dataType:'json'
               }).done(function(e) {
                if(e.state==1){
                  window.location.href='/grantServiceTicket/grant.html';  
                }else{
                  var obj = stateToMsg(e.state);
                  var error = '<span for="lp_phone" generated="true" class="error" style="margin: -10px 0px 5px;">'+obj.msg+'</span>';
                  if(obj.erroeboxId == "password"){
                    $("#mail_password").after(error);  
                  }else{
                    $("#"+obj.erroeboxId).after(error);  
                  } 
                }
                    
                                
               });
           }  

       });
       //手机号注册
       $('#phone_form').validate({
           onkeyup: null,
           rules: {
               phone: {
                 required: true,
                 isMobile : true
               },
               yzm:{
                 required: true
               },
               coder:{
                 required:true,
                 digits:true,
                 maxlength:6,
                 minlength:6
               },
               password: {
                 required: true,
                 rangelength: [6,16]
               },
               checkbox:{required:true},
               telphone:{
                 required:true
               }
           },
           messages: {
             phone: {
                 required: "请输入手机号码",
                 isMobile: "请输入11位大陆地区手机号码"
               
               },
               yzm: {
                 required: "请输入验证码"
               
               },
               coder: {
                   required: "请输入手机验证码",
                   digits: "请输入6位数字验证码",
                   maxlength:"请输入6位数字验证码",
                 minlength:"请输入6位数字验证码",
                 
                 },
               password: {
                 required: "请输入密码",
                 rangelength: "请输入6-16位密码，字母区分大小写"
               },
               checkbox: {
                 required: "请接受拉勾用户协议"
               }
           },
           errorPlacement:function(label, element){
             if(element.attr("type") == "radio"){
               label.insertAfter($(element).parents('ul')).css('marginTop','-20px');
             }else if(element.attr("type") == "checkbox"){          
               label.insertAfter($(element).parent()).css('clear','left');
               label.css('margin','-6px 0 5px 0');
             }else{
               label.insertAfter(element);
               label.css('margin','-10px 0 5px 0');
             };  
           },
           
           submitHandler:function(form){
             var phone =$.trim($('#lp_phone').val());
             var phoneVerificationCode = $.trim($("#lp_coder").val());//验证码
             var password =md5($('#phone_password').val());
             var request_form_verifyCode = $("#lp_yzm").val();
             var vcode = $('#lp_vcode').val();
             var ctx = 'https://passport.lagou.com';
             $(form).find(":submit").attr("disabled", true);
             //type=1默认为企业用户
                 $.ajax({
                   type:'POST',
                   data: {
                     isValidate:true,
                     phone:phone,
                     phoneVerificationCode:phoneVerificationCode,
                     request_form_verifyCode:request_form_verifyCode,
                     password:password,
                     type:0,
                     verifyCode:vcode
                     },
                   url:ctx+'/register/register.json',
                   dataType:'json'
                 }).done(function(e) {
                  if(e.state==1){
                    window.location.href='/grantServiceTicket/grant.html';  
                  }else{
                    var obj = stateToMsg(e.state);
                    var error = '<span for="lp_phone" generated="true" class="error" style="margin: -10px 0px 5px;">'+obj.msg+'</span>';
                    if(obj.erroeboxId == "password"){
                      $("#phone_password").after(error);  
                    }else{
                      $("#"+obj.erroeboxId).after(error);  
                    } 
                  }
                    
                                        
                 });
             }  

         });



});