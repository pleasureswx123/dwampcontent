<?php /* Smarty version Smarty-3.1.12, created on 2012-11-18 02:19:05
         compiled from ".\templates\layout\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:860350a83d814ca344-88914192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c142569c70fef6854f696c93fffcbe9efb2862d' => 
    array (
      0 => '.\\templates\\layout\\index.tpl',
      1 => 1353205139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '860350a83d814ca344-88914192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a83d8159b112_02029472',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a83d8159b112_02029472')) {function content_50a83d8159b112_02029472($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="act_main_bg">
	<div class="act_banner">
		<h1>开心网  燃烧吧骚年!</h1>
		<div class="act_banner_con">
			<p></p>
		</div>
	</div>
	<div class="act_wrap">
		<div class="act_nav_wrap">
			<ul class="act_nav clrfix">
				<li class="nav_ahover"><a href="javascript:void(0)" class="sunnav1">首页</a></li>
				<li class=""><a href="javascript:void(0)" class="sunnav2">我的照片</a></li>
				<li class=""><a href="javascript:void(0)" class="sunnav3">好友的照片</a></li>
				<li class=""><a href="javascript:void(0)" class="sunnav4">同城照片</a></li>
			</ul>
			<a href="" class="btn_registration"></a>
			<a href="" class="btn_submitvideo"></a>
		</div>
		<script type="text/javascript">
			$j(function () {
				$j('.act_nav li').click(function () {
					$j(this).attr('class','nav_ahover').siblings().removeClass('nav_ahover');
				});
				$j('.btn_registration').hover(function () {
					$j(this).toggleClass('btn_registration1');
				})
				$j('.btn_submitvideo').hover(function () {
					$j(this).toggleClass('btn_submitvideo1');
				})
			})
		</script>
		<div class="overfix act_maincon_wrap">
		
		
		</div>
	</div>		
</div>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>