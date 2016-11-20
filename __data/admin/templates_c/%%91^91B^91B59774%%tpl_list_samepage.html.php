<?php /* Smarty version 2.6.22, created on 2014-06-15 22:50:54
         compiled from tpl_list_samepage.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title> 
<link href="css/base.css" rel="stylesheet" type="text/css" /> 
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/sort.js"></script>
<!--<script type="text/javascript" src="js/layout.js"></script>-->
</head>
<body>

<div class="Main">
<input type="hidden" name="col" value="<?php echo $_GET['col']; ?>
" />


<!--增加条目-->	
	
	<div class="Add List" style="display:none;">
	
		<ol class="zd4">
			<li style="width:40px;">序号</li>
			<?php unset($this->_sections['hd']);
$this->_sections['hd']['name'] = 'hd';
$this->_sections['hd']['start'] = (int)1;
$this->_sections['hd']['loop'] = is_array($_loop=$this->_tpl_vars['Field_list_name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hd']['show'] = true;
$this->_sections['hd']['max'] = $this->_sections['hd']['loop'];
$this->_sections['hd']['step'] = 1;
if ($this->_sections['hd']['start'] < 0)
    $this->_sections['hd']['start'] = max($this->_sections['hd']['step'] > 0 ? 0 : -1, $this->_sections['hd']['loop'] + $this->_sections['hd']['start']);
else
    $this->_sections['hd']['start'] = min($this->_sections['hd']['start'], $this->_sections['hd']['step'] > 0 ? $this->_sections['hd']['loop'] : $this->_sections['hd']['loop']-1);
if ($this->_sections['hd']['show']) {
    $this->_sections['hd']['total'] = min(ceil(($this->_sections['hd']['step'] > 0 ? $this->_sections['hd']['loop'] - $this->_sections['hd']['start'] : $this->_sections['hd']['start']+1)/abs($this->_sections['hd']['step'])), $this->_sections['hd']['max']);
    if ($this->_sections['hd']['total'] == 0)
        $this->_sections['hd']['show'] = false;
} else
    $this->_sections['hd']['total'] = 0;
if ($this->_sections['hd']['show']):

            for ($this->_sections['hd']['index'] = $this->_sections['hd']['start'], $this->_sections['hd']['iteration'] = 1;
                 $this->_sections['hd']['iteration'] <= $this->_sections['hd']['total'];
                 $this->_sections['hd']['index'] += $this->_sections['hd']['step'], $this->_sections['hd']['iteration']++):
$this->_sections['hd']['rownum'] = $this->_sections['hd']['iteration'];
$this->_sections['hd']['index_prev'] = $this->_sections['hd']['index'] - $this->_sections['hd']['step'];
$this->_sections['hd']['index_next'] = $this->_sections['hd']['index'] + $this->_sections['hd']['step'];
$this->_sections['hd']['first']      = ($this->_sections['hd']['iteration'] == 1);
$this->_sections['hd']['last']       = ($this->_sections['hd']['iteration'] == $this->_sections['hd']['total']);
?>
			<li style="width:<?php echo $this->_tpl_vars['Field_list_width'][$this->_sections['hd']['index']]; ?>
px;"><?php echo $this->_tpl_vars['Field_list_name'][$this->_sections['hd']['index']]; ?>
</li>
			<?php endfor; endif; ?>
			<li style="width:80px;">操作</li>
		</ol>
		
		<form action="manage.php?col=<?php echo $_GET['col']; ?>
" method="post" enctype="multipart/form-data" style="width:100%;">
		<input type="hidden" name="addLen" value="0" />
		
			<ul>
				<li style="width:40px;">0</li>
				<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['start'] = (int)1;
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['Field_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list2']['show'] = true;
$this->_sections['list2']['max'] = $this->_sections['list2']['loop'];
$this->_sections['list2']['step'] = 1;
if ($this->_sections['list2']['start'] < 0)
    $this->_sections['list2']['start'] = max($this->_sections['list2']['step'] > 0 ? 0 : -1, $this->_sections['list2']['loop'] + $this->_sections['list2']['start']);
else
    $this->_sections['list2']['start'] = min($this->_sections['list2']['start'], $this->_sections['list2']['step'] > 0 ? $this->_sections['list2']['loop'] : $this->_sections['list2']['loop']-1);
if ($this->_sections['list2']['show']) {
    $this->_sections['list2']['total'] = min(ceil(($this->_sections['list2']['step'] > 0 ? $this->_sections['list2']['loop'] - $this->_sections['list2']['start'] : $this->_sections['list2']['start']+1)/abs($this->_sections['list2']['step'])), $this->_sections['list2']['max']);
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
				<li><input style="width:<?php echo $this->_tpl_vars['Field_list_width'][$this->_sections['list2']['index']]; ?>
px" type="text" name="<?php echo $this->_tpl_vars['Field_list'][$this->_sections['list2']['index']]; ?>
0" value="" /></li>
				<?php endfor; endif; ?>
				<li style="width:80px;">
					<a class="addDel" href="javascript:;">删除</a>
				</li>
				<?php if ($_GET['col'] == 'imgs'): ?>
				<li class="li_pic">
					<input type="hidden" class="pic_on" name="pic_on_0" value="" />
					<p><span>bg</span><input type="file" name="bg0" /></p>
					<p><span>icon</span><input type="file" name="icon0" /></p>
					<p><span>img</span><input type="file" name="img0" /></p>
					<p><span>other</span><input type="file" name="other0" /></p>
					<b><input type="text" name="pic_add0" value="" /></b>
				</li>
				<?php endif; ?>
			</ul><!--0-->
			
			<ul class="hidden">
				<li style="width:40px;">1</li>
				<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['start'] = (int)1;
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['Field_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list2']['show'] = true;
$this->_sections['list2']['max'] = $this->_sections['list2']['loop'];
$this->_sections['list2']['step'] = 1;
if ($this->_sections['list2']['start'] < 0)
    $this->_sections['list2']['start'] = max($this->_sections['list2']['step'] > 0 ? 0 : -1, $this->_sections['list2']['loop'] + $this->_sections['list2']['start']);
else
    $this->_sections['list2']['start'] = min($this->_sections['list2']['start'], $this->_sections['list2']['step'] > 0 ? $this->_sections['list2']['loop'] : $this->_sections['list2']['loop']-1);
if ($this->_sections['list2']['show']) {
    $this->_sections['list2']['total'] = min(ceil(($this->_sections['list2']['step'] > 0 ? $this->_sections['list2']['loop'] - $this->_sections['list2']['start'] : $this->_sections['list2']['start']+1)/abs($this->_sections['list2']['step'])), $this->_sections['list2']['max']);
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
				<li><input style="width:<?php echo $this->_tpl_vars['Field_list_width'][$this->_sections['list2']['index']]; ?>
px" type="text" name="<?php echo $this->_tpl_vars['Field_list'][$this->_sections['list2']['index']]; ?>
1" value="" /></li>
				<?php endfor; endif; ?>
				<li style="width:80px;">
					<a class="addDel" href="javascript:;">删除</a>
				</li>
				<?php if ($_GET['col'] == 'imgs'): ?>
				<li class="li_pic">
					<input type="hidden" class="pic_on" name="pic_on_1" value="" />
					<p><span>bg</span><input type="file" name="bg1" /></p>
					<p><span>icon</span><input type="file" name="icon1" /></p>
					<p><span>img</span><input type="file" name="img1" /></p>
					<p><span>other</span><input type="file" name="other1" /></p>
					<b><input type="text" name="pic_add1" value="" /></b>
				</li>
				<?php endif; ?>
			</ul><!--1-->

			<ul class="hidden">
				<li style="width:40px;">2</li>
				<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['start'] = (int)1;
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['Field_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list2']['show'] = true;
$this->_sections['list2']['max'] = $this->_sections['list2']['loop'];
$this->_sections['list2']['step'] = 1;
if ($this->_sections['list2']['start'] < 0)
    $this->_sections['list2']['start'] = max($this->_sections['list2']['step'] > 0 ? 0 : -1, $this->_sections['list2']['loop'] + $this->_sections['list2']['start']);
else
    $this->_sections['list2']['start'] = min($this->_sections['list2']['start'], $this->_sections['list2']['step'] > 0 ? $this->_sections['list2']['loop'] : $this->_sections['list2']['loop']-1);
if ($this->_sections['list2']['show']) {
    $this->_sections['list2']['total'] = min(ceil(($this->_sections['list2']['step'] > 0 ? $this->_sections['list2']['loop'] - $this->_sections['list2']['start'] : $this->_sections['list2']['start']+1)/abs($this->_sections['list2']['step'])), $this->_sections['list2']['max']);
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
				<li><input style="width:<?php echo $this->_tpl_vars['Field_list_width'][$this->_sections['list2']['index']]; ?>
px" type="text" name="<?php echo $this->_tpl_vars['Field_list'][$this->_sections['list2']['index']]; ?>
2" value="" /></li>
				<?php endfor; endif; ?>
				<li style="width:80px;">
					<a class="addDel" href="javascript:;">删除</a>
				</li>
				<?php if ($_GET['col'] == 'imgs'): ?>
				<li class="li_pic">
					<input type="hidden" class="pic_on" name="pic_on_2" value="" />
					<p><span>bg</span><input type="file" name="bg2" /></p>
					<p><span>icon</span><input type="file" name="icon2" /></p>
					<p><span>img</span><input type="file" name="img2" /></p>
					<p><span>other</span><input type="file" name="other2" /></p>
					<b><input type="text" name="pic_add2" value="" /></b>
				</li>
				<?php endif; ?>
			</ul><!--2-->

			<div class="btns" style="width:100%;">
				<a class="addBtn zd4 zb2 fl" href="javascript:;">增加条目</a>
				<input type="hidden" name="act" value="save" />
				<a class="addSave zd4 zb2 fr" href="javascript:;">保存</a>
			</div><!--save end-->
			
		</form>
		

	</div><!--Add end-->
	
	<script>
			$(document).ready(function(){
			
				$(".li_pic p span").click(function(){ //Add点击图片上传按键
					$(this).siblings("input").click();
				});
				
				$(".li_pic p").change(function(){
					pic_on=$(this).find("span").text();
					$(this).siblings(".pic_on").val(pic_on);
				});

				//Add_增加条目
				$(".addBtn").click(function(){
					$(".Add .hidden:first").removeClass("hidden");
					var addLen=$("input[name='addLen']").val();
					var addLen=parseInt(addLen)+1;
					$("input[name='addLen']").val(addLen);
				});
				
				//Add_删掉条目
				$(".addDel").click(function(){
					$(this).parents("ul").remove();
				});
				
				//Add_保存
				$(".addSave").click(function(){
					$(".Add .hidden").remove();
					$(".Add form").submit();
				});
				
				//切换Add部分
				$(".block_add .samepage").click(function(){
					$(".Add").toggle();
				});
				
			})/*ready end*/
			
	</script>









<div class="Tabs">

<!--排序组 start-->

	<div class="Sort cd3 cb2A fl">

		<div class="return fl"><a>还原<br/>默认</a></div>
		<div class="block_add fr">
			<a class="samepage" href="javascript:;">快速添加</a>
			<a href="manage.php?col=<?php echo $_GET['col']; ?>
&act=edit">默认添加</a>
		</div>
			
		<div class="main fl">
		
			<div class="top">
			
					<ol class="top_lt fl">
	
								<li class="btn" id="grade">
									<span>按等级排序：</span>
									<a data-role="1">高</a>
									<a data-role="0">中</a>
									<a data-role="-1">低</a>
								</li>
								<li class="btn" id="label">
									<span>按标识排序：</span>
									<a data-role="a">a</a>
									<a data-role="b">b</a>
									<a data-role="c">c</a>
									<a data-role="">无</a>
								</li>
								<li class="btn" id="mark">
									<span>按标注排序：</span>
									<a data-role="1">有</a>
									<a data-role="0">没有</a>
								</li>
						
					</ol><!--top_lt end-->
			
					<ol class="top_rt fr">
					
							<div class="search btn">
									<div class="keyword"><input type="text" id="keyword" name="keyword" /></div>
									<a class="submit">></a>
							</div><!--search end-->
					
					</ol><!--top_rt end-->
			
			</div><!--top end-->
			
			<div class="btm">
			
					<ol class="btm_lt fl">
	
					</ol><!--btm_lt end-->
				
					<ol class="btm_rt fr">
					
							<div class="btn" id="sortway">
								<a class="fl" data-role="">按首字母排序</a>
								<a class="fl" data-role="id">按录入时间排序</a>
								<a class="fl" data-role="update_time">按更新时间排序</a>
								<a class="fl" data-role="rand()">随机排序</a>
							</div><!--sortway-->
							
					</ol><!--btm_rt end-->
	
			</div><!--btm end-->
			
		</div><!--main end-->

		<!--特有sort_self-->
		<div class="sort_self">
		
			<?php if ($this->_tpl_vars['Field_']['type']): ?>
				<div class="switch_sortkey" id="type">
					<span><label class="fl">类型</label><b>></b></span>
					<?php if ($this->_tpl_vars['rs_sort_self']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['sort']);
$this->_sections['sort']['name'] = 'sort';
$this->_sections['sort']['loop'] = is_array($_loop=$this->_tpl_vars['rs_sort_self']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sort']['show'] = true;
$this->_sections['sort']['max'] = $this->_sections['sort']['loop'];
$this->_sections['sort']['step'] = 1;
$this->_sections['sort']['start'] = $this->_sections['sort']['step'] > 0 ? 0 : $this->_sections['sort']['loop']-1;
if ($this->_sections['sort']['show']) {
    $this->_sections['sort']['total'] = $this->_sections['sort']['loop'];
    if ($this->_sections['sort']['total'] == 0)
        $this->_sections['sort']['show'] = false;
} else
    $this->_sections['sort']['total'] = 0;
if ($this->_sections['sort']['show']):

            for ($this->_sections['sort']['index'] = $this->_sections['sort']['start'], $this->_sections['sort']['iteration'] = 1;
                 $this->_sections['sort']['iteration'] <= $this->_sections['sort']['total'];
                 $this->_sections['sort']['index'] += $this->_sections['sort']['step'], $this->_sections['sort']['iteration']++):
$this->_sections['sort']['rownum'] = $this->_sections['sort']['iteration'];
$this->_sections['sort']['index_prev'] = $this->_sections['sort']['index'] - $this->_sections['sort']['step'];
$this->_sections['sort']['index_next'] = $this->_sections['sort']['index'] + $this->_sections['sort']['step'];
$this->_sections['sort']['first']      = ($this->_sections['sort']['iteration'] == 1);
$this->_sections['sort']['last']       = ($this->_sections['sort']['iteration'] == $this->_sections['sort']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['rs_sort_self'][$this->_sections['sort']['index']]; ?>
"><?php echo $this->_tpl_vars['rs_sort_self'][$this->_sections['sort']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		
		</div><!--self_sort end-->
		
	</div><!--Sort end-->
	
<!--排序组 end-->
	
	
</div><!--Tabs end-->
	
	
<!--列表主体-->	
	<iframe name="tpl_list_body" id="tpl_list_body" src="manage.php?act=list&col=<?php echo $_GET['col']; ?>
&block=list" width="1024" height="560"></iframe>
			
			
</div><!--Main end-->


</body>
</html>