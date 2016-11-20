<?php /* Smarty version 2.6.22, created on 2014-04-05 20:12:49
         compiled from mode_tpl.html */ ?>
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

<style>
.list ol .more .lt pre{ width:600px; overflow:hidden; white-space:normal;}
.list ol .more .rt{ padding-right:10px;}
.list ol .more .rt img{ max-width:400px; height:auto;}
</style>

<body>

	<div class="list">
		<input type="hidden" id="db" name="db" value="<?php echo $this->_tpl_vars['db']; ?>
" /><!--调哪个数据表-->
		<ul class="list_y1">
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
			<ol>
				<a class="ttl" target="_blank" href="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['link']; ?>
"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
</a>
				<div class="info">
					<li>宽度：<span><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['width']; ?>
</span></li>
					<li>高度：<span><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['height']; ?>
</span></li>
					<li>级别：<span><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['grade']; ?>
</span></li>
					<li>标识：<span><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['label']; ?>
</span></li>
					<li>标注：<span><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['mark']; ?>
</span></li>
					<li><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['input_time']; ?>
</li>
				</div>
				<div class="more">
					<div class="lt">
						<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['description']; ?>

					</div>
					<div class="rt">
						<a href="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['example']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['imgurl']; ?>
" /></a>
					</div>
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