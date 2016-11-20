<?php /* Smarty version 2.6.22, created on 2014-06-19 15:58:12
         compiled from test.html */ ?>
<!--<?php unset($this->_sections['type']);
$this->_sections['type']['name'] = 'type';
$this->_sections['type']['loop'] = is_array($_loop=$this->_tpl_vars['type']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>-->
<?php echo $this->_tpl_vars['type']; ?>

<!--<?php endfor; endif; ?>-->