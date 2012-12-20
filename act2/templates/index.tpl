{{block name='header'}}
	{{include file='header.tpl'}}
{{/block}}
<div class="act_main_bg">
	<div class="act_banner">
		<h1> {{$title}}</h1>
		<div class="act_banner_con">
			<p></p>
		</div>
	</div>
	<div class="act_wrap">
		<div class="act_nav_wrap">
			<ul class="act_nav clrfix">
				<li class="{{if $thisIndex == 0}}nav_ahover{{/if}}"><a href="http://localhost/act1/act1/index.php?type=0" class="sunnav1">首页</a></li>
				<li class="{{if $thisIndex == 1}}nav_ahover{{/if}}"><a href="http://localhost/act1/act1/index.php?type=1" class="sunnav2">活动介绍</a></li>
				<li class="{{if $thisIndex == 2}}nav_ahover{{/if}}"><a href="http://localhost/act1/act1/index.php?type=2" class="sunnav3">激情达人</a></li>
				<li class="{{if $thisIndex == 3}}nav_ahover{{/if}}"><a href="http://localhost/act1/act1/index.php?type=3" class="sunnav4">决赛评委</a></li>
			</ul>
			<a href="http://localhost/act1/act1/index.php?type=4" class="btn_registration {{if $thisIndex == 4}}btn_registration1{{/if}}" title="我要报名"></a>
			<a href="http://localhost/act1/act1/index.php?type=5" class="btn_submitvideo {{if $thisIndex == 5}}btn_submitvideo1{{/if}}" title="提交视频"></a>
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
		{{block name='maincon'}}
			<div class="act_main_wrap">
				<div class="act_slide_wrap">
					<div class="act_box">
						{{block name='slide'}}
							{{include file='slide.tpl'}}
						{{/block}}
					</div>
				</div>
				<!-- { start 最新配对 -->
				<div class="mt10">
					<div class="clearfix h2box">
						<h2 class="act_lf">最新配对</h2>
						<a href="" class="act_rt h2rtlink">查看全部</a>
					</div>
					<div class="act_box overfix">
						{{block name='ulitem'}}
							{{include file='ulitem.tpl'}}
						{{/block}}
					</div>
				</div>
				<!-- end } -->
				<!-- { start 精彩推荐 -->
				<div class="mt10">
					<div class="clearfix h2box">
						<h2 class="act_lf">精彩推荐</h2>
					</div>
					<div class="act_box overfix">
						{{block name='ulitem'}}
							{{include file='ulitem.tpl'}}
						{{/block}}
					</div>
				</div>
				<!-- end } -->
				{{block name='comment'}}
					{{include file='comment.tpl'}}
				{{/block}}
			</div>
			{{block name='rightside'}}
				{{include file='rightside.tpl'}}
			{{/block}}
		{{/block}}
		</div>
	</div>		
</div>
{{block name='footer'}}
	{{include file="footer.tpl"}}
{{/block}}