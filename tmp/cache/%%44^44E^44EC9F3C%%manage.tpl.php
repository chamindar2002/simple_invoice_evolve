<?php /* Smarty version 2.6.18, created on 2016-06-20 07:51:47
         compiled from ../templates/default/user/manage.tpl */ ?>
<table class="buttons" align="center">
    <tr>
        <td>

            <a href="index.php?module=user&view=add" class="positive">
                <img src="./images/common/add.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['user_add']; ?>

            </a>

        </td>
    </tr>
</table>
<?php if ($this->_tpl_vars['number_of_rows']['count'] == 0): ?>

	<br />
	<br />
	<span class="welcome"><?php echo $this->_tpl_vars['LANG']['no_users']; ?>
</span>
	<br />
	<br />
	<br />
	<br />


<?php else: ?>
	
	<br />
	<table id="manageGrid" style="display:none"></table>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../modules/user/manage.js.php', 'smarty_include_vars' => array('LANG' => $this->_tpl_vars['LANG'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
<?php endif; ?>