<?php /* Smarty version 2.6.18, created on 2016-06-20 08:10:01
         compiled from ../templates/default/customers/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', '../templates/default/customers/details.tpl', 30, false),array('modifier', 'htmlsafe', '../templates/default/customers/details.tpl', 43, false),array('modifier', 'urlencode', '../templates/default/customers/details.tpl', 45, false),array('modifier', 'outhtml', '../templates/default/customers/details.tpl', 224, false),array('function', 'html_options', '../templates/default/customers/details.tpl', 428, false),)), $this); ?>

<?php if ($_GET['action'] == 'view'): ?>
<br />
<table align="center">
	<tr>
		<td colspan="7" align="center"> </td>
	</tr>
	<tr>
		<td colspan="4" align="center" class="align_center"><i><?php echo $this->_tpl_vars['LANG']['customer_details']; ?>
</i></td>
		<td width="10%"></td>
		<td colspan="2" align="center" class="align_center"><i><?php echo $this->_tpl_vars['LANG']['summary_of_accounts']; ?>
</i></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['customer_name']; ?>
</td>
		<td colspan="2"><?php echo $this->_tpl_vars['customer']['name']; ?>
</td>
		<td colspan="2"></td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['total_invoices']; ?>
</td>
		<td style="text-align:right"><?php echo ((is_array($_tmp=$this->_tpl_vars['stuff']['total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['attention_short']; ?>

		<a
			rel="index.php?module=documentation&amp;view=view&amp;page=help_customer_contact"
			href="#"
			class="cluetip"
			title="<?php echo $this->_tpl_vars['LANG']['customer_contact']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" /></a>
		
		</td>
		<td colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['attention'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td colspan="2"></td>
		<td class="details_screen"><a href="index.php?module=payments&view=manage&c_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['LANG']['total_paid']; ?>
</a></td>
		<td style="text-align:right"><?php echo ((is_array($_tmp=$this->_tpl_vars['stuff']['paid'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street']; ?>
</td>
		<td colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td colspan="2"></td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['total_owing']; ?>
</td>
		<td style="text-align:right"><u><?php echo ((is_array($_tmp=$this->_tpl_vars['stuff']['owing'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</u></td>
	</tr>
	<tr>
		<td class="details_screen" NOWRAP><?php echo $this->_tpl_vars['LANG']['street2']; ?>

			<a
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_street2"
				title="<?php echo $this->_tpl_vars['LANG']['street2']; ?>
"
			> <img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['city']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['city'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['zip']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['zip_code'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['phone']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['state']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['state'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen" NOWRAP><?php echo $this->_tpl_vars['LANG']['mobile_phone']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['mobile_phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['country']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['country'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['fax']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['fax'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['wording_for_enabled'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
</table>
<br />
<div id="tabs_customer">
	<ul class="anchors">
		<li><a href="#section-1" target="_top"><?php echo $this->_tpl_vars['LANG']['custom_fields']; ?>
</a></li>
		<li><a href="#section-2" target="_top"><?php echo $this->_tpl_vars['LANG']['credit_card_details']; ?>
</a></li>
		<li><a href="#section-3" target="_top"><?php echo $this->_tpl_vars['LANG']['customer']; ?>
 <?php echo $this->_tpl_vars['LANG']['invoice_listings']; ?>
</a></li>
		<li><a href="#section-4" target="_top"><?php echo $this->_tpl_vars['LANG']['notes']; ?>
</a></li>
	</ul>
	<div id="section-1" class="fragment">
		<p>
			<table>
				<tr>
					<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

 						<a
							class="cluetip"
							href="#"
							rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
							title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
						> 
						<img src="./images/common/help-small.png" alt="" /></a>
					</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
				</tr>
				<tr>
					<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

					 	<a
							class="cluetip"
							href="#"
							rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
							title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
						> 
						<img src="./images/common/help-small.png" alt="" /></a>
					</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
				</tr>
				<tr>
					<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

					 	<a
							class="cluetip"
							href="#"
							rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
							title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
						> 
						<img src="./images/common/help-small.png" alt="" /></a>
					</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
				</tr>
				<tr>
					<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

					 	<a
							class="cluetip"
							href="#"
							rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
							title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
						> 
						<img src="./images/common/help-small.png" alt="" /></a>
 					</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
				</tr>
							</table>
		</p>
	</div>

	<div id="section-2" class="fragment">
		<p>
			<table>

			<tr>
				<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_holder_name']; ?>
</td>
				<td>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['credit_card_holder_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

				</td>
			</tr>
			<tr>
				<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_number']; ?>
</td>
				<td>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['credit_card_number_encrypted'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

									</td>
			</tr>
			<tr>
				<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_expiry_month']; ?>
</td>
				<td>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['credit_card_expiry_month'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

				</td>
			</tr>
			<tr>
				<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_expiry_year']; ?>
</td>
				<td>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['credit_card_expiry_year'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

				</td>
			</tr>
		</table>
		</p>
	</div>
	<div id="section-3" class="fragment">
		<p >
		<table width="100%" align="center">
			<tr class="sortHeader">

				<th class="sortable"><?php echo $this->_tpl_vars['LANG']['id']; ?>
</th>
				<th class="sortable_rt"><?php echo $this->_tpl_vars['LANG']['total']; ?>
</th>
				<th class="sortable_rt"><?php echo $this->_tpl_vars['LANG']['paid']; ?>
</th>
				<th class="sortable_rt"><?php echo $this->_tpl_vars['LANG']['owing']; ?>
</th>
				<th class="sortable_rt"><?php echo $this->_tpl_vars['LANG']['date_created']; ?>
</th>

			</tr>
		
			<?php $_from = $this->_tpl_vars['invoices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoice']):
?>
	
			<tr class="index_table">
				<td class="details_screen"><a href="index.php?module=invoices&amp;view=quick_view&id=<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</a></td>
				<td style="text-align:right" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
				<td style="text-align:right" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['paid'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
				<td style="text-align:right" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['owing'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
				<td style="text-align:right" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['date'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
			</tr>

			<?php endforeach; endif; unset($_from); ?>
		</table>	
		</p>
	</div>
	<div id="section-4" class="fragment">

		<p>
			<div id="left">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['notes'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>

			</div>
		</p>
	</div>
</div>


<br />
<table class="buttons" align="center">
    <tr>
        <td>
            <a href="./index.php?module=customers&amp;view=details&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;action=edit" class="positive">
                <img src="./images/common/tick.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['edit']; ?>

            </a>
    
        </td>
    </tr>
</table>
<?php endif; ?>

<?php if ($_GET['action'] == 'edit'): ?>

<form name="frmpost" action="index.php?module=customers&amp;view=save&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" method="post" id="frmpost" onsubmit="return checkForm(this);">
<br />
<table align="center">
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['customer_name']; ?>

		<a 
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_required_field"
				title="<?php echo $this->_tpl_vars['LANG']['Required_Field']; ?>
"
		>
		<img src="./images/common/required-small.png" alt="" /></a>
		</td>
		<td><input type="text" name="name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" id="name" class="validate[required]" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['attention_short']; ?>

		<a
			rel="index.php?module=documentation&amp;view=view&amp;page=help_customer_contact"
			href="#"
			class="cluetip"
			title="<?php echo $this->_tpl_vars['LANG']['customer_contact']; ?>
"
		>
		 <img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><input type="text" name="attention" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['attention'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street']; ?>
</td>
		<td><input type="text" name="street_address" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
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
		<td><input type="text" name="street_address2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['city']; ?>
</td>
		<td><input type="text" name="city" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['city'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['zip']; ?>
</td>
		<td><input type="text" name="zip_code" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['zip_code'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['state']; ?>
</td>
		<td><input type="text" name="state" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['state'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['country']; ?>
</td>
		<td><input type="text" name="country" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['country'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['phone']; ?>
</td>
		<td><input type="text" name="phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['mobile_phone']; ?>
</td>
		<td><input type="text" name="mobile_phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['mobile_phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['fax']; ?>
</td>
		<td><input type="text" name="fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['fax'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
</td>
		<td>
			<input type="text" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td
	></tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_holder_name']; ?>
</td>
		<td>
			<input
				type="text" name="credit_card_holder_name"
			 	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['credit_card_holder_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_number']; ?>
</td>
		<td>
					<?php echo $this->_tpl_vars['LANG']['credit_card_number_encrypted']; ?>

		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_number_new']; ?>
</td>
		<td>
			<input
				type="text" name="credit_card_number_new"
			 	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['credit_card_holder_name_new'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_expiry_month']; ?>
</td>
		<td>
			<input
				type="text" name="credit_card_expiry_month"
			 	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['credit_card_expiry_month'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="5"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_expiry_year']; ?>
</td>
		<td>
			<input
				type="text" name="credit_card_expiry_year"
			 	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['credit_card_expiry_year'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="5"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

 			<a
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
				title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
			> 
		 <img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td>
			<input type="text" name="custom_field1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td
	></tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

 			<a
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
				title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
			> 
		 <img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td>
			<input type="text" name="custom_field2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td
	></tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 
 			<a
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
				title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
			> 
		<img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td>
			<input type="text" name="custom_field3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td
	></tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

 			<a
				class="cluetip"
				href="#"
				rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
				title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
			> 
		 <img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td>
			<input type="text" name="custom_field4" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td
	></tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['notes']; ?>
</td>
		<td><textarea  name="notes"  class="editor" rows="8" cols="50"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['notes'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</textarea></td>
	</tr>
		<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</td>
		<td>
			<?php echo smarty_function_html_options(array('name' => 'enabled','options' => $this->_tpl_vars['enabled'],'selected' => $this->_tpl_vars['customer']['enabled']), $this);?>

		</td>
	</tr>
</table>


<br />

<table class="buttons" align="center">
    <tr>
        <td>
            <button type="submit" class="positive" name="save_customer" value="<?php echo $this->_tpl_vars['LANG']['save_customer']; ?>
">
                <img class="button_img" src="./images/common/tick.png" alt="" /> 
                <?php echo $this->_tpl_vars['LANG']['save']; ?>

            </button>

            <input type="hidden" name="op" value="edit_customer">
        
            <a href="./index.php?module=customers&amp;view=manage" class="negative">
                <img src="./images/common/cross.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['cancel']; ?>

            </a>
    
        </td>
    </tr>
</table>

</form>
<?php endif; ?>