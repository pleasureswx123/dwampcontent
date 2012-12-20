<?php /* Smarty version Smarty-3.1.12, created on 2012-12-11 06:15:00
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2319650c54836252966-93564569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1355137240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2319650c54836252966-93564569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c548363e4e01_67995553',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c548363e4e01_67995553')) {function content_50c548363e4e01_67995553($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- { start 20121220 modify reg -->
<style type="text/css">
    body {background:#f9f9f9; font-family:Arial; }
    .reg_main {background:#fff url(img/bg_reg_conmain.png) no-repeat 610px 50px; border:1px solid #e0e0e0; border-radius:10px; box-shadow:0 0 3px 0 #eaeaea; width:885px; margin:25px auto 5px; padding:45px 60px; min-height:400px; height:auto!important; height:400px;}
    .reg_Contwrap {float:left; width:100%; margin-right:-100%;}
    .reg_Maincont {margin-right:320px; padding:0 15px 0 10px;}
    .reg_Silderight {width:320px; float:right;}
    .reg_Silderight_con {padding:30px 0 0 40px;}
</style>
<div class="reg_main clearfix">
    <div class="reg_Contwrap">
        <div class="reg_Maincont clearfix">
            <!-- { start blockRegMainCon -->
           <?php echo $_smarty_tpl->getSubTemplate ("block_regMainCon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- end } -->
        </div>
    </div>
    <div class="reg_Silderight">
        <div class="reg_Silderight_con clearfix">
            <!-- { start rightside -->
            <?php echo $_smarty_tpl->getSubTemplate ("side_regRight.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- end } -->
        </div>
    </div>
</div>
<!-- end } -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>