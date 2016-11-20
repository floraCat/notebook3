<?php /* Smarty version 2.6.22, created on 2014-02-24 16:24:59
         compiled from tpl_edit_flink.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title> 
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<!--编辑器-->
	<link rel="stylesheet" href="editor/default/default.css" />
	<script charset="utf-8" src="editor/kindeditor-min.js"></script>
	<script charset="utf-8" src="editor/lang/zh_CN.js"></script>
	<script language="javascript">
		KindEditor.ready(function(K) {
			K.create('textarea[name="content"]', {
				autoHeightMode : true,
				afterCreate : function() {
					this.loadPlugin('autoheight');
				}
			});
			K.create('textarea[name="desc_body"]', {
				autoHeightMode : true,
				afterCreate : function() {
					this.loadPlugin('autoheight');
				}
			});
		});
	</script>
<script type="text/javascript" src="js/layout.js"></script>
</head>
<body>

<div class="main">

	<div class="ttl003a">
		<h3 class="lt"><?php echo $this->_tpl_vars['p_ttl']; ?>
</h3>
	</div><!--ttl003a end-->
	
	<div class="con zb2Input">
		<ul class="editpage zd4_ zb2">
		<form action=""  method="post" enctype="multipart/form-data">
			<li><div class="Left">链接文本：</div><div class="Right"><input type="text" name="title" value="<?php echo $this->_tpl_vars['rsedit']['title']; ?>
" />关键词</div></li>
			<li><div class="Left">网址：</div><div class="Right"><input type="text" name="link" value="<?php echo $this->_tpl_vars['rsedit']['link']; ?>
" />网址前请务必填写http://</div></li>
			<li>
				<div class="Left">商标：</div>
				<div class="Right">
					<input name="pic" type="file" /><?php echo $this->_tpl_vars['rsedit']['pic']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;可空缺 
					<input name="picurl_u" type="hidden" id="picurl_u" value="<?php echo $this->_tpl_vars['rsedit']['pic']; ?>
" /> 
				</div>
			</li>
			<li><div class="Left">简介记录：</div><div class="Right"><?php if ($_GET['col'] == 'product'): ?><textarea name="description"><?php echo $this->_tpl_vars['rsedit']['description']; ?>
</textarea><?php else: ?><textarea name="desc_body"><?php echo $this->_tpl_vars['rsedit']['desc_body']; ?>
</textarea><?php endif; ?>可空缺</div></li>
			<li>
				<div class="btn">
					<?php if ($_GET['act'] == 'edit'): ?>
					<input name="id" type="hidden" id="id" value="<?php echo $_GET['id']; ?>
"> 
					<input name="col" type="hidden" id="col" value="<?php echo $_GET['col']; ?>
"> 
					<input name="act" type="hidden" id="act" value="modify">
					<input type="submit" class="zd2" name="button" id="button" value="修改" />
					<?php else: ?>
					<input name="col" type="hidden" id="col" value="<?php echo $_GET['col']; ?>
"> 
					<input name="act" type="hidden" id="act" value="save">
					<input type="submit" class="zd2" name="button" id="button" value="新增" />
					<?php endif; ?>	
				</div>		
			</li>
		</form>
		</ul><!--singlepage end-->
	</div><!--con end-->
	
</div><!--main end-->

</body>
</html>