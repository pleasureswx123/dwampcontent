<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 07:08:09
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:562350bdcacfb130d6-25713502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1354691284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562350bdcacfb130d6-25713502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bdcacfbd8337_55882267',
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bdcacfbd8337_55882267')) {function content_50bdcacfbd8337_55882267($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

<!-- { start kxmaincontent -->
<div class="kx_wd960 clfix pb100 pt10">
    <div class="kx_cnmain">
        <div class="kx_content">
        <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['type']->value==1){?><?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>

            <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('block_left1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>

        <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?><?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>

            <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('block_left2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

        <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['type']->value==3){?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

            <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('block_left3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>

        <?php ob_start();?><?php }?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

        </div>
    </div>
    <div class="kx_sideright">
        <div class="pt52"> 
            <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('side_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

        </div>
    </div>
</div>
<!-- end } -->
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
<?php }} ?>