
/******弹窗 	START********/
(function($){
	$.CAT2={
		H_dialog:function(opts){
			var defaults={
				_for:'',//->H_alert/H_confirm/H_setTime
				icon:'',//图标
				title:'',//标题
				note:'',//说明文本
				time:false,//限时
				mask:"col3",//覆盖层类名
				hide:""
			}
			var opts=$.extend(defaults,opts);
			
				if(opts.icon=="note"){ icon='<div class="img img_note"></div>';}
				else if(opts.icon=="ok"){ icon='<div class="img img_ok"></div>';}
				else{ icon='';}
			
			if(opts.time){//time
				var time_=opts.time/1000;
				timeNote='本窗口<span class="h_time">'+time_+'</span>s后自动关闭！';
			}
			
			//H_alert
			if(opts._for=="win_alert"){
				var id="win_alert";
				var html = '<div id="'+id+'" class="mDialog cen yj5 z999">'
								+icon
								+'<p class="f15 mgB5">'+opts.title+'</p>'
								+'<div class="over mgT20">'
									+'<a class="h_quit btnS bgWhite fr">取消</a>'
								+'</div>'
							+'</div>';
			}
			//H_confirm
			if(opts._for=="win_confirm"){
				var id="win_confirm";
				var html = '<div id="'+id+'" class="mDialog cen yj5 z999">'
								+icon
								+'<p class="f15">'+opts.title+'</p>'
								+'<div class="over mgT20">'
									+'<a class="h_ok btnS zd fl">确定</a>'
									+'<a class="h_quit btnS bgWhite fr">取消</a>'
								+'</div>'
							+'</div>';
			}
			//H_setTime
			if(opts._for=="win_setTime"){
				var id="win_setTime";
				var html = '<div id="'+id+'" class="mDialog cen yj5 z999">'
								+icon
								+'<p class="f15 bold mgB5">'+opts.title+'</p>'
								+'<div class="light">'+timeNote+'</div>'
							+'</div>';
			}

			$('body').append(html);
			$("#"+id+"").H_middleM({hideWay:opts.hide});
			$("#"+id+"").delegate(".h_ok","click",function(){//确定
				$("#"+id+"").remove();
				$("#h_mask").remove();
				if(opts.ok){ opts.ok();}//回调
			});
			//限时消失
			if(opts.time){
				$("#"+id+"").H_setHide(opts.time);
			}
		},
		//弹窗alert
		H_alert:function(title,icon){
			$.CAT2.H_dialog({
				_for:"win_alert",
				icon:icon,
				title:title
			});
		},
		//弹窗confirm
		H_confirm:function(title,callback,icon){
			$.CAT2.H_dialog({
				_for:"win_confirm",
				icon:icon,
				title:title,
				ok:callback
			});
		},
		//弹窗setTime
		H_setTime:function(title,time,icon){
			$.CAT2.H_dialog({
				_for:"win_setTime",
				icon:icon,
				title:title,
				time:time,
				hide:"hideM"
			});
		},

	};	
})(jQuery);
/******弹窗 END********/

