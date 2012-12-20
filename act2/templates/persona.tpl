{{extends file='index.tpl'}}
{{block name='maincon'}}
	<div class="act_main_wrap">
		<div class="act_slide_wrap">
			<div class="act_box">
				{{block name='personalinfo'}}
					{{include file='personalinfo.tpl'}}
				{{/block}}
			</div>
		</div>
		{{block name='comment'}}
			{{include file='comment.tpl'}}
		{{/block}}
	</div>
	<div class="overfix">
		<div class="border_tp1">
			{{block name='rankitem'}}
				{{include file='rankitem.tpl'}}
			{{/block}}
		</div>
	</div>
{{/block}}




