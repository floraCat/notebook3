<?php /* Smarty version 2.6.22, created on 2014-04-20 18:49:55
         compiled from tpl_list_.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title> 
<link href="css/base.css" rel="stylesheet" type="text/css" /> 
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/self.js"></script>
</head>
<body>

	
<!--列表-->	

	<div class="List">
	
		<ol class="zd4">
			<li style="width:30px;">序号</li>
			<?php unset($this->_sections['hd']);
$this->_sections['hd']['name'] = 'hd';
$this->_sections['hd']['start'] = (int)1;
$this->_sections['hd']['loop'] = is_array($_loop=$this->_tpl_vars['Field_list_name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hd']['show'] = true;
$this->_sections['hd']['max'] = $this->_sections['hd']['loop'];
$this->_sections['hd']['step'] = 1;
if ($this->_sections['hd']['start'] < 0)
    $this->_sections['hd']['start'] = max($this->_sections['hd']['step'] > 0 ? 0 : -1, $this->_sections['hd']['loop'] + $this->_sections['hd']['start']);
else
    $this->_sections['hd']['start'] = min($this->_sections['hd']['start'], $this->_sections['hd']['step'] > 0 ? $this->_sections['hd']['loop'] : $this->_sections['hd']['loop']-1);
if ($this->_sections['hd']['show']) {
    $this->_sections['hd']['total'] = min(ceil(($this->_sections['hd']['step'] > 0 ? $this->_sections['hd']['loop'] - $this->_sections['hd']['start'] : $this->_sections['hd']['start']+1)/abs($this->_sections['hd']['step'])), $this->_sections['hd']['max']);
    if ($this->_sections['hd']['total'] == 0)
        $this->_sections['hd']['show'] = false;
} else
    $this->_sections['hd']['total'] = 0;
if ($this->_sections['hd']['show']):

            for ($this->_sections['hd']['index'] = $this->_sections['hd']['start'], $this->_sections['hd']['iteration'] = 1;
                 $this->_sections['hd']['iteration'] <= $this->_sections['hd']['total'];
                 $this->_sections['hd']['index'] += $this->_sections['hd']['step'], $this->_sections['hd']['iteration']++):
$this->_sections['hd']['rownum'] = $this->_sections['hd']['iteration'];
$this->_sections['hd']['index_prev'] = $this->_sections['hd']['index'] - $this->_sections['hd']['step'];
$this->_sections['hd']['index_next'] = $this->_sections['hd']['index'] + $this->_sections['hd']['step'];
$this->_sections['hd']['first']      = ($this->_sections['hd']['iteration'] == 1);
$this->_sections['hd']['last']       = ($this->_sections['hd']['iteration'] == $this->_sections['hd']['total']);
?>
			<li style="width:<?php echo $this->_tpl_vars['Field_list_width'][$this->_sections['hd']['index']]; ?>
px;"><?php echo $this->_tpl_vars['Field_list_name'][$this->_sections['hd']['index']]; ?>
</li>
			<?php endfor; endif; ?>
			<li style="width:80px;">操作</li>
		</ol>
		
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
		<ul>
		<form action="?col=<?php echo $this->_tpl_vars['col']; ?>
" method="post" enctype="multipart/form-data">
			<li style="width:30px;"><?php echo $this->_sections['list']['rownum']; ?>
</li>
			<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['start'] = (int)1;
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['Field_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list2']['show'] = true;
$this->_sections['list2']['max'] = $this->_sections['list2']['loop'];
$this->_sections['list2']['step'] = 1;
if ($this->_sections['list2']['start'] < 0)
    $this->_sections['list2']['start'] = max($this->_sections['list2']['step'] > 0 ? 0 : -1, $this->_sections['list2']['loop'] + $this->_sections['list2']['start']);
else
    $this->_sections['list2']['start'] = min($this->_sections['list2']['start'], $this->_sections['list2']['step'] > 0 ? $this->_sections['list2']['loop'] : $this->_sections['list2']['loop']-1);
if ($this->_sections['list2']['show']) {
    $this->_sections['list2']['total'] = min(ceil(($this->_sections['list2']['step'] > 0 ? $this->_sections['list2']['loop'] - $this->_sections['list2']['start'] : $this->_sections['list2']['start']+1)/abs($this->_sections['list2']['step'])), $this->_sections['list2']['max']);
    if ($this->_sections['list2']['total'] == 0)
        $this->_sections['list2']['show'] = false;
} else
    $this->_sections['list2']['total'] = 0;
if ($this->_sections['list2']['show']):

            for ($this->_sections['list2']['index'] = $this->_sections['list2']['start'], $this->_sections['list2']['iteration'] = 1;
                 $this->_sections['list2']['iteration'] <= $this->_sections['list2']['total'];
                 $this->_sections['list2']['index'] += $this->_sections['list2']['step'], $this->_sections['list2']['iteration']++):
$this->_sections['list2']['rownum'] = $this->_sections['list2']['iteration'];
$this->_sections['list2']['index_prev'] = $this->_sections['list2']['index'] - $this->_sections['list2']['step'];
$this->_sections['list2']['index_next'] = $this->_sections['list2']['index'] + $this->_sections['list2']['step'];
$this->_sections['list2']['first']      = ($this->_sections['list2']['iteration'] == 1);
$this->_sections['list2']['last']       = ($this->_sections['list2']['iteration'] == $this->_sections['list2']['total']);
?>
			<li><input style="width:<?php echo $this->_tpl_vars['Field_list_width'][$this->_sections['list2']['index']]; ?>
px" type="text" name="<?php echo $this->_tpl_vars['Field_list'][$this->_sections['list2']['index']]; ?>
" value="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']][$this->_sections['list2']['index']]; ?>
" readonly="readonly" /></li>
			<?php endfor; endif; ?>
			<li class="last" style="width:80px;">
				<input type="hidden" name="act" value="modify" />
				<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']][0]; ?>
" />
		<?php if ($this->_tpl_vars['tpl_list'] == '2'): ?>
				<input class="btn_mod" type="button" value="修改" />
		<?php else: ?>
				<a href="manage.php?act=edit&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']][0]; ?>
" target="_parent">修改</a>
		<?php endif; ?>
				<input class="btn_save" type="submit" value="保存" style="display:none;" />
			</li>
		</form>
				<input class="listDel" type="submit" value="删除" onclick="javascript:if(confirm('确定删除吗?')){location.href='manage.php?col=<?php echo $this->_tpl_vars['col']; ?>
&act=del&delid=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']][0]; ?>
&pageid=<?php echo $_GET['pageid']; ?>
'}else{return;}" />
		</ul>
		<?php endfor; endif; ?>
	
	<script>
	$(document).ready(function(){
		$(".btn_mod").click(function(){
			$(this).parents("form").find("input").removeAttr("readonly");
			$(this).parents("form").addClass("Input");
			$(this).hide();
			$(this).siblings(".btn_save").show();
		});
	});
	</script>
	
	</div><!--List end-->
	
	
	<div class="pagelist">
		<div class="page101 pageAH fl">
			<div><?php echo $this->_tpl_vars['pagehtml']; ?>
</div>
		</div><!--page101 end-->
		<input type="hidden" name="rs_keyword" class="rs_keyword" value="<?php echo $this->_tpl_vars['keyword']; ?>
" />
		<span class="kw fr"></span>
	</div><!--pagelist end-->
	

</body>
</html>