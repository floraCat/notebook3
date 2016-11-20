<?php
include_once("include.php");
include_once("_import.php");
$sdb=new db();
$g=$_GET;
$p=$_POST;

if($_REQUEST["db"]=="mode"){
	$db_name="db_mode";
	if($_GET["tpl"]=="pc"){$tpl_body="list_body_mode_pc.html";}
	if($_GET["tpl"]=="m"){$tpl_body="list_body_mode_m.html";}
	if($_GET["tpl"]=="code"){$tpl_body="list_body_mode_code.html";}
$rsInfo=$sdb->getTableRowResult("$db_name","title='".$g["ttl"]."'");
//echo("<pre>");print_r($rsInfo);echo("</pre>");exit;
$rsInfo["description"]=stripcslashes($rsInfo["description"]);
$rsInfo["content"]=stripcslashes($rsInfo["content"]);
$rsInfo["css"]=stripcslashes($rsInfo["css"]);
$rsInfo["html"]=stripcslashes($rsInfo["html"]);
$rsInfo["self_tags"]=stripcslashes($rsInfo["self_tags"]);
$rsInfo["dede_tags"]=stripcslashes($rsInfo["dede_tags"]);
$rsInfo["script"]=stripcslashes($rsInfo["script"]);
}



//调用3spec模块代码
if($_REQUEST["db"]=="refer"){
	$db_name="db_refer";
	$tpl_body="list_body_mode_code.html";
	$rsInfo=$sdb->getTableRowResult("$db_name","id='".$g["id"]."'");
}


if($_REQUEST["db"]=="automode"){
	$db_name="db_automode";
	$tpl_body="list_automode_view.html";
	$rsInfo=$sdb->getTableRowResult("$db_name","sitename='".$g["sitename"]."' And title='".$g["ttl"]."'");
	$rsCat=$sdb->getTableRowResult("db_automode_cat","sitename='".$rsInfo["sitename"]."'");
	define('BASE_PATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/");
	$rsInfo["code"]=str_replace('src="'.$g["sitename"].'/','src="',$rsInfo["code"]);
	$rsInfo["code"]=str_replace('src="','src="automode/'.$rsCat["url"].$g["sitename"].'/',$rsInfo["code"]);
	$rsInfo["code"]=str_replace(':url(',':url(automode/'.$rsCat["url"].$g["sitename"].'/css/',$rsInfo["code"]);
}




//创建表单
if($_REQUEST["db"]=="form"){
	$db_name="db_form";
	$tpl_body="create_form_review.html";
	if($_POST["formLi"]){
		$rsList=$sdb->getTableAllResult("$db_name","1=1 And form='li'");
		$form=$_POST["formLi"];
	}elseif($_POST["formDl"]){
		$rsList=$sdb->getTableAllResult("$db_name","1=1 And form='dl'");
		$form=$_POST["formDl"];
	}
	foreach($rsList as $k=>$v){
		foreach($form as $v2){
			if($v["title"]==$v2){
				$rsInfo["css"].=$v["css"];
				$rsInfo["html"].=$v["html"];
				$rsInfo["js"].=$v["js"];
			}
		}
	}
	if($_POST["formLi"]){
		$css_li=
'._liForm li{ margin-bottom:20px; position:relative;}
._liForm li ._mgR{ margin-right:100px;}
._liForm li ._pd{ padding:3px 8px 0 0;}
._liForm li .inputL{ height:40px; text-indent:45px;}
';
		$rsInfo["css"]=$css_li.$rsInfo["css"];
		$rsInfo["html"]='<div class=_liForm>'.$rsInfo["html"].'</div>';
	}
	if($_POST["formDl"]){
		$css_dl=
'._dlForm dl{ margin-bottom:10px; overflow:hidden;}
._dlForm dt{ float:left; width:80px; line-height:35px; text-align:right; white-space:nowrap;}
._dlForm dd{ height:35px; margin-left:90px;}
._dlForm .dd{ height:auto;}
._dlForm dd._mgR{ margin-right:90px;}
';
		$rsInfo["css"]=$css_dl.$rsInfo["css"];
		$rsInfo["html"]='<div class=_dlForm>'.$rsInfo["html"].'</div>';
	}
	//echo($rsInfo["css"]);die;
}





$smarty->assign("rsInfo",$rsInfo);
$smarty->display("$tpl_body");



?>