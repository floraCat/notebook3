<?php /* Smarty version 2.6.22, created on 2016-11-30 17:48:12
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/base.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
</head>
<body class="zd4">


<style>
/*login*/
.login{ height:500px;}
.login .top{ height:43px;}
.login .con{ width:560px; padding:0 20px; margin:150px auto 0; background-color:#fff; border:1px solid; outline:5px solid;}
.login .con .hd{ margin-bottom:20px;}
.login .con .hd h1{ font:bold 16px/48px 微软雅黑; color:#333;}
.login .con .hd a{ line-height:48px; color:#888;} 
.login .con .lt{ width:280px; height:120px;}
.login .con .rt{ width:192px; height:120px; padding:10px 20px 15px 0;}
	.loginform{ font:normal 12px/30px 微软雅黑;}
	.loginform .p{ margin-bottom:5px; _float:left;}
	.loginform input{ width:120px; height:24px; padding:2px; border:1px solid; background-color:#fff; _float:left;}
	.loginform input[type='button']{ float:right; width:60px; height:30px; text-align:center; color:#fff; margin-top:10px; cursor:pointer;}
	.loginform label{ float:left; height:30px; line-height:30px;}
.login_modify{ position:relative;}
.login_modify .con{ width:260px;}
.login_modify .mark{ position:absolute; top:80px; left:120px;}
.login_modify .con .rt{ width:200px; padding:25px 35px 10px 0;}
</style>


<div class="login">

	<div class="top img4"></div>

	<div class="con zo3 zb2">
		<div class="hd bg3">
			<h1 class="fl">登录</h1>
		</div>
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