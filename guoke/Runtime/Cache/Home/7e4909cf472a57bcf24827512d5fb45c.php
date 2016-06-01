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
        
    
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/Content/gui.css">
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/Content/settings.css">


</head>

<body style="background-color:white">
        <div class="gheader-wrap">
            

<div class="gheader-new">
    <div class="gh-wrap">
        <div class="gfl">
            <ul class="gh-nav">
                <li>
                    <a href="<?php echo U('Home/Index/index');?>"><span class="gnicon-home"></span>首页<b ></b></a>
                </li>
                <li>

                    <a href="<?php echo U('Home/Science/index');?>">科学人<b ></b></a>
                </li>
                <li>
                    <a href="<?php echo U('Home/group/index');?>">小组<b ></b></a>
                </li>
                <li>
                    <a href="">问答</a>

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
                <div id="grt"> 
                    <a href="javascript:void 0;" class="other">更多<i class="gnarrow-down"></i></a>
                    <div class="gh-list" id="uiui" style="display: none;">
                                            <ul>
                                                
                    <li class="gh-sm-hidden">
                    <a href="http://fd.zaih.com/fenda" target="_blank">分答</a>
                    </li>

                                                <!-- 
                    <li class="gh-sm-hidden">
                    <a href="http://sex.guokr.com/" target="_blank">知性</a>
                    </li>
                     -->
                                                
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
                </div>
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
        
        <?php if($msgg == true): ?><ul class="gh-notice gfr">
               
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
                                
                            

                            <ul class="information">
                                
                            </ul>
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
                        <img src="<?php echo ($tou); ?>" width="24" height="24">
                        <i class="gnarrow-down"></i>
                    </a>
                    <div class="gh-list" id="outout" style="display:none;">
                        <ul>
                            <li><a data-gaevent="home_nav_i:guokr" href="<?php echo U('Home/Homeinfo/index');?>">我的主页</a></li>
                            <li><a href="http://www.guokr.com/settings/profile/">设置</a></li>
                            <li><a href="" id="goout">退出</a></li>
                        </ul>
                    </div>
                </li>
           </ul>
         
         <?php else: ?> 
            <div class="gh-login">
                <a href="<?php echo U('Home/login/index');?>">登录</a>
                <span class="split">|</span>
                <a href="<?php echo U('Home/Sign/index');?>">注册</a>
            </div><?php endif; ?>
    </div>
</div>
</div>






            <div class="chatbg" style="width:100%;height:100%;position:fixed;z-index:9999;background-color:rgba(200,200,200,0.7);display:none;"></div>
    
            <div class="textareas" style="width:300px;height:85px;position:fixed!important;top:300px;left:620px;z-index:99999;background:#fff;border:1px solid #ccc;display:none;">
             <form style="text-align:center;" action="<?php echo U('Home/Chat/zhaochat');?>" method="post">
               <h4><b>找伙伴聊天</b></h4>
               <input class="repulsehdn" type="hidden" name="uid" value="<?php echo $_SESSION['Home']['Uid']; ?>">
               <input class="textcontent" type="text" name="uname">
               <br>
               <button class="bk-margin-5 btn btn-default repulsebtn" type="submit" style="border:1px #ccc;width:50px;height:20px;margin-top:10px;">确定</button>
             </form>
           </div>


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

                
                
<li >
                <a href="http://www.guokr.com/nuts/">果壳达人</a>
                </li>

                
                
                
<li >
                <a href="http://www.guokr.com/i/0482234484/">我的果壳</a>
                </li>

                
            </ul>
        </div>
    </div>
    <div class="gwrap-m ">
        <div class="gside">
            <h1 class="fchat" style="cursor:pointer">发起聊天</h1>
            <ul class="m-nav">
                
        
            
        
            <!-- 遍历 -->
                
            <?php if(is_array($res)): foreach($res as $key=>$v): ?><li><span class="gicon-draft"></span><a href="<?php echo U('Home/Chat/chat',array('uid'=>$v['uid']));?>"><?php echo ($v["cname"]); ?></a><a href="<?php echo U('Home/Chat/clearchat',array('uid'=>$v['uid']));?>" title="清除会话">X</a></li><?php endforeach; endif; ?>
    
                
        
            
        
    
            </ul>
        </div>
        
    <div class="gmain notice-page">
        <div class="page-titleline">
            <h2>聊天</h2>
        </div>
        
        <div class="chatdiv" style="height:400px;border:1px solid #ccc;overflow:auto;">  
            <?php echo ($meiron); ?> 
            <!-- <?php if(is_array($chatres)): foreach($chatres as $key=>$v): ?><p style="text-algin:left;"><?php echo ($v["chattext"]); endforeach; endif; ?> -->
            <!-- <p style="text-align:left;">fdsafdsa</p>
            <p style="text-align:left;">fdsa</p>
            <p style="text-align:right">gfda</p> -->
        </div>
        <div style="margin-top:15px;">
            <textarea class="textcon" name="" id="" cols="104" rows="5" style="border:1px solid #ccc;"></textarea>
            <button class="chatbtn" type="submit" style="border:1px solid green;background:#47B5E7;width:100px;height:30px;line-height:25px;cursor:pointer;float:right;margin-top:20px;" ><span class="icon-write"></span>发表</button>
        </div>             

    </div>

    </div>
    




<div class="gbottom" style="background:none">
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
            event.stopPropagation();
            var r=$(this).find('#noticeBlock');
            if(r.css('display')== "none" ) {
                    r.show();
            }else{
                    // r.hide();
            }
        });

       $(document).click(function(event){
            var r=$('#noticeBlock');
                    r.hide();
       })

       $(".other").click(function(){
            event.stopPropagation();
            var r=$('#uiui');
            if(r.css('display')== "none" ) {
                    r.show();
            }else{
                    r.hide();
            }
       })

        $(document).click(function(event){
             var r=$('#uiui');
                     r.hide();
        })


        $(".gh-i-me").click(function(){
             event.stopPropagation();
             var r=$('#outout');
             if(r.css('display')== "none" ) {
                     r.show();
             }else{
                     r.hide();
             }
        })

         $(document).click(function(event){
              var r=$('#outout');
                      r.hide();
         })

         $(".gh-i-remind").click(function(){
              event.stopPropagation();
              var r=$('#remindBlock');
              if(r.css('display')== "none" ) {
                      r.show();
              }else{
                      r.hide();
              }
         })

          $(document).click(function(event){
               var r=$('#remindBlock');
                       r.hide();
          })

          $('#goout').click(function(){
                $.ajax({
                  url:"<?php echo U('Home/Public/OutUser');?>",
                  type:'post',
                  async:false,
                  success:function(data){
                    location.replace(location.href);
                 }
                })
                return false;
          })




        //获取用户ID
        var id=<?php echo $_SESSION['Home']['Uid'] ?>;
        //初始化j标志,用来排除当前页面已查出来的数据
        var j='';
        //初始化提醒数量
        var count=0;
        //5秒一循,查询贴子回复等信息
        setInterval(function(){
            //url
            var url="<?php echo U('Home/Public/ajaxinformation');?>";
            //ajax
            $.post(url,{id:id,j:j}, function(data) {
                count+=data.length;
                //更改提醒数量
                $('#noticeNum').html(count);
                //结果集遍历
                for (var i = 0; i < data.length; i++) {
                    //文章地址
                    var urla="<?php echo U('Home/Article/index');?>"+"?id="+data[i]['Wid'];
                    //把每个li插入
                    var a=$('<li class="see"><a href="'+urla+'" onclick="abc('+data[i]['id']+')">'+data[i]['Cm_Content']+'</a></li>');
                    $('.information').prepend(a);
                    //组合再次查询时要忽略的ID
                    j+=data[i]['id']+',';
                };
            },'json');
        //计时器时间
        },3000)

    })
    function abc(id){
        var url="<?php echo U('Home/Public/ajaxReadInformation');?>";
        $.post(url, {id:id}, function(data) {
            
        });
        
    }
    </script>
    


    
    <script type="text/javascript" src="/Public/Home/assets/Script/jquery-1.8.3.js"></script>
    <script type="text/javascript">
        $('.chatbtn').click(function() {
            var text=$('.textcon').val();
            var id='<?php echo $_GET['uid'] ?>';
            var uid='<?php echo $_SESSION['Home']['Uid'] ?>';
            
            //上传评论
            var url="<?php echo U('Home/Chat/ajaxChat');?>";
            $.post(url, {chattext:text,uid:id,userid:uid}, function(data) {
                $('.textcon').val('');
            });
        });

        //点击弹出文本域层
            $('.fchat').click(function() {
              var id=$(this).parents('table').find('.ssid').html();
              $('.textareas').fadeIn();
              $('.chatbg').fadeIn();
            });
            
            $('.repulsebtn').click(function() {
              var textcontent=$('.textcontent').val();
              if (textcontent=='') {
                $('.textareas').fadeOut();
                $('.chatbg').fadeOut();
                return false;
              };
            });

            $('.chatbg').click(function() {
                $('.textareas').fadeOut();
                $('.chatbg').fadeOut();
            });

        //获取用户ID
        var yonghuid=<?php echo $_SESSION['Home']['Uid'] ?>;
        var biaozid='<?php echo $_GET['uid'] ?>';
        //初始化j标志,用来排除当前页面已查出来的数据
        var j='';
        //5秒一循,查询贴子回复等信息
        setInterval(function(){
            //url
            var url="<?php echo U('Home/Chat/ajaxhuoquchat');?>";
            //ajax
            $.post(url,{uid:biaozid,j:j}, function(data) {
                //结果集遍历
                for (var i = 0; i < data.length; i++) {
                    //判断元素向左还是向右插入
                    if (data[i]['userid']==yonghuid) {

                        var a=$('<p style="text-align:left;font-size:20px;">我:'+data[i]['chattext']+'</p>');
                    } else{
                        var a=$('<p style="text-align:right;font-size:20px;">'+data[i]['chattext']+':对方</p>');
                        
                    };
                    //插入
                    $('.chatdiv').append(a);
                    //滚动条每次都在最下面
                    $(".chatdiv").scrollTop($(".chatdiv")[0].scrollHeight);
                    //组合再次查询时要忽略的ID
                    j+=data[i]['id']+',';
                };
            },'json');
        //计时器时间
        },500)

    </script>

</body>
</html>