<?php /* Smarty version 2.6.18, created on 2016-06-20 07:47:34
         compiled from ../templates/default/billers/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/billers/details.tpl', 204, false),array('function', 'html_options', '../templates/default/billers/details.tpl', 336, false),)), $this); ?>
<form name="frmpost" action="index.php?module=billers&amp;view=save&amp;id=<?php echo $_GET['id']; ?>
" method="post" id="frmpost" onsubmit="return checkForm(this);">


<?php if ($_GET['action'] == 'view'): ?>

<br />
<table align="center">
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['biller_name']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['name']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['street_address']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street2']; ?>

		<a
			class="cluetip"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_street2"
			href="#"
			title="<?php echo $this->_tpl_vars['LANG']['street2']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><?php echo $this->_tpl_vars['biller']['street_address2']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['city']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['city']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['zip']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['zip_code']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['state']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['state']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['country']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['country']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['mobile_phone']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['mobile_phone']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['phone']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['phone']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['fax']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['fax']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['email']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['paypal_business_name']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['paypal_business_name']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['paypal_notify_url']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['paypal_notify_url']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['paypal_return_url']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['paypal_return_url']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['eway_customer_id']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['eway_customer_id']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabel']['biller_cf1']; ?>

		<a
			class="cluetip"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			href="#"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><?php echo $this->_tpl_vars['biller']['custom_field1']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabel']['biller_cf2']; ?>
 
		<a
			class="cluetip"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			href="#"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><?php echo $this->_tpl_vars['biller']['custom_field2']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabel']['biller_cf3']; ?>
 
		<a
			class="cluetip"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			href="#"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><?php echo $this->_tpl_vars['biller']['custom_field3']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabel']['biller_cf4']; ?>

		<a
			class="cluetip"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			href="#"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><?php echo $this->_tpl_vars['biller']['custom_field4']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['logo_file']; ?>
 
		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_insert_biller_text"
			title="<?php echo $this->_tpl_vars['LANG']['Logo_File']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><?php echo $this->_tpl_vars['biller']['logo']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['invoice_footer']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['footer']; ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['notes']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['notes']; ?>
</td>
	</tr>
		<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</td>
		<td><?php echo $this->_tpl_vars['biller']['wording_for_enabled']; ?>
</td>
	</tr>
</table>
<?php endif; ?>


<?php if ($_GET['action'] == 'view'): ?>
	<br />
	<table class="buttons" align="center">
		<tr>
			<td>
				<a href="./index.php?module=billers&amp;view=details&amp;action=edit&amp;id=<?php echo $this->_tpl_vars['biller']['id']; ?>
" class="positive">
					<img src="./images/famfam/report_edit.png" alt=""/>
					<?php echo $this->_tpl_vars['LANG']['edit']; ?>

				</a>

			</td>
		</tr>
	</table>
<?php endif; ?>


<?php if ($_GET['action'] == 'edit'): ?>
<br />
<table align="center">
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['biller_name']; ?>
 
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
		<td><input type="text" name="name"  value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" id="name" class="validate[required]" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street']; ?>
</td>
		<td><input type="text" name="street_address" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['street_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street2']; ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_street2"
			title="<?php echo $this->_tpl_vars['LANG']['street2']; ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="street_address2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['city']; ?>
</td>
		<td><input type="text" name="city" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['city'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['zip']; ?>
</td>
		<td><input type="text" name="zip_code" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['zip_code'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['state']; ?>
</td>
		<td><input type="text" name="state" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['state'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['country']; ?>
</td>
		<td><input type="text" name="country" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['country'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['mobile_phone']; ?>
</td>
		<td><input type="text" name="mobile_phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['mobile_phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['phone']; ?>
</td>
		<td><input type="text" name="phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['fax']; ?>
</td>
		<td><input type="text" name="fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['fax'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
</td>
		<td><input type="text" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['paypal_business_name']; ?>
</td>
		<td><input type="text" name="paypal_business_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['paypal_business_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['paypal_notify_url']; ?>
</td>
		<td><input type="text" name="paypal_notify_url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['paypal_notify_url'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['paypal_return_url']; ?>
</td>
		<td><input type="text" name="paypal_return_url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['paypal_return_url'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['eway_customer_id']; ?>
</td>
		<td><input type="text" name="eway_customer_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['eway_customer_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['biller_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="custom_field1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50"</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabel']['biller_cf2']; ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="custom_field2" value="<?php echo $this->_tpl_vars['biller']['custom_field2']; ?>
" size="50"</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['biller_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['Custom_Fields'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="custom_field3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50"</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['biller_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="custom_field4" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50"</td>
	</tr>
	<tr>
		<td class="details_screen">
		<?php echo $this->_tpl_vars['LANG']['logo_file']; ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_insert_biller_text"
			title="<?php echo $this->_tpl_vars['LANG']['Logo_File']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td>
			<?php echo smarty_function_html_options(array('name' => 'logo','output' => $this->_tpl_vars['files'],'values' => $this->_tpl_vars['files'],'selected' => $this->_tpl_vars['biller']['logo']), $this);?>

		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['invoice_footer']; ?>
</td>
		<td><textarea  name="footer" class="editor" rows="4" cols="50"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['footer'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</textarea></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['notes']; ?>
</td>
		<td><textarea  name="notes"class="editor" rows="8" cols="50"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['notes'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</textarea></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</td>
		<td>
		<?php echo smarty_function_html_options(array('name' => 'enabled','options' => $this->_tpl_vars['enabled'],'selected' => $this->_tpl_vars['biller']['enabled']), $this);?>

		</td>
	</tr>
	
</table>
<?php endif; ?> 
<?php if ($_GET['action'] == 'edit'): ?>
<br />
	<table class="buttons" align="center">
    <tr>
        <td>
            <button type="submit" class="positive" name="save_biller" value="<?php echo $this->_tpl_vars['LANG']['save_biller']; ?>
">
                <img class="button_img" src="./images/common/tick.png" alt="" /> 
                <?php echo $this->_tpl_vars['LANG']['save']; ?>

            </button>

            <input type="hidden" name="op" value="edit_biller">
   			<input type="hidden" name="categorie" value="1" />

            <a href="./index.php?module=billers&amp;view=manage" class="negative">
                <img src="./images/common/cross.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['cancel']; ?>

            </a>
    
        </td>
    </tr>
	</table>
	<?php endif; ?>
</form>