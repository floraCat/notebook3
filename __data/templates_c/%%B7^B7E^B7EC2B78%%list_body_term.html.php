<?php /* Smarty version 2.6.22, created on 2015-12-21 14:50:35
         compiled from list_body_term.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内页</title>
<link rel="stylesheet" type="text/css" href="sys_resource/css/base.css" />
<link rel="stylesheet" type="text/css" href="sys_resource/css/layout.css" />
<script type="text/javascript" src="sys_resource/js/jquery-1.10.2.js"></script>
</head>

<body class="Mbody">
<input type="hidden" name="col" value="<?php echo $_GET['col']; ?>
" />

<style>
	.Mbody .btns{ width:800px; padding:0 10px; margin:0 auto 10px; overflow:visible;}
	.Mbody .btns ul{ overflow:visible;}
	.Mbody .btns li{ display:block; float:left; height:30px; line-height:30px; border:#ddd 1px solid; padding:0 12px; margin:3px; background-color:#eee; cursor:pointer; position:relative; overflow:visible;}
	.Mbody ol{ display:none; position:absolute; top:35px; width:200px; left:50%; margin-left:-100px; line-height:21px; background-color:#f8f8f8; border:#ddd 1px solid; padding:10px 5px 10px 15px; z-index:999;}
	.Mbody ol a{ color:#000066; text-decoration:underline;}
	.Mbody h3{ margin:5px 0; background:#FFFFCC; height:30px; line-height:30px; text-indent:5px; font-weight:bold; font-size:15px; margin-top:20px; clear:both;}
</style>
<div class="wrap"><br>
	<div class="btns" style="min-height:800px;">
		<ul>
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
			<li id="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
">
				<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>

				<ol>
					<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['content']; ?>

				</ol>
			</li>
		<?php endfor; endif; ?>
		</ul>
	</div><!--list end-->	
</div>

<script>
$(document).ready(function(){
	$(".btns li").click(function(){
		if($(this).find("ol").is(':visible')){
			$(".btns li ol").hide();
		}else{
			$(".btns li ol").hide();
			$(this).find("ol").show();
		}
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


<xmp>
术语：
部件/组件/控件/插件 内存泄漏    轻/重量级    业务逻辑  重构  封装  单页面框架
 
层叠样式  网络泡沫  从业者  项目经理  移动端&桌面端  响应式布局  网页三剑客  增强网站的动态交互性  模块化思维  轻量级  进阶  独立于

语言和平台 javascript引擎   网页布局


//未处理
AOP   Canvas   webGL     Gif   UED    MDV   AMD    UMD    NPM    VML    RequireJS   重构
</xmp>

</body>
</html>