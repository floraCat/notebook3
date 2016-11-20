<?php /* Smarty version 2.6.22, created on 2015-11-10 15:31:03
         compiled from list_automode.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/m/base.css" />
<link rel="stylesheet" type="text/css" href="css/m/global.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/m/global.js"></script>
<script type="text/javascript" src="sys_resource/js/mod.js"></script>
</head>

<style>
	/*pagelist*/
	.pagelist{ width:99%; padding:15px 1% 15px 0;}
	.page101 li{ float:left; color:#aaa; margin-right:5px;}
	.page101 a{ display:block; padding:4px 10px; border:#c5d695 1px solid; background-color:#f1f7de; color:#666;}
	.page101 span{ display:block; float:left; padding:4px 10px; border:#ddd 1px solid; color:#bbb;}
	.page101 a:hover{ background-color:#fff;}
	.pageinfo{ display:block; line-height:34px;}
	
	html body{ max-width:1020px; width:1020px;}
	
	
	
	
.Mode dl{ float:left; width:480px; height:300px; margin:0 20px 20px 0; border:#bbb 1px solid; background-color:#f6f6f6; overflow:hidden; position:relative;}
.Mode dt{ text-align:inherit; display:block; vertical-align:inherit; width:488px; height:246px; overflow:scroll;}
.Mode .dt{ display:block;}
.Mode dt img{ width:auto; max-width:490px; max-height:300px;}
.Mode .dd1{ position:absolute; bottom:0; left:0; width:98%; height:50px; padding:2px 1%; line-height:24px; background-color:#FFFFCC; text-align:right; z-index:999;}
.Mode .dd2{ position:absolute; top:0; left:0; width:458px; height:270px; padding:15px; background-color:#000; opacity:.8; -webkit-opacity:.8; color:#fff; display:none;}
	.Mode .dd2 ol{ width:100%;}
	.Mode .dd2 ol p{ float:left; width:33.3%;}
	.Mode .dd2 p{ border-bottom:#666 1px dashed; text-indent:10px;}.pagelist{ overflow:hidden;}
	
	
				/*修改框*/
			.mod_text{ width:120px; height:114px; padding:5px; border:#ccc 1px solid; background-color:#f8f8f8; position:absolute; bottom:30px; left:0; z-index:99; overflow:visible;}
			.mod_text textarea{ width:114px; height:80px; border:#eee 1px solid;}
			.mod_text .cancel{ position:absolute; right:-5px; top:-5px; z-index:999;}
			.mod_text .submit{ display:inline-block!important; float:right; height:24px!important; font:bold 12px/24px 微软雅黑; border:#d5d5d5 1px solid; padding:0 10px; margin-top:5px; background-color:#f0f0f0; cursor:pointer;}


</style>

<input type="hidden" name="col" value="<?php echo $_GET['col']; ?>
" />
<div class="wrap Mode">

<!--分页 start-->
<div class="pagelist">
	<div class="page101 pageAH fl">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

	</div>
</div><!--pagelist end-->
<!--分页 end-->

<style>.automode_cat{ position:absolute; right:0; top:5px; width:120px; height:40px; line-height:40px; text-align:center; background-color:#fef0d5; font-weight:bold; border:#ddd 1px solid;}</style>
<a class="automode_cat" href="?act=list&col=automode_cat" target="_parent">模板结构及修改</a>


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
	<dl>
		<dt><div class="dt" style="zoom:100%;"><?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['code']; ?>
</div></dt>
		<dd class="dd1">
			<h4 class="zs"><?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['title']; ?>
</h4>
			<div class="Btns">
			<a style="background-color:#99FFCC;" href="_mode.php?db=automode&sitename=<?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['sitename']; ?>
&ttl=<?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['title']; ?>
" target="_blank">预览</a>
			<a class="code_key" style="background-color:#99FFCC;" href="javascript:;" target="_blank">源代码</a>
			<a class="show_des" href="javascript:;">详情</a>
			<a class="_select" id="<?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['id']; ?>
" href="javascript:;">选中</a>
			</div>
		</dd>
		<dd class="dd2">
			<ol>
			<p>id：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['id']; ?>
</em></p>
			</ol>
			<p>路径：<em><?php echo $this->_tpl_vars['rsList'][$this->_sections['auto']['index']]['url']; ?>
</em></p>
		</dd>
	</dl>
	<?php endfor; endif; ?>
</ol>
</div><!--Mode end-->
<script>
//详情div隐藏显示
$(function(){
	$(".Mode .show_des").hover(function(){
		$(this).parents(".dd1").siblings(".dd2").toggle();
	});
	
	$(".Mode .code_key").click(function(){
		var $code=$(this).parents("dl").find("dt").html();
		$code2="<xmp>"+$code+"</xmp>";
		$(".code_show").html($code2).show();
		$(".code_quit").show();
	});
	$(".code_quit").click(function(){
		$(this).hide();
		$(".code_show").hide();
	});
	$(".Mode ._select").click(function(){
		$(this).addClass("on").parents("dl").siblings("dl").find("._select").removeClass("on");
	});
});
</script>
<style>
.code_show{ display:none; position:fixed; top:0; left:0; width:100%; padding:20px; background-color:#333; color:#fff; z-index:9999;}
.code_quit{ display:none; position:fixed; top:0; left:50%; width:50px; height:50px; line-height:50px; text-align:center; margin-left:450px; background-color:#FF0000; color:#fff; font-size:16px; border:#ddd 1px solid; cursor:pointer; z-index:9999;}
</style>
<div class="code_show"></div><!--code_show-->
<div class="code_quit">关闭</div>

<!--分页 start-->
<div class="pagelist">
	<div class="page101 pageAH fl">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

	</div>
</div><!--pagelist end-->
<!--分页 end-->

</body>
</html>