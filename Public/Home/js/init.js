define(function(){
	 require.config({ urlArgs: "v=" + (new Date()).getTime() }); // 上线时注释掉此代码 
	 return{
	 	copyright:function(copyr){
            var ye =new Date().getFullYear();
	 		var r='Copyright (C)'+ye+' by '+'四维远见'+'';
	 		$('#'+copyr).html(r);
	 		return r;

	 	}

	 }
});
