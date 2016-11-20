//幻灯片 or 公告栏
//var为局部变量，事件后或重调用时变量不暴露或不冲突，如要保留每次返回的变量，可前不加var
//css("bottom")：火狐获值为-height();
//return 就不用设i.off样式
//必要时html可添加值cur_index[当前index]和sum_page[总页数]


(function($){
	$.fn.extend({
		H_pics:function(opt){
			var defaults={
				mode:"slide", //or "fade" 左右滑动or渐隐渐显
				pos_os:"center", //or "right" 小圆圈定位
				gap_o:10,//小圆圈间隔
				line:1,//横向个数
				row:1,//纵向排数
				effect:"",//or "return" 是否回转
				autoPlay:false,//是否自动播放
				delayTime:4000,//间隔时长
				next:"" //or "onlyOne" 多图是整屏轮播还是逐个轮播
			}
			var opt=$.extend(defaults,opt);

				var _this=$(this);
				var cur=0;
				eachPage=opt.line*opt.row;
				var $item=_this.find(".h_pics .item");
				var $wrap_inner=_this.find(".h_pics");
				var len_item=$item.length;
				var h_item=$item.height();
				if(eachPage==1){//单图轮播
					var w_item=_this.width();
					$item.width(w_item);
				}else{//多图轮播
					var w_item=$item.width();
				}
				
				//item间隔，含margin,padding,border值
				var gap_wM=parseInt($item.css("margin-right"))+parseInt($item.css("margin-left"));
				var gap_hM=parseInt($item.css("margin-bottom"))+parseInt($item.css("margin-top"));
				var gap_wP=parseInt($item.css("padding-right"))+parseInt($item.css("padding-left"));
				var gap_hP=parseInt($item.css("padding-bottom"))+parseInt($item.css("padding-top"));
				var gap_wB=parseInt($item.css("border-right-width"))+parseInt($item.css("border-left-width"));
				var gap_hB=parseInt($item.css("border-bottom-width"))+parseInt($item.css("border-top-width"));
				if(!gap_wM){gap_wM=0;}
				if(!gap_hM){gap_hM=0;}
				if(!gap_wP){gap_wP=0;}
				if(!gap_hP){gap_hP=0;}
				if(!gap_wB){gap_wB=0;}
				if(!gap_hB){gap_hB=0;}
				gap_w=eval(gap_wM+gap_wP+gap_wB);
				gap_h=eval(gap_hM+gap_hP+gap_hB);
				h_itemFull=h_item+gap_h;
				w_itemFull=w_item+gap_w;
				
				if(eachPage==1){//单图轮播
					var page=len_item;
					var w_page=w_itemFull;
				}else{//多图轮播
					var page=Math.ceil(len_item/eachPage);
					var w_page=w_itemFull*opt.line;
				}
				fullPage=Math.floor(len_item/eachPage);
				len_last_page=len_item-fullPage*eachPage;
				last_page_first=fullPage*eachPage;


				//加外容器wraper
				w_wraper=w_page-gap_wM;
				if(opt.next=="onlyOne"){w_wrapInner=w_itemFull*len_item;}
				else{w_wrapInner=w_page*page;}				
				$wrap_inner.css({width:w_wrapInner,"position":"absolute",top:0,left:0});
				$wrap_inner.wrap("<div class='wraper'></div>");
				_this.find(".wraper").css({width:""+w_wraper+"px","height":""+h_itemFull*opt.row+"px","overflow":"hidden","position":"relative","margin":"0 auto"});
				

				//.item分组用.unit包含
				if(opt.next!=="onlyOne"){
					if(opt.line>1 || opt.row>1){
						var html_units='';
						for(j=0;j<fullPage;j++){
							var html_unitInner='';
							for(i=0;i<eachPage;i++){
								html_item=$item.eq(eval(i+eachPage*j)).html();
								html_item='<div class="item">'+html_item+'</div>';
								html_unitInner+=html_item;
							}
							var html_unit='';
							html_unit+='<div class="unit">';
							html_unit+=html_unitInner;
							html_unit+='</div>';
							html_units+=html_unit;
						}
						if(len_last_page>0){
							var html_lastPage='';
							for(k=last_page_first;k<len_item;k++){
								html_lastPageInner=$item.eq(k).html();
								html_lastPageInner='<div class="item">'+html_lastPageInner+'</div>';
								html_lastPage+=html_lastPageInner;
							}
							var html_unitLast='';
							html_unitLast+='<div class="unit">';
							html_unitLast+=html_lastPage;
							html_unitLast+='</div>';
							html_units+=html_unitLast;
						}
						$wrap_inner.html(html_units);
						_this.find(".unit").css({width:""+w_page+"px","float":"left","overflow":"hidden"});
					}
				}
				
								
				//小圆圈切换
				if(opt.next!=="onlyOne"){
					if(page>1){//2页以上才显示
						if(_this.find(".os").length==0){
							_this.append('<div class="os"></div>');
						}
						var $os=_this.find(".os");
						html_os=$os.html();
						if(!html_os){
							var Os="";
							for(var x=1;x<=page;x++){
								Os+='<div class="o">'+x+'</div>';
							}
							$os.append(Os);
						}
						$os_o=_this.find(".os .o");
						$os_o.first().addClass("on");
						w_o=$os_o.width();
						var gap_o=opt.gap_o;
						if(opt.pos_os == "center"){//居中
							$os_o.css({"margin":"0 "+gap_o/2+"px"});
							w_os=w_o*page+gap_o*page;
							m_os=eval(-w_os/2);
							$os.css({"left":"50%","width":w_os,"margin-left":m_os});						
						}else if(opt.pos_os == "right"){//在右边
							$os.css("right","20px");	
							$os_o.css("margin-left",""+gap_o+"px");
						}else{//在左边
							$os_o.css("margin-left",""+gap_o+"px");
						}
						$os_o.mouseover(function(){//mouseover比hover快？
							var cur_o=$(this).index();
							cur=cur_o;
							_this.find(".cur_index").text(cur+1);//当前index
							var $arrow_lt=_this.find(".left").attr("class");
							var $arrow_rt=_this.find(".right").attr("class");
							_this.find(".os .o").eq(cur_o).addClass("on").siblings(".o").removeClass("on");
							if(cur_o==page-1){
								_this.find(".right").addClass("off");
								if($arrow_lt.indexOf("off")>=0){_this.find(".left").removeClass("off");}
							}
							else if(cur_o==0){
								_this.find(".left").addClass("off");
								if($arrow_rt.indexOf("off")>=0){_this.find(".right").removeClass("off");}
							}
							else{_this.find("i").removeClass("off");}
							//如为slide[默认为fade]
							if(opt.mode=="slide"){
								$wrap_inner.animate({left:-w_page*cur_o});
							}else{
								$wrap_inner.hide().css({left:-w_page*cur_o}).fadeIn();
							}
						});
					}
				}

	
				//arrow定位
				if(_this.find(".arrow").length==0){
					_this.append('<div class="arrow left"></div><div class="arrow right"></div>');
				}
				var top_arrow=_this.find(".arrow").css("top");
				var btm_arrow=_this.find(".arrow").css("bottom");
				var btm_arrow_ff=_this.find(".arrow").height();//火狐
				if(top_arrow=="auto" && btm_arrow=="auto" || btm_arrow=="-"+btm_arrow_ff+"px"){
					h_arrow=_this.find(".arrow").height();
					btm_arrow_=(h_itemFull*opt.row-h_arrow)/2;
					_this.find(".arrow").css("bottom",btm_arrow_);
				}
				//arrow事件触发
				if(opt.next=="onlyOne"){page=len_item-eachPage+1;w_page=w_itemFull;}
				$arrow=_this.find(".arrow");
				$arrow.bind("click",function(){
					var arrow_cls=$(this).attr("class");
					if(opt.effect=="return"){//回转
						arrow_cls.indexOf("right") >= 0 ? cur++ : cur--;
						if(cur > page-1) cur = 0; 
						if(cur < 0) cur = page - 1; 	
						if(opt.mode=="slide"){//左右滑动
							$wrap_inner.animate({left:-w_page*cur});
						}else{//渐隐渐显
							$wrap_inner.hide().css({left:-w_page*cur}).fadeIn();
						}
					}else{
						if(arrow_cls.indexOf("off")<0){//不回转时到最后加off
							arrow_cls.indexOf("right") >= 0 ? cur++ : cur--;
							if(cur > page-2){_this.find(".right").addClass("off");}
							if(cur == page-2){_this.find(".right").removeClass("off");}
							if(cur > page-1){cur = page-1;}
							if(cur==1){_this.find(".left").removeClass("off");}
							if(cur < 1){_this.find(".left").addClass("off");}						
							if(cur < 0){cur = 0;}
							if(opt.mode=="slide"){//左右滑动
								$wrap_inner.animate({left:-w_page*cur});
							}else{//渐隐渐显
								$wrap_inner.hide().css({left:-w_page*cur}).fadeIn();
							}
						}
					}
					_this.find(".os .o").eq(cur).addClass("on").siblings(".o").removeClass("on");
					_this.find(".cur_index").text(cur+1);//当前index
				});
				
				
				//自动播放
				_this.find(".left").addClass("off");
				if(opt.autoPlay==true){
					var auto=setInterval(function(){_this.find(".right").click()},opt.delayTime);			
					$item.add($os_o).add($arrow).hover(function(){
						clearInterval(auto);
					},function(){
						auto=setInterval(function(){_this.find(".right").click()},opt.delayTime);
					});
				}
				
				
				//默认状态
				_this.find(".cur_index").text("1");//当前index
				_this.find(".sum_page").text(page);//总页数
				
		},
		
		
		//单图轮播
		H_slide:function(delayTime){
			_this=$(this);
			_this.H_pics({
				mode:"slide",
				pos_os:"center",
				gap_o:10,
				line:1,
				row:1,
				effect:"return",
				autoPlay:true,
				delayTime:4000 || delayTime,
				next:""
			});
		},


		//多图[整屏]轮播
		H_slides:function(line,delayTime){
			_this=$(this);
			_this.H_pics({
				mode:"slide",
				pos_os:"center",
				gap_o:10,
				line:line,
				row:1,
				effect:"return",
				autoPlay:false,
				delayTime:4000 || delayTime,
				next:""
			});
		},


		//多图[逐个]轮播
		H_slides_one:function(line,delayTime){
			_this=$(this);
			_this.H_pics({
				mode:"slide",
				pos_os:"center",
				gap_o:10,
				line:line,
				row:1,
				effect:"",
				autoPlay:false,
				delayTime:4000 || delayTime,
				next:"onlyOne"
			});
		}

		
	});
})(jQuery);