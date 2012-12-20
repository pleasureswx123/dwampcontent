<?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\actioninfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183850a9a29b9f30f4-51977558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f2fcf205d1e1e73bf3eb4a872952d269fd4613' => 
    array (
      0 => '.\\templates\\actioninfo.tpl',
      1 => 1353296976,
      2 => 'file',
    ),
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1353298426,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1353304084,
      2 => 'file',
    ),
    'a6d2cf240ddc49673318e202407cd30b296cbeef' => 
    array (
      0 => '.\\templates\\slide.tpl',
      1 => 1353304406,
      2 => 'file',
    ),
    '31326a43659bd6d77ced2d957596c537ee5c78c3' => 
    array (
      0 => '.\\templates\\ulitem.tpl',
      1 => 1353304373,
      2 => 'file',
    ),
    '914017260668a913c7c877104d6464438316bbe7' => 
    array (
      0 => '.\\templates\\comment.tpl',
      1 => 1353306038,
      2 => 'file',
    ),
    '28e3ada2be70241950a138ac4e43d99398b77b40' => 
    array (
      0 => '.\\templates\\attention.tpl',
      1 => 1353304390,
      2 => 'file',
    ),
    'fe0dba882bdfdba8d385701628f6e1899c4da66d' => 
    array (
      0 => '.\\templates\\rankitem.tpl',
      1 => 1353304427,
      2 => 'file',
    ),
    '4c20bf41bbeed2156d1155f252d37aca2a6ead66' => 
    array (
      0 => '.\\templates\\rightside.tpl',
      1 => 1353209869,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1353204188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183850a9a29b9f30f4-51977558',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a9a29bb16cb5_04661285',
  'variables' => 
  array (
    'title' => 0,
    'thisIndex' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a9a29bb16cb5_04661285')) {function content_50a9a29bb16cb5_04661285($_smarty_tpl) {?>
	<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '183850a9a29b9f30f4-51977558');
content_50a9cfc1d79d81_22500697($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "header.tpl" */?>

<div class="act_main_bg">
	<div class="act_banner">
		<h1> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
		<div class="act_banner_con">
			<p></p>
		</div>
	</div>
	<div class="act_wrap">
		<div class="act_nav_wrap">
			<ul class="act_nav clrfix">
				<li class="<?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==0){?>nav_ahover<?php }?>"><a href="http://localhost/act1/act1/index.php?type=0" class="sunnav1">首页</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==1){?>nav_ahover<?php }?>"><a href="http://localhost/act1/act1/index.php?type=1" class="sunnav2">活动介绍</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==2){?>nav_ahover<?php }?>"><a href="http://localhost/act1/act1/index.php?type=2" class="sunnav3">激情达人</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==3){?>nav_ahover<?php }?>"><a href="http://localhost/act1/act1/index.php?type=3" class="sunnav4">决赛评委</a></li>
			</ul>
			<a href="http://localhost/act1/act1/index.php?type=4" class="btn_registration <?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==4){?>btn_registration1<?php }?>" title="我要报名"></a>
			<a href="http://localhost/act1/act1/index.php?type=5" class="btn_submitvideo <?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==5){?>btn_submitvideo1<?php }?>" title="提交视频"></a>
		</div>
		<script type="text/javascript">
			$j(function () {
				$j('.btn_registration').hover(function () {
					$j(this).toggleClass('btn_registration1');
				})
				$j('.btn_submitvideo').hover(function () {
					$j(this).toggleClass('btn_submitvideo1');
				})
			})
		</script>
		<div class="overfix act_maincon_wrap">
		
<!-- { start registration -->
<div class="act_p10_45_100">
	<h4>活动介绍</h4>
	<div class="actioninfo">
		<p style="padding:0; text-indent:0;">全面皆腐，无处不腐，基情四射！<br />“腐”已经成为一种潮流，如今的世界各个角落，卖腐已经成为一种趋势。<br />据统计，在京的高校中40%的男生是同性恋或双性恋，“基情”是现下的主基调。<br />开心网“光棍节”主题活动，“燃烧吧，骚年”为痴情腐女和基情的男淫们提供一个展示的平台。<br />即刻登陆 <a href="http://www.kaixin001.com" class="sl">开心网</a> 站内搜索“开心校园”，关注 <a href="" class="sl">燃烧吧，骚年”开心网2012 年“光棍节”</a> 高校配对选秀活动</p>
		<h6>报名时间：</h6>
		<p>2012年11月8日 至 2012年12月 15日</p>
		<h5>活动规则</h5>
		<h6>报名方式： </h6>
		<p>1、网络报名，开心网活动专题页将于11月16日前后上线，准确时间请随时关注开心校园机构主页，大家可以直接通过网络报名，填写完善个人资料，并且提交才艺展示视频，即可参加初赛；</p>
		<p>2、开心校园短消息报名或者邮箱报名，以短消息的形式发送个人资料加视频链接到开心校园或者邮箱xiaoyuan@corp.kaixin001.com。</p>
		<p>3、复赛路演现场也接受现场报名。</p>
		<h6>评比方式：  </h6>
		<p>1、我们将通过网友投票对作品进行筛选，并将通过电话、邮件及开心网短消息的形式通知获得入选复赛资格的选手。</p>
		<p>2、进入复赛的选手，将参与校园巡演拉票活动，活动现场将有评委对其组合表现进行评分。</p>
		<p>3、复赛巡演活动结束后，我们会根据选手第二轮线上投票和其现场分数，进行综合评定，确定进入决赛的选手。</p>
		<p>4、晋级决赛的选手，将会在决赛现场进行两轮才艺展示、并参与现场互动，由评委对其组合现场表现综合评定打分，分数前三名即为冠亚季军，其他选手收获“基情”鼓励奖。</p>
		<h6>奖励方式： </h6>
		<p>1、决赛第一名将获得3222的 “基”金奖励；</p>
		<p>2、决赛第二名将或者2222的 “基”金奖励；</p>
		<p>3、决赛第三名将或者1222 的 “基”金奖励；</p>
		<p>4、晋级决赛的选手，我们为每个人送上“基情”鼓励奖。</p>
		<h6>报名要求:  </h6>
		<p>1、高校在读大学生，年龄不限，自信，有才艺。 </p>
		<p>2、要求必须以两男或两女双人组合形式报名参赛。 </p>
		<p>3、才艺类型不限，但要求必须是报名组合合作演出。 </p>
		<h5>报名要求:  </h5>
		<h6>Q：如何获得更多人支持？</h6>
		<p>A：提交基情展示视频后，可以通过开心网的强大社交平台来展示自己，获得更多粉丝的支持，选手的人气（得票数）是筛选时一个最关键的衡量标准。 </p>
		<h6>Q：如何利用强大的开心网社交平台帮你提升人气？</h6>
		<p>A：如果你相信自己是位实至名归的“基情骚年”，那么你可以采用一些小“诡计”来争取更多的网友为你投票！通过丰富你的个人主页，上传照片或者将自己的基情视频转贴给好友，每周获得网友票选支持最多的10位骚年选手，我们将直接推荐给“燃烧吧，骚年”决赛！ </p>
	</div>
</div>
<!-- end } -->

		</div>
	</div>		
</div>

	<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '183850a9a29b9f30f4-51977558');
content_50a9cfc1e61d47_38951787($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1d79d81_22500697')) {function content_50a9cfc1d79d81_22500697($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
  <link href="http://s.kaixin002.com.cn/css/guangun.css" rel="stylesheet" type="text/css" />
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

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\slide.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1de14e8_11931769')) {function content_50a9cfc1de14e8_11931769($_smarty_tpl) {?><!-- { start slide flash -->
<div class="act_slide overfix">
	<div class="act_slide_l act_lf">
		<a href="" style="display:block"><img src="http://img1.kaixin001.com.cn/i4/guangun/act_slide_l_img001.jpg" alt="img1" /></a>
		<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/act_slide_l_img002.jpg" alt="img2" /></a>
		<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/act_slide_l_img003.jpg" alt="img3" /></a>
		<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/act_slide_l_img004.jpg" alt="img4" /></a>
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
<!-- end } --><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\ulitem.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1df1694_14323432')) {function content_50a9cfc1df1694_14323432($_smarty_tpl) {?><ul class="act_item clearfix">
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgnone.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
</ul><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\ulitem.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e034c0_94173314')) {function content_50a9cfc1e034c0_94173314($_smarty_tpl) {?><ul class="act_item clearfix">
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学北京邮电大学北京邮电大学北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgnone.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="姓名" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">何逸璇</a>
				<p class="to_ellipsis">北京邮电大学</p>
				<p>票数：825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="图片名称" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">骑马舞</p>
				<a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a>
			</div>
		</div>
	</li>
</ul><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\comment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e11d15_27771518')) {function content_50a9cfc1e11d15_27771518($_smarty_tpl) {?><!-- { start 开心评论 -->
<div class="mt10">
	<div class="clearfix h2box">
		<h2 class="act_lf">开心评论</h2>
	</div>
	<div class="act_box">	
	

<iframe allowtransparency="" id="kaixin001_commentbox_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:550px;width:620px;" src="http://www.kaixin001.com/rest/commentbox.php?appkey=935101758902afa5dcc144718adfab27&amp;xid=0&amp;width=300&amp;height=550&amp;url=http%3A//www.kaixin001.com/act/daren2011&amp;title=2011%E4%B8%AD%E5%9B%BD%E8%BE%BE%E4%BA%BA%E7%A7%80%20-%20%E5%BC%80%E5%BF%83%E7%BD%91"></iframe>
<script type="text/javascript">
	$j(function() {
		$j("#kaixin001_commentbox_iframe").contents().find(".commentBox_hd").css("display","none");
	})
</script>



	</div>
</div>
<!-- end } -->
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\rightside.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e20640_40189888')) {function content_50a9cfc1e20640_40189888($_smarty_tpl) {?><div class="overfix">
	<div class="act_attention_wrap border_tp1">
		
			<?php /*  Call merged included template "attention.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('attention.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '183850a9a29b9f30f4-51977558');
content_50a9cfc1e2c8a4_47368293($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "attention.tpl" */?>
		
	</div>
	<div class="mt10 border_tp1">
		
			<?php /*  Call merged included template "rankitem.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('rankitem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '183850a9a29b9f30f4-51977558');
content_50a9cfc1e3ea21_74285062($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "rankitem.tpl" */?>
		
	</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\attention.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e2c8a4_47368293')) {function content_50a9cfc1e2c8a4_47368293($_smarty_tpl) {?><!-- { start 开心人关注 -->
<div class="clearfix h3box">
	<h3 class="act_lf">开心人关注</h3>
</div>
<div class="act_box">
	<ul class="act_attention">
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">刘子君刘子君</a>投票给<a href="" class="sl">刘子君刘子君刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">刘子君刘子君</a>投票给<a href="" class="sl">刘子君刘子君刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">刘子君刘子君</a>投票给<a href="" class="sl">刘子君刘子君刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="名称" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">李菊芳</a>投票给<a href="" class="sl">刘子君</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
	</ul>
</div>
<!-- end } -->

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\rankitem.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e3ea21_74285062')) {function content_50a9cfc1e3ea21_74285062($_smarty_tpl) {?><!-- { start 人气排行 -->
<div class="clearfix h3box">
	<h3 class="act_lf">人气排行</h3>
</div>
<div class="act_box">
	<ul class="act_rankitem">
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e61d47_38951787')) {function content_50a9cfc1e61d47_38951787($_smarty_tpl) {?><!------------------------ footer con ------------------------>
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