<?php /* Smarty version 2.6.22, created on 2014-02-26 16:02:28
         compiled from tpl_singlepage.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
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
		});
	</script>
</head>
<body>

<div class="main">

	<div class="ttl003a">
		<h3 class="lt"><s>>></s> <?php echo $this->_tpl_vars['p_ttl']; ?>
<span class="mark">[ 注：详情内容中添加链接时请务必在前面加”http://“ ]</span></h3>
	</div><!--ttl003a end-->
	
	<div class="con zb2Input">
		<ul class="editpage zd4_ zb2">
		<form action="?col=about&act=<?php if ($this->_tpl_vars['rsedit'] == ""): ?>save<?php else: ?>modify&id=<?php echo $this->_tpl_vars['rsedit']['id']; ?>
<?php endif; ?>"  method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['rsedit']['id']; ?>
" />
			<li><div class="Left">标题：</div><div class="Right"><input type="text" name="title" value="<?php echo $this->_tpl_vars['rsedit']['title']; ?>
" /></div></li>
			<li>
				<div class="Left">缩略图：</div>
				<div class="Right">
					<input name="pic" type="file" title="pic" size="40" value="" /><?php echo $this->_tpl_vars['rsedit']['pic']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;可空缺 
					<input name="picurl_u" type="hidden" id="picurl_u" value="<?php echo $this->_tpl_vars['rsedit']['pic']; ?>
" />
				</div>
			</li>
			<li><div class="Left">简介：</div><div class="Right"><textarea name="description"><?php echo $this->_tpl_vars['rsedit']['description']; ?>
</textarea>可空缺</div></li>
			<li><div class="Left">详细内容：</div><div class="Right"><textarea name="content"><?php echo $this->_tpl_vars['rsedit']['content']; ?>
</textarea></div></li>
			<li><div class="Left">seo关键字：</div><div class="Right"><input type="text" name="seo_keyword" value="<?php echo $this->_tpl_vars['rseditCol']['seo_keyword']; ?>
" />针对网站优化，可空缺</div></li>
			<li><div class="Left">seo描述：</div><div class="Right"><textarea name="seo_desc"><?php echo $this->_tpl_vars['rseditCol']['seo_desc']; ?>
</textarea>针对网站优化，可空缺</div></li>
			<li><div class="btn"><input class="zd2" type="submit" value="提交" /></div></li>
		</form>
		</ul><!--singlepage end-->
	</div><!--con end-->

</div><!--main end-->

</body>
</html>