<?php
require_once("include.php");
$sdb=new db();
$act=$_REQUEST["act"];


$tpl_list="list.html";//默认列表页模板
$tpl_edit="edit.html";//默认编辑页模板

$db_name="db_diary";


if(!$act){
	$smarty->display("index.html");
	exit();
}


if($act=='edit'){ 

	$rsedit=$sdb->getTableRowResult("$db_name"," 1=1 And id='".$_GET["id"]."' ");
	if($rsedit){
		for($i=1;$i<=105;$i++){
			$t=explode("^",$rsedit["s".$i]);
			$rsedit["s".$i."_score"]=$t[0];
			$rsedit["s".$i."_des"]=$t[1];
		}
	$rsedit["diary"]=stripcslashes($rsedit["diary"]);
	$smarty->assign('rsedit',$rsedit); 
	}
	$smarty->display("$tpl_edit");
	exit;
	
}
 
 
 
 

 
 
if($act=='list'){

	$Spage=new sys_page();
	if(!$_GET["pageid"]){
		unset($_SESSION["query"]);
		$pageid=0;
	}else{
		$pageid=$_REQUEST["pageid"];
	};
	$rsTotal=$sdb->getTableAllResult(" $db_name ","1=1 ".$whereStr." ");
	$pageArr=$Spage->getPage($pageid,count($rsTotal));
		$paras="col=".$col."&keyword=".$_GET["keyword"]."&block=list";//提交参数
		$pagehtml=$Spage->pager($pageArr["pageCurRs"],$pageArr["pageSum"],$GLOBALS["pagesize"],$paras,$_REQUEST["act"]);
		$smarty->assign('pagehtml',$pagehtml);//页码
		
	$rsList=$sdb->getTableAllResult("$db_name"," 1=1 Order By Id DESC Limit ".$pageArr["starNum"].",".$GLOBALS["pagesize"]." ");
	$smarty->assign("rsList",$rsList);
	
	$smarty->display("$tpl_list");
	exit();
	
}

 
 
 
 

if($act=="save"){
		$addmood=array();
		for($i=1;$i<=105;$i++){
			$addmood["s".$i]=" ".$_POST["s".$i."_score"]."^".$_POST["s".$i."_des"]." ";
		}
		$addmood["diary"]=$_POST["diary"];
		$rs_save=$sdb->addTableRecode("$db_name",$addmood);
		if($rs_save){
			echo '<script language="javascript">alert("操作成功");location.href="?act=list&pageid='.$_GET["pageid"].'";</script>';
			exit();
		}
		
}







if($act=='modify'){
	
		$mood=array();
		for($i=1;$i<=24;$i++){
			$mood["s".$i]=" ".$_POST["s".$i."_score"]."^".$_POST["s".$i."_des"]." ";
		}
		$mood["diary"]=$_POST["diary"];
		//echo("<pre>");print_r($mood);echo("<pre>");exit();
		$rs_save=$sdb->updateTableCon($mood," $db_name ","  id='".$_REQUEST["id"]."' "); 
		if($rs_save){
			echo '<script language="javascript">alert("操作成功");location.href="?act=list&pageid='.$_GET["pageid"].'";</script>';
			exit;
		}
		
} 







 
if($act=='del'){
	$rs_del=$sdb->deleteTableResult("$db_name","  id='".$_GET["delid"]."' "); 
	if($rs_del){
		echo '<script language="javascript">alert("操作成功");location.href="?act=list&pageid='.$_GET["pageid"].'";</script>';
		exit;
	}
} 

?>