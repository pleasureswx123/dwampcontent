<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 04:07:51
         compiled from ".\templates\side_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2783150bec8970c9b16-54951967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e2a04254a21eba2b3b2dc4cadb0297be3c7b603' => 
    array (
      0 => '.\\templates\\side_right.tpl',
      1 => 1354680415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2783150bec8970c9b16-54951967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bec8971084e5_50066207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bec8971084e5_50066207')) {function content_50bec8971084e5_50066207($_smarty_tpl) {?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['type']->value==1){?><?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("silde_block1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>

<?php ob_start();?><?php }?><?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>

<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['type']->value==2){?><?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>

    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("silde_block2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

<?php ob_start();?><?php }?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['type']->value==3){?><?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>

    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("silde_block3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

<?php ob_start();?><?php }?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

<?php }} ?>