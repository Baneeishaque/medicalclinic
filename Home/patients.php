<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html prefix="og:http://ogp.me/ns#" itemscope itemtype="http://schema.org/Product" xmlns="http://www.w3.org/1999/xhtml">


<!-- Mirrored from www.icliniccare.com/Home/Doctors by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2016 12:30:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta name="viewport" content="width=device-width" />
    <link href="../favicon.ico" rel="shortcut icon" hreflang="en-us" type="image/x-icon" />
    <meta name="google-site-verification" content="HNZ4ajCc_qbQ9uU2xqm3bNeNnz52GcgZT2k2EDgL16E" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8" />
    <meta name="msvalidate.01" content="0115DEE5670E9B0C5999DD7007854BBB" />

    <title>Work as Online Doctor | Jobs | MEDICAL CLINIC Healthcare</title>
    <link href="../Content/cssbc8c.css?v=InJltDZ8bHen1D1USNEWkUld_x2v8aCeoa3XA2OLqN81" rel="stylesheet"/>

    <script src="../bundles/modernizr70f4?v=eoxdJieroS4aKFRd6Ig4jp_oRSgXQeeG6hbHlkvv-EY1"></script>

    <script src="../bundles/jquery53b1?v=Mr8z7cwRVicid8NnJliEmOE7FU6vgy1m3T3KGKT0ZA01"></script>

    <link rel="author" href="https://plus.google.com/+icliniccareonlinedoctor" />
    
<script type="text/javascript" src="../Scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../Scripts/jquery.jcarousel.js"></script>
    <script src="../Scripts/XSSValidate.js" type="text/javascript"></script>
    <link href="../content/CouponCode_form.css" hreflang="en-us" type="text/css" rel="stylesheet" />
    <!--[if IE ]>
            <style type="text/css">
                #searchtext{padding:0 4px !important;}   
            </style>
    <![endif]-->
    <script type='text/javascript'>

        //Check checkbox change of appointmentcode's checkbox
        function redirectToVideoChat() {
            window.location.href = '../doctor-video-call.html';
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
    
    
    <meta name="description" content="Benefits for doctor - Login for Video Chat and Consultation, additional income and assured payments, globally extend your experience and reputation.">
    <meta name="keywords" content="doctor registration, assured and timely payments,globally extend your experience and reputation,doctor login, addtional income for doctor, online work, earn online">
    <meta name="robot" content="index,follow">
    <meta name="revisit-after" content="7">
    <meta lang="en" content="English" />
    <meta property="OGTitle" content="Work as Online Doctor | Jobs | iClinic Healthcare">
    <meta property="OGDescription" content="Benefits for doctor - Login for Video Chat and Consultation, additional income and assured payments, globally extend your experience and reputation.">
    <meta property="OGUrl" content="https://www.icliniccare.com/Home/Doctors">
    <meta property="og:site_name" content="iClinic Care" />
    <meta property="og:type" content="Health Care" />
    <link rel="alternate" href="../HealthPlans.html" hreflang=" en-us" />
    <meta itemprop="name" content="iClinic Healthcare" />
    <meta itemprop="description" content="Benefits for doctor - Login for Video Chat and Consultation, additional income and assured payments, globally extend your experience and reputation." />
    <meta itemprop="image" content="https://www.icliniccare.com/images/logo.jpg" />



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
            mf.src = "../../cdn.mouseflow.com/projects/523389ca-de88-4777-9355-d122e39e9da1.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
    </script>
    <script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-50341565-1', 'icliniccare.com');
        ga('send', 'pageview');

    </script>
    <script src="../Scripts/jquery.easing.js" type="text/javascript"></script>
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
    <script src="../Scripts/general.js" type="text/javascript"></script>
    <link href="../Content/loginpopup.css" rel="stylesheet" />
</head>
    <body>
         <div id="independancewrapper">
     
    </div>
    
         <!--POPUP starts here-->
<div class="loginpopup">
            <div class="loginform">
                <a href="#" class="close">Close</a>
                <div id="heading" style="font-size: 18px; float: left; width: 250px; border-bottom: #CCC 1px solid; padding-bottom: 7px; color: #327ad4; padding-bottom: 15px; margin: 12px 0px 0px 0px;">Login</div>
                <div>
                    <br />
                    <label id="messageidnew" style="color: #e62929; font-size: 12px; float: left; margin-top: 10px;"></label>
                    <br />
                    <input type="text" class=" textbox" name="email" id="emailIdconsumer" class="shadowfield" placeholder="Enter Email ID" onblur="checkemail(this.value,'loginLoad','messageidnew');" style="width: 230px !important;">
                    <label>
                        <img id="loginLoad" src="../images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                    </label>
                </div>
                <br />
                <div>
                    <input type="password" class=" textbox" name="password" id="passwordconsumer" placeholder="Enter Password" class="shadowfield" onblur="if(this.value=='') this.value='password';" onfocus="if(this.value=='password') this.value='';   " style="width: 230px !important;">
                </div>
                <br />
                <div>
                    <a href="../Login/ForgotPassword.html" style="text-decoration: none;" hreflang="en-us">Forgot your password?</a>
                    <div style="margin-top: 5px;">
                        <input class="loginbutton" id="Continue" style="float: right; margin-right: 30px; font-family: Tahoma" type="submit" value="Log in" onclick="ConsumerLoginClick()" />
                    </div>
                </div>
            </div>
    </div>

        <div style="margin: 0 auto;">
            <div id="header" tyle="margin: 0 auto;width:100%">
                <div itemscope itemtype="http://schema.org/Organization">
                    <a itemprop="url" href="../index.php" style="float: left; margin-left: 50px;" hreflang="en-us">
                        <img src="../images/logo.jpg" itemprop="logo" alt="Online Doctor Consultation" title="Online Doctor Consultation" class="logo" />
                    </a>

                    <span class="tagLine" style="float: left;">Care today, just a click away</span>
                        
                    <div class="clear"></div>
                    <div style="width: 100%; background: url(../images/navBg.jpg) 0 0 repeat-x;margin:0 auto">

                        <div style="width:95%;margin:0 auto;">
                            <ul id="nav">
                                <li><a href="../index.php" class="leftCorner" hreflang="en-us"><img alt="iCliniccare" title="iCliniccare" src="../images/home-icon.png" class="homeImage" style="margin-left: 11px;" /></a></li>
                                <li onmouseover="tooltipsfocus('7')" onmouseout="tooltipsblur('7')">
                                    <a href="../Home/patients.php">Patient Section</a>
                                    <div id="tooltip7" class="tool-tip" style="display: none">
                                        <img src="../images/tool-tip-arrow.png" width="20" height="20" alt="Consult a Doctor Now">
                                        Ask a Doctor for free, 24/7 Online Doctor,  Written Medical Advice, Video call with specialist - Consultation Services.                                    </div>
                                </li>
                                

                                <li onmouseover="tooltipsfocus('1')" onmouseout="tooltipsblur('1')">
                                    <a href="../Home/doctors.php" hreflang="en-us" style="text-align:center;">Doctor Section</a>
                                    <div id="tooltip1" class="tool-tip" style="display: none">
                                        <img src="../images/tool-tip-arrow.png" width="20" height="20" alt="Patient Forum">
                                        Interact with patients with similar ailments and get useful advice on treatments and medicines.                                    </div>
                                </li>
                                <li onmouseover="tooltipsfocus('2')" onmouseout="tooltipsblur('2')">
                                    <a href="../why-iclinic.html" hreflang="en-us"  style="text-align:center;">Why iClinic</a>
                                    <div id="tooltip2" class="tool-tip">
                                        <img src="../images/tool-tip-arrow.png" width="20" height="20" alt="Symptom Checker">
                                        Analyse your symptoms, diagnose your ailments and get a detailed report.                                    </div>
                                </li>                          
                                
                  
                                <li onmouseover="tooltipsfocus('6')" onmouseout="tooltipsblur('6')">
                                    <a href="../home/contact-us.html" class="right_menu_radius" hreflang="en-us">Contact us</a>

                                    <div id="tooltip6" class="tool-tip" style="display: none">
                                        <img src="../images/tool-tip-arrow.png" width="20" height="20" alt="contact doctor online">
                                        If you have any query or suggestions contact us now.                                    </div>
                                </li>
								<li onmouseover="tooltipsfocus('5')" onmouseout="tooltipsblur('5')">
                                    <a href="../home/about-us.html" hreflang="en-us">About Us</a>
                                    <div id="tooltip5" class="tool-tip" style="display: none">
                                        <img src="../images/tool-tip-arrow.png" width="20" height="20" alt="online health services">
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

        <a href="../index.html" title="Home">Home</a>
         &gt; 

    Are you a Doctor
</div>
        


        
        




<style type="text/css">
    .jcarousel-item {
        height: 155px !important;
        width: 113px !important;
        text-align: center;
        padding: 0 1px !important;
    }

    .jcarousel-container {
        width: 465px !important;
        margin-left: 8px;
        overflow: hidden;
    }

    .jcarousel-clip-horizontal {
        width: 465px !important;
    }
</style>

<!-- Check Support User Status -->

<script type="text/javascript">
    var jsonData = [];

    window.onload = function () {
        fillOnlineDoctors();
        jQuery('#rotatescroll').tinycircleslider({ interval: true, snaptodots: true });
    };

    function fillOnlineDoctors() {
        var jsonAllDoctorObject = {
            start: '1',
            end: '20',
            searchText: 'India',
            field: ''
        };
        var allDoctorJson = JSON.stringify(jsonAllDoctorObject);
        $.ajax({
            type: "POST",
            url: "/ChatWithDoctor/GetAllIclinicDoctors",
            data: allDoctorJson,
            contentType: "application/json",
            success: function (result) {
                jsonData = JSON.parse(result);
                if (jsonData != null) {
                    if (jsonData.length < 0) {
                        $('#mycarousel').html("<li>No Online doctors are available.</li>");
                    } else {
                        $('#mycarousel').html("");
                        $('#mycarousel').jcarousel({
                            scroll: 3,
                            size: jsonData.length,
                            initCallback: mycarousel_initCallback,
                            itemLoadCallback: { onBeforeAnimation: mycarousel_itemLoadCallback },
                            buttonNextHTML: null,
                            buttonPrevHTML: null
                        });

                        $('#mycarousel').css('margin', '');
                    }
                } else {

                    $('#mycarousel').html("<li>No Online doctors are available.</li>");
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
        jQuery('#mycarousel-next').bind('click', function () {
            carousel.next();
            return false;
        });
        jQuery('#mycarousel-prev').bind('click', function () {
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
    };

    function mycarousel_getItemHTML(item) {
        var doctorimage = item.doctor_image;
        if (doctorimage == "" || doctorimage == null || doctorimage == "NA") {
            doctorimage = "../images/thumbnail.gif";
        }
        var title = item.doctor_name;
        var description = item.speciality;
        if (item.doctor_name.length > 30) {
            title = item.doctor_name.substring(0, 29) + "...";
        }
        if (item.speciality.length > 30) {
            description = item.speciality.substring(0, 29) + "...";
        }
        return "<li>" +
            "<a onclick='DoctorProfilePopup(" + item.id + ")'>" +
            "<img src='" + doctorimage + "' width='71' height='70' alt='' class='image' /></a>" +
            "<p style='word-wrap:break-word'>" +
            "<span>" + title + "</span>" +
            "<br />" + description + "</p>" +
            "</li>";
    }
//----------------//
</script>


    <script type="text/javascript">
        $(document).ready(function () {
            //document.getElementById("docemailId").focus();
            $(document).bind('keypress', pressed);
            $("#docemailId").focus();
        });
        function pressed(e) {
            if (e.keyCode === 13) {
                doctorLogin();
            }
        }
    </script>

<div class="layout">

    

    <link rel="alternate" href="Doctors.html" hreflang=" en-us"/>


<script src="../Scripts/XSSValidate.js"></script>

<div>

    <div id="DoctorNotificationBox" class="">
    </div>
</div>
<div class="layout" style="margin-top: -30px;">
    <div class="clear"></div>
    <br />
    <br />
    <div class="login2">
        <div class="login2-signup">
            <h1>Core Benefits
                <br />
                For Specialists / Doctors
            </h1>
            <p>- Interact with patients through video chat.</p>
            <p>- Additional income and assured and timely payments.</p>
            <p>- Extend your experience, reputation and influence  globally.</p>
            <p>- Showcase your skills and knowledge by contributing articles.</p>
            <p>- Join now to become an MEDICAL CLINIC empaneled doctor.</p>
            <br />
            <p>
                <a href="../registration_patient.php" class="blueButtonlogin" style="padding: 10px 20px;text-decoration: none;">Join now
                </a>
                <br />
                <br />
                <br />


            </p>
        </div>



        <div class="login2-login">
            <h1>If you are already Registered
                <br />
                Sign in
            </h1>
            <span style="font-size: 11px; display: inline-block; margin-top: -8px; height: 12px; line-height: 12px;">You can edit your profile, view and manage your appointments.</span>
            <form action="" enctype="multipart/form-data" method="post" onsubmit="return validation(this)">
                              
                <div style="width:260px;height: auto;margin-top: 15px">
                    <label id="messageid" style="color: #e62929; font-size: 11px; line-height: 15px"></label>

                    <label>
                        <img id="loadingid" src="../images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                    </label>
                </div>

               
                Email ID
                <br />
                    <input id="docemailId" name="UserName" type="text" class="txt" value="Email Id"
                        onblur="if(this.value=='')this.value='Email Id';checkemail(this.value.trim(),'loadingid','messageid');"
                        onfocus="if(this.value=='Email Id')this.value='';" />
                <br />
                Password
                <br>
				
                <input name="Password" type="password" value="" class="txt" id="docpassword" placeholder="password" />
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="15%">
                            <input id="DoctorRememberMe" name="rememberme" type="checkbox" value="" /></td>
                        <td>Remember Me</td>
                    </tr>
                </table>
                <br />
                <input type="submit" formaction="../patient_login_action.php" method="POST" class="redButtonlogin" value="Sign in" onclick="doctorLogin();" style="margin-top: -10px" />
                <img id="login1Load" src="../images/loading.gif" class="img" style="display: none; width: 20px; float: none" />
                <div>
                    <a href="../Login/ForgotPassword.html" style="text-decoration: none;">Forgotten your password?</a>
                </div>
            </form>
        </div>
    </div>
    <div>
        <p style="font-size: 12px; font-family: tahoma; line-height: 1.5; margin-top: -30px">
            <b>Privacy Statement:</b><br />

            This is a protected system containing customer’s personal information and meant for access to authorized users only, as per MEDICAL CLINIC Care's Privacy Policy. Unauthorized access is prohibited. By using this system, the user consents to abide by the MEDICAL CLINIC Care Privacy policy. Unauthorized or improper use of this system may result in disciplinary action and or civil penalties. By accessing this system, you indicate your awareness and consent to the terms and conditions cited above.
        </p>
    </div>
</div>
<!--[if IE ]>
    <style type="text/css">
.login2-login input.txt { padding:2px 5px !important; margin-bottom:10px !important;line-height: 25px !important; }     
    </style>
<![endif]-->

</div>

<div class="layout" id="gobutton">
    <div class="section3">
        <img src="images/border.gif" width="952" height="1" alt="" class="left" />
        <div class="testimonial" style="margin-left: 250px;">
            <h5>Testimonials by our users</h5>
            <div id="rotatescroll">
                <div class="viewport">
                    <ul id="testimonialSlideCarousel" class="overview">
                      <li><img src="images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">&nbsp;</p>
                      </li>

                        <li>
                            <img src="../images/image2.jpg" width="75" height="74" alt="" />
                            <img src="../images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                medical clinic's; is trying best to send specialist care to farthest locations of India.<br />
                                <br />
                                <br />
                                <br />
                                Where specialist care is difficult to get.
                            </p>
                            <span class="name">by MUHAMMAD DANISH T
                                    <br />
                                <small> (M.D.)
                                </small>
                            </span>
                        </li>
                        <li>
                            <img src="../images/image2.jpg" width="75" height="74" alt="" />
                            <img src="../images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                I am very much satisfied with a consulting and I will surely others.<br />
                                <br />
                                <br />
                                <br />

                            </p>
                            <span class="name">by MIDHUN PP<br />
                                <small>TOP MISSION
                                </small>
                            </span>
                        </li>
                        <li>
                            <img src="../images/image2.jpg" width="75" height="74" alt="" />
                            <img src="../images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                I had a wonderful experience at MEDICAL CLINIC, where I could get first class consult from a key physician for my ailment.<br />
                                <br />
                                <br />
                                <br />
                                The appointment was on time and I could get personalized attention. Overall it's was a nice feeling.
                            </p>
                            <span class="name">by SHABEEL BAKKER<br />
                                <small>Orthopedics
                                </small>
                            </span>
                        </li>

                        <li>
                            <img src="../images/image2.jpg" width="75" height="74" alt="" />
                            <img src="../images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                I felt the doctor is sitting to me. They way specialist of MEDICAL CLINIC asked my problems plus he talked in a very clear way.<br />
                                <br />
                                <br />
                                <br />
                                I didn't felt the specialist is away from me.
                            </p>
                            <span class="name">by VISHNU<br />
                                <small>Endocrinology
                                </small>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="dot"></div>
                <div class="overlay"></div>
                <div class="thumb"></div>
            </div>
        </div>


   
        
<div style="text-align: justify; font-size: 10px; float: left; border-top: 1px solid lightgray; margin-top: 50px; width: 982px;">
            <p>Disclaimer</p>
            <p>
                “The doctors associated with MEDICAL CLINIC are completely qualified and shall give their best of advises/diagnosis to resolve patient’s concern. However, such advises shall not make the doctors liable under any circumstances. The advices given are purely on the basis of the medical history or medical inputs provided to us by the patient in person. Please also note that such advices are not substitutes for prescriptions. The doctors shall also not be made liable for any reaction from any medicine allergy prescribed by doctor whatsoever. It is the sole responsibility of the patient to divulge the information to the doctor incase of allergy to any specific medicine or composition of a medicine etc. To the fullest extent permitted by applicable law, you agree that iclinic or the doctors concerned shall not be responsible or liable for any loss or damage of any kind incurred as the result of any such dealings or as the result of the presence of such advertisers and merchants on our website”
            </p>
        </div>
    </div>
</div>
<style type="text/css">
    #rotatescroll {
        height: 180px;
        position: relative;
        width: 440px;
    }

        #rotatescroll .viewport {
            height: 180px;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
            width: 440px;
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
                width: 440px;
                float: left;
                position: relative;
            }

        #rotatescroll .overlay {
            position: absolute;
            left: 0;
            top: 0;
            height: 300px;
            width: 440px;
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
<script src="../Scripts/jquery.tinycircleslider.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#closepopup').click(function () {
            $("#doctorProfile_overlay").hide();
        });
    });
    function DoctorProfilePopup(itemID) {
        $.ajax({
            type: 'POST',
            url: '/Profile/GetDoctorDetails',
            data: "{'id': " + itemID + " }",
            contentType: "application/json; charset=utf-8",
            success: function (result) {
                if (result.status == "success") {
                    $("#doctorName").html("Dr. " + result.Name);
                    $("#doctorimageid").attr("src", "/Content/Doctor/Images/" + result.image);
                    $("#doctorDegree").html(result.qualification);
                    $("#doctorSpeciality").html(result.speciality);
                    $("#doctorRegistrationNo").html(result.doctorRegistrationNo);
                    $("#doctorLocation").html(result.location);
                    $("#doctorBriefIntroduction").html(result.briefIntroduction);
                    $("#doctorQualification").html(result.qualification);
                    $("#doctorCollegeName").html(result.collegeName);
                    $("#doctorYear").html(result.passingYear);
                    $("#doctorAchievements").html(result.achievements);
                    $("#doctorAreaofSpecialInterest").html(result.interest);
                    $("#doctorCareerAwards").html(result.awards);
                    $("#doctorAssociatedHospital").html(result.associatedHospitals);
                    var tablehtml = "<table style='width: 80%; font-size: 12px; margin-top: 10px; padding: 5px;'>" +
                        "<tr><th style='text-align: left; width: 20%; font-size: 12px;'>Qualification</th>" +
                        "<th style='text-align: left; width: 40%; font-size: 12px;'>College Name</th>" +
                        "<th style='text-align: left; width: 10%; font-size: 12px;'>Year</th></tr>";
                    for (var i = 0; i <= result.qualificationlength; i++) {
                        tablehtml += "<tr><td style='text-align: left; width: 20%; font-size: 12px;'>" + result.qualification.split(',')[i] + "</td>" +
                            "<td style='text-align: left; width: 40%; font-size: 12px;'>" + result.collegeName.split(',')[i] + "</td>" +
                            "<td style='text-align: left; width: 10%; font-size: 12px;'>" + result.passingYear.split(',')[i] + "</td></tr>";
                    }
                    tablehtml += "</table>";
                    $('#qualificationdiv').html(tablehtml);
                }
            }
        });
        $("#doctorProfile_overlay").fadeIn(200);
        positionPopup();
    }
    //Popup for PatientInfo
    //position the popup at the center of the page
    function positionPopup() {
        if (!$("#doctorProfile_overlay").is(':visible')) {
            return;
        }
        $("#doctorProfile_overlay").css({
            left: ($(window).width() - $('#doctorProfile_overlay').width()) / 2,
            top: ($(window).width() - $('#doctorProfile_overlay').width()) / 7,
            position: 'absolute'
        });
    }

    //maintain the popup at center of the page when browser resized
    $(window).bind('resize', positionPopup);
</script>
<style type="text/css">
    .ListBtnB {
        background: #2673d2;
        height: 20px;
        border: 1px solid #2673d2;
        padding: 5px 12px 5px;
        float: left;
        font: normal 16px tahoma, Arial;
        color: #fff;
        cursor: pointer;
        text-decoration: none;
    }

        .ListBtnB:hover {
            background: #e93d4d;
            height: 20px;
            border: 1px solid #e93d4d;
            padding: 5px 12px 5px;
            float: left;
            font: normal 16px tahoma, Arial;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
        }
</style>
<link href="../content/CouponCode_form.css" type="text/css" rel="stylesheet" />
<!--Coupon Code Pop up Start-->
<div id="doctorProfile_overlay" style="display: none;">
    <div class='doctorProfile_popup' style="height: auto;">


        <div class='doctorProfile_cnt223' style="height: 400px; -webkit-box-shadow: 12px 12px 21px 0px rgba(51, 50, 50, 0.75); -moz-box-shadow: 12px 12px 21px 0px rgba(51, 50, 50, 0.75); box-shadow: 12px 12px 21px 0px rgba(51, 50, 50, 0.75);">
            <div>
                <span id="doctorName" style="font-size: 18px; font-weight: bold; color: #2673d2"></span>
                <img src='../images/coupon_close.png' alt='quit' class='Y' id='closepopup' style="left: 12px; top: -10px;" />
            </div>
            <div class="doctorProfile_doctor_img" id="doctorimage" style="margin-top: 12px;">
                <img id="doctorimageid" style="margin-top: 10px;" width="150" height="150" />
                <p>&nbsp;</p>
                <h4>Speciality</h4>
                <p style="text-align: left;">
                    <label id="doctorSpeciality"></label>
                </p>
                <p>&nbsp;</p>
                <h4>Registration No</h4>
                <p style="text-align: left;">
                    <label id="doctorRegistrationNo"></label>
                </p>
                <table style="width: 100px;">
                    <tr style="height: 10px;">
                        <td colspan="2"></td>
                    </tr>
                </table>
            </div>
            <div class="c_coupon_popup" style="margin-left: 220px;">
                <div style="width: auto; height: auto; min-height: 300px; margin: 30px auto; position: relative; padding: 0px;">
                    <h4>Brief Introduction
                    </h4>
                    <p>
                        <label id="doctorBriefIntroduction">Brief Introduction</label>
                    </p>

                    <p>&nbsp;</p>
                    <h4>Qualifications</h4>

                    <div id="qualificationdiv">
                    </div>

                    <p>&nbsp;</p>
                    <h4>Associated Hospital</h4>
                    <p>
                        <label id="doctorAssociatedHospital">Associated Hospital</label>
                    </p>

                    <p>&nbsp;</p>
                    <h4>Achievements</h4>
                    <p>
                        <label id="doctorAchievements">Achievements</label>
                    </p>

                    <p>&nbsp;</p>
                    <h4>Area of Special Interest</h4>
                    <p>
                        <label id="doctorAreaofSpecialInterest">Area of Special Interest</label>
                    </p>

                    <p>&nbsp;</p>
                    <h4>Career Awards</h4>
                    <p>
                        <label id="doctorCareerAwards">Career Awards</label>
                    </p>
                    <p>&nbsp;</p>
                </div>
                <div style="margin-bottom: 5px;"></div>

                <div class="clear2"></div>

            </div>
        </div>
    </div>
</div>
<!--Coupon Code Pop up End-->


        <div class="clear"></div>

        <div id="footer">   
            <div class="layout" align="center">
                <div class="footerLinks" style="margin-left: 250px;">
                    <a href="../index.html" hreflang="en-us">Home</a>  /  
                    <a href="../ChatWithDoctor.html" hreflang="en-us">24/7 Online Doctor</a> 
                    /
                    <a href=../written-medical-advice.html hreflang="en-us">Written Medical Advice</a>

                    <div class="footerLinks2">
                        <a href="../why-iclinic.html" hreflang="en-us">Why MEDICAL CLINIC</a> | 
                        <a href="../patient-forum.html" hreflang="en-us">Patient Forum</a> | 
                        <a href="../symptom-checker.html" hreflang="en-us">Symptom Checker</a> |       
                        
                        <a href="CoreBenefits.html" hreflang="en-us">Core Benefits</a>  |   
                        <a href="about-us.html" hreflang="en-us">About Us</a>    |
                        <a href="contact-us.html" hreflang="en-us">Contact Us</a><!-- <a href="#">FAQ's</a>-->
                    </div>
              </div>
                
                <div class="bottomLinks">
                  <div class="footLinks"></div>
              </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="copyright">
            <div class="layout">

                <p style="text-align: center; font-family: Tahoma;"><span style="text-align: center; font-family: arial;">Computer Branch 2013-16 </span></p>
          </div>
        </div>
                <div id="boxes">
                    <!--Main Login Pop-up start-->
                    <div id="dialog" class="window" style="margin-top: -100px;">
                        <div class="login-popup" style="height: 500px;">
                            <h1>
                                <a href="JavaScript:void(0);" class="close" hreflang="en-us" style="margin-bottom: 275px">
                                    <img src="../images/close-btn.png" width="29" height="29" alt="close" title="close" />
                                </a>
                                <img src="../images/user.png" width="16" height="15" />&nbsp;User Login
                            </h1>
                            <div class="form">


                                <form action="" enctype="multipart/form-data" method="post" onsubmit="return validation(this)">
                              <div class="login-radio">
                                    <span style="width: 270px; margin-left: 0px; margin-top: 5px; color: black;">If you are here for pre scheduled video consultation, please click below box and enter appointment code provided in your email.</span>

                                    <br />
                                    <input type="hidden" id="prehidden" value="0" />
                                </div>
                                <span>Enter your Email ID</span>
                                <label id="messageid" style="color: #e62929; font-size: 12px;"></label>
                                <div style="width: 267px; margin-bottom: -15px;">
                                    <input id="emailId" name="UserName" type="text" class="input" value="Email Id" />
                                    <label>
                                        <img id="loadingid" src="../images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                                    </label>
                                </div>
                                <br />

                                <span>Enter your password</span>
                                <input name="Password" type="password" value="" class="input" id="password"
                                       onblur=" if (this.value == '') this.value = 'pwd'; " onfocus=" if (this.value == 'pwd') this.value = ''; " />
                                <br />

                                <input id="appointmentcode" name="AppointmentCode" type="text" value="Appointment Code" class="input" disabled="disabled"
                                       onkeypress=" return ValidateAppointmentCode(event) " onblur=" if (this.value == '') this.value = 'Appointment Code'; " onfocus=" if (this.value == 'Appointment Code') this.value = ''; " onkeypress=" return ValidateAppoinmentCode(event)" />
                                <input type="submit" formaction="doctor_login_action.php" method="POST" class="login-button" value="Sign in" onclick="LoginbtnClick()" />

                                <div class="login-radio" style="text-align: center; margin-top: 5px">
                                    <a href="../Login/ForgotPassword.html" hreflang="en-us" style="text-decoration: none;">Forgotten your password?</a>
                                </div>
                                </form>
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
                        <img src="../images/coupan_leftimage.png" alt="Doctor Image" />
                    </div>
                    <img src='../images/coupon_close.png' alt='quit' class='x' id='x' />
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
                                <img id="Cloadingid" src="../images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                            </label>
                        </div>
                        <div class="c_input">
                            <div class="c_term_condition">
                                <input type="checkbox" id="condition_check" />
                                I accept iClinic's 
                                <a href="Terms-Conditions.html" target="_blank" hreflang="en-us">Terms and Conditions</a>
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

<script type="text/javascript" src="../Scripts/jquery.msgBox.js"></script>

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
                            window.location.href = "../Home.html";
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
<!--Coupon Code Script Start-->


<!-- Mirrored from www.icliniccare.com/Home/Doctors by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2016 12:31:11 GMT -->
</html>
