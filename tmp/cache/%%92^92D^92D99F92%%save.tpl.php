<?php /* Smarty version 2.6.18, created on 2016-06-20 08:11:02
         compiled from ../templates/default/system_defaults/save.tpl */ ?>
<meta http-equiv="refresh" content="2;URL=index.php?module=system_defaults&amp;view=manage" />

<br />

<?php if ($this->_tpl_vars['saved']): ?>
	<?php echo $this->_tpl_vars['LANG']['save_defaults_success']; ?>
<br />
<?php else: ?>
	<?php echo $this->_tpl_vars['LANG']['save_defaults_failure']; ?>
<br />
<?php endif; ?>