<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登陆</title>
	<script type="text/javascript" src="/html/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/html/Public/Js/global.js"></script>
	<link href="/html/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/html/Public/Css/login.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript">
		$("#login_btn").ready(function(){
			$("#login_btn").click(function(){
				$.ajax({
					type:'post',
					url:'/html/index.php/Home/User/LoginIn',
					data:{
						user:$("#username").val(),
						pwd:$("#password").val(),
						isRemember:$("#remember").attr("checked")
					},
					success:function(data)
					{
						$("#login_btn").text("登陆");
						data=JSON.parse(data);
						if(data.status)
						{
							setLogin(data.message);
							history.back();
						}
						else
						{
							alert(data.message);
						}
					}
				});
				$("#login_btn").text("登陆中...");
			});
			
		});
	</script>
</head>
<body>
<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<div id="login">
			<div id="login_left_top">
						<h2>登陆开源工大</h2>
					</div>
				<div id="login_left">
					<div id="login_left_button">
						<label>登陆邮箱：</label>
						<input type="text" class="input_text" id="username" placeholder="请填写注册时所用的邮箱，必填" /><br /><br />
						<label>登陆密码：</label>
						<input type="password" class="input_text" id="password" placeholder="请填写你的登陆密码，必填" /><label><a href="#">忘记密码？<a></label><br />
						<input type="checkbox" name="remember" id="remember" value="记住我" /><label for="remember">记住我</label>
						<button type="button" class="input_button" id="login_btn">登陆</button>
					</div>
					<div id="login_left_other">
						<h4>还可以使用其他帐号登录 （请点击相应图标进入登录页面）：</h4>
						<ul>
							<li><a href="http://www.baidu.com"><img src="/html/Public/Images/qq_login.gif" /></a></li>
						</ul>
					</div>
				</div>
				<div id="login_right">
					没有帐号？ <a href="#">注册新会员</a>
					<ul>
						<li>登录后可以？</li>
						<li>1.分享的开源软件和IT技术心得</li>
						<li>2.参与开源软件/新闻的讨论和评论</li>
						<li>3.与技术人士进行讨论和交流</li>
						<li>4.发布招聘信息、找工作</li>
					</ul>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
</body>
</html>