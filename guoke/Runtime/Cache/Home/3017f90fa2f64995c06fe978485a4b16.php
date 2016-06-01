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
        
        <link rel="stylesheet" href="/Public/Home/assets/Content/3100651d.list.css" />
        <link rel="stylesheet" href="/Public/Home/assets/Content/affa772f.main.css" />
        <style type="text/css">
            *{
                list-style: none;
            }
            .wincon{
                margin-top: 25px!important;
                width: 100%!important;
                border:1px solid #fff!important;

            }
            .wincon .wincon-list{
                width: 1000px!important;  
                margin: 0 auto!important;
                border:1px solid #fff!important;
            }
            .uls{
                float: left;
                margin-right: -1px!important;
                margin-top: -1px!important;
            }
            .lis{
                border:1px solid #ccc!important;
                /*background-color: red;*/
                width: 292px!important;
                padding: 20px!important;
            }
            .one{
                /*float: left!important;*/
                width: 280px!important;
                height: 20px!important;
                margin-bottom: 20px!important;
            }
            .oneclass{
                /*float: left!important;*/
                /*width:50px!important;*/
                height:20px!important;
                padding:2px 8px;
                background:red!important;
                line-height: 20px!important;
                text-align: center!important;
                margin-right: 15px!important;
            }
            .oneclass a{
                color:#fff!important;
            }
            .twoclass{
                /*float: left!important;*/
                /*width:50px!important;*/
                padding:2px 8px;
                height:20px!important;
                background:green;
                line-height: 20px!important;
                text-align: center!important;
            }
            .twoclass a{
                color:#fff!important;
            }
            .two{
                width: 280px!important;
                height: 42px!important;
                /*float: left!important;*/

            }
            .two a{
                color: #000!important;
                font-size: 23px!important;

            }
            .two :hover{
                text-decoration: underline!important;
            }
            .three{
                float: right!important;
                width: 280px!important;
                height: 20px!important;
                margin-bottom: 20px!important;
            }
            .three .name{
                /*float: left!important;*/
                width:85px!important;
                height:20px!important;
                margin-left: -14px;
                line-height: 20px!important;
            }
            .three .name :hover{
                text-decoration: underline!important;
            }
            .three .name a{
                color:#46B6B6!important;
            }
            .three .time{
                /*float: left!important;*/
                width:85px!important;
                height:20px!important;
                line-height: 20px!important;
                color:#C6B8C6!important;
            }
            .four{
                /*float: left!important;*/
                width: 290px!important;
                margin-bottom: 20px!important;
            }
            .four img{
                width: 100%!important;
            }
            .five{
                /*float: left!important;*/
                width: 290px!important;
            }
            .gywm{
                float: right!important;
                width: 332px!important;
                border:1px solid #ccc!important;
                margin-left: -1px!important;
                margin-top: -1px!important;
            }
            .gywm a{
                color: #000!important;
            }
            .imgtext{
                width: 282px!important;
                height: 70px!important;
                line-height: 70px!important;
                padding-left: 50px!important; 
                padding: 0 auto!important;
                background: #F4F6F6!important;
                margin-bottom: 10px!important;
                font-family: "黑体"!important;
                font-size: 25px!important;
            }
            .imgtext img{
                float: left!important;
            }
            .imgtext p{
                float: left!important;
                margin-left: 30px!important;
                width: 150px!important;
            }
            .mb{
                margin-bottom: 0!important;
            }
            .loaddiv{
                width: 100%!important;
                height: 50px!important;
                line-height: 50px!important;
                /*float: left!important;*/
            }
            .loadimg{
                margin: 0 auto!important;
                width: 550px!important;
                padding-left: 450px!important;
            }
        </style>

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






    

    <!-- 用于控制检索分类 yid分类ID,用来控制瀑布流中的内容 -->
    <span class="yid" style="display:none"><?php echo ($yid); ?></span>

    <!-- 导航   -->
    <div class="gh-sub-nav-wrap" id="subNav" style="margin-top:40px;">
        <div class="gh-sub-nav">
            <h1>
                <a href="<?php echo U('Home/Science/index',array('id'=>0));?>" class="gh-sub-nav-title" href="/scientific/"><img src="../Picture/22bbc83e.logo.png" alt="科学人"></a>
            </h1>
            <ul class="gh-sub-nav-list">
      

    <!-- 遍历分类 -->
    <?php if(is_array($res)): foreach($res as $key=>$v): ?><!-- 一级分类 -->
        <li class="oneli">
            <a href="<?php echo U('Home/Science/index',array('id'=>$v['id']));?>">
            <?php echo ($v['Class_Title']); ?>
            </a>
            <!-- 二级分类 -->
            <?php if($v['sonres'] == 1 ): ?><a href="<?php echo U('Home/Science/index',array('tid'=>$v['id']));?>">
                <i class="gnarrow-down"></i>
            </a><?php endif; ?>
        </li><?php endforeach; endif; ?>            
    

            </ul>
            
            <div class="gh-sub-nav-hidden">
                <a class="gh-sub-nav-btn" id="innerNavBtn" href="javascript:void 0;">
                    
                    <span class="icon icon-menu"></span>
                </a>
            </div>
        </div>
    </div>
                </div>
    <!-- 分类 -->
    <div class="container">
        <div id="innerNav" class="gh-inner-nav-wrap">
            <div class="gh-inner-nav">
                <h2><span class="gh-inner-nav-title"><?php echo ($pname); ?></span></h2>
                <ul class="gh-inner-nav-list">

                    <?php if(is_array($sonval)): foreach($sonval as $key=>$v): ?><li class="current">
                            <a href="<?php echo U('Home/Science/index',array('id'=>$v['id']));?>"><?php echo ($v['Class_Title']); ?></a>
                        </li><?php endforeach; endif; ?>
                    
                    
                </ul>
            </div>
        </div>






        <div class="wincon">
    <div class="wincon-list" id="parentd">
<!-- --// -->
<li id="clones" class="lis" style="display:none">
    <div class="one">
        <span class="oneclass">
            <a>
                
            </a>
        </span>
        <span class="twoclass">
            <a>
                
            </a>
        </span>
    </div>
    <div class="two">
        <a href="#">

        </a>
    </div>
    <div class="three">
        <span class="name">
            <a href="#">
                
            </a>
        </span>
        <span class="time">
        
        </span>
    </div>
    <div class="four">
        <a href="#">
          
        </a>
    </div>
    <div class="five">
        
    </div>
</li>
<!-- /// -->



        

        
        
        <ul class="gywm">
            <a href="#"  target="_blank">
                <div class="imgtext">
                    <img src="/Public/Home/assets/Images/239b2091.i-logo.png">
                    <p>关于我们</p>
                </div>
            </a>
            <a href="<?php echo U('Home/Write/index');?>" target="_blank">
                <div class="imgtext mb">
                    <img src="/Public/Home/assets/Images/89e5a66b.flight-logo.png">
                    <p>我要投稿</p>
                </div>
            </a>
        </ul>
        
        
        

 <ul class="uls">
 </ul>
 <ul class="uls">
 </ul>
 <ul class="uls">       
 </ul>


</div>


</div>

<div class="loaddiv" style="display:none">
    <div class="loadimg">
        正在加载<img src="/Public/Home/assets/I
    Images/52a797de.ajax-loader.gif">
    </div>
</div>

        
       
    <script src="/Public/Home/assets/Scripts/jquery-1.8.3.min.js"></script>
    <script src="__PUBLsIC__/Home/Science/js/aea9c4c1.base.js"></script>
    <script src="__PUBLsIC__/Home/Science/js/2da32bc5.index.js"></script>
    <script type="text/javascript">
        // 全局配置
        var p=-1;//页码信息  
        var isLoading=false;


        // var newLi=$('#item').clone();
        // console.log(newLi);
        // $('#waterfall').append(newLi);
        // var newLi=$('#item').clone();
        // $('#waterfall').append(newLi);

        requestAjax();

        //封装函数发起请求
        function requestAjax(){
            //加载请求是送门
            isLoading=true;
            //发起请求
            //url
            var url="<?php echo U('Home/Science/ajaxwaterfall');?>";
                p++;
            //取ID
            var id=$('.yid').html();
            //ajax
            $.post(url,{p:p,id:id},function(data){
                // 循环遍历创建元素
                for (var i = 0; i < data.length; i++) {
                    //克隆li
                    var newLi=$('#clones').clone();
                    // console.log(newLi);
                    // console.log($('#parentd'));
                    // console.log(data[i]['Time']);
                    // $('.loaddiv').css('display','none');
                    //淡入显示
                    newLi.fadeIn();
                    //判断是否为空,等于空代表是没有父分类,当前就是父分类
                    if (data[i]['pcname']=='') {
                        //隐藏
                        newLi.find('.oneclass').css('display','none');
                        //修改背景色
                        newLi.find('.twoclass').css('backgroundColor','#f00');
                    }else{
                        newLi.find('.oneclass').find('a').html(data[i]['pcname']);
                    }
                    //URL,点击转到每个文章的文章内容页
                    var urla="<?php echo U('Home/Article/index');?>"+"?id="+data[i]['id'];
                    //修改li内容
                    newLi.find('.two').find('a').attr('href',urla);
                    //修改li内容
                    newLi.find('.four').find('a').attr('href',urla);
                    //修改li内容
                    newLi.find('.twoclass').find('a').html(data[i]['Class_Title']);
                    //修改li内容
                    newLi.find('.two').find('a').html(data[i]['Title']);
                    //修改li内容
                    newLi.find('.name').find('a').html(data[i]['User_Nickname']);
                    //修改li内容
                    newLi.find('.time').html(data[i]['Time']);
                    //修改li内容
                    newLi.find('.four').find('a').html(data[i]['Img']);
                    //修改li内容
                    newLi.find('.five').html(data[i]['Content']);
                    //指针
                    var index=i%3;
                    //插入到ul中
                    $('.uls:eq('+index+')').append(newLi)
                };
                
                // console.log(data);
                //打开
                isLoading=false;
            },'json')
        }

        // 绑定滚动事件
        $(window).scroll(function(){
            //检测当前是否正在发起请求
            if (isLoading) {return;};
            //获取整个文档的高度
            var sH=$(document).height();
            //获取页面滚动高度
            var sT=$(window).scrollTop();
            //可视区别的高度
            var cH=$(window).height();
            if(sH==cH+sT){
                //显示正在加载GIF
                $('.loaddiv').css('display','inline-block');
                //调用瀑布流函数
                requestAjax();
                //隐藏正在加载GIF
                $('.loaddiv').css('display','none');
            }
        })

        //动态控制瀑布流中图片的大小
        $('.four').find('img').css('width','100%');


        
    </script>



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
    


    
        
    
</body>
</html>