{{extends file='index.tpl'}}
{{block name='maincon'}}
<!-- { start submit -->
<div class="act_p10_45_100">
	<h4>提交视频</h4>
	<div class="c3 p20">
		<div class="mt10 actformwrap" style="display:block;">
			<form method="" enctype=""  action="">
				<p class="mt5">将你的才艺视频提交到开心网，让大家更好地了解你！</p>
				<p class="mb10">方法：复制视频网站上你的才艺视频的标题和链接，提交即可。支持的视频网站： <a href="" class="sl">优酷</a> 、 <a href="" class="sl">土豆</a>、 <a href="" class="sl">腾讯</a>、 <a href="" class="sl">酷6</a>、 <a href="" class="sl">搜狐视频</a>、 <a href="" class="sl">凤凰视频</a></p>
				<p>
					<label class="reg_label">视频1标题：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写你的才艺视频标题</span>
				</p>
				<p>
					<label class="reg_label">视频1链接：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text" />
					<span class="reg_note">请将视频页面地址栏中的链接复制到此处</span>
				</p>
				<p>
					<label class="reg_label">视频2标题：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写你的才艺视频标题</span>
				</p>
				<p>
					<label class="reg_label">视频2链接：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text" />
					<span class="reg_note">请将视频页面地址栏中的链接复制到此处</span>
				</p>
				<p>
					<label class="reg_label">视频3标题：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写你的才艺视频标题</span>
				</p>
				<p>
					<label class="reg_label">视频3链接：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text" />
					<span class="reg_note">请将视频页面地址栏中的链接复制到此处</span>
				</p>
				<p class="mt5">
					<label class="reg_label"></label>
					<span class="kxbtn kxbtn_m"><button class="normal" type="submit"><em><span><b><i>提交</i></b></span></em></button></span>
					<span class="kxbtn kxbtn_m ml20"><button class="normal" type="button"><em><span><b><i>取消</i></b></span></em></button></span>
				</p>
			</form>
		</div>
		<div class="mt10 actformwrap" style="display:none">
			<div class="actformsucess_area">
				<p class="actformsucess"><img src="http://img1.kaixin001.com.cn/i4/guangun/acticon01.png" alt="" /><span class="f14">恭喜你，视频提交成功！</span></p>
				<p>你已经提交了2个视频，还可以提交1个</p>
				<p class="mt20">
					<span class="kxbtn kxbtn_m"><button class="normal" type="submit"><em><span><b><i>继续提交</i></b></span></em></button></span>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end } -->
{{/block}}