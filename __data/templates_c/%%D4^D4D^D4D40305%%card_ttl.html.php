<?php /* Smarty version 2.6.22, created on 2016-11-21 09:44:17
         compiled from card_ttl.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['col']; ?>
</title>
<link rel="stylesheet" type="text/css" href="sys_resource/css/base.css" />
<link rel="stylesheet" type="text/css" href="sys_resource/css/layout.css" />
<script type="text/javascript" src="sys_resource/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="sys_resource/js/sort.js"></script>
<script type="text/javascript" src="sys_resource/js/mod.js"></script>
</head>

<body>
<style>
.Mbody h3{ border-color:#deeace!important; background-color:#ecf1e7;}
.Mdesc{ border-color:#deeace!important; background-color:#ecf1e7;}
.Mdesc a{ color:#79ae3b;}
.Marticle{ width:998px; border:#e5e5e5 1px solid; background-color:#fff; margin:10px auto 30px;}
.Marticle h1{ height:50px; line-height:50px; padding:0 15px; font-size:17px; font-weight:bold;}
.Marticle .top{ padding:0 5px 10px; border-top:#eee 1px solid; border-bottom:#eee 1px solid; background-color:#f8f8f8;}
.Marticle .top .infos{ height:35px; line-height:35px; text-align:center; color:#999; margin-bottom:5px;}
.Marticle .top .infos span{ margin-right:15px;}
.Marticle .top .infos span a{ margin-right:5px;}
	.Mdesc{ /*width:666px;*/ margin:0 auto; padding:10px 15px; border:1px solid; font-size:14px; line-height:26px; text-shadow:1px 1px 1px #fff;}
	.Mdesc p s{ margin-right:8px;}
	.Mdesc a:hover{ padding-left:5px;}
	.Mbody{ padding:20px 0 0; font-size:14px; line-height:26px; color:#999;}
	.Mbody .section{ margin-bottom:15px;}
	.Mbody h3{ height:35px; line-height:35px; padding:0 15px 0 28px; font-size:15px; border-top:1px solid; color:#333; text-shadow:1px 1px 1px #fff; background-image:url(sys_resource/css/imgs/icon145_1.png); background-size:13px; background-position:8px 11px; margin:0 0 10px 0; position:relative;}
	.Mbody p{ margin:0 0 10px 0; padding:0 10px;}
	.Mbody .p p,.Mbody p.p{ padding:0 10px; background-color:#f8f8f8; border-bottom:#eee 1px dashed; margin-bottom:10px; color:#666;}
	.Mbody .p s:before,.Mbody .p_ p s:before{ content:'//'; color:#c5c5c5; padding:0 10px; font-size:10px;}
	.Mbody xmp,.Mbody p.xmp{ /*width:676px;*/ font-family:Consolas; color:#8da76f; margin:0 auto 10px; padding:5px 10px 10px; border:#eee 1px solid; background-color:#f8f8f8; font-size:12px; line-height:22px; overflow:auto; word-wrap:break-word;}
	.Mbody xmp.max_h{ max-height:600px;}
	.Mbody .btns{ padding:0 10px; margin-bottom:10px; overflow:hidden;}
	.Mbody .btns a{ display:inline-block; float:left; height:30px; line-height:30px; border:#ddd 1px solid; padding:0 12px; margin:3px; background-color:#eee;}
	.Mbody a.more{ display:inline-block; width:8px; height:8px; background-color:#CC0000; margin:0 5px; /**/border-radius:4px; -webkit-border-radius:4px;}
	.Mbody img{ max-width:998px;}
		.Mbody .web h3{ color:#CC0000;}
	
.js,.js *{ color:#CC0000!important;}
.php,.php *{ color:#0000CC!important;}

.btn2 dl{ float:left; margin:0 10px 15px 10px;}
.btn2 dt{ float:left; display:block; height:40px; line-height:40px; border:#ddd 1px solid; background-color:#eee; margin-right:3px; color:#993300; font-weight:bold;}
.btn2 dt a{ display:block; padding:0 10px; color:#993300;}
.btn2 dd{ float:left; width:34px; height:42px; overflow:hidden; text-align:center;}
.btn2 dd a{ display:block; float:left; width:32px; height:18px; line-height:18px; background-color:#eee; border:#ddd 1px solid; margin-bottom:2px; font-size:12px; color:#999;}
.btn2 dd a:hover{ background-color:#ddd;}
.btn2 dt s{ font-weight:normal; font-size:12px; color:#c0c081; text-decoration:none;}

._edit{ position:absolute; top:10px; right:10px; width:80px; height:40px; line-height:40px; text-align:center; background-color:#ccc;} 

.hSort{padding:10px; background:#FFFFCC;}
.hSort a{ margin-right:15px;}
</style>

<div class="Marticle wrap">
	<h1><?php echo $this->_tpl_vars['top_name']; ?>
</h1>
	<div class="top">
		<div class="infos">
			<span>类型：<?php echo $this->_tpl_vars['rsCon']['type']; ?>
</span>
			<span>属性：<?php echo $this->_tpl_vars['rsCon']['attr']; ?>
</span>
			<span>录入时间：<?php echo $this->_tpl_vars['rsCon']['input_time']; ?>
</span>
			<span>关键字：<a class="em" href="#">PHP</a><a class="em" href="#">插件</a></span>
		</div>
		<div class="Mdesc">
			<p><?php echo $this->_tpl_vars['rsCon']['pin']; ?>
</p>
			<?php echo $this->_tpl_vars['rsCon']['description']; ?>

		</div>
	</div>
	<div class="hSort" style="position:relative;">
		<a class="default" href="javascript:;">默认排序</a>
		<a class="rand" href="javascript:;">随机排序</a>
		<a id="addImg" style="position:absolute; right:15px; top:0; height:40px; line-height:40px;">显示图片</a>
	</div>
	<script>
	
	$(function(){
		$("#addImg").click(function(){
			var url=window.location.href;
			if(url.indexOf("img")>0){
				var len_url=window.location.href.length;
				window.location.href=window.location.href.substr(0,len_url-6);
			}else{
				window.location.href=window.location.href+"&img=1";
			}
		});
	});
	</script>
	<div class="Mbody">
		<div class="btn2">
			<div class="btns">
				<?php unset($this->_sections['card']);
$this->_sections['card']['name'] = 'card';
$this->_sections['card']['loop'] = is_array($_loop=$this->_tpl_vars['rsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['card']['show'] = true;
$this->_sections['card']['max'] = $this->_sections['card']['loop'];
$this->_sections['card']['step'] = 1;
$this->_sections['card']['start'] = $this->_sections['card']['step'] > 0 ? 0 : $this->_sections['card']['loop']-1;
if ($this->_sections['card']['show']) {
    $this->_sections['card']['total'] = $this->_sections['card']['loop'];
    if ($this->_sections['card']['total'] == 0)
        $this->_sections['card']['show'] = false;
} else
    $this->_sections['card']['total'] = 0;
if ($this->_sections['card']['show']):

            for ($this->_sections['card']['index'] = $this->_sections['card']['start'], $this->_sections['card']['iteration'] = 1;
                 $this->_sections['card']['iteration'] <= $this->_sections['card']['total'];
                 $this->_sections['card']['index'] += $this->_sections['card']['step'], $this->_sections['card']['iteration']++):
$this->_sections['card']['rownum'] = $this->_sections['card']['iteration'];
$this->_sections['card']['index_prev'] = $this->_sections['card']['index'] - $this->_sections['card']['step'];
$this->_sections['card']['index_next'] = $this->_sections['card']['index'] + $this->_sections['card']['step'];
$this->_sections['card']['first']      = ($this->_sections['card']['iteration'] == 1);
$this->_sections['card']['last']       = ($this->_sections['card']['iteration'] == $this->_sections['card']['total']);
?>
				<a><?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['title']; ?>
</a>
				<?php endfor; endif; ?>
			</div>
		</div>
		
		
<style>


/*圆角*/.yj4-li li{ border-radius:4px; -webkit-border-radius:4px; -moz-border-radius:4px; -khtml-border-radius:4px;}
/*阴影*/.MFocus .os li{ box-shadow:0 0 1px #fff; -webkit-box-shadow:0 0 1px #fff; -moz-box-shadow:0 0 1px #fff;}

/*幻灯片*/
.MFocus{ position:relative; background-color:#f5f5f5;}
.MFocus .ol li{ width:100%; height:400px; line-height:400px; font-size:60px; text-align:center; color:#333; position:relative;}
.MFocus .ol li a{ position:absolute; top:0; left:0; width:50px; height:50px; background:#3300FF;}
.MFocus .ol li i{ display:none; position:absolute; bottom:0; right:0; width:200px; height:200px; line-height:100px; font-size:30px; text-align:center; background-color:#333; opacity:.5; color:#fff;}
.MFocus .os{ position:absolute; bottom:0; height:20px; line-height:20px; width:100%; text-align:center;}
.MFocus .os li{ display:inline-block; width:8px; height:8px; background-color:#999; margin:0 4px; cursor:pointer; text-indent:-9999px; opacity:.6;}
.MFocus .os li.on{ background-color:#e50083;}

.btn_show{ width:200px; height:100px; line-height:100px; margin-right:20px; margin-top:100px; background-color:#CC0000; color:#fff; font-size:30px; text-align:center;}
.btn_show:hover{ color:#fff;}
</style>
<!--幻灯片-->
<div class="MFocus" id="MFocus">
	<div class="ol flLi">
		<?php unset($this->_sections['card']);
$this->_sections['card']['name'] = 'card';
$this->_sections['card']['loop'] = is_array($_loop=$this->_tpl_vars['rsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['card']['show'] = true;
$this->_sections['card']['max'] = $this->_sections['card']['loop'];
$this->_sections['card']['step'] = 1;
$this->_sections['card']['start'] = $this->_sections['card']['step'] > 0 ? 0 : $this->_sections['card']['loop']-1;
if ($this->_sections['card']['show']) {
    $this->_sections['card']['total'] = $this->_sections['card']['loop'];
    if ($this->_sections['card']['total'] == 0)
        $this->_sections['card']['show'] = false;
} else
    $this->_sections['card']['total'] = 0;
if ($this->_sections['card']['show']):

            for ($this->_sections['card']['index'] = $this->_sections['card']['start'], $this->_sections['card']['iteration'] = 1;
                 $this->_sections['card']['iteration'] <= $this->_sections['card']['total'];
                 $this->_sections['card']['index'] += $this->_sections['card']['step'], $this->_sections['card']['iteration']++):
$this->_sections['card']['rownum'] = $this->_sections['card']['iteration'];
$this->_sections['card']['index_prev'] = $this->_sections['card']['index'] - $this->_sections['card']['step'];
$this->_sections['card']['index_next'] = $this->_sections['card']['index'] + $this->_sections['card']['step'];
$this->_sections['card']['first']      = ($this->_sections['card']['iteration'] == 1);
$this->_sections['card']['last']       = ($this->_sections['card']['iteration'] == $this->_sections['card']['total']);
?>
		<li><a target="_blank" href="index.php?col=card_ttl&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['id']; ?>
"></a><?php if ($_GET['img']): ?><?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['img']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['title']; ?>
<?php endif; ?><i>
		<?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['parent_name']; ?>
<br>
		<?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['focus']; ?>

		</i></li>
		<?php endfor; endif; ?>
	</div>
	<div class="os yj4-li"></div>
</div><!--MFocus-->

<script type="text/javascript" src="js/plus/TouchSlide.1.1.js"></script>
<script>TouchSlide({slideCell: "#MFocus", titCell: ".os", mainCell: ".ol", effect: "leftLoop", autoPlay: false, autoPage: true,delayTime:400,interTime:4500});</script>
		
		
<script>
$(function(){
	$(".btns a").click(function(){
		var sum=$(".MFocus").width()*($(this).index()+1);
		$(".MFocus .ol").css({"-webkit-transform":"translate(-"+sum+"px, 0px) translateZ(0px)"});
	});
});
</script>
		
<div class="over"><a class="btn_show fr">显示info</a></div>
<script>
$(function(){
	//排序
	var url=window.location.href;
	$(".hSort a.default").click(function(){
		if(url.indexOf("sortway")!=-1){
			url2=url.substr(0,url.length-15);
			$(this).attr("href",""+url2+"");
		}else{
			$(this).attr("href",""+url+"");
		}
	});
	$(".hSort a.rand").click(function(){
		if(url.indexOf("sortway")!=-1){
			$(this).attr("href",""+url+"");
		}else{
			$(this).attr("href",""+url+"&sortway=rand()");
		}
	});
	//显隐info
	$(".btn_show").click(function(){
		$(".MFocus .ol li i").toggle();
	});
});
</script>		
		
	</div><!--Mbody-->
</div><!--Marticle end-->




</body>
</html>