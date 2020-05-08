<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-05-08 19:11:39
         compiled from "/var/www/html/okayCMC/design/okay_shop/html/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21428376335eb5807546ca42-48238242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac22e60ca4f822af20aedb4cc49687a1fc26d1f' => 
    array (
      0 => '/var/www/html/okayCMC/design/okay_shop/html/user.tpl',
      1 => 1588954297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21428376335eb5807546ca42-48238242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5eb580754a4f50_14104067',
  'variables' => 
  array (
    'lang' => 0,
    'error' => 0,
    'name' => 0,
    'email' => 0,
    'phone' => 0,
    'address' => 0,
    'lang_link' => 0,
    'order' => 0,
    'orders_status' => 0,
    'orders' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb580754a4f50_14104067')) {function content_5eb580754a4f50_14104067($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->user_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<h1 class="h1">
    <span data-language="user_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_header;?>
</span>
</h1>

<div class="block padding">
    <div class="row">
        <div class="col-lg-5">

            
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="message_error">
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
                        <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
                        <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_password') {?>
                        <span data-language="form_enter_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='user_exists') {?>
                        <span data-language="register_user_registered"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_user_registered;?>
</span>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    <?php }?>
                </div>
            <?php }?>

            <form method="post" class="fn_validate_register">
            
                
                <div class="form_group">
                    <input class="form_input placeholder_focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="name" type="text" data-language="form_name" />
                    <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                </div>

                
                <div class="form_group">
                    <input class="form_input placeholder_focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="email" type="text" data-language="form_email" />
                    <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                </div>

                
                <div class="form_group">
                    <input class="form_input placeholder_focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="phone" type="text" data-language="form_phone" />
                    <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
</span>
                </div>

                
                <div class="form_group">
                    <input class="form_input placeholder_focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="address" type="text" data-language="form_address" />
                    <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
</span>
                </div>

                
                <div class="form_group">
                    <p class="change_pass" onclick="$('#password').toggle();return false;"><span data-language="user_change_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_change_password;?>
</span></p>

                    <input class="form_input " id="password" value="" name="password" type="password" style="display:none;" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->user_change_password;?>
"/>
                </div>

                <div class="form_group">
                    
                    <input type="submit" class="button" name="user_save" data-language="form_save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_save;?>
">

                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/logout" class="button fright" data-language="user_logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_logout;?>
</a>
                </div>
            </form>
        </div>

        
        <div class="col-lg-4">
            <table class="table">
                <thead>
                <tr>
                    <th>
                        <span data-language="count_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->count_order;?>
</span>
                    </th>
                </tr>
                </thead>

                    <tr>
                        
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['order']->value->paid==4) {?>
                                <span data-language="status_paid"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_paid;?>
</span>,
                            <?php }?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orders_status']->value[$_smarty_tpl->tpl_vars['order']->value->status_id]->name, ENT_QUOTES, 'UTF-8', true);?>

                        </td>
                    </tr>

            </table>
        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
            <div class="col-lg-7">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <span data-language="user_number_of_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_number_of_order;?>
</span>
                            </th>
                            <th>
                                <span data-language="user_order_date"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_date;?>
</span>
                            </th>
                            <th>
                                <span data-language="user_order_status"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_status;?>
</span>
                            </th>
                        </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                        <tr>
                            
                            <td>
                                <a href='<?php echo $_smarty_tpl->tpl_vars['language']->value->label;?>
/order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
'><span data-language="user_order_number"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_number;?>
</span><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
                            </td>

                            
                            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
</td>

                            
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>
                                    <span data-language="status_paid"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_paid;?>
</span>,
                                <?php }?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orders_status']->value[$_smarty_tpl->tpl_vars['order']->value->status_id]->name, ENT_QUOTES, 'UTF-8', true);?>

                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        <?php }?>
    </div>
</div><?php }} ?>
