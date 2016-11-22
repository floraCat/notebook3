<?php /* Smarty version 2.6.22, created on 2016-11-22 18:02:57
         compiled from list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['col']; ?>
</title>
<link rel="stylesheet" href="style/h_reset.css" />
<link rel="stylesheet" href="style/list.css" />
<script src="js/jquery-1.10.2.js"></script>
<script src="js/zclip/jquery.zclip.min.js"></script>
<style>.WdateDiv #dpTime{ display: none;}</style>
</head>
<body>


<div class="sWraper">


	<!--导航-->
	<div class="sNav">
		<li data-col="index"><a href="index.php">首页</a></li>
		<li data-col="note"><a href="index.php?act=list&col=note">随笔</a></li>
		<li data-col="material"><a href="index.php?act=list&col=material">- 点 -</a></li>
		<li data-col="topic"><a href="index.php?act=list&col=topic">- 线 -</a></li>
		<li data-col="plane"><a href="index.php?act=list&col=plane">- 面 -</a></li>
		<li data-col="website"><a href="index.php?act=list&col=website">网址</a></li>
		<li data-col="diary"><a href="index.php?act=list&col=diary">日志</a></li>
	</div>

	<div class="key-copy-panel">标签面板</div>


	<div class="sTop">

		<!--排序-->
		<div class="sSort unit">
			<h3>排序：</h3>
			<ol class="keys clr">
				<a class="on up tab" data-role="input_time">创建时间</a>
				<a class="tab" data-role="update_time">最后更新</a>
			</ol>
		</div>

		<!--筛选-->
		<div class="sFilter unit">
			<h3>筛选：</h3>
			<ol class="clr">
				<!--年-->
				<div class="unit_sort">
					<a class="tab" data-role="year">年</a>
					<div class="drop">
						<i></i>
						<ul class="keys">
							<a data-val="年">取消</a>
							<table class="lYear" cellspacing="0" cellpadding="0" bordercolor="#ddd">
								<tbody>
									<tr><td><a data-val="2016">2016</a></td></tr>
								</tbody>
							</table>
						</ul>
					</div>
				</div>
				<!--月-->
				<div class="unit_sort">
					<a class="tab" data-role="month">月</a>
					<div class="drop">
						<i></i>
						<ul class="keys">
							<a data-val="月">取消</a>
							<table class="lMonth" cellspacing="0" cellpadding="0" bordercolor="#ddd">

							</table>
						</ul>
					</div>
				</div>
				<!--日-->
				<div class="unit_sort">
					<a class="tab" data-role="day">日</a>
					<div class="drop">
						<i></i>
						<ul class="keys">
							<a data-val="日">取消</a>
							<table class="lDay" cellspacing="0" cellpadding="0" bordercolor="#ddd">

							</table>
						</ul>
					</div>
				</div>
				<!--大分类-->
				<!-- <div class="unit_sort">
					<?php if ($this->_tpl_vars['Fields']['bCat']): ?>
						<a class="tab" data-role="bCat">大分类</a>
						<div class="drop drop_bCat" data-role="drop_bCat">
							<i></i>
							<ul class="keys">
								<a data-val="分类">取消</a>
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['bCats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<a data-val="<?php echo $this->_tpl_vars['bCats'][$this->_sections['list']['index']]['bCat']; ?>
"><?php echo $this->_tpl_vars['bCats'][$this->_sections['list']['index']]['bCat']; ?>
</a>
								<?php endfor; endif; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div> -->
				<!--小分类-->
				<!-- <div class="unit_sort">
					<?php if ($this->_tpl_vars['Fields']['sCat']): ?>
						<a class="tab" data-role="sCat">小分类</a>
						<div class="drop drop_sCat" data-role="drop_sCat">
							<i></i>
							<ul class="keys">
								<a data-val="分类">取消</a>
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['sCats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<a data-val="<?php echo $this->_tpl_vars['sCats'][$this->_sections['list']['index']]['sCat']; ?>
"><?php echo $this->_tpl_vars['sCats'][$this->_sections['list']['index']]['sCat']; ?>
</a>
								<?php endfor; endif; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div> -->
				<!--属性-->
				<!-- <div class="unit_sort">
					<?php if ($this->_tpl_vars['Fields']['attr']): ?>
						<a class="tab" data-role="attr">属性</a>
						<div class="drop drop_attr" data-role="drop_attr">
							<i></i>
							<ul class="keys">
								<a data-val="标签">取消</a>
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['attrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<a data-val="<?php echo $this->_tpl_vars['attrs'][$this->_sections['list']['index']]['attr']; ?>
"><?php echo $this->_tpl_vars['attrs'][$this->_sections['list']['index']]['attr']; ?>
</a>
								<?php endfor; endif; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div> -->
				<!--关键字-->
				<div class="unit_sort">
					<?php if ($this->_tpl_vars['Fields']['keyword']): ?>
						<a class="tab" data-role="keyword">关键字</a>
						<div class="drop drop_keyword" data-role="drop_keyword">
							<i></i>
							<ul class="keys">
								<a data-val="标签">取消</a>
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['keywords']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<a data-val="<?php echo $this->_tpl_vars['keywords'][$this->_sections['list']['index']]['keyword']; ?>
"><?php echo $this->_tpl_vars['keywords'][$this->_sections['list']['index']]['keyword']; ?>
</a>
								<?php endfor; endif; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
				<!--标题颜色-->
				<div class="unit_sort">
					<?php if ($this->_tpl_vars['Fields']['mark']): ?>
						<a class="tab" data-role="mark">标题颜色</a>
						<div class="drop drop_mark" data-role="drop_mark">
							<i></i>
							<ul class="keys">
								<a data-val="标题颜色">取消</a>
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['marks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<a data-val="<?php echo $this->_tpl_vars['marks'][$this->_sections['list']['index']]['mark']; ?>
"><?php echo $this->_tpl_vars['marks'][$this->_sections['list']['index']]['mark']; ?>
</a>
								<?php endfor; endif; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			</ol>
		</div>

		<!--仅标题-->
		<a class="sTitle">仅标题</a>

		<!--编辑-->
		<a class="sEdit">编辑</a>

		<!--搜索-->
		<div class="sSearch clr">
			<?php if ($this->_tpl_vars['Fields']['bCat']): ?>
			<ul class="bCatKey">
				<a class="onKey" data-role="">分类</a>
				<div class="opts">
					<a data-role="">分类</a>
					<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['bCats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<a data-role="<?php echo $this->_tpl_vars['bCats'][$this->_sections['list']['index']]['bCat']; ?>
"><?php echo $this->_tpl_vars['bCats'][$this->_sections['list']['index']]['bCat']; ?>
</a>
					<?php endfor; endif; ?>
				</div>
			</ul>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['Fields']['topic_id']): ?>
			<ul class="topicKey">
				<input type="number" name="topic_id" placeholder="主题ID" />
			</ul>
			<?php endif; ?>
			<ul class="searchKey">
				<a class="onKey" data-role="ttl">标题</a>
				<div class="opts">
					<a data-role="content">正文内容</a>
					<a data-role="ttl">标题</a>
					<!-- <a data-role="input_time">指定日期</a> -->
				</div>
			</ul>
			<ol class="clr">
				<input class="kw" type="text" name="search" autocomplete="off" />
				<input class="btn" type="button" value="搜索" />
			</ol>
		</div>

		<!--新增-->
		<a class="sAdd" href="index.php?act=edit&col=<?php echo $_GET['col']; ?>
">新增条目</a>

	</div><!--/sTop-->



<!--页码 start-->
<div class="pPage">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

</div>
<!--页码 end-->



	<!--列表-->
	<div class="sList">
		<ul>
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
			<li data-id="<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
">
				<div class="ttl">
					<a class="blank" target="_blank" href="index.php?act=edit&tpl=article&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
">_blank</a>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['ttl']): ?>
					<a target="_blank" class="A ttl_ mark_<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['mark']; ?>
"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['ttl']; ?>
</a>
					<?php else: ?>
					<a target="_blank" class="A ttl_ mark_<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['mark']; ?>
"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['input_time']; ?>
</a>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['bCat']): ?>
					<ol class="ol1 bCat">
						<h5>大分类：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['bCat']; ?>
</p>					
					</ol>
					<?php endif; ?>
					<!-- <?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['sCat']): ?>
					<ol class="ol1 sCat">
						<h5>小分类：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['sCat']; ?>
</p>					
					</ol>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['attr']): ?>
					<ol class="ol1 attr">
						<h5>属性：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['attr']; ?>
</p>					
					</ol>
					<?php endif; ?> -->
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['keyword']): ?>
					<ol class="ol1 keyword">
						<h5>关键字：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['keyword']; ?>
</p>					
					</ol>
					<?php endif; ?>
					<?php if ($_GET['col'] == 'material'): ?>
					<ol class="ol1">
						<h5>线：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['topic_name']; ?>
 | ID:<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['topic_id']; ?>
</p>					
					</ol>
					<?php endif; ?>
					<?php if ($_GET['col'] == 'topic'): ?>
					<ol class="ol1">
						<h5>面id：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['topic_id']; ?>
</p>					
					</ol>
					<ol class="ol1">
						<h5>ID = <?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
</h5>
					</ol>
					<?php endif; ?>
					<?php if ($_GET['col'] == 'plane'): ?>
					<ol class="ol1">
						<h5>ID = <?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
</h5>
					</ol>
					<?php endif; ?>
					<ol class="ol2">
						<a onclick="return confirm('是否删除此条目？');" href="index.php?act=del&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
">删除</a>
						<a target="_blank" href="index.php?act=edit&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
">编辑</a>
					</ol>
				</div>
				<div class="infos" style="display:none;">
					<ol class="ol1 input">
						<h5>创建时间：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['input_time']; ?>
</p>					
					</ol>
					<ol class="ol1 update">
						<h5>最后更新：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['update_time']; ?>
</p>					
					</ol>
					<?php if ($_GET['col'] == 'topic'): ?>
					<ol class="key_openAll">展开全部</ol>
					<?php endif; ?>
				</div>
				<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['website']): ?>
				<div class="body website">
					<pre style="margin:0;"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['website']; ?>
</pre>
				</div>
				<?php else: ?>
					<div class="body">
					<?php if ($_GET['col'] == 'topic'): ?>
						<div class="topic_desc">
						<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['description']; ?>

						</div>
						<div class="topic_content" style="display: none;">
							<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['rsList'][$this->_sections['list']['index']]['materials']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<section>
								<h5><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['materials'][$this->_sections['list2']['index']]['ttl']; ?>
</h5>
								<a class="link" target="_blank" href="index.php?act=edit&col=material&tpl=article&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['materials'][$this->_sections['list2']['index']]['id']; ?>
">详情</a>
								<div class="main" style="background: #f6f6f6;">
									<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['materials'][$this->_sections['list2']['index']]['content']; ?>

								</div>
							</section>
							<?php endfor; endif; ?>
						</div>
						<div class="cont" style="display: none; background: #f5fbfc;">
							<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['content']; ?>

						</div>
					<?php else: ?>

						<!--面-->
						<?php if ($_GET['col'] == 'plane'): ?>
							<style>
							.list-plane a{ display:inline-block; float:left; height:30px; line-height:30px; border:#ddd 1px solid; padding:0 12px; margin:3px; background-color:#eee;}
							</style>
							<div class="list-plane">
								<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['rsList'][$this->_sections['list']['index']]['materials']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<a class="link" target="_blank" href="index.php?act=edit&col=topic&tpl=article&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['materials'][$this->_sections['list2']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['materials'][$this->_sections['list2']['index']]['ttl']; ?>
</a>
								<?php endfor; endif; ?>
							</div>
						<?php else: ?>

							<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['content']; ?>

						<?php endif; ?>
					<?php endif; ?>
					</div>
				<?php endif; ?>
			</li>
			<?php endfor; endif; ?>
		</ul>
	</div><!--/sList-->



<!--页码 start-->
<div class="pPage">
	<?php echo $this->_tpl_vars['pagehtml']; ?>

</div>
<!--页码 end-->




	<!--详情弹出层-->
	<div class="sContent content-panel" style="display:none;">
		<div class="mask"></div>
		<a class="quit"></a>
		<div class="sList">
			<!-- <div class="ttl">
				<a target="_blank" class="time mark<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['mark']; ?>
"><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['input_time']; ?>
</a>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['bCat']): ?>
					<ol class="ol1 bCat">
						<h5>大分类：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['bCat']; ?>
</p>					
					</ol>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['sCat']): ?>
					<ol class="ol1 sCat">
						<h5>小分类：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['sCat']; ?>
</p>					
					</ol>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['attr']): ?>
					<ol class="ol1 attr">
						<h5>属性：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['attr']; ?>
</p>					
					</ol>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['rsList'][$this->_sections['list']['index']]['keyword']): ?>
					<ol class="ol1 keyword">
						<h5>关键字：</h5>
						<p><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['keyword']; ?>
</p>					
					</ol>
					<?php endif; ?>
				<ol class="ol2">
					<a onclick="return confirm('是否删除此条目？');" href="index.php?act=del&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
">删除</a>
					<a target="_blank" href="index.php?act=edit&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['id']; ?>
">编辑</a>
				</ol>
			</div>
			
			<div class="body body3">
			<?php if ($_GET['col'] == 'topic'): ?>
				<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['rsList'][$this->_sections['list']['index']]['content']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<section>
					<h5><?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['content'][$this->_sections['list2']['index']]['ttl']; ?>
</h5>
					<div class="main" style="background: #f6f6f6;">
						<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['content'][$this->_sections['list2']['index']]['content']; ?>

					</div>
				</section>
				<?php endfor; endif; ?>
			<?php else: ?>
				<?php echo $this->_tpl_vars['rsList'][$this->_sections['list']['index']]['content']; ?>

			<?php endif; ?>
			</div> -->
		</div>
	</div>

</div><!--/sWraper-->


<!--标签面板-->
<div class="sContent copy-panel" style="display:none;">
	<a class="quit"></a>
	<div class="sList">
		<div class="ttl">常用标签复制面板</div>
		
		<div class="body">
			<section>
				<h5>类别：</h5>
				<ol>
					<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['sCats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<dl><?php echo $this->_tpl_vars['sCats'][$this->_sections['list']['index']]['sCat']; ?>
</dl>
					<?php endfor; endif; ?>
				</ol>
			</section>
			<section>
				<h5>属性：</h5>
				<ol>
					<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['attrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<dl><?php echo $this->_tpl_vars['attrs'][$this->_sections['list']['index']]['attr']; ?>
</dl>
					<?php endfor; endif; ?>
				</ol>
			</section>
		</div>
	</div>
</div>


<input type="hidden" id="col" value="<?php echo $_GET['col']; ?>
" />
<input type="hidden" id="page" value="1" />

<script>
$(function(){
	//导航.on
	var col=$("#col").val();
	$("[data-col='"+col+"']").addClass("on").siblings().removeClass("on");
	//标签复制面板
	$(".key-copy-panel").click(function(){
		$(".copy-panel").toggle();
	});
});
$(function(){
	//12个月
	var $lMonth2='';
	for(var i=0;i<3;i++){
		var $lMonth='';
		for(var j=1;j<=4;j++){
			var html='<td><a data-val="'+(j+4*i)+'">'+(j+4*i)+'</a></td>';
			$lMonth+=html;
		}
		$lMonth2+='<tr>'+$lMonth+'</tr>';
	}
	var $lMonth3='<tbody>'+$lMonth2+'</tbody>';
	$(".lMonth").append($lMonth3);

	//31天
	var $lDay2='';
	for(var i=0;i<5;i++){
		var $lDay='';
		for(var j=1;j<=6;j++){
			var html='<td><a data-val="'+(j+6*i)+'">'+(j+6*i)+'</a></td>';
			$lDay+=html;
		}
		$lDay2+='<tr>'+$lDay+'</tr>';
	}
	var $lDay3='<tbody>'+$lDay2+'<tr><td><a data-val="31">31</a></td></tr></tbody>';
	$(".lDay").append($lDay3);


	//筛选下拉
	$(".sFilter ol a.tab").click(function(){
		_this=$(this);
		$(this).parents(".unit_sort").siblings(".unit_sort").find(".drop").hide();
		$(this).siblings(".drop").toggle();
	});
	
	//仅标题
	$(".sTitle").click(function(){
		$(this).toggleClass("on");
		$(".sList .body").toggle();
	});

	//编辑
	$(".sEdit").click(function(){
		$(this).toggleClass("on");
		$(".sList .ol2").children().toggle();
	});
	
	$(".sList").on("mouseover",".ol2",function(){
		if(!$(".sEdit").hasClass("on")){
			$(this).children().show();
		};
	});
	$(".sList").on("mouseout",".ol2",function(){
		if(!$(".sEdit").hasClass("on")){
			$(this).children().hide();
		};
	});

	//详情弹出
	$(".sList ul").on("click","li .A",function(){
		var html=$(this).parents("li").html();
		$(".content-panel .sList").html(html);
		$(".content-panel").show();
		$(".content-panel .ol2").show();
		$(".content-panel .infos").show();
		$(".content-panel .cont").show();
		$("body,html").css("overflow-y","hidden");
		if($("#col").val()=="topic"){
			$(".content-panel .topic_desc").hide();
			$(".content-panel .topic_content").show();
		}
	});

	//弹出层关闭
	$(".sContent .quit").click(function(){
		$(this).parents(".sContent").hide();
		$("body,html").css("overflow-y","auto");
	});

	//topic详情弹出
	$(document).on("click",".topic_content section h5",function(){
		$(this).siblings(".main").toggle().toggleClass("open");
	});
	$(document).on("click",".key_openAll",function(){
		if($(this).hasClass("active")){
			$(this).text("展开全部").removeClass("active");
			$(".topic_content section .main").hide();
		}else{
			$(this).text("收起全部").addClass("active");
			$(".topic_content section .main").show();
		}
	});

	//ajax执行排序
	$(".sTop .keys").on("click","a",function(){
		if($(this).parents(".sSort").length>0){
			$(this).parents(".keys").find(".on").removeClass("on");
			$(this).addClass("on");
			$(this).toggleClass("up");
		}
		if($(this).parents(".sFilter").length>0){
			var on_val=$(this).data("val");
			var on_txt=$(this).text();
			if(on_txt=="取消"){
				$(this).parents(".drop").siblings(".tab").removeClass("on").text(on_val);
				$(this).parents(".keys").find(".on").removeClass("on");
				$(this).addClass("on");
			}else{
				$(this).parents(".keys").find(".on").removeClass("on");
				$(this).addClass("on");
				$(this).parents(".drop").siblings(".tab").attr("data-val",on_val).text(on_txt).addClass("on");
			}
			$(this).parents(".drop").hide();
		}
		var submitdata=submit_data();
		$.post("index.php?act=list",submitdata,function(data){
			var data = eval("(" + data + ")");
			$(".sList ul").html(li_html(data[0]));
			$(".pPage").html(data[1]);
			if($(".sEdit").hasClass("on")){
				$(".sList .ol2").show();
			}
			if($(".sTitle").hasClass("on")){
				$(".sList .body").hide();
			}
		});
	});

	//搜索
	$(".sSearch .onKey").click(function(){
		$(this).parent().siblings().find(".opts").hide();
		$(this).siblings(".opts").toggle();
		//$(".sSearch .opts").toggle();
		event.stopPropagation();
		$(document).on("click",function(ev){
			var ev=ev || window.event;
			var target=ev.target || ev.srcElement;
			if($(target).parent().attr("class")!="opts"){
				event.preventDefault();
				$(".sSearch .opts").hide();
				$(document).off("click");
			}
		});
	});
	$(".sSearch .opts a").click(function(){
		var on_txt=$(this).text();
		var on_data=$(this).attr("data-role");
		$(this).parent().siblings(".onKey").text(on_txt).attr("data-role",on_data);
		$(".sSearch .kw").val('');
		$(".sSearch .opts").hide();
	});
	// $(".sSearch .kw").click(function(){
	// 	var on_data=$(".sSearch .onKey").attr("data-role");
	// 	if(on_data=="input_time"){
	// 		if($("#script").length<=0){
	// 			$("body").append('<script id="script" src="js\/My97DatePicker\/WdatePicker.js"><\/script>');
	// 		}
	// 		WdatePicker({dateFmt:'yyyy-MM-dd'});
	// 	}else{
	// 		$("#script").remove();
	// 		$("#_my97DP").remove();
	// 		$dp=undefined;
	// 		WdatePicker=undefined;
	// 	}
	// });
	function searchSubmit(){
		var search=$(".searchKey .onKey").attr("data-role");
		var bCat=$(".bCatKey .onKey").attr("data-role");
		var kw=$(".sSearch .kw").val();
		if($("#col").val()=="material"){
			var topic_id=$(".sSearch input[name=topic_id]").val();
		}else{
			var topic_id="";
		}
		
		// if(search=="input_time"){
		// 	kw=kw.substr(0,10);
		// }
		var submitdata=submit_data();
		$.post("index.php?act=list&search="+search+"&kw="+kw+"&bCat="+bCat+"&topic_id="+topic_id,submitdata,function(data){
			var data = eval("(" + data + ")");
			$(".sList ul").html(li_html(data[0]));
			$(".pPage").html(data[1]);
		});
	}
	$(".sSearch .btn").click(function(){
		searchSubmit();
	});
	$(".sSearch input").focus(function(){
		$(document).on("keydown",function(ev){
			var _curKey=ev.which || ev.keyCode || ev.charCode;
			if(_curKey==13){ searchSubmit();}// 确认键
		});
	});
		

	//ajax执行分页
	$(".pPage").on("click","li a",function(){
		$("body").animate({scrollTop:0},100);
		var page_on=$(this).data("role");
		$("#page").val(page_on);
		//var col=$("#col").val();
		$.post("index.php?act=list",submit_data(),function(data){
			var data = eval("(" + data + ")");
			$(".sList ul").html(li_html(data[0]));
			$(".pPage").html(data[1]);
			if($(".sEdit").hasClass("on")){
				$(".sList .ol2").show();
			}
			if($(".sTitle").hasClass("on")){
				$(".sList .body").hide();
			}
		});
	});

});

//提交的参数
function submit_data(){
	var col=$("#col").val();
	var page=$("#page").val();
	if($("a[data-role=input_time]").hasClass("on")){
		if($("a[data-role=input_time]").hasClass("up")){
			var input_time='up';
		}else{var input_time='down';}		
	}else{var input_time='';}
	if($("a[data-role=update_time]").hasClass("on")){
		if($("a[data-role=update_time]").hasClass("up")){
			var update_time='up';
		}else{var update_time='down';}		
	}else{var update_time="";}
	if($("a[data-role=year]").hasClass("on")){var year=$("a[data-role=year]").attr("data-val");}else{ var year="";}
	if($("a[data-role=month]").hasClass("on")){var month=$("a[data-role=month]").attr("data-val");}else{ var month="";}
	if($("a[data-role=day]").hasClass("on")){var day=$("a[data-role=day]").attr("data-val");}else{ var day="";}
	// if($("a[data-role=attr]").hasClass("on")){var attr=$("a[data-role=attr]").attr("data-val");}else{ var attr="";}
	if($("a[data-role=mark]").hasClass("on")){var mark=$("a[data-role=mark]").attr("data-val");}else{ var mark="";}
	// if($("a[data-role=bCat]").hasClass("on")){var bCat=$("a[data-role=bCat]").attr("data-val");}else{ var bCat="";}
	// if($("a[data-role=sCat]").hasClass("on")){var sCat=$("a[data-role=sCat]").attr("data-val");}else{ var sCat="";}
	if($("a[data-role=keyword]").hasClass("on")){var keyword=$("a[data-role=keyword]").keyword("data-val");}else{ var keyword="";}
	var submitdata={
		'col':col,
		'page':page,
		'input_time':input_time,
		'update_time':update_time,
		'year':year,
		'month':month,
		'day':day,
		//'attr':attr,
		'keyword':keyword,
		'mark':mark,
		//'bCat':bCat,
		//'sCat':sCat
	}
	return submitdata;
}

//回调
function li_html(data){
	//console.log(data);
	var $col=$("#col").val();
	var $html="";
	for(var i=0;i<=data.length-1;i++){
		if(data[i]["ttl"]){//ttl
			$ttl='<a target="_blank" class="A ttl_ mark_'+data[i]["mark"]+'">'+data[i]["ttl"]+'</a>';
		}else{ $ttl='<a target="_blank" class="A in_ mark_'+data[i]["mark"]+'">'+data[i]["input_time"]+'</a>'; }
		if(data[i]["bCat"]){//bCat
			$bCat='<ol class="ol1 bCat"><h5>大分类：</h5><p>'+data[i]["bCat"]+'</p></ol>';
		}else{ $bCat=""; }
		$topic="";
		if($col=="material"){
			if(data[i]["topic_name"]){//topic
				$topic='<ol class="ol1"><h5>线：</h5><p>'+data[i]["topic_name"]+' | ID:'+data[i]["topic_id"]+'</p></ol>';
			}
		}
		$topicID="";
		if($col=="topic"){
			//if(data[i]["topic_name"]){//topic
			$topic='<ol class="ol1"><h5>面id：</h5><p>'+data[i]["topic_id"]+'</p></ol>';
			//}
			$topicID='<ol class="ol1"><h5>ID = '+data[i]["id"]+'</ol>';
		}
		if($col=="plane"){
			$topicID='<ol class="ol1"><h5>ID = '+data[i]["id"]+'</ol>';
		}
		// if(data[i]["sCat"]){//sCat
		// 	$sCat='<ol class="ol1 sCat"><h5>小分类：</h5><p>'+data[i]["sCat"]+'</p></ol>';
		// }else{ $sCat=""; }
		// if(data[i]["attr"]){//attr
		// 	$attr='<ol class="ol1 attr"><h5>标签：</h5><p>'+data[i]["attr"]+'</p></ol>';
		// }else{ $attr=""; }
		if(data[i]["keyword"]){//keyword
			$keyword='<ol class="ol1 keyword"><h5>标签：</h5><p>'+data[i]["keyword"]+'</p></ol>';
		}else{ $keyword=""; }
		if(data[i]["input_time"]){//input_time
			$input='<ol class="ol1 input"><h5>创建时间：</h5><p>'+data[i]["input_time"]+'</p></ol>';
		}else{ $input=""; }
		if(data[i]["update_time"]){//update_time
			$update='<ol class="ol1 update"><h5>最后更新：</h5><p>'+data[i]["update_time"]+'</p></ol>';
		}else{ $update=""; }
		if(data[i]["website"]){
			$content='<div class="body website">'+data[i]["website"]+'</div>';//website
		}else{ 
			if($col=="topic"){
				var $materials='';
				for(var j in data[i]["materials"]){
					$materials+='<section>'
							+'<h5>'+data[i]["materials"][j]["ttl"]+'</h5>'
							+'<a class="link" target="_blank" href="index.php?act=edit&col=material&tpl=article&id='+data[i]["materials"][j]["id"]+'">详情</a>'
							+'<div class="main" style="background: #f6f6f6;">'
								+data[i]["materials"][j]["content"]
							+'</div>'
						+'</section>';
				}
				$content='<div class="body">'
							+'<div class="topic_desc">'
								+data[i]["description"]
							+'</div>'
							+'<div class="topic_content" style="display: none;">'
								+$materials
							+'</div>'
							+'<div class="cont" style="display: none; background: #f5fbfc;">'
								+data[i]["content"]
							+'</div>'
						+'</div>';
			}else{
				$content='<div class="body">'+data[i]["content"]+'</div>'; }//content
			}
		var html='<li>'
			+'<div class="ttl">'
				+'<a class="blank" target="_blank" href="index.php?act=edit&tpl=article&col='+$col+'&id='+data[i]["id"]+'">_blank</a>'
				+$ttl
				+$bCat
				+$topic
				+$topicID
				//+$sCat
				//+$attr
				+$keyword
				+'<ol class="ol2">'
					+'<a onclick="return confirm('+'\'是否删除此条目？\''+');" href="index.php?act=del&col='+$col+'&id='+data[i]["id"]+'">删除</a>'
					+'<a target="_blank" href="index.php?act=edit&col='+$col+'&id='+data[i]["id"]+'">编辑</a>'
				+'</ol>'
			+'</div>'
			+'<div class="infos" style="display:none;">'
				+$input
				+$update
			+'</div>'
			+$content
		+'</li>';
		$html+=html;
	}
	return $html;
}

</script>


</body>
</html>

				