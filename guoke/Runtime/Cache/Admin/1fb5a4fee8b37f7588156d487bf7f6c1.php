<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
	
		<!-- Basic -->
    	<meta charset="UTF-8" />

		<title>果壳后台登录</title>
	
		<!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
		<!-- Import google fonts -->
        <link href='http://fonts.useso.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        
		<!-- Favicon and touch icons -->
		<link rel="shortcut icon" href="/Public/Admin/assets/ico/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/Public/Admin/assets/ico/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="/Public/Admin/assets/ico/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="/Public/Admin/assets/ico/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="/Public/Admin/assets/ico/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="/Public/Admin/assets/ico/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="/Public/Admin/assets/ico/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="/Public/Admin/assets/ico/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="/Public/Admin/assets/ico/apple-touch-icon-152x152.png" />
		
	    <!-- start: CSS file-->
		
		<!-- Vendor CSS-->
		<link href="/Public/Admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Public/Admin/assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
		<link href="/Public/Admin/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		
		<!-- Plugins CSS-->
		<link href="/Public/Admin/assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />	
		
		<!-- Theme CSS -->
		<link href="/Public/Admin/assets/css/jquery.mmenu.css" rel="stylesheet" />
		
		<!-- Page CSS -->		
		<link href="/Public/Admin/assets/css/style.css" rel="stylesheet" />
		<link href="/Public/Admin/assets/css/add-ons.min.css" rel="stylesheet" />
		
		<style>
			footer {
				display: none;
			}
		</style>
		
		<!-- end: CSS file-->	
	    
		
		<!-- Head Libs -->
		<script src="/Public/Admin/assets/plugins/modernizr/js/modernizr.js"></script>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->		
		
	</head>

	<body>
		<!-- Start: Content -->
		<div class="container-fluid content">
			<div class="row">
				<!-- Main Page -->
				<div id="content" class="col-sm-12 full">
					<div class="row">
						<div class="login-box">
							<div class="panel">
								<div class="panel-body">								
									<div class="header bk-margin-bottom-20 text-center">										
										<img src="/Public/Admin/assets/img/logo.png" class="img-responsive" style="padding:0px" alt="" />
									</div>		
									<form class="form-horizontal login" action="<?php echo U('Admin/Login/action');?>" method="post">
										<div class="bk-padding-left-20 bk-padding-right-20">
											<div class="form-group">
												<label>管理员:</label>
												<div class="input-group input-group-icon">
													<input type="text" name="Admin_name" class="form-control bk-radius" id="username" placeholder="Username"/>
													<span class="input-group-addon">
														<span class="icon">
															<i class="fa fa-user"></i>
														</span>
													</span>
												</div>
											</div>											
											<div class="form-group">
												<label>密码</label>
												<div class="input-group input-group-icon">
													<input type="password" name="password" class="form-control bk-radius" id="password" placeholder="Password"/>
													<span class="input-group-addon">
														<span class="icon">
															<i class="fa fa-key"></i>
														</span>
													</span>
												</div>
											</div>
											<div class="row bk-margin-top-20 bk-margin-bottom-10">
												<div class="col-sm-8">
													<div class="checkbox-custom checkbox-default">
														<input id="RememberMe" name="rememberme" type="checkbox" />
													</div>
												</div>
												<div class="col-sm-4 text-right">
													<button type="submit" class="btn btn-primary hidden-xs">登 录</button>
													<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs bk-margin-top-20">Log In</button>
												</div>
											</div>
											<div class="text-with-hr">
												<span>Welcome to the shell</span>
											</div>											
							
										</div>
									</form>
								</div>
							</div>
									
						</div>
					</div>			
				</div>
				<!-- End Main Page -->
			</div>
		</div><!--/container-->
		
		
		<!-- start: JavaScript-->
		
		<!-- Vendor JS-->				
		<script src="/Public/Admin/assets/vendor/js/jquery.min.js"></script>
		<script src="/Public/Admin/assets/vendor/js/jquery-2.1.1.min.js"></script>
		<script src="/Public/Admin/assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="/Public/Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/Public/Admin/assets/vendor/skycons/js/skycons.js"></script>	
		
		<!-- Plugins JS-->
		<script src="/Public/Admin/assets/plugins/bootkit/js/bootkit.js"></script>
		
		<!-- Theme JS -->		
		<script src="/Public/Admin/assets/js/jquery.mmenu.min.js"></script>
		<script src="/Public/Admin/assets/js/core.min.js"></script>
		
		<!-- Pages JS -->
		<script src="/Public/Admin/assets/js/pages/page-login.js"></script>
		
		<!-- end: JavaScript-->
		
	</body>
	
</html>