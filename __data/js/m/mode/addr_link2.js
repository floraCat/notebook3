// JavaScript Document

//地址加载[全国]
$(function(){
	//初始
	$this=$("#_linkAddr2");
	$key=$this.find("._mSelect");
	$opt=$this.find("._sel_div");
	$this.find("._sel_div").height($.CAT.pageHeight()-120);//弹窗高度
	$key.each(function(){
		var i=$(this).index();
		var txt=$(this).find("h6").text();
		$opt.eq(i).find("ul").html('<li data-val="">'+txt+'</li>');
		$(this).click(function(){
			$opt.eq(i).H_middleM({"hideWay":"hideM"});
		});
	});
	$opt.delegate("","touchmove",function(){
		$.CAT.pageUnlock();	
	});
	//默认加载省
	_toProv2($opt.find('._prov'));
	//选中省
	$opt.find("._prov").delegate("li","click",function(){
		if($(this).data("val")!=""){
			$opt.siblings("input[name='_linkProv']").val($(this).data("val"));
			$key.find("._prov h6").text($(this).text());
			_toCity2($opt.find('._prov'),$opt.find('._city'),$opt.find('._area'));	
			$opt.find("._prov").parent().hide();
			$opt.find("._city").parent().H_middleM({"hideWay":"hideM"});
		}
	});	
	//选中市
	$opt.find("._city").delegate("li","click",function(){
		if($(this).data("val")!=""){
			$opt.siblings("input[name='_linkCity']").val($(this).data("val"));
			$key.find("._city h6").text($(this).text());
			_toArea2($opt.find('._prov'),$opt.find('._city'),$opt.find('._area'));	
			$opt.find("._city").parent().hide();
			$opt.find("._area").parent().H_middleM({"hideWay":"hideM"});
		}
	});	
	//选中区
	$opt.find("._area").delegate("li","click",function(){
		if($(this).data("val")!=""){
			$opt.siblings("input[name='_linkArea']").val($(this).data("val"));
			$key.find("._area h6").text($(this).text());
			$opt.find("._area").parent().hide();
			$.CAT.cleanUp();
		}
	});	
});

//加载省
function _toProv2(prov) {
    Location();
	var _mOpt;
	for(var i in items[0]){
		_mOpt="<li data-val='"+i+"'>"+items[0][i]+"</li>";
		prov.append(_mOpt);	
	}
}
//加载市
function _toCity2(prov,city,area){
	if(city.find("li").length > 1){
		city.find("li").eq(0).siblings("li").remove();	
	}
	if(area.find("li").length > 1){
		area.find("li").eq(0).siblings("li").remove();		
	}
	var val1=prov.parent().siblings("input[name='_linkProv']").val();
	var index="0."+val1;	
	for(var i in items[index]){
		_mOpt="<li data-val='"+i+"'>"+items[index][i]+"</li>";
		city.append(_mOpt);	
	}
}
//加载区
function _toArea2(prov,city,area){
	if(area.find("li").length > 1){
		area.find("li").eq(0).siblings("li").remove();		
	}
	var val1=prov.parent().siblings("input[name='_linkProv']").val();
	var val2=city.parent().siblings("input[name='_linkCity']").val();
	var index = "0." + val1 + "." + val2;
	for(var i in items[index]){
		_mOpt="<li data-val='"+i+"'>"+items[index][i]+"</li>";
		area.append(_mOpt);	
	}
}
