<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<title>注册</title>
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/global.js" ></script>
	<script type="text/javascript" src="/Public/Js/Register.js"></script>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/register.css" rel='stylesheet' type="text/css" />
=======
	<title>注册</title>
	<script type="text/javascript" src="/html/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/html/Public/Js/global.js" ></script>
	<script type="text/javascript" src="/html/Public/Js/Register.js"></script>
	<link href="/html/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/html/Public/Css/register.css" rel='stylesheet' type="text/css" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de

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

					<!-- 注册表单开始 -->
					<div id="register_progress_main">
						<div id="main_left">
							<!-- 昵称 -->
							<label>用户昵称：</label>
							<input name="username" type="text" class="input_text" placeholder="昵称由1-15位任意字符组成，必填" />
							<span class="yz_input" id="username">
<<<<<<< HEAD
								<img src="/Public/Images/ok.png" />
=======
								<img src="/html/Public/Images/ok.png" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
							</span>
							<br /><br />

							<!-- 邮箱 -->
							<label>登陆邮箱：</label>
							<input name="email" type="text" class="input_text" placeholder="此邮箱将用于登陆，必填"/>
							<span class="yz_input" id="email">
<<<<<<< HEAD
								<img src="/Public/Images/ok.png" />
=======
								<img src="/html/Public/Images/ok.png" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
							</span>
							<br /><br />

							<!-- 密码 -->
							<label>登陆密码：</label>
							<input name="password" type="password" class="input_text" placeholder="密码由6-15位字母或数字组成，必填"/>
							<span class="yz_input" id="password">
<<<<<<< HEAD
								<img src="/Public/Images/ok.png" />
=======
								<img src="/html/Public/Images/ok.png" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
							</span>
							<br /><br />

							<!-- 确认密码 -->
							<label>确认密码：</label>
							<input name="rePassword" type="password" class="input_text" placeholder="请再次输入密码，以确定密码正确，必填"/>
							<span class="yz_input" id="rePassword">
<<<<<<< HEAD
								<img src="/Public/Images/ok.png" />
=======
								<img src="/html/Public/Images/ok.png" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
							</span>
							<br /><br />

							<!-- 博客主题 -->
							<label>博客主题：</label>
							<select name="blogTheme" class="input_text input_select">
								<?php if(is_array($themes)): $i = 0; $__LIST__ = $themes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$theme): $mod = ($i % 2 );++$i;?><option value="<?php echo ($theme["blogTheme_Id"]); ?>"><?php echo ($theme["blogTheme_Name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
							<span class="yz_input" id="blogTheme">
<<<<<<< HEAD
								<img src="/Public/Images/ok.png" />
=======
								<img src="/html/Public/Images/ok.png" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
							</span>
							<br /><br />

							<!-- 验证码 -->
							<label>验&nbsp;证&nbsp;码：</label>
							<input name="yzm" type="text" class="input_text input_yzm" placeholder="四位验证码，必填"/>
							<img id="yzm_img" src="<?php echo U('/Home/User/VerCode');?>"/>
							<span class="yz_input" id="yzm">
<<<<<<< HEAD
								<img src="/Public/Images/ok.png" />
=======
								<img src="/html/Public/Images/ok.png" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
							</span>
						</div>

						<!-- 用户头像 -->
						<div id="main_right">
							<div id="user_image">
<<<<<<< HEAD
								<img src="/Public/Images/tx.jpg" />
=======
								<img src="/html/Public/Images/tx.jpg" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
							</div>
							<span>点击图片即可设置头像</span>
							<div id="submit">
							<button class="input_button" disabled="disabled">注册</button>
							</div>
						</div>
						<!-- 提交用户设置的头像 -->
						<div class="subTX">
							<form action="<?php echo U('/Home/User/VerCode');?>" enctype="multipart/form-data" method="post" target="fileTX">
								<input type="file" id="subTX" name="gravatar" />
								<input type="submit" id="submitTXForm" />
							</form>
							<iframe name="fileTX" id="fileTX"></iframe>
						</div>
					</div>
					<!-- 注册表单结束 -->
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