<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/global.js" ></script>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/register.css" rel='stylesheet' type="text/css" />
	<style type="text/css">
		#email{
			width: 600px;
			margin: auto;
			margin-top: 100px;
		}
		.check_ok{
			width: 100px;
			margin-top:0px;
		}
		.check_reser{
			width: 100px;
			margin-top:0px;
			background:#5A94CE;
		}
		.yz_input{
			margin:0px;
			margin-top:10px;
		}
		#register_progress{
			background-position:0px -40px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#email_yzm").ready(function(){
				$("#email_yzm").blur(function(){
					$.ajax({
						type:"post",
						url:"/index.php/Home/User/CheckMail_Yzm",
						data:{
							email_yzm:$(this).val()
						},
						success:function(data)
						{
							data=JSON.parse(data);
							if(data.status)
							{
								$(".check_ok").css("background","#FBD10A");
							}
							else
							{
								$(".yz_input").css("display","block");
							}
						}
					});
				});
			});
			$(".check_ok").ready(function(){
				$(".check_ok").click(function(){
					$.ajax({
						type:"post",
						url:"/index.php/Home/User/RegisterTwo",
						data:{
							email_yzm:$("#email_yzm").val()
						},
						success:function(data)
						{
							data=JSON.parse(data);
							if(data.status)
							{
								window.location.href="/index.php/Home/User/RegisterSuccess";
							}
							else
							{

							}
						}
					});
				});
			});
		});
	</script>
</head>
<body>
<div id="page">
		<!-- 引入头部 -->
		<script type="text/javascript">
			getData("header");
		</script>

		<!-- 注册页主干开始 -->
		<div id="content">
			<div id="register">
				<div id="register_top">
						<h2>注册开源工大</h2>
				</div>
				<div id="register_content">
					<div id="register_progress"></div>
					<!-- 验证邮箱表单开始 -->
					<div id="email">
						<h4>我们已向你的邮箱 1048229044@qq.com 发送了验证码，请登录你的邮箱完成验证.</h4>
						<label>验证码：</label><input class="input_text" id="email_yzm" type="text" placeholder="请输入验证码"/>
						<button type="button" class="input_button check_ok">确定</button>
						<span class="yz_input">
							<img src="/Public/Images/cancel.png" />
							<label>验证码错误！</label>
						</span><br /><br />
						<span>如果你长时间未收到邮件，你可以点击这里重新发送邮件</span>
						<button type="button" class="input_button check_reser">重新发送</button>
					</div>
					<!-- 验证邮箱表单结束 -->
				</div>
			</div>
		</div>
		<!-- 注册页主干结束 -->

		<!-- 引入尾部 -->
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
</body>
</body>
</html>