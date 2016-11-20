<?php /* Smarty version 2.6.22, created on 2015-12-27 11:14:53
         compiled from list_body_mode.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="sys_resource/css/base.css" rel="stylesheet" type="text/css" />
<link href="sys_resource/css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="sys_resource/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="sys_resource/js/self_1.js"></script>
<script type="text/javascript" src="sys_resource/js/mod.js"></script>
</head>



<div class="wrap Mode">
除“列表”外尽量用global样式

<!--分页 start-->
<div class="pagelist">
	<div class="page101 pageAH fl">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

	</div>
</div><!--pagelist end-->
<!--分页 end-->
<input type="hidden" name="col" value="<?php echo $_GET['col']; ?>
" />
<ol>
	<?php unset($this->_sections['mode']);
$this->_sections['mode']['name'] = 'mode';
$this->_sections['mode']['loop'] = is_array($_loop=$this->_tpl_vars['rsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mode']['show'] = true;
$this->_sections['mode']['max'] = $this->_sections['mode']['loop'];
$this->_sections['mode']['step'] = 1;
$this->_sections['mode']['start'] = $this->_sections['mode']['step'] > 0 ? 0 : $this->_sections['mode']['loop']-1;
if ($this->_sections['mode']['show']) {
    $this->_sections['mode']['total'] = $this->_sections['mode']['loop'];
    if ($this->_sections['mode']['total'] == 0)
        $this->_sections['mode']['show'] = false;
} else
    $this->_sections['mode']['total'] = 0;
if ($this->_sections['mode']['show']):

            for ($this->_sections['mode']['index'] = $this->_sections['mode']['start'], $this->_sections['mode']['iteration'] = 1;
                 $this->_sections['mode']['iteration'] <= $this->_sections['mode']['total'];
                 $this->_sections['mode']['index'] += $this->_sections['mode']['step'], $this->_sections['mode']['iteration']++):
$this->_sections['mode']['rownum'] = $this->_sections['mode']['iteration'];
$this->_sections['mode']['index_prev'] = $this->_sections['mode']['index'] - $this->_sections['mode']['step'];
$this->_sections['mode']['index_next'] = $this->_sections['mode']['index'] + $this->_sections['mode']['step'];
$this->_sections['mode']['first']      = ($this->_sections['mode']['iteration'] == 1);
$this->_sections['mode']['last']       = ($this->_sections['mode']['iteration'] == $this->_sections['mode']['total']);
?>
	<dl>
		<dt><img src="upload/modeImgs/<?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['title']; ?>
.jpg" alt="" /></dt>
		<dd class="dd1">
			<h4 class="zs"><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['title']; ?>
 / <?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['mark']; ?>
</h4>
			<div class="Btns">
			<a href="_mode.php?db=mode&ttl=<?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['title']; ?>
&tpl=pc" target="_blank">电脑版</a>
			<a href="_mode.php?db=mode&ttl=<?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['title']; ?>
&tpl=m" target="_blank">手机版</a>
			<a href="upload/mode/<?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['title']; ?>
.png" target="_blank">jpg图片</a>
			<a style="background-color:#99FFCC;" href="_mode.php?db=mode&ttl=<?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['title']; ?>
&tpl=code" target="_blank">代码</a>
			<a class="show_des" href="javascript:;">详情</a>
			<a class="_select" id="<?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['id']; ?>
" href="javascript:;">选中</a>
			</div>
		</dd>
		<dd class="dd2">
			<ol>
			<p>id：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['id']; ?>
</em></p>
			<p>类型：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['type']; ?>
</em></p>
			<p>属性：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['attr']; ?>
</em></p>
			<p>宽度：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['width']; ?>
</em></p>
			<p>高度：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['height']; ?>
</em></p>
			<p>图片路径：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['pic']; ?>
</em></p>
			<p>原始：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['original']; ?>
</em></p>
			<p>等级：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['grade']; ?>
</em></p>
			<p>标识：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['label']; ?>
</em></p>
			</ol>
			<p>标注：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['mark']; ?>
</em></p>
			<p>简介：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['mode']['index']]['description']; ?>
</em></p>
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
	$(".Mode ._select").click(function(){
		$(this).addClass("on").parents("dl").siblings("dl").find("._select").removeClass("on");
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