<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html prefix="og:http://ogp.me/ns#" itemscope itemtype="http://schema.org/Product" xmlns="http://www.w3.org/1999/xhtml">



<head>
    <meta name="viewport" content="width=device-width" />
    <link href="favicon.ico" rel="shortcut icon" hreflang="en-us" type="image/x-icon" />
    <meta name="google-site-verification" content="HNZ4ajCc_qbQ9uU2xqm3bNeNnz52GcgZT2k2EDgL16E" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8" />
    <meta name="msvalidate.01" content="0115DEE5670E9B0C5999DD7007854BBB" />

    <title>Talk to a Doctor Online, Free Online Doctor, Live Chat with Doctor</title>
    <link href="Content/cssbc8c.css?v=InJltDZ8bHen1D1USNEWkUld_x2v8aCeoa3XA2OLqN81" rel="stylesheet"/>

    <script src="bundles/modernizr70f4?v=eoxdJieroS4aKFRd6Ig4jp_oRSgXQeeG6hbHlkvv-EY1"></script>

    <script src="bundles/jquery53b1?v=Mr8z7cwRVicid8NnJliEmOE7FU6vgy1m3T3KGKT0ZA01"></script>

    <link rel="author" href="https://plus.google.com/+icliniccareonlinedoctor" />
    
<script type="text/javascript" src="Scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="Scripts/jquery.jcarousel.js"></script>
    <script src="Scripts/XSSValidate.js" type="text/javascript"></script>
    <link href="content/CouponCode_form.css" hreflang="en-us" type="text/css" rel="stylesheet" />
    <!--[if IE ]>
            <style type="text/css">
                #searchtext{padding:0 4px !important;}   
            </style>
    <![endif]-->
    <script type='text/javascript'>

        //Check checkbox change of appointmentcode's checkbox
        function redirectToVideoChat() {
            window.location.href = 'doctor-video-call.html';
        }
        function appointmentcheckchange() {
            if (document.getElementById('prehidden').value == 0) {
                document.getElementById('consultappointmentcode').removeAttribute("disabled");
                document.getElementById('videoconsult').style.backgroundColor = "#ec0505";
                document.getElementById('prehidden').value = 1;
            } else {
                document.getElementById('prehidden').value = 0;
                document.getElementById('videoconsult').style.backgroundColor = "#005aca";
                document.getElementById('consultappointmentcode').setAttribute("disabled", "disabled");
            }
        }
        function LoginForCorporate(url, credentials) {
            var messageobj = document.getElementById('messageid');
            messageobj.style.display = "";
            $.ajax({
                type: "Post",
                url: url,
                data: credentials,
                contentType: "application/json; charset=utf-8",
                success: function (msg) {
                    if (msg.Message == "" || msg.Message == null) {
                        if (msg.appointmentCode == "" || msg.appointmentCode == null) {
                            if (msg.area == 'null' || msg.area == "" || msg.area == null) {
                                window.location.href = "http://" + window.location.host + "/" + msg.controllername;
                            } else {
                                if (msg.viewname == "" || msg.viewname == null) {
                                    window.location.href = "http://" + window.location.host + "/" + msg.area + "/" + msg.controllername;
                                } else {
                                    window.location.href = "http://" + window.location.host + "/" + msg.area + "/" + msg.controllername + "/" + msg.viewname;
                                }
                            }
                        } else {
                            window.location.href = "http://" + window.location.host + "/" + msg.area + "/" + msg.controllername + "/" + msg.viewname + "/" + msg.appointmentCode;
                        }
                    } else {
                        messageobj.innerHTML = msg.Message;
                    }
                },
                error: function (msg) {
                    messageobj.innerHTML = "Please fill in proper values";
                }
            });
        }
        function LoginToVideoChat() {

            var appointmentCode = document.getElementById('consultappointmentcode').value;

            if (appointmentCode != "Appointment Code" && appointmentCode != null && appointmentCode != "") {
                var appointmentCredentials = {
                    appointmentCode: appointmentCode
                };
                var appointmentCodeJson = JSON.stringify(appointmentCredentials);
                var url = '/iClinicCenters/Home/StartVideoChat';
                LoginForCorporate(url, appointmentCodeJson);
            } else {
                jQuery.msgBox({
                    title: "iClinic",
                    content: "Please enter appointmentCode !",
                    type: "info"
                });
            }
        }
    
    </script>
    
    
    <meta itemprop="name" content="iClinic Healthcare" />
    <meta itemprop="description" content="iClinic Healthcare is a leading online medical consultation platform provides 24/7 online doctor, Online doctor consultation, Online Doctor Chat, Consult a doctor online and ask a doctor from your home or office with our well experienced doctors in India. We also provides 24/7 online doctor, Video Call With Specialist and Doctor's Written Medical Advice." />
    <meta itemprop="image" content="https://www.icliniccare.com/images/logo.jpg" />
    <meta name="description" content="IClinic Healthcare: Best place for free online doctor, live chat with doctors, medical consultation, talk to a doctor online, get prescription, ask a doctor for 24/7 online chat, video call with specialist">
    <meta name="keywords" content="online doctors, talk to a doctor online, chat with a doctor, doctors online, online doctor chat, ask a doctor chat, ask a doctor online chat, online doctor consultation, doctor chat, talk to doctor online, live chat with a doctor, live doctor chat, chat with a doctor free, chat with doctor, talk to a doctor online, live chat with doctor, chat with a doctor online">
    <meta name="robot" content="index,follow">
    <meta name="revisit-after" content="3">
    <meta property="og:title" content="Ask a Doctor Online for Chat | Online Doctor Consultation" />
    <meta property="og:description" content="Ask a doctor online for chat, online doctor consultant and get your medical question answer by specialist doctor with positive feedback. See more details online" />
    <meta property="og:site_name" content="iClinic Care" />
    <meta property="og:type" content="Health care" />
    <meta property="og:url" content=" https://www.icliniccare.com" />
    <link rel="alternate" href="index.html" hreflang=" en-us" />
    <meta name="twitter:card" content="iClinic healthcare">
    <meta name="twitter:site" content='icliniccare'>
    <meta name="twitter:creator" content="Sanjoy">
    <meta name="twitter:title" content=" Online Doctor | 24/7 | Online Doctor Chat | Consultant | Ask">
    <meta name="twitter:description" content="iClinic Healthcare is a leading online medical consultation platform provides 24/7 online doctor, Online doctor consultation, Online Doctor Chat, Consult a doctor online and ask a doctor from your home or office with our well experienced doctors in India. We also provides 24/7 online doctor, Video Call With Specialist and Doctor's Written Medical Advice.">
    <meta name="twitter:image:src" content="https://icliniccare.com/images/Consult-a-doctor-now-button-jpg.jpg">
    <meta name="p:domain_verify" content="60d045e4c8853933a1abddb60af00a4b"/>


    <script type="text/javascript">
        $(document).ready(function () {
            //checkSupportUserStatus();
            //document.getElementById("docemailId").focus();
            $(document).bind('keypress', pressed);
        });
        function pressed(e) {
            if (e.keyCode === 13) {
                LoginbtnClick();
            }
        }
    </script>
    <!--Start of Zopim Live Chat Script-->

    <script type="text/javascript">
        // Popup window code
        function newPopup2(url) {
            popupWindow2 = window.open(
                url, 'popUpWindow2', 'height=403,width=296,left=10,top=10,resizable=no,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
        }
    </script>

    <script type="text/javascript">
        window.$zopim || (function (d, s) {
            var z = $zopim = function (c) { z._.push(c) }, $ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
                    z.set.
                        _.push(o)
                }; z._ = []; z.set._ = []; $.async = !0; $.setAttribute('charset', 'utf-8');
            $.src = 'http://v2.zopim.com/?1z8u8gYrzoZpXC8ThHnOdDLUnmOuzkZX'; z.t = +new Date; $.
                type = 'text/javascript'; e.parentNode.insertBefore($, e)
        })(document, 'script');
    </script>
    <!--End of Zopim Live Chat Script-->

    <script type="text/javascript">
        setTimeout(function () {
            var a = document.createElement("script");
            var b = document.getElementsByTagName("script")[0];
            a.src = document.location.protocol + "//dnn506yrbagrg.cloudfront.net/pages/scripts/0021/9354.js?" + Math.floor(new Date().getTime() / 3600000);
            a.async = true; a.type = "text/javascript"; b.parentNode.insertBefore(a, b)
        }, 1);
    </script>

    <script type="text/javascript">
        var _mfq = _mfq || [];
        (function () {
            var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
            mf.src = "../cdn.mouseflow.com/projects/523389ca-de88-4777-9355-d122e39e9da1.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
    </script>
    <script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-50341565-1', 'icliniccare.com');
        ga('send', 'pageview');

    </script>
    <script src="Scripts/jquery.easing.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            var $banner = $('.stickybanner'), $window = $(window);
            var $topDefault = parseFloat($banner.css('bottom'), 10);
            $window.on('scroll', function () {
                var $top = $(this).scrollTop();
                $banner.stop().animate({ bottom: -($top - $topDefault) }, 1000, 'easeOutBack');
            });

            var $wiBanner = $banner.outerWidth() * 2;
            zindex($('#independancewrapper').outerWidth());
            $window.on('resize', function () {
                zindex($('#independancewrapper').outerWidth());
            });
            function zindex(maxWidth) {
                if ($window.width() <= maxWidth + $wiBanner) {
                    $banner.addClass('stickyzindex');
                } else {
                    $banner.removeClass('stickyzindex');
                }
            }
        });
</script>
    <script src="Scripts/general.js" type="text/javascript"></script>
    <link href="Content/loginpopup.css" rel="stylesheet" />
</head>
    <body>
         <div id="independancewrapper">
     
    </div>
    
         <!--POPUP starts here-->
<div class="loginpopup">
            <div class="loginform">
                <form action="" enctype="multipart/form-data" method="post" onsubmit="return validation(this)"><input name="__RequestVerificationToken" type="hidden" value="9XvlVrCSatBBFIkY7Tha8R6yCzXNknFGc-HkOzrA-5mrmCPpzcTJZ-E5hOJ3ZuJtqmuHGQN9ydN1SyTAaOmVfsV66QDRo5ZUqS8AGGzRqyI1" />
                <a href="#" class="close">Close</a>
                <div id="heading" style="font-size: 18px; float: left; width: 250px; border-bottom: #CCC 1px solid; padding-bottom: 7px; color: #327ad4; padding-bottom: 15px; margin: 12px 0px 0px 0px;">Login</div>
                <div>
                    <br />
                    <label id="messageidnew" style="color: #e62929; font-size: 12px; float: left; margin-top: 10px;"></label>
                    <br />
                    <input type="text" class=" textbox" name="email" id="emailIdconsumer" class="shadowfield" placeholder="Enter User ID" onblur="checkemail(this.value,'loginLoad','messageidnew');" style="width: 230px !important;">
                    <label>
                        <img id="loginLoad" src="images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                    </label>
                </div>
                <br />
                <div>
                    <input type="password" class=" textbox" name="password" id="passwordconsumer" placeholder="Enter Password" class="shadowfield" onblur="if(this.value=='') this.value='password';" onfocus="if(this.value=='password') this.value='';   " style="width: 230px !important;">
                </div>
                <br />
                <div>
                    <a href="Login/ForgotPassword.html" style="text-decoration: none;" hreflang="en-us">Forgot your password?</a>
                    <br/>
                    <br/>
                    <a href="registration_patient.php" style="text-decoration: none;" hreflang="en-us">New Registration</a>
                    <div style="margin-top: 5px;">
                        <input class="loginbutton" formaction="patient_login_action.php" method="POST" id="Continue" style="float: right; margin-right: 30px; font-family: Tahoma" type="submit" value="Log in" onclick="ConsumerLoginClick()" />
                    </div>
                </div>
                </form>
            </div>
    </div>

        <div style="margin: 0 auto;">
            <div id="header" tyle="margin: 0 auto;width:100%">
                <div itemscope itemtype="http://schema.org/Organization">
                    <a itemprop="url" href="index.php" style="float: left; margin-left: 50px;" hreflang="en-us">
                        <img src="images/logo.jpg" itemprop="logo" alt="Online Doctor Consultation" title="Online Doctor Consultation" class="logo" />
                    </a>

                    <span class="tagLine" style="float: left;">Care today, just a click away</span>
                        
                    <div class="clear"></div>
                    <div style="width: 100%; background: url(images/navBg.jpg) 0 0 repeat-x;margin:0 auto">

                        <div style="width:95%;margin:0 auto;">
                            <ul id="nav">
                                <li><a href="index.php" class="leftCorner" hreflang="en-us"><img alt="iCliniccare" title="iCliniccare" src="images/home-icon.png" class="homeImage" style="margin-left: 11px;" /></a></li>
                                <li onmouseover="tooltipsfocus('7')" onmouseout="tooltipsblur('7')">
                                    <a href="Home/patients.php">Patient Section</a>
                                    <div id="tooltip7" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Consult a Doctor Now">
                                        Ask a Doctor for free, 24/7 Online Doctor,  Written Medical Advice, Video call with specialist - Consultation Services.                                    </div>
                                </li>
                                

                                <li onmouseover="tooltipsfocus('1')" onmouseout="tooltipsblur('1')">
                                    <a href="Home/doctors.php" hreflang="en-us" style="text-align:center;">Doctor Section</a>
                                    <div id="tooltip1" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Patient Forum">
                                        Interact with patients with similar ailments and get useful advice on treatments and medicines.                                    </div>
                                </li>
                                <li onmouseover="tooltipsfocus('2')" onmouseout="tooltipsblur('2')">
                                    <a href="why-iclinic.html" hreflang="en-us"  style="text-align:center;">Why iClinic</a>
                                    <div id="tooltip2" class="tool-tip">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Symptom Checker">
                                        Analyse your symptoms, diagnose your ailments and get a detailed report.                                    </div>
                                </li>                          
                                
                  
                                <li onmouseover="tooltipsfocus('6')" onmouseout="tooltipsblur('6')">
                                    <a href="home/contact-us.html" class="right_menu_radius" hreflang="en-us">Contact us</a>

                                    <div id="tooltip6" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="contact doctor online">
                                        If you have any query or suggestions contact us now.                                    </div>
                                </li>
								<li onmouseover="tooltipsfocus('5')" onmouseout="tooltipsblur('5')">
                                    <a href="home/about-us.html" hreflang="en-us">About Us</a>
                                    <div id="tooltip5" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="online health services">
										About team ssm                                  </div>
                                </li>
                            </ul>
                      </div>

                    </div>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
     
        <div style="margin:0 auto;width: 982px;" id="breadcrumb">    

    Home
</div>
        


        
        


<style>
    input {
        padding: 10px;
    }

        input#Continue {
            width: 100px;
            height: 45px;
            cursor: pointer; /*forces the cursor to change to a hand when the button is hovered*/
            padding: 0px 0px 5px 0px; /*add some padding to the inside of the button*/
            background: #327ad4; /*the colour of the button*/
            /*style the text*/
            color: #FFF;
            font-size: 18px;
            font-family: "Myriad Pro";
            border: none !important;
            margin: 0px 0px 0px 10px;
        }


    .input#Continue a {
        color: white;
        text-decoration: none;
    }
    /***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
    input#Continue:hover, input#gobutton:focus {
        background-color: #e10000; /*make the background a little darker*/
        /*reduce the drop shadow size to give a pushed button effect*/
    }

    .input .shadowfield {
        position: relative;
        width: 300px;
        font-size: 13px;
        font-family: "Helvetica Neue", Arial, sans-serif;
        font-weight: normal;
        background: #FFF;
        margin: 5px 0px 0px 0px;
        color: #7c7c7c;
        line-height: 1.4;
        padding: 6px 2px;
        outline: none;
        transition: all 0.2s ease-in-out 0s;
        -webkit-transition: all 0.2s ease-in-out 0s;
        -moz-transition: all 0.2s ease-in-out 0s;
        border: 1px #CCC solid;
        box-shadow: 0 1px rgba(34, 25, 25, 0.2) inset, 0 1px #fff;
    }

        .input .shadowfield:focus {
            border-color: #930;
            background: #fff;
            color: #5d5d5d;
            box-shadow: inset 0 1px rgba(10, 96, 204, 0.2), 0 1px rgba(10, 96, 204, 0.6), 0 0 7px rgba(10, 96, 204, 0.5);
            -moz-box-shadow: inset 0 1px rgba(10, 96, 204, 0.2), 0 1px rgba(10, 96, 204, 0.6), 0 0 7px rgba(10, 96, 204, 0.5);
            -webkit-box-shadow: inset 0 1px rgba(10, 96, 204, 0.2), 0 1px rgba(10, 96, 204, 0.6), 0 0 7px rgba(10, 96, 204, 0.5);
        }

    #rotatescroll {
        height: 180px;
        position: relative;
        width: 270px;
    }

        #rotatescroll .viewport {
            height: 180px;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
            width: 270px;
        }

        #rotatescroll .overview {
            position: absolute;
            width: 798px;
            list-style: none;
            margin: 0;
            padding: 0;
            left: 0;
            top: 0;
        }

            #rotatescroll .overview li {
                height: 180px;
                width: 270px;
                float: left;
                position: relative;
            }

        #rotatescroll .overlay {
            position: absolute;
            left: 0;
            top: 0;
            height: 300px;
            width: 300px;
        }

        #rotatescroll .thumb {
            position: absolute;
            top: -3px;
            cursor: pointer;
            left: 137px;
            width: 100px;
            z-index: 200;
            height: 100px;
        }

        #rotatescroll .dot {
            display: none;
            height: 12px;
            width: 12px;
            position: absolute;
            left: 155px;
            top: 3px;
            z-index: 100;
        }

            #rotatescroll .dot span {
                display: none;
            }
</style>

<div id="someContainer">
</div>


<link href="Content/popup_css.css" rel="stylesheet" />
<link href="Content/jquery.fancybox.css" hreflang="en-us" rel="stylesheet" type="text/css" />
<link href="Content/helpers/jquery.fancybox-buttons.css" hreflang="en-us" rel="stylesheet" />
<link href="Content/helpers/jquery.fancybox-thumbs.css" hreflang="en-us" rel="stylesheet" />

<!-- it works the same with all jquery version from 1.3.1 to 2.0.3 -->


<script type="text/javascript" src="Scripts/jssor.core.js"></script>
<script type="text/javascript" src="Scripts/jssor.utils.js"></script>
<script type="text/javascript" src="Scripts/jssor.slider.js"></script>


<!-- check Online Support -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#breadcrumb').hide();
        //var absURL = document.URL.toLowerCase();
        //if (absURL.indexOf("home") > 1) {
        //    window.location.assign("http://localhost:10080");
        //}
        setCookie("CouponCodeChecked", "", -1);
        setCookie("CouponCode", "", -1);
        setCookie("CouponCode", "", -1);
        setCookie("NijeriaBooking", "", -1);
        $('.fancybox').fancybox();
        $('.fancybox-media')
            .fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                prevEffect: 'none',
                nextEffect: 'none',
                arrows: false,
                helpers: {
                    media: {},
                    buttons: {}
                }
            });
        fillArticles();
        $('#rotatescroll').tinycircleslider({ interval: true, snaptodots: true });
    });
</script>

<script>
    jssor_slider1_starter = function (containerId) {
        var options = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                $SpacingX: 10,                                  //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                $ParkingPosition: 204,                          //[Optional] The offset position to park thumbnail,

                $DirectionNavigatorOptions: {
                    $Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 3                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            }
        };

        var jssor_slider1 = new $JssorSlider$(containerId, options);
    }
</script>

<script type="text/javascript">
    var jsonData = [];
    var slideimages = ["/images/banner.jpg", "images/header-image.jpg", "/images/header-image-1.jpg"];
    var slide = 0;
    var action = "start";

    window.onload = function () {
        fillArticles();
        $('#rotatescroll').tinycircleslider({ interval: true, snaptodots: true });

        $('#closeNigeriapopup').bind("click", fadeoutpopup);

        $.ajax({
            type: 'POST',
            url: '/Home/GetIPAddress/',
            data: "",
            contentType: "application/json; charset=utf-8",
            success: function (data) {
                if (data == "NG") {
                    // Nigeriapopup();
                }
            }
        });
    };

    function fillArticles() {
        var jsonObject = { start: '1', end: '9', searchQuery: 'All' };
        var jsonString = JSON.stringify(jsonObject);

        $.ajax({
            type: "POST",
            url: "/PatientForum/CommunityGetSearchTopicsWithPaging",
            data: jsonString,
            contentType: "application/json",
            success: function (result) {
                jsonData = JSON.parse(result);
                if (jsonData != null) {
                    if (jsonData.length < 0) {
                        $('#ulcarousel').html("<li>No Articles Has been added yet</li>");
                    } else {
                        $('#ulcarousel').html("");
                        jQuery('#ulcarousel').jcarousel({
                            scroll: 3,
                            size: jsonData.length,
                            initCallback: mycarousel_initCallback,
                            itemLoadCallback: { onBeforeAnimation: mycarousel_itemLoadCallback },
                            buttonNextHTML: null,
                            buttonPrevHTML: null
                        });
                    }
                } else {
                    $('#ulcarousel').html("<li>No Articles Has been added yet</li>");
                }
            }
        });
    }

    // Carousel Binding //

    function mycarousel_initCallback(carousel) {
        jQuery('.jcarousel-control a').bind('click', function () {
            carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
            return false;
        });
        jQuery('#maincarouseldiv .next #carousel-next').bind('click', function () {
            carousel.next();
            return false;
        });
        jQuery('#maincarouseldiv .prev #carousel-prev').bind('click', function () {
            carousel.prev();
            return false;
        });
    }

    function mycarousel_itemLoadCallback(carousel, state) {
        for (var i = carousel.first; i <= carousel.last; i++) {
            if (carousel.has(i)) {
                continue;
            }
            if (i > jsonData.length) {
                break;
            }
            carousel.add(i, mycarousel_getItemHTML(jsonData[i - 1]));
        }
    }

    function mycarousel_getItemHTML(item) {
        var title = item.title;
        var description = item.topicDescription;

        if (item.title.length > 30) {
            title = item.title.substring(0, 29) + "...";
        }

        if (item.topicDescription.length > 30) {
            description = item.topicDescription.substring(0, 29) + "...";
        }
        return "<li>" +
            "<img src='" + item.Image + "' width='71' height='70' alt='' class='image'/>" +
            "<span class='head'><a href='/patient-forum/" + CleanUrlForTopicPost(title) + "/" + item.id + "' hreflang='en-us'>" + title + "</a></span>" +
            "<span class='desc'>" + description + "</span>" +
            "<a href='/patient-forum/" + CleanUrlForTopicPost(title) + "/" + item.id + "' class='readMore' hreflang='en-us'>Read now</a></li>";
    }
</script>

<!--Coupon Code Script Start-->
<script type='text/javascript'>

    function Nigeriapopup() {
        $("#Nigeria_overlay").fadeIn(200);
        positionPopup();
    }

    function fadeoutpopup() {
        $("#Nigeria_overlay").fadeOut(500);
    }

    //Popup for PatientInfo
    //position the popup at the center of the page

    function positionPopup() {
        if (!$("#Nigeria_overlay").is(':visible')) {
            return;
        }
        $("#Nigeria_overlay").css({
            left: ($(window).width() - $('#Nigeria_overlay').width()) / 2,
            top: ($(window).width() - $('#Nigeria_overlay').width()) / 7,
            position: 'absolute'
        });
    }

    //maintain the popup at center of the page when browser resized
    $(window).bind('resize', positionPopup);
</script>

<div style="width: 772px; margin: 0 auto; margin-top: -2%;">
    <!--Festival Promotional Pop up End-->
    <div style="margin-bottom: 10px; line-height: 25px;" hreflang="en-us">
       
        
        
    </div>
    
    <!--Festival Promotional Pop up End-->
</div>

<div>

    <div id="DoctorNotificationBox" class="">
    </div>
</div>

<div style="width: 100% !important; height: auto; margin-left: auto !important; margin-right: auto !important; font-family: Tahoma, Geneva, sans-serif; font-size: 12px;">
    <div class="main_slider">

        <div></div>
            <link href="Content/zerogrid.css" type="text/css" rel="stylesheet" />
<link href="Content/newhomeslider.css" rel="stylesheet" />
<link rel="stylesheet" href="Content/flexslider.css" type="text/css" media="screen" />
<script src="ErrorPage/HttpError404.html"></script>
<script defer src="Scripts/jquery.flexslider.js"></script>
<link href="Content/stylesheetdemo.css" rel="stylesheet" />
<script type="text/javascript">
    $(function () {
        SyntaxHighlighter.all();
    });
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "none",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>

<body>

    <div class="zerogrid">
        <div class="row">
            <!------ banner------>
            <div class="banner">
                <div class="clear"></div>
                <div style="width: 982px; margin: 0 auto;margin-left: 304px;">
                    <div class="top_heading">
                        <span class="now"> </span>Online  Doctor Consultation <span class="click_away">Anytime,  Anywhere</span>
                    </div>
                    <div class="clear"></div>
                    <div class="top_normaltext">"Live chat with specialist, get 2nd opinions, Share Reports with (Verified) Doctors" </div>
         

                </div>
                            <div style="text-align:center;width: 1021px;margin:25px auto">
                            <ul>
                         
                                <li>
                                    <div class="tabs" style="    margin-left: 80px;">
                                        <img src="images/doctor_4.png" class="image" />
                                        <div class="txt">
                                            <a href="ask-a-doctor.html">Ask a Doctor - FREE
                                                <div class="normal_mainslider_text">Get opinion from a General Physician</div>
                                            </a>
                                        </div>

                                        <div class="txt">
                                            <a href="doctor-video-call.html"><div class="normal_mainslider_text"></div>
                                          </a>
                                      </div>
                                        <img src="images/doctor_6.png" class="image" />
                                        <div class="txt">
                                            <a href="ChatWithDoctor.html">24/7 Live Consultation 
                                                <div class="normal_mainslider_text">Connect immediately </div>
                                            </a>
                                        </div>

                                    </div>
                                </li>


                            </ul>
                        </div>
                <div style="width:  982px; margin: 25px auto;">

                    <a   class="hoverdemo"  href="Home/ConsultDoctor.html"  style="float:left;margin-left:90px">
                        <div class="buttondemo" >
                    
                            Consult a Doctor Now
                            <br/>  <br />
                               <text style="font-size:12px;font-weight:normal">Consultation from 24/7 Online Doctors & Specialists</text>
                        </div>
                    </a>
                    
                       
                    </a>

                    
                </div>



            </div>
            <!------ banner------>
        </div>
    </div>
</body>


    </div>
    <br />
    <br />
    <br />

    <div class="clear"></div>

    <div class="layout">
        <div class="quickLinks">
            

        </div>

    </div>
    <div class="clear"></div>

    <div class="layout">
        <div class="bodyContent">
            
                </div>
                <div class="next">
     
                </div>
            </div>
            <!-- Slider for Articles End-->

            <div class="clear" style="margin-bottom: 0px !important;"></div>
            <div class="leftContainer" style="font-size: 13px;">
                <h3><span class="left">Our Online Services</span></h3>
                <br />
                <br />
                <h3>24/7 Online Doctor:</h3>
                <p style="border-bottom: 1px lightgray solid; padding-bottom: 30px; margin-bottom: 5px;">
                    Our qualified general practitioners are available 24/7 to help you with advice and quick consultations.

                    It's simple - just enter your name, email ID and select any specialist available online.

                    <br />
                    </p>
                <br />
               
                 
                    
                </p>
                <br />
                <h3>Written Medical Advice :</h3>
                <p style="border-bottom: 1px lightgray solid; padding-bottom: 30px; margin-bottom: 5px;">
                    Excellent for seeking  expect advice from specialists without the hassle of appointments and travel. Upload your reports; ask relevant questions and you will get a written medical advice from an online doctor within 48 hours.

                    Just enter your name and email ID and choose the specialty and then write your query!
                    <br />
                    </p>
                <br />
                <h3>Symptom Checker: </h3>
                <p style="border-bottom: 1px lightgray solid; padding-bottom: 30px; margin-bottom: 5px;">
                    Seek reliable information and medical advice about illnesses by body part - we have detailed information about any kind of medical condition in our database. There are also details about the kind of medication (allopathic, ayurvedic and homeopathic) that needs to be taken in certain medical conditions.
                    You can also checkout relevant videos of specialist doctors. 
                    <br />
                    </p>
                <br />
                <h3>Patient Forum:</h3>
                <p style="border-bottom: 1px lightgray solid; padding-bottom: 30px; margin-bottom: 5px;">
                    There are innumerable articles submitted by patients having slightly rare diseases like Rheumatoid Arthritis, Eczema, TIA, TKR, Sarcoidiosis, Cancer, Parkinson’s etc. along with articles from doctors.
                    You can read these articles online and learn from patient experiences. Get lifestyle dos and don’ts, ask questions to any patient,
                    form an online patient group / forum and interact and seek advice from your counterparts.
                    <br />
                   </p>
                <br />
                <h3>Corporate Services:</h3>
                <p style="padding-bottom: 10px; margin-bottom: 5px;">


                    <ul style="list-style: disc; margin-left: 15px; border-bottom: 1px lightgray solid; margin-top: -10px; padding-bottom: 20px;">
                        <li>Doctor Online 24x7 Web chat with general practitioner</li>
                        <li>Written Medical Advice – Send reports and receive opinions and advices</li>
                        <li>Chat with an online doctor through appointment from any location</li>
                        <li>Health Monitor with Health Risk Assessment</li>
                        <li>Check your Body Mass Index and Basal Metabolic Rate with our BMI and BMR Calculators</li>
                        <li>Life style advisor with Dietician services and De-addiction advisor</li>
                        <li>Stress management and  Medicine advisor services </li>
                        <li>Patient Forum - Read articles by patients and interact with them</li>
                        <li>Online Help - Chat with our online advisor, seek guidance and help</li>
                        <li>Symptom Checker - Analyze yourself – Find over 1000's of ailments</li>
                        <li>Get Allopathic, homeopathic and ayurvedic inputs with Symptom Checker</li>
                    </ul>

                </p>
                <br/>
                
                <h3>Medical Tourism:</h3>
                <br />


                Patients who are planning to visit India for medical treatment can make the most of our Medical Tourism service. We are associated with the best hospitals and through our secure virtual platform we can assist you 24/7 and connect you with the best doctors online to resolve your medical concern. Get everything you need to know about various treatments before planning your travel. Receive pre and post travel assistance, plan the right treatment procedure, compare cost options and stay connected with your doctor online after returning to your home country. 
                <br />
                <br />

                Some of the reasons why you should choose India for your treatment:
                <br />
                <br />
                <ul style="list-style: disc; margin-left: 15px; border-bottom: 1px lightgray solid; margin-top: -10px; padding-bottom: 20px;">

                    <li>Cheaper treatments, skilled and caring staff</li>
                    <li>Simple visa rules</li>
                    <li>No language barrier</li>
                    <li>Well-trained and renowned doctors</li>
                    <li>Modern technology, advanced treatments and state-of-the-art infrastructure</li>
                    <li>Low cost healthcare services</li>
                    <li>Cheap accommodation and sight-seeing</li>
                    <li>Treatment across various specialties</li>
                    <li>Treatments and services at par with western countries</li>

                </ul>
            </div>






<script type="text/javascript" src="Scripts/jquery.jcarousel.js"></script>
<script type="text/javascript" src="Scripts/jquery.tinycircleslider.min.js"></script>
<script type="text/javascript" src="Scripts/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="Content/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="Content/helpers/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="Content/helpers/jquery.fancybox-thumbs.js"></script>


        <div class="clear"></div>

        <div id="footer" align="center">   
            <div class="layout" align="center">
                <div class="footerLinks" style="margin-left: 250px;">
		
		                    					<a href="index.html" hreflang="en-us">Home</a>  /  
                   								 <a href="ChatWithDoctor.html" hreflang="en-us">24/7 Online Doctor</a> /
                   								 <a href=written-medical-advice.html hreflang="en-us">Written Medical Advice</a>

							 				 <div class="footerLinks2">
												  <a href="why-iclinic.html" hreflang="en-us">Why iClinic</a> | 
                      							  <a href="patient-forum.html" hreflang="en-us">Patient Forum</a> | 
						<a href="symptom-checker.html" hreflang="en-us">Symptom Checker</a> |       
                        
                        <a href="Home/CoreBenefits.html" hreflang="en-us">Core Benefits</a>  |   
                        <a href="home/about-us.html" hreflang="en-us">About Us</a>    |
                        <a href="home/contact-us.html" hreflang="en-us">Contact Us</a>    
                       
                        <!-- <a href="#">FAQ's</a>-->
                    </div>
                </div>
                <div class="socialMedia">
                    <p>Follow us :</p>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com" target="_blank" hreflang="en-us" rel="nofollow">
                                <img src="images/facebook.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com" target="_blank" hreflang="en-us" rel="nofollow">
                                <img src="images/twitter.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="https://plus.google.com" target="_blank" hreflang="en-us">
                                <img src="images/gplus.jpg" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottomLinks">
                   
                    <div class="footLinks">
                       

                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="copyright">
            <div class="layout">

                <p style="text-align: center; font-family: arial;">
                    Computer Branch 2013-16
                </p>
            </div>
        </div>
                <div id="boxes">
                    <!--Main Login Pop-up start-->
                    <div id="dialog" class="window" style="margin-top: -100px;">
                        <div class="login-popup" style="height: 500px;">
                            <h1>
                                <a href="JavaScript:void(0);" class="close" hreflang="en-us" style="margin-bottom: 275px">
                                    <img src="images/close-btn.png" width="29" height="29" alt="close" title="close" />
                                </a>
                                <img src="images/user.png" width="16" height="15" />&nbsp;User Login
                            </h1>
                            <div class="form">



                                <div class="login-radio">
                                    <span style="width: 270px; margin-left: 0px; margin-top: 5px; color: black;">If you are here for pre scheduled video consultation, please click below box and enter appointment code provided in your email.</span>

                                    <br />
                                    <input type="hidden" id="prehidden" value="0" />
                                    <input name="Grouplogin" id="videoconsult" type="button" value="Pre Scheduled Video Consultation" style="width: 260px; height: 44px; font-size: 14px;" class="wdemobutton" onclick="checkchangebutton();" />

                                </div>
                                <span>Enter your Email ID</span>
                                <label id="messageid" style="color: #e62929; font-size: 12px;"></label>
                                <div style="width: 267px; margin-bottom: -15px;">
                                    <input id="emailId" name="UserName" type="text" class="input" value="Email Id"
                                           onblur="if (this.value == '') this.value = 'Email Id';checkemail(this.value, 'loadingid', 'messageid'); " onfocus=" if (this.value == 'Email Id') this.value = ''; " onkeypress=" return ValidateEmail(event) " />
                                    <label>
                                        <img id="loadingid" src="images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                                    </label>
                                </div>
                                <br />

                                <span>Enter your password</span>
                                <input name="Password" type="password" value="pwd" class="input" id="password"
                                       onblur=" if (this.value == '') this.value = 'pwd'; " onfocus=" if (this.value == 'pwd') this.value = ''; " />
                                <br />

                                <input id="appointmentcode" name="AppointmentCode" type="text" value="Appointment Code" class="input" disabled="disabled"
                                       onkeypress=" return ValidateAppointmentCode(event) " onblur=" if (this.value == '') this.value = 'Appointment Code'; " onfocus=" if (this.value == 'Appointment Code') this.value = ''; " onkeypress=" return ValidateAppoinmentCode(event)" />
                                <input type="submit" class="login-button" value="Sign in" onclick="LoginbtnClick()" />

                                <div class="login-radio" style="text-align: center; margin-top: 5px">
                                    <a href="Login/ForgotPassword.html" hreflang="en-us" style="text-decoration: none;">Forgotten your password?</a>
                                </div>
                                <p>For office use only</p>
                                <p>

                                    <input id="locationconsult" name="Grouplogin" type="checkbox" value="" onclick="checkchangecheckbox();" />
                                    <span style="width: 800px;">Conference Consultation
                                        <input id="locationcode" name="LocationCode" type="text" value="Location Code" class="input" disabled="disabled"
                                               onblur="if (this.value == '') this.value = 'Location Code'; " onfocus=" if (this.value == 'Location Code') this.value='';" />
                                    </span>

                                </p>

                            </div>
                            <div class="login-box2">
                                
                                <br />
                                <div class="login-radio">
                                    <span style="text-align: center; width: 230px; margin-top: -33px; color: black;">Select this button if you are here to book an appointment with our specialist
                                    </span>
                                    <br />
                                    <br />
                                    <input name="Groupredirect" type="button" value="Book an Appointment with specialist" style="width: 260px; height: 44px; font-size: 14px;" class="wdemobutton" onclick="ICRedirect('book');" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Main Login Pop up End-->
                </div>



        <!--Pop up Start-->
        <div id="mask"></div>
        <div id="maskChat"></div>
        <!--Popup End-->

        <!--Coupon Code Pop up Start-->
        <div id="c_overlay" style="display: none;">
            <div class='c_popup'>
                <div class='c_cnt223' style="-webkit-box-shadow: -21px -6px 30px 0px rgba(51, 50, 50, 1); -moz-box-shadow: -21px -6px 30px 0px rgba(51, 50, 50, 1); box-shadow: -21px -6px 30px 0px rgba(51, 50, 50, 1);">
                    <div class="c_doctor_img" id="coupon_doctorimage">
                        <img src="images/coupan_leftimage.png" alt="Doctor Image" />
                    </div>
                    <img src='images/coupon_close.png' alt='quit' class='x' id='x' />
                    <div class="c_coupon_popup">
                        <div class="c_top_heading">
                            Please fill your details below and we will send a 50% discount Coupon Code in your email
                        </div>
                        <div class="c_fill_detail">
                            Over 100 Specialist Doctors available 24/7 
                        </div>
                        <div class="c_input">
                            Name :    &nbsp; &nbsp;&nbsp;
                            <input type="text" name="Name" id="Coupon_Name" style="margin-left: 33px;" onkeypress="return LettersWithSpaceOnly(event)" class="c_shadowfield" value="Enter Your Name" onblur="if(this.value=='') this.value='Enter Your Name';" onfocus="if(this.value=='Enter Your Name') this.value='';" />
                        </div>
                        <div class="c_input">
                            Mobile No  :  
                            <input type="text" name="  Mobile No" id="Coupon_Mobile" class="c_shadowfield" style="margin-left: 27px;" value="Enter Your  Mobile No" maxlength="15" onkeypress="return isNumberKey(event)" onblur="if(this.value=='') this.value='Enter Your  Mobile No';" onfocus="if(this.value=='Enter Your  Mobile No') this.value='';" />
                        </div>
                        <div class="c_input">
                            Email Id  :   &nbsp;&nbsp;<input type="text" name=" Email Id" id="Coupon_Email" maxlength="255" onkeypress="return ValidateEmail(event)" class="c_shadowfield" value="Enter Your Email Id" onblur="if(this.value=='') this.value='Enter Your Email Id';" onfocus="if(this.value=='Enter Your Email Id') this.value='';" />
                            <label>
                                <img id="Cloadingid" src="images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                            </label>
                        </div>
                        <div class="c_input">
                            <div class="c_term_condition">
                                <input type="checkbox" id="condition_check" />
                                I accept iClinic's 
                                <a href="Home/Terms-Conditions.html" target="_blank" hreflang="en-us">Terms and Conditions</a>
                            </div>
                        </div>
                        <div class="c_input_forget">
                            <input type="button" class="c_login" value="Submit" onclick="GenerateFreeCoupons(0)" style="height: 46PX;" />
                        </div>
                        <div class="c_input_join">
                            You will soon get a coupon code with Instructions
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Coupon Code Pop up End-->
    </body>

<script type="text/javascript" src="Scripts/jquery.msgBox.js"></script>

<!--Coupon Code Script Start-->
<script type='text/javascript'>
    function coupanpopup() {
        $("#c_overlay").fadeIn(200);
        positionPopup();
    }

    $('.x').click(function () {
        $("#c_overlay").fadeOut(500);
    });

    //Popup for PatientInfo
    //position the popup at the center of the page
    function positionPopup() {
        if (!$("#c_overlay").is(':visible')) {
            return;
        }
        $("#c_overlay").css({
            left: ($(window).width() - $('#c_overlay').width()) / 2,
            top: ($(window).width() - $('#c_overlay').width()) / 7,
            position: 'absolute'
        });
    }

    //maintain the popup at center of the page when browser resized
    $(window).bind('resize', positionPopup);

    // Data member for Register Aliment Expert
    var CName = "";
    var Cmobile = "";
    var Cemail = "";

    // Community Section - Register Aliment Expert Validation
    function CouponCodePopUpValidation() {
        CName = document.getElementById("Coupon_Name").value;
        CName = trim(CName);
        if (CName == null || CName == "" || CName == "Enter Your Name") {
            $.msgBox({
                title: "iClinic",
                content: "Please fill in your Name.",
                type: "alert"
            });
            //document.getElementById("Coupon_Name").focus();
            $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
            return false;
        }

        Cmobile = document.getElementById("Coupon_Mobile").value;
        if (Cmobile == null || Cmobile == "" || Cmobile == "Enter Your  Mobile No") {
            $.msgBox({
                title: "iClinic",
                content: "Please fill in your Mobile Number.",
                type: "alert"
            });
            $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
            //document.getElementById("Coupon_Mobile").focus();
            return false;
        }

        if (Cmobile < 10) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill in correct Mobile Number.",
                type: "alert"
            });
            $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
            //document.getElementById("Coupon_Mobile").focus();
            return false;
        }

        Cemail = document.getElementById("Coupon_Email").value;
        if ((Cemail == null) || (Cemail == "") || (Cemail == "Enter Your Email Id")) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill in your E-mail Address.",
                type: "alert"
            });
            $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
            //document.getElementById("Coupon_Email").focus();
            return false;
        }
        if (echeck(Cemail) == false) {
            $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
            //document.getElementById("Coupon_Email").focus();
            return false;
        }

        if (!document.getElementById("condition_check").checked) {
            $.msgBox({
                title: "iClinic",
                content: "Please accept term & conditions",
                type: "alert"
            });
            $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
            return false;
        }
        return true;
    }

    function echeck(str) {
        var at = "@";
        var dot = ".";
        var lat = str.indexOf(at);
        var lstr = str.length;
        var ldot = str.indexOf(dot);
        if (str.indexOf(at) == -1) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill valid E-mail ID",
                type: "alert"
            });
            return false;
        }

        if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill valid E-mail ID",
                type: "alert"
            });
            return false;
        }

        if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill valid E-mail ID",
                type: "alert"
            });
            return false;
        }

        if (str.indexOf(at, (lat + 1)) != -1) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill valid E-mail ID",
                type: "alert"
            });
            return false;
        }

        if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill valid E-mail ID",
                type: "alert"
            });
            return false;
        }

        if (str.indexOf(dot, (lat + 2)) == -1) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill valid E-mail ID",
                type: "alert"
            });
            return false;
        }

        if (str.indexOf(" ") != -1) {
            $.msgBox({
                title: "iClinic",
                content: "Please fill valid E-mail ID",
                type: "alert"
            });
            return false;
        }

        return true;
    }

    //Function to trim extra spaces
    function trim(str) {
        var newstr;
        newstr = str.replace(/^\s*/, "").replace(/\s*$/, "");
        newstr = newstr.replace(/\s\s+/g, " ");
        return newstr;
    }

    //Generate FreeCoupons 100%
    function GenerateFreeCoupons(type) {
        $("#SaveCouponCode").removeAttr("onclick");
        var isvaluevalid = CouponCodePopUpValidation();
        if (isvaluevalid) {
            var CouponCodeObject = {
                Name: CName,
                Mobile: Cmobile,
                Email: Cemail,
                Type: type
            };
            var CouponCodeJSON = JSON.stringify(CouponCodeObject);
            $.ajax({
                cache: false,
                type: 'POST',
                url: "/Home/SavePatientFirstVisitViaCouponCode",
                data: CouponCodeJSON,
                contentType: "application/json; charset=utf-8",
                success: function (data) {
                    if (data.status == "2") {
                        $.msgBox({
                            title: "iClinic",
                            content: "Email Id is Invalid, Please fill proper Email Id",
                            type: "info"
                        });
                        $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
                    }
                    else if (data.status == "0") {
                        $.msgBox({
                            title: "iClinic",
                            content: "Email Id already exist, please try with another Email Id",
                            type: "info"
                        });
                        $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
                    }
                    else if (data.status == "1") {
                        $.msgBox({
                            title: "iClinic",
                            content: "Successfully sent Coupon code to your email Id",
                            type: "success"
                        });
                        setTimeout(function () {
                            window.location.href = "Home.html";
                        }, 3000);
                    } else {
                        $.msgBox({
                            title: "iClinic",
                            content: "Unable to Process your request. Please try again.",
                            type: "error"
                        });
                        $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
                    }
                }
            });
        }
    }

</script>

</html>
