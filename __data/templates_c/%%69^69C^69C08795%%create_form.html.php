<?php /* Smarty version 2.6.22, created on 2015-12-24 16:40:21
         compiled from create_form.html */ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<title>shop</title>
    <?php CSS("css/h_resetP.css"); ?>
    <?php JS("js/jquery-1.10.2.js | js/m/h_base.js"); ?>
</head>
<body style=" max-width:100%;">


<style type="text/less">
@import "css/h_varMix.less";
@import "css/h_modeM.less";

/*------layout------*/
.formSel{ width:1200px; margin:50px auto;}
.formSel .unit{ overflow:hidden;}
.formSel .unit li{ float:left; height:90px; line-height:40px; width:50%; margin-bottom:15px; overflow:hidden;}
.formSel .unit li p{ height:20px; line-height:20px; text-indent:45px; color:#aaa;}
.formSel .unit li input{ float:left; width:40px; height:40px; border:none; background:url(images/mode/pc/i_check1.png) no-repeat center;}
.formSel .unit li input:checked{ background:url(images/mode/pc/i_check1_on.png) no-repeat center;}
.formSel .unit li img{ float:left; width:500px;}
</style>
<script language="javascript" type="text/javascript" src="js/less.js"></script>
<form class="formSel" method="post" action="_mode_form.php?db=form" target="_blank">
<p> -> _formLi与_formDl只显示一种，_formLi有选择就不再考虑_formDl，要预览_formDl必须保证_formLi无选择</p>
<p> -> “全部预览”的页面结构并非最好，仅供预览</p>
<p> -> 还缺去重未完善</p><br>
	<div class="submit_form over"><input type="submit" class="fl btnS zd" name="view" value="全部预览" /></div>
	<div class="submit_form over"><input type="submit" class="fr btnS zd" value="提交" /></div>
	<b>_formLi:</b><br><br>
	<div class="unit formLi mgT10">
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
		<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['form'] == 'li'): ?>
		<li>
			<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['des']; ?>
</p>
			<input type="checkbox" name="formLi[]" value="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
" />
			<img src="images/form/<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
.jpg" title="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
" />
		</li>
		<?php endif; ?>
		<?php endfor; endif; ?>
	</div>
	<br>
	<br>
	<b>_formDl:</b><br><br>
	<div class="unit formDl">
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
		<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['form'] == 'dl'): ?>
		<li>
			<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['des']; ?>
</p>
			<input type="checkbox" name="formDl[]" value="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
" />
			<img src="images/form/<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
.jpg" />
		</li>
		<?php endif; ?>
		<?php endfor; endif; ?>
	</div>
	<br>
	<br>
	<b>_formOhter:</b><br><br>
	<div class="unit formOhter">
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
		<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['form'] == 'other'): ?>
		<li>
			<input type="checkbox" name="formOhter[]" value="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
" />
			<img src="images/form/<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
.jpg" />
		</li>
		<?php endif; ?>
		<?php endfor; endif; ?>
	</div>
	<div class="submit_form over"><input type="submit" class="fr btnS zd" value="提交" /></div>
</form>


</body>
</html>