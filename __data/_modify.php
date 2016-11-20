<?php
include_once("include.php");
$sdb=new db();
$act=$_GET["act"];
$db_name="db_".$_REQUEST["col"]."";





if($act=='modify'){
	
	$mood=array();
	$mood["update_time"]=date("y-m-d h:i:s");
	if($_GET["field"]=="grade"){$mood["grade"]=$_GET["value"];}
	if($_GET["field"]=="label"){$mood["label"]=$_GET["value"];}
	if($_GET["field"]=="mark"){$mood["mark"]=$_GET["value"];}
	$rs_mod=$sdb->updateTableCon($mood," $db_name ","  id='".$_GET["id"]."' "); 
	if($rs_mod){
			echo '<script language="javascript">alert("操作成功");location.href="index.php?act=list&block=list&col='.$_REQUEST["col"].'&pageid='.$_GET["pageid"].'";</script>';
	}
	exit;
} 





 
if($act=='del'){
	$rs_del=$sdb->deleteTableResult("$db_name","  id='".$_GET["delid"]."' "); 
	if($rs_del){
		echo '<script language="javascript">alert("操作成功");location.href="index.php?act=list&col='.$_REQUEST["col"].'&block=list&pageid='.$_GET["pageid"].'";</script>';
		exit;
	}
} 


?>