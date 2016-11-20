

/*
测试时规范笔记：（熟悉后删除）
--对象级别的方法统一前缀："H_";
--方法默认用类名前缀："h_";
--html自定义类名前缀："m"，且后一个字母大写,如"mTabs";
--html弹窗自定义ID前缀："win_"，且后一个字母大写,如"#win_aaa";
*/


/*********************************************************全站公用 START*********/

//对象级别方法
(function($){
	$.fn.extend({
				
				
		/*切换卡*/		
		H_tabs:function(event){		  
			var _this=$(this);
			_this.find(".h_keys li:first-child").addClass("on");
			_this.find(".h_divs .H_div:first-child").show();
			_this.find(".h_keys").delegate("li",event,function(){
				$(this).addClass("on").siblings("li").removeClass("on");
				_this.find(".h_divs .h_div").hide().eq($(this).index()).show();
			});
		},
		
		
		/*显隐层*/
		H_toggle:function(H_parent){//[.H_key&.H_show不同级时需参数]
			var _this=$(this);
			_this.delegate(".h_key","click",function(){
				var _this2=$(this);
				if(!H_parent){The_show=_this2.siblings(".h_toggle");}
				else{The_show=_this2.parents(H_parent).find(".h_toggle");}
				if(The_show.is(':visible')){
					_this2.removeClass("on");
					The_show.hide();
					$("#h_mask").remove();
				}else{
					$(".h_key").removeClass("on");
					_this2.addClass("on");	
					$(".h_toggle").hide();
					The_show.show();
					$.CAT.addMask("noCol");
					The_show.H_hideM("",function(){_this2.removeClass("on");});
					The_show.H_hideS("",function(){_this2.removeClass("on");});
				}
			});
		},
		
		
		//上下居中
		H_middle:function(subHeight){
			if(!subHeight){ subHeight=0;}
			var _this=$(this);
			top_div=($.CAT.pageHeight()-_this.height()+eval(subHeight))/2;
			_this.css("top",top_div);
		},


		//上下居中 + 隐藏模式
		H_middleM:function(opts){
			opts=$.fn.extend({
				hideWay:'',//hide | hideM
				act:'hide',	//remove
				subHeight:0,
				maskCls:"bgBlk"
			},opts);
			var _this=$(this);
			$.CAT.addMask(opts.maskCls);
			_this.H_middle(opts.subHeight);
			_this.show();
			if(opts.hideWay=="hide"){
				_this.H_hideM(opts.act);		   
				_this.H_hideS(opts.act);
			}else if(opts.hideWay=="hideM"){
				$.CAT.pageLock();
				_this.H_hideM(opts.act);		   
			}else{
				$.CAT.pageLock();
				$(".h_quit").delegate('','click',function(){
					$("#h_mask").remove();
					$.CAT.cleanUp();
					if(opts.act=="remove"){
						_this.remove();
					}else{
						_this.hide();
					}
				});
			}
		},


		//隐藏对象_[点击覆盖层或关闭键]
		H_hideM:function(act,callback){
			if(!act){ act="";}
			var _this=$(this);
			$("#h_mask").add($(".h_quit")).delegate('','click',function(){
				if(act=="remove"){//直接删掉
					_this.remove();
				}else{//默认隐藏
					_this.hide();
				}
				$.CAT.cleanUp();
				if(callback){ callback();}
			});		   
		},
		
		
		//隐藏对象[滚动时]
		H_hideS:function(act,callback){
			if(!act){ act="";}
			var _this=$(this);
			var default_sTop=$.CAT.pageScroll();
			$(window).delegate("","scroll",function(){
				var subScroll=$.CAT.pageScroll()-default_sTop;
				if(subScroll>20 || subScroll<-20){
					if(act=="remove"){//直接删掉
						_this.remove();
					}else{//默认隐藏
						_this.hide();
					}
					$.CAT.cleanUp();
					if(callback){ callback();}
				}
			});
		},
		
		
		//返回顶部
		H_gotop:function(minScroll){
			if(!minScroll){ minScroll=0;}
			var _this=$(this);
			$(window).scroll(function(){
				if( $.CAT.pageScroll() > minScroll ){//滚动到100px才显示   
					_this.fadeIn();    
				}else{      
					_this.stop().hide();
				}
			});
			_this.delegate('','click',function(){
				$("html,body").animate({scrollTop:"0px"},200);	
			});
		},


		//限时隐藏
		H_setHide:function(time,act){
			_this=$(this);
			time_=time/1000;
			_this.find(".h_time").text(time_);
			$.fn.varHide=setInterval(function(){
				var s_count=_this.find(".h_time").text();
				_this.find(".h_time").text(s_count-1);
				if(s_count<=1){
					if(act=="remove"){
						_this.remove();
					}else{
						_this.hide();
					}
					$.CAT.cleanUp();
				}
			},1000);
		},
		H_clearSet:function(){ 
			clearInterval($.fn.varHide);
		}

	});
})(jQuery);






//类级别方法
(function($){
	$.CAT={
			 			 
						 
		//添加覆盖层
		'addMask':function(maskCls){
			if(!$("body").is(':has("#h_mask")')){
				$("body").append('<div id="h_mask" class="'+maskCls+'"></div>');	
			}
		},
		

		//屏幕高度
		pageHeight:function(){
			var pageHeight = window.innerHeight; 
			if(typeof pageHeight != "number"){ 
				if(document.compatMode == "number"){ 
					pageHeight = document.documentElement.clientHeight; 
				}else{ 
					pageHeight = document.body.clientHeight; 
				} 
			} 
			return pageHeight;
		},
		
		
		//屏幕宽度
		pageWidth:function(){
			var pageWidth = window.innerWidth; 
			if(typeof pageWidth != "number"){ 
				if(document.compatMode == "number"){ 
					pageWidth = document.documentElement.clientWidth; 
				}else{ 
					pageWidth = document.body.clientWidth; 
				} 
			} 
			return pageWidth;
		},
		
		
		//滚动距离
		'pageScroll':function(){
			var scrollTop=document.documentElement.scrollTop + document.body.scrollTop; 
			return scrollTop;
		},
		
		
		//锁屏
		pageLock:function(){
			$("html").on("touchmove",function(){
				event.preventDefault();	
			});
		},
		//解锁
		pageUnlock:function(){
			$("html").off("touchmove");
		},

			 			 
		//清除 mask & lock & setTime
		cleanUp:function(){
			if($("#h_mask").length>0){
				$("#h_mask").remove();	
			}
			$.CAT.pageUnlock();
			$.fn.H_clearSet();
			$(window).off("scroll");
		},
		
	};
})(jQuery);



/*********************************************************全站公用 END*********/








