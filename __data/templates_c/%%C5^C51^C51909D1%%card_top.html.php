<?php /* Smarty version 2.6.22, created on 2016-06-09 22:40:00
         compiled from card_top.html */ ?>
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
</style>

<div class="Marticle wrap">
	<h1>111<?php echo $this->_tpl_vars['rsCon']['title']; ?>
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
	<div class="Mbody">
		<div class="btn2">
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
			<dl>
				<dt><a><?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['top']; ?>
</a></dt>
				<dd>
					<a href="index.php?col=card_parent&act=list&top=<?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['top_on']; ?>
&top_id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['id']; ?>
" target="_blank">一级</a>
					<a href="index.php?col=card_ttl&act=list&top=<?php echo $this->_tpl_vars['rsList'][$this->_sections['card']['index']]['id']; ?>
" target="_blank">低层</a>
				</dd>
			</dl>
			<?php endfor; endif; ?>
		</div>
	</div><!--Mbody-->
</div><!--Marticle end-->




</body>
</html>