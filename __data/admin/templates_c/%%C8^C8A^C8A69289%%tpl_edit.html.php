<?php /* Smarty version 2.6.22, created on 2015-09-11 10:02:48
         compiled from tpl_edit.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title> 
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<!--编辑器
	<link rel="stylesheet" href="../libs/editor/themes/default/default.css" />
	<script charset="utf-8" src="../libs/editor/kindeditor-min.js"></script>
	<script charset="utf-8" src="../libs/editor/lang/zh_CN.js"></script>
	<script language="javascript">
		KindEditor.ready(function(K) {
			K.create('textarea[name="content0"]', {
				autoHeightMode : true,
				afterCreate : function() {
					this.loadPlugin('autoheight');
				}
			});
		});
	</script>
	-->
</head>
<body>

<div class="Main">


	<div class="Ttl zb2 zd4 zs">
		<h3 class="lt"><?php echo $this->_tpl_vars['p_ttl']; ?>
<span class="mark"><?php echo $this->_tpl_vars['note']['p_ttl']; ?>
</span></h3>
	</div><!--ttl003a end-->
	
	
	<div class="con zb2Input">
		<ul class="editpage zd4 zb2">
		
		<form class="editform" action="?col=<?php echo $_GET['col']; ?>
&<?php if ($this->_tpl_vars['rsedit']): ?>act=modify&id=<?php echo $_GET['id']; ?>
<?php else: ?>act=save<?php endif; ?>"  method="post" enctype="multipart/form-data">
	<!--id-->			
			<?php if ($this->_tpl_vars['Field_']['id']): ?>
				<li><div class="Left">id：</div><div class="Right"><input class="input" type="text" readonly="readonly" name="id0" value="<?php echo $this->_tpl_vars['rsedit']['id']; ?>
" /></div><div class="clear"></div></li>
			<?php endif; ?>

	<!--title-->			
			<?php if ($this->_tpl_vars['Field_']['title']): ?>
				<li><div class="Left">标题：</div><div class="Right"><input class="input" type="text" name="title0" value="<?php echo $this->_tpl_vars['rsedit']['title']; ?>
" data-role="" /></div><div class="clear"></div></li>
			<?php endif; ?>
		
		
		<style>
		.editform,.editform *{ overflow:visible;}
		.editSelect{ position:relative;}
		.editSelect .text{ float:left; width:200px; height:24px; border:#ddd 1px solid; background-color:#fff; margin-right:5px;}
		.editSelect .select{ float:left; width:86px; height:24px; border:#ddd 1px solid; background-color:#fff; text-indent:5px; position:relative;}
		.editSelect .selected{ display:block; width:60px; height:24px;}
		.editSelect .select ul{ position:absolute; top:26px; left:0; width:82px; border-left:#ddd 1px solid; border-right:#ddd 1px solid; background-color:#fff; z-index:9999; display:none;}
		.editSelect .select ul a{ display:block; width:82px; height:24px; border-bottom:#ddd 1px solid;}
		.editSelect .select .btn{ position:absolute; top:0; right:0; width:24px; height:24px; border-left:#ddd 1px solid; text-align:center; background-color:#f2f2f2;}
		</style>

	<!--type-->			
			<?php if ($this->_tpl_vars['Field_']['type']): ?>
				<li><div class="Left">类型：</div><div class="Right">
					<div class="editSelect">
						<input type="hidden" name="field" value="type0" />
						<input type="text" class="text" name="type0" value="<?php echo $this->_tpl_vars['rsedit']['type']; ?>
"/>
						<div class="select">
							<span class="selected">请选择</span>
							<ul>
						<!--<?php unset($this->_sections['type']);
$this->_sections['type']['name'] = 'type';
$this->_sections['type']['loop'] = is_array($_loop=$this->_tpl_vars['type']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['type']['show'] = true;
$this->_sections['type']['max'] = $this->_sections['type']['loop'];
$this->_sections['type']['step'] = 1;
$this->_sections['type']['start'] = $this->_sections['type']['step'] > 0 ? 0 : $this->_sections['type']['loop']-1;
if ($this->_sections['type']['show']) {
    $this->_sections['type']['total'] = $this->_sections['type']['loop'];
    if ($this->_sections['type']['total'] == 0)
        $this->_sections['type']['show'] = false;
} else
    $this->_sections['type']['total'] = 0;
if ($this->_sections['type']['show']):

            for ($this->_sections['type']['index'] = $this->_sections['type']['start'], $this->_sections['type']['iteration'] = 1;
                 $this->_sections['type']['iteration'] <= $this->_sections['type']['total'];
                 $this->_sections['type']['index'] += $this->_sections['type']['step'], $this->_sections['type']['iteration']++):
$this->_sections['type']['rownum'] = $this->_sections['type']['iteration'];
$this->_sections['type']['index_prev'] = $this->_sections['type']['index'] - $this->_sections['type']['step'];
$this->_sections['type']['index_next'] = $this->_sections['type']['index'] + $this->_sections['type']['step'];
$this->_sections['type']['first']      = ($this->_sections['type']['iteration'] == 1);
$this->_sections['type']['last']       = ($this->_sections['type']['iteration'] == $this->_sections['type']['total']);
?>-->
								<a href="javascript:;"><?php echo $this->_tpl_vars['type'][$this->_sections['type']['index']]; ?>
</a>
						<!--<?php endfor; endif; ?>-->
						<!--{if $type2}-->
						<!--<?php unset($this->_sections['type2']);
$this->_sections['type2']['name'] = 'type2';
$this->_sections['type2']['loop'] = is_array($_loop=$this->_tpl_vars['type2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['type2']['show'] = true;
$this->_sections['type2']['max'] = $this->_sections['type2']['loop'];
$this->_sections['type2']['step'] = 1;
$this->_sections['type2']['start'] = $this->_sections['type2']['step'] > 0 ? 0 : $this->_sections['type2']['loop']-1;
if ($this->_sections['type2']['show']) {
    $this->_sections['type2']['total'] = $this->_sections['type2']['loop'];
    if ($this->_sections['type2']['total'] == 0)
        $this->_sections['type2']['show'] = false;
} else
    $this->_sections['type2']['total'] = 0;
if ($this->_sections['type2']['show']):

            for ($this->_sections['type2']['index'] = $this->_sections['type2']['start'], $this->_sections['type2']['iteration'] = 1;
                 $this->_sections['type2']['iteration'] <= $this->_sections['type2']['total'];
                 $this->_sections['type2']['index'] += $this->_sections['type2']['step'], $this->_sections['type2']['iteration']++):
$this->_sections['type2']['rownum'] = $this->_sections['type2']['iteration'];
$this->_sections['type2']['index_prev'] = $this->_sections['type2']['index'] - $this->_sections['type2']['step'];
$this->_sections['type2']['index_next'] = $this->_sections['type2']['index'] + $this->_sections['type2']['step'];
$this->_sections['type2']['first']      = ($this->_sections['type2']['iteration'] == 1);
$this->_sections['type2']['last']       = ($this->_sections['type2']['iteration'] == $this->_sections['type2']['total']);
?>-->
								<a href="javascript:;"><?php echo $this->_tpl_vars['type2'][$this->_sections['type2']['index']]; ?>
</a>
						<!--<?php endfor; endif; ?>-->
						<!--{/if}-->
							</ul>
							<s class="btn"> > </s>
						</div>
					</div><!--editSelect end-->&nbsp;&nbsp;不可自定义
				</div><div class="clear"></div></li>
			<?php endif; ?>
			
	<!--feature-->			
			<?php if ($this->_tpl_vars['Field_']['feature']): ?>
				<li><div class="Left">特点：</div><div class="Right">
					<div class="editSelect">
						<input type="hidden" name="field" value="feature0" />
						<input type="text" class="text" name="feature0" value="<?php echo $this->_tpl_vars['rsedit']['feature']; ?>
"/>
						<div class="select">
							<span class="selected">请选择</span>
							<ul>
						<!--<?php unset($this->_sections['feature']);
$this->_sections['feature']['name'] = 'feature';
$this->_sections['feature']['loop'] = is_array($_loop=$this->_tpl_vars['feature']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['feature']['show'] = true;
$this->_sections['feature']['max'] = $this->_sections['feature']['loop'];
$this->_sections['feature']['step'] = 1;
$this->_sections['feature']['start'] = $this->_sections['feature']['step'] > 0 ? 0 : $this->_sections['feature']['loop']-1;
if ($this->_sections['feature']['show']) {
    $this->_sections['feature']['total'] = $this->_sections['feature']['loop'];
    if ($this->_sections['feature']['total'] == 0)
        $this->_sections['feature']['show'] = false;
} else
    $this->_sections['feature']['total'] = 0;
if ($this->_sections['feature']['show']):

            for ($this->_sections['feature']['index'] = $this->_sections['feature']['start'], $this->_sections['feature']['iteration'] = 1;
                 $this->_sections['feature']['iteration'] <= $this->_sections['feature']['total'];
                 $this->_sections['feature']['index'] += $this->_sections['feature']['step'], $this->_sections['feature']['iteration']++):
$this->_sections['feature']['rownum'] = $this->_sections['feature']['iteration'];
$this->_sections['feature']['index_prev'] = $this->_sections['feature']['index'] - $this->_sections['feature']['step'];
$this->_sections['feature']['index_next'] = $this->_sections['feature']['index'] + $this->_sections['feature']['step'];
$this->_sections['feature']['first']      = ($this->_sections['feature']['iteration'] == 1);
$this->_sections['feature']['last']       = ($this->_sections['feature']['iteration'] == $this->_sections['feature']['total']);
?>-->
								<a href="javascript:;"><?php echo $this->_tpl_vars['feature'][$this->_sections['feature']['index']]; ?>
</a>
						<!--<?php endfor; endif; ?>-->
							</ul>
							<s class="btn"> > </s>
						</div>
					</div><!--editSelect end-->&nbsp;&nbsp;不可自定义
				</div><div class="clear"></div></li>
			<?php endif; ?>

	<!--style-->			
			<?php if ($this->_tpl_vars['Field_']['style']): ?>
				<li><div class="Left">风格：</div><div class="Right">
					<div class="editSelect">
						<input type="hidden" name="field" value="style0" />
						<input type="text" class="text" name="style0" value="<?php echo $this->_tpl_vars['rsedit']['style']; ?>
"/>
						<div class="select">
							<span class="selected">请选择</span>
							<ul>
						<!--<?php unset($this->_sections['style']);
$this->_sections['style']['name'] = 'style';
$this->_sections['style']['loop'] = is_array($_loop=$this->_tpl_vars['style']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['style']['show'] = true;
$this->_sections['style']['max'] = $this->_sections['style']['loop'];
$this->_sections['style']['step'] = 1;
$this->_sections['style']['start'] = $this->_sections['style']['step'] > 0 ? 0 : $this->_sections['style']['loop']-1;
if ($this->_sections['style']['show']) {
    $this->_sections['style']['total'] = $this->_sections['style']['loop'];
    if ($this->_sections['style']['total'] == 0)
        $this->_sections['style']['show'] = false;
} else
    $this->_sections['style']['total'] = 0;
if ($this->_sections['style']['show']):

            for ($this->_sections['style']['index'] = $this->_sections['style']['start'], $this->_sections['style']['iteration'] = 1;
                 $this->_sections['style']['iteration'] <= $this->_sections['style']['total'];
                 $this->_sections['style']['index'] += $this->_sections['style']['step'], $this->_sections['style']['iteration']++):
$this->_sections['style']['rownum'] = $this->_sections['style']['iteration'];
$this->_sections['style']['index_prev'] = $this->_sections['style']['index'] - $this->_sections['style']['step'];
$this->_sections['style']['index_next'] = $this->_sections['style']['index'] + $this->_sections['style']['step'];
$this->_sections['style']['first']      = ($this->_sections['style']['iteration'] == 1);
$this->_sections['style']['last']       = ($this->_sections['style']['iteration'] == $this->_sections['style']['total']);
?>-->
								<a href="javascript:;"><?php echo $this->_tpl_vars['style'][$this->_sections['style']['index']]; ?>
</a>
						<!--<?php endfor; endif; ?>-->
							</ul>
							<s class="btn"> > </s>
						</div>
					</div><!--editSelect end-->&nbsp;&nbsp;不可自定义
				</div><div class="clear"></div></li>
			<?php endif; ?>

	<!--keywords-->			
			<?php if ($this->_tpl_vars['Field_']['keywords']): ?>
				<li><div class="Left">关键字：</div><div class="Right">
					<div class="editSelect">
						<input type="hidden" name="field" value="keywords0" />
						<input type="text" class="text" name="keywords0" value="<?php echo $this->_tpl_vars['rsedit']['keywords']; ?>
"/>
						<div class="select">
							<span class="selected">请选择</span>
							<ul>
						<!--<?php unset($this->_sections['keywords']);
$this->_sections['keywords']['name'] = 'keywords';
$this->_sections['keywords']['loop'] = is_array($_loop=$this->_tpl_vars['keywords']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['keywords']['show'] = true;
$this->_sections['keywords']['max'] = $this->_sections['keywords']['loop'];
$this->_sections['keywords']['step'] = 1;
$this->_sections['keywords']['start'] = $this->_sections['keywords']['step'] > 0 ? 0 : $this->_sections['keywords']['loop']-1;
if ($this->_sections['keywords']['show']) {
    $this->_sections['keywords']['total'] = $this->_sections['keywords']['loop'];
    if ($this->_sections['keywords']['total'] == 0)
        $this->_sections['keywords']['show'] = false;
} else
    $this->_sections['keywords']['total'] = 0;
if ($this->_sections['keywords']['show']):

            for ($this->_sections['keywords']['index'] = $this->_sections['keywords']['start'], $this->_sections['keywords']['iteration'] = 1;
                 $this->_sections['keywords']['iteration'] <= $this->_sections['keywords']['total'];
                 $this->_sections['keywords']['index'] += $this->_sections['keywords']['step'], $this->_sections['keywords']['iteration']++):
$this->_sections['keywords']['rownum'] = $this->_sections['keywords']['iteration'];
$this->_sections['keywords']['index_prev'] = $this->_sections['keywords']['index'] - $this->_sections['keywords']['step'];
$this->_sections['keywords']['index_next'] = $this->_sections['keywords']['index'] + $this->_sections['keywords']['step'];
$this->_sections['keywords']['first']      = ($this->_sections['keywords']['iteration'] == 1);
$this->_sections['keywords']['last']       = ($this->_sections['keywords']['iteration'] == $this->_sections['keywords']['total']);
?>-->
								<a href="javascript:;"><?php echo $this->_tpl_vars['keywords'][$this->_sections['keywords']['index']]; ?>
</a>
						<!--<?php endfor; endif; ?>-->
							</ul>
							<s class="btn"> > </s>
						</div>
					</div><!--editSelect end-->&nbsp;&nbsp;可以自定义！！
				</div><div class="clear"></div></li>
			<?php endif; ?>

	<!--color-->			
			<?php if ($this->_tpl_vars['Field_']['color']): ?>
				<li><div class="Left">色调：</div><div class="Right">
					<div class="editSelect">
						<input type="hidden" name="field" value="color0" />
						<input type="text" class="text" name="color0" value="<?php echo $this->_tpl_vars['rsedit']['color']; ?>
"/>
						<div class="select">
							<span class="selected">请选择</span>
							<ul>
						<!--<?php unset($this->_sections['color']);
$this->_sections['color']['name'] = 'color';
$this->_sections['color']['loop'] = is_array($_loop=$this->_tpl_vars['color']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['color']['show'] = true;
$this->_sections['color']['max'] = $this->_sections['color']['loop'];
$this->_sections['color']['step'] = 1;
$this->_sections['color']['start'] = $this->_sections['color']['step'] > 0 ? 0 : $this->_sections['color']['loop']-1;
if ($this->_sections['color']['show']) {
    $this->_sections['color']['total'] = $this->_sections['color']['loop'];
    if ($this->_sections['color']['total'] == 0)
        $this->_sections['color']['show'] = false;
} else
    $this->_sections['color']['total'] = 0;
if ($this->_sections['color']['show']):

            for ($this->_sections['color']['index'] = $this->_sections['color']['start'], $this->_sections['color']['iteration'] = 1;
                 $this->_sections['color']['iteration'] <= $this->_sections['color']['total'];
                 $this->_sections['color']['index'] += $this->_sections['color']['step'], $this->_sections['color']['iteration']++):
$this->_sections['color']['rownum'] = $this->_sections['color']['iteration'];
$this->_sections['color']['index_prev'] = $this->_sections['color']['index'] - $this->_sections['color']['step'];
$this->_sections['color']['index_next'] = $this->_sections['color']['index'] + $this->_sections['color']['step'];
$this->_sections['color']['first']      = ($this->_sections['color']['iteration'] == 1);
$this->_sections['color']['last']       = ($this->_sections['color']['iteration'] == $this->_sections['color']['total']);
?>-->
								<a href="javascript:;"><?php echo $this->_tpl_vars['color'][$this->_sections['color']['index']]; ?>
</a>
						<!--<?php endfor; endif; ?>-->
							</ul>
							<s class="btn"> > </s>
						</div>
					</div><!--editSelect end-->&nbsp;&nbsp;不可自定义
				</div><div class="clear"></div></li>
			<?php endif; ?>

	<!--format-->			
			<?php if ($this->_tpl_vars['Field_']['format']): ?>
				<li><div class="Left">格式：</div><div class="Right">
					<div class="editSelect">
						<input type="hidden" name="field" value="format0" />
						<input type="text" class="text" name="format0" value="<?php echo $this->_tpl_vars['rsedit']['format']; ?>
"/>
						<div class="select">
							<span class="selected">请选择</span>
							<ul>
						<!--<?php unset($this->_sections['format']);
$this->_sections['format']['name'] = 'format';
$this->_sections['format']['loop'] = is_array($_loop=$this->_tpl_vars['format']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['format']['show'] = true;
$this->_sections['format']['max'] = $this->_sections['format']['loop'];
$this->_sections['format']['step'] = 1;
$this->_sections['format']['start'] = $this->_sections['format']['step'] > 0 ? 0 : $this->_sections['format']['loop']-1;
if ($this->_sections['format']['show']) {
    $this->_sections['format']['total'] = $this->_sections['format']['loop'];
    if ($this->_sections['format']['total'] == 0)
        $this->_sections['format']['show'] = false;
} else
    $this->_sections['format']['total'] = 0;
if ($this->_sections['format']['show']):

            for ($this->_sections['format']['index'] = $this->_sections['format']['start'], $this->_sections['format']['iteration'] = 1;
                 $this->_sections['format']['iteration'] <= $this->_sections['format']['total'];
                 $this->_sections['format']['index'] += $this->_sections['format']['step'], $this->_sections['format']['iteration']++):
$this->_sections['format']['rownum'] = $this->_sections['format']['iteration'];
$this->_sections['format']['index_prev'] = $this->_sections['format']['index'] - $this->_sections['format']['step'];
$this->_sections['format']['index_next'] = $this->_sections['format']['index'] + $this->_sections['format']['step'];
$this->_sections['format']['first']      = ($this->_sections['format']['iteration'] == 1);
$this->_sections['format']['last']       = ($this->_sections['format']['iteration'] == $this->_sections['format']['total']);
?>-->
								<a href="javascript:;"><?php echo $this->_tpl_vars['format'][$this->_sections['format']['index']]; ?>
</a>
						<!--<?php endfor; endif; ?>-->
							</ul>
							<s class="btn"> > </s>
						</div>
					</div><!--editSelect end-->&nbsp;&nbsp;不可自定义
				</div><div class="clear"></div></li>
			<?php endif; ?>

	<!--attr-->			
			<?php if ($this->_tpl_vars['Field_']['attr']): ?>
				<li><div class="Left">属性：</div><div class="Right">
					<div class="editSelect">
						<input type="hidden" name="field" value="attr0" />
						<input type="text" class="text" name="attr0" value="<?php echo $this->_tpl_vars['rsedit']['attr']; ?>
"/>
						<div class="select">
							<span class="selected">请选择</span>
							<ul>
						<!--<?php unset($this->_sections['attr']);
$this->_sections['attr']['name'] = 'attr';
$this->_sections['attr']['loop'] = is_array($_loop=$this->_tpl_vars['attr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['attr']['show'] = true;
$this->_sections['attr']['max'] = $this->_sections['attr']['loop'];
$this->_sections['attr']['step'] = 1;
$this->_sections['attr']['start'] = $this->_sections['attr']['step'] > 0 ? 0 : $this->_sections['attr']['loop']-1;
if ($this->_sections['attr']['show']) {
    $this->_sections['attr']['total'] = $this->_sections['attr']['loop'];
    if ($this->_sections['attr']['total'] == 0)
        $this->_sections['attr']['show'] = false;
} else
    $this->_sections['attr']['total'] = 0;
if ($this->_sections['attr']['show']):

            for ($this->_sections['attr']['index'] = $this->_sections['attr']['start'], $this->_sections['attr']['iteration'] = 1;
                 $this->_sections['attr']['iteration'] <= $this->_sections['attr']['total'];
                 $this->_sections['attr']['index'] += $this->_sections['attr']['step'], $this->_sections['attr']['iteration']++):
$this->_sections['attr']['rownum'] = $this->_sections['attr']['iteration'];
$this->_sections['attr']['index_prev'] = $this->_sections['attr']['index'] - $this->_sections['attr']['step'];
$this->_sections['attr']['index_next'] = $this->_sections['attr']['index'] + $this->_sections['attr']['step'];
$this->_sections['attr']['first']      = ($this->_sections['attr']['iteration'] == 1);
$this->_sections['attr']['last']       = ($this->_sections['attr']['iteration'] == $this->_sections['attr']['total']);
?>-->
								<a href="javascript:;"><?php echo $this->_tpl_vars['attr'][$this->_sections['attr']['index']]; ?>
</a>
						<!--<?php endfor; endif; ?>-->
							</ul>
							<s class="btn"> > </s>
						</div>
					</div><!--editSelect end-->&nbsp;&nbsp;不可自定义
				</div><div class="clear"></div></li>
			<?php endif; ?>
			
			<script>
			$(function(){
				//选项框下拉
				$(".editSelect .btn").click(function(){
					$(this).siblings("ul").toggle();
				});
				//选项被选中
				$(".editSelect ul a").click(function(){
					var selected=$(this).text();
					$(this).parent().siblings("span").text(selected);
					$(this).parent().hide();
					var field=$(this).parents(".select").siblings("input[name='field']").val();
					var value=$(this).parents(".select").siblings("input[name='"+field+"']").val();
					if(value==""){
						$(this).parents(".select").siblings("input[name='"+field+"']").val(selected);
					}else{
						selected=""+value+","+selected+"";
						$(this).parents(".select").siblings("input[name='"+field+"']").val(selected);
					}
				});
			});
			</script>

					



	<!--grade-->			
			<?php if ($this->_tpl_vars['Field_']['grade']): ?>
				<li><div class="Left">级别：</div><div class="Right short"><input class="input" type="text" name="grade0" value="<?php echo $this->_tpl_vars['rsedit']['grade']; ?>
" data-role="" /></div><div class="clear"></div></li>
			<?php endif; ?>

	<!--label-->			
			<?php if ($this->_tpl_vars['Field_']['label']): ?>
				<li><div class="Left">标识：</div><div class="Right short"><input class="input" type="text" name="label0" value="<?php echo $this->_tpl_vars['rsedit']['label']; ?>
" data-role="" /></div><div class="clear"></div></li>
			<?php endif; ?>

	<!--mark-->			
			<?php if ($this->_tpl_vars['Field_']['mark']): ?>
				<li><div class="Left">标注：</div><div class="Right short"><input class="input" type="text" name="mark0" value="<?php echo $this->_tpl_vars['rsedit']['mark']; ?>
" data-role="" /></div><div class="clear"></div></li>
			<?php endif; ?>


				<li><div class="btn">
				<div class="lt" style="padding-left:150px; line-height:42px;">
					<a class="dw_edit" target="_blank" href="dw_global.php?act=edit&id=<?php echo $this->_tpl_vars['rsedit']['id']; ?>
">dw里编辑</a>
					<span>点击后手动打开tpl/tpl_edit_global.html编辑</span>
					<a class="dw_save" href="dw_global.php?act=save&id=<?php echo $this->_tpl_vars['rsedit']['id']; ?>
">dw保存</a>
				</div>
				<input type="submit" class="zd2" name="button" id="button" value="提交" />
				<?php if ($_GET['col'] == 'mode'): ?>
					<?php if ($this->_tpl_vars['rsedit']): ?>
						<input type="submit" class="zd2 save_by_file_for_mode_modify" name="button" id="button" value="另类保存" />
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['rsedit']['id']; ?>
" />
					<?php else: ?>
						<input type="submit" class="zd2 save_by_file_for_mode_save" name="button" id="button" value="另类保存" />
					<?php endif; ?>
				<?php endif; ?>
				</div><div class="clear"></div></li>


	<!--pic-->			
			<?php if ($this->_tpl_vars['Field_']['pic']): ?>
			<?php if ($_GET['col'] == 'imgs'): ?>
				<li class="Pic"><div class="Left">图片：</div><div class="Right">
					<div class="Li_pic">
						<input type="hidden" class="pic_on" name="pic_on_0" value="" />
						<p><span>bg</span><input type="file" name="bg0" /></p>
						<p><span>icon</span><input type="file" name="icon0" /></p>
						<p><span>img</span><input type="file" name="img0" /></p>
						<p><span>other</span><input type="file" name="other0" /></p>
						<b><input type="text" name="pic_add0" value="" /></b>
					</div>
					<div class="pic0"><?php echo $this->_tpl_vars['rsedit']['pic']; ?>
<input type="hidden" name="pic0" value="<?php echo $this->_tpl_vars['rsedit']['pic']; ?>
" /></div>
				</div><div class="clear"></div><div class="picture"><img src="<?php echo $this->_tpl_vars['rsedit']['pic']; ?>
" /></div></li>
			<?php else: ?>
				<li><div class="Left">图片：</div><div class="Right"><input type="file" name="pic_add0" value="<?php echo $this->_tpl_vars['rsedit']['pic']; ?>
" /><div class="pic0"><?php echo $this->_tpl_vars['rsedit']['pic']; ?>
<input type="hidden" name="pic0" value="<?php echo $this->_tpl_vars['rsedit']['pic']; ?>
" /></div></div><div class="clear"></div></li>
			<?php endif; ?>
			<?php endif; ?>

	<!--width-->			
			<?php if ($this->_tpl_vars['Field_']['width']): ?>
				<li><div class="Left">宽度：</div><div class="Right short"><input class="input" type="text" name="width0" value="<?php echo $this->_tpl_vars['rsedit']['width']; ?>
" data-role="" /></div><div class="clear"></div></li>
			<?php endif; ?>

	<!--height-->			
			<?php if ($this->_tpl_vars['Field_']['height']): ?>
				<li><div class="Left">高度：</div><div class="Right short"><input class="input" type="text" name="height0" value="<?php echo $this->_tpl_vars['rsedit']['height']; ?>
" data-role="" /></div><div class="clear"></div></li>
			<?php endif; ?>

	<!--source-->			
			<?php if ($this->_tpl_vars['Field_']['source']): ?>
				<li><div class="Left">ps源文件：</div><div class="Right short"><input class="input" type="text" name="source0" value="<?php echo $this->_tpl_vars['rsedit']['source']; ?>
" data-role="" /></div><div class="clear"></div></li>
			<?php endif; ?>

<style>
.editform .original{position:absolute; left:25px; top:45px;}
.editform .basehtml{ position:absolute; left:25px; top:65px;}
.Mbody h3{ border-color:#deeace!important; background-color:#ecf1e7; font-weight:normal;}
.Mdesc{ border-color:#deeace!important; background-color:#ecf1e7;}
.Mdesc a{ color:#79ae3b;}
	.Mdesc{ width:666px; margin:0 auto; padding:10px 15px; border:1px solid; font-size:14px; line-height:26px; text-shadow:1px 1px 1px #fff;/*后加*/display:none; margin:0;}
	.Mdesc p s{ margin-right:8px;/*后加*/ font-family:微软雅黑; color:#444;}
	.Mdesc a:hover{ padding-left:5px;}
	.Mbody{ padding:20px 0 0; font-size:14px; line-height:26px; color:#999; /*后加*/width:718px; background-color:#fff; border:#ddd 1px solid; padding:10px; display:none;}
	.Mbody .section{ margin-bottom:15px;}
	.Mbody h3{ height:35px; line-height:35px; padding:0 15px 0 28px; font-size:15px; border-top:1px solid; color:#333; text-shadow:1px 1px 1px #fff; background-image:url(../style/imgs/icon/same/icon145_1.png); background-size:13px; background-position:8px 11px;}
	.Mbody .con{ padding:10px 15px;}
	.Mbody .code{ width:666px; margin:10px auto; padding:0 10px; border:#eee 1px solid; background-color:#f8f8f8; font-size:12px; line-height:22px; /*overflow-x:scroll;*/}
	.Mbody .p{ padding:0 10px; background-color:#f8f8f8; border-bottom:#eee 1px dashed; margin-bottom:10px; color:#666;}
	.Mbody .p s:before{ content:'//'; color:#c5c5c5; padding:0 10px; font-size:10px;}
</style>

	<!--description-->			
			<?php if ($this->_tpl_vars['Field_']['description']): ?>
				<li style="position:relative;"><div class="Left">简介：</div><div class="Right"><textarea class="css_textarea_desc" name="description0"><?php echo $this->_tpl_vars['rsedit']['description']; ?>
</textarea><div class="switchDiv Mdesc"></div></div><a class="original" href="javascript:;">源代码</a><a class="basehtml basehtml_desc" href="javascript:;">加入代码</a><div class="clear"></div></li>
			<?php endif; ?>
			
	<!--content-->			
			<?php if ($this->_tpl_vars['Field_']['content']): ?>
				<li style="position:relative;"><div class="Left">详情：</div><div class="Right long"><textarea class="css_textarea_con text_con" name="content0"><?php echo $this->_tpl_vars['rsedit']['content']; ?>
</textarea><div class="switchDiv Mbody"></div></div><a class="original" href="javascript:;">源代码</a><a class="basehtml basehtml_con" href="javascript:;">加入代码</a><div class="clear"></div></li>
			<?php endif; ?>
			
			<script>
			$(function(){
				//源代码切换
				var a=0;
				$(".editform .original").click(function(){
					if(a==0){
						var text1=$(this).siblings(".Right").children("textarea").val();
						$(this).siblings(".Right").children("textarea").val(0).hide();
						$(this).siblings(".Right").children(".switchDiv").html(text1).show();
						$(this).text("展示效果 [保存前换回源代码]");
						a=1;
					}else{
						var text2=$(this).siblings(".Right").children(".switchDiv").html();
						$(this).siblings(".Right").children("textarea").val(text2).show();
						$(this).siblings(".Right").children(".switchDiv").text(0).hide();
						$(this).text("源代码");
						a=0;
					}
				});
				
				$(".editform .basehtml_con").click(function(){
					var text=$(this).siblings(".Right").children("textarea").val();
					var html="<div class='section'><h3></h3><div class='con'></div><div class='code'></div></div>";
					$(this).siblings(".Right").children("textarea").val(""+text+""+html+"");
				});
				$(".editform .basehtml_desc").click(function(){
					var text=$(this).siblings(".Right").children("textarea").val();
					var html="<p><s>1.</s><a href='#s1'></a></p>";
					$(this).siblings(".Right").children("textarea").val(""+text+""+html+"");
				});
				
			});
			</script>


	<!--zs-->			
			<?php if ($this->_tpl_vars['Field_']['zs']): ?>
				<li><div class="Left">zs：</div><div class="Right"><textarea class="css_textarea_con" name="zs0"><?php echo $this->_tpl_vars['rsedit']['zs']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>
	<!--backpic-->			
			<?php if ($this->_tpl_vars['Field_']['backpic']): ?>
				<li><div class="Left">backpic：</div><div class="Right"><textarea class="css_textarea_con" name="backpic0"><?php echo $this->_tpl_vars['rsedit']['backpic']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>
	<!--css-->			
			<?php if ($this->_tpl_vars['Field_']['css']): ?>
				<li><div class="Left">css：</div><div class="Right"><textarea class="css_textarea_con" name="css0"><?php echo $this->_tpl_vars['rsedit']['css']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>
	<!--html-->			
			<?php if ($this->_tpl_vars['Field_']['html']): ?>
				<li><div class="Left">html：</div><div class="Right"><textarea class="css_textarea_con" name="html0"><?php echo $this->_tpl_vars['rsedit']['html']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>
	<!--dede_tags-->			
			<?php if ($this->_tpl_vars['Field_']['dede_tags']): ?>
				<li><div class="Left">dede_tags：</div><div class="Right"><textarea class="css_textarea_con" name="dede_tags0"><?php echo $this->_tpl_vars['rsedit']['dede_tags']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>
	<!--script-->			
			<?php if ($this->_tpl_vars['Field_']['script']): ?>
				<li><div class="Left">script：</div><div class="Right"><textarea class="css_textarea_con" name="script0"><?php echo $this->_tpl_vars['rsedit']['script']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>



	<!--about-->			
			<?php if ($this->_tpl_vars['Field_']['about']): ?>
				<li><div class="Left">相关例证：</div><div class="Right"><textarea class="css_textarea_con" name="about0"><?php echo $this->_tpl_vars['rsedit']['about']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>
	<!--answer-->			
			<?php if ($this->_tpl_vars['Field_']['answer']): ?>
				<li><div class="Left">答案：</div><div class="Right"><textarea class="css_textarea_con" name="answer0"><?php echo $this->_tpl_vars['rsedit']['answer']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>
	<!--time-->			
			<?php if ($this->_tpl_vars['Field_']['time']): ?>
				<li><div class="Left">解决时间：</div><div class="Right"><input class="input" type="text" name="time0" value="<?php echo $this->_tpl_vars['rsedit']['time']; ?>
" data-role="" /></div><div class="clear"></div></li>
			<?php endif; ?>
	<!--note-->			
			<?php if ($this->_tpl_vars['Field_']['note']): ?>
				<li><div class="Left">备注：</div><div class="Right"><textarea class="css_textarea_con" name="note0"><?php echo $this->_tpl_vars['rsedit']['note']; ?>
</textarea></div><div class="clear"></div></li>
			<?php endif; ?>



			<?php if ($this->_tpl_vars['Field_']['PM']): ?>
				<li><div class="Left">PM：</div><div class="Right"><input class="input" name="PM0" value="<?php echo $this->_tpl_vars['rsedit']['PM']; ?>
"></div><div class="clear"></div></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['Field_']['file']): ?>
				<li><div class="Left">file：</div><div class="Right"><input class="input" name="file0" value="<?php echo $this->_tpl_vars['rsedit']['file']; ?>
"></div><div class="clear"></div></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['Field_']['page']): ?>
				<li><div class="Left">page：</div><div class="Right"><input class="input" name="page0" value="<?php echo $this->_tpl_vars['rsedit']['page']; ?>
"></div><div class="clear"></div></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['Field_']['mode']): ?>
				<li><div class="Left">mode：</div><div class="Right"><input class="input" name="mode0" value="<?php echo $this->_tpl_vars['rsedit']['mode']; ?>
"></div><div class="clear"></div></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['Field_']['zoom']): ?>
				<li><div class="Left">zoom：</div><div class="Right"><input class="input" name="zoom0" value="<?php echo $this->_tpl_vars['rsedit']['zoom']; ?>
"></div><div class="clear"></div></li>
			<?php endif; ?>


			<?php if ($this->_tpl_vars['Field_']['sitename']): ?>
				<li><div class="Left">sitename：</div><div class="Right"><input class="input" name="sitename0" value="<?php echo $this->_tpl_vars['rsedit']['sitename']; ?>
"></div><div class="clear"></div></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['Field_']['url']): ?>
				<li><div class="Left">url：</div><div class="Right"><input class="input" name="url0" value="<?php echo $this->_tpl_vars['rsedit']['url']; ?>
"></div><div class="clear"></div></li>
			<?php endif; ?>

				
				<li><div class="btn">
				<input type="submit" class="zd2" name="button" id="button" value="提交" />
				<?php if ($_GET['col'] == 'mode'): ?>
					<?php if ($this->_tpl_vars['rsedit']): ?>
						<input type="submit" class="zd2 save_by_file_for_mode_modify" name="button" id="button" value="另类保存" />
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['rsedit']['id']; ?>
" />
					<?php else: ?>
						<input type="submit" class="zd2 save_by_file_for_mode_save" name="button" id="button" value="另类保存" />
					<?php endif; ?>
				<?php endif; ?>
				</div><div class="clear"></div></li>
		</form>
		
		
		</ul><!--editpage end-->
	</div><!--con end-->
	
<script>
$(function(){
		$(".Li_pic p span").click(function(){ //Add点击图片上传按键
			$(this).siblings("input").click();
		});
		
		$(".Li_pic p").change(function(){
			pic_on=$(this).find("span").text();
			$(this).siblings(".pic_on").val(pic_on);
			var url=$(this).children("input").val();
			$(this).parents(".Right").find(".pic0").text(url);
		});
				//另类保存
				$(".editpage .save_by_file_for_mode_save").click(function(){
					$(".editpage form").attr("action","?col=mode&act=save&save_mode=save_by_file");
					$(".editpage form").submit();
				});
				$(".editpage .save_by_file_for_mode_modify").click(function(){
					$(".editpage form").attr("action","?col=mode&act=modify&save_mode=save_by_file");
					$(".editpage form").submit();
				});

});
</script>
	
	
</div><!--Main end-->

</body>
</html>