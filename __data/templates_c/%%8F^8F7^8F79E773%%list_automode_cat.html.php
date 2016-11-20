<?php /* Smarty version 2.6.22, created on 2015-09-04 14:42:30
         compiled from list_automode_cat.html */ ?>
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



<div class="wrap Mode">


<ol>
	<?php unset($this->_sections['auto']);
$this->_sections['auto']['name'] = 'auto';
$this->_sections['auto']['loop'] = is_array($_loop=$this->_tpl_vars['rsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['auto']['show'] = true;
$this->_sections['auto']['max'] = $this->_sections['auto']['loop'];
$this->_sections['auto']['step'] = 1;
$this->_sections['auto']['start'] = $this->_sections['auto']['step'] > 0 ? 0 : $this->_sections['auto']['loop']-1;
if ($this->_sections['auto']['show']) {
    $this->_sections['auto']['total'] = $this->_sections['auto']['loop'];
    if ($this->_sections['auto']['total'] == 0)
        $this->_sections['auto']['show'] = false;
} else
    $this->_sections['auto']['total'] = 0;
if ($this->_sections['auto']['show']):

            for ($this->_sections['auto']['index'] = $this->_sections['auto']['start'], $this->_sections['auto']['iteration'] = 1;
                 $this->_sections['auto']['iteration'] <= $this->_sections['auto']['total'];
                 $this->_sections['auto']['index'] += $this->_sections['auto']['step'], $this->_sections['auto']['iteration']++):
$this->_sections['auto']['rownum'] = $this->_sections['auto']['iteration'];
$this->_sections['auto']['index_prev'] = $this->_sections['auto']['index'] - $this->_sections['auto']['step'];
$this->_sections['auto']['index_next'] = $this->_sections['auto']['index'] + $this->_sections['auto']['step'];
$this->_sections['auto']['first']      = ($this->_sections['auto']['iteration'] == 1);
$this->_sections['auto']['last']       = ($this->_sections['auto']['iteration'] == $this->_sections['auto']['total']);
?>
	<li>
		<h3><?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['sitename']; ?>
</h3>
		<a target="_blank" href="automode/<?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['url']; ?>
<?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['sitename']; ?>
">网站结构</a>
		<a href="automode/automode.php?sitename=<?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['sitename']; ?>
&url=<?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['url']; ?>
">点击保存或修改</a>
		<p>地址：<?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['url']; ?>
</p>
	</li>
	<?php endfor; endif; ?>
</ol>

</div>
</body>
</html>