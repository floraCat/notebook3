<?php /* Smarty version 2.6.22, created on 2016-11-30 17:48:17
         compiled from index.html */ ?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>无标题文档</title>
	<style>
	*{font-family: 微软雅黑; font-size: 12px; padding: 0; margin:0;}
	pre{ white-space: pre-wrap; }
	a{ text-decoration: none; color:#333;}
	li{ list-style:disc; }
	.p-infos{ position: absolute; top: 15px; left: 15px; width: 450px; overflow: hidden;}
	.p-infos .Index{ margin-bottom: 15px; }
	.p-infos .Index a{ display: inline-block; height: 28px; line-height: 28px; padding:0 15px; border-radius: 15px; border: #d6eae7 1px solid; }
	.p-infos .Index a:hover{ background: #cf5d4e; border: #bf3928 1px solid; color: #fff;}
	.p-recom{ width: 400px; background: #f9f9f9; padding:10px 20px 5px; margin-left: 50%;}
	.p-recom h2{ font-size: 16px; line-height: 30px; color:#aaa; margin-bottom: 10px; }
	.p-recom section{ margin-bottom: 20px; line-height: 24px;}
	.p-recom section h4{ background: #eaf5f6; border-bottom: dashed #d6eae7 1px; padding: 1px 10px; margin-bottom: 5px;}
	.p-recom section ol{ padding-left: 20px; }
	.p-recom section a:hover{ color: #aa0e0e; }
	/*.p-recom section ol li{ overflow: hidden; text-overflow: ellipsis; -o-text-overflow:ellipsis; white-space:nowrap;}*/
	</style>
</head>


<body>

<div class="p-infos">

	<div class="Index">
		<a target="_blank" href="index.php?act=list&col=note">随笔</a>
		<a target="_blank" href="index.php?act=list&col=material">- 点 -</a>
		<a target="_blank" href="index.php?act=list&col=topic">- 线 -</a>
		<a target="_blank" href="index.php?act=list&col=plane">- 面 -</a>
		<a target="_blank" href="index.php?act=list&col=website">网址</a>
		<a target="_blank" href="index.php?act=list&col=diary">日志</a>
	</div><!--Index end-->

	<pre>
	*随笔：不分类别主题，即时记录，每天清理转化到题材或系统知识点；
	*点_[spot]（题材）：各个小知识点，为总结到系统知识点前积累相关的题材
	*线_[line]（主题）：多个相关的小知识点分类
	*面_[plane]（系统知识）：多个大知识点系统化
	*网址：
	*日志：每天做了什么，工作进度

	---------------------------------------------------------------
	</pre>

	<pre>
	-- 主题排序可先分三档：前中后（分别为10,20,30）,后期再根据实际情况更改排序
	</pre>

	<pre style="color:#aaa;">
	以前的已淘汰：
	--‘主题’正文收集相关的琐碎信息，差不多了就整理转化到‘知识点’
	--‘知识点’是比较系统全面的信息集合
	--‘日志’主要记录每天做了些什么
	--‘日志’不方便记录的放‘笔记’里记录，‘笔记’尽量每天清理转化
	--‘分类列表’收集某类信息以方便查看
	</pre>



	<br /><br />
	<div class="Index">
		<a target="_blank" href="__diary/">评分表</a>
		<a target="_blank" href="__data/">记忆桩</a>
	</div><!--Index end-->


	<br /><br />
	<pre style="color:#aaa;">
	参考：
	大分类：前端开发，后端程序，系统
	小分类：html5,css3,gulp,jade,angular
	属性：规范，步骤，使用说明，其他


	mark颜色说明：
	红色--未处理
	绿色--待完善
	黑色--已完善
	蓝色--注意
	灰色--淘汰
	</pre>


	<div class="Admin">
		<a href="admin.php" target="_blank">后台</a>
	</div>

</div>



<!--推荐-->
<div class="p-recom">
	<h2>推荐：</h2>
	<section>
		<h4>随笔：</h4>
		<ol>
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['recom_note']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<li><a target="_blank" href="index.php?col=note&act=edit&tpl=article&id=<?php echo $this->_tpl_vars['recom_note'][$this->_sections['list']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['recom_note'][$this->_sections['list']['index']]['input_time']; ?>
</a></li>
			<?php endfor; endif; ?>
		</ol>
	</section>
	<section>
		<h4>题材：</h4>
		<ol>
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['recom_material']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<li><a target="_blank" href="index.php?col=material&act=edit&tpl=article&id=<?php echo $this->_tpl_vars['recom_material'][$this->_sections['list']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['recom_material'][$this->_sections['list']['index']]['ttl']; ?>
</a></li>
			<?php endfor; endif; ?>
		</ol>
	</section>
	<section>
		<h4>主题：</h4>
		<ol>
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['recom_topic']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<li><a target="_blank" href="index.php?col=topic&act=edit&tpl=article&id=<?php echo $this->_tpl_vars['recom_topic'][$this->_sections['list']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['recom_topic'][$this->_sections['list']['index']]['ttl']; ?>
</a></li>
			<?php endfor; endif; ?>
		</ol>
	</section>
	<section>
		<h4>网址：</h4>
		<ol>
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['recom_website']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<li><a target="_blank" href="index.php?col=website&act=edit&tpl=article&id=<?php echo $this->_tpl_vars['recom_website'][$this->_sections['list']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['recom_website'][$this->_sections['list']['index']]['ttl']; ?>
</a></li>
			<?php endfor; endif; ?>
		</ol>
	</section>
	<section>
		<h4>日志：</h4>
		<ol>
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['recom_diary']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<li><a target="_blank" href="index.php?col=diary&act=edit&tpl=article&id=<?php echo $this->_tpl_vars['recom_diary'][$this->_sections['list']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['recom_diary'][$this->_sections['list']['index']]['ttl']; ?>
</a></li>
			<?php endfor; endif; ?>
		</ol>
	</section>
</div>



</body>

</html>