<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>果壳网 科技有意思</title>
    <meta name="Keywords" content="果壳,果壳网,科技,泛科技,智趣,生活,科普"/>
    <meta name="Description" content="果壳网是一个泛科技主题网站，提供负责任、有智趣、贴近生活的内容，你可以在这里阅读、分享、交流、提问。果壳网致力于让科技兴趣成为人们文化生活和娱乐生活的重要元素。"/>
    
<meta http-equiv="mobile-agent" content="format=html5; url=http://m.guokr.com/">

    
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/Content/gui.css">
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/Content/index.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/assets/Content/fonts.css" />

</head>
<body>
    <div class="container ">
<div class="gheader-wp">
    <div class="gheader-wp-b gclear">
        <div class="index-unlogin">
            <div class="homegheader" id="gheader">
                <a class="gheader-logo gfl" id="guokrLogo" href="http://www.guokr.com/" title="果壳 科技有意思">果壳网</a>
                <ul class="gnav gfl">
                    <li><a href="/scientific">科学人</a></li>
                    
                    <li><a href="http://www.guokr.com/group/">小组</a></li>
                    
                    <li><a href="http://www.guokr.com/ask/">问答</a></li>
                    <li><a href="http://mooc.guokr.com/" target="_blank">MOOC</a></li>
                    <li><a href="http://www.zaih.com/" target="_blank">在行</a></li>
                    <li><a href="http://www.kexuelife.com/" target="_blank">科学与生活</a></li>
                    <li class="gkr-unlogin-more-nav">
                        <a href="javascript:">其他<b class="gkr-umn-arrow"></b></a>
                        <div class="gkr-umn-pop">
                            
                            <a class="gkr-umnp-entry" href="http://fd.zaih.com/fenda" target="_blank">分答</a>
                            <a class="gkr-umnp-entry" href="http://www.15yan.com/" target="_blank">十五言</a>
                            <a class="gkr-umnp-entry" href="http://www.guokr.com/mobile/" target="_blank">果壳精选</a>
                            <a class="gkr-umnp-entry" href="http://gate.guokr.com/" target="_blank">任意门</a>
                            <a class="gkr-umnp-entry" href="http://www.guokr.com/group/weixin_account/" target="_blank">果壳微信号</a>
                            
                            <a class="gkr-umnp-entry" href="http://music.guokr.com/" target="_blank">果壳音乐</a>
                            <a class="gkr-umnp-entry" href="http://www.guokr.com/group/185/" target="_blank">果壳动漫</a>
                            
                        </div>
                    </li>
                </ul>
                <form id="search" class="gh-search gh-search-unlogin gfr" action="http://www.guokr.com/search/all/" method="get" target="_blank">
                    <p>
                        <input id="searchTxt" class="gh-search-txt" type="text" value="" placeholder="" maxlength="30" name="wd">
                        <input class="gnicon-search" type="submit" value="搜索">
                    </p>
                </form>
            </div>
        </div>

        <div class="unlogin-wrapper">
            <div class="homegheader unlogin-nav">
                
                <div class="gheader-ext">
                    <p>现在加入果壳，一起记录科技新时代</p>
                    <a rel="nofollow" data-gaevent="home_sign_up:home" href="<?php echo U('Home/Sign/index');?>">立即注册</a>
                    <a rel="nofollow" data-gaevent="home_login_mail:home" href=":U('Home/login/index')">用户登录</a>
                </div>
                <div class="gheader-i">
                    联合登录：
                    <a data-gaevent="home_login_weixin:home" class="gicon-sweixin" href="#" title="用微信帐号登录"></a>
                    <a data-gaevent="home_login_weibo:home" class="gicon-ssina" href="#" title="用新浪微博帐号登录"></a>
                    <a data-gaevent="home_login_QQ:home" href="#" title="用QQ帐号登录" class="gicon-sqq"></a>
                    <a data-gaevent="home_login_douban:home" href="#" title="用豆瓣帐号登录" class="gicon-sdouban"></a>
                </div>
                
            </div>
        </div>
    </div>
    <div class="top-ads" id="topAds" >
        <a href="javascript:void 0;" class="closeAds close-ads" data-flag="ads_close_hometop" data-pathname="/" data-gaevent="home_close_topads:v1.1.1.1:closeads" data-version="v1.1.1.1">关闭</a>
        <div id="bdadm-624083" class="topAds"></div>
    </div>
</div>

    
    <div class="grow gclear index-page">
        <div class="main">
            <div class="gbtitle">
                <h1>最新推荐</h1>
                <div class="gbtitle-advert">
                    <div id="bdadm-624095" class="gbtitle-advert-text"></div>
                </div>
            </div>
            <div class="recos gclear">
                <!--以下是首页轮播器代码-->
                <div class="focus">
                    <div class="focus-content">

                        	<?php if(is_array($articleimgres)): foreach($articleimgres as $key=>$v): ?><a href="#" data-gaevent="home_recommend_articles_focus:v1.1.1.1:article" target="_blank">
                                <?php echo ($v["Img"]); ?>
                            </a><?php endforeach; endif; ?>
                        
                        
                    </div>
                    <div class="focus-explain">
                        <ul class="focus-title">
                            
                            <?php if(is_array($articleimgres)): foreach($articleimgres as $key=>$v): ?><li class="current">
                            <a href="http://www.guokr.com/article/441477/"  title="第五种基本力被发现了吗？ " data-gaevent="home_recommend_articles_focus:v1.1.1.1:article" target="_blank"><?php echo ($v["Title"]); ?></a>
                            </li><?php endforeach; endif; ?>
                            
                            
                        </ul>
                        <ul class="focus-tag">
                            
                            <li></li>
                            
                            <li></li>
                            
                            <li></li>
                            
                            <li></li>
                            
                            <li></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="recos-article">
                    <ul class="gclear">
                        	
                        	<?php if(is_array($articletitleres)): foreach($articletitleres as $key=>$v): ?><li class="stress">
                            <h2><a href="http://www.guokr.com/article/441485/" data-gaevent="home_recommend_articles:v1.1.1.1:article" title="<?php echo ($v["Title"]); ?>" target="_blank"><?php echo ($v["Title"]); ?></a></h2>
                            </li><?php endforeach; endif; ?>
                        
                    </ul>
                </div>
            </div>
            <div class="gbtitle ask">
                <h1>热门问答</h1>
                <div class="gbtitle-advert">
                    <div id="bdadm-624099" class="gbtitle-advert-text"></div>
                </div>
            </div>
            <div class="contents gclear">
                
                
                
                <div class="contents-l">
                
                    <div class="content">
                        <h2 class="content-title">科学·技术</h2>
                        <ul>
                        
                            
                                <li class="content-article">
                                    <a href="http://www.guokr.com/question/569313/" data-gaevent="home_recommend_asks:v1.1.1.1:ask" target="_blank" class="img">
                                        <img src="../Picture/utgi0canus3a7zk48qlxj59mwfut-ynm64z_nlhbj7mgaqaabaeaaepq.jpg" alt="臭氧也算是大气污染物么？"/><b></b>
                                    </a>
                                    <div class="cont">
                                        <h3><a href="http://www.guokr.com/question/569313/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="臭氧也算是大气污染物么？">臭氧也算是大气污染物么？</a></h3>
                                        <p>产生臭氧的基本光化学反应是 二氧化氮 - 一... <a href="http://www.guokr.com/question/569313/" data-gaevent="home_recommend_asks:v1.1.1.1:ask" target="_blank">详细</a></p>
                                    </div>
                                </li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627480/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="超重货车是怎么把上海中环弄断的？">超重货车是怎么把上海中环弄断的？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627438/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="充电器是如何给手机充电的？">充电器是如何给手机充电的？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627305/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="提高机床效率几百倍，可能吗？">提高机床效率几百倍，可能吗？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/466184/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="手机充电器越来越小，是科技进步还是偷工减料？">手机充电器越来越小，是科技进步还是偷工减料？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627380/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="现代有哪些既是科学家又是军事家的大牛？">现代有哪些既是科学家又是军事家的大牛？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/612552/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="换头手术会面临哪些问题？可行性有多高？">换头手术会面临哪些问题？可行性有多高？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/625987/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="电影达到“每秒120帧”意味着什么？厉害在哪里？">电影达到“每秒120帧”意味着什么？厉害在哪里？</a></li>
                            
                        
                        </ul>
                    </div>
                
                
                
                    <div class="content">
                        <h2 class="content-title">生活·娱乐</h2>
                        <ul>
                        
                            
                                <li class="content-article">
                                    <a href="http://www.guokr.com/question/600176/" data-gaevent="home_recommend_asks:v1.1.1.1:ask" target="_blank" class="img">
                                        <img src="../Picture/caipc0q8croupgekk4xtfjs27strtxnwfmt6j4o9i2avaqaadgeaaepq.jpg" alt="汉堡来源于肉夹馍这有道理么？"/><b></b>
                                    </a>
                                    <div class="cont">
                                        <h3><a href="http://www.guokr.com/question/600176/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="汉堡来源于肉夹馍这有道理么？">汉堡来源于肉夹馍这有道理么？</a></h3>
                                        <p>蒙古人远征之后的几百年里面，德国人的肉饼一直... <a href="http://www.guokr.com/question/600176/" data-gaevent="home_recommend_asks:v1.1.1.1:ask" target="_blank">详细</a></p>
                                    </div>
                                </li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627376/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="洗干净的盐罐，外面又裹了一层盐。什么原因？">洗干净的盐罐，外面又裹了一层盐。什么原因？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627342/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="为什么大家都那么喜欢屁股？">为什么大家都那么喜欢屁股？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627366/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="身体被捅一刀，正确的做法是？">身体被捅一刀，正确的做法是？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627669/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="“北京遭遇臭氧污染”是怎么回事？">“北京遭遇臭氧污染”是怎么回事？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627448/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="谈话时，如何“直视”对方双眼？">谈话时，如何“直视”对方双眼？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627237/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="蓝牙卫生棉条是什么产品？实用吗？">蓝牙卫生棉条是什么产品？实用吗？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/252379/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="为什么人肚子饿的时候肚子会叫？">为什么人肚子饿的时候肚子会叫？</a></li>
                            
                        
                        </ul>
                    </div>
                
                </div>
                
                
                
                <div class="contents-r">
                
                    <div class="content">
                        <h2 class="content-title">人文·社科</h2>
                        <ul>
                        
                            
                                <li class="content-article">
                                    <a href="http://www.guokr.com/question/530781" data-gaevent="home_recommend_asks:v1.1.1.1:ask" target="_blank" class="img">
                                        <img src="../Picture/0_io3_r5taz4eb7rfea-8h_qloadbssjc4mvnn7px93-aqaavaeaaepq.jpg" alt="“腐女”为什么会喜欢看BL？"/><b></b>
                                    </a>
                                    <div class="cont">
                                        <h3><a href="http://www.guokr.com/question/530781" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="“腐女”为什么会喜欢看BL？">“腐女”为什么会喜欢看BL？</a></h3>
                                        <p>西方的BL同人（Slash Fiction）... <a href="http://www.guokr.com/question/530781" data-gaevent="home_recommend_asks:v1.1.1.1:ask" target="_blank">详细</a></p>
                                    </div>
                                </li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627430/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="“囧”原意为“窻牖麗廔闓朙”，这几个字是啥意思？">“囧”原意为“窻牖麗廔闓朙”，这几个字是啥意思？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/610232/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="怎样对待、处理愤怒的情绪？">怎样对待、处理愤怒的情绪？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/386259/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="怎样学习画漫画？">怎样学习画漫画？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/626930/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="为什么人们接受不了instagram的新图标？">为什么人们接受不了instagram的新图标？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627437/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="请问逗逼、二逼到底是什么意思？">请问逗逼、二逼到底是什么意思？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/484739/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="如何在最短的时间内学会音乐制作？">如何在最短的时间内学会音乐制作？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/626690/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="方言是古汉语吗?">方言是古汉语吗?</a></li>
                            
                        
                        </ul>
                    </div>
                
                
                
                    <div class="content">
                        <h2 class="content-title">自然·生态</h2>
                        <ul>
                        
                            
                                <li class="content-article">
                                    <a href="http://www.guokr.com/question/627613/" data-gaevent="home_recommend_asks:v1.1.1.1:ask" target="_blank" class="img">
                                        <img src="../Picture/ymv1d7hdso8-gmuixwte9iveogs69tv5jnbxbx6nbqdnaqaa3gaaaepq.jpg" alt="带翅膀的蚂蚁中有没有蚁后？"/><b></b>
                                    </a>
                                    <div class="cont">
                                        <h3><a href="http://www.guokr.com/question/627613/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="带翅膀的蚂蚁中有没有蚁后？">带翅膀的蚂蚁中有没有蚁后？</a></h3>
                                        <p>在建群初期资源匮乏的时候蚁后的能量基本都靠分... <a href="http://www.guokr.com/question/627613/" data-gaevent="home_recommend_asks:v1.1.1.1:ask" target="_blank">详细</a></p>
                                    </div>
                                </li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627293/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="河海交界处为什么会出现这么明显的分界线?">河海交界处为什么会出现这么明显的分界线?</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627330/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="能不能让人类皮肤也能进行光合作用？">能不能让人类皮肤也能进行光合作用？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627326/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="不同物种演化过程中能否合并成一个物种？">不同物种演化过程中能否合并成一个物种？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/627670/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="这是什么蚂蚁？有这么大的蚂蚁吗？">这是什么蚂蚁？有这么大的蚂蚁吗？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/587104/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="为什么很多动物的生殖器官都靠近排泄器官？">为什么很多动物的生殖器官都靠近排泄器官？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/598658/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="樱桃和车厘子到底是不是同一种东西？">樱桃和车厘子到底是不是同一种东西？</a></li>
                            
                        
                            
                            <li><a href="http://www.guokr.com/question/626755/" target="_blank" data-gaevent="home_recommend_asks:v1.1.1.1:ask" title="这朵花为什么看起来有3个“花心”？">这朵花为什么看起来有3个“花心”？</a></li>
                            
                        
                        </ul>
                    </div>
                
                </div>
                
                
                
            </div>
            <div id="bdadm-624091" class="contents-advert-center"></div>
            <div class="gbtitle post-pop">
                <h1>小组热帖</h1>
                <div class="gbtitle-advert">
                    <div id="bdadm-624101" class="gbtitle-advert-text"></div>
                </div>
            </div>
            <div class="contents gclear">
                
                
                    
                        <div class="contents-l">
                    
                        <div class="content">
                            <h2 class="content-title">科技</h2>
                            <ul>
                            
                                
                                    <li class="content-article">
                                        <a href="http://www.guokr.com/post/735821/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" class="img">
                                            <img src="../Picture/xljoluad14oz3hnmuj7adptegjkneogqvimpoe5tukhyagaakaeaaepq.jpg" alt="【怪奇物种图鉴】活到105岁的“鲸瑞”"/><b></b>
                                        </a>
                                        <div class="cont">
                                            <h3><a href="http://www.guokr.com/post/735821/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank">【怪奇物种图鉴】活到105岁的“鲸瑞”</a></h3>
                                            <p>鸣谢微博 @长鲸吟

 

逆戟鲸（...<a href="http://www.guokr.com/post/735821/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank">详细</a></p>
                                        </div>
                                    </li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/734856/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="光会吹，你咋不上天呢？诶你还别说">光会吹，你咋不上天呢？诶你还别说</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/730846/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="吴哥窟一隅复制计划！">吴哥窟一隅复制计划！</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/736623/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="【实验动图】沉浮密度瓶">【实验动图】沉浮密度瓶</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/733831/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="【科学八卦史】主角光环">【科学八卦史】主角光环</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/732517/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="15岁少年靠星座找到失落玛雅城？">15岁少年靠星座找到失落玛雅城？</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/717704/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="巴厘岛鸟类公园&amp;动物园游记">巴厘岛鸟类公园&amp;动物园游记</a></li>
                                
                            
                                
                                    <li><a href="" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title=""></a></li>
                                
                            
                            </ul>
                        </div>
                    
                
                    
                        <div class="content">
                            <h2 class="content-title">生活</h2>
                            <ul>
                            
                                
                                    <li class="content-article">
                                        <a href="http://www.guokr.com/post/735735/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" class="img">
                                            <img src="../Picture/s5deysker2ft7gcfp5gnoerpxk6tmj47.jpg!content" alt="热、死、人、啦！吃啥能清凉一夏？"/><b></b>
                                        </a>
                                        <div class="cont">
                                            <h3><a href="http://www.guokr.com/post/735735/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank">热、死、人、啦！吃啥能清凉一夏？</a></h3>
                                            <p>文｜煎茶君

天边太阳大又毒，树上知了拼...<a href="http://www.guokr.com/post/735735/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank">详细</a></p>
                                        </div>
                                    </li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/734203/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="泰国斗鱼：酷到没朋友">泰国斗鱼：酷到没朋友</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/731646/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="方格星虫虽然没颜值，但是“好吃”">方格星虫虽然没颜值，但是“好吃”</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/733803/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="扬州人初夏的时候吃什嘛？">扬州人初夏的时候吃什嘛？</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/734243/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="Fractale9(碎之星)——大豆堇菜汤">Fractale9(碎之星)——大豆堇菜汤</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/729603/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="大豆棉花木瓜，源于进化论的生物学技术浅谈">大豆棉花木瓜，源于进化论的生物学技术浅谈</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/727107/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="《看不见的厨房》关于菜山药和铁棍山药">《看不见的厨房》关于菜山药和铁棍山药</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/722994/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="一个汪待在家，心里苦啊！">一个汪待在家，心里苦啊！</a></li>
                                
                            
                            </ul>
                        </div>
                    
                    </div>
                    
                
                    
                        <div class="contents-r">
                    
                        <div class="content">
                            <h2 class="content-title">人文</h2>
                            <ul>
                            
                                
                                    <li class="content-article">
                                        <a href="http://www.guokr.com/post/735686/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" class="img">
                                            <img src="../Picture/nfjpztmvcvq5hrv_b9isgcdksr0xnh3laddd45pqxpzyagaaugeaafbo.png" alt="儿童节，果壳实验室把童年玩具来了一次大升级！"/><b></b>
                                        </a>
                                        <div class="cont">
                                            <h3><a href="http://www.guokr.com/post/735686/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank">儿童节，果壳实验室把童年玩具来了一次大升级！</a></h3>
                                            <p>儿童节要到了，我们基于小时候的回忆，研发出了...<a href="http://www.guokr.com/post/735686/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank">详细</a></p>
                                        </div>
                                    </li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/735992/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="【乱画】黑暗之魂3同人">【乱画】黑暗之魂3同人</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/735312/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="《美国队长：史蒂夫·罗杰斯》发布惊人“剧透”">《美国队长：史蒂夫·罗杰斯》发布惊人“剧透”</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/735138/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="【手作】大道至简">【手作】大道至简</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/734878/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="【果壳魅影】“幽灵船说”">【果壳魅影】“幽灵船说”</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/727619/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="【手绘】海洋生物">【手绘】海洋生物</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/732341/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="刀剑乱舞X口袋妖怪">刀剑乱舞X口袋妖怪</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/723269/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="78岁的老奶奶，开着古董皮卡环游世界">78岁的老奶奶，开着古董皮卡环游世界</a></li>
                                
                            
                            </ul>
                        </div>
                    
                
                    
                        <div class="content">
                            <h2 class="content-title">娱乐</h2>
                            <ul>
                            
                                
                                    <li class="content-article">
                                        <a href="http://www.guokr.com/post/736816/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" class="img">
                                            <img src="../Picture/7hw4x4mciu2xyylajcl_bgra7noort7zayrujv1csgtmagaagaeaafbo.png" alt="看看“别人家的”的Geek主题婚礼……"/><b></b>
                                        </a>
                                        <div class="cont">
                                            <h3><a href="http://www.guokr.com/post/736816/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank">看看“别人家的”的Geek主题婚礼……</a></h3>
                                            <p>主要是图……

本人已婚，但是和家属力排...<a href="http://www.guokr.com/post/736816/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank">详细</a></p>
                                        </div>
                                    </li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/735501/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="卷福拍新剧了，这次演的是自己第16代曾祖伯父">卷福拍新剧了，这次演的是自己第16代曾祖伯父</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/735135/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="【预告】六一“围海造填”有奖活动">【预告】六一“围海造填”有奖活动</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/735083/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="你为什么总是读不完文章？">你为什么总是读不完文章？</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/735018/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="学科拟人系列漫画12">学科拟人系列漫画12</a></li>
                                
                            
                                
                                    <li><a href="http://www.guokr.com/post/732931/" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title="此旋律响起，我们就知道又要死主角了">此旋律响起，我们就知道又要死主角了</a></li>
                                
                            
                                
                                    <li><a href="" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title=""></a></li>
                                
                            
                                
                                    <li><a href="" data-gaevent="home_recommend_posts:v1.1.1.1:post" target="_blank" title=""></a></li>
                                
                            
                            </ul>
                        </div>
                    
                    </div>
                    
                
                
            </div>
        </div>
        <div class="side">
            
            <div id="bdadm-624085" class="side-advert-top"></div>
             
            <div class="side-title gclear">
                <h2>热门小组</h2>
                <a id="refreshGroups" href="javascript:void 0;" class="side-title-txt">换一换</a>
            </div>
            <div id="newGroups">
                
                <ul class="side-group ">
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/29/" title="爱宠" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/xilfx13hb9m1tfmkle1s9rxndbmxivn_qcdztxkykvogaaaaoaaaaepq.jpg" alt="爱宠" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/29/">爱宠</a>
                                
                            </h3>
                            <span>465420人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">主人宠我们，我们爱主人，最多宠爱，尽在爱宠。
主人来这里学习专业可行的宠物护理指导，
那我们就秀出我们的故事和美照来求交往吧！
汪汪~喵呜~吱吱~啾啾~#%#￥^*%&amp;……宠物联谊会进行中，非诚勿扰！

            </p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/32/" title="文艺科学" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/rhnxr1w8mrcaewevvbn4qoqdh7nmrj9hjmm8zrimsxygaaaaoaaaaepq.jpg" alt="文艺科学" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/32/">文艺科学</a>
                                
                            </h3>
                            <span>129892人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">科学+艺术+blabla，用另一视角从更宽泛的外围来审视科学的内涵</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/344/" title="创业者园地" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/_ivxn_kpnct6lvtcvhe0b7hnu4ipdwc0ikutx17ow2kgaaaaoaaaafbo.png" alt="创业者园地" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/344/">创业者园地</a>
                                
                            </h3>
                            <span>137480人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">创业是年轻的动力，不想打工一辈子，自己干！
当老板，做中国的jobs！
更多福利请关注科学创业专区：
http://zone.guokr.com/area/startup/</p>
                            </div>
                        </div>
                    </li>
                
                </ul>
                
                <ul class="side-group ghide">
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/511/" title="天马行空" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/bsub3qxqqdisaqrich9wp9pmfneu7z1lsb7o4kyytoegaaaaoaaaaepq.jpg" alt="天马行空" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/511/">天马行空</a>
                                
                            </h3>
                            <span>245人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">每个人都有突发奇想的时候。

记录下来，和大家分享探讨你的灵感吧！</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/34/" title="微科幻" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/u1hzdo-ud_6zxxdphl9ii3xzmh25feb3eav7umn1rdigaaaaoaaaaepq.jpg" alt="微科幻" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/34/">微科幻</a>
                                
                            </h3>
                            <span>269640人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">
科学的楼上住着幻想！
如果你对科幻有点儿兴趣，欢迎来到这个楼层。
这是一个科幻话题的集中地。无论是三言两语的感想，还是深入浅出的探讨，都欢迎在这里交流。
关于科学、关于幻想、关于未来、关于我们都想了解的可能。

友情小虫洞
未来事务管理局
Doctor Who</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/36/" title="自然控" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/fsvqllj6wcrv8cccc5ehm5pgqzwg7tyilzdeba34ntkgaaaaoaaaaepq.jpg" alt="自然控" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" class="super-group-name" target="_blank" href="http://www.guokr.com/group/36/">自然控</a>
                                <a class="gicon-super" title="此小组处于高维空间，拥有更多功能与玩法" href="http://www.guokr.com/question/495009/" target="_blank"></a>
                                
                            </h3>
                            <span>1086625人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">不论是动物植物，还是天文地理，其实自然控就想平和地在一起讨论各自喜欢的东西而已，你们懂的。
注意：小组置顶贴中有最新的自然控版规（试行版），请大家仔细阅读。</p>
                            </div>
                        </div>
                    </li>
                
                </ul>
                
                <ul class="side-group ghide">
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/28/" title="健康朝九晚五" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/ezgllrsqdepuo-aiwibnev5pfmb7vfqchvj5llma8aegaaaaoaaaafbo.png" alt="健康朝九晚五" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/28/">健康朝九晚五</a>
                                
                            </h3>
                            <span>785517人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis"> 
健康朝九晚五小组不能隔着网络为你诊断、医你百病。
在此尽责提醒：医院这个机构比一个不知是否有医师资格的网友更值得信赖！


相关小组推荐：内衣Bra</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/40/" title="谣言粉碎机" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/f2vlctlab7gg_4nop1l9ss7dtl2wfkm-vugknp6jousgaaaaoaaaaepq.jpg" alt="谣言粉碎机" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" class="super-group-name" target="_blank" href="http://www.guokr.com/group/40/">谣言粉碎机</a>
                                <a class="gicon-super" title="此小组处于高维空间，拥有更多功能与玩法" href="http://www.guokr.com/question/495009/" target="_blank"></a>
                                
                            </h3>
                            <span>1201688人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">爱真相，不爱流言。
爱考证，不爱轻信。
爱证据，不爱权威。
爱科学，不爱迷信。
这是谣言粉碎机的小组。
捍卫真相与细节，一切谣言将在这里被终结，
由我，由你。

PS：近期将会进行小组内容整治活动，一些违反了组规的帖子会受到超维度打击而转移或关闭，请大家理性讨论，避免无意义的争吵。【关于中医话题的组...</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/69/" title="吃货研究所" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/g7ffkgvr3zarbo1nic16-_u6msk-o9qtzxlbb86c7zmgaaaaoaaaaepq.jpg" alt="吃货研究所" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" class="super-group-name" target="_blank" href="http://www.guokr.com/group/69/">吃货研究所</a>
                                <a class="gicon-super" title="此小组处于高维空间，拥有更多功能与玩法" href="http://www.guokr.com/question/495009/" target="_blank"></a>
                                
                            </h3>
                            <span>1039823人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">美食，名厨，餐厅，小吃，我们愿意分享你的美食之路。食物背后有趣的化学反应及相应的科学原理；厨房里发生的故事；一切奇葩有趣的食物；分享出来美味加倍这种秘密任务我会随便告诉你？（捂嘴笑
美味、营养、健康，一个都不能少.

【醒目】新帖可以加标签啦，但是帖子的标签请不要乱用，对于乱用标签的帖子，给予删帖处...</p>
                            </div>
                        </div>
                    </li>
                
                </ul>
                
                <ul class="side-group ghide">
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/70/" title="亲子时间" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/gmsx_gsb0vlkjkseif9qwynxnlyzq5bgtnap1ivk-eggaaaaoaaaaepq.jpg" alt="亲子时间" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/70/">亲子时间</a>
                                
                            </h3>
                            <span>16941人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">怀孕是一个折磨人的过程，
不过所谓的血浓于水、骨肉亲情，大概就是这样活活折磨出来的。
等小孩出生，一切都变得有意思，
这个又哭又笑的小人儿到底在想什么、做什么……
谁也说不好，一起聊聊吧。</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/39/" title="死理性派" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/gvukkbw2tkg1fzycyz4u2xew2m3fxk3rwd_vw3ndnmggaaaaoaaaaepq.jpg" alt="死理性派" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" class="super-group-name" target="_blank" href="http://www.guokr.com/group/39/">死理性派</a>
                                <a class="gicon-super" title="此小组处于高维空间，拥有更多功能与玩法" href="http://www.guokr.com/question/495009/" target="_blank"></a>
                                
                            </h3>
                            <span>822606人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">身为死理性派，我们并不是为了理性而死，而是为了理性而生的。
本组欢迎各种各样的学科讨论，包括一些看起来很无厘头或者是很闲的问题。本组允许纯数学、计算科学、统计学、物理学、化学、生物学以及本列表中未列举的自然科学的学科进行讨论；如果讨论社会科学和哲学，我们希望这种讨论能符合自然科学的实证标准。</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/31/" title="谋杀 现场 法医" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/-igipb2v8c7wrdon-zgm0hwnpt8wcgr7kwh0fq6gvtggaaaaoaaaaepq.jpg" alt="谋杀 现场 法医" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/31/">谋杀 现场 法医</a>
                                
                            </h3>
                            <span>985078人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">本小组主要以讨论研究连环杀手、著名犯罪案例以及法医学技术为主。
讨论内容可以是真实案例，也可以是电影美剧；
可以探讨犯罪心理、也可以聊聊现场调查技术；
当然，扒一扒热播美剧的八卦也不错。
不支持刑事案件法律求助帖，请移步【生活与法】小组。
注意，无码现场图可能会引起他人不适，如需讨论请以链接形式发布...</p>
                            </div>
                        </div>
                    </li>
                
                </ul>
                
                <ul class="side-group ghide">
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/73/" title="美丽也是技术活" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/v9bfpl1jfn9sujdblmlktdphgrgzbjbvdm9roavmykagaaaaoaaaaepq.jpg" alt="美丽也是技术活" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/73/">美丽也是技术活</a>
                                
                            </h3>
                            <span>1009351人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">护肤、美容、纤体、整形……
如今我们有更多的机会成为美女，但哪条路都没那么简单！
你看得懂那些瓶瓶罐罐吗？
你明白那些神奇的注射和填充吗？
你知道减肥的种种捷径和误区吗？
总之，美丽是一门技术，
想漂亮，来果壳修炼修炼！

----------------------
本组广告、代购杀无赦，闲置删帖...</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/60/" title="Hello world!" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/9quaqiub9cj621uj4hypw-izzkxmnkowi_d9hic-uzygaaaaoaaaaepq.jpg" alt="Hello world!" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" target="_blank" href="http://www.guokr.com/group/60/">Hello world!</a>
                                
                            </h3>
                            <span>125609人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">#include &lt;stdio.h&gt;
void main()
{ 
    double world;
    unsigned letter;
    short stay;
    long memories;
    printf(&#34;I miss you.\n&#34;);
}</p>
                            </div>
                        </div>
                    </li>
                
                    <li>
                    <a data-gaevent="home_group_hot:home" href="http://www.guokr.com/group/376/" title="【水组】-水煮果壳" target="_blank" class="pt-pic"><img width="48" height="48" src="../Picture/zln15afzjxpmlkpidybtej_v_hzdy1-9gn5rbpdmo-ogaaaaoaaaaepq.jpg" alt="【水组】-水煮果壳" /></a>
                        <div class="pt-txt">
                            <h3>
                                
                                <a data-gaevent="home_group_hot:home" class="super-group-name" target="_blank" href="http://www.guokr.com/group/376/">【水组】-水煮果壳</a>
                                <a class="gicon-super" title="此小组处于高维空间，拥有更多功能与玩法" href="http://www.guokr.com/question/495009/" target="_blank"></a>
                                
                            </h3>
                            <span>738525人加入</span>
                            <div class="pt-txt-d">
                                <p class="gellipsis">
1、这是一个专门灌水、吐槽、版聊、无聊向的小组！
2、为了让其他小组更专业，更经典，更能传承GEEK精神，这里是其他小组的泄洪区，经典、专业贴留给你们，水贴留给我们！(不是所有人都是专家！不是专家所有的话都是经典的！)
3、不知道发哪的帖子发这里！
4、学习大禹治水的精神，对水儿疏而不堵！
5、水...</p>
                            </div>
                        </div>
                    </li>
                
                </ul>
                
            </div>
            <div id="bdadm-633161" class="side-advert"></div>
            
            <div class="side-title-border gclear">
                <h2>社区热点</h2>
            </div>
            <div class="side-post gclear">
                <ul>
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_side-posts:home" href="http://www.guokr.com/post/735686/" title="儿童节，果壳实验室把童年玩具来了一次大升级！" target="_blank">儿童节，果壳实验室把童年玩具来了一次大升级！</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_side-posts:home" href="http://www.guokr.com/post/708297/" title="【餐桌物种日历】5月29日 黄鳍金枪鱼" target="_blank">【餐桌物种日历】5月29日 黄鳍金枪鱼</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_side-posts:home" href="http://www.guokr.com/post/735887/" title="你了解时间么？" target="_blank">你了解时间么？</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_side-posts:home" href="http://www.guokr.com/post/736626/" title="宇宙中还有一种基本力没有被发现，是真的吗？这种力会是怎样的形式？" target="_blank">宇宙中还有一种基本力没有被发现，是真的吗？这种力会是怎样的形式？</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_side-posts:home" href="http://www.guokr.com/post/736646/" title="【冷犯罪】批判的武器，终究不能代替武器的批判：那愤怒的米国女孩啊……" target="_blank">【冷犯罪】批判的武器，终究不能代替武器的批判：那愤怒的米国女孩啊……</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_side-posts:home" href="http://www.guokr.com/post/736001/" title="近日在x宝选万用表和兆欧表，一则关于fluke 17b+的买家评论令我无所适从，请各位给点建议。" target="_blank">近日在x宝选万用表和兆欧表，一则关于fluke 17b+的买家评论令我无所适从，请各位给点建议。</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_side-posts:home" href="http://www.guokr.com/post/736517/" title="我要选A，别拦我" target="_blank">我要选A，别拦我</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_side-posts:home" href="http://www.guokr.com/post/736613/" title="惊现人间的“蛤蟆精”，你从哪里来？" target="_blank">惊现人间的“蛤蟆精”，你从哪里来？</a></li>
                    
                    
                </ul>
            </div>
            

            <div class="side-title-border gclear">
                <h2>果壳专区</h2>
                <a data-gaevent="home_zone_more:home" href="http://www.guokr.com/zone/#special" class="side-title-txt">更多专区</a>
            </div>
            <div class="side-zone gclear">
                <div id="bdadm-624089" class="side-zone-advert"></div>
                <ul>
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://zone.guokr.com/area/space_hackthon/" title="腕上黑客养成计划" target="_blank">腕上黑客养成计划</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://zone.guokr.com/area/huoxingqingbaoju/" title="果壳网总编徐来带你看《火星情报局》" target="_blank">果壳网总编徐来带你看《火星情报局》</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://www.guokr.com/zone/impossible/" title="时间旅行不可能？" target="_blank">时间旅行不可能？</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://zuoren.zone.guokr.com" title="做人这件事，你知道多少！" target="_blank">做人这件事，你知道多少！</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://www.guokr.com/test/guokrfact-beverage/" title="抗谣性测试 之 饮料篇" target="_blank">抗谣性测试 之 饮料篇</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://www.guokr.com/test/venucia/" title="测试你的充·电力" target="_blank">测试你的充·电力</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://www.guokr.com/zone/uranium/" title="核里的宇宙" target="_blank">核里的宇宙</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://www.guokr.com/zone/chewinggum/#" title="口香糖探秘之旅" target="_blank">口香糖探秘之旅</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://zone.guokr.com/area/startup/" title="科学创业" target="_blank">科学创业</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://www.guokr.com/youthplan/" title="万有青年养成计划" target="_blank">万有青年养成计划</a></li>
                    
                    
                    
                    <li><b class="prefix-dot"></b><a data-gaevent="home_zone:home" href="http://www.guokr.com/zone/coating/" title="涂化的世界" target="_blank">涂化的世界</a></li>
                    
                    
                </ul>
            </div>

            <div class="side-link">
                <a class="weixin" href="javascript:void(0)">关注微信公众号<span></span></a>
                <a class="weibo" href="http://weibo.com/guokr42" target="_blank">关注微博<span></span></a>
                <div class="dimensions-code">
                    <span class="arrow">
                        <i></i>
                    </span>
                    <img src="../Picture/dimensions-code.jpg">
                </div>
            </div>


            <div class="side-handpick">
                <a class="handpick-iphone" href="http://itunes.apple.com/cn/app/id471708113?mt=8" data-gaevent="home_handpick_iphone:home" target="_blank"></a>
                <a class="handpick-android" href="http://1.im.guokr.com/downloads/GuokrCollection-QDHome-release.apk" data-gaevent="home_handpick_android:home" target="_blank"></a>
                <a class="handpick-link" href="http://www.guokr.com/mobile/" data-gaevent="home_handpick_link:home" target="_blank"></a>
            </div>
        </div>
    </div>
<div id="bdadm-624092" class="bottom-ads"></div>

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
    </div>
    <script>
        var g_m_url = "http:\/\/m.guokr.com\/"
    </script>
    
    <script>
        var g_page_name = "indexPage",
            GJS_VERSION = 'doom',
            GJS_PRELOAD = ['ga', 'jQuery', 'GUtils', 'api', 'share'],
            ukey = null,
            client_id = 32353,
            url_signin = "http:\/\/www.guokr.com\/sso\/?suppress_prompt=1&lazy=y&success=http%3A%2F%2Fwww.guokr.com%2F",
            url_signup = "https:\/\/account.guokr.com\/sign_up\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Fgroup%252Fuser%252Frecent_replies%252F",
            weibo_signin = "https:\/\/account.guokr.com\/weibo\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252F",
            renren_signin = "https:\/\/account.guokr.com\/renren\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252F",
            qq_signin = "https:\/\/account.guokr.com\/qq\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252F";
            douban_signin = "https:\/\/account.guokr.com\/douban\/sign_in\/?success=http%3A%2F%2Fwww.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252F";
        window["_BFD"] = window["_BFD"] || {};
            _BFD.client_id = "Cguoke";
            _BFD.BFD_INFO = {
                "user_id" : ""
            };
            _BFD.script = document.createElement("script");
            _BFD.script.type = "text/javascript";
            _BFD.script.async = true;
            _BFD.script.charset = "utf-8";
            document.getElementsByTagName("head")[0].appendChild(_BFD.script);
    </script>
    <script src="/Public/Home/assets/Scripts/i.js"></script>
    <script src="/Public/Home/assets/Scripts/main.js"></script>
    <script src="/Public/Home/assets/Scripts/index.js"></script>
    <!-- cbjs.baidu.com is too slow for us so let's mirroring it -->
	<script type="text/javascript" src="/Public/Home/assets/Scripts/m.js"></script>
    <script type="text/javascript">
    BAIDU_CLB_fillSlotAsync('624091', 'bdadm-624091');
    BAIDU_CLB_fillSlotAsync('624095', 'bdadm-624095');
    BAIDU_CLB_fillSlotAsync('624085', 'bdadm-624085');
    BAIDU_CLB_fillSlotAsync('624089', 'bdadm-624089');
    BAIDU_CLB_fillSlotAsync('624083', 'bdadm-624083');
    BAIDU_CLB_fillSlotAsync('624099', 'bdadm-624099');
    BAIDU_CLB_fillSlotAsync('624101', 'bdadm-624101');
    BAIDU_CLB_fillSlotAsync('633161', 'bdadm-633161');
    BAIDU_CLB_fillSlotAsync('624092', 'bdadm-624092');</script>
    <script src="/Public/Home/assets/Scripts/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$('.focus-content').find('img').css('width','330px').css('height','255');
	</script>
</body>
</html>