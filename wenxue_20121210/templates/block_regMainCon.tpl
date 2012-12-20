<style type="text/css">
.reg_title h3,.reg_title h3.reg_step7 {color:#666; width:auto; height:auto; background:none; font:22px/1.5 STHeiTi, 'Microsoft YaHei', SimHei, simsun, sans-serif;}
.reg_box {color:#333;}
.reg_box input,.reg_labWidth,.birthday label,.birthday select {font-size:14px; font-family:'lucida grande', tahoma, verdana, arial, simsun, sans-serif;}
.reg_element .inp_box {border:1px solid #b2bbcd;}
.reg_element select {height:25px; padding:2px; color:#666;}
.w70 {width:70px;}
.reg_timeinto {margin:2px 5px 0 3px; color:#666;}
input:focus {outline:0 none;}
.reg_element .inp_box input.on_fs {border-left:1px solid #939fb6; border-top:1px solid #939fb6; }
.reg_formlabel {font:14px 'lucida grande', tahoma, verdana, arial, simsun, sans-serif; float:left; width:70px; text-align:justify; text-align-last: justify; -moz-text-align-last:justify; margin:5px 5px 0 0;}
@media screen and (-webkit-min-device-pixel-ratio:0) { .reg_formlabel:after { content:'.'; display:inline-block; width:100%; overflow:hidden; height:0; }}
.reg_box li.reg_bt {padding-left:75px;}
.incon_city_arrowbottom {cursor:pointer;background:url('img/incon_city_arrowbottom.png') no-repeat right 4px;}
.prompt {border:1px solid #ddd; background:#f9f9f9; color:#999;}
.error, .prompt {box-shadow:none;}
.error { left:4px; border:1px solid #FFB7B7; background:#FFE5E5 url(http://img.kaixin001.com.cn/i/register/th_ju.gif) no-repeat 3px 50%; padding-left:25px; color:#DD4B39}
.agreearea {font-family:tahoma;}
.agreearea input,.agreearea label {font:12px 'lucida grande', tahoma, verdana, arial, simsun, sans-serif; display:inline-block; vertical-align:middle; color:#666;}
.reg_element input.job {height:16px;}
.reg_labWidth {width:70px;}
</style>
<script>
    $j(function() {
        $j('.reg_step1', $j('.reg_title')).text('十秒加入开心网，找到全部好友');
        $j('.reg_step2', $j('.reg_title')).text('你好，请完善基本资料');
        $j('.reg_step3', $j('.reg_title')).text('注册成功，请立即激活账号');
        $j('.reg_step4', $j('.reg_title')).text('完善资料就能找到朋友');
        $j('.reg_step5', $j('.reg_title')).text('激活成功，完善资料就能找到朋友');
        $j('.reg_step6', $j('.reg_title')).text('激活成功，请完善基本资料');
        $j('.reg_step7', $j('.reg_title')).text('你好，请完善基本资料');
    })
</script>
<div class="reg_title"><h3 class="reg_step1"></h3></div>
<form name="regform" action="http://www.kaixin001.com/register/reg_submit.php" method="post">
    <input id="rcode2" type="hidden" name="rcode">
    <input type="hidden" name="email2" value="">
    <input type="hidden" name="usercode" value="">
    <input type="hidden" name="url" value="">
    <input type="hidden" name="src" value="">
    <ul class="reg_box reg_box2">
        <li class="accounts">
        <div class="reg_formlabel">电子邮箱：</div>
        <div class="reg_element" style="z-index:1">
        <span class="inp_box"><input class="txt" type="text" id="regemailinput" name="email" value="" datatype="email" reqmsg=" 请输入有效的电子邮箱" errmsg="请填写有效的电子邮箱" data-valid-url="/interface/checkemail.php" maxlength="100" onfocus="this.className='txt on_fs'" onblur="this.className='txt'" autocomplete="off" data-result=""></span>
        <div id="inputInner" style="display: none;">
        <div class="pl6">请选择邮箱的类型</div>
        <a href="" title="" class="preslemail active" datav="qq.com"></a>
        <a href="" title="" class="preslemail " datav="126.com"></a>
        <a href="" title="" class="preslemail" datav="163.com"></a>
        <a href="" title="" class="preslemail" datav="sina.com"></a>
        <a href="" title="" class="preslemail" datav="sina.cn"></a>
        <a href="" title="" class="preslemail" datav="hotmail.com"></a>
        <a href="" title="" class="preslemail" datav="gmail.com"></a>
        <a href="" title="" class="preslemail" datav="sohu.cn"></a>
        <a href="" title="" class="preslemail" datav="yahoo.cn"></a>
        <a href="" title="" class="preslemail" datav="139.cn"></a>
        </div>
        <div class="c9 reg_clue">如果没有邮箱，你可以用<a class="sl2 toAccount" href="#">账号注册</a></div>
        <div class="reg_tips form-valid-tip-normal" style="margin-left: 0px; display: none;">
        <div class="prompt left l" style="display:block;">
        <span class="w2 account_taken_kx">请填写有效电子邮箱，推荐使用<i>QQ邮箱</i></span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-err" id="emailerrtip" style="display: none;">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content">请填写有效电子邮箱</span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" style="display: none;">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="accounts" style="display:none">
        <div class="reg_formlabel">账 &emsp; 号：</div>
        <div class="reg_element">
        <span class="inp_box"><input name="nickname" class="txt" type="text" maxlength="18" disabled="disabled" datatype="reg-/^[\w]{5,18}$/" data-valid-url="/interface/checknickname.php" reqmsg=" 请输入有效的账号" errmsg="账号只能是5-18位字母、数字或下划线" onfocus="this.className='txt on_fs'" onblur="this.className='txt'"></span>
        <div class="c9 reg_clue">切换至<a class="sl2 toEmail" href="#">邮箱注册</a></div>
        <div class="reg_tips form-valid-tip-normal" style="display:none;margin-left:0;">
        <div class="prompt left l" style="display:block;">
        <span class="w2 account_taken_kx">5-18位字母、数字或下划线，推荐用<i>QQ</i>或<i>手机号</i></span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content">请填写有效电子邮箱</span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" style="display:none">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="password">
        <div class="reg_formlabel">创建密码：</div>
        <div class="reg_element">
        <span class="inp_box"><input class="txt" type="password" name="password" datatype="reg" reg-pattern="/^[ -~]{6,20}$/" minlength="6" maxlength="20" reqmsg=" 请输入密码" errmsg="密码应该由6-20个字母、数字或特殊字符组成" style="line-height:12px\9;" onfocus="this.className='txt on_fs'" onblur="this.className='txt'"></span>
        <div class="reg_tips form-valid-tip-normal" style="display:none;margin-left:0;">
        <div class="prompt left l" style="display:block;">
        <span class="w2 account_taken_kx">由6-20个字母、数字或特殊字符组成</span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content"></span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" style="display:none">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="name">
        <div class="reg_formlabel">姓 &emsp; 名：</div>
        <div class="reg_element">
        <span class="inp_box"><input class="txt" type="text" name="real_name" datatype="cnname" reqmsg=" 请输入真实中文姓名" errmsg="请填写你的真实中文姓名" data-valid-url="/register/check_reg_name.php?mode=detail" onfocus="this.className='txt on_fs'" onblur="this.className='txt'" data-valid-method="post"></span>
        <div class="reg_tips form-valid-tip-normal" style="display:none;margin-left:0;">
        <div class="prompt left l" style="display:block;">
        <span class="w2 account_taken_kx">请填写你的真实中文姓名</span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content"></span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" style="display:none">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="sing">
        <div class="reg_formlabel">性 &emsp; 别：</div>
        <div class="reg_element reg_lh">
        <input name="gender" class="vm" type="radio" value="0" reqmsg=" 请选择性别"><label class="reg_labWidth vm"> 男 </label>
        <input name="gender" class="vm" type="radio" value="1" checked="" reqmsg=" 请选择性别"><label class="reg_labWidth vm"> 女 </label>
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content"></span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" style="display:none">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="birthday">
        <div class="reg_formlabel">生 &emsp; 日：</div>
        <div class="reg_element reg_mt3" id="selectBox" style="">
        <label>
        <select name="year" id="" class="w70 l" datatype="uv" reqmsg=" 请填写真实的出生日期">
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
        <option value="1993">1993</option>
        <option value="1992">1992</option>
        <option value="1991">1991</option>
        <option value="1990">1990</option>
        <option value="1790">90后</option>
        <option value="1989">1989</option>
        <option value="1988">1988</option>
        <option value="1987">1987</option>
        <option value="1986">1986</option>
        <option value="1985">1985</option>
        <option value="1984">1984</option>
        <option value="1983">1983</option>
        <option value="1982">1982</option>
        <option value="1981">1981</option>
        <option value="" selected="">请选择</option>
        <option value="1980">1980</option>
        <option value="1780">80后</option>
        <option value="1979">1979</option>
        <option value="1978">1978</option>
        <option value="1977">1977</option>
        <option value="1976">1976</option>
        <option value="1975">1975</option>
        <option value="1974">1974</option>
        <option value="1973">1973</option>
        <option value="1972">1972</option>
        <option value="1971">1971</option>
        <option value="1970">1970</option>
        <option value="1770">70后</option>
        <option value="1969">1969</option>
        <option value="1968">1968</option>
        <option value="1967">1967</option>
        <option value="1966">1966</option>
        <option value="1965">1965</option>
        <option value="1964">1964</option>
        <option value="1963">1963</option>
        <option value="1962">1962</option>
        <option value="1961">1961</option>
        <option value="1960">1960</option>
        <option value="1760">60后</option>
        <option value="1959">1959</option>
        <option value="1958">1958</option>
        <option value="1957">1957</option>
        <option value="1956">1956</option>
        <option value="1955">1955</option>
        <option value="1954">1954</option>
        <option value="1953">1953</option>
        <option value="1952">1952</option>
        <option value="1951">1951</option>
        <option value="1950">1950</option>
        <option value="1949">1949</option>
        <option value="1948">1948</option>
        <option value="1947">1947</option>
        <option value="1946">1946</option>
        <option value="1945">1945</option>
        <option value="1944">1944</option>
        <option value="1943">1943</option>
        <option value="1942">1942</option>
        <option value="1941">1941</option>
        <option value="1940">1940</option>
        <option value="1939">1939</option>
        <option value="1938">1938</option>
        <option value="1937">1937</option>
        <option value="1936">1936</option>
        <option value="1935">1935</option>
        <option value="1934">1934</option>
        <option value="1933">1933</option>
        <option value="1932">1932</option>
        <option value="1931">1931</option>
        <option value="1930">1930</option>
        <option value="1929">1929</option>
        <option value="1928">1928</option>
        <option value="1927">1927</option>
        <option value="1926">1926</option>
        <option value="1925">1925</option>
        <option value="1924">1924</option>
        <option value="1923">1923</option>
        <option value="1922">1922</option>
        <option value="1921">1921</option>
        <option value="1920">1920</option>
        <option value="1919">1919</option>
        <option value="1918">1918</option>
        <option value="1917">1917</option>
        <option value="1916">1916</option>
        <option value="1915">1915</option>
        <option value="1914">1914</option>
        <option value="1913">1913</option>
        <option value="1912">1912</option>
        <option value="1911">1911</option>
        <option value="1910">1910</option>
        <option value="1909">1909</option>
        <option value="1908">1908</option>
        <option value="1907">1907</option>
        <option value="1906">1906</option>
        <option value="1905">1905</option>
        <option value="1904">1904</option>
        <option value="1903">1903</option>
        <option value="1902">1902</option>
        <option value="1901">1901</option>
        <option value="1900">1900</option>
        </select><label class="reg_timeinto">年</label>
        </label>
        <label>
        <select name="month" class="w50 l" datatype="uv" reqmsg=" 请填写真实的出生日期">
        <option value="">--</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        </select><label class="reg_timeinto">月</label>
        </label>
        <label>
        <select name="day" class="w50 l" datatype="uv" reqmsg=" 请填写真实的出生日期">
        <option value="">--</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select><label class="reg_timeinto">日</label>
        </label>
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content"></span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" style="display:none">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="state">
        <div class="reg_formlabel">我 现 在：</div>
        <div class="reg_element reg_lh">
        <input name="status" class="vm" type="radio" value="2" reqmsg=" 请选择工作还是上学"><label class="reg_labWidth vm"> 在工作</label><input name="status" class="vm" type="radio" value="1" reqmsg=" 我现在"><label class="reg_labWidth vm"> 在上学</label><input name="status" class="vm" type="radio" value="3" reqmsg=" 我现在"><label class="reg_labWidth vm" style="width:30px;"> 其它</label>
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content"></span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" style="display:none">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="live">
        <div class="reg_formlabel">居 住 地：</div>
        <div class="reg_element">
        <span class="inp_box"><input class="job incon_city_arrowbottom" type="text" name="city" value="北京" reqmsg=" 请选择居住地" onfocus="this.className='job incon_city_arrowbottom on_fs'" onblur="this.className='job incon_city_arrowbottom'"></span>
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content"></span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" style="display:none">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="captchadiv" style="display:none;">
        <div class="reg_formlabel">验 证 码：</div>
        <div class="reg_element ">
        <span class="inp_box"><input class="capt" type="text" name="code" data-valid-url="/interface/checkcode.php?keytype=reg&amp;rcode=" reqmsg=" 请输入验证码" errmsg="验证码输入错误，请重输" autocomplete="off" onfocus="this.className='capt on_fs'" onblur="this.className='capt'" value=""></span>
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content">验证码输入错误，请重输</span>
        </div>
        </div>
        <div class="reg_tips form-valid-tip-ok" id="yzmoktip" style="display:none">
        <div class="tips_img l"><img class="mt5" width="17" height="13" src="http://img.kaixin001.com.cn/i/fzcg_dh4.gif"></div>
        </div>
        </div>
        </li>
        <li class="reg_bt captchadivImg  captchadiv" style="display:none;">
        <img id="randimg2" data-keytype="reg" align="absmiddle"> <a id="changeRcode2" class="sl2" href="#">换一张</a>
        </li>
        <li class="reg_bt clause">
        <span class="agreearea">
        <input type="checkbox" name="agree" id="agree" checked="checked" value="1" reqmsg=" 必须同意开心网服务条款">
        <label for="agree">同意 <a href="http://www.kaixin001.com/s/reg.html" title="" class="sl2" target="_blank">开心网服务条款</a></label>
        </span>

        <div class="reg_element">
        <div class="reg_tips form-valid-tip-err" style="display:none">
        <div class="error l" style="display:block;">
        <span class="form-valid-err-content"></span>
        </div>
        </div>
        </div>
        </li>
        <li class="reg_bt">
    <span class="kxbtn kxbtn_m l">
        <button class="normal" type="submit" onclick="Kx.Utils.writeLog('s','','submit_form_reg');">
            <em><span><b><i style="padding-left:40px; padding-right:40px;">立即注册</i></b></span></em>
        </button>
    </span>

        <p id="submit_tip" style="display:none;*padding-top:3px;_padding-top:5px;" class="mt3 c9">　注册中&nbsp;&nbsp;<img src="http://img1.kaixin001.com.cn/i/home/dt_loading_nobg.gif"></p>
        </li>
    </ul>
    <!-- city selector -->
    <div id="choose_city" style="display:none;position:absolute;top:327px;left:308px;z-index:100;">
        <div style="position:absolute;z-index:-1;left:-8px;top:0;width:470px;">
            <iframe frameborder="0" style="width:100%;filter:alpha(opacity=0);-moz-opacity:0"></iframe>
        </div>
        <div class="cityBg_top"></div>
        <div class="cityBg">
            <div class="cbox" id="provincebox"></div>
            <div class="cbox" style="margin-top:12px;display:none" id="citybox"></div>
            <div class="btn_area">
                <span class="e_d52"><input type="button" id="btn_fb" value="关闭" title="关闭" class="gb3" onmouseover="this.className='gb4';" onmouseout="this.className='gb3';" style="width:45px;"></span>
            </div>
        </div>
        <div class="cityBg_bot"></div>
    </div>
    <!-- choose_city -->
</form>
