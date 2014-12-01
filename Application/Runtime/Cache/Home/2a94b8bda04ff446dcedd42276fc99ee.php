<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Refresh" content="5;URL=/html/index.php/Home/Index/home" />
	<script src="/html/Public/Js/global.js" type="text/javascript"></script>
	<style type="text/css">
		html{
			width:100%;
			height:100%;
		}
		body{
			background: url('/html/Public/Images/index.jpg') 100% 100% no-repeat;
			width: 100%;
			height: 100%;
			overflow: hidden;
			margin: 0px;
			padding: 0px;
		}
		#page{
			width: 100%;
			height: 100%;]
			margin: 0px;
			padding: 0px;
		}
		#content{
			width: 750px;
			height: 160px;
			background: url('/html/Public/Images/logo.png') no-repeat;
			background-size: 110% 110%;
			margin: auto;
			margin-top: 200px;
		}
		#footer{
			width: 0px;
			height:30px;
			background:red;
			animation:prc 5s;
			-moz-animation:prc 5s; /* Firefox */
			-webkit-animation:prc 5s; /* Safari and Chrome */
			-o-animation:prc 5s; /* Opera */
			margin: 0px;
			margin-top:50px; 
		}
		@keyframes prc{
			from {width:0%;}
			to {width: 100%;}
		}

		@-moz-keyframes prc /* Firefox */{
			from {width:0%;}
			to {width: 100%;}
		}

		@-webkit-keyframes prc /* Safari and Chrome */{
			from {width:0%;}
			to {width: 100%;}
		}

		@-o-keyframes prc /* Opera */{
			from {width:0%;}
			to {width: 100%;}
		}
	</style>
	<script type="text/javascript">
		setData('<?php echo ($header); ?>','<?php echo ($footer); ?>');
	</script>
</head>
<body>
	<div id="page">
		<div id="header">
		</div>
		<div id="content">
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>