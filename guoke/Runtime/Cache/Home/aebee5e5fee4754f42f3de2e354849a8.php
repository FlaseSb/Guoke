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




<div class="gwrap ask-new-page" style="margin-bottom:200px;">
    <div class="gmain">
            
    <div>
        <div class="page-title">
            <h2>提新问题</h2>
        </div>
        <form id="newAsk" class="gform" action="<?php echo U('Home/Question/insert');?>" method="POST">
		<div id="tagid"><!-- <input type="hidden" name="tags" value="水"> --></div>
		    <label style="float:left;">问题</label>
			<div style="margin: 40px;">
		        <textarea id="question" name="question" cols="80" rows="5"></textarea>
		    <span class="tip"></span>
		        </div>

        <div class="ask" style="margin:0 0 30px 40px;">
            <a href="javascript:void 0;" id="explain">
            	<span style="font-size: 16px;color:#4ba733;font-weight: bold;margin:0 7px 20px 0;float:left;">+</span>添加补充说明
            </a>
        	<div class="editor" style="display:none;">
				<script id="editor" name="sub_msg" type="text/plain" style="width:580px;height:400px;"></script>
        	</div>
        </div>
        <label style="float:left;margin-right:15px;">标签</label>
        <div style="margin:30px;">
            <div>
                <p class="post-tags tags tags-edit" id="tagContent" >
                     <!-- <span class="tag"><a href="">水</a><a href="javascript: void 0;" class="gnicon-close-small" title="移除标签" data-operation="delete">X</a></span>  -->
                 </p>
                <div class="hide post-autoComp_tags gclear">
                    <div style="position:relative;z-index:1;_zoom:1;float:left;">
	                    <input type="text" id="tagAdd">
                    </div>
                    <span style="font:13px 'Microsoft Yahei';float:left;margin-left: 10px;">给问题打上正确的标签有助于更快获得解答</span>
                </div>
            </div>
        </div>
            <div style="float: right;">
                <input type="submit" class="submit" value="发布">
                <a href="javascript:history.go(-1);" style="color:#3B3B3B;float: right;margin-top:10px;">取消</a>
                <div class="cmts-share" id="checkAlias" style="position: relative;">
			    <span class="tip"></span>
                </div>
            </div>
        </form>
    </div>
        </div>
        
    <div class="gside" style="margin-top:60px;background:#f4f4f4;border-radius:6px;padding:10px;">
        <div >
            <h2 style="color:#88C932;">如何更快得到靠谱答案</h2>
            以下要点可以方便你更快寻求到靠谱答案：
            <ol>
                <li>
                    1.请先搜索是否已经有同类问题得到解决;
                </li>
                <li>
                    2.请在提问时精确描述你的问题，不要写与问题无关的内容，也不要用“详情请入内”之类无意义的语句；
                </li>
                <li>
                    3.果壳er们更热衷于回答能引起思考和讨论的知识性问题；
                </li>
                <li>
                    4.提问时，@相关领域的果壳达人，会让他们更快关注到你的问题。
                </li>
            </ol>
            <a href="http://www.guokr.com/question/446444/">果壳问答详细指南 &gt;</a>
        </div>
    </div>
    </div>
	<style type="text/css">
		.gside div ol li{
			width:270px;
			margin:10px 0;
		}
		.submit{
			float: right;margin:0 30px 0 15px;background:#88C932;color:white;width:70px;height:30px;border:none;
		}
		.submit:hover{
			background:#08A51C;
		}
	</style>
	<script src="/Public/Home/assets/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
	var id='';
	var arr=[];
		// 绑定添加说明单击事件
		$('#explain').click(function(){
			$(this).css('display','none');
			$('.editor').css('display','block');
		})
		// 绑定标签input失去焦点事件
		$('#tagAdd').blur(function(){
			var url="<?php echo U('Home/Question/ajaxtag');?>";
			// 获取标签的值
			var tags=$(this).val();
			var url='<?php echo U("/Home/Question/addtag");?>';
			$.post(url,{tag_name:tags},function(data){
				if(data!=''){
					// 判断数组中是否有该标签id
					if(arr.indexOf(data)==-1){
						var tag="<?php echo U('Home/Quetag/tag');?>?tag_id="+data;
						// 将id压入数组
						arr.push(data);
						id=arr.join(',');
						$('#tagContent').append('<span class="tag"><a href="'+tag+'">'+tags+'</a><a href="javascript: void 0;" class="gnicon-close-small" title="移除标签" id="del" num="'+data+'">X</a></span>');
						$('#tagid').html('<input type="hidden" name="tags" value="'+id+'">');
					}
				}
			})
			
		})
		// 删除标签
		$('#del').live('click',function(){
			// 获取id
			var id=$(this).attr('num');
			// 找出id对应的数组下标
			var key=arr.indexOf(id);
			arr.splice(key,1);
			id=arr.join(',');
			$('#tagid').html('<input type="hidden" name="tags" value="'+id+'">');
			$(this).parent().remove();	
		})

		// 绑定提交单击事件
		$('input[type=submit]').click(function(){
			var question=$('#question').val();
			if(question == ''){
				alert('问题不能为空');
				return false;
			}
		})

	</script>
	<style type="text/css">
		#put:hover{cursor:pointer;}
		.submit:hover{cursor:pointer;}
	</style>	
	<script type="text/javascript">
	    //实例化编辑器
	    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	    var ue = UE.getEditor('editor',{
	     toolbars: [
	         ['fullscreen', 'source', 'undo', 'redo'],
	         ['bold', 'italic','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc','simpleupload', 'insertimage']
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