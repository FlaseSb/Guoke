<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>登录 | 统一登录系统 | 果壳网 科技有意思</title>
    <meta name="Keywords" content="果壳,果壳网,科技,泛科技,智趣,生活,科普"/>
    <meta name="Description" content=""/>
    
    
    
    <link rel="stylesheet" type="text/css" href="/Public/home/assets/css/gui.css">
    
    <link rel="stylesheet" type="text/css" href="/Public/home/assets/css/login-reg.css">

</head>
<body>
    <div class="container ">
<div class="guokr" id="guokr"></div>
<div class="gheader-wp">
    <div class="gheader-wp-b">
        <div class="gheader" id="gheader">
            <a class="gheader-logo gfl" id="guokrLogo"  title="果壳 科技有意思">果壳网</a>
            <img class="gmotto" src="/Public/home/Picture/motto.png" alt="成为果壳青年，一起记录科技时代！" />
        </div>
    </div>
</div>
        <div class="wrap grow gmt30 gpack">
            <div class="gspan-6 gprefix-3 gsuffix-3 side">
                <div class="side-title">你还可以用第三方帐号登录</div>
                <div class="extoauth2">
                    <a rel="nofollow" class="icon weixin" >微信帐号登录</a>
                    <a rel="nofollow" class="icon weibo">微博帐号登录</a>
                    <a rel="nofollow" class="icon qq" >qq帐号登录</a>
                    <a rel="nofollow" class="icon douban">豆瓣帐号登录</a>
                </div>
                    <p>
                        还没有帐号？<a rel="nofollow" id="changeVcode" href="">马上注册</a>
                    </p>
            </div>
            <div class="gspan-15 gprefix-4 main">
                
    <h1>欢迎登录果壳</h1>
    <form class="gform" id="ko">
        <input id="csrf_token" name="csrf_token" type="hidden" value="">
        <p class="gform-box">
            <input class="gbtxt" id="email" maxlength="40" name="email" placeholder="邮箱"  type="email" value="" readmin="请输入邮箱">
            <span class="tip"></span>
        </p>
        <p class="gform-box">
            <input class="gbtxt" id="password" name="password" placeholder="密码"  type="password" value="" readmin="请输入密码">
            <span class="tip"></span>
        </p>

        <div style="width:290px">
            <input class="gbtxt form-txt-vcode" id="captcha" name="code" placeholder="验证码" type="text" value="" style="width:150px">
            <div style="float:right">
                <img src="<?php echo U('Home/Public/CreateVcode');?>" onclick="this.src=this.src+'?a'" width="100px" height="40px" alt="" style="cursor:pointer">
            </div>
        </div>
        
         <p class="gform-box gform-rem" style="margin-top:19px">
            
             
             <input checked="" id="permanent" name="remember" type="checkbox" value="true"><label id="dff" for="permanent">记住我（网吧或别人的电脑请不要勾选）</label><br>
             <span class="lolo" style="color:red"></span>
             <span class="tip"></span>
         </p>

        <p class="gform-box">
                <input type="submit" class="gform-submit greg-btn" value="登录">
                <a class="gform-forget_pw" href="">忘记密码？</a>
        </p>
        </form>

            </div>
        </div>

        <div class="gbottom">
    <div class="gbottom-nav">
        <a href="http://www.guokr.com/about/">关于我们</a>
        <a href="http://www.guokr.com/zone/job/">加入果壳</a>
        <a href="http://www.guokr.com/spread/">媒体报道</a>
        <a href="http://www.guokr.com/question/446161/">帮助中心</a>
        <a href="http://www.guokr.com/event/home/">果壳活动</a>
        <a href="http://www.guokr.com/help/policy/">免责声明</a>
        <a href="http://www.guokr.com/contact/">联系我们</a>
        <a href="http://m.guokr.com/">移动版</a>
        <a href="http://www.guokr.com/mobile/">移动应用</a>
    </div>
    <div class="gbottom-i">©2015果壳网&nbsp;京ICP备09043258号-2&nbsp;京公网安备1101052730</div>
</div>
    </div>

    <script src="/Public/Admin/assets/js/jquery-1.8.3.min.js"></script>
    <script src="/Public/Home/assets/Scripts/jquery.md5.js"></script>
    <script>

$(function(){

        var CUSER=true;

        $('#ko').submit(function(){
           CUSER = true;
           //丧失焦点事件
           $('input').trigger('blur');
           //检验是否正确
           if(!CUSER){
            return false;
           }
           //阻止默认行为
           var email= $('#email').val();
           var password=$('#password').val();
           var md5pass=$.md5(password);
           var check=$('#permanent:checked').val();
           console.log(check);
           $.ajax({
             url:"<?php echo U('Home/Login/logindo');?>",
             data:{email:email,pass:md5pass,checked:check},
             type:'post',
             async:false,
             success:function(data){
                if(data){
                    location.href="<?php echo U('Home/Index/index');?>";
                }else{
                    $('.lolo').text('邮箱未注册或密码不正确');
                }
            }
           })

           return  false;
        })

        $('input').focus(function(){
          //获取属性
          var str = $(this).attr('readmin');
          //设置文本
          $(this).next().html(str).css('color','green');
          //设置样式
          $(this).attr('style','border:solid 1px green;');
          $('#captcha').attr('style','width:150px');
          $('#dff').attr('style','color:black;')
        })


        $('#email').blur(function(){
          //检测用户名是否正确
          var reg = /^\w+@\w+\.(com|cn|org|com.cn|net)$/;
          //获取邮箱
          var Email= $(this).val();
          //检测
          var res = reg.test(Email);
          var t=$(this);
          if(!res){
             $(this).next().html('邮箱格式不正确').css('color','rgb(243, 90, 90)');;
             $(this).attr('style','border:solid 1px red;');
             CUSER = false;
          }else{
              $.ajax({
                url:"<?php echo U('Home/Login/Emaildo');?>",
                data:{email:Email},
                type:'get',
                async:false,
                success:function(data){
                  if(data==1){
                    t.next().html('邮箱不存在').css('color','rgb(243, 90, 90)');;
                    t.attr('style','border:solid 1px red;');
                    CUSER = false;
                  }else{
                    t.next().html('');
                    t.attr('style','border:solid 1px green;');
                  }
                }
              })
          }
        })

        $('#password').blur(function(){
          var pass = $(this).val();
          var reg = /[\w\W]{6,22}/;
          if(!reg.test(pass)){
            $(this).next().html('密码格式不正确').css('color','rgb(243, 90, 90)');;
            $(this).attr('style','border:solid 1px red;');
            CUSER = false;
          }else{
            $(this).next().html('');
          }
        })

        $('#captcha').blur(function(){
          var p = $(this).val();
          var me=$(this);
          $.ajax({
            url:"<?php echo U('Home/Login/yzm');?>",
            data:{code:p},
            type:'post',
            async:false,
            success:function(data){
              if(data==1){
                  me.attr('style','border:solid 1px green;width:150px');
              }else{
                  CUSER = false;
                  console.log(CUSER);
                  me.attr('style','border:solid 1px red;width:150px');
              }
            }
          })
        })

         
})






    </script>



</body>
</html>