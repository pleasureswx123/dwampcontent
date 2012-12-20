<?php /* Smarty version Smarty-3.1.12, created on 2012-12-17 05:35:03
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2574750c995489b56a4-99634060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1355722501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2574750c995489b56a4-99634060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c995489cc299_87896547',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c995489cc299_87896547')) {function content_50c995489cc299_87896547($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> 开心网活动 </title>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <meta name="generator" content="editplus" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
    <link href="http://s.kaixin001.com.cn/css/kxcommon-06485de00.css" rel="stylesheet" type="text/css" />
    <link href="http://s.kaixin001.com.cn/css/kxcomment-00335d350.css" rel="stylesheet" type="text/css" />
    <link href="http://s.kaixin001.com.cn/css/register-00146e215.css" rel="stylesheet" type="text/css" />
    <link href="http://s.kaixin001.com.cn/css/school.css" rel="stylesheet" type="text/css" />
    <link href="http://s.kaixin001.com.cn/css/kxindex-017028428.css" rel="stylesheet" type="text/css" />
    <link href="http://s.kaixin001.com.cn/css/records-30.css" rel="stylesheet" type="text/css" />
    <script src="http://s.kaixin001.com.cn/js/kxbase-0036dba2f.js" type="text/javascript"></script>
    <script src="http://s.kaixin001.com.cn/js/kxcommon-04018f594.js" type="text/javascript"></script>
    <script src="http://s.kaixin001.com.cn/js/kxcomment-006393cfb.js" type="text/javascript"></script>
    <script src="http://s.kaixin001.com.cn/js/logincommon-004569746.js" type="text/javascript"></script>
  <script src="http://s.kaixin001.com.cn/js/forks/home/kxbase-00275635d.js" type="text/javascript"></script>
  <!-- <link href="http://s.kaixin002.com.cn/css/endactivies.css" rel="stylesheet" type="text/css" /> -->
  <link href="templates/css.css" rel="stylesheet" type="text/css" />
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
<div class="hdNavMenu mr10">你好，商文学</div><div class="hdNavMenu"><a class="hdSelc" href="/home/?uid=129925482" target="_blank">个人首页</a></div><div class="hdNavMenuBar">|</div><div id="moreAward" class="hdNavMenu">
</div><div class="hdNavMenu"><a class="hdSelc" najax="1" href="/login/logout.php">退出</a></div>
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
</div><?php }} ?>