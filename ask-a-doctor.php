<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html prefix="og:http://ogp.me/ns#" itemscope itemtype="http://schema.org/Product" xmlns="http://www.w3.org/1999/xhtml">


<!-- Mirrored from www.icliniccare.com/ask-a-doctor by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2016 12:33:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta name="viewport" content="width=device-width" />
    <link href="favicon.ico" rel="shortcut icon" hreflang="en-us" type="image/x-icon" />
    <meta name="google-site-verification" content="HNZ4ajCc_qbQ9uU2xqm3bNeNnz52GcgZT2k2EDgL16E" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8" />
    <meta name="msvalidate.01" content="0115DEE5670E9B0C5999DD7007854BBB" />

    <title>Free Ask a Doctor Online, Ask Doctor Medical Advice For Free</title>
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
    
    
    <meta name="description" content="iClinic healthcare provide you free ask a doctors online consultation for medical advice. Ask a query with our online specialist doctor and get your health problems answer.">
    <meta name="keywords" content="Ask a doctor, online doctor chat, written medical advice, talk to doctor, doctor who online">
    <meta name="robot" content="index,follow">
    <meta name="revisit-after" content="2">
    <meta lang="en" content="English" />
    <meta property="OGTitle">
    <meta property="OGDescription">
    <meta property="OGUrl">
    <meta property="og:site_name" content="iClinic Care" />
    <meta property="og:type" content="Health Care" />
    <link rel="alternate" href="HealthPlans.html" hreflang=" en-us" />
    <meta itemprop="name" content="iClinic Healthcare" />
    <meta itemprop="description" />
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
    
   <div id="stickybanner_right" class="stickybanner"><a target="_blank" href="packages/obesity-comprehensive-profile-tests660a.html?utm_source=sticky&amp;utm_medium=iClinic&amp;utm_campaign=sticky%20banner">banner right</a></div>
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
                    <div style="margin-top: 5px;">
                        <input class="loginbutton" id="Continue" style="float: right; margin-right: 30px; font-family: Tahoma" type="submit" value="Log in" onclick="ConsumerLoginClick()" />
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 0 auto;">
            <div id="header" tyle="margin: 0 auto;width:100%">
                <div itemscope itemtype="http://schema.org/Organization">
                    <a itemprop="url" href="index.html" style="float: left; margin-left: 50px;" hreflang="en-us">
                        <img src="images/logo.jpg" itemprop="logo" alt="Online Doctor Consultation" title="Online Doctor Consultation" class="logo" />
                    </a>

                    <span class="tagLine" style="float: left;">Care today, just a click away</span>
                        <div id="topLinks" style="float: right; font-size: 12px; margin-top: 55px; margin-right: 20px; width: 875px;">
                            <ul>
                                <li class="first">
                                   </li>
                               
                                <li><a href="Home/Doctors.html" hreflang="en-us">Are you a Doctor</a></li>
                                
                               
                                
                                <li><a href="Home/Latest-News.html" hreflang="en-us">Latest News</a></li>
                                <li><a href="blog.html" hreflang="en-us">Blog</a></li>
                                
                                <li><a href="home/about-us.html" hreflang="en-us">About Us</a></li>
                                <li><a href="#" id="loginclick">Login</a></li>
                            </ul>
                        </div>
                    <div class="clear"></div>
                    <div style="width: 100%; background: url(images/navBg.jpg) 0 0 repeat-x;margin:0 auto">

                        <div style="width:95%;margin:0 auto;">
                            <ul id="nav">
                                <li>
                                    <a href="index.php" class="leftCorner" hreflang="en-us">
                                        <img alt="iCliniccare" title="iCliniccare" src="images/home-icon.png" class="homeImage" style="margin-left: 11px;" />
                                    </a>
                                </li>
                                <li onmouseover="tooltipsfocus('7')" onmouseout="tooltipsblur('7')">
                                    <a href="Home/ConsultDoctor.html">Consult a Doctor Now</a>
                                    <div id="tooltip7" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Consult a Doctor Now">
                                        Ask a Doctor for free, 24/7 Online Doctor,  Written Medical Advice, Video call with specialist - Consultation Services.
                                    </div>
                                </li>
                                <li onmouseover="tooltipsfocus('5')" onmouseout="tooltipsblur('5')">
                                   
                                    <div id="tooltip5" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="online health services">
                                        Access to life style advisor, health risk assessment and get daily health tips in your inbox.
                                    </div>
                                </li>

                                <li onmouseover="tooltipsfocus('13')" onmouseout="tooltipsblur('13')">
                                  
                                    <div id="tooltip13" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Order Lab Test">
                                        Get 20% Discount on Lab Tests by Diagno Labs.
                                    </div>
                                </li>
                         

                                <li onmouseover="tooltipsfocus('1')" onmouseout="tooltipsblur('1')">
                                    <a href="patient-forum.html" hreflang="en-us" style="text-align:center;">Patient Forum</a>
                                    <div id="tooltip1" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Patient Forum">
                                        Interact with patients with similar ailments and get useful advice on treatments and medicines.
                                    </div>
                                </li>
                                <li onmouseover="tooltipsfocus('2')" onmouseout="tooltipsblur('2')">
                                    <a href="symptom-checker.html" hreflang="en-us"  style="text-align:center;">Symptom Checker</a>
                                    <div id="tooltip2" class="tool-tip">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Symptom Checker">
                                        Analyse your symptoms, diagnose your ailments and get a detailed report.
                                    </div>
                                </li>



                                
                                
                  
                                <li onmouseover="tooltipsfocus('6')" onmouseout="tooltipsblur('6')">
                                    <a href="home/contact.php" class="right_menu_radius" hreflang="en-us">Contact us</a>

                                    <div id="tooltip6" class="tool-tip" style="display: none">
                                        <img src="images/tool-tip-arrow.png" width="20" height="20" alt="contact doctor online">
                                        If you have any query or suggestions contact us now.
                                    </div>
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

        <a href="index.php" title="Home">Home</a>
         &gt; 

        <a href="Home/ConsultDoctor.html" title="Consult a Doctor Now">Consult a Doctor Now</a>
         &gt; 

    Ask a Doctor
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
            doctorimage = "images/thumbnail.gif";
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


    <script src="../www.google.com/recaptcha/api.js" async defer></script>

<div class="layout">

    


<!-- Code for demo video-->
<script src="Scripts/html5highlight.js"></script>
<script src="Scripts/html5lightbox.js"></script>
<script src="Scripts/OfflineConsultDoctorList.js"></script>
<script src="Scripts/cookies.js"></script>
<script src="Scripts/XSSValidate.js"></script>
<link href="Content/askadoctor.css" rel="stylesheet" />
<script src="Scripts/jquery.msgBox.js" type="text/javascript"></script>
<link href="Content/msgBoxLight.css" rel="stylesheet" type="text/css" />
<script src="Scripts/askDoctorScript.js"></script>
<script type="text/javascript">
    $(function () {
        if ('False' == 'True') {
            document.getElementById('email').setAttribute("readonly", "readonly");
            document.getElementById('phoneNumber').setAttribute("readonly", "readonly");
        } else {
            document.getElementById('email').removeAttribute("readonly");
            document.getElementById('phoneNumber').removeAttribute("readonly");
        }
    });

</script>

    <input class="freecoupon_button" type="button" value="Get 50% off on 1st Consultation" onclick="coupanpopup()" width="120" height="32" style="position: absolute; margin-left: 761px; margin-top: -10px;" />

<div class="layout">
    <div class="clear"></div>
    <div class="doctorBanner" style="margin-top: 40px">
<form action="https://www.icliniccare.com/ask-a-doctor" method="post">            <input type="hidden" name="visit" id="visit" value="" />
            <div class="formContainer">
                <br />
                <h2>Ask a Doctor</h2>
                <br />
                <p style="width: 100%">
                        <label>Get a free Written Opinion from an M.B.B.S doctor. Ask relevant questions and you will get a written medical advice from an Internal Medicine doctor within 2 working hours. Just enter your name and email ID and write your query!</label>             
                </p>
                <div class="row">
                    <input id="UserRole" name="UserRole" type="hidden" value="" />
                    <label class="field_name" for="Name__">Name *</label>
                    <input class="shadowfield" id="name" name="Patient.PatientName" onkeypress="return LettersWithSpaceOnly(event)" placeholder="Enter Your Name" style="margin-left: 40px;" type="text" value="" />
                    <label class="field_name" for="Email__" style="margin-left:20px;">Email *</label>
                    <input class="shadowfield" id="email" name="Patient.Email" onkeypress="return ValidateEmail(event)" placeholder="Enter Your Email" style="margin-left: 60px;" type="text" value="" />
                </div>

                <div class="row">
                    <label class="field_name" for="Phone_Code_">Phone Code </label>
                    <select class="shadowfield" data-val="true" data-val-number="The field Phone Code must be a number." data-val-required="The Phone Code field is required." id="phoneCode" name="Patient.PhoneCode" style="width:206px;margin-left:10px;"><option value="">Select Phone Code</option>
<option value="93">Afghanistan (93) </option>
<option value="355">Albania (355) </option>
<option value="213">Algeria (213) </option>
<option value="1684">American Samoa (1684) </option>
<option value="376">Andorra (376) </option>
<option value="244">Angola (244) </option>
<option value="1264">Anguilla (1264) </option>
<option value="0">Antarctica (0) </option>
<option value="1268">Antigua and Barbuda (1268) </option>
<option value="54">Argentina (54) </option>
<option value="374">Armenia (374) </option>
<option value="297">Aruba (297) </option>
<option value="61">Australia (61) </option>
<option value="43">Austria (43) </option>
<option value="994">Azerbaijan (994) </option>
<option value="1242">Bahamas (1242) </option>
<option value="973">Bahrain (973) </option>
<option value="880">Bangladesh (880) </option>
<option value="1246">Barbados (1246) </option>
<option value="375">Belarus (375) </option>
<option value="32">Belgium (32) </option>
<option value="501">Belize (501) </option>
<option value="229">Benin (229) </option>
<option value="1441">Bermuda (1441) </option>
<option value="975">Bhutan (975) </option>
<option value="591">Bolivia (591) </option>
<option value="387">Bosnia and Herzegovina (387) </option>
<option value="267">Botswana (267) </option>
<option value="0">Bouvet Island (0) </option>
<option value="55">Brazil (55) </option>
<option value="246">British Indian Ocean Territory (246) </option>
<option value="673">Brunei Darussalam (673) </option>
<option value="359">Bulgaria (359) </option>
<option value="226">Burkina Faso (226) </option>
<option value="257">Burundi (257) </option>
<option value="855">Cambodia (855) </option>
<option value="237">Cameroon (237) </option>
<option value="1">Canada (1) </option>
<option value="238">Cape Verde (238) </option>
<option value="1345">Cayman Islands (1345) </option>
<option value="236">Central African Republic (236) </option>
<option value="235">Chad (235) </option>
<option value="56">Chile (56) </option>
<option value="86">China (86) </option>
<option value="61">Christmas Island (61) </option>
<option value="672">Cocos (Keeling) Islands (672) </option>
<option value="57">Colombia (57) </option>
<option value="269">Comoros (269) </option>
<option value="243">Congo (243) </option>
<option value="242">Congo, the Democratic Republic of the (242) </option>
<option value="682">Cook Islands (682) </option>
<option value="506">Costa Rica (506) </option>
<option value="225">Cote D&#39;Ivoire (225) </option>
<option value="385">Croatia (385) </option>
<option value="53">Cuba (53) </option>
<option value="357">Cyprus (357) </option>
<option value="420">Czech Republic (420) </option>
<option value="45">Denmark (45) </option>
<option value="253">Djibouti (253) </option>
<option value="1767">Dominica (1767) </option>
<option value="1809">Dominican Republic (1809) </option>
<option value="593">Ecuador (593) </option>
<option value="20">Egypt (20) </option>
<option value="503">El Salvador (503) </option>
<option value="240">Equatorial Guinea (240) </option>
<option value="291">Eritrea (291) </option>
<option value="372">Estonia (372) </option>
<option value="251">Ethiopia (251) </option>
<option value="500">Falkland Islands (Malvinas) (500) </option>
<option value="298">Faroe Islands (298) </option>
<option value="679">Fiji (679) </option>
<option value="358">Finland (358) </option>
<option value="33">France (33) </option>
<option value="594">French Guiana (594) </option>
<option value="689">French Polynesia (689) </option>
<option value="0">French Southern Territories (0) </option>
<option value="241">Gabon (241) </option>
<option value="220">Gambia (220) </option>
<option value="995">Georgia (995) </option>
<option value="49">Germany (49) </option>
<option value="233">Ghana (233) </option>
<option value="350">Gibraltar (350) </option>
<option value="30">Greece (30) </option>
<option value="299">Greenland (299) </option>
<option value="1473">Grenada (1473) </option>
<option value="590">Guadeloupe (590) </option>
<option value="1671">Guam (1671) </option>
<option value="502">Guatemala (502) </option>
<option value="224">Guinea (224) </option>
<option value="245">Guinea-Bissau (245) </option>
<option value="592">Guyana (592) </option>
<option value="509">Haiti (509) </option>
<option value="0">Heard Island and Mcdonald Islands (0) </option>
<option value="39">Holy See (Vatican City State) (39) </option>
<option value="504">Honduras (504) </option>
<option value="852">Hong Kong (852) </option>
<option value="36">Hungary (36) </option>
<option value="354">Iceland (354) </option>
<option selected="selected" value="91">India (91) </option>
<option value="62">Indonesia (62) </option>
<option value="98">Iran, Islamic Republic of (98) </option>
<option value="964">Iraq (964) </option>
<option value="353">Ireland (353) </option>
<option value="972">Israel (972) </option>
<option value="39">Italy (39) </option>
<option value="1876">Jamaica (1876) </option>
<option value="81">Japan (81) </option>
<option value="962">Jordan (962) </option>
<option value="7">Kazakhstan (7) </option>
<option value="254">Kenya (254) </option>
<option value="686">Kiribati (686) </option>
<option value="850">Korea, Democratic People&#39;s Republic of (850) </option>
<option value="82">Korea, Republic of (82) </option>
<option value="965">Kuwait (965) </option>
<option value="996">Kyrgyzstan (996) </option>
<option value="856">Lao People&#39;s Democratic Republic (856) </option>
<option value="371">Latvia (371) </option>
<option value="961">Lebanon (961) </option>
<option value="266">Lesotho (266) </option>
<option value="231">Liberia (231) </option>
<option value="218">Libyan Arab Jamahiriya (218) </option>
<option value="423">Liechtenstein (423) </option>
<option value="370">Lithuania (370) </option>
<option value="352">Luxembourg (352) </option>
<option value="853">Macao (853) </option>
<option value="389">Macedonia, the Former Yugoslav Republic of (389) </option>
<option value="261">Madagascar (261) </option>
<option value="265">Malawi (265) </option>
<option value="60">Malaysia (60) </option>
<option value="960">Maldives (960) </option>
<option value="223">Mali (223) </option>
<option value="356">Malta (356) </option>
<option value="692">Marshall Islands (692) </option>
<option value="596">Martinique (596) </option>
<option value="222">Mauritania (222) </option>
<option value="230">Mauritius (230) </option>
<option value="269">Mayotte (269) </option>
<option value="52">Mexico (52) </option>
<option value="691">Micronesia, Federated States of (691) </option>
<option value="373">Moldova, Republic of (373) </option>
<option value="377">Monaco (377) </option>
<option value="976">Mongolia (976) </option>
<option value="1664">Montserrat (1664) </option>
<option value="212">Morocco (212) </option>
<option value="258">Mozambique (258) </option>
<option value="95">Myanmar (95) </option>
<option value="264">Namibia (264) </option>
<option value="674">Nauru (674) </option>
<option value="977">Nepal (977) </option>
<option value="31">Netherlands (31) </option>
<option value="599">Netherlands Antilles (599) </option>
<option value="687">New Caledonia (687) </option>
<option value="64">New Zealand (64) </option>
<option value="505">Nicaragua (505) </option>
<option value="227">Niger (227) </option>
<option value="234">Nigeria (234) </option>
<option value="683">Niue (683) </option>
<option value="672">Norfolk Island (672) </option>
<option value="1670">Northern Mariana Islands (1670) </option>
<option value="47">Norway (47) </option>
<option value="968">Oman (968) </option>
<option value="92">Pakistan (92) </option>
<option value="680">Palau (680) </option>
<option value="970">Palestinian Territory, Occupied (970) </option>
<option value="507">Panama (507) </option>
<option value="675">Papua New Guinea (675) </option>
<option value="595">Paraguay (595) </option>
<option value="51">Peru (51) </option>
<option value="63">Philippines (63) </option>
<option value="0">Pitcairn (0) </option>
<option value="48">Poland (48) </option>
<option value="351">Portugal (351) </option>
<option value="1787">Puerto Rico (1787) </option>
<option value="974">Qatar (974) </option>
<option value="262">Reunion (262) </option>
<option value="40">Romania (40) </option>
<option value="70">Russian Federation (70) </option>
<option value="250">Rwanda (250) </option>
<option value="290">Saint Helena (290) </option>
<option value="1869">Saint Kitts and Nevis (1869) </option>
<option value="1758">Saint Lucia (1758) </option>
<option value="508">Saint Pierre and Miquelon (508) </option>
<option value="1784">Saint Vincent and the Grenadines (1784) </option>
<option value="684">Samoa (684) </option>
<option value="378">San Marino (378) </option>
<option value="239">Sao Tome and Principe (239) </option>
<option value="966">Saudi Arabia (966) </option>
<option value="221">Senegal (221) </option>
<option value="381">Serbia and Montenegro (381) </option>
<option value="248">Seychelles (248) </option>
<option value="232">Sierra Leone (232) </option>
<option value="65">Singapore (65) </option>
<option value="421">Slovakia (421) </option>
<option value="386">Slovenia (386) </option>
<option value="677">Solomon Islands (677) </option>
<option value="252">Somalia (252) </option>
<option value="27">South Africa (27) </option>
<option value="0">South Georgia and the South Sandwich Islands (0) </option>
<option value="34">Spain (34) </option>
<option value="94">Sri Lanka (94) </option>
<option value="249">Sudan (249) </option>
<option value="597">Suriname (597) </option>
<option value="47">Svalbard and Jan Mayen (47) </option>
<option value="268">Swaziland (268) </option>
<option value="46">Sweden (46) </option>
<option value="41">Switzerland (41) </option>
<option value="963">Syrian Arab Republic (963) </option>
<option value="886">Taiwan, Province of China (886) </option>
<option value="992">Tajikistan (992) </option>
<option value="255">Tanzania, United Republic of (255) </option>
<option value="66">Thailand (66) </option>
<option value="670">Timor-Leste (670) </option>
<option value="228">Togo (228) </option>
<option value="690">Tokelau (690) </option>
<option value="676">Tonga (676) </option>
<option value="1868">Trinidad and Tobago (1868) </option>
<option value="216">Tunisia (216) </option>
<option value="90">Turkey (90) </option>
<option value="7370">Turkmenistan (7370) </option>
<option value="1649">Turks and Caicos Islands (1649) </option>
<option value="688">Tuvalu (688) </option>
<option value="256">Uganda (256) </option>
<option value="380">Ukraine (380) </option>
<option value="971">United Arab Emirates (971) </option>
<option value="44">United Kingdom (44) </option>
<option value="1">United States (1) </option>
<option value="1">United States Minor Outlying Islands (1) </option>
<option value="598">Uruguay (598) </option>
<option value="998">Uzbekistan (998) </option>
<option value="678">Vanuatu (678) </option>
<option value="58">Venezuela (58) </option>
<option value="84">Viet Nam (84) </option>
<option value="1284">Virgin Islands, British (1284) </option>
<option value="1340">Virgin Islands, U.s. (1340) </option>
<option value="681">Wallis and Futuna (681) </option>
<option value="212">Western Sahara (212) </option>
<option value="967">Yemen (967) </option>
<option value="260">Zambia (260) </option>
<option value="263">Zimbabwe (263) </option>
</select>
                    <label class="field_name" for="Mobile_Number_" style="margin-left:20px;">Mobile Number </label>
                    <input class="shadowfield" data-val="true" data-val-number="The field MobileNo must be a number." id="phoneNumber" name="Patient.MobileNo" onkeypress="return isNumberKey(event)" placeholder="Enter Your Mobile No" style="margin-left: 18px;" type="text" value="" />
                </div>

                <div class="row">

                        <div><span><input data-val="true" data-val-required="The IsPaidService field is required." id="IsPaidService" name="IsPaidService" type="checkbox" value="true" /><input name="IsPaidService" type="hidden" value="false" /> Extend my query to unlimited words and facility to attach medical reports</span>      <span style="font-family: Tahoma; font-size: 13px;">(Consultation Charges Rs.250.)</span></div>
                        <div class="bottom_uiv6_form_left_textv6_bottom" style="float: right;">

                           
                        </div>

                    <input data-val="true" data-val-required="The ExceedLimitService field is required." id="ExceedLimitService" name="ExceedLimitService" type="hidden" value="False" />
                    <br />
                    <p style="width: 50%; float: left; font-size: 14px; margin-right: 0px;">
                        Write your query below *-
                    </p>
                    <textarea class="textarea" cols="0" id="query" minlength="50" name="Query" onkeypress="return  chatAndComment(event);(event)" onkeyup="return len();" placeholder=" Write your query here........." rows="2" style="resize: none;width: 615px;;">
</textarea>

                </div>


                <div class="buttonRow">

                </div>
                    <div class="g-recaptcha" data-sitekey="6Ld09A8TAAAAAAA_5nE9L3okV0SPLdwsyFsH1CEQ" id="capchta" data-theme="red" data-type="audio" data-size="compact "></div>





                <br />
                <div class="buttonRow" style="float: left">

                    <input type="submit" value="" id="formsubmit" class="continueBtn" style="float: right" />
                    <div class="carousel" id="chatwithdoctorcarousel" style="width: 60px; height: 59px; margin: 0 auto; margin-left: 7px; display: none;">
                        <ul id="chatwithdoctorulcarousel">
                            <li style="width: 260px; text-align: center;">
                                <img src="images/listloading2.gif" style="margin-top: -9px; margin-left: -50px" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
</form>    </div>
</div>

</div>

<div class="layout">
    <div class="section3">
        <img src="images/border.gif" width="952" height="1" alt="" class="left" />
        <div class="testimonial">
            <h5>Testimonials by our users</h5>
            <div id="rotatescroll">
                <div class="viewport">
                    <ul id="testimonialSlideCarousel" class="overview">
                        <li>
                            <img src="images/image2.jpg" width="75" height="74" alt="" />
                            <img src="images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                I would like to intend my sincere thanks to entire iClinic Healthcare team for their wonderful support.
                                <br />
                                <br />
                                <br />
                                From the time of consultation till discharge they were with me. Really your care had just given me a feeling of family.
                            </p>
                            <span class="name">by Rekha<br />
                                <small>Gastroentrology
                                </small>
                            </span>
                        </li>

                        <li>
                            <img src="images/image2.jpg" width="75" height="74" alt="" />
                            <img src="images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                MEDICAL CLINIC is trying best to send specialist care to farthest locations of India.<br />
                                <br />
                                <br />
                                <br />
                                Where specialist care is difficult to get.
                            </p>
                            <span class="name">by Dr. Amit Shrivastav
                                    <br />
                                <small>Neurologist (M.D.)
                                </small>
                            </span>
                        </li>
                        <li>
                            <img src="images/image2.jpg" width="75" height="74" alt="" />
                            <img src="images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                I am very much satisfied with a consulting and I will surely others.<br />
                                <br />
                                <br />
                                <br />

                            </p>
                            <span class="name">by Gaurav Shahi<br />
                                <small>Gastroentrology
                                </small>
                            </span>
                        </li>
                        <li>
                            <img src="images/image2.jpg" width="75" height="74" alt="" />
                            <img src="images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                I had a wonderful experience at MEDICAL CLINIC, where I could get first class consult from a key physician for my ailment.<br />
                                <br />
                                <br />
                                <br />
                                The appointment was on time and I could get personalized attention. Overall it's was a nice feeling.
                            </p>
                            <span class="name">by Moumita Chatterjee<br />
                                <small>Orthopedics
                                </small>
                            </span>
                        </li>

                        <li>
                            <img src="images/image2.jpg" width="75" height="74" alt="" />
                            <img src="images/quote1.jpg" width="22" height="16" alt="" />
                            <p style="width: 300px;">
                                I felt the doctor is sitting to me. They way specialist of MEDICAL CLINIC asked my problems plus he talked in a very clear way.<br />
                                <br />
                                <br />
                                <br />
                                I didn't felt the specialist is away from me.
                            </p>
                            <span class="name">by J.K. Diwan<br />
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

        <img src="images/seprator4.gif" width="1" height="182" alt="" class="left" />

        <!-- LIST OF ONLINE DOCTORS -->
        <div class="onlineDoctor">
            <h6>Our Doctors</h6>
            <a id="mycarousel-prev" style="cursor: pointer;">
                <img src="images/leftArrow.jpg" width="20" height="30" class="previous" />
            </a>
            <a id="mycarousel-next" style="cursor: pointer;">
                <img src="images/rightArrow.jpg" width="20" height="30" class="next" />
            </a>
            <ul id="mycarousel" style="width: 465px; overflow: hidden; display: block; height: 140px;">
                <li style="text-align: center; width: 465px; padding-top: 25px">
                    <img src="images/loadingself.gif" width="25" height="25">
                </li>
            </ul>
        </div>
        <!-- -->

        <img src="images/border.gif" width="952" height="1" alt="" class="left" style="margin: 20px 0 0" />

       
        <div style="text-align: justify; font-size: 10px; float: left; border-top: 1px solid lightgray; margin-top: 50px; width: 982px;">
            <p>Disclaimer</p>
            <p>
                “The doctors associated with MEDICAL CLINIC are completely qualified and shall give their best of advises/diagnosis to resolve patient’s concern. However, such advises shall not make the doctors liable under any circumstances. The advices given are purely on the basis of the medical history or medical inputs provided to us by the patient in person. Please also note that such advices are not substitutes for prescriptions. The doctors shall also not be made liable for any reaction from any medicine allergy prescribed by doctor whatsoever. It is the sole responsibility of the patient to divulge the information to the doctor incase of allergy to any specific medicine or composition of a medicine etc. To the fullest extent permitted by applicable law, you agree that iclinic or the doctors concerned shall not be responsible or liable for any loss or damage of any kind incurred as the result of any such dealings or as the result of the presence of such advertisers and merchants on our website”
            </p>
        </div>
    </div>
</div>
<div class="clear"></div>



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
<script src="Scripts/jquery.tinycircleslider.min.js"></script>
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
<link href="content/CouponCode_form.css" type="text/css" rel="stylesheet" />
<!--Coupon Code Pop up Start-->
<div id="doctorProfile_overlay" style="display: none;">
    <div class='doctorProfile_popup' style="height: auto;">


        <div class='doctorProfile_cnt223' style="height: 400px; -webkit-box-shadow: 12px 12px 21px 0px rgba(51, 50, 50, 0.75); -moz-box-shadow: 12px 12px 21px 0px rgba(51, 50, 50, 0.75); box-shadow: 12px 12px 21px 0px rgba(51, 50, 50, 0.75);">
            <div>
                <span id="doctorName" style="font-size: 18px; font-weight: bold; color: #2673d2"></span>
                <img src='images/coupon_close.png' alt='quit' class='Y' id='closepopup' style="left: 12px; top: -10px;" />
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
            <div class="layout">
                <div class="footerLinks">
                    <a href="index.html" hreflang="en-us">Home</a>  /  
                    <a href="ChatWithDoctor.html" hreflang="en-us">24/7 Online Doctor</a> /
                    <a href="#dialog" name="modal" hreflang="en-us">Video Call with Specialist</a> /
                    <a href=written-medical-advice.html hreflang="en-us">Written Medical Advice</a>

                   
                </div>
                               <div class="bottomLinks">
                    
                    <div class="footLinks">
                        <a href="Home/Disclaimer.html" hreflang="en-us">Disclaimer</a> |
                        
                        <a href="Home/Privacy-Policy.html" hreflang="en-us">Privacy Policy</a> | 
                        <a href="Home/Terms-Conditions.html" hreflang="en-us">Terms & Conditions</a> | 
                        <a href="Home/Refund-and-Cancellation-Policy.html" hreflang="en-us">Refund and Cancellation Policy</a> | 
                        <a href="Home/Sitemap.html" hreflang="en-us">Sitemap</a>

                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="copyright">
            <div class="layout">

                <p style="text-align: center; font-family: Tahoma;">
                    &copy; 2013- 2016 MEDICAL CLINIC HealthCare, All Rights Reserved
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
                                I accept MEDICAL CLINIC's 
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
<!--Coupon Code Script Start-->


<!-- Mirrored from www.icliniccare.com/ask-a-doctor by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2016 12:33:04 GMT -->
</html>
