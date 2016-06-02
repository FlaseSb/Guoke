<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html class="no-js screen-scroll">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta name="Keywords" content="果壳问答, ask, 果壳,果壳网,科技,泛科技,智趣,生活,科普"/>
        <meta name="Description" content="汇集知识碎片，创造有价值的答案"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />
        
    <title><?php echo ($que["sub_name"]); ?> | 问答 | 问答 | 果壳网 科技有意思</title>

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

<link rel="stylesheet" type="text/css" href="/Public/Home/assets/css/125ce332.gbbcode.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/assets/css/637061c9.skin.css" />
<link rel="stylesheet" href="/Public/Home/assets/css/f28074c9.contentpage.css" />
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
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
	        </ul>
	        <div class="sub-nav-btn gfr">
	            <?php if($uid == '' ): ?><a data-gaevent="ask_nav_button_ask:ask" class="gnbtn-primary" href="<?php echo U('Home/Login/index');?>">提问</a>
                <?php else: ?>
                    <a data-gaevent="ask_nav_button_ask:ask" class="gnbtn-primary" href="<?php echo U('Home/Question/add');?>">提问</a><?php endif; ?>
	            <a href="<?php echo U('Home/Question/waitque');?>" class="gnbtn-primary">我要回答</a>
	        </div>
	    </div>
	</div>





<div class="gwrap ask-content-page">
    <div class="gmain">
    <div class="post">
        <div class="post-title">
            <h1>
                <?php echo ($que["sub_name"]); ?>
            </h1>
            <?php if($uid == $que["user_id"] ): ?><a class="post-edit post-tags-edit" id="editname">
                    <span class="gicon-profile"></span>修改
                </a><?php endif; ?>
        </div>
        <form action="<?php echo U('Home/Question/editname');?>" method="post">
            <input type="hidden" name="subid" value="<?php echo ($que['id']); ?>">
            <div  class="post-title-edit" id="subname" style="display:none">
                <p>
                    <textarea id="newname" class="gbtxt" name="newname"><?php echo ($que["sub_name"]); ?></textarea>
                </p>
                <p class="title-txt-do">
                    <a href="javascript: void 0;" class="cancel cancel-title-edit">取消</a>
                    <button class="gnbtn-primary edit-title-push" id="commit">确认</button>
                </p>
            </div>
        </form>
        <div style="display:none;" id="tagname">
            <p class="post-tags tags tags-edit" id="tagContent" >
                <span class="tag-title">标签：</span>
                <?php if(is_array($que['tag_name'])): foreach($que['tag_name'] as $key=>$vo): ?><span class="tag">
                        <a href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>" target="__blanck"><?php echo ($vo["tag_name"]); ?></a>
                        <a href="javascript: void 0;" id="del" class="gnicon-close-small" title="移除标签" subid="<?php echo ($que["id"]); ?>" num="<?php echo ($vo["tag_id"]); ?>">X</a>
                    </span><?php endforeach; endif; ?>
             </p>
            <div class="hide post-autoComp_tags gclear">
                <div style="position:relative;z-index:1;_zoom:1;float:left;">
                    <input type="text" id="tagAdd" subid="<?php echo ($que["id"]); ?>">
                    <button class="gnbtn-primary edit-title-push cancel">确认</button>
                </div>
            </div>
        </div>
        <p class="post-tags tags" id="tags">
            <span class="tag-title">标签：</span>
            <?php if(is_array($que['tag_name'])): foreach($que['tag_name'] as $key=>$vo): ?><span class="tag"><a href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$que['id']));?>" target="_blank"><?php echo ($vo["tag_name"]); ?></a></span><?php endforeach; endif; ?>
            
            <a  id='edittag' class="post-edit post-tags-edit">
                <?php if($que['tag_name'] == '' ): ?>给问题加个标签，让更多的人看到它
                <?php else: ?>
                    修改<?php endif; ?>
            </a>
        </p>
        <div class="post-detail gbbcode-content" id="articleContent">
            <div id="questionDesc" id="submsg">
                <?php echo ($que["sub_msg"]); ?>
            </div>
            <?php if($uid == $que["user_id"] ): ?><a class="post-edit post-tags-edit" id="editmsg">
                    <span class="gicon-profile"></span>修改
                </a><?php endif; ?>
            <form action="<?php echo U('Home/Question/editmsg');?>" method="post">
                <input type="hidden" name="subid" value="<?php echo ($que['id']); ?>">
                <div  class="post-title-edit" id="msgsub" style="display:none">
                    <p>
                        <script id="editor1" name="sub_msg" type="text/plain" style="width:650px;height:400px;"><?php echo ($que["sub_msg"]); ?></script>
                    </p>
                    <p class="title-txt-do">
                        <a href="javascript: void 0;" class="cancel cancel-title-edit">取消</a>
                        <button class="gnbtn-primary edit-title-push" id="commit">确认</button>
                    </p>
                </div>
            </form>
        </div>
        <div class="cmtsBody" id="questionCmts">
            <div class="cmts-t cmtsTitle">

                <p class="gfr">
                    <span class="post-user">
                        <a id="articleAuthor" href="" target="_blank" >
                            <?php echo ($que["User_Nickname"]); ?>
                        </a>
                    </span>
                </p>
                
            </div>
            <div class="cmtsList ghide cmts-bd gclear">
                <b class="arrow_up">
                    <s class="arrow_up"></s>
                </b>
                <div class="cmts-do cmtsDo">
                    <textarea name="cmt" rows="10" cols="30" class="gbtxt"></textarea>
                    <p>
                        <a href="javascript:void 0;" class="cancel-cmt" data-operation="cancelCmt">取消</a>
                        <input type="submit" value="讨论" class="gnbtn-primary" data-operation="newCmt" data-question="1" data-id="197525" data-type="question" data-login="yes">
                    </p>
                </div>
                <ul class="cmts-list"></ul>
            </div>
            
            
        </div>

    </div>
    <div class="document-do">
        <div id="share" class="gfl share-box bdsharebuttonbox" data-tag="shareMain">
        </div>
        <div class="gfr">
                <?php if($que["user_id"] != $uid ): ?><a id="report" href="javascript:void(0)" class="red-link ghide" data-msgid="<?php echo ($que["id"]); ?>" data-uid="<?php echo ($que["user_id"]); ?>" data-type="1" data-title="<?php echo ($que["sub_name"]); ?>" <?php if($que["User_pic"] == '' ): ?>data-img="/Public/Home/assets/Images/handimg.jpg" <?php else: ?> data-img="/Public/<?php echo ($que["User_pic"]); ?>"<?php endif; ?> style="display: inline;">
                        举报
                    </a><?php endif; ?>
            <div class="basket-op">
                <span class="gsplit">|</span>
                <div id="basketTip" class="basket-tip-box" style="display: none;">
                    <div class="basket-tip">
                    + 加入我的果篮
                    <b class="gnarrow-up"></b>
                </div>
                </div>
            </div>
            
            <span class="focused-num" id="followNum"><span id="num"><?php echo ($que["follow_num"]); ?></span>人关注</span>
            <div style="display:inline;">
                <!-- 判断有没有登入 -->
                <?php if($uid == '' ): ?><a id="follow" class="gnbtn-plat follow-btn" href="<?php echo U('Home/Login/index');?>">
                        <span>+</span>关注
                    </a>
                <?php elseif($follow == 1): ?>
                    <a id="isfollow" subid='<?php echo ($que["id"]); ?>' class="gnbtn-primary" style="background:white;color:#A5A5A5;border:none;">
                        <span style="font-size:12px;color:red;margin-right:5px;">-</span>取消
                    </a>

                <?php else: ?>
                    <a id="follow" class="gnbtn-plat follow-btn" subid="<?php echo ($que["id"]); ?>">
                        <span>+</span>关注
                    </a><?php endif; ?>
            </div>
            
        </div>
    </div>

    <div class="answers" id="answers">
        
        <div class="answers-do">
            <span class="answers-num gfl">
                <span class="ansnum"><?php echo ($que["answer_num"]); ?></span>个答案
            </span>
        </div>
        <?php if($uans != '' ): ?><div class="answer gclear " >
                <div class="answer-digg digg">
                    <div class="answer-digg-box">
                        <div class="answer-digg-wrap">
                            <a id="zan" ansid="<?php echo ($uans["ans_id"]); ?>" data="1" href="javascript:void 0;" class="answer-digg-up" uname="<?php echo ($uinfo["User_Nickname"]); ?>" uid="<?php echo ($uid); ?>"><span class="answer-digg-num"><?php echo ($uans["zan"]); ?></span><span style="float: left;font:12px '宋体';color:#6D6C6C;">赞</span></a>
                        </div>
                    </div>
                </div>
                <div class="answer-r">
                    <div class="answer-t">
                        <a class="answer-img" href="" title="Ent" data-ukey="y4l9hp" target="_blank">
                            <?php if($uans["User_pic"] == '' ): ?><img width="24" height="24" src="/Public/Home/assets/Images/handimg.jpg">
                            <?php else: ?>
                                <img width="24" height="24" src="/Public/<?php echo ($uans["User_pic"]); ?>"><?php endif; ?>
                        </a>
                        <p class="answer-usr">
                            <a class="answer-usr-name" href="" title="Ent" target="_blank" data-ukey="y4l9hp"><?php echo ($uans["User_Nickname"]); ?></a>
                          
                        </p>
                        <a name="uans" class="answer-date"><?php echo ($uans["ans_time"]); ?></a>
                    </div>
                    <div class="answer-diggers diggers" id="zanname">
                        <span>支持者：</span>
                        <?php if(is_array($uans['support'])): foreach($uans['support'] as $key=>$vo): if(is_array($vo)): foreach($vo as $key=>$v): ?><span>
                                    <a href=""><?php echo ($v["User_Nickname"]); ?></a>
                                </span><?php endforeach; endif; endforeach; endif; ?>
                    </div>
                    <div class="answer-txt answerTxt gbbcode-content" style="display:block;">
                        <?php echo ($uans["ans_msg"]); ?>
                    </div>
                    <div class="post-title-edit" id="answer" style="display:none">
                        <form action="<?php echo U('Home/Question/editans');?>" method="post">
                            <input type="hidden" name="ansid" value="<?php echo ($uans["ans_id"]); ?>">
                            <input type="hidden" name="subid" value="<?php echo ($que["id"]); ?>">
                            <p>
                                <script id="editor3" name="ansname" type="text/plain" style="width:610px;height:400px;"><?php echo ($uans["ans_msg"]); ?></script>
                            </p>
                            <p class="title-txt-do">
                                <a href="javascript: void 0;" class="cancel cancel-title-edit">取消</a>
                                <button class="gnbtn-primary edit-title-push" id="ansmsg">确认</button>
                            </p>
                        </form>
                    </div>
                    <div class="cmts cmtsBody">
                        <div class="cmts-t cmtsTitle">
                            <p class="gfl">
                                <a id="delans" href="javascript:void 0;" subid="<?php echo ($que["id"]); ?>" ansid="<?php echo ($uans["ans_id"]); ?>">删除</a>
                                
                                <span class="split">|</span>
                                <a href="javascript:void 0;" id="editans">修改</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div><?php endif; ?>
        
        <?php if($answers != '' ): if(is_array($answers)): foreach($answers as $key=>$vo): ?><div class="answer gclear " >
                    <div class="answer-digg digg">
                        <div class="answer-digg-box">
                            <div class="answer-digg-wrap">
                                <a id="zan" ansid="<?php echo ($vo["ans_id"]); ?>" data="0" href="javascript:void 0;" class="answer-digg-up" uname="<?php echo ($uinfo["User_Nickname"]); ?>" uid="<?php echo ($uid); ?>"><span class="answer-digg-num"><?php echo ($vo["zan"]); ?></span><span class="zan">赞</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="answer-r">
                        <div class="answer-t">
                            <a class="answer-img" href="" title="Ent" data-ukey="y4l9hp" target="_blank">
                                <?php if($vo["User_pic"] == '' ): ?><img width="24" height="24" src="/Public/Home/assets/Images/handimg.jpg">
                                <?php else: ?>
                                    <img width="24" height="24" src="/Public/<?php echo ($vo["User_pic"]); ?>"><?php endif; ?>
                            </a>
                            <p class="answer-usr">
                                <a class="answer-usr-name" href="" title="Ent" target="_blank" data-ukey="y4l9hp"><?php echo ($vo["User_Nickname"]); ?></a>
                              
                            </p>
                            <span class="answer-date"><?php echo ($vo["ans_time"]); ?></span>
                        </div>
                        <div class="answer-diggers diggers" id="zanname">
                            <span>支持者：</span>
                            <?php if(is_array($vo['sup'])): foreach($vo['sup'] as $key=>$val): ?><span>
                                        <a href=""><?php echo ($val["User_Nickname"]); ?></a>
                                    </span><?php endforeach; endif; ?>
                        </div>
                        <div class="answer-txt answerTxt gbbcode-content" style="display:block;">
                            <?php echo ($vo["ans_msg"]); ?>
                        </div>
                        <div class="cmts cmtsBody">
                            <div class="cmts-t cmtsTitle">
                                <p class="gfr">
                            
                            <a href="javascript:void(0)" id="report" class="red-link ghide" data-msgid="<?php echo ($vo["ans_id"]); ?>" data-uid="<?php echo ($vo["user_id"]); ?>" data-type="2" data-title="<?php echo ($vo["ans_msg"]); ?>" <?php if($que["User_pic"] == '' ): ?>data-img="/Public/Home/assets/Images/handimg.jpg" <?php else: ?> data-img="/Public/<?php echo ($vo["User_pic"]); ?>"<?php endif; ?> style="display: inline;">举报</a>
                            <span class="split answer-hover">|</span>
                        </p>
                            </div>
                        </div>
                    </div>
                </div><?php endforeach; endif; endif; ?>
        <div class="post_commet addans" id="answerReplyer">
            <h3 id="replyer">添加回答</h3>
            <?php if($uid == '' ): ?><p>请 <a rel="nofollow" href="<?php echo U('Home/Login/index');?>">登录</a> 后回答问题，你也可以用以下帐号直接登录</p>
            <?php elseif(($uid != '') AND ($isans == '')): ?>
                <div class="reply-box" id="addanswer"><p class="reply-info">写答案…</p></div>
            <?php elseif(($uid != '') AND ($isans != '')): ?> 
                <p id="answered">
                    您已经回答过这个问题了，如果有新的想法，可以修改<a href="#uans">现有答案</a>。
                </p><?php endif; ?>
            
        </div>
        <form action="<?php echo U('Home/Question/addanswer');?>" method="post" >
           <div style="display:none;height:465px;" id="addan">

                <input type="hidden" name="sub_id" value="<?php echo ($que["id"]); ?>">
                <p>
                    <script id="editor2" name="answer" type="text/plain" style="width:650px;height:400px;"></script>
                </p>
                <button class="gnbtn-primary edit-title-push" style="float: right;margin:5px 0;">发布</button>
           </div>
        </form>
        <div class="main-recommend-questions gclear">
            <div class="recommend-best-question gfl" id="recommendQuestionBest">
                <h2>最佳问答</h2>
                <ul>
                    <?php if(is_array($optsub)): foreach($optsub as $key=>$vo): ?><li>
                            <a href="<?php echo U('Home/Question/subject',array('id'=>$vo['id']));?>" class="gellipsis" target="_blank">
                                <?php echo ($vo["sub_name"]); ?>
                            </a><?php echo ($vo["answer_num"]); ?>回答
                        </li><?php endforeach; endif; ?>
                    
                    
                </ul>
            </div>
            <div class="recommend-relation-question gfr" id="recommendQuestion">
                <h2>热门问答</h2>
                <ul>
                    <?php if(is_array($hotsub)): foreach($hotsub as $key=>$vo): ?><li>
                            <a href="<?php echo U('Home/Question/subject',array('id'=>$vo['id']));?>" class="gellipsis"  target="_blank"><?php echo ($vo["sub_name"]); ?></a><?php echo ($vo["answer_num"]); ?>回答
                        </li><?php endforeach; endif; ?>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
        <div class="gside">
            <div id="bdadm-559153" class="side-advert"></div>

            <div class="side-title">
                <h2>相关问答</h2>
            </div>
            <ul class="side-question-titles" id="recommendQuestionRelated">
                <?php if(is_array($question)): foreach($question as $key=>$vo): ?><li>
                        <a href="<?php echo U('Home/Question/subject',array('id'=>$vo['id']));?>" target="_blank">
                           <?php echo ($vo["sub_name"]); ?>
                        </a>
                        <?php echo ($vo["answer_num"]); ?>回答
                    </li><?php endforeach; endif; ?>
            </ul>
            
        </div>
    </div> 
</div>
<!-- 举报 -->
<div id="blockWindow" class="gui-block" style="position: fixed; top: 140px; left: 458.5px; display: none;">
    <div class="gui-block-b"> 
        <h4 class="gui-block-hd">                                   
            <span id="blockTitle">举报答案</span>                                   
            <a class="blockClose gui-block-close" title="关闭">X</a>                               
        </h4>                               
        <div id="blockContent" class="gui-block-bd">
            <div class="block-report-content">                                                  
                <img src="" width="48" height="48">
                <span>
                </span>
                <input type="hidden" name="buid" value="">                                              
                <input type="hidden" name="type" value="">                                              
                <input type="hidden" name="msgid" value="">                                              
            </div>                     
            <div class="block-report-reasons">                         
                <h5>举报理由：</h5>                         
                <ul id="reportReasons">                             
                    <li>
                        <input type="radio" id="reason1" name="reason" value="垃圾广告">
                        <label for="reason1">垃圾广告</label>
                    </li>                             
                    <li>
                        <input type="radio" id="reason2" name="reason" value="敏感或淫秽色情信息">
                        <label for="reason2">敏感或淫秽色情信息</label>
                    </li>                             
                    <li>
                        <input type="radio" id="reason3" name="reason" value="人身攻击">
                        <label for="reason3">人身攻击</label>
                    </li>                             
                    <li>
                        <input type="radio" id="reason4" name="reason" value="内容涉及抄袭及版权问题">
                        <label for="reason4">内容涉及抄袭及版权问题</label>
                    </li>                             
                    <li class="block-report-reasons-o">
                        <input type="radio" id="reason5" name="reason" value="0">
                        <label for="reason5">其他理由</label>
                        <input type="text" class="block-report-reasons-txt">
                    </li>                         
                </ul>                     
            </div>                     
            <div class="block-report-do">                         
                <a id="reportSure">提交</a><a id="reportCancel">取消</a>
            </div>
        </div>                           
    </div>                       
</div>
    
	<script src="/Public/Home/assets/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
        var id='';
        var arr=[];
        // 绑定举报提交单击事件
        $('#reportSure').click(function(){
            //获取举报信息
            var title=$('.block-report-content').find('span').html();//举报内容
            var buid=$('.block-report-content').find('input:eq(0)').val();//被举报用户id
            var type=$('.block-report-content').find('input:eq(1)').val();//举报类型
            var msgid=$('.block-report-content').find('input:eq(2)').val();//被举报内容id
            // 获取举报理由
            var rea=$('input[type="radio"]:checked').val();
            // 获取输入框信息
            var other=$('.block-report-reasons-txt').val();

            // 判断是否选择其他理由
            if(rea==0){
                // 判断输入框是否为空
                if(other==''){
                    alert('请输入举报理由');
                    return false;
                }
            }
            var url="<?php echo U('Home/Report/submit');?>";
            // 发送ajax
            $.post(url,{title:title,buid:buid,rea:rea,other:other,type:type,msgid:msgid},function(data){
                if(data==1){
                    $('#blockWindow').css('display','none');
                    alert('举报成功');
                }else{
                    alert('举报失败,请登入');
                }
            })
        })
        // 绑定举报
        $('#report').live('click',function(){
            // 获取相关信息
            var title=$(this).attr('data-title');//举报内容
            var buid=$(this).attr('data-uid');//被举报用户id
            var type=$(this).attr('data-type');//举报类型
            var img=$(this).attr('data-img');//被举报用户头像
            var msgid=$(this).attr('data-msgid');//被举报内容id
            // 初始化信息
            $('.block-report-reasons-txt').val('');
            $('input[name="reason"]').attr('checked','');

            // 判断举报类型
            if(type==1){
                $('#blockTitle').attr('type','1');
                $('#blockTitle').html('举报问题');
            }else if(type==2){
                $('#blockTitle').attr('type','2');
                $('#blockTitle').html('举报答案');
            }
            // 放入用户头像
            $('.block-report-content').find('img').attr('src',img);
            // 放入举报信息   
            $('.block-report-content').find('span').html(title);
            // 放入被举报用户id
            $('.block-report-content').find('input:eq(0)').val(buid);
            // 放入举报类型
            $('.block-report-content').find('input:eq(1)').val(type);
            // 放入被举报内容id
            $('.block-report-content').find('input:eq(2)').val(msgid);

            $('#blockWindow').css('display','block');
        })
        // 关闭举报页面
        $('.gui-block-close').click(function(){
            $('#blockWindow').css('display','none');
        })
        // 取消举报页面
        $('#reportCancel').click(function(){
            $('#blockWindow').css('display','none');
        })
        // 删除自己的答案
        $('#delans').click(function(){
            if(confirm('确认删除')){
                var ansid=$(this).attr('ansid');
                var subid=$(this).attr('subid');
                var num=parseInt($('.ansnum').html());
                var url="<?php echo U('Home/Question/delans');?>";
                var ans=$(this);
                $.post(url,{ansid:ansid,subid:subid},function(data){
                    if(data==1){
                        $('.addans').html('<h3 id="replyer">添加回答</h3><div class="reply-box" id="addanswer"><p class="reply-info">写答案…</p></div>');
                        $('.ansnum').html(num-1);
                        ans.parents('.answer').remove();
                    }else{
                        alert('删除失败');
                    }
                })
            }
        })
        // 修改自己的答案
        $('#editans').click(function(){
            $(this).parents('.answer').find('.answerTxt').css('display','none');
            $(this).parents('.answer').find('#answer').css('display','block');
        })
        // 绑定支持单击事件
        $('#zan').live('click',function(){
            // 获取登入用户id
            var uid=$(this).attr('uid');
            // 获取登入用户名
            var uname=$(this).attr('uname');
            // 获取关注数量
            var num=parseInt($(this).find('span:eq(0)').html());
            // 获取答案id
            var ansid=$(this).attr('ansid');
            // 设置url
            var url='<?php echo U("Home/Question/zan");?>';
            var data=$(this).attr('data');
            var zan=$(this);
            if(data==1){
                alert('不能给自己的回答点赞')
            }else{
                $.post(url,{ansid:ansid},function(data){
                    if(data==1){
                        zan.parents('.answer').find('.diggers').find('span:eq(0)').after('<span><a href="">'+uname+'</a></span>');
                        num=num+1;
                        zan.find('span:eq(0)').html(num);
                    }else{
                        num=num-1;
                        zan.find('span:eq(0)').html(num);
                    }
                })
            }
        }) 
        // 绑定添加答案单击事件
        $('#addanswer').live('click',function(){
            $(this).css('display','none');
            $('#addan').css('display','block');
        })
        // 绑定添加说明单击事件
        $('#explain').click(function(){
        	$(this).css('display','none');
        	$('.editor').css('display','block');
        })
        // 绑定标签input失去焦点事件
        $('#tagadd').blur(function(){
        	var url="<?php echo U('Home/Question/ajaxtag');?>";
        	// 获取问题的值
        	var tags=$(this).val();
        	var url='<?php echo U("/Home/Question/addtag");?>';
        	$.post(url,{tag_name:tags},function(data){
        		if(data!=''){
        			// 判断数组中是否有该标签id
        			if(arr.indexOf(data)==-1){
        				// 将id压入数组
        				arr.push(data);
        				id=arr.join(',');
        				$('#tagContent').append('<span class="tag"><a href="">'+tags+'</a><a href="javascript: void 0;" class="gnicon-close-small" title="移除标签" id="del" num="'+data+'">X</a></span>');
        				$('#tagid').html('<input type="hidden" name="tags" value="'+id+'">');
        			}
        		}
        	})
        	
        })
        // 绑定关注单击事件
        $('#follow').live('click',function(){
            // 获取关注数量
            var num=parseInt($('#num').html());
            // 获取标签id
            var subid=$(this).attr('subid');
            // 设置url
            var url='<?php echo U("Home/Question/follow");?>';
            var follow=$(this);
            $.get(url,{sub_id:subid},function(data){
                if(data==1){
                    follow.parent('div').html('<a id="isfollow" subid='+subid+' class="gnbtn-primary" style="background:white;color:#A5A5A5;border:none;"><span style="color:red;">-</span>取消</a>');
                    $('#num').html(num+1);
                }else{
                    alert('关注失败');
                }
            })
        })
       
        // 绑定取消关注单击事件
        $('#isfollow').live('click',function(){
            // 获取关注数量
            var num=parseInt($('#num').html());
            // 获取标签id
            var subid=$(this).attr('subid');
            // 设置url
            var url='<?php echo U("Home/Question/isfollow");?>';

            var isfollow=$(this);
            $.get(url,{sub_id:subid},function(data){
                if(data==1){
                    isfollow.parent('div').html('<a id="follow" class="gnbtn-primary" subid='+subid+'><span>+</span>关注</a>');
                    $('#num').html(num-1);
                }else{
                    alert('取消失败');
                }
            })
        })
	    // 绑定修改问题名字单击事件
        $('#editname').click(function(){
            $(this).parent('div').css('display','none');
            $('#subname').css('display','block');
        })
        // 绑定修改问题标签单击事件
        $('#edittag').click(function(){
            $(this).parent('p').css('display','none');
            $('#tagname').css('display','block');
        })
        // 绑定修改问题描述单击事件
        $('#editmsg').click(function(){
            $(this).siblings('div:eq(0)').css('display','none');
            $('#msgsub').css('display','block');
        })
        // 绑定取消按钮单击事件
        $('.cancel').click(function(){
            window.location.reload();
        })
        // 绑定问题名字确定单击事件
        $('#commit').click(function(){
            var name=$('#newname').val();
            if(name==''){
                alert('不能为空');
                return false;
            }
        })
        // 绑定标签input失去焦点事件
        $('#tagAdd').blur(function(){
            var url="<?php echo U('Home/Question/edittag');?>";
            // 获取标签的值
            var tags=$(this).val();
            var subid=$(this).attr('subid');
            $.post(url,{tag_name:tags,subid:subid},function(data){
                if(data!=''){
                    var tag="<?php echo U('Home/Quetag/tag');?>?tag_id="+data;
                    $('#tagContent').append('<span class="tag"><a href="'+tag+'" target="__blanck">'+tags+'</a><a href="javascript: void 0;" class="gnicon-close-small" title="移除标签" id="del" num="'+data+'" >X</a></span>');
                }
            })
        })
        // 删除标签
        $('#del').live('click',function(){
            // 获取标签id
            var tagid=$(this).attr('num');
            // 获取问题id
            var subid=$(this).attr('subid')
            var url="<?php echo U('Home/Question/deltag');?>";
            var del=$(this);
            $.post(url,{tagid:tagid,subid:subid},function(data){
                if(data==1){
                    del.parent('span').remove();  
                }else{
                    alert('删除失败');
                }
            })
        })
	</script>
	<style type="text/css">
        #editname:hover{cursor:pointer;}
        #reportSure:hover{cursor:pointer;}
        #reportCancel:hover{cursor:pointer;}
        .gui-block-close:hover{cursor:pointer;}
        #editmsg:hover{cursor:pointer;}
        #cancel:hover{cursor:pointer;}
        #edittag:hover{cursor:pointer;}
        #follow:hover{cursor:pointer;}
		#isfollow:hover{cursor:pointer;}
        button:hover{cursor:pointer;}
        #tagadd{width:150px;}
        #save{width: 60px;height: 30px;background: #50A200;
            color:white;text-align: center;line-height:30px;border:none;
            font:14px 'Microsoft Yahei';}
        #tagcancel{color:#7D7C7C;margin:0 5px;}
        #save:hover{background:#26A130;}
        .zan{
            float: left;font:12px '宋体';color:#6D6C6C;
        }
	</style>	
	<script type="text/javascript">
	    //实例化编辑器
	    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	    var ue = UE.getEditor('editor1',{
	     toolbars: [
	         ['fullscreen', 'source', 'undo', 'redo'],
	         ['bold', 'italic','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc','simpleupload','insertimage']
	     ]
	    });
        var ue = UE.getEditor('editor2',{
         toolbars: [
             ['fullscreen', 'source', 'undo', 'redo'],
             ['bold', 'italic','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc','simpleupload','insertimage']
         ]
        });
        var ue = UE.getEditor('editor3',{
         toolbars: [
             ['fullscreen', 'source', 'undo', 'redo'],
             ['bold', 'italic','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc','simpleupload','insertimage']
         ]
        });
	</script>



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