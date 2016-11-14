<?php
require_once("include.php");

$sdb=new db();

if(@$_POST["act"]=="login"){
	$rs=$sdb->getTableRowResult("sys_admin","id='0'");
	$account=$_POST["account"];
	$password=md5($_POST["password"]);
	//print_r($rs);exit();
	if($account<>$rs["account"]){
		echo '<script language="javascript">alert("账户不存在");location.href="login.php";</script>';
	}
	if($password<>$rs["password"]){
		echo '<script language="javascript">alert("密码错误");location.href="login.php";</script>';
	}
	$_SESSION["login"]=array();
	$_SESSION["login"]["account"]=$_POST["account"];
	$_SESSION["login"]["password"]=md5($_POST["password"]);
	echo '<script language="javascript">alert("登录成功");location.href="index.php"</script>';		
	exit;
}else{
	$rs=$sdb->getTableAllResult("sys_admin","1=1");
	if($rs){
		$smarty->assign("rs",$rs);
	}
	$smarty->display("login.html");
}

?>