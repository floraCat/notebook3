<?php /* Smarty version 2.6.22, created on 2014-02-24 11:25:45
         compiled from tpl_list_product_cat.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title> 
<link href="css/base.css" rel="stylesheet" type="text/css" /> 
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/layout.js"></script>
</head>
<body>

<div class="main List_cat">

	<div class="ttl003b">
		<div class="lt"><h3 class="fl"><s>>></s> <?php echo $this->_tpl_vars['p_ttl']; ?>
</h3></div>
		<a class="btn catAdd rt" href="javascript:;" onclick="catAdd();">增加类目</a>
	</div><!--ttl003b end-->

		
	<div class="con">
		<ul class="listCat zd4_A zb2A">
		<input type="hidden" name="col" value="<?php echo $this->_tpl_vars['col']; ?>
" />
			<li>
				<a href="manage_list.php?act=list&col=<?php echo $this->_tpl_vars['col']; ?>
" class="list">查看全部列表</a>
			</li>
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['rsCat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="Cat"><input class="cs" type="text" readonly="readonly" name="cat_title" value="<?php echo $this->_tpl_vars['rsCat'][$this->_sections['list']['index']]['cat_title']; ?>
" /></div>
				<input type="hidden" name="catid" value="<?php echo $this->_tpl_vars['rsCat'][$this->_sections['list']['index']]['id']; ?>
" />
				<a href="javascript:;" class="edit_cat">修改</a><a href="javascript:;" class="modify_cat">保存</a><a href="manage_list_cat.php?act=del&cat=<?php echo $this->_tpl_vars['col']; ?>
&delid=<?php echo $this->_tpl_vars['rsCat'][$this->_sections['list']['index']]['id']; ?>
">删掉</a><a href="manage_list.php?act=list&col=<?php echo $this->_tpl_vars['col']; ?>
&catid=<?php echo $this->_tpl_vars['rsCat'][$this->_sections['list']['index']]['id']; ?>
">查看此列表</a>
			</li>
			<?php endfor; endif; ?>
		</ul><!--listCat end-->
	</div><!--con end-->

</div><!--main end-->


</body>
</html>