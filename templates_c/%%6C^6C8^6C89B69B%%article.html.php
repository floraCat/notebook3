<?php /* Smarty version 2.6.22, created on 2016-11-24 15:18:55
         compiled from article.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $_GET['col']; ?>
</title>
	<link rel="stylesheet" href="style/h_reset.css" />
	<link rel="stylesheet" href="style/list.css" />
	<script src="js/jquery-1.10.2.js"></script>
	<style>
	.sList .ol2 a{ display: block; }
	</style>
</head>

<body>



	<!--详情弹出层-->
	<div class="sContent content-panel">
		<!-- <div class="mask"></div>
		<a class="quit"></a> -->
		<div class="sList">

			<div class="ttl">
				<a class="blank" href="index.php?act=list&tpl=article&id=<?php echo $this->_tpl_vars['rsedit']['id']; ?>
">_blank</a>
				<?php if ($this->_tpl_vars['rsedit']['ttl']): ?>
				<a target="_blank" class="A ttl_ mark_<?php echo $this->_tpl_vars['rsedit']['mark']; ?>
"><?php echo $this->_tpl_vars['rsedit']['ttl']; ?>
</a>
				<?php else: ?>
				<a target="_blank" class="A ttl_ mark_<?php echo $this->_tpl_vars['rsedit']['mark']; ?>
"><?php echo $this->_tpl_vars['rsedit']['input_time']; ?>
</a>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['rsedit']['bCat']): ?>
				<ol class="ol1 bCat">
					<h5>大分类：</h5>
					<p><?php echo $this->_tpl_vars['rsedit']['bCat']; ?>
</p>					
				</ol>
				<?php endif; ?>
				<!-- <?php if ($this->_tpl_vars['rsedit']['sCat']): ?>
				<ol class="ol1 sCat">
					<h5>小分类：</h5>
					<p><?php echo $this->_tpl_vars['rsedit']['sCat']; ?>
</p>					
				</ol>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['rsedit']['attr']): ?>
				<ol class="ol1 attr">
					<h5>属性：</h5>
					<p><?php echo $this->_tpl_vars['rsedit']['attr']; ?>
</p>					
				</ol>
				<?php endif; ?> -->
				<?php if ($this->_tpl_vars['rsedit']['keyword']): ?>
				<ol class="ol1 keyword">
					<h5>关键字：</h5>
					<p><?php echo $this->_tpl_vars['rsedit']['keyword']; ?>
</p>					
				</ol>
				<?php endif; ?>
				<?php if ($_GET['col'] == 'material'): ?>
					<ol class="ol1">
						<h5>主题：</h5>
						<p><?php echo $this->_tpl_vars['rsedit']['topic_name']; ?>
 | ID:<?php echo $this->_tpl_vars['rsedit']['topic_id']; ?>
</p>					
					</ol>
				<?php endif; ?>
				<?php if ($_GET['col'] == 'topic'): ?>
					<ol class="ol1">
						<h5>ID：</h5>
						<p><?php echo $this->_tpl_vars['rsedit']['id']; ?>
</p>					
					</ol>
					<?php endif; ?>
				<ol class="ol2">
					<a onclick="return confirm('是否删除此条目？');" href="index.php?act=del&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsedit']['id']; ?>
">删除</a>
					<a href="index.php?act=edit&col=<?php echo $_GET['col']; ?>
&id=<?php echo $this->_tpl_vars['rsedit']['id']; ?>
">编辑</a>
				</ol>
			</div>
			<div class="infos">
				<ol class="ol1 input">
					<h5>创建时间：</h5>
					<p><?php echo $this->_tpl_vars['rsedit']['input_time']; ?>
</p>					
				</ol>
				<ol class="ol1 update">
					<h5>最后更新：</h5>
					<p><?php echo $this->_tpl_vars['rsedit']['update_time']; ?>
</p>					
				</ol>
				<?php if ($_GET['col'] == 'topic'): ?>
				<ol class="key_openAll">展开全部</ol>
				<?php endif; ?>
			</div>
			<?php if ($this->_tpl_vars['rsedit']['website']): ?>
			<div class="body website">
				<?php echo $this->_tpl_vars['rsedit']['website']; ?>

			</div>
			<?php else: ?>
				<div class="body">
				<?php if ($_GET['col'] == 'topic'): ?>
					<div class="topic_desc">
					<?php echo $this->_tpl_vars['rsedit']['description']; ?>

					</div>
					<div class="topic_content">
						<?php unset($this->_sections['list2']);
$this->_sections['list2']['name'] = 'list2';
$this->_sections['list2']['loop'] = is_array($_loop=$this->_tpl_vars['rsedit']['materials']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<h5><?php echo $this->_tpl_vars['rsedit']['materials'][$this->_sections['list2']['index']]['ttl']; ?>
</h5>
							<a class="link" target="_blank" href="index.php?act=edit&col=material&tpl=article&id=<?php echo $this->_tpl_vars['rsedit']['materials'][$this->_sections['list2']['index']]['id']; ?>
">详情</a>
							<div class="main" style="background: #f6f6f6;">
								<?php echo $this->_tpl_vars['rsedit']['materials'][$this->_sections['list2']['index']]['content']; ?>

							</div>
						</section>
						<?php endfor; endif; ?>
					</div>
					<div class="cont" style=" background: #f5fbfc;">
						<?php echo $this->_tpl_vars['rsedit']['content']; ?>

					</div>
				<?php else: ?>
					<?php echo $this->_tpl_vars['rsedit']['content']; ?>

				<?php endif; ?>
				</div>
			<?php endif; ?>

		</div>
	</div>



<script>
$(function(){
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
});
</script>


</body>
</html>