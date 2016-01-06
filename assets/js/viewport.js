
window.addEventListener('load', function() {
    var ua = navigator.userAgent;
    var dwidth  = $(window).width();
    var dheight = $(window).height();
    if(ua.indexOf("Android 4") > 0) {
        set_scalable_viewport("android4",dwidth, dheight);
    }else if(ua.indexOf("Android 2") > 0){
        set_scalable_viewport("android2",dwidth, dheight);
    }else if(ua.indexOf("iPad") > 0) {
        set_scalable_viewport("ipad",dwidth ,dheight);
    }else if(ua.indexOf("iPhone OS 6") > 0) {
        set_scalable_viewport("ios6",dwidth, dheight);
    }else {
        set_scalable_viewport("undefined", dwidth, dheight);
    }
}, false);

function set_scalable_viewport(os, dwidth, dheight){
	
    if(os == 'android4'){
    	if(dheight == '1611' || dheight == '1543'){
    		$("#viewport").attr("content","width=device-width, initial-scale=0.45, maximum-scale=0.3, minimum-scale=0.45, user-scalable=yes");
    	}else{
        //$("#viewport").attr("content","user-scalable = 0, width = 800");
        $("#viewport").attr("content","width=device-width, initial-scale=0.5, maximum-scale=0.3, minimum-scale=0.5, user-scalable=yes,target-densitydpi=medium-dpi");
    	}
    }else if(os == 'android2'){
        $("#viewport").attr("content","width=480px, initial-scale=0.4, maximum-scale=0.3, minimum-scale=0.4, user-scalable=yes");
    }else if(os == 'ipad'){
        $("#viewport").attr("content","user-scalable = 0, width = 800");
    }else if(os == 'ios6'){
        $("#viewport").attr("content","user-scalable = 0, width = 800");
    }else{
        $("#viewport").attr("content","user-scalable = 0, width = 800");
    }
}