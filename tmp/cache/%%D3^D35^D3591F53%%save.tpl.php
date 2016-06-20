<?php /* Smarty version 2.6.18, created on 2016-06-20 07:43:49
         compiled from ../templates/default/products/save.tpl */ ?>

<?php if ($this->_tpl_vars['saved'] == true): ?>
	<br />
	 <?php echo $this->_tpl_vars['LANG']['save_product_success']; ?>

	<br />
	<br />
<?php else: ?>
	<br />
	 <?php echo $this->_tpl_vars['LANG']['save_product_failure']; ?>

	<br />
	<br />
<?php endif; ?>

<?php if ($_POST['cancel'] == null): ?>
	<meta http-equiv="refresh" content="2;URL=index.php?module=products&view=manage" />
<?php else: ?>
	<meta http-equiv="refresh" content="0;URL=index.php?module=products&view=manage" />
<?php endif; ?>