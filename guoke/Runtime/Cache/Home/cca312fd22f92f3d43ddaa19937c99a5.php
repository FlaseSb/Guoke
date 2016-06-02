<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html class="no-js screen-scroll">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta name="Keywords" content="果壳问答, ask, 果壳,果壳网,科技,泛科技,智趣,生活,科普"/>
        <meta name="Description" content="汇集知识碎片，创造有价值的答案"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />
        
	<title>古文_3854 | 问答个人页 | 问答 | 果壳网 科技有意思</title>

        <link rel="stylesheet" href="/Public/Home/assets/css/bc4bd704.main.css" />
        <link rel="stylesheet" href="/Public/Home/assets/css/920d0c10.index.css" />
    


        
        
    <link rel="stylesheet" href="/Public/Home/assets/Css/bc4bd704.main.css" />
    <link rel="stylesheet" type="text/css" href=/Public/Home/assets/"Css/aaf6035b.profile.css" />   
	<link rel="stylesheet" type="text/css" href="/Public/Home/assets/Css/aaf6035b.profile.css" />

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

	<div class="sub-nav">
	    <div class="sub-nav-wrap gclear">
	        <h2>
	            <a href="/ask/"><span class="gnav-logo">果壳</span>问答</a>
	        </h2>
	        <ul class="sub-nav-link gfl">
	            <li>
	                <a href="<?php echo U('Home/Question/index');?>">问答首页</a>
	            </li>
	            <li>
	                <a href="<?php echo U('Home/Question/question');?>">发现问答</a>
	            </li>
	            <li>
	                <a href="<?php echo U('Home/Question/waitque');?>">等待回答</a>
	            </li>
	            <li >
	                <a href="<?php echo U('Home/Question/newque');?>">最新问题</a>
	            </li>
	            <li >
	                <a href="<?php echo U('Home/Quetag/index');?>">标签广场</a>
	            </li>
	            <?php if($uid != '' ): ?><li class="current">
		                <a href="<?php echo U('Home/Question/center',array('mid'=>$uid));?>">我的回答</a>
		            </li><?php endif; ?>
	        </ul>
	        <div class="sub-nav-btn gfr">
	            <?php if($uid == '' ): ?><a data-gaevent="ask_nav_button_ask:ask" class="gnbtn-primary" href="<?php echo U('Home/Login/index');?>">提问</a>
		        <?php else: ?>
		            <a data-gaevent="ask_nav_button_ask:ask" class="gnbtn-primary" href="<?php echo U('Home/Question/add');?>">提问</a><?php endif; ?>
	            <a data-gaevent="ask_nav_button_answer:ask" href="<?php echo U('Home/Question/waitque');?>" class="gnbtn-primary">我要回答</a>
	        </div>
	    </div>
	</div>




	<div class="gwrap">
	<div class="gmain">
		<div class="profile-info">
			<div class="profile-info-inner">
				<a class="profile-user-avatar" href="http://www.guokr.com/i/1875258233/">
					<img src="Picture/myvl6q1jt_zbgclkfc-jlpqyv5fzvxl2p-jvbhqgoxqgaaaaoaaaaepq.jpg" alt="古文_3854">
				</a>
				<div class="profile-info-detail">
					<h3><a class="profile-user-name" href="http://www.guokr.com/i/1875258233/">古文_3854</a></h3>
          
					<p>
						
						
					</p>
					<p>个人简介：这家伙很懒，还没写简介</p>
				</div>
			</div>
			<div class="profile-func">
		        <a href="http://www.guokr.com/i/1875258233/" class="user-link">果壳主页</a>
				<span class="user-like-num">获得<span class="icon-support"></span>0支持</span>
			</div>
		</div>

		<ul class="tab-underline">
            <li class="current">
            	<a href="http://www.guokr.com/ask/i/1875258233/">问答主页</a>
            </li>
			<li>
				<a href="/ask/i/1875258233/answers/">回答<span class="tab-info">(0)</span></a>
			</li>
						
			<li>
				<a href="/ask/i/1875258233/questions/">提问<span class="tab-info">(0)</span></a>
			</li>
			<li>
				<a href="/ask/i/1875258233/supporting_answers/">支持<span class="tab-info">(1)</span></a>
			</li>
			<li>
				<a href="/ask/i/1875258233/following_questions/">关注的问题<span class="tab-info">(20)</span></a>
			</li>
		</ul>
		



<h3 class="tab-title">支持<a href="/ask/i/1875258233/supporting_answers/">更多&gt;</a></h3>
<ul class="ask-multi-list">
    
    <li class="gclear">
		<span class="ask-multi-up">
            <span class="ask-support-num">4</span>
            <span class="icon-support"></span>
        </span>
		<div class="gfl">
			<h4 class="gellipsis">
            <a target="_blank" href="http://www.guokr.com/question/627330/">动物细胞身具叶绿素？光合作用走一波？</a>
			</h4>
			<p class="gellipsis">营养不良的人自然会面有菜色。
			</p>
					</div>
			    </li>
			    
			</ul>
	</div>
	<div class="gside">
		<h2 class="side-title">关注标签</h2>
		<ul class="achieve-list">
			<li>
				<a class="achieve-name" title="果壳问答成就，发布1个评论即可得到" target="_blank" href="http://www.guokr.com/question/465174/">
					<i class="icon-medal achieve-icon-copper"></i>噤若寒蝉
                </a>
			</li>
		</ul>
		
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