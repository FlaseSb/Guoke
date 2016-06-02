<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html class="no-js screen-scroll">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta name="Keywords" content="果壳问答, ask, 果壳,果壳网,科技,泛科技,智趣,生活,科普"/>
        <meta name="Description" content="汇集知识碎片，创造有价值的答案"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />
        
        <title> 问答首页 | 问答 | 果壳网 科技有意思</title>
        
        <link rel="stylesheet" href="/Public/Home/assets/css/bc4bd704.main.css" />
        <link rel="stylesheet" href="/Public/Home/assets/css/920d0c10.index.css" />
    


        
        
            
        
</head>

<body>
        <div class="gheader-wrap">
            

<div class="gheader-new">
    <div class="gh-wrap">
        <div class="gfl">
            <ul class="gh-nav">
                <li>
                    <a href="<?php echo U('Home/Index/index');?>"><span class="gnicon-home"></span>首页<b ></b></a>
                </li>
                <li>

                    <a href="">科学人<b ></b></a>
                </li>
                <li>
                    <a href="">小组<b ></b></a>
                </li>
                <li>
                    <a href="">问答<b class="gnarrow-up"></b></a>

                </li>
                <li class="gh-sm-hidden">
                    <a href="http://mooc.guokr.com/" target="_blank">MOOC</a>
                </li>
                <li class="gh-sm-hidden">
                    <a href="http://www.zaih.com/" target="_blank">在行</a>
                </li>
                <li class="gh-sm-hidden">
                    <a href="http://www.kexuelife.com" target="_blank">科学与生活</a>
                </li>
                <li class="gh-sm-hidden">
                    <a href="http://www.15yan.com/" target="_blank">十五言</a>
                </li>

                <li id="moreNav" class="gh-sm-hidden">
                    <a href="javascript:void 0;" class="other">更多<i class="gnarrow-down"></i></a>
                    <div class="gh-list">
                        <ul>
                            <li class="gh-sm-hidden">
                                <a href="http://www.guokr.com/mobile/" target="_blank">果壳精选</a>
                            </li>
                            <li class="gh-sm-hidden">
                                <a href="http://gate.guokr.com/" target="_blank">任意门</a>
                            </li>
                            <li class="gh-sm-hidden">
                                <a href="http://www.guokr.com/group/weixin_account/" target="_blank">果壳微信号</a>
                            </li>
                            <li class="gh-sm-hidden">
                                <a href="http://music.guokr.com/" target="_blank">果壳音乐</a>
                            </li>
                            <li class="gh-sm-hidden">
                                <a href="http://www.guokr.com/group/185/" target="_blank">果壳动漫</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <form class="gh-search" id="search" method="get" action="http://www.guokr.com/search/all/">
                <p id="searchBox">
                    <input id="searchTxt" class="gh-search-txt" type="text" name="wd" maxlength="30" value="">
                    <input class="gnicon-search" type="submit" value="搜索">
                </p>
            </form>
        </div>
        <?php if($msg == true): ?><ul class="gh-notice gfr">
               
                <li id="gheaderNotice" class="gactived">
                    <a data-gaevent="home_nav_news:guokr" href="javascript:void 0;" class="gh-i-notice">
                        <span class="gnicon-notice gfl"></span>
                        <span class="gh-i-num unread" id="noticeNum">0</span>
                    </a>
                    <div class="gh-notice-panel" id="noticeBlock" style="display:none;">
                        <div class="notice-content">
                            <div class="gh-i-popup-category">
                                <span class="gfl">通知</span>
                                <a href="http://www.guokr.com/settings/notice/" class="gnicon-set gfl"></a>
                                <a href="http://www.guokr.com/user/notice/" class="gfr">全部通知</a>
                            </div>
                            <ul></ul>
                        </div>
                        <div class="gh-panel-bottom ghide" id="noticeBottom">
                            <a href="javascript:void 0;" class="gnbtn miss-all" data-operation="dismissAll">知道了</a>
                        </div>
                    </div>
                </li>
                <li id="gheaderRemind" class="unread">
                    <a data-gaevent="home_nav_news:guokr" href="javascript:void 0;" class="gh-i-remind">
                        <span class="gnicon-msg gfl"></span>
                        <span class="gh-i-num" id="totleNum">2</span>
                    </a>
                    <div class="gh-remind-panel" id="remindBlock" style="display:none">
                        <div class="remind-content">
                           <div class="gh-i-popup-category gh-msg-title">
                                <span class="gfl">站内信</span>
                                <a href="http://www.guokr.com/user/messages/" class="gfr">全部站内信</a>
                            </div>
                            <ul class="msg-list">
                            </ul>
                        </div>
                    </div>
                </li>
                <li id="gheaderSettings">
                    <a href="javascript:void 0;" class="gh-i-me">
                        <img src="http://1.im.guokr.com/TL27-S81EuoahCN7pVlXlzCI6I07ORoBQCo7fDv5EUqgAAAAoAAAAFBO.png?imageView2/1/w/24/h/24" width="24" height="24">
                        <i class="gnarrow-down"></i>
                    </a>
                    <div class="gh-list" style="display:none;" id="settingsBlock">
                        <ul>
                            
                        </ul>
                    </div>
                </li>
           </ul>
         
         <?php else: ?> 
         
            <div class="gh-login">
                <a rel="nofollow" href="<?php echo U('Home/login/index');?>">登录</a>
                <span class="split">|</span>
                <a rel="nofollow" href="<?php echo U('Home/Sign/index');?>">注册</a>
            </div><?php endif; ?>
    </div>
</div>
</div>






    
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/css/gui.css">
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/css/settings.css">

</head>
<body>
    <div class="container ">
        <div class="gheader-wrap">
          

        
    <div class="sub-nav">
        <div class="sub-nav-wrap logged gclear">
            <h2 class="gnav-title">
                <a href="http://www.guokr.com/" class="gnav-logo-big">果壳网</a>
            </h2>
            <ul class="sub-nav-link gfl">
                
				<li >
                	<a href="http://www.guokr.com/">首页</a>
                </li>

				<li >
                	<a href="http://www.guokr.com/user/feeds/">动态</a>
                </li>
				<li>
                	<a href="http://www.guokr.com/nuts/">果壳达人</a>
                </li>
				<li>
                	<a href="http://www.guokr.com/i/1875258233/">我的果壳</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="gwrap-m message-index-page">
        <div class="gside">
            <h1>消息中心</h1>
            <ul class="m-nav">
        
                <li><span class="gicon-message"></span><a href="<?php echo U('Home/Email/index');?>">站内信</a></li>
                 <li class="gactived"><span class="gicon-draft"></span><a href="<?php echo U('Home/Email/been');?>">已发送信箱</a></li>
        
                <li><span class="gicon-notice"></span><a href="">通知</a></li>
                <li><span class="gicon-notice"></span><a href="http://www.guokr.com/user/notice/">聊天会话</a></li>
                <li><span class="gicon-notice"></span><a href="http://www.guokr.com/user/notice/">被打回的文章</a></li>
            </ul>
        </div>
        
<div class="gmain">
    <div class="page-titleline">
        <h2>已发送信件</h2>
        <a href="javascript: void 0;" class="msg_now" id="msgNow">
            
       
            
        </a>
    </div>
    <div class="msg_filter" id="msgFilter">
        
    </div>

    <ul class="main-message" id="msgList">
        <?php if(is_array($res)): foreach($res as $key=>$vo): ?><li>
                <div class="pt-pic">
                    <a href="http://www.guokr.com/i/1007513324/" target="_blank">
                        <?php if($vo["User_pic"] == '' ): ?><img src="/Public/Home/assets/Images/himg.png" width="48" height="48">
                        <?php else: ?>
                            <img src="/Public<?php echo ($vo["User_pic"]); ?>" width="48" height="48"><?php endif; ?>
                    </a>
                    
                </div>
                <div class="pt-txt">
                    <p>发给<a href="http://www.guokr.com/i/1007513324/" target="_blank"><?php echo ($vo["User_Nickname"]); ?></a>：<?php echo ($vo["msg"]); ?></p>
                    <p class="pt-txt-d">
                        <span class="gfl"><?php echo ($vo["time"]); ?></span>
                        <span class="gfr">
                            <a href="javascript: void 0;" id="del" eid="<?php echo ($vo["id"]); ?>" class="msg-hover">删除</a>
                        </span>
                    </p>
                </div>
            </li><?php endforeach; endif; ?>
    </ul>
    <ul class="gpages">
        <div id="pages" style="margin-left:300px;">
           <?php echo ($pages); ?>
        </div>
    </ul>
</div>
    <script src="/Public/Home/assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        $('#del').live('click',function(){
            // 获取当前id
            var id=$(this).attr('eid');
            var url="<?php echo U('Home/Email/waitdel');?>";

            var del=$(this);
            // 发送ajax处理
            $.post(url,{id:id},function(data){
                if(data==1){
                    del.parents('li').remove();
                }else{
                    alert('删除失败');
                }
            })
        })
    </script>
<style type="text/css">
        #pages a,#pages span{ background-color: #fff;
            border: 1px solid #ddd;
            color: #337ab7;
            float: left;
            line-height: 1.42857;
            margin-left: -1px;
            padding: 6px 12px;
            position: relative;
            text-decoration: none;}
        #pages span {
          background-color: #337ab7;
          border-color: #337ab7;
          color: #fff;
          cursor: default;
          z-index: 2;}
</style>
    <script>
        var g_page_name = "settingMessageIndexPage",
            GJS_VERSION = 'doom',
            GJS_PRELOAD = ['ga', 'jQuery', 'GUtils', 'api', 'share'],
            ukey = "v0haih",
            client_id = 32353,
            douban_signin = "https:\/\/account.guokr.com\/douban\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Fuser%252Fmessages%252F";
    </script>
    <script src="/Public/Home/assets/Scripts/I.js"></script>
    <script src="/Public/Home/assets/Scripts/main.js"></script>
    <script src="/Public/Home/assets/Scripts/setting.js"></script>


	


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

    
    <script src="/Public/Admin/assets/js/jquery-1.8.3.min.js"></script>
    <script>
    $(function(){

       
       $("#gheaderNotice").click(function(event){ 
            var r=$(this).find('#noticeBlock');
            if(r.css('display')== "none" ) {
                    r.show();
            }else{
                    r.hide();
            }
            event.stopPropagation();
        });

       $(document).click(function(event){
            var r=$('#noticeBlock');
            if(r.css('display')=="none" ) {
                    r.show();
            }else{
                    r.hide();
            }
            
       })



    })
    </script>
</body>
</html>