<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 07:07:15
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1729350bec89713d114-70750534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1354687879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1729350bec89713d114-70750534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bec89713ff26_60435371',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bec89713ff26_60435371')) {function content_50bec89713ff26_60435371($_smarty_tpl) {?><script>
 $j(function() {
     $j('#kxsearch').focus(function() {
         $j('#kxsearch_container').show();
     });
     $j('#kxsearch_container').delegate('li a','click mouseenter',function(event) {
         event.preventDefault();
         if (event.type=='mouseenter') {
             $j(this).parent().addClass('ahover').siblings().removeClass('ahover');
         }
         if (event.type=='click') {
             var thisVal = $j(this).text();
            $j('#kxsearch').val(thisVal);
             $j('#kxsearch_container').hide();
         }
     });
     $j('#kx_tpnav a').click(function(evt) {
         evt.preventDefault();
         $j(this).addClass('ahover').siblings().removeClass('ahover');
     });
    $j('#kx_h2title').delegate('a','click',function(evt) {
        evt.preventDefault();
        var thisIdex = $j(this).index();
        var objTab = $j('.tabconareaWrap').find('.itemborderbt').eq(thisIdex);
        var objTabSilings = $j('.tabconareaWrap').find('.itemborderbt').eq(thisIdex).siblings();
        $j(this).addClass('ahover').siblings().removeClass('ahover');
        objTabSilings.fadeOut(300,function() {
            objTab.fadeIn(300);
        })
    });
 })
</script>
</body>
</html>
<?php }} ?>