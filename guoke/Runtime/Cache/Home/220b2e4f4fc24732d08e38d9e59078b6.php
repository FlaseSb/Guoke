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
        
        <!-- <title>用文字展现科学，给我投稿吧！ |  果壳网 科技有意思</title> -->
        <link rel="stylesheet" href="/Public/Home/assets/Content/6e7bcd6e.main.css" />
        <!--[if lt IE 9]><link rel="stylesheet" href="/Public/Home/Write/css/e43d2adb.ie678.css" /><![endif]-->
    
    <!-- <link rel="stylesheet" href="/Public/Home/Science/css/affa772f.main.css" /> -->
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/Content/7a149cf0.skin.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/Content/26b86cdf.post.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/Content/26b86cdf.post.css" />

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







    <div class="gheader-wrap">

    <div id="move" class="side-qr-code" style="position:fixed;top:500px;right:150px;z-index:999;">                                    
        <img src="/Public/Home/assets/Images/zqkqb0rvqhnvbjpa4qqsm5sstypta0t3gnay_b2vwgqyaaaasgaaaepq.jpg">        
    </div>
        
    <!-- 引入百度编辑器     -->
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
    
    <!-- jquery -->
    <script src="/Public/Home/assets/Scripts/jquery-1.8.3.min.js"></script>

            

    <form action="<?php echo U('Home/Write/update');?>" method="post" nctype="multipart/form-data">




    <!-- 后期在此传入SESSION用户ID -->
    <input type="hidden" name="User_Id" value="<?php echo $_SESSION['Home']['Uid'] ?>">
    <!-- -- -->





    <div class="gwrap">
        <div class="group-info-small">
            <div class="group-info-inner">
                <div class="group-info-detail">
                    <div class="group-info-name">
                        <h3>选择分类　</h3>
                            <select onchange="change(this)" name="Fid" style="border:1px solid #ccc">
                                <!-- 取出顶级分类 -->
                                <option value="">--请选择--</option>
                                <?php if(is_array($res)): foreach($res as $key=>$v): ?><option class="opt" value="<?php echo ($v["id"]); ?>"><?php echo ($v["Class_Title"]); ?></option><?php endforeach; endif; ?>
                            </select>
                            <!-- 取出次级分类,默认隐藏,name名一样,如果选择了次级,次级分覆盖父级 -->
                            <select id="city" name="Fid" style="display:none;border:1px solid #ccc">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="gmain">
                    <div class="post">
                        <div class="group-title-header gclear">
                            <h1 id="articleTitle">
                                用文字展现科学，给我投稿吧！
                            </h1>
                        </div>
                        <div class="group-title-header gclear">
                            <h1 id="articleTitle">
                                文章名:
                            </h1>
                            <h1 id="articleTitle">
                                <input type="text" name="Title" style="border:1px solid #ccc;width:150px;height:25px;">
                            </h1>
                        </div>
                        
                        
                        <div class="group-title-header gclear" style="margin-top:-30px;margin-bottom:-1px;">
                            <h3 id="articleTitle">
                                格式规范:文章内容中必须带有一张及以上图片,请选择合适的分类.
                            </h3>
                        </div>


                        <div class="post-txt">
                           
                            
                        <!-- 百度文本编辑骂     -->
                        <script id="editor" name="Content" type="text/plain" style="width:638px;height:400px;">
                        </script>
                        <br>    
                        <button type="submit" style="border:1px solid green;background:#47B5E7;width:100px;height:30px;line-height:25px;cursor:pointer" ><span class="icon-write"></span>发表</button>

                            
                        </div>



                        <div class="side">
        


      
        
        
    



                    </div>
                <div class="gbottom">
            </form>
        
    </div>
        
        
    

    <script type="text/javascript">
        //实例化编辑器
            //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
            var ue = UE.getEditor('editor');
    </script>
    <script>

        // 顶级分类改变值触发
        function change(obj){
            // 获取顶级分类值
            var sid=obj.value;
            //ajaxurl
            var url="<?php echo U('Home/Write/ajaxclass');?>";
            //ajax
            $.post(url, {Class_Pid:sid}, function(data){
                //没有子类的情况
                if (data==0) {
                    $('#city').css('display','none');
                } else{
                    //有子类的情况
                    //显示次级文本框
                    $('#city').css('display','inline-block');
                    //清空文本框中内容
                    $('#city').html('');
                    var val='';
                    //循环遍历次级分类
                    for (var i = 0; i < data.length; i++) {
                        //取出组合拼接
                        val+="<option value='"+data[i].id+"'>"+data[i].Class_Title+"</option>";
                    };
                    //插入
                    $('#city').append(val);
                };
                //返回json
            },'json');
        }
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