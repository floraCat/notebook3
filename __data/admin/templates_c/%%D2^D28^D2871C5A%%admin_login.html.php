<?php /* Smarty version 2.6.22, created on 2014-02-25 19:47:30
         compiled from admin_login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
</head>
<body class="zd4">


<div class="login">

	<div class="top img4"></div>

	<div class="con zo3 zb2">
		<div class="hd bg3">
			<h1 class="fl">后台登录</h1>
			<a class="fr" href="/index.php">返回网站首页</a>
		</div>
		<div class="lt img9"><img src="css/imgs/logo.png" alt="logo" style="width:135px; height:45px; margin:30px 0 0 50px;" /></div><!--lt end-->
		<div class="rt">
			<div class="loginform zb3Input">
				<form action="" method="post">
					<div class="p p1">
						<label>帐号：</label><input type="text" name="account" value="" />
					</div>
					<div class="p p2">
						<label>密码：</label><input type="password" name="password" value="" />
					</div>
					<div class="p p3">
						<?php if (! $this->_tpl_vars['rs']): ?>
							<input type="hidden" name="act" value="register" />
							<input class="zd yj" type="button" value="注册" />
						<?php else: ?>
							<input type="hidden" name="act" value="login" />
							<input class="zd yj" type="button" value="登录" />
						<?php endif; ?>
							<input type="submit" style="display:none;">
					</div>
				</form>
			</div><!--loginform end-->
		</div><!--rt end-->
	</div>
</div><!--login end-->

<script>
	$(document).ready(function(){
		$(".login input[type='button']").click(function(){
			var $account=$("input[name='account']").val();
			var $password=$("input[name='password']").val();
			if($account==""){
				alert("帐号不能为空");return;
			}
			if($password==""){
				alert("密码不能为空");return;
			}
			$("input[type='submit']").click();
		});
	});
</script>

</body>
</html>