<?php /* Smarty version 2.6.18, created on 2016-06-20 07:51:51
         compiled from ../templates/default/user/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', '../templates/default/user/details.tpl', 11, false),array('modifier', 'htmlsafe', '../templates/default/user/details.tpl', 17, false),array('function', 'html_options', '../templates/default/user/details.tpl', 108, false),)), $this); ?>
<form name="frmpost" action="index.php?module=user&view=save&id=<?php echo ((is_array($_tmp=$_GET['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" method="post" id="frmpost" onsubmit="return checkForm(this);">
<?php if ($_GET['action'] == 'view'): ?>
<br />
<table align="center">
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['role']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['role_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['password']; ?>
</td>
		<td>*********</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['lang_enabled'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
</table>
<br />
<table class="buttons" align="center">
    <tr>
        <td>
            <a href="./index.php?module=user&view=details&id=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&action=edit" class="positive">
                <img src="./images/famfam/report_edit.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['edit']; ?>

            </a>

            <a href="./index.php?module=user&view=manage" class="negative">
                <img src="./images/common/cross.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['cancel']; ?>

            </a>
    
        </td>
    </tr>
 </table>
<?php endif; ?>



<?php if ($_GET['action'] == 'edit'): ?>


<br />
<table align="center">
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
 
		<a 
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_required_field"
				title="<?php echo $this->_tpl_vars['LANG']['Required_Field']; ?>
"
		>
		<img src="./images/common/required-small.png" alt="" />
		</a>	
		</td>
		<td><input type="text" name="email" autocomplete="off" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="35" id="email"  class="validate[required]"  /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['role']; ?>
 
			<a
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_user_role"
				title="<?php echo $this->_tpl_vars['LANG']['role']; ?>
"
			> 
			<img src="./images/common/help-small.png" alt="" />
			</a>
		</td>
		<td>
				<select name="role">
					<?php $_from = $this->_tpl_vars['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
						<option <?php if ($this->_tpl_vars['role']['id'] == $this->_tpl_vars['user']['role_id']): ?> selected <?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['role']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['role']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
		</td>
	</tr>
	<tr>
		<td class="details_screen">
			<?php echo $this->_tpl_vars['LANG']['new_password']; ?>

			<a
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_new_password"
				title="<?php echo $this->_tpl_vars['LANG']['new_password']; ?>
"
			> 
			<img src="./images/common/help-small.png" alt="" />
			</a>
		</td>
		<td>
			<input type="password" name="password_field" value="" size="25" />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</td>
		<td><?php echo smarty_function_html_options(array('name' => 'enabled','options' => $this->_tpl_vars['enabled'],'selected' => $this->_tpl_vars['user']['enabled']), $this);?>
</td>
	</tr>
</table>
<br />
<table class="buttons" align="center">
	<tr>
		<td>
			<button type="submit" class="positive" name="save_user">
			<img class="button_img" src="./images/common/tick.png" alt="" /> 
			<?php echo $this->_tpl_vars['LANG']['save']; ?>

			</button>			<input type="hidden" name="op" value="edit_user" />
			<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" />
		</td>
		<td>
			<a href="./index.php?module=user&view=manage" class="negative">
			<img src="./images/common/cross.png" alt="" />
			<?php echo $this->_tpl_vars['LANG']['cancel']; ?>

			</a>
		</td>
	</tr>
</table>
<?php endif; ?>
</form>