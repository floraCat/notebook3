<?php /* Smarty version 2.6.22, created on 2014-04-02 13:31:32
         compiled from self_1.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/self_1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/self_1.js"></script>
</head>
<body>

<div class="listtype" style="width:890px; position:relative; margin:0 auto;">
<input type="hidden" id="db" name="db" value="<?php echo $this->_tpl_vars['db']; ?>
" /><!--调哪个数据表-->
	

	<!--排序组-->
	<div class="sort">
		
			<div class="self_sort">
			<?php if ($this->_tpl_vars['sortkey3']): ?>
					<div class="sortkey switch_sortkey" id="<?php echo $this->_tpl_vars['sortkey3']; ?>
">
						<span><?php echo $this->_tpl_vars['label_sortkey3']; ?>
<b>></b></span>
						<div class="ul">
							<ul class="display_sortkey btn <?php echo $this->_tpl_vars['css_sortkey3']; ?>
">
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['self_sortkey3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<a data-role="<?php echo $this->_tpl_vars['self_sortkey3'][$this->_sections['list']['index']]; ?>
"><?php echo $this->_tpl_vars['self_sortkey3'][$this->_sections['list']['index']]; ?>
</a>
								<?php endfor; endif; ?>
							</ul>
						</div>
					</div>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['sortkey4']): ?>
					<div class="sortkey switch_sortkey" id="<?php echo $this->_tpl_vars['sortkey4']; ?>
">
						<span><?php echo $this->_tpl_vars['label_sortkey4']; ?>
<b>></b></span>
						<div class="ul">
							<ul class="display_sortkey btn <?php echo $this->_tpl_vars['css_sortkey4']; ?>
">
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['self_sortkey4']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<a data-role="<?php echo $this->_tpl_vars['self_sortkey4'][$this->_sections['list']['index']]; ?>
"><?php echo $this->_tpl_vars['self_sortkey4'][$this->_sections['list']['index']]; ?>
</a>
								<?php endfor; endif; ?>
							</ul>
						</div>
					</div>
			<?php endif; ?>
			</div>

			<div class="return fl"><a>还原<br/>默认</a></div>
				
			<div class="top">
			
					<ol class="top_lt fl">
	
								<li class="btn sortkey" id="<?php echo $this->_tpl_vars['sortkey1']; ?>
">
									<span>按等级排序：</span>
									<a data-role="2">高</a>
									<a data-role="1">中</a>
									<a data-role="0">低</a>
								</li>
								<li class="btn sortkey" id="<?php echo $this->_tpl_vars['sortkey2']; ?>
">
									<span>按标识排序：</span>
									<a data-role="a">a</a>
									<a data-role="b">b</a>
									<a data-role="c">c</a>
									<a data-role="0">无</a>
								</li>
								<li class="btn sortyesno">
									<span>按标注排序：</span>
									<a data-role="1">有</a>
									<a data-role="0">没有</a>
								</li>
						
					</ol><!--top_lt end-->
			
					<ol class="top_rt fr">
					
							<div class="search btn">
								<form action="">
									<div class="keyword"><input type="text" id="keyword" name="keyword" /></div>
									<a class="submit">></a>
								</form>
							</div><!--search end-->
					
					</ol><!--top_rt end-->
			
			</div><!--top end-->
			
			<div class="btm">
			
					<ol class="btm_lt fl">
	
					</ol><!--btm_lt end-->
				
					<ol class="btm_rt fr">
					
							<div class="btn sortway">
								<a class="fl" data-role="">按首字母排序</a>
								<a class="fl" data-role="DESC">按录入时间排序</a>
								<a class="fl" data-role="update_time">按更新时间排序</a>
								<a class="fl" data-role="rand()">随机排序</a>
							</div><!--sortway-->
							
					</ol><!--btm_rt end-->
	
			</div><!--btm end-->

			<a class="switch_modify switch_ fr" href="javascript:;">< <br/>修改菜单</a>
	</div><!--sort end-->
	
	
	
	<!--修改组-->
	<div class="modify">
			<a class="switch_sort switch_ fl" href="javascript:;">><br/>排序菜单</a>
			
			<div class="return fl"><a>还原<br/>默认</a></div>
			
			<ol class="top">
				<li class="btn fl" id="<?php echo $this->_tpl_vars['modkey1']; ?>
">
					<span>转换等级为：</span>
					<a data-role="2">高</a>
					<a data-role="1">中</a>
					<a data-role="0">低</a>
				</li>
				<li class="btn fr" id="<?php echo $this->_tpl_vars['modkey2']; ?>
">
					<span>转换标识为：</span>
					<a data-role="a">a</a>
					<a data-role="b">b</a>
					<a data-role="c">c</a>
					<a data-role="0">无</a>
				</li>
			</ol>
			<ol class="btm">
				<li class="btn_mod_text fl">
					<a onclick="mod_text();">添加标注</a>
				</li>
				<li class="btn_mod_text fl">
					<a onclick="mod_text_del();">清空标注</a>
				</li>
				<li class="btn fr" id="<?php echo $this->_tpl_vars['modkey3']; ?>
">
					<a data-role="del">删除选中条目</a>
				</li>
			</ol>
	</div><!--modify end-->

	<!--列表显示区-->
	<iframe name="view_list" id="view_list" src="self_index_1.php?db=<?php echo $this->_tpl_vars['db']; ?>
&part=view&act=list" style="width:850px; height:<?php echo $this->_tpl_vars['frameHeight']; ?>
; padding-left:20px;"></iframe>
	
	
</div>


</body>
</html>