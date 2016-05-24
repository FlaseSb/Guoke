<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>注册 | 统一登录系统 | 果壳网 科技有意思</title>
    <meta name="Keywords" content="果壳,果壳网,科技,泛科技,智趣,生活,科普"/>
    <meta name="Description" content=""/>
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/css/gui.css">
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/css/login-reg.css">

</head>
<body>
    <div class="container ">
<div class="guokr" id="guokr"></div>
<div class="gheader-wp">
    <div class="gheader-wp-b">
        <div class="gheader" id="gheader">
            <a class="gheader-logo gfl" id="guokrLogo" href="http://www.guokr.com/" title="果壳 科技有意思">果壳网</a>
            <img class="gmotto" src="/Public/Home/assets/Picture/motto.png" alt="成为果壳青年，一起记录科技时代！" />
        </div>
    </div>
</div>
    
        <div class="wrap grow gmt30 gpack">
            <div class="gspan-6 gprefix-3 gsuffix-3 side">
                <div class="side-title">你还可以用第三方帐号登录</div>
                <div class="extoauth2">
                    <a rel="nofollow" class="icon weixin" href="">微信帐号登录</a>
                    <a rel="nofollow" class="icon weibo" href="">微博帐号登录</a>
                    <a rel="nofollow" class="icon qq" href="">qq帐号登录</a>
                    <a rel="nofollow" class="icon douban" href="">豆瓣帐号登录</a>
                </div>
                
    <p>
    已有帐号？<a rel="nofollow" id="changeVcode" href="">马上登录</a>
    </p>

            </div>
            <div class="gspan-15 gprefix-4 main">
                
    <h1>欢迎加入果壳</h1>
    <form class="gform" id="regForm" action="<?php echo U('Home/Sign/Email');?>" method="post">
        <p class="gform-box">
            <input class="gbtxt" id="email" maxlength="40" name="email" placeholder="邮箱" readmin="请输入邮箱" type="email" value="">
            <span class="tip"></span>
        </p>
        <div>
            
        </div>
            
        <p class="gform-box">
            <input type="submit" id="ko" class="gform-submit greg-btn" value="发送验证邮件">
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
</body>

</html>
    <script src="/Public/Admin/assets/js/jquery-1.8.3.min.js"></script>

    <script>
    $(function(){
            var CUSER=true;

            $('.gform').submit(function(){
               CUSER = true;
               //丧失焦点事件
               $('input').trigger('blur');
               //检验是否正确
               if(!CUSER){
                return false;
               }
               return  true;
            })

            $('input').focus(function(){
              //获取属性
              var str = $(this).attr('readmin');
              //设置文本
              $(this).next().html(str).css('color','green');
              //设置样式
              $(this).attr('style','border:solid 1px green;');
              $('#captcha').attr('style','width:150px');
            })


            $('#email').blur(function(){
              //检测用户名是否正确
              var reg = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
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
                    url:"<?php echo U('Home/Sign/signdo');?>",
                    data:{email:Email},
                    type:'get',
                    async:false,
                    success:function(data){
                      if(data==1){
                        t.next().html('邮箱可以注册').css('color','green');
                        t.attr('style','border:solid 1px green;');
                      }else{
                        t.next().html('邮箱已被注册').css('color','rgb(243, 90, 90)');
                        t.attr('style','border:solid 1px red;');
                        CUSER = false;
                      }
                    }
                  })
              }
            })

    })

    </script>