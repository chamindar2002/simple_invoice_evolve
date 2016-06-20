<?php /* Smarty version 2.6.18, created on 2016-06-20 08:14:14
         compiled from ../templates/default/preferences/save.tpl */ ?>
<br />
<?php if ($this->_tpl_vars['saved'] == true): ?>
	<br />
	 <?php echo $this->_tpl_vars['LANG']['save_preference_success']; ?>

	<br />
	<br />
<?php else: ?>
	<br />
	 <?php echo $this->_tpl_vars['LANG']['save_preference_failure']; ?>

	<br />
	<br />
<?php endif; ?>

<?php if ($this->_tpl_vars['saved'] == true): ?>
	<meta http-equiv="refresh" content="2;URL=index.php?module=preferences&amp;view=manage" />
<?php endif; ?>