{{extends file='index.tpl'}}
{{block name='maincon'}}
<!-- { start registration -->
<div class="act_p10_45_100">
	<h4>我要报名</h4>
	<div class="c3 p20">
		<div class="mt10 actformwrap" style="display:block;">
			<form method="" enctype=""  action="">
				<p class="mt5 mb10">请完善以下信息，以便工作人员及时与你联系，确保报名成功(<span class="actcolred">*</span>标注的项目为必填)</p>
				<p>
					<label class="reg_label">真实姓名：<span class="actcolred">*</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写您的真实姓名</span>
				</p>
				<p>
					<label class="reg_label">手机号码：<span class="actcolred">*</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写您的常用手机号码，以便及时与你联系</span>
				</p>
				<p>
					<label class="reg_label">所在学校：<span class="actcolred">*</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note"></span>
				</p>
				<p>
					<label class="reg_label">电子邮箱：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写您的常用电子邮箱</span>
				</p>
				<p>
					<label class="reg_label">QQ/MSN：<span class="actcolred">&nbsp;</span></label>
					<input class="reg_input" type="text"  />
					<span class="reg_note">请填写您的QQ或MSN</span>
				</p>
				<p class="mt5 mb10">提交你的才艺视频，让大家更好地了解你</p>
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
					<label class="reg_label"></label>
					<span class="actbtn_add"><img src="http://img1.kaixin001.com.cn/i4/guangun/btn_acticon.png" alt="添加" />&nbsp;<a href="" class="sl">添加</a></span>
				</p>
				<p class="mt20">
					<label class="reg_label"></label>
					<input type="checkbox" id="joinfans" name="joinfans" /><span class="checkbox_note" for="joinfans">加开心校园为粉丝</span>
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
				<p class="actformsucess"><img src="http://img1.kaixin001.com.cn/i4/guangun/acticon01.png" alt="" /><span class="f14">恭喜你，报名成功！</span></p>
				<p>稍后工作人员会与你联系，请敬候佳音</p>
				<p class="mt20">
					<span class="kxbtn kxbtn_m"><button class="normal" type="submit"><em><span><b><i>返回首页</i></b></span></em></button></span>
					<span class="kxbtn kxbtn_m ml20"><button class="normal" type="button"><em><span><b><i>我要拉票</i></b></span></em></button></span>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end } -->
{{/block}}