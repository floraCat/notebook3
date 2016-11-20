<?php /* Smarty version 2.6.22, created on 2015-12-16 20:06:28
         compiled from list_body_points.html */ ?>
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

<body class="List_body List_ttl">
<input type="hidden" name="col" value="<?php echo $_GET['col']; ?>
" />

<div class="over"><a class="fr" target="_blank" href="/000/web/admin/manage.php?act=edit&col=points">新增条目</a></div>

<style>
.Btns .mark a{ color:#FF0000;}
.List_body .Ttl .list li span{ position:absolute; top:0; right:5px; font-weight:normal; font-size:12px; color:#aaa;}
</style>
<div class="wrap Ttl">
	<div class="list Btns">
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
		<li<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['attr'] == ''): ?> class="mark"<?php endif; ?>><!--attr为空即未整合到目录-->
            <a id="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
" href="javascript:;" data-role="index.php?col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
</a>
            <span><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['type']; ?>
</span>
        </li>
	<?php endfor; endif; ?>
	</div><!--list end-->
</div>


<!--分页 start-->
<div class="pagelist">
	<div class="page101 pageAH fl">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

	</div>
</div><!--pagelist end-->
<!--分页 end-->


</body>
</html>