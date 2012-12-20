{{include file="header.tpl"}}
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
           {{include file="block_regMainCon.tpl"}}
            <!-- end } -->
        </div>
    </div>
    <div class="reg_Silderight">
        <div class="reg_Silderight_con clearfix">
            <!-- { start rightside -->
            {{include file="side_regRight.tpl"}}
            <!-- end } -->
        </div>
    </div>
</div>
<!-- end } -->
{{include file="footer.tpl"}}
