<?php /* Smarty version 2.6.22, created on 2015-12-27 11:14:55
         compiled from list_body_mode_pc.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/pc/h_reset.css" />
<link rel="stylesheet" type="text/css" href="css/m/h_global.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<style>.HTest{ padding:20px;}</style>
</head>
<body style=" background-color:#f6f6f6; min-height:1500px;">
<div class="mMain">

<style>
/*--------------------------------*/
/*zs*/
<?php echo $this->_tpl_vars['rsInfo']['zs']; ?>

/*zs_*/
/*--------------------------------*/
/*backpic*/
<?php echo $this->_tpl_vars['rsInfo']['backpic']; ?>

/*backpic_*/
/*--------------------------------*/
/*css*/
<?php echo $this->_tpl_vars['rsInfo']['css']; ?>

/*css_*/
/*--------------------------------*/
</style>


<div class="HTest">
<!--html-->
<?php echo $this->_tpl_vars['rsInfo']['html']; ?>

<!--html_-->
</div>
<!--HTest end-->


<script>
/*script*/
<?php echo $this->_tpl_vars['rsInfo']['script']; ?>

/*script_*/
</script>


<!--新一页获取当页源代码 start-->
<a onclick="getHtml();" href="javascript:;" style=" display:block; position:absolute; right:5px; top:5px; padding:10px 20px; background-color:#ddd;">源代码</a>
<script>
function getHtml(){
	 var html=document.getElementsByTagName('html')[0].innerHTML; 
	 var a=window.open("about:blank");
	 var d=a.document;
	 d.write("<xmp>"+html+"</xmp>");
}
</script>
<!--新一页获取当页源代码 end-->


</div><!--mMain end-->
</body>
</html>