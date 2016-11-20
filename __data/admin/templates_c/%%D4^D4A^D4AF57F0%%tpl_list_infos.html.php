<?php /* Smarty version 2.6.22, created on 2014-02-26 13:03:51
         compiled from tpl_list_infos.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title> 
<link href="css/base.css" rel="stylesheet" type="text/css" /> 
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/layout.js"></script>
</head>
<body>

<div class="main">

	<div class="ttl003b v">
		<div class="lt"><h3 class="fl"><s>>></s> <?php echo $this->_tpl_vars['p_ttl']; ?>
<a href="manage_singlepage.php?col=seo&act=edit&id=2" target="right" class="seo">[进入seo设置]</a></h3></div>
		<a class="btn rt" href="?col=<?php echo $this->_tpl_vars['col']; ?>
&act=add">增加资讯</a>
		<div class="search003 rt">
			<form action="" method="get" class="searchform">
				<div class="Lt">
					<input type="text" name="keyword" value="请输入搜索标题" onfocus="if(this.value=='请输入搜索标题'){this.value='';};" onblur="if(this.value==''){this.value='请输入标题';};">
				</div>
				<div class="Rt"><input type="button" class="submit" value=">" /></div>
				<input type="submit" value="搜索" style="display:none;" />
				<input type="hidden" name="col" value="<?php echo $this->_tpl_vars['col']; ?>
" />
				<input type="hidden" name="catid" value="<?php echo $_GET['catid']; ?>
" />
				<input type="hidden" name="act" id="act"  value="list"  />
			</form>
		</div><!--search003 end-->
	</div><!--ttl003b end-->
	
		
	<div class="con">
	
		<div class="list0">
			<ol class="ligroup0 Focus">
				<ul class="hd zd4_">
					<li class="l1">序号</li>
					<li class="l2">标题</li>
					<li class="l3">浏览次数</li>
					<li class="l4">录入时间</li>
					<li class="l5">操作</li>
				</ul>
				<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['rslist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<ul>
					<li class="l1"><?php echo $this->_sections['list']['rownum']; ?>
</li>
					<li class="l2"><?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['title']; ?>
</li>
					<li class="l3"><?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['view']; ?>
</li>
					<li class="l4"><?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['input_time']; ?>
</li>
					<li class="l5">
						<a href="?col=<?php echo $this->_tpl_vars['col']; ?>
&act=del&delid=<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['id']; ?>
&pageid=<?php echo $_GET['pageid']; ?>
">删除</a>&nbsp;|&nbsp;
						<a href="?col=<?php echo $this->_tpl_vars['col']; ?>
&act=edit&id=<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['id']; ?>
&catid=<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['catid']; ?>
&pageid=<?php echo $_GET['pageid']; ?>
">修改</a>
					</li>
				</ul>
				<?php endfor; endif; ?>
			</ol>
		</div><!--list0 end-->
		
		<div class="pagelist">
			<div class="page101 pageAH fl">
				<div><?php echo $this->_tpl_vars['pagehtml']; ?>
</div>
			</div><!--page101 end-->
			<input type="hidden" name="rs_keyword" class="rs_keyword" value="<?php echo $this->_tpl_vars['keyword']; ?>
" />
			<span class="kw fr"></span>
		</div>
		
	</div><!--con end-->
			
</div><!--main end-->


</body>
</html>