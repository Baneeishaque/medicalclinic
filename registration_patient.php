<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html prefix="og:http://ogp.me/ns#" itemscope itemtype="http://schema.org/Product" xmlns="http://www.w3.org/1999/xhtml">


    <!-- Mirrored from www.icliniccare.com/DoctorRegistration by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2016 12:36:06 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta name="viewport" content="width=device-width" />
        <link href="favicon.ico" rel="shortcut icon" hreflang="en-us" type="image/x-icon" />
        <meta name="google-site-verification" content="HNZ4ajCc_qbQ9uU2xqm3bNeNnz52GcgZT2k2EDgL16E" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8" />
        <meta name="msvalidate.01" content="0115DEE5670E9B0C5999DD7007854BBB" />

        <title>Patient Registration</title>
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
                var z = $zopim = function (c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute('charset', 'utf-8');
                $.src = 'http://v2.zopim.com/?1z8u8gYrzoZpXC8ThHnOdDLUnmOuzkZX';
                z.t = +new Date;
                $.
                        type = 'text/javascript';
                e.parentNode.insertBefore($, e)
            })(document, 'script');
        </script>
        <!--End of Zopim Live Chat Script-->

        <script type="text/javascript">
            setTimeout(function () {
                var a = document.createElement("script");
                var b = document.getElementsByTagName("script")[0];
                a.src = document.location.protocol + "//dnn506yrbagrg.cloudfront.net/pages/scripts/0021/9354.js?" + Math.floor(new Date().getTime() / 3600000);
                a.async = true;
                a.type = "text/javascript";
                b.parentNode.insertBefore(a, b)
            }, 1);
        </script>

        <script type="text/javascript">
            var _mfq = _mfq || [];
            (function () {
                var mf = document.createElement("script");
                mf.type = "text/javascript";
                mf.async = true;
                mf.src = "../cdn.mouseflow.com/projects/523389ca-de88-4777-9355-d122e39e9da1.js";
                document.getElementsByTagName("head")[0].appendChild(mf);
            })();
        </script>
        <script type="text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
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
                    $banner.stop().animate({bottom: -($top - $topDefault)}, 1000, 'easeOutBack');
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
                <a href="#" class="close">Close</a>
                <div id="heading" style="font-size: 18px; float: left; width: 250px; border-bottom: #CCC 1px solid; padding-bottom: 7px; color: #327ad4; padding-bottom: 15px; margin: 12px 0px 0px 0px;">Login</div>
                <div>
                    <br />
                    <label id="messageidnew" style="color: #e62929; font-size: 12px; float: left; margin-top: 10px;"></label>
                    <br />
                    <input type="text" class=" textbox" name="email" id="emailIdconsumer" class="shadowfield" placeholder="Enter Email ID" onblur="checkemail(this.value, 'loginLoad', 'messageidnew');" style="width: 230px !important;">
                    <label>
                        <img id="loginLoad" src="images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                    </label>
                </div>
                <br />
                <div>
                    <input type="password" class=" textbox" name="password" id="passwordconsumer" placeholder="Enter Password" class="shadowfield" onblur="if (this.value == '')
                                this.value = 'password';" onfocus="if (this.value == 'password')
                                            this.value = '';" style="width: 230px !important;">
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
                            <li class="first"> <a href="why-iclinic.html" hreflang="en-us">Why iClinic</a></li>
                            <li><a href="Home/Doctors.html" hreflang="en-us">Are you a Doctor</a></li>
                            <li><a href="#" id="loginclick">Login</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div style="width: 100%; background: url(images/navBg.jpg) 0 0 repeat-x;margin:0 auto">

                        <div style="width:95%;margin:0 auto;">
                            <ul id="nav">
                                <li>
                                    <a href="index.html" class="leftCorner" hreflang="en-us">
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
                                <li onmouseover="tooltipsfocus('1')" onmouseout="tooltipsblur('1')"> <a href="patient-forum.html" hreflang="en-us" style="text-align:center;">Patient Forum</a>
                                    <div id="tooltip1" class="tool-tip" style="display: none"> <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Patient Forum"> Interact with patients with similar ailments and get useful advice on treatments and medicines. </div>
                                </li>
                                <li onmouseover="tooltipsfocus('2')" onmouseout="tooltipsblur('2')"> <a href="symptom-checker.html" hreflang="en-us"  style="text-align:center;">Symptom Checker</a>
                                    <div id="tooltip2" class="tool-tip"> <img src="images/tool-tip-arrow.png" width="20" height="20" alt="Symptom Checker"> Analyse your symptoms, diagnose your ailments and get a detailed report. </div>
                                </li>
                                <li onmouseover="tooltipsfocus('6')" onmouseout="tooltipsblur('6')"> <a href="home/contact-us.html" class="right_menu_radius" hreflang="en-us">Contact us</a>
                                    <div id="tooltip6" class="tool-tip" style="display: none"> <img src="images/tool-tip-arrow.png" width="20" height="20" alt="contact doctor online"> If you have any query or suggestions contact us now. </div>
                                </li>
                                <li onmouseover="tooltipsfocus('5')" onmouseout="tooltipsblur('5')"> <a href="home/about-us.html" hreflang="en-us">About Us</a>
                                    <div id="tooltip5" class="tool-tip" style="display: none"> <img src="images/tool-tip-arrow.png" width="20" height="20" alt="online health services"> About team ssm </div>
                                </li>
                                <li> </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>

        <div style="margin:0 auto;width: 982px;" id="breadcrumb">    
        </div>









    <style type="text/css">
        .chosen-container-multi .chosen-choices li.search-choice span {
            line-height: 12px;
            margin: 0px;
            padding: 0px;
            height: 15px;
        }

        .RedBtnB {
            font: normal 16px tahoma, Arial;
            color: #fff;
            cursor: pointer;
        }

        .button-big:hover {
            width: 140px;
            height: 40px;
            color: #fff !important;
            display: block;
            text-align: center;
            text-decoration: none;
            background: #e93d4d; 
            font-size: 20px;
            padding: 5px;
            cursor: pointer;
        }
    </style>
    <link href="Content/DoctorRegistrationPage8d47.css?v=grFa7uK2n5mrWt_UBVOeDvFoCVC2AWzmYpvcANhsczo1" rel="stylesheet"/>


    <div class="page-heading">
        <h1>Join iClinic Health Care's Patient Network</h1>
    </div>

    <form action="" enctype="multipart/form-data" method="post" onsubmit="return validation(this)"><input name="__RequestVerificationToken" type="hidden" value="9XvlVrCSatBBFIkY7Tha8R6yCzXNknFGc-HkOzrA-5mrmCPpzcTJZ-E5hOJ3ZuJtqmuHGQN9ydN1SyTAaOmVfsV66QDRo5ZUqS8AGGzRqyI1" />    <input type="hidden" id="timezone" name="timezone" value="" />
        <input type="hidden" id="countrytext" name="countrytext" value="" />
        <div class="doctor-joining-form">
            <div style="width: 500px; margin: 0px 195px;">
                <table class="model-state">
                </table>

            </div>
            <h2><span>Personal Details</span></h2>
            <div class="one">
                <img src="images/personal-detail-photo.jpg" width="179" height="309" />
            </div>

            <table width="800" border="0" cellspacing="0" cellpadding="0" style="margin: 5px auto">
                <tr>
                    <td width="140" class="admin-tbl-data-row-1" >Name<span class="required">*</span></td>
                    <td width="240" class="admin-tbl-data-row-2">
                        <select class="drp" id="TitleName" name="Tname" style="width: 55px;">

                            <option value="Mr.">Mr.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Ms.">Mrs.</option>
                        </select>
                        <input MaxLength="100" TabIndex="1" class="txt" data-val="true" data-val-required="The Doctor Name field is required." id="Name" name="Name" onkeypress="return LettersWithSpaceOnly(event)" style="width:135px;" type="text" value="" />
                    </td>
                    <td width="140" class="admin-tbl-data-row-1">Gender</td>
                    <td width="240" class="admin-tbl-data-row-2">
                        <input Checked="checked" TabIndex="2" data-val="true" data-val-required="The Gender field is required." id="Gender" name="Gender" type="radio" value="Male" /> Male    
                        <input id="Gender" name="Gender" type="radio" value="Female" /> Female
                    </td>
                </tr>
                <tr style="height: 10px;">
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td class="admin-tbl-data-row-1">Date of Birth<span class="required">*</span></td>
                    <td class="admin-tbl-data-row-2">
                        <input TabIndex="3" class="txt" data-val="true" data-val-required="The Date of Birth field is required." id="dateTimePicker" name="Dob" type="text" value="" />
                        <script type="text/javascript">
                            $(function () {
                                $('*[name=Dob]').datetimepicker({
                                    timepicker: false,
                                    format: 'm/d/Y',
                                    formatDate: 'Y/m/d',
                                    maxDate: 0, // yesterday is minimum date
                                    todayButton: false
                                });
                            });
                        </script>
                    </td>
                    <td class="admin-tbl-data-row-1">Email<span class="required">*</span></td>
                    <td class="admin-tbl-data-row-2">
                        <input TabIndex="4" class="txt" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." id="Email" name="Email" onblur="checkemail(this.value, & #39; doctorloadingid & #39; , & #39; doctormessageid & #39; );" onkeypress="return ValidateEmail(event)" type="text" value="" />
                        <label>
                            <img id="doctorloadingid" src="images/loading.gif" alt="loading" style="display: none; height: 20px; width: 20px" />
                        </label>
                        <br />
                        <span id="doctormessageid" style="color: #e62929; font-size: 12px;"></span>
                    </td>
                </tr>
                <tr style="height: 10px;">
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td class="admin-tbl-data-row-1">Contact No.<span class="required">*</span></td>
                    <td class="admin-tbl-data-row-2">+ <select TabIndex="5" class="drpPhone" data-val="true" data-val-number="The field Phone Code must be a number." data-val-required="The Phone Code field is required." id="PhoneCode" name="PhoneCode"><option value="">91</option>
                            <option value="998">998</option>
                            <option value="996">996</option>
                            <option value="995">995</option>
                            <option value="994">994</option>
                            <option value="992">992</option>
                            <option value="98">98</option>
                            <option value="977">977</option>
                            <option value="976">976</option>
                            <option value="975">975</option>
                            <option value="974">974</option>
                            <option value="973">973</option>
                            <option value="972">972</option>
                            <option value="971">971</option>
                            <option value="970">970</option>
                            <option value="968">968</option>
                            <option value="967">967</option>
                            <option value="966">966</option>
                            <option value="965">965</option>
                            <option value="964">964</option>
                            <option value="963">963</option>
                            <option value="962">962</option>
                            <option value="961">961</option>
                            <option value="960">960</option>
                            <option value="95">95</option>
                            <option value="94">94</option>
                            <option value="93">93</option>
                            <option value="92">92</option>
                            <option selected="selected" value="91">91</option>
                            <option value="90">90</option>
                            <option value="886">886</option>
                            <option value="880">880</option>
                            <option value="86">86</option>
                            <option value="856">856</option>
                            <option value="855">855</option>
                            <option value="853">853</option>
                            <option value="852">852</option>
                            <option value="850">850</option>
                            <option value="84">84</option>
                            <option value="82">82</option>
                            <option value="81">81</option>
                            <option value="7370">7370</option>
                            <option value="70">70</option>
                            <option value="7">7</option>
                            <option value="692">692</option>
                            <option value="691">691</option>
                            <option value="690">690</option>
                            <option value="689">689</option>
                            <option value="688">688</option>
                            <option value="687">687</option>
                            <option value="686">686</option>
                            <option value="684">684</option>
                            <option value="683">683</option>
                            <option value="682">682</option>
                            <option value="681">681</option>
                            <option value="680">680</option>
                            <option value="679">679</option>
                            <option value="678">678</option>
                            <option value="677">677</option>
                            <option value="676">676</option>
                            <option value="675">675</option>
                            <option value="674">674</option>
                            <option value="673">673</option>
                            <option value="672">672</option>
                            <option value="670">670</option>
                            <option value="66">66</option>
                            <option value="65">65</option>
                            <option value="64">64</option>
                            <option value="63">63</option>
                            <option value="62">62</option>
                            <option value="61">61</option>
                            <option value="60">60</option>
                            <option value="599">599</option>
                            <option value="598">598</option>
                            <option value="597">597</option>
                            <option value="596">596</option>
                            <option value="595">595</option>
                            <option value="594">594</option>
                            <option value="593">593</option>
                            <option value="592">592</option>
                            <option value="591">591</option>
                            <option value="590">590</option>
                            <option value="58">58</option>
                            <option value="57">57</option>
                            <option value="56">56</option>
                            <option value="55">55</option>
                            <option value="54">54</option>
                            <option value="53">53</option>
                            <option value="52">52</option>
                            <option value="51">51</option>
                            <option value="509">509</option>
                            <option value="508">508</option>
                            <option value="507">507</option>
                            <option value="506">506</option>
                            <option value="505">505</option>
                            <option value="504">504</option>
                            <option value="503">503</option>
                            <option value="502">502</option>
                            <option value="501">501</option>
                            <option value="500">500</option>
                            <option value="49">49</option>
                            <option value="48">48</option>
                            <option value="47">47</option>
                            <option value="46">46</option>
                            <option value="45">45</option>
                            <option value="44">44</option>
                            <option value="43">43</option>
                            <option value="423">423</option>
                            <option value="421">421</option>
                            <option value="420">420</option>
                            <option value="41">41</option>
                            <option value="40">40</option>
                            <option value="39">39</option>
                            <option value="389">389</option>
                            <option value="387">387</option>
                            <option value="386">386</option>
                            <option value="385">385</option>
                            <option value="381">381</option>
                            <option value="380">380</option>
                            <option value="378">378</option>
                            <option value="377">377</option>
                            <option value="376">376</option>
                            <option value="375">375</option>
                            <option value="374">374</option>
                            <option value="373">373</option>
                            <option value="372">372</option>
                            <option value="371">371</option>
                            <option value="370">370</option>
                            <option value="36">36</option>
                            <option value="359">359</option>
                            <option value="358">358</option>
                            <option value="357">357</option>
                            <option value="356">356</option>
                            <option value="355">355</option>
                            <option value="354">354</option>
                            <option value="353">353</option>
                            <option value="352">352</option>
                            <option value="351">351</option>
                            <option value="350">350</option>
                            <option value="34">34</option>
                            <option value="33">33</option>
                            <option value="32">32</option>
                            <option value="31">31</option>
                            <option value="30">30</option>
                            <option value="299">299</option>
                            <option value="298">298</option>
                            <option value="297">297</option>
                            <option value="291">291</option>
                            <option value="290">290</option>
                            <option value="27">27</option>
                            <option value="269">269</option>
                            <option value="268">268</option>
                            <option value="267">267</option>
                            <option value="266">266</option>
                            <option value="265">265</option>
                            <option value="264">264</option>
                            <option value="263">263</option>
                            <option value="262">262</option>
                            <option value="261">261</option>
                            <option value="260">260</option>
                            <option value="258">258</option>
                            <option value="257">257</option>
                            <option value="256">256</option>
                            <option value="255">255</option>
                            <option value="254">254</option>
                            <option value="253">253</option>
                            <option value="252">252</option>
                            <option value="251">251</option>
                            <option value="250">250</option>
                            <option value="249">249</option>
                            <option value="248">248</option>
                            <option value="246">246</option>
                            <option value="245">245</option>
                            <option value="244">244</option>
                            <option value="243">243</option>
                            <option value="242">242</option>
                            <option value="241">241</option>
                            <option value="240">240</option>
                            <option value="239">239</option>
                            <option value="238">238</option>
                            <option value="237">237</option>
                            <option value="236">236</option>
                            <option value="235">235</option>
                            <option value="234">234</option>
                            <option value="233">233</option>
                            <option value="232">232</option>
                            <option value="231">231</option>
                            <option value="230">230</option>
                            <option value="229">229</option>
                            <option value="228">228</option>
                            <option value="227">227</option>
                            <option value="226">226</option>
                            <option value="225">225</option>
                            <option value="224">224</option>
                            <option value="223">223</option>
                            <option value="222">222</option>
                            <option value="221">221</option>
                            <option value="220">220</option>
                            <option value="218">218</option>
                            <option value="216">216</option>
                            <option value="213">213</option>
                            <option value="212">212</option>
                            <option value="20">20</option>
                            <option value="1876">1876</option>
                            <option value="1869">1869</option>
                            <option value="1868">1868</option>
                            <option value="1809">1809</option>
                            <option value="1787">1787</option>
                            <option value="1784">1784</option>
                            <option value="1767">1767</option>
                            <option value="1758">1758</option>
                            <option value="1684">1684</option>
                            <option value="1671">1671</option>
                            <option value="1670">1670</option>
                            <option value="1664">1664</option>
                            <option value="1649">1649</option>
                            <option value="1473">1473</option>
                            <option value="1441">1441</option>
                            <option value="1345">1345</option>
                            <option value="1340">1340</option>
                            <option value="1284">1284</option>
                            <option value="1268">1268</option>
                            <option value="1264">1264</option>
                            <option value="1246">1246</option>
                            <option value="1242">1242</option>
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                        <input MaxLength="10" TabIndex="6" class="txtPhone" data-val="true" data-val-number="The field Contact No. must be a number." data-val-required="The Contact No. field is required." id="Mobile" name="Mobile" onkeypress="return isNumberKey(event)" type="text" value="" />
                    </td>
                    <td class="admin-tbl-data-row-1">Address</td>
                    <td class="admin-tbl-data-row-2"><textarea Rows="2" TabIndex="7" class="txtarea" cols="20" id="Address" name="Address" onkeypress="return chatAndComment(event)" rows="2">
                        </textarea></td>
                </tr>
                <tr style="height: 10px;">
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td class="admin-tbl-data-row-1">User ID<span class="required">*</span></td>
                    <td class="admin-tbl-data-row-2"><input TabIndex="8" class="txt" data-val="true" data-val-length="Your password must be min. 8 characters, should contain alphabet and atleast one special character and one number" data-val-length-max="50" data-val-length-min="5" id="Password" name="Password" type="text" /></td>
                    <td class="admin-tbl-data-row-1">Password<span class="required">*</span></td>
                    <td class="admin-tbl-data-row-2"><input TabIndex="9" class="txt" data-val="true" data-val-equalto="&#39;ConfirmPassword&#39; and &#39;Password&#39; do not match." data-val-equalto-other="*.Password" id="ConfirmPassword" name="ConfirmPassword" type="password" /></td>
                </tr>
                <tr style="height: 10px;">
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td class="admin-tbl-data-row-1">Secret Question<span class="required">*</span></td>
                    <td class="admin-tbl-data-row-2">
                        <select TabIndex="10" class="drp" data-val="true" data-val-required="The Secret Question field is required." id="SecQuestion" name="SecretQuestion"><option value="">--Select Secret Question--</option>
                            <option value="Name of your Favourite Book">Name of your Favourite Book</option>
                            <option value="Name of your Best Friend">Name of your Best Friend</option>
                            <option value="Name of your Favourite Car">Name of your Favourite Car</option>
                            <option value="Name of your Favourite Teacher">Name of your Favourite Teacher</option>
                            <option value="Name of your First Pet">Name of your First Pet</option>
                            <option value="Name of your Favourite Film">Name of your Favourite Film</option>
                        </select>
                    </td>
                    <td class="admin-tbl-data-row-1">Secret Answer<span class="required">*</span></td>
                    <td class="admin-tbl-data-row-2"><input TabIndex="11" class="txt" data-val="true" data-val-required="The Secret Answer field is required." id="SecAnswer" name="SecretAnswer" onkeypress="return chatAndComment(event)" type="text" value="" /></td>
                </tr>
                <tr style="height: 10px;">
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td class="admin-tbl-data-row-1">Pin Code</td>
                    <td class="admin-tbl-data-row-2"><input TabIndex="12" class="txt" id="PostalCode" name="PostalCode" onkeypress="return ValidateAppoinmentCode(event)" type="text" value="" /></td>
                    <td class="admin-tbl-data-row-1">City</td>
                    <td class="admin-tbl-data-row-2"><input TabIndex="13" class="txt" id="City" name="City" onkeypress="return LettersWithSpaceOnly(event)" type="text" value="" /></td>
                </tr>
                <tr style="height: 10px;">
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td class="admin-tbl-data-row-1">State</td>
                    <td class="admin-tbl-data-row-2"><input TabIndex="14" class="txt" id="State" name="State" onkeypress="return LettersWithSpaceOnly(event)" type="text" value="" /></td>
                    <td class="admin-tbl-data-row-1">Country<span class="required">*</span></td>
                    <td class="admin-tbl-data-row-2">
                        <select TabIndex="15" class="drp" id="Country" name="Country" onchange="GetTimeZone(this)"><option value="">--Select Country--</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote D&#39;Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and Mcdonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="CG">Congo</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People&#39;s Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People&#39;s Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="CS">Serbia and Montenegro</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.s.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                        <br />
                        <div id="timezonelist" style="display: none; margin-top: 5px;"></div>
                    </td>
                </tr>
                <tr style="height: 10px;">
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td class="admin-tbl-data-row-1" style="vertical-align: top;">
                        <br />
                        Brief Introduction<span class="required">*</span>
                    </td>
                    <td class="admin-tbl-data-row-2" colspan="3">
                        <textarea Rows="2" TabIndex="16" class="txtarea" cols="20" id="Introduction" name="Introduction" onkeypress="return chatAndComment(event)" rows="2" style="height:70px;width:580px;">
                        </textarea>
                    </td>
                    
                </tr>
                <tr>
                     <td class="admin-tbl-data-row-1" style="vertical-align: top">Patient Image</td>
                <td class="admin-tbl-data-row-2" style="vertical-align: top">
                    <input type="file" id="doctorImageUpload" tabindex="27" name="doctorImageUpload" class="txt" />
                </td>
                </tr>
            </table>
            <br />

            <div class="Clr"></div>




            <div class="five">

                <table width="100%" border="0" cellspacing="0" cellpadding="10">
                    <tr>
                        <td width="8%" valign="top" style="padding-top: 5px;">
                            <input type="checkbox" id="terms" tabindex="38" />
                        </td>
                        <td width="92%">
                            <strong style="font-size: 16px; font-weight: bold">I Accept<a style="text-decoration:underline;" href="Home/Terms-Conditions/MOU.html" target="_blank"> Terms &amp; Conditions</a><span class="required">*</span></strong><br />
                            <br />
                      
                        </td>
                    </tr>
                </table>
            
                <div class="span6">
                    <input data-val="true" data-val-number="The field Id must be a number." data-val-required="The Id field is required." id="Id" name="Id" type="hidden" value="0" />
                    <input type="submit" formaction="registration_patient_action.php" method="POST" id='submitmain' class="button-big" style="cursor: pointer" value="Submit" tabindex="40" />
                </div>

            </div>
            <br />
            <br />
            <br />
        </div></form><div id="footer"><div class="layout"><div class="footerLinks">
            </div>
            <div class="socialMedia">
                <p>Follow us :</p>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/iclinichealthcare" target="_blank" hreflang="en-us" rel="nofollow">
                            <img src="images/facebook.jpg" alt="iclinic facebook" />
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/icliniccare" target="_blank" hreflang="en-us" rel="nofollow">
                            <img src="images/twitter.jpg" alt="iclinic twitter" />
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+iclinichpl/posts" target="_blank" hreflang="en-us">
                            <img src="images/gplus.jpg" alt="iclinic gplus" />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottomLinks">
                <div class="footLinks"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="copyright">
        <div class="layout">

            <p style="text-align: center; font-family: Tahoma;">
                &copy; 2013- 2016 iClinic HealthCare, All Rights Reserved
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
                               onblur="if (this.value == '')
                                           this.value = 'Email Id';
                                       checkemail(this.value, 'loadingid', 'messageid');
                               " onfocus=" if (this.value == 'Email Id')
                                                               this.value = '';
                               " onkeypress=" return ValidateEmail(event)" />
                        <label>
                            <img id="loadingid" src="images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                        </label>
                    </div>
                    <br />

                    <span>Enter your password</span>
                    <input name="Password" type="password" value="pwd" class="input" id="password"
                           onblur=" if (this.value == '')
                                       this.value = 'pwd';
                           " onfocus=" if (this.value == 'pwd')
                                                           this.value = '';" />
                    <br />

                    <input id="appointmentcode" name="AppointmentCode" type="text" value="Appointment Code" class="input" disabled="disabled"
                           onkeypress=" return ValidateAppointmentCode(event)" onblur=" if (this.value == '')
                                       this.value = 'Appointment Code';" onfocus=" if (this.value == 'Appointment Code')
                                                   this.value = '';
                           " onkeypress=" return ValidateAppoinmentCode(event)" />
                    <input type="submit" class="login-button" value="Sign in" onclick="LoginbtnClick()" />

                    <div class="login-radio" style="text-align: center; margin-top: 5px">
                        <a href="Login/ForgotPassword.html" hreflang="en-us" style="text-decoration: none;">Forgotten your password?</a>
                    </div>
                    <p>For office use only</p>
                    <p>

                        <input id="locationconsult" name="Grouplogin" type="checkbox" value="" onclick="checkchangecheckbox();" />
                        <span style="width: 800px;">Conference Consultation
                            <input id="locationcode" name="LocationCode" type="text" value="Location Code" class="input" disabled="disabled"
                                   onblur="if (this.value == '')
                                               this.value = 'Location Code';
                                   " onfocus=" if (this.value == 'Location Code')
                                                                   this.value = '';" />
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
                        <input type="text" name="Name" id="Coupon_Name" style="margin-left: 33px;" onkeypress="return LettersWithSpaceOnly(event)" class="c_shadowfield" value="Enter Your Name" onblur="if (this.value == '')
                                    this.value = 'Enter Your Name';" onfocus="if (this.value == 'Enter Your Name')
                                                this.value = '';" />
                    </div>
                    <div class="c_input">
                        Mobile No  :  
                        <input type="text" name="  Mobile No" id="Coupon_Mobile" class="c_shadowfield" style="margin-left: 27px;" value="Enter Your  Mobile No" maxlength="15" onkeypress="return isNumberKey(event)" onblur="if (this.value == '')
                                    this.value = 'Enter Your  Mobile No';" onfocus="if (this.value == 'Enter Your  Mobile No')
                                                this.value = '';" />
                    </div>
                    <div class="c_input">
                        Email Id  :   &nbsp;&nbsp;<input type="text" name=" Email Id" id="Coupon_Email" maxlength="255" onkeypress="return ValidateEmail(event)" class="c_shadowfield" value="Enter Your Email Id" onblur="if (this.value == '')
                                    this.value = 'Enter Your Email Id';" onfocus="if (this.value == 'Enter Your Email Id')
                                                this.value = '';" />
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
                                            } else if (data.status == "0") {
                                                $.msgBox({
                                                    title: "iClinic",
                                                    content: "Email Id already exist, please try with another Email Id",
                                                    type: "info"
                                                });
                                                $('#SaveCouponCode').attr("onclick", "GenerateFreeCoupons(0);");
                                            } else if (data.status == "1") {
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


<!-- Mirrored from www.icliniccare.com/DoctorRegistration by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2016 12:36:10 GMT -->
</html>
