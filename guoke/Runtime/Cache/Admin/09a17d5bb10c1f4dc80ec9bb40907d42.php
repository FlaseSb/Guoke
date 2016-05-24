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
                      <li><a href="form-elements.html"><span class="text">文章审核</span></a></li>
                      <li><a href="form-wizard.html"><span class="text">文章管理</span></a></li>
                      <li><a href="form-dropzone.html"><span class="text"> 举报管理</span></a></li>
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
                      <li><a href="chart-flot.html"><span class="text"> 问题列表</span></a></li>
                      <li><a href="chart-xchart.html"><span class="text"> 审核问题</span></a></li>
                      <li><a href="chart-other.html"><span class="text"> 标签管理</span></a></li>
                    </ul>
                  </li>                 
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-bolt" aria-hidden="true"></i><span>评论管理</span>
                    </a>
                    <ul class="nav nav-children">
                      <li><a href="chart-flot.html"><span class="text"> 科学评论管理</span></a></li>
                      <li><a href="chart-xchart.html"><span class="text"> 小组评论管理</span></a></li>
                      <li><a href="chart-other.html"><span class="text"> 问答评论管理</span></a></li>
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
  

	<div class="panel bk-widget bk-border-off">
		<div class="panel-body">
			<div class="text-left bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
				<div class="row">
					<div class="col-xs-2">
						<div class="bk-avatar">
							<img src="/Public<?php echo ($img); ?>"  class="img-circle bk-img-100 bk-border-info bk-border-3x">
						</div>
					</div>
						<h4 class="ziti" style="font-size:25px;line-height:100px;float:left"><?php echo ($name); ?></h4>
						<div class="col-md-3" style="float:right">
							<div class="panel bk-widget bk-border-off">
								<a class="panel-body bk-fg-primary bk-bg-white bk-ltr bk-padding-15">
									<div class="row">
										
										<div class="col-xs-8 text-center bk-vcenter">
											<h3 class="bk-margin-off">成员:<?php echo ($count); ?></h3>
										</div>
									</div>
									<div class="progress progress-xs bk-margin-off-bottom bk-margin-top-10">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($count); ?>%;">
										</div>
									</div>
									
								</a>
							</div>
						</div>
				</div>
			</div>
			<div class="bk-bg-white">
				<blockquote><p><?php echo ($About); ?></p></blockquote>
			</div>
				<!--  -->
	<div>
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">组员:</a></li>
	    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">最近动态</a></li>
	  </ul>

	  <!-- Tab panes -->
	  <div class="tab-content">
	  <!-- 操作 好友列表 -->
	  <input type="hidden" value='<?php echo ($Gid); ?>'>
	    <div role="tabpanel" class="tab-pane active" id="home">
	    	<?php if(is_array($res)): foreach($res as $key=>$v): ?><div class="bk-avatar huoqu"  data-toggle="modal" value="<?php echo ($v['Au_Uid']); ?>" data-target="#myModal" style="display:inline-block;margin-right:20px;margin-bottom:20px;cursor:pointer">
	    		<img src="/Public<?php echo ($v['User_Pic']); ?>" title="<?php echo ($v['User_Nickname']); ?>" class="img-circle bk-img-60 bk-border-primary bk-border-2x bk-border-darken User_Nickname">
	    	</div><?php endforeach; endif; ?>
	    </div>
	  <!-- 结束1 -->

	  <!-- 操作 最近动态 -->
	   <!-- 结束2 -->
	  </div>
	</div>
				<!--  -->
			<div class="bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
				<form role="form" action="javascript:">
					<div class="input-group">
						<input type="text" class="form-control zz">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-send-o"></i></button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div>
		<!-- Button trigger modal -->
		

		<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title ziti" id="myModalLabel">用户的信息</h4>
		      </div>
		      <div class="modal-body">
		       	<div class="text-left bk-bg-white bk-padding-top-40 bk-padding-bottom-10">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bk-vcenter text-center">                                
							<div class="bk-avatar">
								<img src="" alt=""  class="jk img-circle bk-img-120 bk-border-light-gray bk-border-3x">
							</div>
							<h4 class="bk-margin-top-10 bk-docs-font-weight-300 nameinfo"></h4>
						</div>
						<hr class="bk-margin-off">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">														
							<a class="col-xs-4 bk-bg-white bk-fg-primary bk-padding-top-20 bk-padding-bottom-20 text-center">
								<i class="fa fa-facebook"></i>
							</a>
							<a class="col-xs-4 bk-bg-white bk-fg-success bk-padding-top-20 bk-padding-bottom-20 text-center">
								<i class="fa fa-twitter"></i>
							</a>
							<a class="col-xs-4 bk-bg-white bk-fg-danger bk-padding-top-20 bk-padding-bottom-20 text-center">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>	
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left bk-vcenter text-center">
							<hr class="bk-margin-off">
							<small class="b1"></small>
							<div class="progress bk-margin-bottom-10" style="height: 8px;">
								<div class="progress thin progress-striped active">
									<div class="progress-bar progress-bar-primary bt1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
							<small class="b2"></small>
							<div class="progress bk-margin-bottom-10" style="height: 8px;">
								<div class="progress thin progress-striped active">
									<div class="progress-bar progress-bar-danger bt2" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%;">
										<span class="sr-only">88% Complete</span>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

	<script src="/Public/Admin/assets/js/jquery-1.8.3.min.js"></script>
	<script>
	//代做
		$('.huoqu').live('click',function(){
			var val=$(this).attr('value');
			var bq=$('input[type="hidden"]').val();
			// alert(val);
			// 'Post_Hot' => string '111' (length=3)
   //    'User_Nickname' => string '萧山张国荣' (length=15)
   //    'User_Pic' => string '/Uploads/2016-05-20/573e5e15dd40a.jpg' (length=37)
			// 
			$.post(
				"<?php echo U('Admin/Group/Userinfo');?>",
				{id:val,bq:bq},
				function(data){
					// console.log(data.length);
					$('.jk').attr('src','/Public'+data[0].User_Pic);
					var name=data[0].User_Nickname;
					var email=data[0].User_Email;
					//发帖
					var fatie=data[0].fatie;
					var count=data[0].count;
					//回复
					var hcount=data[0].hcount;
					var hfu=data[0].hfu;
					// console.log(hcount);
					// console.log(hfu);
					// console.log(name);
					if(name==null){
					$('.nameinfo').html(email);
					}else{
					$('.nameinfo').html(name);
					}

					var b1=Math.round((fatie/count)*100)+"%";
					var b2=Math.round((hfu/hcount)*100)+"%";

				
					$('.b1').html('发帖度:'+b1);
					$('.bt1').attr('style','width:'+b1);

					$('.b2').html('回复度:'+b2);
					$('.bt2').attr('style','width:'+b2);
				}
			)
		})

		$('.btn-default').click(function(){
			// alert(1);
			var z=$('.zz').val();
			var bq=$('input[type="hidden"]').val();
			$.get(
				"<?php echo U('Admin/Group/findUser');?>",
				{name:z,Gid:bq},
				function(data){
					// console.log(data);
					$('.tab-pane').children().remove();
					for(var i=0;i<data.length;i++){

						var f=$('<div class="bk-avatar huoqu"data-toggle="modal" value="'+data[i].Au_Uid+'" data-target="#myModal" style="display:inline-block;margin-right:20px;margin-bottom:20px;cursor:pointer"><img src="/Public'+data[i].User_Pic+'" title="'+data[i].User_Nickname+'" class="img-circle bk-img-60 bk-border-primary bk-border-2x bk-border-darken User_Nickname"></div>');
						$('.tab-pane').append(f);
					}
				}
			)
		})
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