{{include file='header.tpl'}}
<!-- { start kxmaincontent -->
<div class="kx_wd960 clfix pb100 pt10">
    <div class="kx_cnmain">
        <div class="kx_content">
        {{if $type==1}}
            {{include file='block_left1.tpl'}}
        {{else if $type==2}}
            {{include file='block_left2.tpl'}}
        {{else if $type==3}}
            {{include file='block_left3.tpl'}}
        {{/if}}
        </div>
    </div>
    <div class="kx_sideright">
        <div class="pt52"> 
            {{include file='side_right.tpl'}}
        </div>
    </div>
</div>
<!-- end } -->
{{include file='footer.tpl'}}