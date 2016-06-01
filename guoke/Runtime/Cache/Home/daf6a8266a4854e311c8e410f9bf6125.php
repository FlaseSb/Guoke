<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html class="no-js screen-scroll">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta name="Keywords" content="果壳问答, ask, 果壳,果壳网,科技,泛科技,智趣,生活,科普"/>
        <meta name="Description" content="汇集知识碎片，创造有价值的答案"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />
        
	<title>标签广场 | 问答 | 果壳网 科技有意思</title>

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
	                <a href="/ask/hottest/">发现问答</a>
	            </li>
	            <li>
	                <a href="/ask/pending/">等待回答</a>
	            </li>
	            <li >
	                <a href="/ask/newest/">最新问题</a>
	            </li>
	            <li class="current">
	                <a href="<?php echo U('Home/Quetag/index');?>">标签广场</a>
	            </li>
	        </ul>
	        <div class="sub-nav-btn gfr">
		        <?php if($uid == '' ): ?><a data-gaevent="ask_nav_button_ask:ask" class="gnbtn-primary" href="<?php echo U('Home/Login/index');?>">提问</a>
		        <?php else: ?>
		            <a data-gaevent="ask_nav_button_ask:ask" class="gnbtn-primary" href="<?php echo U('Home/Question/add');?>">提问</a><?php endif; ?>
	            <a data-gaevent="ask_nav_button_answer:ask" class="gnbtn-primary">我要回答</a>
	        </div>
	    </div>
	</div>




	        
	        <div class="gwrap tag-square-page">
	        
	<div class="gmain">
	    <div class="page-title">
	        <h2>搜索标签</h2>
	    </div>
		    <!-- 遍历标签 -->
			<?php if(is_array($res)): foreach($res as $key=>$vo): ?><li style="margin-top:20px;border-bottom:1px dashed #CBC7C7;float: left;width: 300px;height:90px;position: relative;padding-left:20px;list-style:none;">
		       		<a class="join-list-sign" target="_blank" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" style="float:left;margin-right: 10px;">
		       		<!-- 判断数据库有没有头像 -->
		       		<?php if($vo["tag_img"] == '' ): ?><img src="/Public/Home/assets/Images/tagimg.png" class="tag-icon" width="48" height="48">
		       			<?php else: ?> 
			        		<img src="/Public<?php echo ($vo["tag_img"]); ?>" class="tag-icon" width="48" height="48"><?php endif; ?>
		        	</a>
			        <div class="join-list-desc">
			        	<!-- 标签名 -->
			            <a target="_blank" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>"><?php echo ($vo["tag_name"]); ?></a>
			            <!-- 问题数 -->
			            <p ><?php echo ($vo["sub_num"]); ?>个问题</p>
			            <!-- 描述 -->
			            <span style="float: left;margin-right:45px;width:197px;height:50px;"><?php echo (substr($vo["tag_msg"],0,66)); ?></span>
			        </div>
			        <div>
				        <!-- 判断有没有登入 -->
				        <?php if($uid == '' ): ?><a id="follow" class="gnbtn-plat follow-btn" href="<?php echo U('Home/Login/index');?>">
					        	<span>+</span>关注
				        	</a>
				        <?php elseif($vo['isfollow'] == 1): ?>
				        	<a id="isfollow" tagid='<?php echo ($vo["tag_id"]); ?>' >
				        		<span style="font-size:12px;color:red;margin-right:5px;">-</span>取消
				        	</a>
				        <?php else: ?>
				            <a id="follow" class="gnbtn-plat follow-btn" tagid="<?php echo ($vo["tag_id"]); ?>">
					        	<span>+</span>关注
				        	</a><?php endif; ?>
			        </div>
		        </li><?php endforeach; endif; ?>
	        
	    </ul>
		<P><h4><?php if($res == ''): echo ($res); endif; ?></h4></P>
		<ul class="gpages">
	        <div id="pages" style="margin-left:300px;">
	           <?php echo ($pages); ?>
	        </div>
		</ul>
	</div>
	<div class="gside">
	    <div class="gh-search-wrap">
	        <form id="tagSearch" action="<?php echo U('Home/Quetag/search');?>" class="gh-search" method="get">
	            <p id="tagSearchBox">
	            <input id="q" type="text" class="gh-search-txt" name="search" maxlength="10" placeholder="搜索标签" value="<?php echo ($tag_name); ?>"/>
	            <input type="submit" value="搜索" class="gnicon-search" />
	            </p>
	        </form>
	    </div>
            <div class="side-title">
            <h4><a href="<?php echo U('Home/Quetag/index');?>">返回标签广场</a></h4>
        </div>
	</div>
	<script src="/Public/Home/assets/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		// 绑定关注单击事件
		$('#follow').live('click',function(){
			// 获取标签id
			var tagid=$(this).attr('tagid');

			// 设置url
			var url='<?php echo U("Home/Quetag/follow");?>';

			var follow=$(this);
			// 发送ajax
			$.get(url,{tag_id:tagid},function(data){
				if(data==1){
					follow.parent('div').html('<a id="isfollow" tagid='+tagid+' ><span style="font-size:12px;color:red;margin-right:5px;">-</span>取消</a>');
				}else{
					alert('请登入');
				}
			})
		})

		// 绑定取消关注单击事件
		$('#isfollow').live('click',function(){
			// 获取标签id
			var tagid=$(this).attr('tagid');

			// 设置url
			var url='<?php echo U("Home/Quetag/isfollow");?>';

			var isfollow=$(this);
			$.get(url,{tag_id:tagid},function(data){
				if(data==1){
					isfollow.parent('div').html('<a id="follow" class="gnbtn-plat follow-btn" tagid='+tagid+'><span>+</span>关注</a>');
				}else{
					alert('取消失败');
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
		.gnbtn-plat:hover{
			cursor:pointer;
		}
		#follow{
			font:12px 'Microsuft Yahei';line-height:30px;position:absolute;right:10px;top:0px;
		}
		#isfollow{
			position:absolute;right:20px;top:5px;
		}
		#isfollow:hover{
			text-decoration:none;
			cursor:pointer;
		}
	</style>



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