<?php /* Smarty version 2.6.22, created on 2016-11-20 22:55:52
         compiled from index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>base</title>
<link rel="stylesheet" type="text/css" href="sys_resource/css/base.css" />
</head>

<style>
/*admin_left*/
.ns001a{ width:98%;}
.ns001a .hd{ height:45px; font:bold 15px/43px 微软雅黑; text-indent:10px; color:#333;}
.ns001a .hd_{ width:100%; height:28px; border-bottom:#fff 1px solid;}
.ns001a .hd_ .lt{ height:28px; font:bold 14px/28px 微软雅黑; border-left:3px solid; text-indent:10px;}
.ns001a ul{ padding:15px 0 15px 5%; width:95%;}
.ns001a li{ float:left; width:72px; padding:3px 6px; overflow:visible;}
.ns001a li a{ display:block; width:100%; height:28px; font:normal 13px/28px 微软雅黑; text-align:center; border-top:#fff 1px solid; border-left:#fff 1px solid; color:#444;}
.ns001a li a:hover{ background-color:#fff9ee; color:#F2A384; font-weight:bold; box-shadow:1px 1px 2px #F2A384!important; -webkit-box-shadow:1px 1px 2px #F2A384!important; -moz-box-shadow:1px 1px 2px #F2A384!important;}
.ns001a .bold{ font-weight:bold;}
.ns001a .em{ background-color:#FFFFCC; font-weight:bold;}
</style>
<body class="bg_left">

<div class="ns001a">
	<h3 class="hd">操作菜单</h3>
	<div class="con">
		
<!-------------------------------------------------------------------------------------------manage2---->
		<ol>
			<div class="hd_ zd3">
				<em class="lt zb zs">文学类：</em>
			</div>
			<ul class="shadowRB_A yjA zd3A">
				<li><a href="index.php?act=list&col=wx_chengyu" target="right">成语</a></li>
				<li><a href="index.php?act=list&col=wx_suyu" target="right">俗语</a></li>
				<li><a href="index.php?act=list&col=wx_liuxingyu" target="right">流行语</a></li>
				<li><a href="index.php?act=list&col=wx_duanyu" target="right">短语</a></li>
				<li><a href="index.php?act=list&col=wx_juzi" target="right">句子</a></li>
				<li><a href="index.php?act=list&col=wx_duanluo" target="right">情感段落</a></li>
			</ul>
		</ol>
		<ol>
			<div class="hd_ zd3">
				<em class="lt zb zs">资源管理：</em>
			</div>
			<ul class="shadowRB_A yjA zd3A">
				<li><a href="index.php?act=list&col=zy_picture" target="right">图片</a></li>
				<li><a href="index.php?act=list&col=zy_renwu" target="right">人物</a></li>
			</ul>
		</ol>

		<ol>
			<div class="hd_ zd3">
				<em class="lt zb zs">其他：</em>
			</div>
			<ul class="shadowRB_A yjA zd3A">
				<li><a href="index.php?act=list&col=company" target="right">企业</a></li>
				<li><a href="index.php?act=list&col=china" target="right">地理</a></li>
				<li><a href="index.php?act=list&col=food" target="right">食物</a></li>
				<li><a href="index.php?act=list&col=card_top&sortway=sort" target="right">Card</a></li>
			</ul>
		</ol>
		
<!-------------------------------------------------------------------------------------------manage2---->
	
		
	</div>
</div><!--ns001a end-->

<script>
$(document).ready(function(){
	$(".ns001a li a").click(function(){
		$(this).parents(".ns001a").find("li a").removeClass("shadowRB_A2 cd3 cs bold");
		$(this).addClass("shadowRB_A2 cd3 cs bold");
	});
});
</script>

</body>
</html>