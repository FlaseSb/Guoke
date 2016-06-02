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
	        <div class="gspan-19 gprefix-2 main">
	            <h1>创建帐号</h1>
	            <form class="gform" id="regForm" action="" method="POST" novalidate="true">	

	                <input id="U_id" name="csrf_token" type="hidden" value="<?php echo ($po); ?>">
	                <p class="check-success">邮箱验证成功！你的邮箱是：<?php echo ($email); ?></p>
	                <p class="reg-summary">请输入密码和昵称，创建你的果壳帐号</p>
	                <p class="gform-box">
	                    
	                    <input class="gbtxt" id="text-input" name="nickname" placeholder="昵称" readmin="昵称2~6位汉字" type="text" value="">
	                    <span class="tip"></span>
	                </p>
	                <p class="gform-box">
	                    <input class="gbtxt password" id="password-input" name="password" placeholder="密码" readmin="请输入6-18位密码" type="password" value="">
	                    <span class="tip">
	                    
	                    </span>
	                </p>
	                <p class="gform-box">
	                    <input class="gbtxt password" id="pwd-input" name="password_confirm" placeholder="请确认密码" readmin="请确认密码" required="" type="password" value="">
	                    <span class="tip">
	                    
	                    </span>
	                </p>
	                <p>
	                    <input class="gbtxt form-txt-vcode" id="captcha" name="captcha" placeholder="验证码" type="hidden" value="">
	                    <span class="tip">
	                    
	                    </span>
	                </p>
	                
	    <p class="gform-box gform-terms">
	        <input id="termsOfUse" name="terms_of_use" type="checkbox" value="y">
	        
	        <label for="termsOfUse">已经认真阅读并同意果壳的<a href="http://www.guokr.com/help/agreement/" target="_blank">《使用协议》</a></label>
	        
	        <span class="tip"></span>
	    </p>

	                <p class="gform-box">
	                    <input type="submit" style="background:#ccc" disabled="disabled" class="gform-submit greg-btn" value="创建帐号">
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

    $('form').submit(function(){
       CUSER = true;
       //丧失焦点事件
       $('input').trigger('blur');
       //检验是否正确
       if(!CUSER){
        return false;
       }
       var name=$('#text-input').val();
       var password=$('#password-input').val();
       var U_id=$('#U_id').val();
       $.ajax({
           url:"<?php echo U('Home/Sign/CreateAdd');?>",
           data:{U_PID:U_id,User_Nickname:name,User_Pwd:password},
           type:'post',
           success:function(data){
             if(data==1){
                location.href="<?php echo U('Home/Index/index');?>";
             }
           }
         })

       //阻止默认行为
       return  false;
      
    })

    $('input').focus(function(){
      //获取属性
      var str = $(this).attr('readmin');
      //设置文本
      $(this).next().html(str).css('color','green');
      //设置样式
      $(this).attr('style','border:solid 1px green;');

    })


    $('#text-input').blur(function(){
      //检测用户名是否正确
      var reg = /^[\u4e00-\u9fa5]{2,6}$/i;
      //获取邮箱
      var Email= $(this).val();
      //检测
      var res = reg.test(Email);
      var t=$(this);
      if(!res){
         $(this).next().html('昵称格式不正确').css('color','rgb(243, 90, 90)');;
         $(this).attr('style','border:solid 1px red;');
         CUSER = false;
      }else{
          $.ajax({
            url:"<?php echo U('Home/Sign/Verify');?>",
            data:{email:Email},
            type:'get',
            async:false,
            success:function(data){
              if(data==1){
                t.next().html('昵称已被注册').css('color','rgb(243, 90, 90)');;
                t.attr('style','border:solid 1px red;');
                CUSER = false;
              }else{
                t.next().html('昵称可以使用').css('color','green');
                t.attr('style','border:solid 1px green;');
              }
            }
          })

         
      }
    })

    $('#password-input').blur(function(){
      var pass = $(this).val();
      var reg = /[\w\W]{6,22}/;
      if(!reg.test(pass)){
        $(this).next().html('密码格式不正确').css('color','rgb(243, 90, 90)');;
        $(this).attr('style','border:solid 1px red;');
        CUSER = false;
      }else{
        $(this).next().html('密码可以使用').css('color','green');
        $(this).attr('style','border:solid 1px green;');
      }
    })

    //密码
    $('#pwd-input').blur(function(){
      var pass = $(this).val();
      var password = $('#password-input').val();
      if(pass==''){
      	$(this).next().html('请输入密码').css('color','rgb(243, 90, 90)');;
        $(this).attr('style','border:solid 1px red;');
      }else if(pass == password){
        $(this).next().html('密码一致').css('color','green');
        $(this).attr('style','border:solid 1px green;');
      }else{
        $(this).next().html('两次密码不正确').css('color','rgb(243, 90, 90)');;
        $(this).attr('style','border:solid 1px red;');
        CUSER = false;
      }
    })
    
    $('#termsOfUse').change(function(){
    	var v=$(this).attr('checked');
    	// console.log(v);
    	if(v=='checked'){
    		$('input[type="submit"]').removeAttr('disabled');
    		$('input[type="submit"]').attr('style','background:green');
    	}else{
    		$('input[type="submit"]').attr('style','background:#ccc');
    		$('input[type="submit"]').attr('disabled','disabled');
    	}
    })

    
  })

</script>