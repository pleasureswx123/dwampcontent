<script>
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
