<?php /* Smarty version 2.6.22, created on 2014-06-29 08:23:00
         compiled from tpl_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title> 
<link href="css/base.css" rel="stylesheet" type="text/css" /> 
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/sort.js"></script>
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
&add=add_quick" method="post" enctype="multipart/form-data" style="width:100%;">
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
				<li class="Li_pic">
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
				<li class="Li_pic">
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
				<li class="Li_pic">
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
				<?php if ($_GET['col'] == 'mode'): ?>
				<a class="save_by_file_for_mode zd4 zb2 fr" href="javascript:;" style="margin-right:5px;">另类保存</a>
				<?php endif; ?>
			</div><!--save end-->
			<script>
			$(function(){
				$(".Add .save_by_file_for_mode").click(function(){
					$(".Add form").attr("action","manage.php?col=mode&add=add_quick&save_mode=save_by_file");
					$(".Add form").submit();
				});
			});
			</script>
			
			
		</form>
		

	</div><!--Add end-->
	
	<script>
			$(document).ready(function(){
			
				$(".Li_pic p span").click(function(){ //Add点击图片上传按键
					$(this).siblings("input").click();
				});
				
				$(".Li_pic p").change(function(){
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
				$(".add_quick").click(function(){
					$(".Add").toggle();
				});
				
			})/*ready end*/
			
	</script>








<div class="Tabs">

<!--排序组 start-->

	<div class="Sort cd3 cb2A fl">

		<div class="return fl"><a>还原<br/>默认</a></div>
		<div class="block_add fr">
			<a class="add_quick" href="javascript:;">快速添加</a>
			<a class="add_default" href="manage.php?col=<?php echo $_GET['col']; ?>
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
					
							<div class="search">
									<div class="cats">
										<span>选范围</span>
										<ul>
											<a href="javascript:;" data-role="title">标题</a>
											<a href="javascript:;" data-role="description">描述</a>
											<a href="javascript:;" data-role="content">正文</a>
										</ul>
										<a class="key" href="javascript:;"><s>></s></a>
									</div>
									<div class="keyword"><input type="text" id="" name="" /></div>
									<div class="btn"><a class="submit">></a></div>
							</div><!--search end-->
							
							<script>
							$(document).ready(function(){
								$(".Sort .search .key").click(function(){
									$(this).siblings("ul").toggle();
								});
								$(".Sort .search ul a").click(function(){
									var cat=$(this).text();
									$(this).parent().siblings("span").text(cat);
									$(this).parent().hide();
									var name=$(this).attr("data-role");
									$(this).parents(".search").find(".keyword input").attr("name",""+name+"");
									$(this).parents(".search").find(".keyword input").attr("id",""+name+"");
								});
							});
							</script>
					
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

		<!--自定义排序 start-->
		<div class="sort_self">
		
	<!--type-->
			<?php if ($this->_tpl_vars['Field_']['type']): ?>
				<div class="switch_sortkey" id="type">
					<span><label class="fl">类型</label><b>></b></span>
					<?php if ($this->_tpl_vars['sort_type']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['type']);
$this->_sections['type']['name'] = 'type';
$this->_sections['type']['loop'] = is_array($_loop=$this->_tpl_vars['sort_type']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['type']['show'] = true;
$this->_sections['type']['max'] = $this->_sections['type']['loop'];
$this->_sections['type']['step'] = 1;
$this->_sections['type']['start'] = $this->_sections['type']['step'] > 0 ? 0 : $this->_sections['type']['loop']-1;
if ($this->_sections['type']['show']) {
    $this->_sections['type']['total'] = $this->_sections['type']['loop'];
    if ($this->_sections['type']['total'] == 0)
        $this->_sections['type']['show'] = false;
} else
    $this->_sections['type']['total'] = 0;
if ($this->_sections['type']['show']):

            for ($this->_sections['type']['index'] = $this->_sections['type']['start'], $this->_sections['type']['iteration'] = 1;
                 $this->_sections['type']['iteration'] <= $this->_sections['type']['total'];
                 $this->_sections['type']['index'] += $this->_sections['type']['step'], $this->_sections['type']['iteration']++):
$this->_sections['type']['rownum'] = $this->_sections['type']['iteration'];
$this->_sections['type']['index_prev'] = $this->_sections['type']['index'] - $this->_sections['type']['step'];
$this->_sections['type']['index_next'] = $this->_sections['type']['index'] + $this->_sections['type']['step'];
$this->_sections['type']['first']      = ($this->_sections['type']['iteration'] == 1);
$this->_sections['type']['last']       = ($this->_sections['type']['iteration'] == $this->_sections['type']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['sort_type'][$this->_sections['type']['index']]; ?>
"><?php echo $this->_tpl_vars['sort_type'][$this->_sections['type']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

	<!--type2-->
			<?php if ($this->_tpl_vars['col'] == 'mode'): ?>
				<div class="switch_sortkey" id="type">
					<span><label class="fl">手机端</label><b>></b></span>
					<?php if ($this->_tpl_vars['sort_type2']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['type2']);
$this->_sections['type2']['name'] = 'type2';
$this->_sections['type2']['loop'] = is_array($_loop=$this->_tpl_vars['sort_type2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['type2']['show'] = true;
$this->_sections['type2']['max'] = $this->_sections['type2']['loop'];
$this->_sections['type2']['step'] = 1;
$this->_sections['type2']['start'] = $this->_sections['type2']['step'] > 0 ? 0 : $this->_sections['type2']['loop']-1;
if ($this->_sections['type2']['show']) {
    $this->_sections['type2']['total'] = $this->_sections['type2']['loop'];
    if ($this->_sections['type2']['total'] == 0)
        $this->_sections['type2']['show'] = false;
} else
    $this->_sections['type2']['total'] = 0;
if ($this->_sections['type2']['show']):

            for ($this->_sections['type2']['index'] = $this->_sections['type2']['start'], $this->_sections['type2']['iteration'] = 1;
                 $this->_sections['type2']['iteration'] <= $this->_sections['type2']['total'];
                 $this->_sections['type2']['index'] += $this->_sections['type2']['step'], $this->_sections['type2']['iteration']++):
$this->_sections['type2']['rownum'] = $this->_sections['type2']['iteration'];
$this->_sections['type2']['index_prev'] = $this->_sections['type2']['index'] - $this->_sections['type2']['step'];
$this->_sections['type2']['index_next'] = $this->_sections['type2']['index'] + $this->_sections['type2']['step'];
$this->_sections['type2']['first']      = ($this->_sections['type2']['iteration'] == 1);
$this->_sections['type2']['last']       = ($this->_sections['type2']['iteration'] == $this->_sections['type2']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['sort_type2'][$this->_sections['type2']['index']]; ?>
"><?php echo $this->_tpl_vars['sort_type2'][$this->_sections['type2']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

	<!--feature-->
			<?php if ($this->_tpl_vars['Field_']['feature']): ?>
				<div class="switch_sortkey" id="feature">
					<span><label class="fl">特点</label><b>></b></span>
					<?php if ($this->_tpl_vars['sort_feature']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['feature']);
$this->_sections['feature']['name'] = 'feature';
$this->_sections['feature']['loop'] = is_array($_loop=$this->_tpl_vars['sort_feature']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['feature']['show'] = true;
$this->_sections['feature']['max'] = $this->_sections['feature']['loop'];
$this->_sections['feature']['step'] = 1;
$this->_sections['feature']['start'] = $this->_sections['feature']['step'] > 0 ? 0 : $this->_sections['feature']['loop']-1;
if ($this->_sections['feature']['show']) {
    $this->_sections['feature']['total'] = $this->_sections['feature']['loop'];
    if ($this->_sections['feature']['total'] == 0)
        $this->_sections['feature']['show'] = false;
} else
    $this->_sections['feature']['total'] = 0;
if ($this->_sections['feature']['show']):

            for ($this->_sections['feature']['index'] = $this->_sections['feature']['start'], $this->_sections['feature']['iteration'] = 1;
                 $this->_sections['feature']['iteration'] <= $this->_sections['feature']['total'];
                 $this->_sections['feature']['index'] += $this->_sections['feature']['step'], $this->_sections['feature']['iteration']++):
$this->_sections['feature']['rownum'] = $this->_sections['feature']['iteration'];
$this->_sections['feature']['index_prev'] = $this->_sections['feature']['index'] - $this->_sections['feature']['step'];
$this->_sections['feature']['index_next'] = $this->_sections['feature']['index'] + $this->_sections['feature']['step'];
$this->_sections['feature']['first']      = ($this->_sections['feature']['iteration'] == 1);
$this->_sections['feature']['last']       = ($this->_sections['feature']['iteration'] == $this->_sections['feature']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['sort_feature'][$this->_sections['feature']['index']]; ?>
"><?php echo $this->_tpl_vars['sort_type'][$this->_sections['feature']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
	<!--style-->
			<?php if ($this->_tpl_vars['Field_']['style']): ?>
				<div class="switch_sortkey" id="style">
					<span><label class="fl">风格</label><b>></b></span>
					<?php if ($this->_tpl_vars['sort_style']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['style']);
$this->_sections['style']['name'] = 'style';
$this->_sections['style']['loop'] = is_array($_loop=$this->_tpl_vars['sort_style']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['style']['show'] = true;
$this->_sections['style']['max'] = $this->_sections['style']['loop'];
$this->_sections['style']['step'] = 1;
$this->_sections['style']['start'] = $this->_sections['style']['step'] > 0 ? 0 : $this->_sections['style']['loop']-1;
if ($this->_sections['style']['show']) {
    $this->_sections['style']['total'] = $this->_sections['style']['loop'];
    if ($this->_sections['style']['total'] == 0)
        $this->_sections['style']['show'] = false;
} else
    $this->_sections['style']['total'] = 0;
if ($this->_sections['style']['show']):

            for ($this->_sections['style']['index'] = $this->_sections['style']['start'], $this->_sections['style']['iteration'] = 1;
                 $this->_sections['style']['iteration'] <= $this->_sections['style']['total'];
                 $this->_sections['style']['index'] += $this->_sections['style']['step'], $this->_sections['style']['iteration']++):
$this->_sections['style']['rownum'] = $this->_sections['style']['iteration'];
$this->_sections['style']['index_prev'] = $this->_sections['style']['index'] - $this->_sections['style']['step'];
$this->_sections['style']['index_next'] = $this->_sections['style']['index'] + $this->_sections['style']['step'];
$this->_sections['style']['first']      = ($this->_sections['style']['iteration'] == 1);
$this->_sections['style']['last']       = ($this->_sections['style']['iteration'] == $this->_sections['style']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['sort_style'][$this->_sections['style']['index']]; ?>
"><?php echo $this->_tpl_vars['sort_style'][$this->_sections['style']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

	<!--keywords-->
			<?php if ($this->_tpl_vars['Field_']['keywords']): ?>
				<div class="switch_sortkey" id="keywords">
					<span><label class="fl">关键字</label><b>></b></span>
					<?php if ($this->_tpl_vars['sort_keywords']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['keywords']);
$this->_sections['keywords']['name'] = 'keywords';
$this->_sections['keywords']['loop'] = is_array($_loop=$this->_tpl_vars['sort_keywords']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['keywords']['show'] = true;
$this->_sections['keywords']['max'] = $this->_sections['keywords']['loop'];
$this->_sections['keywords']['step'] = 1;
$this->_sections['keywords']['start'] = $this->_sections['keywords']['step'] > 0 ? 0 : $this->_sections['keywords']['loop']-1;
if ($this->_sections['keywords']['show']) {
    $this->_sections['keywords']['total'] = $this->_sections['keywords']['loop'];
    if ($this->_sections['keywords']['total'] == 0)
        $this->_sections['keywords']['show'] = false;
} else
    $this->_sections['keywords']['total'] = 0;
if ($this->_sections['keywords']['show']):

            for ($this->_sections['keywords']['index'] = $this->_sections['keywords']['start'], $this->_sections['keywords']['iteration'] = 1;
                 $this->_sections['keywords']['iteration'] <= $this->_sections['keywords']['total'];
                 $this->_sections['keywords']['index'] += $this->_sections['keywords']['step'], $this->_sections['keywords']['iteration']++):
$this->_sections['keywords']['rownum'] = $this->_sections['keywords']['iteration'];
$this->_sections['keywords']['index_prev'] = $this->_sections['keywords']['index'] - $this->_sections['keywords']['step'];
$this->_sections['keywords']['index_next'] = $this->_sections['keywords']['index'] + $this->_sections['keywords']['step'];
$this->_sections['keywords']['first']      = ($this->_sections['keywords']['iteration'] == 1);
$this->_sections['keywords']['last']       = ($this->_sections['keywords']['iteration'] == $this->_sections['keywords']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['sort_keywords'][$this->_sections['keywords']['index']]; ?>
"><?php echo $this->_tpl_vars['sort_keywords'][$this->_sections['keywords']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
	<!--color-->
			<?php if ($this->_tpl_vars['Field_']['color']): ?>
				<div class="switch_sortkey" id="color">
					<span><label class="fl">色调</label><b>></b></span>
					<?php if ($this->_tpl_vars['sort_color']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['color']);
$this->_sections['color']['name'] = 'color';
$this->_sections['color']['loop'] = is_array($_loop=$this->_tpl_vars['sort_color']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['color']['show'] = true;
$this->_sections['color']['max'] = $this->_sections['color']['loop'];
$this->_sections['color']['step'] = 1;
$this->_sections['color']['start'] = $this->_sections['color']['step'] > 0 ? 0 : $this->_sections['color']['loop']-1;
if ($this->_sections['color']['show']) {
    $this->_sections['color']['total'] = $this->_sections['color']['loop'];
    if ($this->_sections['color']['total'] == 0)
        $this->_sections['color']['show'] = false;
} else
    $this->_sections['color']['total'] = 0;
if ($this->_sections['color']['show']):

            for ($this->_sections['color']['index'] = $this->_sections['color']['start'], $this->_sections['color']['iteration'] = 1;
                 $this->_sections['color']['iteration'] <= $this->_sections['color']['total'];
                 $this->_sections['color']['index'] += $this->_sections['color']['step'], $this->_sections['color']['iteration']++):
$this->_sections['color']['rownum'] = $this->_sections['color']['iteration'];
$this->_sections['color']['index_prev'] = $this->_sections['color']['index'] - $this->_sections['color']['step'];
$this->_sections['color']['index_next'] = $this->_sections['color']['index'] + $this->_sections['color']['step'];
$this->_sections['color']['first']      = ($this->_sections['color']['iteration'] == 1);
$this->_sections['color']['last']       = ($this->_sections['color']['iteration'] == $this->_sections['color']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['sort_color'][$this->_sections['color']['index']]; ?>
"><?php echo $this->_tpl_vars['sort_color'][$this->_sections['color']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
	<!--format-->
			<?php if ($this->_tpl_vars['Field_']['format']): ?>
				<div class="switch_sortkey" id="format">
					<span><label class="fl">格式</label><b>></b></span>
					<?php if ($this->_tpl_vars['sort_format']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['format']);
$this->_sections['format']['name'] = 'format';
$this->_sections['format']['loop'] = is_array($_loop=$this->_tpl_vars['sort_format']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['format']['show'] = true;
$this->_sections['format']['max'] = $this->_sections['format']['loop'];
$this->_sections['format']['step'] = 1;
$this->_sections['format']['start'] = $this->_sections['format']['step'] > 0 ? 0 : $this->_sections['format']['loop']-1;
if ($this->_sections['format']['show']) {
    $this->_sections['format']['total'] = $this->_sections['format']['loop'];
    if ($this->_sections['format']['total'] == 0)
        $this->_sections['format']['show'] = false;
} else
    $this->_sections['format']['total'] = 0;
if ($this->_sections['format']['show']):

            for ($this->_sections['format']['index'] = $this->_sections['format']['start'], $this->_sections['format']['iteration'] = 1;
                 $this->_sections['format']['iteration'] <= $this->_sections['format']['total'];
                 $this->_sections['format']['index'] += $this->_sections['format']['step'], $this->_sections['format']['iteration']++):
$this->_sections['format']['rownum'] = $this->_sections['format']['iteration'];
$this->_sections['format']['index_prev'] = $this->_sections['format']['index'] - $this->_sections['format']['step'];
$this->_sections['format']['index_next'] = $this->_sections['format']['index'] + $this->_sections['format']['step'];
$this->_sections['format']['first']      = ($this->_sections['format']['iteration'] == 1);
$this->_sections['format']['last']       = ($this->_sections['format']['iteration'] == $this->_sections['format']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['sort_format'][$this->_sections['format']['index']]; ?>
"><?php echo $this->_tpl_vars['sort_format'][$this->_sections['format']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
	<!--attr-->
			<?php if ($this->_tpl_vars['Field_']['attr']): ?>
				<div class="switch_sortkey" id="attr">
					<span><label class="fl">属性</label><b>></b></span>
					<?php if ($this->_tpl_vars['sort_attr']): ?>
					<div class="ul">
						<ul class="cb2 display_sortkey btn">
							<?php unset($this->_sections['attr']);
$this->_sections['attr']['name'] = 'attr';
$this->_sections['attr']['loop'] = is_array($_loop=$this->_tpl_vars['sort_attr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['attr']['show'] = true;
$this->_sections['attr']['max'] = $this->_sections['attr']['loop'];
$this->_sections['attr']['step'] = 1;
$this->_sections['attr']['start'] = $this->_sections['attr']['step'] > 0 ? 0 : $this->_sections['attr']['loop']-1;
if ($this->_sections['attr']['show']) {
    $this->_sections['attr']['total'] = $this->_sections['attr']['loop'];
    if ($this->_sections['attr']['total'] == 0)
        $this->_sections['attr']['show'] = false;
} else
    $this->_sections['attr']['total'] = 0;
if ($this->_sections['attr']['show']):

            for ($this->_sections['attr']['index'] = $this->_sections['attr']['start'], $this->_sections['attr']['iteration'] = 1;
                 $this->_sections['attr']['iteration'] <= $this->_sections['attr']['total'];
                 $this->_sections['attr']['index'] += $this->_sections['attr']['step'], $this->_sections['attr']['iteration']++):
$this->_sections['attr']['rownum'] = $this->_sections['attr']['iteration'];
$this->_sections['attr']['index_prev'] = $this->_sections['attr']['index'] - $this->_sections['attr']['step'];
$this->_sections['attr']['index_next'] = $this->_sections['attr']['index'] + $this->_sections['attr']['step'];
$this->_sections['attr']['first']      = ($this->_sections['attr']['iteration'] == 1);
$this->_sections['attr']['last']       = ($this->_sections['attr']['iteration'] == $this->_sections['attr']['total']);
?>
								<a data-role="<?php echo $this->_tpl_vars['sort_attr'][$this->_sections['attr']['index']]; ?>
"><?php echo $this->_tpl_vars['sort_attr'][$this->_sections['attr']['index']]; ?>
</a>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

		</div><!--self_sort end-->
		<!--自定义排序 end-->
		
	</div><!--Sort end-->
	
<!--排序组 end-->
	
	
</div><!--Tabs end-->
	
	
<!--列表主体-->	
	<iframe name="tpl_list_body" id="tpl_list_body" src="manage.php?act=list&col=<?php echo $_GET['col']; ?>
&block=list" width="1024" height="560" frameborder=0></iframe>
			
			
</div><!--Main end-->


</body>
</html>