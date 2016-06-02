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

	<div class="sub-nav">
	    <div class="sub-nav-wrap gclear">
	        <h2>
	            <a href="/ask/"><span class="gnav-logo">果壳</span>问答</a>
	        </h2>
	        <ul class="sub-nav-link gfl">
	            <li class="current">
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
	        </ul>
	        <div class="sub-nav-btn gfr">
	            <?php if($uid == '' ): ?><a data-gaevent="ask_nav_button_ask:ask" class="gnbtn-primary" href="<?php echo U('Home/Login/index');?>">提问</a>
		        <?php else: ?>
		            <a data-gaevent="ask_nav_button_ask:ask" class="gnbtn-primary" href="<?php echo U('Home/Question/add');?>">提问</a><?php endif; ?>
	            <a data-gaevent="ask_nav_button_answer:ask" href="<?php echo U('Home/Question/waitque');?>" class="gnbtn-primary">我要回答</a>
	        </div>
	    </div>
	</div>




	<div class="gwrap ask-index-page">
	<div class="gmain">
		<div class="ask-index-list ask-wait ask-list-border">
		        <h3>等待回答
		            <a href="<?php echo U('Home/Question/waitque');?>" class="ask-list-all" target="_blank">[全部]</a>
		        </h3>
		        <ul class="ask-q-list">
		            <?php if(is_array($wait)): foreach($wait as $k=>$v): ?><li>
			            <span class="ask-list-right"><?php echo ($v["answer_num"]); ?>回答</span>
			            <a data-gaevent="ask_main_wait:ask" class="gellipsis" href="<?php echo U('Home/Question/subject',array('id'=>$v['id']));?>" target="_blank">
			                <?php echo ($v["sub_name"]); ?>
		                </a>
			            </li><?php endforeach; endif; ?>
		        </ul>
		    </div>
	    <div class="ask-qa ask-list-border gclear">
	        <div class="ask-index-list ask-hot">
	            <h3>热门问答
	                <a href="<?php echo U('Home/Question/question',array('num'=>'1'));?>" class="ask-list-all" target="_blank">[全部]</a>
	            </h3>
	            <ul class="ask-q-list">
	                <?php if(is_array($hot)): foreach($hot as $k=>$v): ?><li>
	                    <a data-gaevent="ask_main_hot:ask" class="gellipsis" href="<?php echo U('Home/Question/subject',array('id'=>$v['id']));?>" target="_blank">
	                        <?php echo ($v["sub_name"]); ?>
	                    </a>
	                </li><?php endforeach; endif; ?>
	            </ul>
	        </div>
	        <div class="ask-index-list ask-hot">
	            <h3>精彩问答
	                <a href="<?php echo U('Home/Question/question',array('num'=>'2'));?>" class="ask-list-all" target="_blank">[全部]</a>
	            </h3>
	            <ul class="ask-q-list">
	                <?php if(is_array($wonderful)): foreach($wonderful as $k=>$v): ?><li>
	                    <a data-gaevent="ask_main_good:ask" class="gellipsis" href="<?php echo U('Home/Question/subject',array('id'=>$v['id']));?>" target="_blank">
	                        <?php echo ($v["sub_name"]); ?>
	                    </a>
	                </li><?php endforeach; endif; ?>
	            </ul>
	        </div>
	    </div>
	    <div class="ask-index-list ask-list-border" id="askLikeChange">
	        <h3>
	           
	            大家都喜欢
	            <a href="/ask/popular/" class="ask-list-all" target="_blank">[全部]</a>
	        </h3>
	        
	        <ul class="ask-multi-list ask-multi-current">
	            <?php if(is_array($likeans)): foreach($likeans as $key=>$vo): ?><li class="gclear ">
		                <span class="ask-multi-up">
		                    <span class="ask-support-num"><?php echo ($vo["zan"]); ?></span>
		                </span>
		                <div class="gfl">
		                    
		                    <h4 class="gellipsis">
		                        <a data-gaevent="ask_main_like:ask" href="" target="_blank"><?php echo ($vo["User_Nickname"]); ?></a>&nbsp;回答&nbsp;<a href="<?php echo U('Home/Question/subject',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo["sub_name"]); ?></a>
		                    </h4>
		                    
		                    <p class="gellipsis">
		                        <?php echo ($vo["ans_msg"]); ?>
		                    </p>
		                </div>
		                <span class="gfr"><?php echo ($vo["ans_time"]); ?></span>
		            </li><?php endforeach; endif; ?>
	            

	            
	        </ul>
	        
	    </div>
	    <div class="ask-index-list ask-list-border">
	        <h3>
	            <a href="/question/461319/" class="gfr" target="_blank">什么是等待支持？</a>
	            等待支持
	            <a href="/ask/potential/" class="ask-list-all" target="_blank">[全部]</a>
	        </h3>
	        <ul class="ask-multi-list ask-multi-current">
	            
	            <?php if(is_array($waitans)): foreach($waitans as $key=>$vo): ?><li class="gclear ">
		                <span class="ask-multi-up">
		                    <span class="ask-support-num"><?php echo ($vo["zan"]); ?></span>
		                </span>
		                <div class="gfl">
		                    
		                    <h4 class="gellipsis">
		                        <a data-gaevent="ask_main_like:ask" href="" target="_blank"><?php echo ($vo["User_Nickname"]); ?></a>&nbsp;回答&nbsp;<a href="<?php echo U('Home/Question/subject',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo["sub_name"]); ?></a>
		                    </h4>
		                    
		                    <p class="gellipsis">
		                        <?php echo ($vo["ans_msg"]); ?>
		                    </p>
		                </div>
		                <span class="gfr"><?php echo ($vo["ans_time"]); ?></span>
		            </li><?php endforeach; endif; ?>
	            
	            
	            
	        </ul>
	    </div>
	    <div class="ask-index-list ask-hot-tags gclear">
	        <h3>
	            热门标签
	            <a href="<?php echo U('Home/Quetag/index');?>" class="ask-list-all" target="_blank">[全部]</a>
	        </h3>
	        
	        
	        <div class="ask-hot-tag">
	            <a href="<?php echo U('Home/Quetag/index',array('state'=>2,'num'=>'2'));?>" class="ask-tag-link" target="_blank">人文 ▪ 社科</a>
	            <?php if(is_array($renwen)): foreach($renwen as $key=>$vo): ?><dl>
		                <dt>
		                <a data-gaevent="ask_main_tag:ask" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="_blank">
		                <?php if($vo["tag_img"] == '' ): ?><img width="24" src="/Public/Home/assets/Images/tagimg.png"/></a>
	                	<?php else: ?>
		                	<img width="24" src="/Public<?php echo ($vo["tag_img"]); ?>"/></a><?php endif; ?>
		                </a>
		                </dt>
		                <dd>
		                    <a data-gaevent="ask_main_tag:ask" class="gellipsis" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="_blank"><?php echo ($vo["tag_name"]); ?></a>
		                </dd>
		            </dl><?php endforeach; endif; ?>
	            
	        </div>
	        
	        <div class="ask-hot-tag">
	            <a href="<?php echo U('Home/Quetag/index',array('state'=>3,'num'=>'3'));?>" class="ask-tag-link" target="_blank">科学 ▪ 技术</a>
	            <?php if(is_array($kexue)): foreach($kexue as $key=>$vo): ?><dl>
	                <dt>
	                <a data-gaevent="ask_main_tag:ask" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="_blank">
	                	<?php if($vo["tag_img"] == '' ): ?><img width="24" src="/Public/Home/assets/Images/tagimg.png"/></a>
	                	<?php else: ?>
		                	<img width="24" src="/Public<?php echo ($vo["tag_img"]); ?>"/></a><?php endif; ?>
	                </dt>
	                <dd>
	                    <a data-gaevent="ask_main_tag:ask" class="gellipsis" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="_blank"><?php echo ($vo["tag_name"]); ?></a>
	                </dd>
	            </dl><?php endforeach; endif; ?>

	            
	        </div>
	        
	        <div class="ask-hot-tag">
	            <a href="<?php echo U('Home/Quetag/index',array('state'=>4,'num'=>'4'));?>" class="ask-tag-link" target="_blank">生活 ▪ 娱乐</a>
	            <?php if(is_array($life)): foreach($life as $key=>$vo): ?><dl>
	                <dt>
	                <a data-gaevent="ask_main_tag:ask" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="_blank">
	                	<?php if($vo["tag_img"] == '' ): ?><img width="24" src="/Public/Home/assets/Images/tagimg.png"/></a>
	                	<?php else: ?>
		                	<img width="24" src="/Public<?php echo ($vo["tag_img"]); ?>"/></a><?php endif; ?>
	                </dt>
	                <dd>
	                    <a data-gaevent="ask_main_tag:ask" class="gellipsis" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="_blank"><?php echo ($vo["tag_name"]); ?></a>
	                </dd>
	            </dl><?php endforeach; endif; ?>

	            
	        </div>
    	        <div class="ask-hot-tag">
        <a href="<?php echo U('Home/Quetag/index',array('state'=>4,'num'=>'4'));?>" class="ask-tag-link" target="_blank">自然 ▪ 生态</a>
        <?php if(is_array($ziran)): foreach($ziran as $key=>$vo): ?><dl>
            <dt>
            <a data-gaevent="ask_main_tag:ask" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="_blank">
            	<?php if($vo["tag_img"] == '' ): ?><img width="24" src="/Public/Home/assets/Images/tagimg.png"/></a>
            	<?php else: ?>
                	<img width="24" src="/Public<?php echo ($vo["tag_img"]); ?>"/></a><?php endif; ?>
            </dt>
            <dd>
                <a data-gaevent="ask_main_tag:ask" class="gellipsis" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="_blank"><?php echo ($vo["tag_name"]); ?></a>
            </dd>
        </dl><?php endforeach; endif; ?>
        </div>
	      </div>
	</div>
	<div class="gside">
	  
	    <div class="ask-index-ad">
	        <div id="bdadm-664451" class="side-advert"></div>
	    </div>
	    <div id="askNewAnswer" class="ask-index-list ask-index-new">
	        <h3>新增答案</h3>
	        <ul>
	        	<?php if(is_array($newans)): foreach($newans as $key=>$vo): ?><li>
		        		<p class="gellipsis">
		        			<a href="" target="_blank"><?php echo ($vo["User_Nickname"]); ?></a>
		        			&nbsp;回答&nbsp;
		        			<a target="_blank" href="<?php echo U('Home/Question/subject',array('id'=>$vo['id']));?>"><?php echo ($vo["sub_name"]); ?></a>
		        		</p>
		        		<span><?php echo ($vo["ans_time"]); ?></span>
		        	</li><?php endforeach; endif; ?>
	        </ul>
	    </div>
	    <div class="ask-index-list ask-index-best" id="askBestChange">
	        <h3>
	            <div class="ask-change-tab gfr" id="askBestChangeBtns">
	               
	            </div>
	            最佳回答者
	        </h3>
	        
	        <ul class="current">
	            
	        	<?php if(is_array($optimum)): foreach($optimum as $key=>$vo): ?><li class="gclear ">
	                <a data-gaevent="ask_main_best_people:ask" href="" class="pt-pic" target="_blank">
	                	<?php if($vo["User_pic"] == '' ): ?><img src="/Public/Home/assets/Images/himg.png" width="48px" height="48px" />
	                	<?php else: ?> 
	                    	<img src="/Public<?php echo ($vo["User_pic"]); ?>" width="48px" height="48px"/><?php endif; ?>
	                </a>
	                <div class="pt-txt">
	                    <a data-gaevent="ask_main_best_people:ask" href="" target="_blank"><?php echo ($vo["User_Nickname"]); ?></a>
	                    <p class="gellipsis">
	                    </p>
	                </div>
	                <span class="ask-side-up">
	                    <?php echo ($vo["zan"]); ?>
	                </span>
	            </li><?php endforeach; endif; ?>
	            
	         
	        </ul>
	    </div>
	</div>
	        <!-- 广告位：问答首页-底通 -->
	        <div style="clear: both;">
		<script type="text/javascript" >BAIDU_CLB_SLOT_ID = "887341";</script>
		<script type="text/javascript" src="/Public/Home/assets/Scripts/o.js"></script>
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