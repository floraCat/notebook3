<?php /* Smarty version 2.6.22, created on 2014-05-08 16:01:58
         compiled from list_ttl.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内页</title>
<link rel="stylesheet" type="text/css" href="style/base.css" />
<script type="text/javascript" src="js/sort.js"></script>
</head>

<body class="List_ttl">
<input type="hidden" name="col" value="<?php echo $_GET['col']; ?>
" />


<style>
		/*排序组*/
		.Sort{ border:#fef0d5 4px solid; width:1016px; height:80px; background-color:#f8f8f8; margin:0 auto 10px; font:normal 12px/32px 微软雅黑; position:relative;}
				.Sort,.Sort *{ overflow:visible;}
				.Sort a{ display:inline-block; font:bold 14px/30px 微软雅黑; background-color:#fff; text-align:center;}
				.Sort .on,.Sort a:hover{ background-color:#FFFF66; cursor:pointer;}
				.Sort .return a{ border:#ddd 1px solid; margin:5px 15px 5px 5px; width:50px; height:52px; line-height:26px; padding:8px 0;}
				.Sort .block_add a{ border:#ddd 1px solid; margin:5px 5px 5px 15px; width:30px; height:52px; line-height:26px; padding:8px 0;}
				.Sort .top{ height:35px; padding:5px 5px 0 0;}
				.Sort .top_lt li{ float:left; margin-right:10px;}
				.Sort .top_lt span{ float:left;}
				.Sort .top_lt li a{ float:left; padding:0 8px; min-width:14px; height:30px; border:#ddd 1px solid; margin-right:5px;}
				.Sort .search{ height:30px; border:#ddd 1px solid; width:180px;}
				.Sort .search .keyword{ float:left; width:149px; border-right:#ddd 1px solid; height:30px;}
				.Sort .search .keyword input{ width:143px; height:24px; padding:3px;}
				.Sort .search .submit{ float:left; display:block; width:30px; height:30px; font:bold 14px/30px "宋体"; text-align:center;}
				.Sort .btm{ height:35px; padding:3px 5px 0 0;}
				.Sort .btm_rt a{ float:left; height:30px; border:#ddd 1px solid; padding:0 8px; margin-left:5px; padding:0 10px; font-size:12px;}
				.Sort .sort_self{ position:absolute; top:43px; left:72px;}
				.Sort .switch_sortkey{ float:left; margin-right:10px;}
				.Sort .switch_sortkey span{ display:block; float:left; padding:0 8px; height:30px; font:bold 12px/30px 微软雅黑; border:#ddd 1px solid; background-color:#fff; cursor:pointer;}
				.Sort .switch_sortkey span b{ float:right; font:bold 16px/30px "宋体"; padding-left:8px; margin-left:8px; border-left:#eee 1px solid;}
				.Sort .switch_sortkey .ul{ position:relative; float:left;}
				.Sort .switch_sortkey ul{ display:none; position:absolute; top:0; left:0; width:243px; border-left:1px solid; border-top:1px solid; z-index:99;}
				.Sort .switch_sortkey .alpha{width:246px; border-top:#ddd 1px solid; border-left:#ddd 1px solid;}
				.Sort .switch_sortkey .alpha a{ float:left; width:40px; height:40px; border-right:#ddd 1px solid; border-bottom:#ddd 1px solid; font:bold 16px/40px 微软雅黑; border-left:none; border-top:none; padding:0; margin-right:0;}
				.Sort .switch_sortkey ul a{ float:left; width:80px; height:30px; border-right:#ddd 1px solid; border-bottom:#ddd 1px solid; font:bold 14px/30px 微软雅黑; border-left:none; border-top:none; padding:0; margin-right:0;}
</style>
<!--排序组-->

	<div class="Sort cd3 cb2A">

		<div class="return fl"><a>还原<br/>默认</a></div>
		<div class="block_add fr"><a href="manage.php?col=<?php echo $_GET['col']; ?>
&act=edit">添<br/>加</a></div>
			
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

		<!--特有sort_self-->
		<div class="sort_self">
		
			<?php if ($this->_tpl_vars['Field_']['type']): ?>
				<div class="switch_sortkey" id="type">
					<span>类型<b>></b></span>
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



<style>
.List_ttl{ padding:20px 0;}
.List_ttl .list{ margin-top:20px;}
.List_ttl .list li{ font:bold 14px/35px 微软雅黑; border-bottom:#ddd 1px dashed; padding:0 5px;}
</style>
<div class="wrap">
	<div class="list">
	<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['rsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<li><a href="index.php?col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['title']; ?>
</a></li>
	<?php endfor; endif; ?>
	</div><!--list end-->
</div>

</body>
</html>