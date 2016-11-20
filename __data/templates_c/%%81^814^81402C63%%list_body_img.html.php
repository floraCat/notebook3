<?php /* Smarty version 2.6.22, created on 2015-10-16 14:48:26
         compiled from list_body_img.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内页</title>
<link rel="stylesheet" type="text/css" href="sys_resource/css/base.css" />
<link rel="stylesheet" type="text/css" href="sys_resource/css/layout.css" />
<script type="text/javascript" src="sys_resource/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="sys_resource/js/sort.js"></script>
<script type="text/javascript" src="sys_resource/js/mod.js"></script>
</head>

<body class="List_body">
<input type="hidden" name="col" value="<?php echo $_GET['col']; ?>
" />

<style>
.List_body .Img{ padding:20px 0;}
.List_body .Img li{ float:left; width:20%; border:#e5e5e5 2px solid; box-sizing:border-box; width:100px; height:100px; background-color:#f5f5f5; position:relative; overflow:visible;}
.List_body .Img li a{ display:block; width:96px; height:96px;}
.List_body .Img li a i{ display:table-cell; width:96px; height:96px; vertical-align:middle; text-align:center;}
.List_body .Img li a.on{ background-color:#FF9900;}
.List_body .Img li img{ width:auto;}
.List_body .mark{ position:absolute; right:0; top:0; width:100%; height:100%; display:none;}
.List_body .mark .bg{ position:absolute; top:0; left:0; width:100%; height:100%; background-color:#000; opacity:.3; -webkit-opacity:.3;}
.List_body .mark mark{ width:18px; height:18px; border:2px solid; border-radius:10px; -webkit-border-radius:10px; float:right; margin-left:5px; text-align:center; line-height:18px; color:#fff; font-size:12px; font-weight:bold; position:relative;}
.List_body .mark .I1{ background-color:#CC0000!important;}
.List_body .mark .I2{ background-color:#FF6600!important;}
.List_body .mark .I3{ background-color:#003366!important;}
.List_body li .info{ position:absolute; top:0; left:0; width:200px; height:150px; padding:2%; z-index:999; display:none;}
.List_body li .info .bg{ position:absolute; top:0; left:0; width:100%; height:100%; background-color:#000; opacity:.8; -webkit-opacity:.8;}
.List_body li .info dl{ position:relative; color:#000; height:15px; line-height:15px; color:#fff; white-space:nowrap; overflow:visible;}
.List_body li .info dl.pic{ margin-left:-50px;}
.List_body .show_info{ display:block; width:10px; height:10px; position:absolute; right:0; bottom:0; background-color:#CC0000; z-index:999; display:none;}
</style>

<div class="wrap Img v">
	<div class="list Btns v">
	<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['rsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
		<li>
			<a id="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
" href="javascript:;">
				<i><img src="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['pic']; ?>
" /></i>
				<div class="mark">
					<b class="bg"></b>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['mark']): ?><mark class="I1">#</mark><?php endif; ?>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['label']): ?><mark class="I2"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['label']; ?>
</mark><?php endif; ?>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['grade']): ?><mark class="I3"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['grade']; ?>
</mark><?php endif; ?>
				</div>
			</a>
			<i class="show_info"></i>
			<div class="info">
			<b class="bg"></b>
				<dl>类型：<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['type']; ?>
</dl>
				<dl>特点：<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['feature']; ?>
</dl>
				<dl>风格：<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['style']; ?>
</dl>
				<dl>色调：<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['color']; ?>
</dl>
				<dl>格式：<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['format']; ?>
</dl>
				<dl class="pic"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['pic']; ?>
</dl>
				<dl>宽度：<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['width']; ?>
</dl>
				<dl>高度：<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['height']; ?>
</dl>
				<dl>PS源：<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['original']; ?>
</dl>
			</div>
		</li>
	<?php endfor; endif; ?>
	</div><!--list end-->
</div>

<script>
$(function(){
	$(".List_body .Img li").hover(function(){
		$(this).children(".show_info").toggle();
	});
	$(".List_body .Img .show_info").click(function(){
		$(this).siblings(".info").show();
	});
	$(".List_body .Img li .info").hover(function(){
		$(this).show();
	},function(){
		$(this).hide();
	});
});
</script>


<!--分页 start-->
<div class="pagelist">
	<div class="page101 pageAH fl">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

	</div>
</div><!--pagelist end-->
<!--分页 end-->



</body>
</html>