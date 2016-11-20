<?php /* Smarty version 2.6.22, created on 2014-05-01 18:39:08
         compiled from imgs.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="style/base0.css" rel="stylesheet" type="text/css" />
<link href="style/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/self_1.js"></script>
</head>

<body>

	<div class="list">
		<input type="hidden" id="db" name="db" value="<?php echo $this->_tpl_vars['db']; ?>
" /><!--调哪个数据表-->
		<ul class="list_x1 list_x1_img" style="background:none;">
		<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<ol <?php if ($this->_tpl_vars['rs'][$this->_sections['list']['index']]['mark'] == '1'): ?>class="long_h"<?php endif; ?>>
				<input type="hidden" name="id" class="id" value="<?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['id']; ?>
"/>
				<a class="btn" href="javascript:;">
					<img src="<?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['pic']; ?>
" />
				</a>
				<div class="div">
					<li class="pin"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['cat']; ?>
</li>
					<li class="mark"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['style']; ?>
</li>
					<li class="pin"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['color']; ?>
</li>
					<li class="mark"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['format']; ?>
</li>
					<li class="pin"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['title']; ?>
</li>
					<li class="mark"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['width']; ?>
</li>
					<li class="pin"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['height']; ?>
</li>
					<li class="mark"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['grade']; ?>
</li>
					<li class="mark"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['label']; ?>
</li>
					<li class="mark"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['mark']; ?>
</li>
					<li class="mark"><?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']]['input_time']; ?>
</li>
				</div>
			</ol>
		<?php endfor; endif; ?>
		</ul>
	</div>
	
</div>

<!--分页-->
<div style=" width:849px; margin:20px auto;">
	<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['getrsnum']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		 <a href="?part=view&act=list&page=<?php echo $this->_sections['list']['rownum']; ?>
&db=<?php echo $_GET['db']; ?>
&keyword=<?php echo $_GET['keyword']; ?>
"><?php if ($this->_tpl_vars['gpage'] == $this->_sections['list']['rownum']): ?><font color="#FF0000"><?php echo $this->_sections['list']['rownum']; ?>
</font><?php else: ?><?php echo $this->_sections['list']['rownum']; ?>
<?php endif; ?></a>&nbsp;
	<?php endfor; endif; ?>
    [共有 <?php echo $this->_tpl_vars['rs_num']; ?>
 条&nbsp;当前第<?php echo $this->_tpl_vars['gpage']; ?>
页&nbsp;共<?php echo $this->_tpl_vars['getrsnum']; ?>
页] 
</div>

</body>
</html>