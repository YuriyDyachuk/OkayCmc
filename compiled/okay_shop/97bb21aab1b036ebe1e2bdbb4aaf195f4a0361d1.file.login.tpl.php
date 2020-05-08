<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-05-08 18:50:19
         compiled from "/var/www/html/okayCMC/design/okay_shop/html/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6808270595eb57fbbc390d6-87228800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97bb21aab1b036ebe1e2bdbb4aaf195f4a0361d1' => 
    array (
      0 => '/var/www/html/okayCMC/design/okay_shop/html/login.tpl',
      1 => 1588952921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6808270595eb57fbbc390d6-87228800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'error' => 0,
    'email' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5eb57fbbc66d49_25497892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb57fbbc66d49_25497892')) {function content_5eb57fbbc66d49_25497892($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/user/login", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->login_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<h1 class="h1"><span data-language="login_enter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_enter;?>
</span></h1>

<div class="block padding">
    <div class="row">
        <div class="col-md-6">
            
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="message_error">
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='login_incorrect') {?>
                        <span data-language="login_error_pass"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_error_pass;?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='user_disabled') {?>
                        <span data-language="login_pass_not_active"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_pass_not_active;?>
</span>
                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            <?php }?>

            <form method="post" class="clearfix fn_validate_login">

                <div class="form_group">
                    
                    <input class="form_input placeholder_focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" />
                    <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                </div>

                <div class="form_group">
                    
                    <input class="form_input placeholder_focus" type="password" name="password" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
" value="" data-language="form_password"/>
                    <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_password;?>
*</span>
                </div>

                
                <div class="form_group clearfix">
                    
                    <input type="submit" class="button" name="login" data-language="login_sign_in" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->login_sign_in;?>
">

                    
                    <a class="password_remind" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/password_remind" data-language="login_remind"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_remind;?>
</a>
                </div>    
            </form>
        </div>

        <div class="col-md-6">
            <div class="form_group">
                <span data-language="login_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_text;?>
</span>
            </div>

            
            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/register" class="button" data-language="login_registration"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_registration;?>
</a>
        </div>
    </div>
</div>
<?php }} ?>
