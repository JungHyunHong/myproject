<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.infinitescroll.min.js"></script>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <title>test</title>
<body>
	

<button onclick="test()"> 클릭하세요 </button>
<p id="demo1"></p>
<p id="demo2"></p>




<script type="text/javascript">
var verString = get_version_of_IE(); 
	 var verNumber = parseInt ( get_version_of_IE() ); 
function test(){
	 

	alert(verNumber);
}
	
function get_version_of_IE () { 

	 var word; 
	 var version = "N/A"; 

	 var agent = navigator.userAgent.toLowerCase(); 
	 var name = navigator.appName; 

	 // IE old version ( IE 10 or Lower ) 
	 if ( name == "Microsoft Internet Explorer" ) word = "msie "; 

	 else { 
		 // IE 11 
		 if ( agent.search("trident") > -1 ) word = "trident/.*rv:"; 

		 // IE 12  ( Microsoft Edge ) 
		 else if ( agent.search("edge/") > -1 ) word = "edge/"; 
	 } 

	 var reg = new RegExp( word + "([0-9]{1,})(\\.{0,}[0-9]{0,1})" ); 

	 if (  reg.exec( agent ) != null  ) version = RegExp.$1 + RegExp.$2; 

	 return version; 
} 

function checkVersion () { 

/*	 var tag1 = document.getElementById( "demo1" ); 
	 var tag2 = document.getElementById( "demo2" ); */

	 var verString = get_version_of_IE(); 
	 var verNumber = parseInt ( get_version_of_IE() ); 

/*	 tag1.innerHTML = verString + " " + verNumber; 

	 if ( verString == "N/A" ) tag2.innerHTML = "인터넷 익스플로러가 아닌, 다른 브라우저를 사용중이십니다."; */
} 




</script>
</body>
</html>


  


