<?php
require_once("include.php");
if( empty($_SESSION["login"]["account"]) || empty($_SESSION["login"]["password"]) ){
    sys_jumpurl::jsRedirect("","login.php");
    exit;
}


$sdb=new db();
$act=$_REQUEST["act"];
$col=$_REQUEST["col"];


//$tpl_list="list.html";//默认列表页模板
$tpl_edit="edit.html";//默认编辑页模板



if(!$act){

	/***首页推荐***/
	$recom_note=$sdb->getTableAllResult("db_note","1=1 And recom=1");
	$smarty->assign("recom_note",$recom_note);

	$recom_material=$sdb->getTableAllResult("db_material","1=1 And recom=1");
	$smarty->assign("recom_material",$recom_material);

	$recom_topic=$sdb->getTableAllResult("db_topic","1=1 And recom=1");
	$smarty->assign("recom_topic",$recom_topic);

	$recom_website=$sdb->getTableAllResult("db_website","1=1 And recom=1");
	$smarty->assign("recom_website",$recom_website);

	$recom_diary=$sdb->getTableAllResult("db_diary","1=1 And recom=1");
	$smarty->assign("recom_diary",$recom_diary);

	$smarty->display("index.html");
	exit();
}


//日志
if($col=="diary"){ 
	$db_name="db_diary";
	$tpl_list="list.html";
}
//问题
if($col=="material"){ 
	$db_name="db_material";
	$tpl_list="list.html";
}
//笔记
if($col=="note"){ 
	$db_name="db_note";
	$tpl_list="list.html";
}
//知识点
if($col=="topic"){ 
	$db_name="db_topic";
	$tpl_list="list.html";
}
//网址
if($col=="website"){ 
	$db_name="db_website";
	$tpl_list="list.html";
}

//大分类
if($col=="bCat"){ 
	$db_name="tab_bcat";
}
//小分类
if($col=="sCat"){ 
	$db_name="tab_scat";
}
//属性
if($col=="attr"){ 
	$db_name="tab_attr";
}
//标识
if($col=="mark"){ 
	$db_name="tab_mark";
}
//关键字
if($col=="keyword"){ 
	$db_name="tab_keyword";
}




/***编辑***/
if($act=='edit'){

	//列举所有字段
	$rsedit0=$sdb->getTableRowResult("$db_name"," 1=1 And id=1 ");
	foreach($rsedit0 as $k=>$v){
		$Fields[$k]=$k;
	}
	$smarty->assign("Fields",$Fields);

	//编辑非新增
	if($_GET["id"]){
		$rsedit=$sdb->getTableRowResult("$db_name"," 1=1 And id='".$_GET["id"]."' ");
		$rsedit["content"]=stripcslashes($rsedit["content"]);
		if($col=="diary"){ $smarty->assign("date",date("y-m-d"));}
		$rs_bcat2=$sdb->getTableRowResult("tab_bcat","1=1 And bCat='".$rsedit["bCat"]."' ");
		$id_bCat=$rs_bcat2["id"];

		//topic内容处理
		if($col=="topic" && $_REQUEST["tpl"]=="article"){
			$arr_material=$sdb->getTableAllResult("db_material"," 1=1 And topic_id='".$rsedit["id"]."' And mark!='grey' Order By topic_sort DESC ");
			$rsedit["materials"]=$arr_material;
			if($rsedit["description"]==""){
				if($arr_material){
					foreach($arr_material as $k6=>$v6){
						$arr[$k6]=$arr_material[$k6]["ttl"];
					};
					$rsedit["description"]=implode(' / ',$arr);
				}
			}
		}
		//material处理
		if($col=="material" && $_REQUEST["tpl"]=="article"){
			$topic=$sdb->getTableRowResult("db_topic","1=1 And id='".$rsedit["topic_id"]."' ");
			$rsedit["topic_name"]=$topic["ttl"];
		}
	}

	// echo("<pre>");
	// print_r($rsedit);
	// echo("</pre>");

	$smarty->assign('rsedit',$rsedit);

	//当前栏目所有大分类
	if($Fields["bCat"]){
		$rs_bcat=$sdb->getTableAllResult("tab_bcat","1=1");
		$smarty->assign("bCats",$rs_bcat);
	}
	
	//当前栏目所有小分类
	if($Fields["sCat"]){
		$rs_sCat=$sdb->getTableAllResult("tab_sCat","1=1 And bCat='".$id_bCat."' ");
		$smarty->assign("sCats",$rs_sCat);
	}

	//当前栏目所有属性
	if($Fields["attr"]){
		$rs_attr=$sdb->getTableAllResult("tab_attr","1=1");
		$smarty->assign("attrs",$rs_attr);
	}

	//当前栏目所有关键字
	if($Fields["keyword"]){
		$rs_keyword=$sdb->getTableAllResult("tab_keyword","1=1 And $col Not Like 0");
		$smarty->assign("keywords",$rs_keyword);
	}

	//标题颜色
	$rs_mark=$sdb->getTableAllResult("tab_mark","1=1");
	if($rs_mark){
		foreach($rs_mark as $k=>$v){
			$rs_mark[$k]["col"]=$v[$col];
		};
	}



	//以下列举字段方法本地可以，上线后不行？
	//$sql="select Column_name from information_schema.COLUMNS where table_name = '".$db_name."' and table_schema = 'notebook' ";
	//$Field=$sdb->getall($sql);
	// foreach($Field as $k=>$v){
	// 	foreach($v as $k2=>$v2){
	// 		$Fields[$v2]=$v2;
	// 	}
	// }
	


	$smarty->assign("marks",$rs_mark);

	if($_REQUEST["tpl"]=="article"){
		$smarty->display("article.html");
	}else{
		$smarty->display("$tpl_edit");
	}
	
	exit;
}
 

//大小分类联动
if($_REQUEST["act"]=="sCatDrop"){
	$rs_bCat=$sdb->getTableRowResult("tab_bCat","1=1 And bCat='".$_POST["bCat"]."' ");
	$rs_sCat=$sdb->getTableAllResult("tab_sCat","1=1 And bCat=".$rs_bCat["id"]." ");
	echo json_encode($rs_sCat);
}

 


/***列表***/
if($act=='list'){
	
	$Spage=new sys_page();
	if(!$_REQUEST["page"]){
		unset($_SESSION["query"]);
		$page=1;
	}else{
		$page=$_REQUEST["page"];
	};

	//$whereStr
	if($_REQUEST["bCat"]){$whereStr.="And bCat like '%".trim($_REQUEST["bCat"])."%' ";}
	if($_REQUEST["sCat"]){$whereStr.="And sCat like '%".trim($_REQUEST["sCat"])."%' ";}
	if($_REQUEST["attr"]){$whereStr.="And attr like '%".trim($_REQUEST["attr"])."%' ";}
	if($_REQUEST["keyword"]){$whereStr.="And keyword like '%".trim($_REQUEST["keyword"])."%' ";}
	if($_REQUEST["mark"]){$whereStr.="And mark like '".trim($_REQUEST["mark"])."' ";}
	if($_GET["kw"]){$whereStr.="And ".$_GET["search"]." like '%".trim($_GET["kw"])."%' ";}
	if($_GET["topic_id"]){$whereStr.="And topic_id='".$_GET["topic_id"]."' ";}

	if($_REQUEST["input_time"]!=""){
		if($_REQUEST["input_time"]=="up"){
			$whereStr.=" Order By input_time DESC ";	
		}else{ $whereStr.=" Order By input_time ASC ";}
	}else if($_REQUEST["update_time"]!=""){
		if($_REQUEST["update_time"]=="up"){
			$whereStr.=" Order By update_time DESC ";	
		}else{ $whereStr.=" Order By update_time ASC ";}
	}else{
		$whereStr.=" Order By Id DESC ";
	}

	 $rsTotal=$sdb->getTableAllResult(" $db_name ","1=1 ".$whereStr." ");
	 $pageArr=$Spage->getPage($page,count($rsTotal));
	 	$paras="";//提交参数
	 	$pagehtml=$Spage->pager($pageArr["pageCurRs"],$pageArr["pageSum"],$GLOBALS["pagesize"],$paras,$_REQUEST["act"]);
	 	$smarty->assign('pagehtml',$pagehtml);//页码
	$rsList=$sdb->getTableAllResult("$db_name"," 1=1 ".$whereStr." Limit ".$pageArr["starNum"].",".$GLOBALS["pagesize"]." ");
	$rsList=$rsList?$rsList:array();
	if($_REQUEST["year"]){//年
		foreach($rsList as $k=>$v){
			if(substr($v["input_time"],0,4)!=$_REQUEST["year"]){ unset($rsList[$k]);}		
		}		
	}
	if($_REQUEST["month"]){//月
		foreach($rsList as $k=>$v){
			if(substr($v["input_time"],5,2)!=$_REQUEST["month"]){ unset($rsList[$k]);}		
		}		
	}
	if($_REQUEST["day"]){//日
		foreach($rsList as $k=>$v){
			if(substr($v["input_time"],8,2)!=$_REQUEST["day"]){ unset($rsList[$k]);}		
		}		
	}

	//当前栏目所有分类
	$rs_bcat=$sdb->getTableAllResult("tab_bcat","1=1");

	//当前栏目所有分类
	$rs_scat=$sdb->getTableAllResult("tab_scat","1=1");

	//当前栏目所有属性
	$rs_attr=$sdb->getTableAllResult("tab_attr","1=1");

	//当前栏目所有关键字
	$rs_keyword=$sdb->getTableAllResult("tab_keyword","1=1");

	//当前栏目所有mark
	$rs_mark=$sdb->getTableAllResult("tab_mark","1=1");

	//topic内容处理
	if($col=="topic"){
		foreach($rsList as $k5=>$v5){
			$arr_material=$sdb->getTableAllResult("db_material"," 1=1 And topic_id='".$v5["id"]."' And mark!='grey' Order By topic_sort DESC ");
			$rsList[$k5]["materials"]=$arr_material;
			if($v5["description"]==""){
				if($arr_material){
					$arr6=array();
					foreach($arr_material as $k6=>$v6){
						$arr6[$k6]=$arr_material[$k6]["ttl"];
					};
					$rsList[$k5]["description"]=implode(' / ',$arr6);
				}
			}
		};
	}

	//material处理
	if($col=="material"){
		foreach ($rsList as $k11 => $v11) {
			$topic=$sdb->getTableRowResult("db_topic","1=1 And id='".$v11["topic_id"]."' ");
			$rsList[$k11]["topic_name"]=$topic["ttl"];
		}
	}

	if(!$_REQUEST["input_time"] && !$_REQUEST["update_time"]){
		foreach($rsList as $k=>$v){
			foreach($v as $k2=>$v2){
				$Fields[$k2]=$k2;
			}
		}
		$smarty->assign("Fields",$Fields);
		$smarty->assign("bCats",$rs_bcat);
		$smarty->assign("sCats",$rs_scat);
		$smarty->assign("attrs",$rs_attr);
		$smarty->assign("keywords",$rs_keyword);
		$smarty->assign("marks",$rs_mark);
		$smarty->assign("rsList",$rsList);
		$smarty->display("$tpl_list");
	}else{
		$rs=array();
		$rs[0]=$rsList;
		$rs[1]=$pagehtml;
		echo json_encode($rs);
	}	

	exit();
	
}



 
 
/***保存***/
if($act=="save"){
		
	$add=array();
	$add["ttl"]=$_POST["ttl"];
	$add["recom"]=$_POST["recom"];
	$add["content"]=stripcslashes($_POST["content"]);
	$add["website"]=$_POST["website"];
	$add["topic_id"]=$_POST["topic_id"];
	$add["topic_sort"]=$_POST["topic_sort"];
	$add["description"]=$_POST["description"];
	$add["bCat"]=$_POST["bCat"];
	//$add["sCat"]=$_POST["sCat"];
	//$add["attr"]=$_POST["attr"];
	$add["keyword"]=$_POST["keyword"];
	$add["mark"]=$_POST["mark"];
	$rs_all=$sdb->getTableAllResult("$db_name"," 1=1 ");
	$add["sort"]=count($rs_all);
	$add["update_time"]=date("y-m-d h:i:s");
	//分类数量
	// handleTab("bCat","",$col,$sdb,'');
	// handleTab("sCat","",$col,$sdb,$_POST["bCat"]);
	// handleTab("attr","",$col,$sdb,'');
	// handleTab("keyword","",$col,$sdb,'');
	// handleTab("mark","",$col,$sdb,'');

	$rs_save=$sdb->addTableRecode("$db_name",$add);
	$rs_local=$sdb->getTableAllResult("$db_name","1=1 Order By id DESC");
	$id_last=$rs_local[0]["id"];
	if($rs_save){
		//echo '<script language="javascript">alert("操作成功");location.href="?act=list&col='.$col.'";</script>';
		echo '<script language="javascript">alert("操作成功");location.href="?act=edit&col='.$col.'&id='.$id_last.'";</script>';
	}
	exit();
}






/***修改***/
if($act=='modify'){

	$mod=array();
	$mod["ttl"]=$_POST["ttl"];
	$mod["recom"]=$_POST["recom"];
	$mod["content"]=stripcslashes($_POST["content"]);
	$mod["website"]=$_POST["website"];
	$mod["topic_id"]=$_POST["topic_id"];
	$mod["topic_sort"]=$_POST["topic_sort"];
	$mod["description"]=$_POST["description"];
	$mod["bCat"]=$_POST["bCat"];
	//$mod["sCat"]=$_POST["sCat"];
	//$mod["attr"]=$_POST["attr"];
	$mod["keyword"]=$_POST["keyword"];
	$mod["mark"]=$_POST["mark"];
	$mod["update_time"]=date("y-m-d h:i:s");
	$mod["sort"]=$_POST["sort"];
	$result=$sdb->getTableRowResult("$db_name","1=1 And id='".$_REQUEST["id"]."' ");

	//分类数量
	// handleTab("bCat",$result,$col,$sdb,'');
	// handleTab("sCat",$result,$col,$sdb,$_POST["bCat"]);
	// handleTab("attr",$result,$col,$sdb,'');
	// handleTab("keyword",$result,$col,$sdb,'');
	// handleTab("mark",$result,$col,$sdb,'');

	$rs_modify=$sdb->updateTableCon($mod," $db_name ","  id='".$_REQUEST["id"]."' "); 
	if($rs_modify){
		//echo '<script language="javascript">alert("操作成功");location.href="?act=list&col='.$col.'&page='.$_REQUEST["pageid"].'";</script>';
		echo '<script language="javascript">alert("操作成功");location.href="?act=edit&col='.$col.'&id='.$_REQUEST["id"].'";</script>';
	}
	exit;	
} 


//分类对应数量更改
function handleTab($tabName,$result,$col,$sdb,$bCat){
	$db='tab_'.strtolower($tabName);
	if($result){ 
		$oldStr=$result[$tabName];
		$oldArr=explode(",",$oldStr);
	}
	$newArr=$_POST[$tabName]?explode(",",$_POST[$tabName]):array();
	if($oldStr){
		if($_POST[$tabName]===$oldStr){}else{
			foreach($oldArr as $k2=>$v2){
				$flag=0;
				if(!empty($newArr)){
					foreach($newArr as $k3=>$v3){
						if($v2==$v3){
							$flag++;
							$k_val=$k3;
						}
					};
				}
				if($flag===0){//此值已删
					$rs=$sdb->getTableRowResult($db,"1=1 And ".$tabName."='".$v2."' ");
					if($rs[$col]){//-1
						$mod=array();
						$mod[$col]=$rs[$col]-1;
						$update=$sdb->updateTableCon($mod,$db," id='".$rs["id"]."'");
					}
				}
			};
		}
	}
	if(!empty($newArr)){
		foreach($newArr as $k4=>$v4){
			$flag2=0;
			foreach($oldArr as $k5=>$v5){
				if($v5==$v4){
					$flag2++;
				}
			};
			if($flag2==0){
				$rs=$sdb->getTableRowResult($db,"1=1 And ".$tabName."='".$v4."' ");
				if($rs){//+1
					$mod=array();
					$mod[$col]=$rs[$col]+1;
					$update=$sdb->updateTableCon($mod,$db," id='".$rs["id"]."'");
				}else{//新增
					$add=array();
					$add[$tabName]=$v4;
					if($bCat){
						$find_bCat=$sdb->getTableRowResult("tab_bCat","1=1 And bCat='".$bCat."' ");
						if(!$find_bCat){
							$all_bCat=$sdb->getTableAllResult('tab_bCat',"1=1 Order By Id DESC");
							$add["bCat"]=$all_bCat[0]["id"];
						}else{ $add["bCat"]=$find_bCat["id"];}
					}
					$add[$col]=1;
					$all=$sdb->getTableAllResult($db,"1=1");
					$add["sort"]=count($all);
					$rs_add=$sdb->addTableRecode($db,$add);
				}
			}				
		};
	}
}



/***删除***/
if($act=='del'){
	$result=$sdb->getTableRowResult($db_name,"1=1 And id='".$_GET["id"]."' ");

	handleTab("bCat",$result,$col,$sdb,'');
	handleTab("sCat",$result,$col,$sdb,'');
	handleTab("attr",$result,$col,$sdb,'');
	handleTab("keyword",$result,$col,$sdb,'');
	handleTab("mark",$result,$col,$sdb,'');
	
	$rs_del=$sdb->deleteTableResult("$db_name","  id='".$_GET["id"]."' "); 
	if($rs_del){
		echo '<script language="javascript">alert("操作成功");location.href="?act=list&col='.$col.'&page='.$_GET["page"].'";</script>';
		exit;
	}
} 




//最前
if($act=="first"){
	$id=$_REQUEST["id"];
	$sort=$_REQUEST["sort"];

	$sort_2=$sort-1;
	$rs_first=$sdb->getTableAllResult(" $db_name "," 1=1 Order By Sort ASC Limit 0,".$sort_2."");
	if($rs_first){
		foreach($rs_first as $k=>$v){
			$inset_2=array();
			$inset_2["sort"]=$v["sort"]+1;
			$rs_inset_2=$sdb->updateTableCon($inset_2," $db_name "," id='".$v["id"]."' "); 
		};
	}

	$inset_1=array();
	$inset_1["sort"]=1;
	$rs_inset_1=$sdb->updateTableCon($inset_1," $db_name "," id='".$id."' ");
		
	if($rs_inset_1 && $rs_inset_2){
		$result=$sdb->getTableAllResult("$db_name","1=1");
		foreach($result as $k3=>$v3){
			$index=0;
			foreach($v3 as $k4=>$v4){
				$result2[$k3][$index]=$v4;
				$index++;
			}
		}
		echo json_encode($result2);
	}
	exit;
}	





//最后
if($act=="last"){
	$id=$_REQUEST["id"];
	$sort=$_REQUEST["sort"];

	$rs_all=$sdb->getTableAllResult(" $db_name "," 1=1 ");

	$sort_2=count($rs_all)-$sort;
	$rs_last=$sdb->getTableAllResult(" $db_name "," 1=1 Order By Sort ASC Limit ".$sort.",".$sort_2."");
	if($rs_last){
		foreach($rs_last as $k=>$v){
			$inset_2=array();
			$inset_2["sort"]=$v["sort"]-1;
			$rs_inset_2=$sdb->updateTableCon($inset_2," $db_name "," id='".$v["id"]."' "); 
		};
	}

	$inset_1=array();
	$inset_1["sort"]=count($rs_all);
	$rs_inset_1=$sdb->updateTableCon($inset_1," $db_name "," id='".$id."' "); 
		
	if($rs_inset_1 && $rs_inset_2){
		$result=$sdb->getTableAllResult("$db_name","1=1");
		foreach($result as $k3=>$v3){
			$index=0;
			foreach($v3 as $k4=>$v4){
				$result2[$k3][$index]=$v4;
				$index++;
			}
		}
		echo json_encode($result2);
	}
	exit;
}	





//调至第几
if($act=="goto"){
	$id=$_REQUEST["id"];
	$sort=$_REQUEST["sort"];
	$goto=$_REQUEST["goto"];
	
	$dir=($goto-$sort)>0?1:-1;
	$num=abs($goto-$sort);
	if($dir=="1"){
		$sort_1=$sort;
		$rs_goto=$sdb->getTableAllResult(" $db_name "," 1=1 Order By Sort ASC Limit ".$sort_1.",".$num."");
		if($rs_goto){
			foreach($rs_goto as $k=>$v){
				$inset_2=array();
				$inset_2["sort"]=$v["sort"]-1;
				$rs_inset_2=$sdb->updateTableCon($inset_2," $db_name "," id='".$v["id"]."' "); 
			};
		}
	}else{
		$sort_1=$goto-1;
		$rs_goto=$sdb->getTableAllResult(" $db_name "," 1=1 Order By Sort ASC Limit ".$sort_1.",".$num."");

		if($rs_goto){
			foreach($rs_goto as $k=>$v){
				$inset_2=array();
				$inset_2["sort"]=$v["sort"]+1;
				$rs_inset_2=$sdb->updateTableCon($inset_2," $db_name "," id='".$v["id"]."' "); 
			};
		}
	}

	$inset_1=array();
	$inset_1["sort"]=$goto;
	$rs_inset_1=$sdb->updateTableCon($inset_1," $db_name "," id='".$id."' "); 
		
	if($rs_inset_1 && $rs_inset_2){
		$result=$sdb->getTableAllResult("$db_name","1=1");
		foreach($result as $k3=>$v3){
			$index=0;
			foreach($v3 as $k4=>$v4){
				$result2[$k3][$index]=$v4;
				$index++;
			}
		}
		echo json_encode($result2);
	}
	exit;
}	



?>