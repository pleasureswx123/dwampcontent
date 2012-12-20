<?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\index4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2551850a86554863944-85771199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2334002bc538f0ef74e487f11e16a1a7248b5c1b' => 
    array (
      0 => '.\\templates\\index4.tpl',
      1 => 1353213679,
      2 => 'file',
    ),
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1353212861,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1353204261,
      2 => 'file',
    ),
    'a6d2cf240ddc49673318e202407cd30b296cbeef' => 
    array (
      0 => '.\\templates\\slide.tpl',
      1 => 1353043623,
      2 => 'file',
    ),
    '31326a43659bd6d77ced2d957596c537ee5c78c3' => 
    array (
      0 => '.\\templates\\ulitem.tpl',
      1 => 1352975728,
      2 => 'file',
    ),
    '914017260668a913c7c877104d6464438316bbe7' => 
    array (
      0 => '.\\templates\\comment.tpl',
      1 => 1353031714,
      2 => 'file',
    ),
    '28e3ada2be70241950a138ac4e43d99398b77b40' => 
    array (
      0 => '.\\templates\\attention.tpl',
      1 => 1353039874,
      2 => 'file',
    ),
    'fe0dba882bdfdba8d385701628f6e1899c4da66d' => 
    array (
      0 => '.\\templates\\rankitem.tpl',
      1 => 1353062427,
      2 => 'file',
    ),
    '4c20bf41bbeed2156d1155f252d37aca2a6ead66' => 
    array (
      0 => '.\\templates\\rightside.tpl',
      1 => 1353209869,
      2 => 'file',
    ),
    'bf98b5767697e5089183b5ff4047ba246d0df2d7' => 
    array (
      0 => '.\\templates\\registration.tpl',
      1 => 1353293259,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1353204188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2551850a86554863944-85771199',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a865549662f7_90430301',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a865549662f7_90430301')) {function content_50a865549662f7_90430301($_smarty_tpl) {?>
	<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '2551850a86554863944-85771199');
content_50a99ef64a9ba7_05198977($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "header.tpl" */?>

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
		
	
		<?php /*  Call merged included template "registration.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('registration.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '2551850a86554863944-85771199');
content_50a99ef6530212_92404723($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "registration.tpl" */?>
	

		</div>
	</div>		
</div>

	<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '2551850a86554863944-85771199');
content_50a99ef6542744_52938341($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef64a9ba7_05198977')) {function content_50a99ef64a9ba7_05198977($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> 开心网  燃烧吧骚年!</title>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <meta name="generator" content="editplus" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="http://s.kaixin001.com.cn/css/kxcommon-0589ac06a.css" rel="stylesheet" type="text/css" />
  <link href="http://s.kaixin001.com.cn/css/kxcomment-001360cdb.css" rel="stylesheet" type="text/css" />
  <link href="http://s.kaixin001.com.cn/css/kxindex-017028428.css" rel="stylesheet" type="text/css" />
  <link href="http://s.kaixin001.com.cn/css/records-36.css" rel="stylesheet" type="text/css" />
  <script src="http://s.kaixin001.com.cn/js/forks/home/kxbase-00275635d.js" type="text/javascript"></script>
  <link href="templates/index.css" rel="stylesheet" type="text/css" />
 </head>

 <body class="act_bg">
<!------------------------ header con ------------------------>
<div class="act_hd">
<style type="text/css">
#awardHd{ background:url(http://img.kaixin001.com.cn/i/spt_hd_09.png) repeat-x 0 -795px; height:39px; text-align:center; position:relative; z-index:10;}
#awardHd .wrap{ background:url(http://img.kaixin001.com.cn/i/spt_hd_09.png) repeat-x 0 -795px; height:39px; width:1005px; margin:0 auto;}
#awardHd a.logo{width:106px; height:36px; background:url(http://img1.kaixin001.com.cn/i4/chineseValentinesDay/act_logo.png) no-repeat; margin-top:1px; float:left; display:block; text-indent:-99999em;}
.hdNav{ line-height:39px; color:#fff; float:right; margin-top:8px;}
#hdNav a:hover{text-decoration:none!important}
.hdNavMenu{float:left; position:relative; height:26px; line-height:26px; color:#fff;}
.hdNavMenu .serv_sub{left:auto; right:-1px;}
.hdNavMenuBar{float:left; height:26px; line-height:26px;}
.hdNavMenu .hdSelc{display:inline-block; padding:0 8px; color:#fff; text-decoration:none;}
.hdNavMenu .hdSelc:hover{color:#fff;}
.hdNavMenu .on{background:#f094a3;}
#award_subiframe{ position:absolute; z-index:80; background:#fff; top:26px; right:-1px; width:112px; }
#award_sub{width:110px; z-index:100;}
#award_sub li a{text-indent:0; padding-left:5px; width:110px; margin:0;}
#award_sub li a span{zoom:1; cursor:pointer;}
</style>
<div id="awardHd">
<div class="wrap clearfix">
<a href="http://www.kaixin001.com/" class="logo" title="开心网首页" target="_blank">开心网</a>
<div class="hdNav">
<div class="hdNavMenu mr10">你好，商文学</div><div class="hdNavMenu"><a class="hdSelc" href="/home/?uid=129925482" target="_blank">个人首页</a></div><div class="hdNavMenuBar">|</div><div id="moreAward" class="hdNavMenu"><a class="hdSelc" target="_blank" href="http://www.kaixin001.com/page/events2.php">更多活动</a>
<iframe scrolling="no" frameborder="0" style="display:none;" src="about:blank" id="award_subiframe"></iframe><ul class="serv_sub" id="award_sub" style="display: none;">
<li style="display:block;"><a href="http://www.kaixin001.com/baojun?rf=act11" target="_blank"><img align="absmiddle" title="" src="http://img.kaixin001.com.cn/i3/cpm2/2011/0131-baojun-gengduohuodong.gif"> <span>晒照片赢iPod</span></a></li>
<li style="display:block;"><a href="http://www.kaixin001.com/award2011/5201314/?rf=act11" target="_blank"><img align="absmiddle" title="" src="http://img.kaixin001.com.cn/i3/cpm2/2011/0105-piaorou=gengduo.jpg"> <span>不一样的表白</span></a></li>
</ul>
</div><div class="hdNavMenuBar">|</div><div class="hdNavMenu"><a class="hdSelc" najax="1" href="/login/logout.php">退出</a></div>
</div>
</div>
</div>
<script type="text/javascript">
var hasAct = "1";
hasAct = parseInt(hasAct,10);
$j(".hdNavMenu").bind("mouseover",function(){
var opt = $j(this).find(".serv_sub");
var selc = $j(this).find(".hdSelc");
if(opt[0] && hasAct){
selc.addClass("on");
opt.show(1,function(){
var ulHeight = parseInt(opt.css('height')) + 2 ;
$j("#award_subiframe").css( "height" , ulHeight ).show();
selc.bind("mouseover", function (event) {
event.stopPropagation();
});
$j(document).bind("mouseover",function(){
opt.hide();
selc.removeClass("on");
$j("#award_subiframe").hide();
//tspan.fadeOut(100);
$j(document).unbind("mouseover");
selc.unbind("mouseover");
});
opt.bind("mouseover", function (event) {
event.stopPropagation();
});
});
}
})
</script>
</div>


<!------------------------ main con ------------------------>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\slide.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef64be791_97589329')) {function content_50a99ef64be791_97589329($_smarty_tpl) {?><!-- { start slide flash -->
<div class="act_slide overfix">
	<div class="act_slide_l act_lf">
		<a href="" style="display:block"><img src="templates/img/act_slide_l_img001.jpg" alt="img1" /></a>
		<a href=""><img src="templates/img/act_slide_l_img002.jpg" alt="img2" /></a>
		<a href=""><img src="templates/img/act_slide_l_img003.jpg" alt="img3" /></a>
		<a href=""><img src="templates/img/act_slide_l_img004.jpg" alt="img4" /></a>
	</div>
	<ul class="act_slide_r overfix">
		<li class="ahover"><a href="">第一次大赛内容招募站圆满收官</a></li>
		<li><a href="">北京招募站第二场莫艳琳助内蒙男孩圆梦</a></li>
		<li><a href="">周老年达人唱主角强强相争晋级赛</a></li>
		<li><a href="">上海站第三波招募高手过招直通难</a></li>
	</ul>
</div>
<script type="text/javascript">
	$j(function () {
		var timer;
		$j('.act_slide_r').delegate('li','mouseenter',function () {
			var me = this;
			timer = setTimeout( function(){
				var thisID = $j(me).index();
				console.log( 'index:' + thisID );
				$j(me).addClass('ahover').siblings().removeClass('ahover');
				var a = $j('.act_slide_l a').eq(thisID);
				var b = $j('.act_slide_l a').eq(thisID).siblings();
				a.stop(true, true);
				b.stop(true, true);
				console.log( a );
				b.fadeOut(300,function () {
					a.fadeIn('slow');
				});
			}, 100 );
		});
		$j('.act_slide_r').delegate('li','mouseleave',function(){
			clearTimeout( timer );
		} );
	})
</script>
<!-- end } --><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\ulitem.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef64cca06_76443717')) {function content_50a99ef64cca06_76443717($_smarty_tpl) {?><ul class="act_item clearfix">
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="templates/img/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="templates/img/actimgnone.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="templates/img/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="templates/img/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="templates/img/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="templates/img/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="templates/img/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="templates/img/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
</ul><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\ulitem.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef64dc445_85995310')) {function content_50a99ef64dc445_85995310($_smarty_tpl) {?><ul class="act_item clearfix">
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="templates/img/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="templates/img/actimgnone.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="templates/img/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="templates/img/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="templates/img/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="templates/img/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="templates/img/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="templates/img/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
</ul><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\comment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef64ec480_43408850')) {function content_50a99ef64ec480_43408850($_smarty_tpl) {?><!-- { start 开心评论 -->
<div class="mt10">
	<div class="clearfix h2box">
		<h2 class="act_lf">开心评论</h2>
	</div>
	<div class="act_box">
		<div class="">
			sadfsaf
		</div>
	</div>
</div>
<!-- end } -->
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\rightside.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef64f9ee6_96192810')) {function content_50a99ef64f9ee6_96192810($_smarty_tpl) {?><div class="overfix">
	<div class="act_attention_wrap border_tp1">
		
			<?php /*  Call merged included template "attention.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('attention.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '2551850a86554863944-85771199');
content_50a99ef6503299_34169237($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "attention.tpl" */?>
		
	</div>
	<div class="mt10 border_tp1">
		
			<?php /*  Call merged included template "rankitem.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('rankitem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '2551850a86554863944-85771199');
content_50a99ef65156c4_21602041($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "rankitem.tpl" */?>
		
	</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\attention.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef6503299_34169237')) {function content_50a99ef6503299_34169237($_smarty_tpl) {?><!-- { start 开心人关注 -->
<div class="clearfix h3box">
	<h3 class="act_lf">开心人关注</h3>
</div>
<div class="act_box">
	<ul class="act_attention">
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">刘子君刘子君</a>投票给<a href="" class="sl">刘子君刘子君刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">刘子君刘子君</a>投票给<a href="" class="sl">刘子君刘子君刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">刘子君刘子君</a>投票给<a href="" class="sl">刘子君刘子君刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="templates/img/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
	</ul>
</div>
<!-- end } -->

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\rankitem.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef65156c4_21602041')) {function content_50a99ef65156c4_21602041($_smarty_tpl) {?><!-- { start 人气排行 -->
<div class="clearfix h3box">
	<h3 class="act_lf">人气排行</h3>
</div>
<div class="act_box">
	<ul class="act_rankitem">
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="templates/img/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">张思瑶</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学</p>
					<p>票数：1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="为TA一票" class="btn_act02"></a>
				</div>
			</div>
		</li>
	</ul>
</div>
<!-- end } -->
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\registration.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef6530212_92404723')) {function content_50a99ef6530212_92404723($_smarty_tpl) {?><!-- { start registration -->
<div class="act_p10_45_100">
	<h4>我要报名</h4>
	<div class="c3 p20">
		<form method="" enctype=""  action="">
			<div class="mt10 actformwrap">
				<p class="mt5 mb10">请完善以下信息，以便工作人员及时与你联系，确保报名成功(<span class="actcolred">*</span>标注的项目为必填)</p>
				<p>
					<label class="reg_label">真实姓名：<span class="actcolred">*</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写您的真实姓名</span>
				</p>
				<p>
					<label class="reg_label">手机号码：<span class="actcolred">*</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写您的常用手机号码，以便及时与你联系</span>
				</p>
				<p>
					<label class="reg_label">所在学校：<span class="actcolred">*</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note"></span>
				</p>
				<p>
					<label class="reg_label">电子邮箱：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写您的常用电子邮箱</span>
				</p>
				<p>
					<label class="reg_label">QQ/MSN：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写您的QQ或MSN</span>
				</p>
				<p class="mt5 mb10">提交你的才艺视频，让大家更好地了解你</p>
				<p>
					<label class="reg_label">视频1标题：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写你的才艺视频标题</span>
				</p>
				<p>
					<label class="reg_label">视频1链接：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text" />
					<span class="reg_note">请将视频页面地址栏中的链接复制到此处</span>
				</p>
				<p>
					<label class="reg_label"></label>
					<span class="actbtn_add"><img src="templates/img/btn_acticon.png" alt="添加" />&nbsp;<a href="" class="sl">添加</a></span>
				</p>
				<p class="mt20">
					<label class="reg_label"></label>
					<input type="checkbox" id="joinfans" name="joinfans" /><span class="checkbox_note" for="joinfans">加开心校园为粉丝</span>
				</p>
				<p class="mt5">
					<label class="reg_label"></label>
					<span class="kxbtn kxbtn_m"><button class="normal" type="submit"><em><span><b><i>提交</i></b></span></em></button></span>
					<span class="kxbtn kxbtn_m ml20"><button class="normal" type="button"><em><span><b><i>取消</i></b></span></em></button></span>
				</p>
			</div>
		</form>
	</div>
</div>
<!-- end } --><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 02:52:38
         compiled from ".\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a99ef6542744_52938341')) {function content_50a99ef6542744_52938341($_smarty_tpl) {?><!------------------------ footer con ------------------------>
<div class="act_ft">
 <div class="gh_footer">
<div class="gqWrap" id="footer" style="border:none;">
<div class="left">
<a href="/s/about.html" target="_blank" title="关于我们">关于我们</a>
<a href="/mobile/" title="手机版">手机版</a>
<a href="/platform/" target="_blank" title="开放平台">开放平台</a>
<a href="/promotion/" target="_blank" title="自助广告">自助广告</a>
<a href="http://zhaopin.kaixin001.com" target="_blank" title="招聘">招聘</a>
<a href="/t/cronline.html" target="_blank" title="客服">客服</a>
<a href="/t/help.html" target="_blank" title="帮助">帮助</a>
</div>
<div class="right">&copy;2012 开心网 &nbsp;<a class="c6" href="http://www.miibeian.gov.cn" target="_blank">京ICP证080482号</a>&nbsp;&nbsp;京公网安备110000000003号</div>
</div>
</div>
</div>
 </body>
</html><?php }} ?>