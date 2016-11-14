<?php
require_once("include.php");
if( empty($_SESSION["login"]["account"]) || empty($_SESSION["login"]["password"]) ){
    sys_jumpurl::jsRedirect("","login.php");
    exit;
}



$con=mysql_connect('localhost','root','123');
mysql_select_db("notebook", $con);


if($_REQUEST["col"]=="bCat"){
	$db_name="tab_bcat";
}else if($_REQUEST["col"]=="sCat"){
	$db_name="tab_scat";
}else if($_REQUEST["col"]=="mark"){
	$db_name="tab_mark";
}else if($_REQUEST["col"]=="attr"){
	$db_name="tab_attr";
}else if($_REQUEST["col"]=="keyword"){
	$db_name="tab_keyword";
}else{
	$db_name="tab_bcat";
}


mysql_query("set names 'utf8'");//避免中文都变问号

//最前
if($_REQUEST["act"]=="first"){
	$id=$_REQUEST["id"];
	//当前设sort=0
	$sql2_ud_first="UPDATE $db_name SET Sort='0' WHERE id='".$id."' ";
	$rs2_ud_first = mysql_query($sql2_ud_first);
	//全部重新排序
	$sql_all_first="SELECT * FROM $db_name Order By Sort";
	$result_all_first = mysql_query($sql_all_first);
	while( $row = mysql_fetch_array($result_all_first,MYSQL_ASSOC) ){
	    $result_all_first2[] = $row;
	}
	$sort_def=1;
	foreach($result_all_first2 as $k1=>$v1){
		$sql_ud_first="UPDATE $db_name SET Sort='".$sort_def."' WHERE id='".$v1["id"]."' ";
		$rs0_ud_first = mysql_query($sql_ud_first);
		$sort_def++;
	};
}	


//最后
if($_REQUEST["act"]=="last"){
	$id=$_REQUEST["id"];
	//当前设sort=100000
	$sql2_ud_last="UPDATE $db_name SET Sort='100000' WHERE id='".$id."' ";
	$rs2_ud_last = mysql_query($sql2_ud_last);
	//全部重新排序
	$sql_all_last="SELECT * FROM $db_name Order By Sort";
	$result_all_last = mysql_query($sql_all_last);
	while( $row = mysql_fetch_array($result_all_last,MYSQL_ASSOC) ){
	    $result_all_last2[] = $row;
	}
	$sort_def=1;
	foreach($result_all_last2 as $k1=>$v1){
		$sql_ud_last="UPDATE $db_name SET Sort='".$sort_def."' WHERE id='".$v1["id"]."' ";
		$rs0_ud_last = mysql_query($sql_ud_last);
		$sort_def++;
	};
}	


//调至第几
if($_REQUEST["act"]=="goto"){
	$id=$_REQUEST["id"];
	$goto=$_REQUEST["goto"];
	//当前设sort=goto
	$sql2_ud_goto="UPDATE $db_name SET Sort='".$goto."' WHERE id='".$id."' ";
	$rs2_ud_goto = mysql_query($sql2_ud_goto);
	//全部重新排序
	$sql_all_goto="SELECT * FROM $db_name Order By Sort";
	$result_all_goto = mysql_query($sql_all_goto);
	while( $row = mysql_fetch_array($result_all_goto,MYSQL_ASSOC) ){
	    $result_all_goto2[] = $row;
	}
	$sort_def=1;
	foreach($result_all_goto2 as $k1=>$v1){
		$sql_ud_goto="UPDATE $db_name SET Sort='".$sort_def."' WHERE id='".$v1["id"]."' ";
		$rs0_ud_goto = mysql_query($sql_ud_goto);
		$sort_def++;
	};
}	


//新增
if($_REQUEST["act"]=="add"){
	$sql_tab="INSERT INTO $db_name (sort,".$_POST["tabName"].") VALUES ('".$_POST["sort"]."','".$_POST["tabVal"]."')";
	$rs = mysql_query($sql_tab);
}

//修改
if($_REQUEST["act"]=="modify"){
	$sql_tab="UPDATE $db_name SET ".$_POST["tabName"]."='".$_POST["tabVal"]."' WHERE id='".$_POST["id"]."' ";
	$rs = mysql_query($sql_tab);
}

//删除
if($_REQUEST["act"]=="del"){
	$sql_del="DELETE FROM $db_name WHERE id='".$_REQUEST["del_id"]."' ";
	$rs=mysql_query($sql_del);	
}


//分页
$sql="SELECT * FROM $db_name ";
$result0 = mysql_query($sql);
while( $row = mysql_fetch_array($result0,MYSQL_NUM) ){
    $result1[] = $row;
}
$Spage=new sys_page();
if(!$_REQUEST["page"]){
	unset($_SESSION["query"]);
	$page=1;
}else{
	$page=$_REQUEST["page"];
};
$pageArr=$Spage->getPage($page,count($result1));
$paras="&col=".$_REQUEST['col']."";//提交参数
$pagehtml=$Spage->pager($pageArr["pageCurRs"],$pageArr["pageSum"],$GLOBALS["pagesize"],$paras,"");
$smarty->assign('pagehtml',$pagehtml);//页码

if($_REQUEST["act"]=="sort"){
	$sql2="SELECT * FROM $db_name Order By Sort LIMIT ".$pageArr['starNum'].",".$GLOBALS['pagesize']." ";
}else{
	$sql2="SELECT * FROM $db_name Order By Id LIMIT ".$pageArr['starNum'].",".$GLOBALS['pagesize']." ";
}
$result2=mysql_query($sql2);
while( $row2 = mysql_fetch_array($result2,MYSQL_NUM) ){
    $result3[] = $row2;
}

//所有字段field
$result_ = mysql_query($sql);
while( $row2 = mysql_fetch_array($result_,MYSQL_ASSOC) ){
    $result8[] = $row2;
}
foreach($result8[0] as $k2=>$v2){
	$field[]=$k2;
}

if($_REQUEST["act"]=="page" || $_REQUEST["act"]=="first"  || $_REQUEST["act"]=="last"  || $_REQUEST["act"]=="goto" || $_REQUEST["act"]=="sort"){
	$rs=array();
	$rs[0]=$result3;
	$rs[1]=$pagehtml;
	echo json_encode($rs);
}else if($_REQUEST["act"]=="add" || $_REQUEST["act"]=="modify" || $_REQUEST["act"]=="del"){
	if($rs){ echo json_encode("success");}
}else{
	$smarty->assign('result', $result3);
	$smarty->assign('field', $field);
	$smarty->display("admin_list.html");	
}

exit();

?>
