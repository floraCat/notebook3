<?php /* Smarty version 2.6.22, created on 2015-10-06 00:19:55
         compiled from tpl_list_body.html */ ?>
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
			<li style="width:40px;">序号</li>
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
&mod=mod_quick<?php if ($_GET['type']): ?>&type=<?php echo $_GET['type']; ?>
<?php endif; ?>" method="post" enctype="multipart/form-data">
			<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['Field_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list2']['show'] = true;
$this->_sections['list2']['max'] = $this->_sections['list2']['loop'];
$this->_sections['list2']['step'] = 1;
$this->_sections['list2']['start'] = $this->_sections['list2']['step'] > 0 ? 0 : $this->_sections['list2']['loop']-1;
if ($this->_sections['list2']['show']) {
    $this->_sections['list2']['total'] = $this->_sections['list2']['loop'];
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
0" value="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']][$this->_sections['list2']['index']]; ?>
" readonly="readonly" /></li>
			<?php endfor; endif; ?>
			<?php if ($this->_tpl_vars['col'] == 'imgs'): ?>
			<li class="img_down"><img style="width:24px; height:24px;" src="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']][7]; ?>
"/></li>
			<?php endif; ?>
			<li class="last" style="width:80px;">
				<input type="hidden" name="act" value="modify" />
				<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']][0]; ?>
" />
				<input class="mod_quick" type="button" value="快速修改" />
				<a class="mod_default" href="manage.php?act=edit&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']][0]; ?>
" target="_parent">默认修改</a>
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
		$(".mod_quick").click(function(){ //List点击‘修改’
			$(this).parents("form").find("input").removeAttr("readonly");
			$(this).parents("form").addClass("Input");
			$(this).hide();
			$(this).siblings(".btn_save").show();
		});
		
		$(".List .img_down").click(function(){
			var url_old=$(this).children("img").attr("src");
			var submitdata={
				url_old:url_old
			}
			$.post('_img_download.php',submitdata,
				function(data){
					alert("图片已下载！");
				}
			);
		});
	});
	</script>
	
	</div><!--List end-->
	
	
	
<!--页码-->

	<div class="pagelist">
		<div class="page101 pageAH fl">
			<?php echo $this->_tpl_vars['pagehtml']; ?>

		</div><!--page101 end-->
		<input type="hidden" name="rs_keyword" class="rs_keyword" value="<?php echo $this->_tpl_vars['keyword']; ?>
" />
		<span class="kw fr"></span>
	</div><!--pagelist end-->
	

</body>
</html>