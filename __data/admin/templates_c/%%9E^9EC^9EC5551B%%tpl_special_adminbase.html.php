<?php /* Smarty version 2.6.22, created on 2014-02-26 16:12:33
         compiled from tpl_special_adminbase.html */ ?>
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
		<form action="?col=adminbase&act=<?php if ($this->_tpl_vars['rsedit'] == ""): ?>save<?php else: ?>modify&id=<?php echo $this->_tpl_vars['rsedit']['id']; ?>
<?php endif; ?>"  method="post" enctype="multipart/form-data" class="long">
			<li><div class="Left">网站名称：</div><div class="Right"><input type="text" name="title" value="<?php echo $this->_tpl_vars['rsedit']['title']; ?>
" /></div></li>
			<li>
				<div class="Left">网站logo：</div>
				<div class="Right">
					<input name="pic" type="file" /><?php echo $this->_tpl_vars['rsedit']['pic']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;logo高度设置请保持在30~75px之间，具体按首页排版而定
					<input name="picurl_u" type="hidden" id="picurl_u" value="<?php echo $this->_tpl_vars['rsedit']['pic']; ?>
" /> 
				</div>
			</li>
			<li><div class="Left">首页title：</div><div class="Right"><input type="text" name="seo_title" value="<?php echo $this->_tpl_vars['rsedit']['seo_title']; ?>
" /></div></li>
			<li><div class="Left">站点关键字：</div><div class="Right"><input type="text" name="seo_keyword" value="<?php echo $this->_tpl_vars['rsedit']['seo_keyword']; ?>
" /></div></li>
			<li><div class="Left">站点描述：</div><div class="Right"><textarea name="seo_desc"><?php echo $this->_tpl_vars['rsedit']['seo_desc']; ?>
</textarea></div></li>
			<li><div class="Left">底部信息：</div><div class="Right"><input type="text" name="footer" value="<?php echo $this->_tpl_vars['rsedit']['footer']; ?>
" /></div></li>
			<li><div class="Left">额外信息：</div><div class="Right"><input type="text" name="other" value="<?php echo $this->_tpl_vars['rsedit']['other']; ?>
" /></div></li>
			<li><div class="btn"><input class="zd2" type="submit" value="提交" /></div></li>
			</li>
		</form>
		</ul><!--singlepage end-->
	</div><!--con end-->
	
</div><!--main end-->

</body>
</html>