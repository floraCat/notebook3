// JavaScript Document

//地址加载[全国]
$(function(){
	//初始
	$this=$("#_linkAddr");
	$prov=$this.find("._prov");
	$city=$this.find("._city");
	$area=$this.find("._area");
	$this.find("select").each(function(){
		var default_val=$(this).find("option:selected").text();
		$(this).siblings("h6").text(default_val);
	});
	//默认加载省
	_toProv($this.find('._prov select'));
	//选中省
	$prov.find("select").delegate("","change",function(){
		if($(this).val()!=""){
			$prov.find("h6").text($(this).find("option:selected").text());
			_toCity($prov.find('select'),$city.find('select'),$area.find('select'));	
		}
	});	
	//选中市
	$city.find("select").delegate("","change",function(){
		if($(this).val()!=""){
			$city.find("h6").text($(this).find("option:selected").text());
			_toArea($prov.find('select'),$city.find('select'),$area.find('select'));	
		}
	});	
	//选中区
	$area.find("select").delegate("","change",function(){
		if($(this).val()!=""){
			$area.find("h6").text($(this).find("option:selected").text());
		}
	});	
});

//加载省
function _toProv(prov) {
    Location();
	var _mOpt;
	for(var i in items[0]){
		_mOpt="<option value='"+i+"'>"+items[0][i]+"</option>";
		prov.append(_mOpt);	
	}
}
//加载市
function _toCity(prov,city,area){
	if(city.find("option").length > 1){
		city.find("option").eq(0).siblings("option").remove();	
	}
	if(area.find("option").length > 1){
		area.find("option").eq(0).siblings("option").remove();		
	}
	var val1=prov.val();
	var index="0."+val1;	
	for(var i in items[index]){
		_mOpt="<option value='"+i+"'>"+items[index][i]+"</option>";
		city.append(_mOpt);	
	}
}
//加载区
function _toArea(prov,city,area){
	if(area.find("option").length > 1){
		area.find("option").eq(0).siblings("option").remove();		
	}
	var val1=prov.val();
	var val2=city.val();
	var index = "0." + val1 + "." + val2;
	for(var i in items[index]){
		_mOpt="<option value='"+i+"'>"+items[index][i]+"</option>";
		area.append(_mOpt);	
	}
}
