<?php /* Smarty version 2.6.22, created on 2015-12-24 16:41:05
         compiled from ../_save_by_file_for_mode_form.html */ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<title>shop</title>
    <?php CSS("css/h_resetM.css"); ?>
    <?php JS("js/jquery-1.10.2.js | js/m/h_base.js"); ?>
</head>
<style>.HTest{ padding:60px 0;}</style>
<body style=" background-color:#f6f6f6; min-height:800px;">
<div class="mMain">

<style type="text/less">
/*--------------------------------*/
@import "css/h_varMix.less";
@import "css/h_modeM.less";
/*--------------------------------*/
/*zs*/

/*zs_*/
/*--------------------------------*/
/*backpic*/

/*backpic_*/
/*--------------------------------*/
/*css*/

/*css_*/
/*--------------------------------*/
</style>
<script language="javascript" type="text/javascript" src="js/less.js"></script>

<div class="HTest">
<!--html-->
<form class="_mForm" method="get">

****************************************************************
<ul class="_liForm">
    
 
<style>
._mForm{ width:90%; margin:0 auto;}

._liForm li{ position:relative; margin-bottom:20px;}
._liForm li .input{ width:100%; height:40px; padding:3px 5px; box-sizing:border-box; -moz-box-sizing:border-box; -khtml-box-sizing:border-box; -webkit-box-sizing:border-box; line-height:34px; text-indent:45px;}

._liForm label{ position:absolute; top:1px; left:1px; width:38px; height:38px; background:#fff no-repeat center; background-size:100% 100%;}
._liForm label.i_name{ background-image:url(upload/referM/i_name.png);}
._liForm label.i_pass{ background-image:url(upload/referM/i_pass.png);}
</style>

<!--li_name-->
<li>
    <label class="i_name"></label>
    <input class="input" type="text" name="" placeholder="用户名" />
</li>
<!--li_pass-->
<li>
    <label class="i_pass"></label>
    <input class="input" type="password" name="" placeholder="请输入密码" />
</li>

        
        
<style>
._liForm li .mgR{ margin-right:100px;}
._liForm li .posR{ position:absolute; top:0; right:0;}
._liForm li .pd{ padding:3px 8px 0 0;}

/*滑动切换开关*/
._mSwitch{ width:76px; height:35px; box-sizing:border-box; padding:2px; background:url(images/mode/m/bg_btn_off.png) no-repeat; background-size:76px 35px;}
._mSwitch i{ float:right; width:31px; height:31px; background:url(images/mode/m/bg_btn_in.png) no-repeat; background-size:100% 100%;}
._mSwitch.on{ background:url(images/mode/m/bg_btn_on.png) no-repeat; background-size:76px 35px;}
._mSwitch.on i{ float:left;}

/*点击切换开关*/
._mSwitch1{ position:relative; overflow:hidden; width:70px; height:35px; background:url(images/mode/m/i5_switch_bg.png) no-repeat center; background-size:100% auto;}
._mSwitch1.on{ background:url(images/mode/m/i5_switch_on_bg.png) no-repeat center; background-size:100% auto;}

/*点击两边切换开关*/
._mSwitch2{ position:relative; width:76px; height:35px; box-sizing:border-box; padding:2px; background:url(images/mode/m/bg_btn_off.png) no-repeat; background-size:76px 35px;}
._mSwitch2 i{ float:right; width:31px; height:31px; background:url(images/mode/m/bg_btn_in.png) no-repeat; background-size:100% 100%;}
._mSwitch2 ol{ position:absolute; top:0; left:0; z-index:9;}
._mSwitch2.on{ background:url(images/mode/m/bg_btn_on.png) no-repeat; background-size:76px 35px;}
._mSwitch2.on i{ float:left;}
._mSwitch2 ol p{ width:38px; height:35px;}
</style>
        
<!--li_pass1-->
<li>
    <div class="mgR">
        <label class="i_pass"></label>
        <input class="input" type="password" name="" placeholder="请输入密码" />
    </div>
    <div class="posR">
        <div class="pd">
            <div class="_mSwitch"><i></i></div><!--_mSwitch-->
        </div>
    </div>
</li>
<!--li_pass2-->
<li>
    <div class="mgR">
        <label class="i_pass"></label>
        <input class="input" type="password" name="" placeholder="请输入密码" />
    </div>
    <div class="posR">
        <div class="pd">
            <div class="_mSwitch1"></div><!--_mSwitch1-->
        </div>
    </div>
</li>
<!--li_pass3-->
<li>
    <div class="mgR">
        <label class="i_pass"></label>
        <input class="input" type="password" name="" placeholder="请输入密码" />
    </div>
    <div class="posR">
        <div class="pd">
            <div class="_mSwitch2">
                <i></i>
                <ol>
                    <p class="fl"></p>
                    <p class="fr"></p>
                </ol>
            </div><!--_mSwitch2-->
        </div>
    </div>
</li>

</ul>

<script type="text/javascript" src="js/plus/jquery.touchSwipe.min.js"></script>
<script>
$(function(){
//滑动切换开关
$("._mSwitch").swipe({
	swipeLeft:function(){
		$(this).addClass("on");
		$(this).parents(".posR").siblings(".mgR").find("input").attr("type","text");
	},	
	swipeRight:function(){
		$(this).removeClass("on");
		$(this).parents(".posR").siblings(".mgR").find("input").attr("type","password");
	}
});

//点击切换开关
switchOn("._mSwitch1");
$("._mSwitch1").click(function(){
	$(this).toggleClass("on");
	switchOn("._mSwitch1");
});
function switchOn(s){
	var _this=$(""+s+"");
	if(_this.hasClass("on")){
	    _this.parents(".posR").siblings(".mgR").find("input").attr("type","text");
	}else{
	    _this.parents(".posR").siblings(".mgR").find("input").attr("type","password");
	}
}

//点击两边切换开关
switchOn("._mSwitch2");
$("._mSwitch2 ol .fl").click(function(){
	$("._mSwitch2").addClass("on");	
	switchOn("._mSwitch2");
});
$("._mSwitch2 ol .fr").click(function(){
	$("._mSwitch2").removeClass("on");	
	switchOn("._mSwitch2");
});	

});
</script>
****************************************************************
	<br>
	<br>
	<br>
****************************************************************



<style>
._dlForm dl{ position:relative; overflow:hidden; margin-bottom:10px;}
._dlForm dt{ float:left; width:80px; line-height:35px; text-align:right; white-space:nowrap;}
._dlForm dd{ height:35px; margin-left:90px;}
._dlForm .input{ width:100%; height:35px; padding:3px 5px; box-sizing:border-box; -moz-box-sizing:border-box; -khtml-box-sizing:border-box; -webkit-box-sizing:border-box; line-height:29px;}

._dlForm dd.mgR{ margin-right:90px;}
._dlForm .posR{ position:absolute; top:0; right:0;}

</style>

<ul class="_dlForm">
<!--dl_name-->
<dl>
    <dt>dl_name：<em>*</em></dt>
    <dd><input class="input" type="text" name="" placeholder="请输入用户名" /></dd>
</dl>
<!--dl_pass-->
<dl>
    <dt>dl_pass：<em>*</em></dt>
    <dd><input class="input" type="text" name="" placeholder="6-18位字母和数字" /></dd>
</dl>
<!--dl_pass1-->
<dl>
    <dt>dl_pass1：<em>*</em></dt>
    <dd class="mgR"><input class="input" type="text" name="" placeholder="请输入密码" /></dd>
    <div class="posR">
        <div class="_mSwitch"><i></i></div><!--_mSwitch-->
    </div>
</dl>
<!--dl_pass2-->
<dl>
    <dt>dl_pass2：<em>*</em></dt>
    <dd class="mgR"><input class="input" type="text" name="" placeholder="请输入密码" /></dd>
    <div class="posR">
        <div class="_mSwitch1"></div><!--_mSwitch1-->
    </div>
</dl>
<!--dl_pass3-->
<dl>
    <dt>dl_pass3：<em>*</em></dt>
    <dd class="mgR"><input class="input" type="text" name="" placeholder="请输入密码" /></dd>
    <div class="posR">
        <div class="_mSwitch2">
            <i></i>
            <ol>
                <p class="fl"></p>
                <p class="fr"></p>
            </ol>
        </div><!--_mSwitch2-->
    </div>
</dl>




<style>
._msmBtn{ display:block; width:80px; height:30px; box-sizing:border-box; -moz-box-sizing:border-box; -khtml-box-sizing:border-box; -webkit-box-sizing:border-box; line-height:30px; margin-top:2px; text-align:center; color:#fff; background-color:#e43a3d; border-radius:4px; -moz-border-radius:4px; -khtml-border-radius:4px; -webkit-border-radius:4px;}
._msmBtn.off{ background-color:#aaa;}
._msmBtn:hover{ color:#fff;}

._dlForm .yzm img{ width:80px; height:34px;}
</style>


<!--dl_msm-->
<dl>
    <dt>dl_msm：<em>*</em></dt>
    <dd class="mgR"><input class="input" type="text" name="" placeholder="请输入手机短信验证码" /></dd>
    <div class="posR">
        <a class="_msmBtn" href="javascript:;">获取验证码</a>
    </div>
</dl>
<!--dl_yzm-->
<dl class="yzm">
    <dt>dl_yzm：<em>*</em></dt>
    <dd class="mgR"><input class="input" type="text" name="" placeholder="请输入右图验证码" /></dd>
    <div class="posR">
        <a id="yzmImg" href="javascript:;"><img src="images/mode/m/yzm.png" alt="验证码" /></a>            
    </div>
</dl>
<!--dl_tel2-->

<script>
$(function(){
//验证码
$("._msmBtn").delegate("","click",function(){
	if(!$(this).hasClass("off")){
		$(this).addClass("off");
		$this=$(this);
		var j=3;
		$this.text("剩下"+j+"秒");
		count(j);
	}
	function count(i){
		setI=setInterval(function(){
			if(i>0){
				i--;
				$this.text("剩下"+i+"秒");
			}else{
				clearInterval(setI);
				$this.removeClass("off").text("重获验证码");
			}
		},1000);
	}
});	
});
</script>      
        
        
        
        
        
        
        
        
<style>
._mTel2 input{ float:left; width:42%; height:100%; padding:3px 5px; box-sizing:border-box; color:#aaa;}
._mTel2 input.in1{ width:21%;}
._mTel2 span{ float:left; width:15px; line-height:35px; text-align:center; color:#aaa;}

</style>    
       

<dl>
    <dt>dl_tel2：<em>*</em></dt>
    <dd class="_mTel2">
        <input type="text" class="in1" placeholder="区号" />
        <span>-</span>
        <input type="text" placeholder="号码" />
        <span>-</span>
        <input type="text" class="in1" placeholder="分机" />
    </dd>
</dl>
<!--dl_sel01-->
<dl>
    <dt>dl_sel01：<em>*</em></dt>
    <dd>
        <select>
            <option value="" selected="selected">test1</option>
            <option value="">选项二</option>
        </select>
    </dd>
</dl>
<!--dl_sel02-->
<dl>
    <dt>dl_sel02：<em>*</em></dt>
    <dd class="flex">
        <ol>
        <select>
            <option value="" selected="selected">选项一</option>
            <option value="">选项二</option>
        </select>
        </ol>
        <ol>
        <select>
            <option value="" selected="selected">选项一</option>
            <option value="">选项二</option>
        </select>
        </ol>
        <ol>
        <select>
            <option value="" selected="selected">选项一</option>
            <option value="">选项二</option>
        </select>
        </ol>
    </dd>
</dl>


<style>
._dlForm select{ width:100%; height:30px; padding:0 5px; box-sizing:border-box; -moz-box-sizing:border-box; -khtml-box-sizing:border-box; -webkit-box-sizing:border-box; line-height:30px;}
._dlForm .flex > *{ width:33.3%; padding:0 3px;}
._dlForm ol{ position:relative;}

/*选择框key*/
._mSelect{ position:relative;}
._mSelect h6{ font-size:12px; height:35px; line-height:29px; color:#888; background-color:#fff; white-space:nowrap;}
._mSelect .key{ position:absolute; top:1px; right:1px; width:33px; height:33px; background:url(upload/referM/i_key_drop.png) no-repeat; background-size:100% 100%;}
._mSelect h6{ width:100%; height:35px; padding:0 5px; box-sizing:border-box; -moz-box-sizing:border-box; -khtml-box-sizing:border-box; -webkit-box-sizing:border-box; line-height:35px; border:#ddd 1px solid;}
._mSelect select{ position:absolute; top:0; left:0; height:35px; opacity:0; -moz-opacity:0; -khtml-opacity:0; -webkit-opacity:0; filter:~"alpha(opacity=0)";}

/*选择框key+opt[弹出框]*/
._sel_div{ position:fixed; left:50%; z-index:999; display:none; overflow:hidden; width:280px; margin-left:-140px; border:#ddd 1px solid; background-color:#fff;}
._sel_div ul{ width:297px; height:100%; overflow-y:scroll;}
._sel_div li{ height:35px; line-height:35px; padding:0 20px; font-size:15px; color:#888; box-sizing:border-box;}
._sel_div li:hover,._sel_div li.on{ background-color:#eee;}
</style>        


<!--dl_sel11-->
<dl class="_mSel_key">
    <dt>dl_sel11：<em>*</em></dt>
    <dd>
        <div class="_mSelect">
            <i class="key"></i>
            <h6></h6>
            <select>
                <option value="" selected="selected">选项一</option>
                <option value="">选项二</option>
            </select>
        </div>
    </dd>
</dl>
<!--dl_sel12-->
<dl class="_mSel_key">
    <dt>dl_sel12：<em>*</em></dt>
    <dd class="flex">
        <div class="_mSelect">
            <ol>
                <i class="key"></i>
                <h6></h6>
                <select>
                    <option value="gd" selected="selected">广东</option>
                    <option value="gx">广西</option>
                </select>
            </ol>
        </div><!---->
        <div class="_mSelect">
            <ol>
                <i class="key"></i>
                <h6></h6>
                <select>
                    <option value="gd" selected="selected">广东</option>
                    <option value="gx">广西</option>
                </select>
            </ol>
        </div><!---->
        <div class="_mSelect">
            <ol>
                <i class="key"></i>
                <h6></h6>
                <select>
                    <option value="gd" selected="selected">广东</option>
                    <option value="gx">广西</option>
                </select>
            </ol>
        </div><!---->
    </dd>
</dl>





<script type="text/javascript" src="js/m/mode/address.js"></script><!--全国各省市区-->
<script type="text/javascript" src="js/m/mode/addr_link.js"></script><!--省市区联动-->
<!--dl_sel13-->
<dl>
    <dt>dl_sel13：<em>*</em></dt>
    <dd class="flex" id="_linkAddr">
        <div class="_mSelect">
            <ol class="_prov">
                <i class="key"></i>
                <h6></h6>
                <select>
                    <option value="">--省--</option>
                </select>
            </ol>
        </div><!---->
        <div class="_mSelect">
            <ol class="_city">
                <i class="key"></i>
                <h6></h6>
                <select>
                    <option value="">--市--</option>
                </select>
            </ol>
        </div><!---->
        <div class="_mSelect">
            <ol class="_area">
                <i class="key"></i>
                <h6></h6>
                <select>
                    <option value="">--区--</option>
                </select>
            </ol>
        </div><!---->
    </dd>
</dl>




<!--dl_sel21-->
<dl class="_mSel_opt">
    <dt>dl_sel21：<em>*</em></dt>
    <dd>
        <div class="_mSelect">
            <input type="hidden" name="province" value="prov1" />
            <h6 data-role="">--省/直辖市--</h6>
            <i class="key"></i>
        </div>
        <div class="_sel_div">
            <ul>
                <li data-role="prov1">北京</li>
                <li data-role="prov31">青海</li>
                 <li data-role="prov1">北京</li>
                <li data-role="prov31">青海</li>
                <li data-role="prov1">北京</li>
                <li data-role="prov31">青海</li>
                <li data-role="prov1">北京</li>
                <li data-role="prov31">青海</li>
                <li data-role="prov1">北京</li>
                <li data-role="prov31">青海</li>
                <li data-role="prov1">北京</li>
                <li data-role="prov31">青海</li>
                <li data-role="prov1">北京</li>
                <li data-role="prov31">青海</li>
                <li data-role="prov1">北京</li>
                <li data-role="prov31">青海</li>
            </ul>
       </div>
    </dd>
</dl>
<!--dl_sel22-->
<dl class="_mSel_opt">
    <dt>dl_sel22：<em>*</em></dt>
    <dd class="flex">
        <section>
            <div class="_mSelect">
                <ol>
                    <input type="hidden" name="province" value="prov1" />
                    <h6 data-role="">--省/直辖市--</h6>
                    <i class="key"></i>
                </ol>
            </div>
            <div class="_sel_div">
                <ul>
                    <li data-role="prov1">北京</li>
                    <li data-role="prov31">青海</li>
                </ul>
            </div>
        </section>
        <section>
            <div class="_mSelect">
                <ol>
                    <input type="hidden" name="province" value="prov1" />
                    <h6 data-role="">--省/直辖市--</h6>
                    <i class="key"></i>
                </ol>
            </div>
            <div class="_sel_div">
                <ul>
                    <li data-role="prov1">北京</li>
                    <li data-role="prov31">青海</li>
                </ul>
            </div>
        </section>
        <section>
            <div class="_mSelect">
                <ol>
                    <input type="hidden" name="province" value="prov1" />
                    <h6 data-role="">--省/直辖市--</h6>
                    <i class="key"></i>
                </ol>
            </div>
            <div class="_sel_div">
                <ul>
                    <li data-role="prov1">北京</li>
                    <li data-role="prov31">青海</li>
                </ul>
            </div>
        </section>
    </dd>
</dl>

<script type="text/javascript" src="js/m/mode/address.js"></script><!--全国各省市区-->
<script type="text/javascript" src="js/m/mode/addr_link2.js"></script><!--省市区联动-->
<!--dl_sel23-->
<dl>
    <dt>dl_sel23：</dt>
    <dd id="_linkAddr2">
        <div class="flex">
            <!--省-->
            <div class="_mSelect">
                <ol class="_prov">
                    <i class="key"></i>
                    <h6>--选择省--</h6>
                </ol>
            </div>
            <!--市-->
            <div class="_mSelect">
                <ol class="_city">
                    <i class="key"></i>
                    <h6>--选择市--</h6>
                </ol>
            </div>
            <!--区-->
            <div class="_mSelect">
                <ol class="_area">
                    <i class="key"></i>
                    <h6>--选择县--</h6>
                </ol>
            </div>
        </div>
        <ul>
            <!--弹窗[省]-->
            <input type="hidden" name="_linkProv" value="" />
            <div class="_sel_div"><ul class="_prov"></ul></div>
            <!--弹窗[市]-->
            <input type="hidden" name="_linkCity" value="" />
            <div class="_sel_div"><ul class="_city"></ul></div>
            <!--弹窗[县]-->
            <input type="hidden" name="_linkArea" value="" />
            <div class="_sel_div"><ul class="_area"></ul></div>
        </ul>
    </dd><!--#_linkAddr-->
</dl>

<script>
$(function(){
//选择框key
$("._mSel_key ._mSelect select").each(function(){
	var default_=$(this).find('option:selected').text();
	$(this).siblings("h6").text(default_);
});
$("._mSel_key ._mSelect").delegate("select","change",function(){
	var cur=$(this).find('option:selected').text();
	$(this).siblings("h6").text(cur);
});

//选择框key+opt
$("._mSel_opt ._sel_div").height($.CAT.pageHeight()-120);//弹窗高度
$("._mSel_opt").delegate("._mSelect","click",function(){
	$(this).siblings("._sel_div").H_middleM({"hideWay":"hideM"});
});
$("._mSel_opt ._sel_div").delegate("li","click",function(){
	var val_opt=$(this).data("role");
	var txt_opt=$(this).text();
	$(this).parents("._sel_div").siblings("._mSelect").find("h6").text(txt_opt).attr("data-role",val_opt);
	$(this).parents("._sel_div").hide();
	$.CAT.cleanUp();
});	

});
</script>



<style>
._mFile{ position:relative; width:80px; border:#ddd 1px dotted;}
._mFile .opa{ position:absolute; top:0; left:0; opacity:0; -moz-opacity:0; -khtml-opacity:0; -webkit-opacity:0; filter:~"alpha(opacity=0)";}
._mFile .quit{ display:none; position:absolute; bottom:0; right:0; width:15px; height:15px; background:url(images/mode/m/i_quit.png) no-repeat; background-size:100% 100%;}
._mFile.on .quit{ display:block;}
._mFiles{ overflow:hidden;}
._mFiles ._mFile{ float:left; margin-right:5px;}

._mFile2{ position:relative;}
._mFile2 img{ width:80px;}
._mFile2 .mg{ position:absolute; bottom:0; left:90px; height:24px; line-height:24px;}
</style>


<!--dl_file1-->
<dl>
    <dt>dl_file1：</dt>
    <dd class="autoH">
        <div class="_mFile">
            <input id="default_img_1" type="hidden" value="images/mode/m/list_1.jpg" />
            <input class="opa" type="file" id="upload_1" name="" onChange="preImg(this.id,'img_1');" />
            <img id="img_1" src="images/mode/m/list_1.jpg" alt="默认图片" />
        </div>
        <p class="p"><a class="red" onClick='$("#img_1").attr("src",$("#default_img_1").val());'>删除</a> 图片2M之内！</p>
    </dd>
</dl>
<!--dl_file2-->
<dl>
    <dt>dl_file2：</dt>
    <dd class="autoH">
        <div class="_mFile2">
            <input id="default_img_2" type="hidden" value="images/mode/m/list_1.jpg" />
            <img id="img_2" src="images/mode/m/list_1.jpg" alt="默认图片" />
            <div class="mg"><input class="lineNo" id="upload_2" type="file" name=""  onchange="preImg(this.id,'img_2');"/></div>
        </div>
        <p class="p"><a class="red" onClick='$("#img_2").attr("src",$("#default_img_2").val());'>删除</a> 图片2M之内！</p>
    </dd>
</dl>
<!--dl_file3-->
<dl>
    <dt>dl_file3：</dt>
    <dd class="autoH">
        <div class="_mFiles">
            <input id="default_img" type="hidden" value="images/mode/m/pic_default.jpg" />
            <div class="_mFile">
                <input class="opa" type="file" id="upload_11" name="file2[]" onChange="preImg(this.id,'img_11');" />
                <img id="img_11" src="images/mode/m/pic_default.jpg" alt="默认图片" />
                <a class="quit" onClick='$("#img_11").attr("src",$("#default_img").val());'></a>
            </div>
            <div class="_mFile">
                <input class="opa" type="file" id="upload_12" name="" onChange="preImg(this.id,'img_12');" />
                <img id="img_12" src="images/mode/m/pic_default.jpg" alt="默认图片" />
                <a class="quit" onClick='$("#img_12").attr("src",$("#default_img").val());'></a>
            </div>
            <div class="_mFile">
                <input class="opa" type="file" id="upload_13" name="" onChange="preImg(this.id,'img_13');" />
                <img id="img_13" src="images/mode/m/pic_default.jpg" alt="默认图片" />
                <a class="quit" onClick='$("#img_13").attr("src",$("#default_img").val());'></a>
            </div>
        </div>
    </dd>
</dl>

<script>
//上传图片预览
function preImg(sourceId, targetId) { 
	var url = getFileUrl(sourceId); 
	var imgPre = document.getElementById(targetId); 
	imgPre.src = url; 
	function getFileUrl(sourceId) { 
		var url; 
		if (navigator.userAgent.indexOf("MSIE")>=1) { // IE 
			url = document.getElementById(sourceId).value; 
		} else if(navigator.userAgent.indexOf("Firefox")>0) { // Firefox 
			url = window.URL.createObjectURL(document.getElementById(sourceId).files.item(0)); 
		} else if(navigator.userAgent.indexOf("Chrome")>0) { // Chrome 
			url = window.URL.createObjectURL(document.getElementById(sourceId).files.item(0)); 
		} 
		return url; 
	}
} 
$("._dlForm ._mFile input").delegate("","change",function(){
	if($(this).val()!=""){
		$(this).parents("._mFile").addClass("on");
	}else{
		$(this).parents("._mFile").removeClass("on");
	}
});
$("._dlForm ._mFile .quit").click(function(){
	$(this).parents("._mFile").removeClass("on");
});
</script>



        
        
<style>
._dlForm dd.autoH{ height:auto;}
._mTxt{ display:block; width:100%; height:110px; box-sizing:border-box; -moz-box-sizing:border-box; -khtml-box-sizing:border-box; -webkit-box-sizing:border-box; padding:5px; line-height:20px;}
._mTxt2 p{ position:absolute; right:5px; bottom:3px; height:18px; line-height:18px; font-size:12px; color:#aaa;}

._mTxt1 p{ height:21px; font-size:12px; line-height:21px; text-align:right; color:#aaa;}
</style>
        
<!--dl_txt1-->
<dl>
    <dt>dl_txt1：</dt>
    <dd class="_mTxt1 autoH">
        <textarea data-txtnum="20" class="_mTxt" placeholder="请输入留言"></textarea>
        <p>建议在20个字内</p>
    </dd>
</dl>
<!--dl_txt2-->
<dl>
    <dt>dl_txt2：</dt>
    <dd class="_mTxt2 autoH">
        <textarea data-txtnum="20" class="_mTxt" placeholder="请输入留言"></textarea>
        <p>还可以输入<span>20</span>个字</p>
    </dd>
</dl>

<script>
$(function(){

//文本框字数限制
$("._dlForm textarea._mTxt").keyup(function(){
	var txtnum=$(this).data("txtnum");
	if($(this).val().length>txtnum){
		$(this).val($(this).val().substr(0,txtnum));	
	}
});
//文本框2字数限制
$("._dlForm ._mTxt2 textarea").keyup(function(){
	var txtnum=$(this).data("txtnum");
	var len_txt=$(this).val().length;
	$(this).siblings("p").find("span").text(txtnum-len_txt);
	if(len_txt>txtnum){
		$(this).val($(this).val().substr(0,txtnum));	
	}
});

});
</script>
        
        
        
<style>
._mCheck input{ display:none;}
._mCheck label{ display:inline-block; height:30px; line-height:30px; padding-left:25px; background:url(upload/referM/i_check.png) no-repeat 0 center; background-size:18px;}
._mCheck.on label{ background:url(upload/referM/i_check_on.png) no-repeat 0 center; background-size:18px;}	
._mRadios.flex > *{ width:33.3%; padding:0 3px;}
._mChecks.flex > *{ width:25%; padding:0 3px;}
</style>        
        


<!--dl_radio-->
<dl>
    <dt>dl_radio：<em>*</em></dt>
    <dd>
        <ol class="_mRadios flex">
            <div class="_mCheck"><input type="radio" id="radio1" value="1" name="sex" /><label for="radio1">男</label></div>
            <div class="_mCheck"><input type="radio" id="radio2" value="2" name="sex" /><label for="radio2">女</label></div>
            <div class="_mCheck"><input type="radio" id="radio3" value="3" name="sex" /><label for="radio3">保密</label></div>
        </ol>
    </dd> 
</dl>
<!--dl_checkbox-->
<dl>
    <dt>dl_checkbox：</dt>
    <dd>
        <ol class="_mChecks flex">
            <div class="_mCheck"><input type="checkbox" id="check1" value="1" name="fav" /><label for="check1">兴趣一</label></div>
            <div class="_mCheck"><input type="checkbox" id="check2" value="2" name="fav" /><label for="check2">兴趣二</label></div>
            <div class="_mCheck"><input type="checkbox" id="check3" value="3" name="fav" /><label for="check3">兴趣三</label></div>
            <div class="_mCheck"><input type="checkbox" id="check3" value="4" name="fav" /><label for="check3">兴趣四</label></div>
        </ol>
    </dd>
</dl>

</ul>
****************************************************************
	<br>
	<br>
	<br>
****************************************************************
<!--other_check1-->
<div class="_mOneCheck">
    <div class="_mCheck">
        <input type="checkbox" name="loginAuto" id="loginAuto" />
        <label for="loginAuto">自动登录</label>
    </div>
</div>
<!--other_check2-->
<div class="_mOneCheck">
    <div class="_mCheck">
    <input class="hide" type="checkbox" name="regAgree" id="regAgree" />
        <label for="regAgree">同意</label>
        <a href="#"><em>《服务协议》</em></a>
    </div>
</div>

<script>
$(function(){
//被选
$("._mOneCheck ._mCheck label").click(function(){
	$(this).parent().toggleClass("on");	
});	
//多选
$("._mChecks ._mCheck label").click(function(){
	$(this).parent().toggleClass("on");	
});	
//单选
$("._mRadios ._mCheck label").click(function(){
	$(this).parent("._mCheck").addClass("on").siblings("._mCheck").removeClass("on");	
});		
});
</script>

	
    
<style>
._mBtnL{ display:block; width:80%; height:40px; margin:0 auto; box-sizing:border-box; -moz-box-sizing:border-box; -khtml-box-sizing:border-box; -webkit-box-sizing:border-box; line-height:40px; text-align:center; color:#fff; background-color:#e43a3d; border-radius:4px; -moz-border-radius:4px; -khtml-border-radius:4px; -webkit-border-radius:4px;}

._mEnters{ overflow:hidden; height:30px; line-height:30px;}
</style>    

<!--other_btn-->
<input class="_mBtnL" type="submit" value="提交" />
<!--other_side-->
<div class="_mEnters">
    <div class="fl">已有帐号，<a href="index.php?page=index_reg"><em>直接登录</em></a></div>
    <a class="fr" href="#">找回密码</a>
</div>
****************************************************************
</form>

<!--html_-->
</div><!--HTest end-->

<script>
/*script*/

/*script_*/
</script>


<!--新一页获取当页源代码 start-->
<a onClick="getHtml();" href="javascript:;" style=" display:block; position:fixed; right:0; top:5px; padding:10px 20px; background-color:#ddd;">源代码</a>
<script>
function getHtml(){
	 var html=document.getElementsByTagName('html')[0].innerHTML; 
	 var a=window.open("about:blank");
	 var d=a.document;
	 d.write("<xmp>"+html+"</xmp>");
}
</script>
<!--新一页获取当页源代码 end-->

</div><!--mMain end-->
</body>
</html>