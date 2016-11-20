<?php /* Smarty version 2.6.22, created on 2014-02-26 10:25:30
         compiled from tpl_edit_product.html */ ?>
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
<span class="mark">[ 注：产品详情(或主动机台的产品概述)中添加链接时请务必在前面加”http://“ ]</span></h3>
	</div><!--ttl003a end-->
	
	<div class="con zb2Input">
		<ul class="editpage zd4_ zb2">
		<form action=""  method="post" enctype="multipart/form-data">
			<li><div class="Left">标题：</div><div class="Right"><input type="text" name="title" value="<?php echo $this->_tpl_vars['rsedit']['title']; ?>
" /></div></li>
			<?php if ($_GET['col'] == 'product'): ?>
			<li><div class="Left">推荐：</div>
				<div class="Right">
					<label for="no">否</label><input type="radio" name="recom" value="0" checked="checked"/>
					<label for="yes">是</label><input type="radio" name="recom" value="1"/>
					<input type="hidden" name="recomOn" value="<?php echo $this->_tpl_vars['rsedit']['recom']; ?>
" />  是否推荐显示到首页相关栏目
				</div>
			</li>
			<?php endif; ?>
			<li><div class="Left">产品编号：</div><div class="Right short"><input type="text" name="code" value="<?php echo $this->_tpl_vars['rsedit']['code']; ?>
" />可空缺</div></li>
			<li><div class="Left">产品颜色：</div><div class="Right short"><input type="text" name="color" value="<?php echo $this->_tpl_vars['rsedit']['color']; ?>
" />可空缺</div></li>
			<li><div class="Left">产品价格：</div><div class="Right short"><input type="text" name="price" value="<?php echo $this->_tpl_vars['rsedit']['price']; ?>
" />可空缺</div></li>
			<li>
				<div class="Left">缩略图：</div>
				<div class="Right">
					<input name="pic" type="file" /><?php echo $this->_tpl_vars['rsedit']['pic']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;注：请最好按以下尺寸上传： 普通产品=宽(300px)+高(300px);  主打产品=宽：(490px)+高：(350px) 
					<input name="picurl_u" type="hidden" id="picurl_u" value="<?php echo $this->_tpl_vars['rsedit']['pic']; ?>
" /> 
				</div>
			</li>
			<li><div class="Left">产品概述：</div><div class="Right"><?php if ($_GET['col'] == 'product'): ?><textarea name="description"><?php echo $this->_tpl_vars['rsedit']['description']; ?>
</textarea><?php else: ?><textarea name="desc_body"><?php echo $this->_tpl_vars['rsedit']['desc_body']; ?>
</textarea><?php endif; ?></div></li>
			<li><div class="Left">产品详情：</div><div class="Right"><textarea name="content"><?php echo $this->_tpl_vars['rsedit']['content']; ?>
</textarea></div></li>
			<li><div class="Left">浏览次数：</div><div class="Right short"><input type="text" name="view" value="<?php echo $this->_tpl_vars['rsedit']['view']; ?>
" />次</div></li>
			<li><div class="Left">seo关键字：</div><div class="Right"><input type="text" name="seo_keyword" value="<?php echo $this->_tpl_vars['rsedit']['seo_keyword']; ?>
" />针对网站优化，可空缺</div></li>
			<li><div class="Left">seo描述：</div><div class="Right"><textarea name="seo_desc"><?php echo $this->_tpl_vars['rsedit']['seo_desc']; ?>
</textarea>针对网站优化，可空缺</div></li>
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