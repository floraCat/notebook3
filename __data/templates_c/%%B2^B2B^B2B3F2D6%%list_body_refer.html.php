<?php /* Smarty version 2.6.22, created on 2015-11-10 15:30:59
         compiled from list_body_refer.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="sys_resource/css/base.css" rel="stylesheet" type="text/css" />
<link href="sys_resource/css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="sys_resource/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="sys_resource/js/self_1.js"></script>
</head>

<style>
.Mode dl{ float:left; width:488px; height:300px; margin:0 20px 20px 0; border:#bbb 1px solid; background-color:#f6f6f6; overflow:hidden; position:relative;}
.Mode dt{ text-align:inherit; display:block; vertical-align:inherit; width:488px; height:246px; overflow:scroll;}
.Mode .dt{ display:block;}
.Mode dt img{ width:auto; max-width:490px; max-height:300px;}
.Mode .dd1{ position:absolute; bottom:0; left:0; width:98%; height:50px; padding:2px 1%; line-height:24px; background-color:#FFFFCC; text-align:right; z-index:999;}
.pagelist{ overflow:hidden;}
</style>

<div class="wrap Mode">

<!--分页 start-->
<div class="pagelist">
	<div class="page101 pageAH fl">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

	</div>
</div><!--pagelist end-->
<!--分页 end-->

<ol>
	<?php unset($this->_sections['refer']);
$this->_sections['refer']['name'] = 'refer';
$this->_sections['refer']['loop'] = is_array($_loop=$this->_tpl_vars['rsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['refer']['show'] = true;
$this->_sections['refer']['max'] = $this->_sections['refer']['loop'];
$this->_sections['refer']['step'] = 1;
$this->_sections['refer']['start'] = $this->_sections['refer']['step'] > 0 ? 0 : $this->_sections['refer']['loop']-1;
if ($this->_sections['refer']['show']) {
    $this->_sections['refer']['total'] = $this->_sections['refer']['loop'];
    if ($this->_sections['refer']['total'] == 0)
        $this->_sections['refer']['show'] = false;
} else
    $this->_sections['refer']['total'] = 0;
if ($this->_sections['refer']['show']):

            for ($this->_sections['refer']['index'] = $this->_sections['refer']['start'], $this->_sections['refer']['iteration'] = 1;
                 $this->_sections['refer']['iteration'] <= $this->_sections['refer']['total'];
                 $this->_sections['refer']['index'] += $this->_sections['refer']['step'], $this->_sections['refer']['iteration']++):
$this->_sections['refer']['rownum'] = $this->_sections['refer']['iteration'];
$this->_sections['refer']['index_prev'] = $this->_sections['refer']['index'] - $this->_sections['refer']['step'];
$this->_sections['refer']['index_next'] = $this->_sections['refer']['index'] + $this->_sections['refer']['step'];
$this->_sections['refer']['first']      = ($this->_sections['refer']['iteration'] == 1);
$this->_sections['refer']['last']       = ($this->_sections['refer']['iteration'] == $this->_sections['refer']['total']);
?>
	<dl>
		<dt><div class="dt" style="zoom:<?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['zoom']; ?>
%;"><?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['rsHtml']; ?>
</div></dt>
		<dd class="dd1">
			<h4 class="zs"><?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['title']; ?>
</h4>
			<div class="btns">
			<a style="background-color:#99FFCC;" href="../../111/3spec/<?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['PM']; ?>
/<?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['file']; ?>
/<?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['page']; ?>
.html" target="_blank">打开源页面</a>
			<a class="code_key" style="background-color:#99FFCC;" href="javascript:;" target="_blank">代码</a>
			<a class="show_des" href="javascript:;">详情</a>
			</div>
		</dd>
		<dd class="dd2">
			<ol>
			<p>id：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['id']; ?>
</em></p>
			</ol>
			<p>路径：<em>../../111/3spec/<?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['PM']; ?>
/<?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['file']; ?>
/<?php echo $this->_tpl_vars['rsList'][$this->_sections['refer']['index']]['page']; ?>
.html</em></p>
		</dd>
	</dl>
	<?php endfor; endif; ?>
</ol>
</div><!--Mode end-->
<script>
//详情div隐藏显示
$(function(){
	$(".Mode .show_des").hover(function(){
		$(this).parents(".dd1").siblings(".dd2").toggle();
	});
	
	$(".Mode .code_key").click(function(){
		var $code=$(this).parents("dl").find("dt").html();
		$code2="<xmp>"+$code+"</xmp>";
		$(".code_show").html($code2).show();
		$(".code_quit").show();
	});
	$(".code_quit").click(function(){
		$(this).hide();
		$(".code_show").hide();
	});
	
});
</script>
<style>
.code_show{ display:none; position:fixed; top:0; left:0; width:100%; padding:20px; background-color:#333; color:#fff; z-index:9999;}
.code_quit{ display:none; position:fixed; top:0; left:50%; width:50px; height:50px; line-height:50px; text-align:center; margin-left:450px; background-color:#FF0000; color:#fff; font-size:16px; border:#ddd 1px solid; cursor:pointer; z-index:9999;}
</style>
<div class="code_show"></div><!--code_show-->
<div class="code_quit">关闭</div>

<!--分页 start-->
<div class="pagelist">
	<div class="page101 pageAH fl">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

	</div>
</div><!--pagelist end-->
<!--分页 end-->

</body>
</html>