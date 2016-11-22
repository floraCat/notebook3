<?php /* Smarty version 2.6.22, created on 2016-11-21 09:42:07
         compiled from list_body_word.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内页</title>
<link rel="stylesheet" type="text/css" href="sys_resource/css/base.css" />
<link rel="stylesheet" type="text/css" href="sys_resource/css/layout.css" />
<script type="text/javascript" src="sys_resource/js/jquery-1.10.2.js"></script>
</head>

<body class="List_word">
<input type="hidden" name="col" value="<?php echo $_GET['col']; ?>
" />

<style>
.List_word{ padding:20px 0;}
.List_word .list{ margin-top:20px;}
.List_word .list li{ float:left; margin:5px; position:relative; overflow:visible;}
.List_word .list li a{ display:block; height:25px; font:bold 14px/25px 微软雅黑; border:#ddd 1px solid; padding:15px 20px 0; cursor:pointer;}
.list li a:hover,.list li a.on{ background-color:#FFFF99;}
.List_word .list li p{ position:absolute; top:0; left:0; padding:0 3px; white-space:nowrap; background-color:#f5f5f5;}
</style>
<div class="wrap">
	<div class="list">
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
	<!--ondblclick="javascript:window.location.href='index.php?col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
'"-->
		<li><a id="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
" href="index.php?col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
</a><p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['pin']; ?>
</p></li>
	<?php endfor; endif; ?>
	</div><!--list end-->
</div>

<script>
$(document).ready(function(){
	$(".list li a").click(function(){
		$(".list li a").removeClass("on");
		$(this).addClass("on");
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