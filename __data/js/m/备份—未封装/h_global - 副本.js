
//此脚本文件为共用脚本，请尽量不要改动

/*********************************************************全站公用 START*********/



(function($){
	$.fn.extend({
		/*切换卡*/		
		H_tabs:function(event){		  
			var $this=$(this);
			$this.find(".H_keys li:first-child").addClass("on");
			$this.find(".H_divs .H_div:first-child").show();
			$this.find(".H_keys").delegate("li",event,function(){
				$(this).addClass("on").siblings("li").removeClass("on");
				$this.find(".H_divs .H_div").hide().eq($(this).index()).show();
			});
		},
		/*显隐层*/
		H_toggle:function(H_key,H_div){		  
			if(!H_key){ H_key=".H_key";}else{ H_clk=""+H_key+"";}//设置H_key的类名
			if(!H_div){ H_div=".H_div";}else{ H_div=""+H_div+"";}//设置H_div的类名
			var $this=$(this);
			$this.delegate(H_key,"click",function(){
				if($(this).siblings(H_div).is(':visible')){
					$(this).removeClass("on");	
					$(this).siblings(H_div).hide();
					$("#h_mask").remove();
				}else{
					$this.find(H_key).removeClass("on");	
					$this.find(H_div).hide();
					$(this).addClass("on");	
					$(this).siblings(H_div).show();
					addMask("h_mask");
					hideM("h_mask",$this.find(H_div),"",$this.find(H_key));
				}
			});
		}
	});
})(jQuery);







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
	$(".H_clks .H_keys li:first-child").addClass("on");
	$(".H_clks .H_divs .H_div:first-child").show();
	$(".H_clks .H_keys li").click(function(){
		$(this).addClass("on").siblings("li").removeClass("on");
		var cur=$(this).index();
		$(this).parents(".H_clks").find(".H_divs .H_div").hide().eq(cur).show();
		$(window).scroll();	
	});

	//顶部购物车
	$(".TopCart").delegate(".Del","click",function(){
		$(this).parents(".Dl").animate({"margin-left":"-220px"},400,function(){
			$(this).remove();
			flag_hov=0;
			var len=$(".TopCart").find(".Dl").length;
			if(len==0){
				$("#Top_cart").find(".H_div h6").text("购物车没有商品");
				$("#Top_cart").find(".H_div .txtR").remove();
			}
			$("#Top_cart").find(".H_div").mouseout(function(){
				flag_hov=1;
			});
		});
	});	

	//首页搜索切换
	$(".Search_wrap .Tabs").delegate("a","click",function(){
		$(this).addClass("on").siblings("a").removeClass("on");	
		$(".Search_wrap .HSearch").eq($(this).index()).show().siblings(".HSearch").hide();
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




/******ajax分页 START********/
(function($){
	$.extend({
		ajaxLoad:function(opts){
            if('undefined' === (typeof opts) || 'object' !== (typeof opts)){
                console.log('参数错误！');
                return;
            }
			var defaults={
				container:'',
				eachPage:2,//每页加载数
				maxPage:2,//最大加载页数
				act:'',
				url:'',
				btmTxt:false,//底部提示
				cur_len:10,//当前条目数量
				default_len:10,//条目数超过此值才执行ajaxLoad
			}
			var opts=$.extend(defaults,opts);
			if(opts.cur_len>=opts.default_len){
				var $container = opts.container;
				/* 容器不存在,则不再执行 add by alex start */
				if(0==$container.size()){
					return;
				}
				/* 容器不存在,则不再执行 add by alex end */
				if(!opts.btmTxt==''){
					if(!$container.hasClass("ajax_ed")){
						btmTxt='<div class="note hlh40 cen" id="loadText">正在努力加载更多商品…</div>'
								+'<div class="note hlh40 cen" id="loadEnd" style="display:none;">已加载完成！</div>'
								+'<div id="page" style="display:none;">1</div>';	
						$container.after(btmTxt); 
					}
				}
				var flag = true;
				$(window).scroll(function(){
					if ($(document).height() - $(this).scrollTop() - $(this).height()<20){	
						if (flag){
							flag=false;
							var eachpage=opts.eachPage;
							var maxPage=opts.maxPage;
							var page=opts.container.siblings("#page").text();
							if(page<=maxPage){
								page=parseFloat(page)+1;
								opts.container.siblings("#page").text(page);
								var submitdata={
									eachpage:eachpage,
									page:page,
									act:opts.act
								};
								$.post(opts.url,submitdata,
									function(data){
										opts.ok(data);
										$container.append($boxes);
										flag=true;
									}
								,'json');
							}else{
								opts.container.siblings("#loadText").hide();
								opts.container.siblings("#loadEnd").show();
							};
						}
					}
				});	//scroll	
			}
		}//ajaxLoad
	});	
})(jQuery);
/******ajax分页 END********/

