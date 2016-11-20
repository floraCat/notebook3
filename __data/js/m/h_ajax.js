

//对象级别方法
(function($){
	$.fn.extend({
				
		//ajax分页
		H_ajaxLoad:function(cur_len,url,act){//当前条目总数/请求php路径/请求action
			var defaults={
				eachPage:2,//每页加载数
				maxPage:2,//最大加载页数
				curPage:1,//当前页数
				default_len:8,//条目数超过此值才加载
			}
			var opts=$.extend(defaults,cur_len,act,url);
			var _this=$(this);
			
			if(opts.cur_len>=opts.default_len){
				
				if(!_this.hasClass("ajax_ed")){
					btmTxt='<div id="loadText" style=" height:40px; line-height:40px; text-align:center;">正在努力加载更多商品…</div>'
							+'<div id="loadEnd" style="display:none; height:40px; line-height:40px; text-align:center;">已加载完成！</div>'
							+'<div id="curPage" style="display:none;">'+opts.curPage+'</div>';	
					_this.after(btmTxt); 
				}
				
				var flag = true;
				$(window).scroll(function(){
					if ($(document).height() - $(this).scrollTop() - $(this).height()<20){	
						if (flag){
							flag=false;
							var eachpage=opts.eachPage;
							var maxPage=opts.maxPage;
							var curPage=_this.siblings("#curPage").text();
							if(curPage<=maxPage){
								curPage=parseFloat(curPage)+1;
								_this.siblings("#curPage").text(curPage);
								var submitdata={
									eachpage:eachpage,
									curPage:opts.curPage,
									act:opts.act
								};
								$.post(opts.url,submitdata,
									function(data){
										opts.ok(data);
										if(_this.hasClass("h_flow")){//带瀑布流
											_this.append($boxes).imagesLoaded(function(){_this.masonry('appended',$boxes);});
										}else{
											_this.append($boxes);
										}
										flag=true;
									}
								,'json');
							}else{
								_this.siblings("#loadText").hide();
								_this.siblings("#loadEnd").show();
							};
						}
					}
				});	//scroll	
			}
			
		}

	});
})(jQuery);

