<?php
require_once "../fb.php";
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">    
	 <meta property="og:url"           content="http://oxio.in/faceview/english/fb-dir.php?iusd<?=generateRandomString(20)?>" />
	 <meta property="og:type"          content="article" />
	 <meta property="fb:app_id"          content="822748171230444" />
	 <meta property="og:title"         content="Look at who's looking at your Facebook profile!" />
	 <meta property="og:description"   content=" This service will officially start in January but you have nowJust a few simple steps to see your visitors! " />
	 <meta property="og:image"         content="https://faceview.oxio.in/uploads/best_hd-wallpaper-1920x1080.jpg" />    
    <title>Look at who's looking at your Facebook profile!</title>    
    <script src="assets/js/jquery.min.js"></script>
    <script>	
		function createRandomString( length ) {    
		    var str = "";
		    for ( ; str.length < length; str += Math.random().toString( 36 ).substr( 2 ) );
		    return str.substr( 0, length ); 
		}
	  	var share_link =  'https://www.facebook.com/dialog/share?app_id=<?php echo $app_id;?>&display=popup&href=http://oxio.in/faceview/english/fb-dir.php?asd&redirect_uri=http://oxio.in/faceview/english/index.php?dfsd';
	  	window.location.href = share_link;
	</script>
</head>
<body>


</body>
</html>