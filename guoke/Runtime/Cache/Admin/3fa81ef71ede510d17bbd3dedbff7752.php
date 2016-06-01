<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic -->
      <meta charset="UTF-8" />

    <title>Dashboard | Fire - Admin Template</title>
   
    <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <!-- Import google fonts -->
       <!--  <link href='http://fonts.useso.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'> -->
        
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-touch-icon-152x152.png" />
    
      <!-- start: CSS file-->
    
    <!-- Vendor CSS-->
    <link href="/Public/Admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/vendor/css/pace.preloader.css" rel="stylesheet" />
    
    <!-- Plugins CSS-->
    <link href="/Public/Admin/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" /> 
    <link href="/Public/Admin/assets/plugins/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/magnific-popup/css/magnific-popup.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/jqvmap/jqvmap.css" rel="stylesheet" />
    
    <!-- Theme CSS -->
    <link href="/Public/Admin/assets/css/jquery.mmenu.css" rel="stylesheet" />
    
    <!-- Page CSS -->   
    <link href="/Public/Admin/assets/css/style.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/css/add-ons.min.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/css/my.css" rel="stylesheet" />
    
    <!-- end: CSS file--> 
      
    
    <!-- Head Libs -->
    <script src="/Public/Admin/assets/plugins/modernizr/js/modernizr.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="/Public/Admin/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="/Public/Admin/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    
    
  </head>
  
  <body>
  
    <!-- Start: Header -->
    <div class="navbar" role="navigation">
      <div class="container-fluid container-nav">
        <!-- Navbar Action -->
        <ul class="nav navbar-nav navbar-actions navbar-left">
          <li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
          <li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>      
        </ul>
        <!-- Navbar Left -->
        <div class="navbar-left">
          <!-- Search Form -->          
          <form class="search navbar-form">
            <div class="input-group input-search">
              <input type="text" class="form-control bk-radius" name="q" id="q" placeholder="Search...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>            
          </form>
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right">          
          <!-- Notifications -->
          <ul class="notifications hidden-xs">            
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-tasks"></i>
                <span class="badge">10</span>
              </a>
              <ul class="dropdown-menu update-menu" role="menu">
                <li><a href="#"><i class="fa fa-database bk-fg-primary"></i> Database </a></li>
                <li><a href="#"><i class="fa fa-bar-chart-o bk-fg-primary"></i> Connection </a></li>
                <li><a href="#"><i class="fa fa-bell bk-fg-primary"></i> Notification </a></li>
                <li><a href="#"><i class="fa fa-envelope bk-fg-primary"></i> Message </a></li>
                <li><a href="#"><i class="fa fa-flash bk-fg-primary"></i> Traffic </a></li>
                <li><a href="#"><i class="fa fa-credit-card bk-fg-primary"></i> Invoices </a></li>
                <li><a href="#"><i class="fa fa-dollar bk-fg-primary"></i> Finances </a></li>
                <li><a href="#"><i class="fa fa-thumbs-o-up bk-fg-primary"></i> Orders </a></li>
                <li><a href="#"><i class="fa fa-folder bk-fg-primary"></i> Directories </a></li>
                <li><a href="#"><i class="fa fa-users bk-fg-primary"></i> Users </a></li>   
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <span class="badge">5</span>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-menu-header">
                  <strong>Messages</strong>
                  <div class="progress progress-xs  progress-striped active">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
                    </div>
                  </div>
                </li>
                <li class="avatar">
                  <a href="page-inbox.html">
                    <img class="avatar" src="/Public/Admin/assets/img/avatar1.jpg" alt="" />
                    <div><div class="point point-primary point-lg"></div>New message</div>
                    <span><small>1 minute ago</small></span>              
                  </a>
                </li>
                <li class="avatar">
                  <a href="page-inbox.html">
                    <img class="avatar" src="/Public/Admin/assets/img/avatar2.jpg" alt="" />
                    <div><div class="point point-primary point-lg"></div>New message</div>
                    <span><small>3 minute ago</small></span>                
                  </a>
                </li>
                <li class="avatar">
                  <a href="page-inbox.html">
                    <img class="avatar" src="/Public/Admin/assets/img/avatar3.jpg" alt="" />
                    <div><div class="point point-primary point-lg"></div>New message</div>
                    <span><small>4 minute ago</small></span>                
                  </a>
                </li>
                <li class="avatar">
                  <a href="page-inbox.html">
                    <img class="avatar" src="/Public/Admin/assets/img/avatar4.jpg" alt="" />
                    <div><div class="point point-primary point-lg"></div>New message</div>
                    <span><small>30 minute ago</small></span>
                  </a>
                </li>
                <li class="avatar">
                  <a href="page-inbox.html">
                    <img class="avatar" src="/Public/Admin/assets/img/avatar5.jpg" alt="" />
                    <div><div class="point point-primary point-lg"></div>New message</div>
                    <span><small>1 hours ago</small></span>
                  </a>
                </li>           
                <li class="dropdown-menu-footer text-center">
                  <a href="page-inbox.html">View all messages</a>
                </li> 
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <span class="badge">3</span>
              </a>
              <ul class="dropdown-menu list-group">
                <li class="dropdown-menu-header">
                  <strong>Notifications</strong>
                  <div class="progress progress-xs  progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
                    </div>
                  </div>
                </li>
                <li class="list-item">
                  <a href="page-inbox.html">
                    <div class="pull-left">
                       <i class="fa fa-envelope-o bk-fg-primary"></i>
                    </div>
                    <div class="media-body clearfix">
                      <div>Unread Message</div>
                      <h6>You have 10 unread message</h6>
                    </div>                
                  </a>
                </li>
                <li class="list-item">
                  <a href="#">
                    <div class="pull-left">
                       <i class="fa fa-cogs bk-fg-primary"></i>
                    </div>
                    <div class="media-body clearfix">
                      <div>New Settings</div>
                      <h6>There are new settings available</h6>
                    </div>                
                  </a>
                </li>
                <li class="list-item">
                  <a href="#">
                    <div class="pull-left">
                       <i class="fa fa-fire bk-fg-primary"></i>
                    </div>
                    <div class="media-body clearfix">
                      <div>Update</div>
                      <h6>There are new updates available</h6>
                    </div>                
                  </a>
                </li>
                <li class="list-item-last">
                  <a href="#">
                    <h6>Unread notifications</h6>
                    <span class="badge">15</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- End Notifications -->          
          <!-- Userbox -->
          <div class="userbox">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <figure class="profile-picture hidden-xs">
                <img src="/Public/Admin/assets/img/avatar.jpg" class="img-circle" alt="" />
              </figure>
              <div class="profile-info">
                <span class="name">ADMIN</span>
                <span class="role"><i class="fa fa-circle bk-fg-success"></i> Administrator</span>
              </div>      
              <i class="fa custom-caret"></i>
            </a>
            <div class="dropdown-menu">
              <ul class="list-unstyled">
                <li class="dropdown-menu-header bk-bg-white bk-margin-top-15">            
                  <div class="progress progress-xs  progress-striped active">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
                    </div>
                  </div>              
                </li> 
                <li>
                  <a href="page-profile.html"><i class="fa fa-user"></i> Profile</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-wrench"></i> Settings</a>
                </li>
                <li>
                  <a href="page-invoice"><i class="fa fa-usd"></i> Payments</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-file"></i> File</a>
                </li>
                <li>
                  <a href="page-login.html"><i class="fa fa-power-off"></i> Logout</a>
                </li>
              </ul>
            </div>            
          </div>
          <!-- End Userbox -->
        </div>
        <!-- End Navbar Right -->
      </div>    
    </div>
    <!-- End: Header -->
       
    
    <!-- Start: Content -->
    <div class="container-fluid content"> 
      <div class="row">
      
        <!-- Sidebar -->
        <div class="sidebar">
          <div class="sidebar-collapse">
            <!-- Sidebar Header Logo-->
            <div class="sidebar-header">
              <img src="/Public/Admin/assets/img/flags/USA.png" style="width:145px;height:57px;margin-top:-5px" class="img-responsive" alt="" />
            </div>
            <!-- Sidebar Menu-->
            <div class="sidebar-menu">            
              <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-sidebar">
                 <!--  <div class="panel-body text-center">                
                    <div class="flag">
                      <img src="/Public/Admin/assets/img/flags/USA.png" width="50px" class="img-flags" alt="" />
                    </div>
                  </div> -->
                  <li class="active">
                    <a href="index.html">
                      <i class="fa fa-laptop" aria-hidden="true"></i><span>果壳</span>
                    </a>
                  </li>
                  
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-copy" aria-hidden="true"></i><span>用户管理</span>
                    </a>
                    <ul class="nav nav-children">
                      <li><a href="<?php echo U('Admin/User/index');?>"><span class="text"> 用户列表</span></a></li>
                      <li><a href="<?php echo U('Admin/User/add');?>"><span class="text"> 用户添加</span></a></li>

                      <li><a href="<?php echo U('Admin/User/edit');?>"><span class="text"> 用户管理</span></a></li>

                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-tasks" aria-hidden="true"></i><span>模块管理</span>
                    </a>
                    <ul class="nav nav-children">

                      <li><a href="<?php echo U('Admin/BiBo/add');?>"><span class="text">添加模块</span></a></li>
                      <li><a href="<?php echo U('Admin/BiBo/index');?>"><span class="text"> 模块列表</span></a></li>

                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-list-alt" aria-hidden="true"></i><span>科学人模块</span>
                    </a>
                    <ul class="nav nav-children">
                      <li><a href="<?php echo U('Admin/Scienceclass/index');?>"><span class="text">文章分类</span></a></li>
                      <li><a href="<?php echo U('Admin/Scienceaudit/index');?>"><span class="text">文章审核</span></a></li>
                      <li><a href="<?php echo U('Admin/Sciencearticle/index');?>"><span class="text">文章管理</span></a></li>
                      <li><a href="<?php echo U('Admin/User/index');?>"><span class="text"> 举报管理</span></a></li>

                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-table" aria-hidden="true"></i><span>小组模块</span>
                    </a>
                    <ul class="nav nav-children">

                      <li><a href="<?php echo U('Admin/Group/index');?>"><span class="text"> 小组列表</span></a></li>
                      <li><a href="<?php echo U('Admin/Group/Gjoin');?>"><span class="text"> 小组审核</span></a></li>
                      <li><a href="<?php echo U('Admin/Group/add');?>"><span class="text"> 小组添加</span></a></li>
                      <li><a href="table-editable.html"><span class="text"> 小组管理</span></a></li>

                      <li><a href="table-editable.html"><span class="text"> 举报管理</span></a></li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-random" aria-hidden="true"></i><span>问答模块</span>
                    </a>
                    <ul class="nav nav-children">


                      <li><a href="<?php echo U('Admin/Question/index');?>"><span class="text"> 问题列表</span></a></li>
                      <li><a href="<?php echo U('Admin/Queexamine/index');?>"><span class="text"> 审核问题</span></a></li>
                      <li><a href="<?php echo U('Admin/Quetag/index');?>"><span class="text"> 标签管理</span></a></li>
                    </ul>
                  </li>                 
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-bolt" aria-hidden="true"></i><span>评论管理</span>
                    </a>
                    <ul class="nav nav-children">
                      <li><a href="chart-flot.html"><span class="text"> 科学评论管理</span></a></li>
                      <li><a href="chart-xchart.html"><span class="text"> 小组评论管理</span></a></li>
                      <li><a href="<?php echo U('Admin/Quecomment/index');?>"><span class="text"> 问答回答管理</span></a></li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-map-marker" aria-hidden="true"></i><span>举报管理</span>
                    </a>
                    <ul class="nav nav-children">
                      <li><a href="<?php echo U('Admin/Report/success');?>"><span class="text"> 已处理列表</span></a></li>
                      <li><a href="<?php echo U('Admin/Report/wait');?>"><span class="text"> 待处理列表</span></a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- End Sidebar Menu-->
          </div>
          <!-- Sidebar Footer-->
          <div class="sidebar-footer">          
            <div class="small-chart-visits">
              <div class="small-chart" id="sparklineLineVisits"></div>
              <div class="small-chart-info">
                <label>New Visits</label>
                <strong>70,79%</strong>
              </div>
              <script type="text/javascript">
                var sparklineLineVisitsData = [15, 16, 17, 19, 15, 25, 23, 35, 29, 15, 30, 45];
              </script>
            </div>
            <ul class="sidebar-terms bk-margin-top-10">
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">About</a></li>
            </ul>         
          </div>
          <!-- End Sidebar Footer-->
        </div>
        <!-- End Sidebar -->
            
        <!-- Main Page -->
        <div class="main ">
          <!-- Page Header -->
          <div class="page-header">
            <div class="pull-left">
              <ol class="breadcrumb visible-sm visible-md visible-lg">                
                <li><a href="index.html"><i class="icon fa fa-home"></i>Home</a></li>
                <li class="active"><i class="fa fa-laptop"></i>Dashboard</li>
              </ol>           
            </div>
            <div class="pull-right">
              <h2>Dashboard</h2>
            </div>          
          </div>
  
  <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
  <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default bk-bg-white">
        <div class="panel-heading bk-bg-white">
          <h6><i class="fa fa-table red"></i><span class="break"></span>标签修改</h6>              
          <div class="panel-actions">
            <a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
            <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
          </div>
        </div>

        <div class="panel-body">
          <div class="row">
          </div>
            <form action="<?php echo U('Admin/Quetag/update');?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo ($res["tag_id"]); ?>">
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
              <thead>
                <tr>
                  <th>编辑头像</th>
                  <td><input name="hp" type="file"></td>
                </tr>
                <tr>
                  <th style="vertical-align: middle;">
                    标签描述
                  </th>
                  <td>
                    <script id="editor" name="tag_msg" type="text/plain" style="width:800px;height:400px;">
                      <?php echo ($tag_msg); ?>
                    </script>
                  </td>
                </tr>
                <tr>
                  <th>操作</th>
                  <td colspan="2" class="text-center">
                    <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" class="btn btn-info">返回</a>&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-warning">保存</button>
                  </td>
                </tr>
              </thead>
            </table>
            </form>
        </div>
      </div>
    </div>
  </div>  
<script src="/Public/Admin/assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor',{
     toolbars: [
         ['fullscreen', 'source', 'undo', 'redo'],
         ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
     ]
    });
</script>
          
        
        <!-- Footer -->
<!--         <div id="footer">
          <ul>
            <li>
              <div class="title">Memory</div>
              <div class="bar">
                <div class="progress light progress-sm  progress-striped active">
                  <div class="progress-bar progress-squared progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                  </div>
                </div>
              </div>      
              <div class="desc">4GB of 8GB</div>
            </li>
            <li>
              <div class="title">HDD</div>
              <div class="bar">
                <div class="progress light progress-sm  progress-striped active">
                  <div class="progress-bar progress-squared progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
                  </div>
                </div>
              </div>      
              <div class="desc">250GB of 1TB</div>
            </li>
            <li>
              <div class="title">SSD</div>
              <div class="bar">
                <div class="progress light progress-sm  progress-striped active">
                  <div class="progress-bar progress-squared progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                    70%
                  </div>
                </div>
              </div>      
              <div class="desc">700GB of 1TB</div>
            </li>
            <li>
              <div class="copyright">
                <p class="text-muted text-right">Fire <i class="fa fa-coffee"></i> Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>
              </div>
            </li>       
          </ul> 
        </div> -->
        <!-- End Footer -->
      
      </div>
    </div><!--/container-->
    
    
    <div class="clearfix"></div>    
    
    
    <!-- start: JavaScript-->
    
    <!-- Vendor JS-->       
    <script src="/Public/Admin/assets/vendor/js/jquery.min.js"></script>
    <script src="/Public/Admin/assets/vendor/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/Admin/assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/Public/Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/Admin/assets/vendor/skycons/js/skycons.js"></script>
    <script src="/Public/Admin/assets/vendor/js/pace.min.js"></script>
    
    <!-- Plugins JS-->
    <script src="/Public/Admin/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/Public/Admin/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/Public/Admin/assets/plugins/bootkit/js/bootkit.js"></script>
    <script src="/Public/Admin/assets/plugins/magnific-popup/js/magnific-popup.js"></script>
    <script src="/Public/Admin/assets/plugins/moment/js/moment.min.js"></script> 
    <script src="/Public/Admin/assets/plugins/fullcalendar/js/fullcalendar.js"></script>
    <script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.min.js"></script>
    <script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
    <script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
    <script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
    <script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.time.min.js"></script>
    <script src="/Public/Admin/assets/plugins/flot-tooltip/js/jquery.flot.tooltip.js"></script>
    <script src="/Public/Admin/assets/plugins/chart-master/js/Chart.js"></script>
    <script src="/Public/Admin/assets/plugins/jqvmap/jquery.vmap.js"></script>
    <script src="/Public/Admin/assets/plugins/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="/Public/Admin/assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="/Public/Admin/assets/plugins/sparkline/js/jquery.sparkline.min.js"></script>
    
    <!-- Theme JS -->   
    <script src="/Public/Admin/assets/js/jquery.mmenu.min.js"></script>
    <script src="/Public/Admin/assets/js/core.min.js"></script>
    
    <!-- Pages JS -->
    <script src="/Public/Admin/assets/js/pages/index.js"></script>
    
    <!-- end: JavaScript-->
    
  </body>
  
</html>