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
				<li class="<?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==0){?>nav_ahover<?php }?>"><a href="http://localhost/act1/act1/index.php?type=0" class="sunnav1">��ҳ</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==1){?>nav_ahover<?php }?>"><a href="http://localhost/act1/act1/index.php?type=1" class="sunnav2">�����</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==2){?>nav_ahover<?php }?>"><a href="http://localhost/act1/act1/index.php?type=2" class="sunnav3">�������</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==3){?>nav_ahover<?php }?>"><a href="http://localhost/act1/act1/index.php?type=3" class="sunnav4">������ί</a></li>
			</ul>
			<a href="http://localhost/act1/act1/index.php?type=4" class="btn_registration <?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==4){?>btn_registration1<?php }?>" title="��Ҫ����"></a>
			<a href="http://localhost/act1/act1/index.php?type=5" class="btn_submitvideo <?php if ($_smarty_tpl->tpl_vars['thisIndex']->value==5){?>btn_submitvideo1<?php }?>" title="�ύ��Ƶ"></a>
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
	<h4>�����</h4>
	<div class="actioninfo">
		<p style="padding:0; text-indent:0;">ȫ��Ը����޴��������������䣡<br />�������Ѿ���Ϊһ�ֳ�������������������䣬�����Ѿ���Ϊһ�����ơ�<br />��ͳ�ƣ��ھ��ĸ�У��40%��������ͬ������˫�����������顱�����µ���������<br />������������ڡ���������ȼ�հɣ�ɧ�ꡱΪ���鸯Ů�ͻ�����������ṩһ��չʾ��ƽ̨��<br />���̵�½ <a href="http://www.kaixin001.com" class="sl">������</a> վ������������У԰������ע <a href="" class="sl">ȼ�հɣ�ɧ�ꡱ������2012 �ꡰ����ڡ�</a> ��У���ѡ��</p>
		<h6>����ʱ�䣺</h6>
		<p>2012��11��8�� �� 2012��12�� 15��</p>
		<h5>�����</h5>
		<h6>������ʽ�� </h6>
		<p>1�����籨�����������ר��ҳ����11��16��ǰ�����ߣ�׼ȷʱ������ʱ��ע����У԰������ҳ����ҿ���ֱ��ͨ�����籨������д���Ƹ������ϣ������ύ����չʾ��Ƶ�����ɲμӳ�����</p>
		<p>2������У԰����Ϣ�����������䱨�����Զ���Ϣ����ʽ���͸������ϼ���Ƶ���ӵ�����У԰��������xiaoyuan@corp.kaixin001.com��</p>
		<p>3������·���ֳ�Ҳ�����ֳ�������</p>
		<h6>���ȷ�ʽ��  </h6>
		<p>1�����ǽ�ͨ������ͶƱ����Ʒ����ɸѡ������ͨ���绰���ʼ�������������Ϣ����ʽ֪ͨ�����ѡ�����ʸ��ѡ�֡�</p>
		<p>2�����븴����ѡ�֣�������У԰Ѳ����Ʊ�����ֳ�������ί������ϱ��ֽ������֡�</p>
		<p>3������Ѳ�ݻ���������ǻ����ѡ�ֵڶ�������ͶƱ�����ֳ������������ۺ�������ȷ�����������ѡ�֡�</p>
		<p>4������������ѡ�֣������ھ����ֳ��������ֲ���չʾ���������ֳ�����������ί��������ֳ������ۺ�������֣�����ǰ������Ϊ���Ǽ���������ѡ���ջ񡰻��顱��������</p>
		<h6>������ʽ�� </h6>
		<p>1��������һ�������3222�� ������������</p>
		<p>2�������ڶ���������2222�� ������������</p>
		<p>3������������������1222 �� ������������</p>
		<p>4������������ѡ�֣�����Ϊÿ�������ϡ����顱��������</p>
		<h6>����Ҫ��:  </h6>
		<p>1����У�ڶ���ѧ�������䲻�ޣ����ţ��в��ա� </p>
		<p>2��Ҫ����������л���Ů˫�������ʽ���������� </p>
		<p>3���������Ͳ��ޣ���Ҫ������Ǳ�����Ϻ����ݳ��� </p>
		<h5>����Ҫ��:  </h5>
		<h6>Q����λ�ø�����֧�֣�</h6>
		<p>A���ύ����չʾ��Ƶ�󣬿���ͨ����������ǿ���罻ƽ̨��չʾ�Լ�����ø����˿��֧�֣�ѡ�ֵ���������Ʊ������ɸѡʱһ����ؼ��ĺ�����׼�� </p>
		<h6>Q���������ǿ��Ŀ������罻ƽ̨��������������</h6>
		<p>A������������Լ���λʵ������ġ�����ɧ�ꡱ����ô����Բ���һЩС����ơ�����ȡ���������Ϊ��ͶƱ��ͨ���ḻ��ĸ�����ҳ���ϴ���Ƭ���߽��Լ��Ļ�����Ƶת�������ѣ�ÿ�ܻ������Ʊѡ֧������10λɧ��ѡ�֣����ǽ�ֱ���Ƽ�����ȼ�հɣ�ɧ�ꡱ������ </p>
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
<a href="http://www.kaixin001.com/" class="logo" title="��������ҳ" target="_blank">������</a>
<div class="hdNav">
<div class="hdNavMenu mr10">��ã�����ѧ</div><div class="hdNavMenu"><a class="hdSelc" href="/home/?uid=129925482" target="_blank">������ҳ</a></div><div class="hdNavMenuBar">|</div><div id="moreAward" class="hdNavMenu"><a class="hdSelc" target="_blank" href="http://www.kaixin001.com/page/events2.php">����</a>
<iframe scrolling="no" frameborder="0" style="display:none;" src="about:blank" id="award_subiframe"></iframe><ul class="serv_sub" id="award_sub" style="display: none;">
<li style="display:block;"><a href="http://www.kaixin001.com/baojun?rf=act11" target="_blank"><img align="absmiddle" title="" src="http://img.kaixin001.com.cn/i3/cpm2/2011/0131-baojun-gengduohuodong.gif"> <span>ɹ��ƬӮiPod</span></a></li>
<li style="display:block;"><a href="http://www.kaixin001.com/award2011/5201314/?rf=act11" target="_blank"><img align="absmiddle" title="" src="http://img.kaixin001.com.cn/i3/cpm2/2011/0105-piaorou=gengduo.jpg"> <span>��һ���ı��</span></a></li>
</ul>
</div><div class="hdNavMenuBar">|</div><div class="hdNavMenu"><a class="hdSelc" najax="1" href="/login/logout.php">�˳�</a></div>
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
		<li class="ahover"><a href="">��һ�δ���������ļվԲ���չ�</a></li>
		<li><a href="">������ļվ�ڶ���Ī�����������к�Բ��</a></li>
		<li><a href="">��������˳�����ǿǿ����������</a></li>
		<li><a href="">�Ϻ�վ��������ļ���ֹ���ֱͨ��</a></li>
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
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="����" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">�����</a>
				<p class="to_ellipsis">�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ</p>
				<p>Ʊ����825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgnone.jpg" alt="ͼƬ����" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">������</p>
				<a href="" title="ͶTAһƱ" class="btn_act01"></a>&emsp;<a href="" title="ΪTAһƱ" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="����" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">�����</a>
				<p class="to_ellipsis">�����ʵ��ѧ</p>
				<p>Ʊ����825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="ͼƬ����" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">������</p>
				<a href="" title="ͶTAһƱ" class="btn_act01"></a>&emsp;<a href="" title="ΪTAһƱ" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="����" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">�����</a>
				<p class="to_ellipsis">�����ʵ��ѧ</p>
				<p>Ʊ����825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="ͼƬ����" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">������</p>
				<a href="" title="ͶTAһƱ" class="btn_act01"></a>&emsp;<a href="" title="ΪTAһƱ" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="����" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">�����</a>
				<p class="to_ellipsis">�����ʵ��ѧ</p>
				<p>Ʊ����825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="ͼƬ����" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">������</p>
				<a href="" title="ͶTAһƱ" class="btn_act01"></a>&emsp;<a href="" title="ΪTAһƱ" class="btn_act02"></a>
			</div>
		</div>
	</li>
</ul><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\ulitem.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e034c0_94173314')) {function content_50a9cfc1e034c0_94173314($_smarty_tpl) {?><ul class="act_item clearfix">
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="����" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">�����</a>
				<p class="to_ellipsis">�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ</p>
				<p>Ʊ����825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgnone.jpg" alt="ͼƬ����" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">������</p>
				<a href="" title="ͶTAһƱ" class="btn_act01"></a>&emsp;<a href="" title="ΪTAһƱ" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="����" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">�����</a>
				<p class="to_ellipsis">�����ʵ��ѧ</p>
				<p>Ʊ����825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="ͼƬ����" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">������</p>
				<a href="" title="ͶTAһƱ" class="btn_act01"></a>&emsp;<a href="" title="ΪTAһƱ" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="����" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">�����</a>
				<p class="to_ellipsis">�����ʵ��ѧ</p>
				<p>Ʊ����825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="ͼƬ����" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">������</p>
				<a href="" title="ͶTAһƱ" class="btn_act01"></a>&emsp;<a href="" title="ΪTAһƱ" class="btn_act02"></a>
			</div>
		</div>
	</li>
	<li>
		<div class="overfix">
			<div class="act_lf block_l">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimgface001.png" alt="����" class="face72" /></a>
				<a href="" class="to_ellipsis sl p5_0_10">�����</a>
				<p class="to_ellipsis">�����ʵ��ѧ</p>
				<p>Ʊ����825</p>
			</div>
			<div class="overfix tac">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg001.jpg" alt="ͼƬ����" class="act_pic01" /></a>
				<p class="to_ellipsis act_p5_0">������</p>
				<a href="" title="ͶTAһƱ" class="btn_act01"></a>&emsp;<a href="" title="ΪTAһƱ" class="btn_act02"></a>
			</div>
		</div>
	</li>
</ul><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\comment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e11d15_27771518')) {function content_50a9cfc1e11d15_27771518($_smarty_tpl) {?><!-- { start �������� -->
<div class="mt10">
	<div class="clearfix h2box">
		<h2 class="act_lf">��������</h2>
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
<?php if ($_valid && !is_callable('content_50a9cfc1e2c8a4_47368293')) {function content_50a9cfc1e2c8a4_47368293($_smarty_tpl) {?><!-- { start �����˹�ע -->
<div class="clearfix h3box">
	<h3 class="act_lf">�����˹�ע</h3>
</div>
<div class="act_box">
	<ul class="act_attention">
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">���Ӿ����Ӿ�</a>ͶƱ��<a href="" class="sl">���Ӿ����Ӿ����Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">���Ӿ����Ӿ�</a>ͶƱ��<a href="" class="sl">���Ӿ����Ӿ����Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">���Ӿ����Ӿ�</a>ͶƱ��<a href="" class="sl">���Ӿ����Ӿ����Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
		<li>
			<img src="http://img1.kaixin001.com.cn/i4/guangun/actimg00001.jpg" alt="����" class="attentionimg" />
			<span class="act_wd1 to_ellipsis"><a href="" class="sl">��շ�</a>ͶƱ��<a href="" class="sl">���Ӿ�</a></span>
			<span class="c9 act_wd2">2012-11-12</span>
		</li>
	</ul>
</div>
<!-- end } -->

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 06:20:49
         compiled from ".\templates\rankitem.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50a9cfc1e3ea21_74285062')) {function content_50a9cfc1e3ea21_74285062($_smarty_tpl) {?><!-- { start �������� -->
<div class="clearfix h3box">
	<h3 class="act_lf">��������</h3>
</div>
<div class="act_box">
	<ul class="act_rankitem">
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
				</div>
			</div>
		</li>
		<li>
			<div class="clearfix">
				<div class="act_lf left1">
					<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actface50.jpg" alt="" class="act_face50" /></a>
					<a href="" class="sl to_ellipsis mt5">��˼��</a>
				</div>
				<div class="act_lf left2 c9">
					<p class="to_ellipsis">�����ʵ��ѧ�����ʵ��ѧ�����ʵ��ѧ</p>
					<p>Ʊ����1032</p>
				</div>
				<div class="overfix act_pt15">
					<a href="" title="ΪTAһƱ" class="btn_act02"></a>
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
<a href="/s/about.html" target="_blank" title="��������">��������</a>
<a href="/mobile/" title="�ֻ���">�ֻ���</a>
<a href="/platform/" target="_blank" title="����ƽ̨">����ƽ̨</a>
<a href="/promotion/" target="_blank" title="�������">�������</a>
<a href="http://zhaopin.kaixin001.com" target="_blank" title="��Ƹ">��Ƹ</a>
<a href="/t/cronline.html" target="_blank" title="�ͷ�">�ͷ�</a>
<a href="/t/help.html" target="_blank" title="����">����</a>
</div>
<div class="right">&copy;2012 ������ &nbsp;<a class="c6" href="http://www.miibeian.gov.cn" target="_blank">��ICP֤080482��</a>&nbsp;&nbsp;����������110000000003��</div>
</div>
</div>
</div>
 </body>
</html><?php }} ?>