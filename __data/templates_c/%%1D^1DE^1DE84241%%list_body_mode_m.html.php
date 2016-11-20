<?php /* Smarty version 2.6.22, created on 2015-12-25 16:21:50
         compiled from list_body_mode_m.html */ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<title>shop</title>
    <?php CSS("css/h_resetM.css"); ?>
    <?php JS("js/jquery-1.10.2.js | js/m/h_base.js"); ?>
</head>
<style>.HTest{ padding:60px 0;}</style>
<body style=" background-color:#f6f6f6; min-height:800px;">
<div class="mMain">

<style type="text/less">
/*layout*/
@import "css/h_varMix.less";
@import "css/h_modeM.less";
/*css*/
<?php echo $this->_tpl_vars['rsInfo']['css']; ?>

/*css_*/
</style>
<script language="javascript" type="text/javascript" src="js/less.js"></script>

<div class="HTest">
<!--html-->
<?php echo $this->_tpl_vars['rsInfo']['html']; ?>

<!--html_-->
</div><!--HTest end-->

<script>
/*script*/
<?php echo $this->_tpl_vars['rsInfo']['script']; ?>

/*script_*/
</script>


<!--新一页获取当页源代码 start-->
<a onClick="getHtml();" href="javascript:;" style=" display:block; position:fixed; right:0; top:5px; padding:10px 20px; background-color:#ddd;">源代码</a>
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