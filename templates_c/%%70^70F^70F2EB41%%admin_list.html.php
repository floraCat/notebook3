<?php /* Smarty version 2.6.22, created on 2016-11-20 22:55:50
         compiled from admin_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="style/h_reset.css" />
<link rel="stylesheet" href="style/admin.css" />
<script src="js/jquery-1.10.2.js"></script>
</head>
<body>

<div class="adminList">

	<div class="aTop">
		<ol class="db" style="margin-right:50px;">
			<h5>数据表：</h5>
			<ul class="aTable">
				<li class="on" data-role="bCat"><a>大分类</a></li>
				<li data-role="sCat"><a>小分类</a></li>
				<li data-role="attr"><a>属性</a></li>
				<li data-role="keyword"><a>关键字</a></li>
				<li data-role="mark"><a>标题颜色</a></li>
			</ul>
		</ol>
		<ol>
			<h5>排序：</h5>
			<ul class="aTable">
				<li data-role="sort"><a class="sort_list">按'sort'排序</a></li>
			</ul>
		</ol>
		<a class="key-add" href="javascript:;">新增</a>
	</div>

	<div class="aList">
		<table class="table-list" cellpadding="0" cellspacing="0" border="1" bordercolor="#ddd">
			<tr class="hd">
				<td>序号</td>
				<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['field']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
				<td><?php echo $this->_tpl_vars['field'][$this->_sections['list']['index']]; ?>
</td>	
				<?php endfor; endif; ?>
				<td>sort位置</td>
				<td>操作</td>
			</tr>
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['result']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
			<tr class="tr">
				<td><?php echo $this->_sections['list']['index']; ?>
</td>
				<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['field']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list2']['show'] = true;
$this->_sections['list2']['max'] = $this->_sections['list2']['loop'];
$this->_sections['list2']['step'] = 1;
$this->_sections['list2']['start'] = $this->_sections['list2']['step'] > 0 ? 0 : $this->_sections['list2']['loop']-1;
if ($this->_sections['list2']['show']) {
    $this->_sections['list2']['total'] = $this->_sections['list2']['loop'];
    if ($this->_sections['list2']['total'] == 0)
        $this->_sections['list2']['show'] = false;
} else
    $this->_sections['list2']['total'] = 0;
if ($this->_sections['list2']['show']):

            for ($this->_sections['list2']['index'] = $this->_sections['list2']['start'], $this->_sections['list2']['iteration'] = 1;
                 $this->_sections['list2']['iteration'] <= $this->_sections['list2']['total'];
                 $this->_sections['list2']['index'] += $this->_sections['list2']['step'], $this->_sections['list2']['iteration']++):
$this->_sections['list2']['rownum'] = $this->_sections['list2']['iteration'];
$this->_sections['list2']['index_prev'] = $this->_sections['list2']['index'] - $this->_sections['list2']['step'];
$this->_sections['list2']['index_next'] = $this->_sections['list2']['index'] + $this->_sections['list2']['step'];
$this->_sections['list2']['first']      = ($this->_sections['list2']['iteration'] == 1);
$this->_sections['list2']['last']       = ($this->_sections['list2']['iteration'] == $this->_sections['list2']['total']);
?>
				<td><?php echo $this->_tpl_vars['result'][$this->_sections['list']['index']][$this->_sections['list2']['index']]; ?>
</td>
				<?php endfor; endif; ?>
				<td data-id="<?php echo $this->_tpl_vars['result'][$this->_sections['list']['index']][0]; ?>
"><a class="first">最前</a>|<a class="last">最后</a>|<span>调至</span><input type="text" /><a class="goto">执行</a></td>
				<td><a class="mod">修改</a>|<a class="del">删除</a></td>
			</tr>
			<?php endfor; endif; ?>
		</table>

		<!--页码 start-->
		<div class="pPage">
			<?php echo $this->_tpl_vars['pagehtml']; ?>

		</div>
		<!--页码 end-->

	</div>

</div><!--/adminList-->



<!--提示弹窗-->
<div class="h_mask"></div><!--覆盖层-->
<div class="mAlert2">修改成功！</div>


<input type="hidden" id="col" value="<?php echo $_GET['col']; ?>
" />
<input type="hidden" id="page" value="1" />
<script>
$(function(){

	//默认列举cat数据表
	var default_col=$("#col").val();
	if(default_col==""){
		window.location="admin.php?col=bCat";
	}
	$(".aTable").find("[data-role="+default_col+"]").addClass("on").siblings().removeClass("on");

	//切换数据表
	$(".db .aTable li").click(function(){
		var col=$(this).attr("data-role");
		window.location="admin.php?col="+col;
	});

	//新增
	$id=parseInt($(".aList .tr:last td").eq(1).text())+1;
	$sort=parseInt($(".aList .tr:last td").eq(2).text())+1;
	$(".key-add").click(function(){
		if($(".wraper-add").length<=0){
			$(".aList").prepend('<div class="wraper-add"><table class="table-add" cellpadding="0" cellspacing="0" border="1" bordercolor="#ddd">'
				+'<tr class="hd">'
					+'<td>id</td>'
					+'<td>sort</td>'	
					+'<td>bCat</td>'	
					+'<td>操作</td>'
				+'</tr>'
				+'<tr class="tr">'
					+'<td>'+$id+'</td>'
					+'<td><input class="i-sort" type="number" value="'+$sort+'" /></td>'
					+'<td><input class="i-title" type="text" value="" /></td>'
					+'<td><a class="add">添加</a></td>'
				+'</tr></table></div>');
		}
	});

	$(".adminList").on("click",".wraper-add .add",function(){
		var tabName=$("#col").val();
		var add_sort=$(this).parent().siblings().find(".i-sort").val();
		var add_title=$(this).parent().siblings().find(".i-title").val();
		var submitdata={
			'sort':add_sort,
			'tabName':tabName,
			'tabVal':add_title,
			'act':"add"
		}
		//console.log(submitdata);
		$.post("admin.php?col="+tabName,submitdata,function(data){
			console.log(data);
			var data = eval("(" + data + ")");
				if(data=="success"){
					// _this.parents(".tr").find("td").eq(3).html(val_tab);
					// _this.removeClass("confirm").addClass("mod").text("修改");
					// $(".h_mask").show().delay(1000).fadeOut();
					window.location.reload();
					$(".mAlert2").text("添加成功！").css("top",windowH()/2-30+"px").show().delay(1000).fadeOut();

				}
		});
	});

	//修改
	$(".aList").on("click",".tr .mod",function(){
		var _this=$(this);
		var tabName=$("#col").val();
		var def_txt=$(this).parents(".tr").find("td").eq(3).text();
		$(this).parents(".tr").find("td").eq(3).html('<input class="input" type="text" value="'+def_txt+'" />');
		$(this).parents(".tr").find(".input").focus();
		$(this).removeClass("mod").addClass("confirm").text("确定");
		$(".aList .tr .confirm").click(function(){
			var val_id=$(this).parents(".tr").find("td").eq(1).text();
			var val_tab=$(this).parents(".tr").find(".input").val();
			var submitdata={
				'id':val_id,
				'tabName':tabName,
				'tabVal':val_tab,
				'act':"modify"
			}
			$.post("admin.php?col="+tabName,submitdata,function(data){
				console.log(data);
				var data = eval("(" + data + ")");
				if(data=="success"){
					_this.parents(".tr").find("td").eq(3).html(val_tab);
					_this.removeClass("confirm").addClass("mod").text("修改");
					$(".h_mask").show().delay(1000).fadeOut();
					$(".mAlert2").text("修改成功！").css("top",windowH()/2-30+"px").show().delay(1000).fadeOut();

				}
			});
		});
	});


	//删除
	$(".aList").on("click",".tr .del",function(){
		var _this=$(this);
		if(confirm('确定要删除此条目吗？')){
			var col=$("#col").val();
			var del_id=$(this).parents(".tr").find("td").eq(1).text();
			var submitdata={
				'del_id':del_id,
				'act':'del'
			}
			$.post("admin.php?col="+col,submitdata,function(data){
				var data = eval("(" + data + ")");
				if(data=="success"){
					_this.parents(".tr").remove();
					$(".h_mask").show().delay(1000).fadeOut();
					$(".mAlert2").text("删除成功！").css("top",windowH()/2-80+"px").show().delay(1000).fadeOut();
				}
				
			});
		}
	});
	

	//最前
	$(".aList").on("click",".first",function(){
		var col=$("#col").val();
		var id=$(this).parent().attr("data-id");
		var page=$("#page").val();
		var submitdata={
			"col":col,
			"act":"first",
			"id":id,
			"page":page
		}
		$.post("admin.php",submitdata,function(data){
			var noteTxt='排序调至"最前"成功！';
			callback(data,noteTxt);
		});
	});

	//最后
	$(".aList").on("click",".last",function(){
		var col=$("#col").val();
		var id=$(this).parent().attr("data-id");
		var page=$("#page").val();
		var submitdata={
			"col":col,
			"act":"last",
			"id":id,
			"page":page
		}
		$.post("admin.php",submitdata,function(data){
			var noteTxt='排序调至"最后"成功！';
			callback(data,noteTxt);
		});
	});

	//调至第几
	$(".aList").on("click",".goto",function(){
		var col=$("#col").val();
		var id=$(this).parent().attr("data-id");
		var goto_=$(this).siblings("input").val();
		var page=$("#page").val();
		var submitdata={
			"col":col,
			"act":"goto",
			"id":id,
			"goto":goto_,
			"page":page
		}		
		console.log(submitdata);
		$.post("admin.php",submitdata,function(data){
			var noteTxt='排序调至"'+goto_+'"成功！';
			callback(data,noteTxt);
		});
	});


	//ajax执行分页
	$(".pPage").on("click","li a",function(){
		var page_on=$(this).attr("data-role");
		$("#page").val(page_on);
		var col_on=$("#col").val();
		var submitdata={
			"col":col_on,
			"page":page_on,
			"act":"page"
		}
		$.post("admin.php",submitdata,function(data){
			callback(data);
		});
	});


	//sort排序
	$(".sort_list").click(function(){
		var col_on=$("#col").val();
		var submitdata={
			"col":col_on,
			"act":"sort"
		}
		$.post("admin.php",submitdata,function(data){
			var noteTxt='maskOnly';
			callback(data,noteTxt);
		});
	});


	//回调
	function callback(data,noteTxt){
		var data = eval("(" + data + ")");
		var $html="";
		for(var i=0;i<data[0].length;i++){
			var $unit="";
			for(var j=0;j<data[0][0].length;j++){
				unit='<td>'+data[0][i][j]+'</td>';
				$unit+=unit;
			}
			html='<tr class="tr">'
					+'<td>'+i+'</td>'
					+$unit
					+'<td data-id="'+data[0][i][0]+'"><a class="first">最前</a>|<a class="last">最后</a>|<span>调至</span><input type="text" /><a class="goto">执行</a></td>'
					+'<td><a href="index.php?act=edit&id='+data[0][i][0]+'">修改</a>|<a onclick="return confirm("是否删除此条目？");" href="index.php?act=del&col=diary&id='+data[0][i][0]+'">删除</a></td>'
				+'</tr>';
		$html+=html;
		}
		$(".aList .table-list .tr").remove();
		$(".aList .table-list tbody").append($html);
		if(data[1]){ $(".pPage").html(data[1]);}
		if(noteTxt){
			if(noteTxt=="maskOnly"){
				$(".h_mask").show().delay(1000).fadeOut();
			}else{
				$(".h_mask").show().delay(1000).fadeOut();
				$(".mAlert2").text(noteTxt).css("top",windowH()/2-80+"px").show().delay(1000).fadeOut();
			}
		}		
	}

	//屏高
	function windowH(){
		if(self.innerHeight){ windowHeight = self.innerHeight;
		}else{
			if(document.documentElement && document.documentElement.clientHeight){    
				windowHeight = document.documentElement.clientHeight;
			}else{
				if(document.body){ windowHeight = document.body.clientHeight;}
			}
		} 
		return windowHeight;
	}


});

</script>



</body>
</html>