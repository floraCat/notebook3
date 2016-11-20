
//此脚本文件为共用脚本，请尽量不要改动

/*********************************************************全站公用 START*********/

$(function(){
	
	//鼠标滑动下拉
	flag_hov=0;
	$(".H_hov").hover(function(){
		if(flag_hov==0){
			$(this).find(".H_a").addClass("on");
			$(this).find(".H_div").slideDown(200);
			flag_hov=1;
		}else{
			$(this).find(".H_a").removeClass("on");
			$(this).find(".H_div").slideUp(200);
			flag_hov=0;
		}
	});

	//切换卡[H_clks]
	$(".H_clks .H_keys").delegate("li","click",function(){
		$(this).addClass("on").siblings("li").removeClass("on");
		$(this).parents(".H_clks").find(".H_divs .H_div").hide().eq($(this).index()).show();
		//$(window).scroll();//延时加载时
	});

});



//返回顶部
$(window).scroll(function(){
	if( pageScroll() > 100 ){//滚动到100px才显示   
		$(".HGotop").fadeIn();    
	}else{      
		$(".HGotop").stop().hide();
	}
});
$(function(){
	$(".HGotop").delegate('','click',function(){
		$("html,body").animate({scrollTop:"0px"},200);	
	});
});


/*********************************************************全站公用 END*********/






/*********************************************************自定义函数 START*********/


var valT=0;//setTimeout是否在进行


//屏幕高度
function pageHeight(){
	var pageHeight = window.innerHeight; 
	if(typeof pageHeight != "number"){ 
		if(document.compatMode == "number"){ 
			pageHeight = document.documentElement.clientHeight; 
		}else{ 
			pageHeight = document.body.clientHeight; 
		} 
	} 
	return pageHeight;
}//pageHeight_end


//屏幕宽度
function pageWidth(){
	var pageWidth = window.innerWidth; 
	if(typeof pageWidth != "number"){ 
		if(document.compatMode == "number"){ 
			pageWidth = document.documentElement.clientWidth; 
		}else{ 
			pageWidth = document.body.clientWidth; 
		} 
	} 
	if(pageWidth>=640){	pageWidth=640;}
	if(pageWidth<=320){	pageWidth=320;}
	return pageWidth;
}//pageWidth_end


//滚动距离
function pageScroll(){
	var scrollTop=document.documentElement.scrollTop + document.body.scrollTop; 
	return scrollTop;
}//pageScroll_end


//锁屏
function pageLock2(){
	var sum_pageH=pageHeight()+pageScroll();
	$("html,body").height(sum_pageH).css("overflow-y","hidden");
}
//解锁
function pageUnlock2(){
	$("html,body").height("auto").css("overflow-y","auto");
}


//添加覆盖层
function addMask(maskId){
	if(!$("body").is(':has("#'+maskId+'")')){
		$("body").append('<div id="'+maskId+'"></div>');	
	}
}//addMask_end


//隐藏对话框_[点击覆盖层或对话框关闭键]
function hideM(maskId,dialogDiv,act,keyOn){
	$("#"+maskId+"").add($(".H_quit")).delegate('','click',function(){
		$("#"+maskId+"").remove();
		if(act=="remove"){//直接删掉
			$(dialogDiv).remove();
		}else{//默认隐藏
			$(dialogDiv).hide();
		}
		pageUnlock2();
		if(valT==1){ clearT();}
		if(keyOn){ $(keyOn).removeClass("on");}
	});		   
}//hideM_end


//隐藏对话框[滚动时]
function hideS(maskId,dialogDiv,act,keyOn){
	$(window).scroll(function(){
		$("#"+maskId+"").remove();
		if(act=="remove"){//直接删掉
			$(dialogDiv).remove();
		}else{//默认隐藏
			$(dialogDiv).hide();
		}
		pageUnlock2();
		if(valT==1){ clearT();}
		if(keyOn){ $(keyOn).removeClass("on");}
	});
}//hideS_end


//点击下拉切换
function clkToggle(toggleDiv,$this,parentDiv,noHide){
	if($($this).parents(parentDiv).find(toggleDiv).is(':visible')){
		if($this){ $($this).removeClass("on");}
		$($this).parents(parentDiv).find(toggleDiv).hide();
		$("#h_mask").remove();
	}else{
		if($this){ $($this).addClass("on");}
		$($this).parents(parentDiv).find(toggleDiv).show().parents(parentDiv).siblings(parentDiv).find(toggleDiv).hide();
		addMask("h_mask");
	};
	if(noHide){
		if(noHide=="hideM"){
			hideM("h_mask",toggleDiv,"",$this);		   
		}
	}else{
		hideM("h_mask",toggleDiv,"",$this);		   
		hideS("h_mask",toggleDiv,"",$this);
	}
}//clkToggle_end


//上下居中
function wCen(dialogDiv,subHeight){
	top_div=(pageHeight()-$(dialogDiv).height()+subHeight)/2;
	$(dialogDiv).css("top",top_div);
}


//对话框四周居中
function dialogCen(maskId,dialogDiv,subHeight,noHide){
	addMask(maskId);
	wCen(dialogDiv,subHeight);
	$(dialogDiv).show();
	if(!noHide){
		hideM(maskId,dialogDiv,"");		   
		hideS(maskId,dialogDiv,"");
	}
	if(noHide=="hideM"){
		pageLock2();
		hideM(maskId,dialogDiv,"");		   
	}
}


//限时
function setT(maskId,dialogDiv,time){
	t=setTimeout(function(){
		$(dialogDiv).remove();
		$("#"+maskId+"").remove();
		pageUnlock2();
	},time);	
	valT=1;
}
//取消限时
function clearT(){
	clearTimeout(t);	
	valT=0;
}


/*********************************************************自定义函数 END*********/



