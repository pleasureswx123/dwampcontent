<!-- { start slide flash -->
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
<!-- end } -->