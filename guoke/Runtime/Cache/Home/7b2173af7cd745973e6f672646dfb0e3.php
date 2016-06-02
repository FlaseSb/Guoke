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


        
        
        <link rel="stylesheet" href="/Public/Home/assets/Content/affa772f.main.css" />
        <link rel="stylesheet" href="/Public/Home/assets/Content/7a149cf0.skin.css" />
        <link rel="stylesheet" href="/Public/Home/assets/Content/4ac1ff47.gbbcode.css" />
        <link rel="stylesheet" href="/Public/Home/assets/Content/a0687475.article.css" />
        <style type="text/css">
        #pages{
            text-align:center;font-size:25px;
        }
        #pages div{
            margin-top: 10px;
            letter-spacing: 10px;
        }
        
        </style>

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







    

    <!-- 引入百度编辑器 -->
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
    

    
    

<div class="container article-page">
    <div class="main">
        <div class="content">
            <div class="content-th">
                

                <h1 itemprop="http://purl.org/dc/terms/title"id="articleTitle"><a href="<?php echo U('Home/Article/index'); echo "?id=".$_GET['id'] ?>" style="color:#000;"><?php echo ($res["Title"]); ?></a></h1>
                <p itemprop="http://rdfs.org/sioc/ns#note" class="ghide"></p>
               
                
                <div class="content-th-info">
                    
                        <a itemprop="http://rdfs.org/sioc/ns#has_creator" title="<?php echo ($res["User_Nickname"]); ?>" href="http://www.guokr.com/i/0721544490/" data-ukey="bxl7ai"><?php echo ($res["User_Nickname"]); ?></a>
                    
                    
                    <meta itemprop="http://purl.org/dc/terms/modified" content="2016-05-13T17:34:02+08:00" />
                    
                    <span>发表于 &nbsp;<?php echo ($res["Time"]); ?></span>
                    
                    
                </div>
            </div>
            <div itemprop="http://rdfs.org/sioc/ns#content" class="content-txt" id="articleContent">
                
                <div class="document">
                    <p hidden>本文作者:<?php echo ($res["User_Nickname"]); ?></p>
                    <div>
                        <p class="img-caption">
                        <?php echo ($res["Content"]); ?>
                        </p>
                    </div>
                </div>
            </div>


            <div class="recommend-articles">
                <div class="document-do">
                    <div id="share" class="gfl share-box bdsharebuttonbox" data-author="<?php echo ($res["User_Nickname"]); ?> " data-tag="shareMain" data-xlnickname=""></div>
                    <div itemprop="http://rdfs.org/sioc/ns#has_disccussion" itemscope itemtype="http://schema.org/UserLike" class="gfr">
                        <meta itemprop="description" content="4" />
                        <a data-gaevent="article_button_comment:article" href="javascript:void 0;" id="basketBtn" data-title="第谷超新星遗迹，动起来了！" data-url="http://www.guokr.com/article/441438/">收藏</a>
                        <span class="gsplit">|</span>
                        <a href="javascript:void 0;" id="recommendBt">
                            推荐
                            <span class="recom-num">(4)</span>
                        </a>



                        <!-- 锚点链接,链接到网页最下方 -->
                        <a data-gaevent="article_button_comment:article" href="#commentsReplyer" class="comment sccommit">发表评论</a>





                    </div>  
                </div>

                <h2>你可能感兴趣</h2>
                <ul class="recommend-articles-list" id="recommendArticleRelated" data-reckey="3db7">
                        
                        <!-- 遍历出4个 -->
                        <?php if(is_array($loveresule)): foreach($loveresule as $key=>$v): ?><li>
                            <a href="<?php echo U('Home/Article/index',array('id'=>$v['id']));?>" target="_blank" data-gaevent="article_interested:v1.1.1.1:article">
                                <!-- 图片 -->
                                <?php echo ($v["Img"]); ?>
                            </a>
                            <a href="#" target="_blank"  class="recommend-article-title"  data-gaevent="article_interested:v1.1.1.1:article"><!-- 内容 --><?php echo ($v["Content"]); ?></a>
                        </li><?php endforeach; endif; ?>


                        
                    
                        
                        
                        
                    
                </ul>
            </div>
        </div>
        <div class="cmts" id="comments">
            <!-- 是否有热门评论 -->
            <?php if (!empty($hot)): ?>
                <div class="cmts-title">
                    <p class="gfl">热门评论</p>
                </div>
                <ul class="cmts-list">
                                
                <?php if(is_array($hot)): foreach($hot as $key=>$v): ?><li id="reply3001057">
                    <div class="cmt-img cmtImg pt-pic">
                        <a href="#" title="<?php echo ($v["User_Nickname"]); ?>" data-ukey="21gcae" target="_blank">
                            <img width="48" height="48" src="/Public<?php echo ($v["User_pic"]); ?>">
                        </a>
                        

                    </div>
                    <div class="pt-txt">
                        <span class="cmt-info"><?php echo ($v["Cm_Time"]); ?></span>
                        <!-- 评论ID -->
                        <span class="comid" style="display:none"><?php echo ($v["id"]); ?></span>
                        <!-- 用户ID -->
                        <span class="uid" style="display:none"><?php echo ($v["U_PID"]); ?></span>
                        <!-- 用户名 -->
                        <a class="cmt-author cmtAuthor" href="#" data-ukey="21gcae" target="_blank"><?php echo ($v["User_Nickname"]); ?></a>
                        
                        <div class="cmt-content gbbcode-content cmtContent"><?php echo ($v["Cm_Content"]); ?></div>
                        <span class="cmt-do">
                            
                                
                                
                            
                            
                            
                            <!-- 判断用户是否登录 -->
                            <?php if (isset($_SESSION['Home']) && !empty($_SESSION['Home'])): ?>
                                <!-- 判断当前评论点赞状态 -->
                                <?php if($v["ynz"] == 0): ?><a class="cmt-do-quote zambia" data-gaevent="article_comment_ding:article" href="javascript:void 0;" data-operation="likeComment" data-id="3001057">顶</a>
                                    <span class="cancelzambia" style="display:none;cursor:pointer;">取消顶</span>
                                <?php elseif($v["ynz"] == 1): ?>
                                    <a class="cmt-do-quote zambia" data-gaevent="article_comment_ding:article" href="javascript:void 0;" data-operation="likeComment" data-id="3001057" style="display:none;">顶</a>
                                    <span class="cancelzambia"  style="cursor:pointer;">取消顶</span><?php endif; ?>

    
                                [<span class="cmt-do-num"><?php echo ($v["likeCount"]); ?></span>]
                                
                                <a data-gaevent="article_reply_comment:article" class="cmt-do-quote comment commit" id="comment" href="#commentsReplyer" data-operation="quoteComment">评论</a>
                            <?php else: ?>
                                <a class="cmt-do-quote" data-gaevent="article_comment_ding:article" href="<?php echo U('Home/Login/index');?>" data-operation="likeComment" data-id="3001057">顶</a>

                                [<span class="cmt-do-num"><?php echo ($v["likeCount"]); ?></span>]

                                <a class="cmt-do-quote" href="<?php echo U('Home/Login/index');?>" data-operation="quoteComment">评论</a>
                            <?php endif ?>
                            
                        </span>
                    </div>
                </li><?php endforeach; endif; ?>
            <?php endif ?>
            

                <!-- 显示所有评论按钮,js控制,点击会显示评论,隐藏按钮 -->
                <p class="show-all-reply" <?php echo ($style); ?>>显示所有评论</p>

            <div class="cmts-title cmts-hide" <?php echo ($styles); ?>>
                <div class="gfl">全部评论</div>
            </div>
            <!-- 所有评论的ul,每个li是一条评论 -->
            <ul class="cmts-list cmts-all cmts-hide" <?php echo ($styles); ?>>
















<?php if (empty($commentres)): ?>
    <div style="text-align:center;font-size:25px;margin-top:10px;">暂无评论</div>
<?php else: ?>
    

<?php if(is_array($commentres)): foreach($commentres as $key=>$v): ?><li id="reply3001172">
        <div class="cmt-img cmtImg pt-pic">
            <a href="http://www.guokr.com/i/0144802463/" title="<?php echo ($v["User_Nickname"]); ?>" data-ukey="2e7man" target="_blank">
                <img width="48" height="48" src="/Public<?php echo ($v["User_pic"]); ?>">
            </a>
            
            <span class="cmt-floor"><?php echo ($v["floor"]); ?>楼</span>
            
        </div>
        <div class="pt-txt">
            <span class="cmt-info"><?php echo ($v["Cm_Time"]); ?></span>
            <!-- 评论ID -->
            <span class="comid" style="display:none"><?php echo ($v["id"]); ?></span>
            <!-- 用户ID -->
            <span class="uid" style="display:none"><?php echo ($v["U_PID"]); ?></span>
            <!-- 用户名 -->
            <a class="cmt-author cmtAuthor" href="#" data-ukey="2e7man" target="_blank"><?php echo ($v["User_Nickname"]); ?></a>
            
            <div class="cmt-content gbbcode-content cmtContent"><?php echo ($v["Cm_Content"]); ?></div>
            <span class="cmt-do">
                



                
                
                <!-- 判断用户是否登录 -->
                <?php if (isset($_SESSION['Home']) && !empty($_SESSION['Home'])): ?>
                    <?php if($v["ynz"] == 0): ?><a class="cmt-do-quote zambia" data-gaevent="article_comment_ding:article" href="javascript:void 0;" data-operation="likeComment" data-id="3001057">顶</a>
                        <span class="cancelzambia" style="display:none;cursor:pointer;">取消顶</span>
                    <?php elseif($v["ynz"] == 1): ?>
                        <a class="cmt-do-quote zambia" data-gaevent="article_comment_ding:article" href="javascript:void 0;" data-operation="likeComment" data-id="3001057" style="display:none;">顶</a>
                        <span class="cancelzambia" style="cursor:pointer;">取消顶</span><?php endif; ?>

                    [<span class="cmt-do-num"><?php echo ($v["likeCount"]); ?></span>]
                    
                    <a data-gaevent="article_reply_comment:article" class="cmt-do-quote comment commit" id="comment" href="#commentsReplyer" data-operation="quoteComment">评论</a>
                <?php else: ?>
                    <a class="cmt-do-quote" data-gaevent="article_comment_ding:article" href="<?php echo U('Home/Login/index');?>" data-operation="likeComment" data-id="3001057">顶</a>

                    [<span class="cmt-do-num"><?php echo ($v["likeCount"]); ?></span>]

                    <a class="cmt-do-quote" href="<?php echo U('Home/Login/index');?>" data-operation="quoteComment">评论</a>
                <?php endif ?>

                
            </span>
        </div>
    </li><?php endforeach; endif; ?>

<div id="pages">
  <?php echo ($pages); ?>
</div>


<?php endif ?>


            </ul>
            <div class="cmts-hide" <?php echo ($styles); ?>>
            



            



            </div>
            <div id="commentsReplyer" class="cmts-do"><p></p>
                <h3 id="replyer">你的评论</h3>
           
            </div>
            

            <input id="scid" type="hidden" name="Wid" value="<?php echo ($res["id"]); ?>">
            
            <!-- 判断用户是否登录 -->
            <?php if (isset($_SESSION['Home']) && !empty($_SESSION['Home'])): ?>
                <!-- 登录时启用评论框 -->
                <form action="<?php echo U('Home/Article/upload');?>" method="post">
                <!-- 隐藏域,传输用户ID -->
                <input id="User_Id" type="hidden" name="Uid" value="<?php echo $_SESSION['Home']['Uid']; ?>">
                <!-- 隐藏域,传输文章ID -->
                <input id="scid" type="hidden" name="Wid" value="<?php echo ($res["id"]); ?>">
                <!-- 隐藏域,传输被回复的用户的ID -->
                <input id="pid" type="hidden" name="Pid" value="0">
                <script id="editor" name="Cm_Content" type="text/plain" style="width:638px;height:300px;"></script>
                <button style="border:1px solid green;background:#47B5E7;width:100px;height:30px;line-height:25px;cursor:pointer;margin-top:10px;" type="submit"><span class="icon-write"></span>发表</button>
                </form>
            <?php else: ?>
                <!-- 未登录时禁用评论框 -->
                <div class="reply-box" style="height:150px;padding:15px;border:1px solid #ccc;"><p class="reply-info">请 <a rel="nofollow" href="<?php echo U('Home/Login/index');?>">登录</a> 发表评论</p></div>
            <?php endif ?>

            

        


        </div>
    </div>

    <div class="side">
        
        <div class="author-info  clearfix">
                <a class="author-pic" href="http://www.guokr.com/i/0721544490/">
                    <img src="../Picture/_p5x377pntsla33_fd9jz8w8b8t4zxwshqpqs-dlqlygaaaaoaaaaepq.jpg" alt="<?php echo ($res["User_Nickname"]); ?>"/>
                </a>
                <div class="author-intro clearfix">
                    <span class="author-wrap">
                        
                        <a href="http://www.guokr.com/i/0721544490/" class="author" title="<?php echo ($res["User_Nickname"]); ?>" id="authorName" data-ukey="bxl7ai"><?php echo ($res["User_Nickname"]); ?></a>
                        
                        
                    </span>
                </div>
            </div>
        
        
        <div class="side-title">
            <h2>作者的其他文章</h2>
        </div>
        <ul class="related-article">
            
            <?php if(is_array($other)): foreach($other as $key=>$v): ?><li>
                    <a href="<?php echo U('Home/Article/index',array('id'=>$v['id']));?>"  target="_blank" data-gaevent="article_same_author:v1.1.1.1:article"><?php echo ($v['Title']); ?></a>
                </li><?php endforeach; endif; ?>            
           
            
        </ul>
        
        <div class="side-qr-code">                                    
            <img src="/Public/Home/assets/Images/zqkqb0rvqhnvbjpa4qqsm5sstypta0t3gnay_b2vwgqyaaaasgaaaepq.jpg">        
            <p>更多科研事,扫码早知道</p>
        </div>
    </div>
</div>


        
        <div class="gbottom">
</div>
        <script type="text/javascript">
    var g_obj_id = 441438,
        tinymceContentCSS = "http:\/\/static.guokr.com\/apps\/minisite\/styles\/editor\/cc7d3765.content.css",
        g_share_data = {
            title : "\u7b2c\u8c37\u8d85\u65b0\u661f\u9057\u8ff9\uff0c\u52a8\u8d77\u6765\u4e86\uff01",
            url : "http:\/\/www.guokr.com\/article\/441438\/",
            image : "http:\/\/1.im.guokr.com\/0FhxrtLEd274x8tMZMB98qJsA1F6vFlYtg3BUIMpIaVKAQAABgEAAEdJ.gif?imageView2\/1\/w\/166\/h\/129",
            summary : "400\u591a\u5e74\u524d\u7206\u70b8\u7684\u4e00\u9897\u6052\u661f\uff0c\u5982\u4eca\u5316\u4e3a\u4e00\u56e2\u788e\u5c51\uff0c\u4ecd\u5728\u6301\u7eed\u6269\u6563\u3002NASA\u82b1\u4e8615\u5e74\u65f6\u95f4\u6301\u7eed\u89c2\u6d4b\uff0c\u7ec8\u4e8e\u8ba9\u6211\u4eec\u80fd\u591f\u201c\u4eb2\u773c\u201d\u770b\u89c1\u8fd9\u56e2\u788e\u5c51\u7684\u6f14\u53d8\u8fc7\u7a0b\u3002"
        },
        g_is_positive = true,
            g_weibo_nickname =  "\u827e\u9ea6\u4e50" ;

    
</script>
<script src="/Public/Home/assets/Scripts/476760c9.editor.js"></script>
<script>
            var g_page_name = 'unkownPage',
            GJS_VERSION = 'doom',
            ukey = null,
            client_id = 32353,
                url_signin = "http:\/\/www.guokr.com\/sso\/?suppress_prompt=1&lazy=y&success=http%3A%2F%2Fwww.guokr.com%2Farticle%2F441438%2F",
                url_signin_mobile = "http:\/\/www.guokr.com\/sso\/mobile\/?suppress_prompt=1&lazy=y&success=http%3A%2F%2Fwww.guokr.com%2Farticle%2F441438%2F";
                url_signup = "https:\/\/account.guokr.com\/sign_up\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Fgroup%252Fuser%252Frecent_replies%252F",
                weibo_signin = "https:\/\/account.guokr.com\/weibo\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Farticle%252F441438%252F",
                renren_signin = "https:\/\/account.guokr.com\/renren\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Farticle%252F441438%252F",
                qq_signin = "https:\/\/account.guokr.com\/qq\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Farticle%252F441438%252F";
                douban_signin = "https:\/\/account.guokr.com\/douban\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Farticle%252F441438%252F";
        window["_BFD"] = window["_BFD"] || {};
            _BFD.client_id = "Cguoke";
            _BFD.BFD_INFO = {
                "user_id" : ""
            };
            _BFD.script = document.createElement("script");
            _BFD.script.type = "text/javascript";
            _BFD.script.async = true;
            _BFD.script.charset = "utf-8";
            _BFD.script.src = (('https:' == document.location.protocol?'https://ssl-static1':'http://static1')+'.bfdcdn.com/service/guokewang/guokewang.js');
            document.getElementsByTagName("head")[0].appendChild(_BFD.script);
        </script>
        <script src="/Public/Home/assets/Scripts/aea9c4c1.base.js"></script>
        <script src="/Public/Home/assets/Scripts/b00a5135.main.js"></script>
<script src="/Public/Home/assets/Scripts/ad492e38.article.js"></script>
<script type="text/javascript">
    //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        var ue = UE.getEditor('editor'/*,{toolbars:[['bold','simpleupload']]}*/);
</script>
<script type="text/javascript" src="/Public/Home/assets/Script/jquery-1.8.3.js"></script>
<script type="text/javascript">
    //点击'显示所有评论'
    $('.show-all-reply').click(function() {
        //显示评论ul
        $('.cmts-hide').css('display','block');
        //隐藏'显示所有评论DIV'
        $('.show-all-reply').css('display','none');
        //文章ID
        var wid=$('#scid').val();
        //url
        var url="<?php echo U('Home/Article/ajaxCookie');?>";
        //ajax
        $.post(url, {wid:wid});
    });


    //回复其他用户的回复
    //单击'评论'事件
    $('.commit').click(function(){
        //获取用于传输被其回复的用户的用户ID
        var pid=$(this).parents('.pt-txt').find('.uid').html();
        //修改用于传输被其回复的用户的用户ID的隐藏域用于传输
        $('#pid').val(pid);
        //获取被其回复的用户的用户名
        var uname=$(this).parents('.pt-txt').find('.cmtAuthor').html();
        //获取被其回复的用户的回复内容
        var ucontent=$(this).parents('.pt-txt').find('p').html();
        //获取被其回复的用户的ID
        var id=$(this).parents('.pt-txt').find('.uid').html();
        //把上述内容拼接,放入百度编辑器   
        UE.getEditor('editor').setContent('<blockquote>引用@'+'<a href="1">'+uname+'</a>'+' 的话：'+ucontent+' </blockquote><p>');
    })
    //单击文章评论清空百度编辑器内容
    $('.sccommit').click(function(){
        UE.getEditor('editor').setContent('');
    })
    //当用户登录时启用此js
    <?php if (isset($_SESSION['Home']) && !empty($_SESSION['Home'])): ?>
        //点赞
        $('.zambia').click(function(){
            //点赞+1
            var znum=+$(this).parents('li').find('.cmt-do-num').html()+1;
            //获取当前操作用户ID
            var uid=<?php echo $_SESSION['Home']['Uid']; ?>;
            //获取当前评论ID
            var likeid=$(this).parents('li').find('.comid').html();
            var td=$(this);
            // url
            var url="<?php echo U('Home/Article/ajaxZambia');?>";
            //ajax添加用户点赞
            $.post(url,{Like_Uid:uid,Like_Lid:likeid},function(data) {
                if (data==1) {
                    //成功,修改元素
                    td.parents('li').find('.cmt-do-num').html(znum);
                    td.parents('li').find('.zambia').css('display','none');            
                    td.parents('li').find('.cancelzambia').css('display','inline-block');
                } else if(data==0){
                    //失败,提示
                    alert('系统繁忙,请稍后重试');
                };
            });
        })
        //取消点赞
        $('.cancelzambia').click(function(){
            //点赞-1
            var znum=+$(this).parents('li').find('.cmt-do-num').html()-1;
            //获取当前操作用户ID
            var uid=<?php echo $_SESSION['Home']['Uid']; ?>;
            //获取当前评论ID
            var likeid=$(this).parents('li').find('.comid').html();
            var td=$(this);
            // url
            var url="<?php echo U('Home/Article/ajaxCancelZambia');?>";
            //ajax删除用户点赞
            $.post(url,{uid:uid,likeid:likeid},function(data) {
                if (data==1) {
                    //成功,修改元素
                    td.parents('li').find('.cmt-do-num').html(znum);
                    td.parents('li').find('.zambia').css('display','inline-block');            
                    td.parents('li').find('.cancelzambia').css('display','none');
                } else if(data==0){
                    //失败,提示
                    alert('系统繁忙,请稍后重试');
                };
            });
        })
    <?php endif ?>

    //动态改变'您可能喜欢的'图片大小
    $('.recommend-articles-list').find('img').css('width','90px').css('height','90px');
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