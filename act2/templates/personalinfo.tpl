<!-- { start slide personalinfo -->
<div class="">
	<p class="act_tart"><a href="" class="sl">返回上一页</a></p>
	<div class="clrfix mb10">
		<div class="act_lf mr20">
			<div class="vermiddle personalface">
				<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg000001.jpg" alt="名称" /></a>
			</div>
		</div>
		<div class="overfix c6">
			<p class="pb5"><a href="" class="sl f14">张超</a></p>
			<p>北京邮电大学</p>
			<p>票数：825</p>
			<p>报名时间：11月18日   02:33</p>
			<p class="mt30"><a href="" title="投TA一票" class="btn_act01"></a>&emsp;<a href="" title="为TA一票" class="btn_act02"></a></p>
		</div>
	</div>
	<div class="personaltit">他的视频秀：</div>
	<div class="act_p10_8_0">
		<script type="text/javascript">
			$j(function () {
				var nodeParent = $j('.slidelr_item'),
					nodeSun = $j('.slidelr_item li'),
					cellNum = nodeSun.length,
					cellLeng = parseInt(nodeSun.outerWidth(true)),
					totalLeng = parseInt(cellNum*cellLeng),
					mLeftVal = parseInt(nodeParent.css('margin-left')),
					scrolling = false,
					maxMLeftVal = parseInt(totalLeng-cellLeng*2);

				nodeParent.width(totalLeng);

				if(mLeftVal==0){
					$j('.act_arow_iconl').removeClass('act_arow_iconl1');
				}else{
					$j('.act_arow_iconl').addClass('act_arow_iconl1');
				}

				function moveItem(varl0,val1,val2,val3) {
						scrolling = true;
						nodeParent.animate({
							'margin-left':val1+cellLeng+'px'
						},300,function() {
							$j('.'+val2).addClass(val2+'1');
							mLeftVal = parseInt(nodeParent.css('margin-left'));
							if (mLeftVal==varl0 ) {
								$j('.'+val3).removeClass(val3+'1');
							};
							scrolling = false;
						});
				}

				$j('.act_arow_iconr').click( function(evt){
					evt.preventDefault();
					if (mLeftVal>-maxMLeftVal && !scrolling ) {
						moveItem(-maxMLeftVal,'-=','act_arow_iconl','act_arow_iconr');
					};
				});

				$j('.act_arow_iconl').click( function(evt){
					evt.preventDefault();
					if (mLeftVal<0 && !scrolling ) {
						moveItem(0,'+=','act_arow_iconr','act_arow_iconl');
					};
				});
			})
		</script>
		<div class="overfix">
			<ul class="clearfix slidelr_item">
				<li>
					<div class="vermiddle personalvideo">
						<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg0000001.jpg" alt="" /></a>
					</div>
					<p class="act_tact pt5">中国达人秀 街舞</p>
				</li>
				<li>
					<div class="vermiddle personalvideo">
						<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg0000001.jpg" alt="" /></a>
					</div>
					<p class="act_tact">中国达人秀 街舞</p>
				</li>
				<li>
					<div class="vermiddle personalvideo">
						<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg0000001.jpg" alt="" /></a>
					</div>
					<p class="act_tact">中国达人秀 街舞</p>
				</li>
				<li>
					<div class="vermiddle personalvideo">
						<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg0000001.jpg" alt="" /></a>
					</div>
					<p class="act_tact">中国达人秀 街舞</p>
				</li>
				<li>
					<div class="vermiddle personalvideo">
						<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg0000001.jpg" alt="" /></a>
					</div>
					<p class="act_tact">中国达人秀 街舞</p>
				</li>
				<li>
					<div class="vermiddle personalvideo">
						<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg0000001.jpg" alt="" /></a>
					</div>
					<p class="act_tact">中国达人秀 街舞</p>
				</li>
				<li>
					<div class="vermiddle personalvideo">
						<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg0000001.jpg" alt="" /></a>
					</div>
					<p class="act_tact">中国达人秀 街舞</p>
				</li>
				<li>
					<div class="vermiddle personalvideo">
						<a href=""><img src="http://img1.kaixin001.com.cn/i4/guangun/actimg0000001.jpg" alt="" /></a>
					</div>
					<p class="act_tact">中国达人秀 街舞</p>
				</li>
			</ul>
		</div>
		<div class="clearfix act_arowarea">
			<span class="act_rt">
				<a href="" class="act_arow_icon act_arow_iconl act_arow_iconl1">上一个</a>
				<a href="" class="act_arow_icon act_arow_iconr act_arow_iconr1">下一个</a>
			</span>
		</div>
	</div>
</div>
<!-- end } -->