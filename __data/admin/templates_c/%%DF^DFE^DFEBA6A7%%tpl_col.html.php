<?php /* Smarty version 2.6.22, created on 2014-03-30 21:46:51
         compiled from tpl_col.html */ ?>
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

<div class="main List_cat">

	<div class="ttl003a">
		<h3 class="lt"><s>>></s> <?php echo $this->_tpl_vars['p_ttl']; ?>
<span class="mark"><?php echo $this->_tpl_vars['note']['p_ttl']; ?>
</span></h3>
	</div><!--ttl003a end-->

		
	<div class="con">
		<div class="listCat">
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
		<form action="manage.php?act=save&part=col&id=<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['id']; ?>
" method="post" enctype="multipart/form-data">
			<input type="hidden" name="flagid" value="<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['flagid']; ?>
" />
			<input type="hidden" name="flag_ttl" value="<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['flag_ttl']; ?>
" />
			<div class="ttl zd4Btn zb2Btn">
				<div class="Cat">
					<input class="cs" type="text" readonly="readonly" name="col_title" value="<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['col_title']; ?>
" />
					<?php if ($this->_tpl_vars['Field']['shorttitle']): ?><input class="cs" type="text" readonly="readonly" name="shorttitle" value="<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['shorttitle']; ?>
" /><?php endif; ?>
				</div>
				<input type="button" class="btn edit_cat" value="修改" />
				<input type="submit" class="btn modify_cat" value="提交" />
				<input type="button" class="btn modify_seo" value="展开其他设置" />
			</div>
			<div class="seo zb2Input">
				<ul class="editpage zd4 zb2">
				
					<li><div class="Left">栏目代号：</div><div class="Right"><em><?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['col']; ?>
&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;id：<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['id']; ?>
</em></div></li>
				
				<!--pic-->
					<li><div class="Left">类目缩略图：</div>
						<div class="Right">
							<input class="css_file fl" name="pic" type="file" />
							<?php if ($this->_tpl_vars['rslist'][$this->_sections['list']['index']]['pic']): ?><div class="img fl zb2" style="<?php echo $this->_tpl_vars['note']['imgsize']; ?>
"><img src="<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['pic']; ?>
" /></div><?php endif; ?>
							<input name="picurl_u" type="hidden" id="picurl_u" value="<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['pic']; ?>
" /><span><?php echo $this->_tpl_vars['note']['pic']; ?>
</span> 
						</div>
					</li>
				<!--pic end-->
					
					<li><div class="Left">seo关键字：</div><div class="Right"><input type="text" name="seo_keyword" value="<?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['seo_keyword']; ?>
" /><span><?php echo $this->_tpl_vars['note']['seo_keyword']; ?>
</span></div></li>
					
					<li><div class="Left">seo描述：</div><div class="Right"><textarea class="css_textarea_desc" name="seo_desc"><?php echo $this->_tpl_vars['rslist'][$this->_sections['list']['index']]['seo_desc']; ?>
</textarea><span><?php echo $this->_tpl_vars['note']['seo_desc']; ?>
</span></div></li>
					
					<li><div class="btn"><input class="zd2" type="submit" value="提交" /></div></li>
					
				</ul><!--editpage end-->
			</div><!--seo end-->
		</form>
		</ul>
		<?php endfor; endif; ?>
		</div><!--listCat end-->
	</div><!--con end-->
	
	
	

</div><!--main end-->


</body>
</html>