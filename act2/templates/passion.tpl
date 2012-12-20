{{extends file='index.tpl'}}
{{block name='maincon'}}
	<!-- { start 精彩推荐 -->
	<div class="clearfix">
		<div class="act_lf hipsterl">
			<a href="" class="act_sl3">最新报名</a>&emsp;|&emsp;<a href="">最高人气</a>
		</div>
		<div class="act_rt hipsterr">
			<span class="act_searchbox"><input type="text" id="" value="" /></span>&emsp;<a href="" class="btn_act_search" title="搜索"></a>
		</div>
	</div>
	<div class="act_box overfix" style="min-height:543px;">
		{{block name='ulitem'}}
			{{include file='ulitem.tpl'}}
		{{/block}}
		<!-- { start page -->
		<div class="p30">
			<div class="kx_pages">
				<a href="#">首页</a>
				<a href="#">上一页</a>
				<span class="num">
					<a href="#">1</a>
					<a href="#" class="current">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
				</span>
				<a href="#">下一页</a>
				<a href="#">末页</a>
			</div>
		</div>
		<!-- end } -->
	</div>
	<!-- end } -->
{{/block}}