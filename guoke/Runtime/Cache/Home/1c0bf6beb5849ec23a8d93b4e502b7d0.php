<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html class="no-js screen-scroll">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta name="Keywords" content="果壳问答, ask, 果壳,果壳网,科技,泛科技,智趣,生活,科普"/>
        <meta name="Description" content="汇集知识碎片，创造有价值的答案"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />
        
	<title>标签 <?php echo ($res["tag_name"]); ?> | 问答 | 果壳网 科技有意思</title>

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
				<li >
				    <a href="<?php echo U('Home/Question/index');?>">问答首页</a>
				</li>
				<li >
				    <a href="<?php echo U('Home/Question/question');?>">发现问答</a>
				</li>
				<li >
				    <a href="<?php echo U('Home/Question/waitque');?>/">等待回答</a>
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
	            <a data-gaevent="ask_nav_button_answer:ask" class="gnbtn-primary">我要回答</a>
	        </div>
	    </div>
	</div>




	<!-- 编辑头像 -->
	<div id="blockWindow" class="gui-block" style="position: fixed; top: 43px; left: 458.5px; display: none;">
		<div class="gui-block-b">                               
			<h4 class="gui-block-hd">                         
				<span id="blockTitle">编辑图片</span>                                   
				<a class="blockClose gui-block-close" href="#" title="关闭">X</a>
			</h4>                               
			<div id="blockContent" class="gui-block-bd">
				<div id="avatar">                                    
					<p class="gui-block-bd-hd">
						<span class="gui-block-bd-hd-title">选择图片：</span>
						<span class="gui-block-bd-hd-desc">图片大小不超过1M</span>
					</p>
					<form action="<?php echo U('Home/Quetag/editPic');?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="tag_id" value="<?php echo ($res["tag_id"]); ?>">
						<p class="gui-block-uploader" style="margin:10px 0;">
							<input type="file" size="32" class="" name="tp" id="trueFile">         
						</p>                                    
						<p class="gui-block-bd-do">                                        
							<button id="changeImg" style="color:#333" class="gnbtn-primary" type="submit">上传</button>                                        
							<a href="#" class="blockClose upload-avatar-cancel" style="margin-left:5px;">取消</a>
						</p>                                    
					</form>                                    
					<p class="gui-block-error" id="avatarError">&nbsp;</p>                                
				</div>
			</div>                           
		</div>                       
	</div>
	<div class="gwrap ask-tagcontent-page">
	        
	<div class="gmain">
	    <div itemscope itemtype="http://rdfs.org/sioc/type#Tag" class="main-info" id="definition">
	        <div class="main-info-sub">
	            <div class="main-info-avatar">
	            	<?php if($res["tag_img"] == '' ): ?><img src="/Public/Home/assets/Images/tagimg.png" id="tagAvatar" alt="生活" width="48" height="48">
	            	<?php else: ?>
		                <img src="/Public<?php echo ($res["tag_img"]); ?>" id="tagAvatar" alt="生活" width="48" height="48"><?php endif; ?>
					<?php if($uid != '' ): ?><a href="javascript:void 0;" id="editPic">编辑图片</a><?php endif; ?>
	            </div>
	            <div class="main-info-title">
	                <h1 id="tagName"><?php echo ($res["tag_name"]); ?></h1>
	                <p id="followCounter"><span id="num"><?php echo ($res["follow_num"]); ?></span>人关注</p>
	                <div>
                        <!-- 判断有没有登入 -->
                        <?php if($uid == '' ): ?><a class="gnbtn-primary" href="<?php echo U('Home/Login/index');?>">
                	        	<span>+</span>关注
                        	</a>
                        <!-- 判断用户是否关注 -->
                        <?php elseif($res["isfollow"] == 1): ?>
                        	<a id="isfollow" tagid='<?php echo ($res["tag_id"]); ?>' class="gnbtn-primary" style="background:white;color:#A5A5A5;border:none;">
                        		<span style="color:red;">-</span>取消
                        	</a>
                        <?php else: ?>
                            <a id="follow" class="gnbtn-primary" tagid="<?php echo ($res["tag_id"]); ?>">
                	        	<span>+</span>关注
                        	</a><?php endif; ?>
	                </div>
	            </div>
	            
	        </div>
	        <div class="main-info-board">
	            <div id="tagmsg" class="main-board-editor">
	            	<?php echo ($res["tag_msg"]); ?>
	            </div>
	        	<form action="<?php echo U('Home/Quetag/editmsg');?>" method="post">
	        		<input type="hidden" name="tag_id" value="<?php echo ($res["tag_id"]); ?>">
		            <div id="content" style="display:none;">
		            	<script id="editor" name="tag_msg" type="text/plain" style="width:600px;height:400px;"><?php echo ($msg); ?></script>
		            </div>
		            <div class="main-info-board" id="save" style="display:none;">
	                	<p class="main-board-do" id="boardDo" style="display: block;">
	                		<a class="cancel-edit" id="cancel">取消</a>
	                		<button class="gnbtn-primary">保存</button>
	                	</p>
	                </div>
	        	</form>
		        <div class="main-info-ft" id="tagFt">
	        		<?php if($uid != '' ): ?><a id="eidt">修改描述</a><?php endif; ?>
	            </div>
	        </div>
	    </div>
	    <ul class="gntabs">
		    <li <?php if($state == 1): ?>class="gtabs-curr"<?php endif; ?> ><a href="<?php echo U('Home/Quetag/tag',array('num'=>1,'tag_id'=>$res['tag_id']));?>">最佳问答</a></li>
		    <li <?php if($state == 2): ?>class="gtabs-curr"<?php endif; ?> ><a href="<?php echo U('Home/Quetag/tag',array('num'=>2,'tag_id'=>$res['tag_id']));?>">正在讨论</a></li>
		    <li <?php if($state == 3): ?>class="gtabs-curr"<?php endif; ?> ><a href="<?php echo U('Home/Quetag/tag',array('num'=>3,'tag_id'=>$res['tag_id']));?>">等待回答</a></li>
	    </ul>
	    <ul class="ask-list-cp">
	    	<!-- 该标签下暂无问题 -->
	    	<?php if($no != '' ): echo ($no); endif; ?>
	        <?php if(is_array($que)): foreach($que as $key=>$vo): ?><li>
		        <div class="ask-hot-nums">
		            <p class="ask-focus-nums">
		            <span class="num"><?php echo ($vo["follow_num"]); ?></span>关注
		            </p>
		            <p class="ask-answer-nums">
		            <span class="num"><?php echo ($vo["answer_num"]); ?></span>答案
		            </p>
		            
		        </div>
		        <div class="ask-list-detials">
		            <h2><a target="_blank" href="<?php echo U('Home/Question/subject',array('id'=>$vo['id']));?>"><?php echo ($vo["sub_name"]); ?></a></h2>
		            <div class="ask-list-legend">
		               <p class="ask-list-summary">
		               <?php echo ($vo["sub_msg"]); ?>
		               </p>
		                <p class="ask-list-tags">
		                标签：
		                <?php if(is_array($vo['tag_name'])): foreach($vo['tag_name'] as $key=>$val): ?><a target="_blank" href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$val['tag_id']));?>" class="tag"><?php echo ($val["tag_name"]); ?></a><?php endforeach; endif; ?>
		                </p>
		            </div>
		        </div>
		        </li><?php endforeach; endif; ?>
	    </ul>
		<ul class="gpages">
	        <div id="pages" style="margin-left:300px;">
	           <?php echo ($pages); ?>
	        </div>
		</ul>

	</div>

	<div class="gside">
	    <div class="side-title"> 
	        <h2>相关标签</h2>
	    </div>
	    <ul class="side-tags">
	        <?php if(is_array($relevant)): foreach($relevant as $key=>$vo): ?><li>
		        	<a href="<?php echo U('Home/Quetag/tag',array('tag_id'=>$vo['tag_id']));?>">
		        		<?php if($vo["tag_img"] == '' ): ?><img src="/Public/Home/assets/Images/tagimg.png" width="24" height="24">
		        		<?php else: ?> 
			        		<img src="/Public<?php echo ($vo["tag_img"]); ?>" width="24" height="24"><?php endif; ?>
		        		<?php echo ($vo["tag_name"]); ?>
		        	</a>
		        	<?php echo ($vo["sub_num"]); ?>个问题
		        </li><?php endforeach; endif; ?>
	        
	    </ul>
	    <div class="side-title"> 
		    <h2>该标签下贡献者</h2>
	    </div>
	    <ul class="side-tags">
	        <li>
                <a href="http://www.guokr.com/ask/i/0622432893/"><img src="Picture/mnnaktp5usrrhhviem3inle1tnuw-rnclmhdgtko3vwgaaaaoaaaaepq.jpg" width="24" height="24">流氓神猫</a>回答1024个问题
            </li>
	        
	        <li>
                <a href="http://www.guokr.com/ask/i/1209729230/"><img src="Picture/rdr8rtj5fk47a4qjfztqazfh4ncr4thcmvqy_5f82ragaaaaoaaaaepq.jpg" width="24" height="24">I老蔡</a>回答871个问题
            </li>
	        
	    </ul>
        <div class="side-title">
            <h2>近期活跃用户</h2>
        </div>
        <ul class="side-users">
            <li>
                <a href="http://www.guokr.com/ask/i/0728599531/"><img src="Picture/gzat68wvqnh9hntfmw0knfyixixco2hgfvkwlyfo54igaaaaoaaaaepq.jpg" width="24" height="24">风荷晚香</a>获得41个支持
            </li>
            
            <li>
                <a href="http://www.guokr.com/ask/i/1248922694/"><img src="Picture/2rlrv81nv3zmojk93apnhpjwovhwk_84xlbl7ll3-vugaaaaoaaaaepq.jpg" width="24" height="24">Articdoctor</a>获得69个支持
            </li>
        </ul>
	</div>
	<script src="/Public/Home/assets/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		// 绑定修改描述事件
		$('#eidt').click(function(){
			$('#content').css('display','block');
			$('#save').css('display','block');
			$(this).css('display','none');
			$('#tagmsg').css('display','none');
		})
		// 绑定取消单击事件
		$('#cancel').click(function(){
			$('#content').css('display','none');
			$('#save').css('display','none');
			$('#eidt').css('display','block');
			$('#tagmsg').css('display','block');
		})
		// 绑定关注单击事件
		$('#follow').live('click',function(){
			// 获取关注数量
			var num=parseInt($('#num').html());
			// 获取标签id
			var tagid=$(this).attr('tagid');
			// 设置url
			var url='<?php echo U("Home/Quetag/follow");?>';
			var follow=$(this);
			// 发送ajax
			$.get(url,{tag_id:tagid},function(data){
				if(data==1){
					follow.parent('div').html('<a id="isfollow" tagid='+tagid+' class="gnbtn-primary" style="background:white;color:#A5A5A5;border:none;"><span style="color:red;">-</span>取消</a>');
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
			var tagid=$(this).attr('tagid');

			// 设置url
			var url='<?php echo U("Home/Quetag/isfollow");?>';

			var isfollow=$(this);
			$.get(url,{tag_id:tagid},function(data){
				if(data==1){
					isfollow.parent('div').html('<a id="follow" class="gnbtn-primary" tagid='+tagid+'><span>+</span>关注</a>');
					$('#num').html(num-1);
				}else{
					alert('取消失败');
				}
			})
		})
		// 绑定编辑头像
		$('#editPic').click(function(){
			$('#blockWindow').css('display','block');
		})
		// 关闭上传头像
		$('.blockClose').click(function(){
			$('#blockWindow').css('display','none');
		})
	</script>
	<style type="text/css">
		.gnbtn-primary:hover{cursor:pointer;}
		#eidt:hover{cursor:pointer;}
		#cancel:hover{cursor:pointer;}
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
	<script type="text/javascript">
	    //实例化编辑器
	    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	    var ue = UE.getEditor('editor',{
	     toolbars: [
	         ['fullscreen', 'source', 'undo', 'redo'],
	         ['bold', 'italic','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
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