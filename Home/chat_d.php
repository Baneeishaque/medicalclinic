<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html prefix="og:http://ogp.me/ns#" itemscope itemtype="http://schema.org/Product" xmlns="http://www.w3.org/1999/xhtml">


    <!-- Mirrored from www.icliniccare.com/patient-forum by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2016 12:32:12 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta name="viewport" content="width=device-width" />
        <link href="../favicon.ico" rel="shortcut icon" hreflang="en-us" type="image/x-icon" />
        <meta name="google-site-verification" content="HNZ4ajCc_qbQ9uU2xqm3bNeNnz52GcgZT2k2EDgL16E" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8" />
        <meta name="msvalidate.01" content="0115DEE5670E9B0C5999DD7007854BBB" />

        <title>Patient Forum | Articles | medical clinic Healthcare</title>
        <link href="../Content/cssbc8c.css?v=InJltDZ8bHen1D1USNEWkUld_x2v8aCeoa3XA2OLqN81" rel="stylesheet"/>

        <script type="text/javascript">

            var t = setInterval(function () {
                //get_chat_msg()
            }, 5000);


            //
            // General Ajax Call
            //

            var oxmlHttp;
            var oxmlHttpSend;

            function get_chat_msg()
            {

                if (typeof XMLHttpRequest != "undefined")
                {
                    oxmlHttp = new XMLHttpRequest();
                } else if (window.ActiveXObject)
                {
                    oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
                }
                if (oxmlHttp == null)
                {
                    alert("Browser does not support XML Http Request");
                    return;

                }
                var url = "chat_recv_ajax.php";
                var strname = "noname";
                if (document.getElementById("txtname") != null)
                {

                    strname = document.getElementById("txtname").value.substr(0, document.getElementById("txtname").value.indexOf(" "));

                    document.getElementById("txtname").readOnly = true;
                }
                url = url + "?re=" + strname;
                //window.location=url;
                oxmlHttp.onreadystatechange = get_chat_msg_result;
                oxmlHttp.open("GET", "chat_recv_ajax.php", true);
                oxmlHttp.send(null);
            }

            function get_chat_msg_result()
            {
                if (oxmlHttp.readyState == 4 || oxmlHttp.readyState == "complete")
                {
                    if (document.getElementById("DIV_CHAT") != null)
                    {
                        document.getElementById("DIV_CHAT").innerHTML = oxmlHttp.responseText;
                        oxmlHttp = null;
                    }
                    var scrollDiv = document.getElementById("DIV_CHAT");
                    scrollDiv.scrollTop = scrollDiv.scrollHeight;
                }
            }


            function set_chat_msg()
            {

                if (typeof XMLHttpRequest != "undefined")
                {
                    oxmlHttpSend = new XMLHttpRequest();
                } else if (window.ActiveXObject)
                {
                    oxmlHttpSend = new ActiveXObject("Microsoft.XMLHttp");
                }
                if (oxmlHttpSend == null)
                {
                    alert("Browser does not support XML Http Request");
                    return;
                }

                var url = "chat_send_ajax.php";
                var strname = "noname";
                var strmsg = "";
                if (document.getElementById("txtname") != null)
                {
                    strname = document.getElementById("txtname").value.substr(0, document.getElementById("txtname").value.indexOf(" "));
                    document.getElementById("txtname").readOnly = true;
                }
                if (document.getElementById("txtmsg") != null)
                {
                    strmsg = document.getElementById("txtmsg").value;
                    document.getElementById("txtmsg").value = "";
                }

                url += "?receiver=" + strname + "&msg=" + strmsg;

                oxmlHttpSend.open("GET", url, true);
                oxmlHttpSend.send(null);
            }

            function reset_chat_msg()
            {


                document.getElementById("txtmsg").value = "";
            }



        </script>

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


        <meta name="description" content="iClinic Healthcare provides an opportunity to patients/customers that to write their feedback through a website. Seek out illnesses by body part, read summarized details about illnesses, educate oneself about the illness. We have 1000 of illnesses detailed in our database along with Allopathic advice. Homeopathic and Ayurvedic advice is also included. See links to relevant videos.">
        <meta name="keywords" content=" iClinic Healthcare, patient forum, feedback, articles, Homeopathic and Ayurvedic advice, illnesses by body part ,avatar, interactive, human anatomy, check symptoms, Allopathic advice">
        <meta name="robot" content="index,follow">
        <meta name="revisit-after" content="7">

        <meta property="og:title" content="Patient Forum: Discuss Your Health Problem With Doctors"/>
        <meta property="og:description"  content="iClinic Healthcare provides an opportunity to patients/customers that to write their feedback through a website. Seek out illnesses by body part, read summarized details about illnesses, educate oneself about the illness. We have 1000&amp;#39;s of illnesses detailed in our database along with Allopathic advice. Homeopathic and Ayurvedic advice is also included. See links to relevant videos."/>
        <meta property="og:site_name" content="iClinic Care" />
        <meta property="og:type" content="Health Care" />
        <meta property="og:url" content="https://www.icliniccare.com/patient-forum"/>
        <link rel="alternate" href="patient-forum.html" hreflang=" en-us" />




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
        <script src="../Scripts/jquery.easing.js" type="text/javascript"></script>
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
        <script src="../Scripts/general.js" type="text/javascript"></script>
        <link href="../Content/loginpopup.css" rel="stylesheet" />
    </head>
    <body>
        <div id="independancewrapper">

        </div>

        <div id="stickybanner_right" class="stickybanner"><a target="_blank" href="packages/obesity-comprehensive-profile-tests660a.html?utm_source=sticky&amp;utm_medium=iClinic&amp;utm_campaign=sticky%20banner">banner right</a></div>


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
                                
                                <li onmouseover="tooltipsfocus('2')" onmouseout="tooltipsblur('2')">
                                    <a href="messages.php" hreflang="en-us"  style="text-align:center;">View Messages</a>
                                    <div id="tooltip2" class="tool-tip">
                                        <img src="../images/tool-tip-arrow.png" width="20" height="20" alt="Symptom Checker">
                                        Analyse your symptoms, diagnose your ailments and get a detailed report.                                    </div>
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
                                <li onmouseover="tooltipsfocus('5')" onmouseout="tooltipsblur('5')">
                                    <a href="../index.php" hreflang="en-us">Log Out</a>
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

            <a href="../index.html" title="Home">Home</a>
            &gt; 

            Chat
        </div>






        <script src="Scripts/jquery.msgBox.js" type="text/javascript"></script>
    <link href="Content/msgBoxLight.css" rel="stylesheet" type="text/css" />
    <!-- Community Layout -->

    <body>
        <!-- Community Search -->
        <div class="community-header">
            <div class="community-header-search">

                <div class="community-right-panels" style="background: url(images/medicn-mark.gif) no-repeat top right;">
                    <h1>Contacted Patients</h1>


                    <div id="communityDoctorsWhoCare" class="community-right-panels-inside">
                    </div>
                    <div class="clear2"></div>


                    <div class="community-right-panels-inside">
                        <?php
                        $uid = $_SESSION["user_id"];
                        //echo $uid;
                        require_once('connection.php');
                        $sql = "SELECT distinct sender FROM chat where receiver='$uid' ;";
                        //echo $sql;
                         $result = $conn->query($sql) or die('Query1 failed: ' . mysqli_error());
                          while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                              //echo $line["sender"];
                          echo '<a href="chat_update.php?id=' . $line["sender"] . '">
                          <input type="button" value="' . $line["sender"] . '" />

                          </a><br/><br/>';
                          } 
                        ?>
                    </div>
                    <div class="clear2"></div>


                    <div class="clear2"></div>
                </div>

            </div>
        </div>
        <!-- Community Search -->

        <div id="communityBody" class="community-body">
            <!-- Community Inner Pages -->
            <div class="community-left">


                <meta itemprop="name" content="iClinic Healthcare" />
                <meta itemprop="description" content="iClinic Healthcare provides an opportunity to patients/customers that to write their feedback through a website. Seek out illnesses by body part, read summarized details about illnesses, educate oneself about the illness." />
                <meta itemprop="image" content="../images/logo.jpg" />


                <style type="text/css">
                    .RedBtnB {
                        background: #2673d2;
                        line-height: 31px;
                        border: 1px solid #2673d2;
                        padding: 5px 5px 6px 5px;
                        float: right;
                        font: normal 16px tahoma, Arial;
                        color: #fff;
                        cursor: pointer;
                        text-decoration: none;
                    }

                    .RedBtnB:hover {
                        background: #e93d4d;
                        line-height: 31px;
                        border: 1px solid #2673d2;
                        padding: 5px 5px 6px 5px;
                        float: right;
                        font: normal 16px tahoma, Arial;
                        color: #fff;
                        cursor: pointer;
                        text-decoration: none;
                    }
                </style>

                <style type="text/css">
                    .jcarousel-item {
                        height: 115px !important;
                        width: 80px !important;
                        text-align: center;
                        padding: 0 10px !important;
                    }

                    .jcarousel-container {
                        height: 115px !important;
                    }

                    .jcarousel-clip-horizontal {
                        height: 115px !important;
                    }
                </style>


                <script src="../Scripts/XSSValidate.js"></script>
                <link href="../Content/popuplogin_form.css" rel="stylesheet" />
                <script type='text/javascript'>
                                    function postanewTopicLogin() {
                                        var overlay = $('<div id="overlay"></div>');
                                        overlay.show();
                                        overlay.appendTo(document.body);
                                        $('.popup').show();
                                        $('.close').click(function () {
                                            $('.popup').hide();
                                            overlay.appendTo(document.body).remove();
                                            return false;
                                        });

                                        $('.x').click(function () {
                                            $('.popup').hide();
                                            overlay.appendTo(document.body).remove();
                                            return false;
                                        });
                                    }
                                    ;
                </script>
                <script type="text/javascript">
                    var userid = "";
                    window.onload = function () {
                        $('#forumpassword').keydown(function (event) {
                            if (event.keyCode == 13) {
                                $('.postlogin').trigger('click');
                            }
                        });

                        if ('' != "" && '' != null) {
                            communityGetcurrentuser('');
                        }

                        //Get Top 5 Topics
                        GetLatestTopic();

                        //Get Doctors, Patients, Topic Titles
                        communityGetPatientsWhoCareIndex();
                        communityGetDoctorsWhoCare();
                        communityGetNewTopics();
                    };
                    $(document).ready(function () {
                        $('#divPatientsWhoCareLayout').hide();
                    });
                </script>

                <!-- Community Index Page -->


                <div style="margin:0 auto;width:630px;" >
                    <div class="banner_btm">
                        <div class="care_share">
                            <div class="care_share_top">
                                <div class="care_share_top_rht">

                                    <!--      <ul class="messages" id="DIV_CHAT">
                                              <li class="user1">
      
                                                  <div class="info">
                                                      <span class="arrow"></span>
                                                      <div class="detail">
                                                          <span class="sender">
                                                              <strong>Username</strong> says:
                                                          </span>
                                                          <span class="time">15 minutes ago</span>
                                                      </div>
                                                      <div class="message">
                                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li class="user2">
      
                                                  <div class="info">
                                                      <span class="arrow"></span>
                                                      <div class="detail">
                                                          <span class="sender">
                                                              <strong>Username</strong> says:
                                                          </span>
                                                          <span class="time">15 minutes ago</span>
                                                      </div>
                                                      <div class="message">
                                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum..</p>
      
                                                      </div>
                                                  </div>
                                              </li>
                                          </ul>  -->
                                    Please Select A Room
                                </div>
                            </div>


                            <!-- <div class="clear"></div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                                    
                                         
 
 
                                             
                                                 <input id="txtname" style="width: 150px" type="text" name="name" maxlength="15" value="alijafar21.ja@gmai.com : Ali" disabled/>
                           
                                             <input id="txtmsg" style="width: 350px" type="text" name="msg" />
 
                                             <input type="button" class="btn btn-success" value="Send" onclick="set_chat_msg()"/>
                            -->







                            <div class='popup'>
                                <div class='cnt223'>
                                    <img src='../images/lightbox-close.png' alt='quit' class='x' id='x' />
                                    <div class="diet_popup">
                                        <span>Login to post a new topic </span>
                                        <div style="margin-top: 10px;">
                                            <label id="messageid" style="color: #e62929; font-size: 12px;"></label>
                                        </div>
                                        <div class="input" style="margin-top: 20px;">
                                            Email Id &nbsp;&nbsp;&nbsp;<input type="text" name="emailId" id="emailId" placeholder="" class="shadowfield" value="Enter Your Email Id" onblur="if (this.value == '')
                                                        this.value = 'Enter Your Email Id';
                                                    checkemail(this.value, 'loadingid', 'messageid');" onfocus="if (this.value == 'Enter Your Email Id')
                                                                this.value = '';">
                                            <label>
                                                <img id="loadingid" src="../images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                                            </label>
                                        </div>
                                        <div class="input">
                                            Password &nbsp;<input type="password" name="forumpassword" id="forumpassword" placeholder="" class="shadowfield" value="Enter Your Password" onblur="if (this.value == '')
                                                        this.value = 'Enter Your Password';" onkeypress="return chatAndComment(event)" onfocus="if (this.value == 'Enter Your Password')
                                                                    this.value = '';
                                                                  ">
                                        </div>
                                        <div class="input_forget">
                                            <a href="../Login/ForgotPassword.html" style="text-decoration: none;">Forgot password?</a>
                                            <input type="button" class="postlogin" style="width: 120px; height: 40px; padding: 5px; text-align: center; background-color: #005ACA; margin-left: 150px; color: white; font-size: 16px; font-weight: bold; margin-top: 10px;" value=" Login" onclick="PatientForumLogin()">
                                        </div>
                                        <div class="input_join">Not Registered?<a href="patient-forum/register-aliment-expert.html">  Join Now  </a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div>


                    </div>
                    <!-- Community Inner Pages -->

                    <!-- Community Right Panel -->
                    <div class="community-right">
                        <div id="diviClinicCareSupportLayout">

                            <br />
                        </div>
                        
                        <div id="divDoctorsWhoCareLayout">

                            <br />
                        </div>
                    </div>
                    <!-- Community Right Panel -->
                </div>
                <div class="clear"></div>
                </body>
                <!--Community Layout -->


                <link href="../Content/CommunityIndexStyle.css" rel="stylesheet" />
                <script src="../Scripts/CommunitySectionPagingScript.js"></script>






                <div id="boxes">
                    <!--Main Login Pop-up start-->
                    <div id="dialog" class="window" style="margin-top: -100px;">
                        <div class="login-popup" style="height: 500px;">
                            <h1>
                                <a href="JavaScript:void(0);" class="close" hreflang="en-us" style="margin-bottom: 275px">
                                    <img src="images/close-btn.png" width="29" height="29" alt="close" title="close" />
                                </a>
                                <img src="../images/user.png" width="16" height="15" />&nbsp;User Login
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
                                                       this.value = '';" onkeypress=" return ValidateEmail(event)" />
                                    <label>
                                        <img id="loadingid" src="../images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                                    </label>
                                </div>
                                <br />

                                <span>Enter your password</span>
                                <input name="Password" type="password" value="pwd" class="input" id="password"
                                       onblur=" if (this.value == '')
                                                   this.value = 'pwd';" onfocus=" if (this.value == 'pwd')
                                                               this.value = '';" />
                                <br />

                                <input id="appointmentcode" name="AppointmentCode" type="text" value="Appointment Code" class="input" disabled="disabled"
                                       onkeypress=" return ValidateAppointmentCode(event)" onblur=" if (this.value == '')
                                                   this.value = 'Appointment Code';
                                       " onfocus=" if (this.value == 'Appointment Code')
                                                   this.value = '';" onkeypress=" return ValidateAppoinmentCode(event)" />
                                <input type="submit" class="login-button" value="Sign in" onclick="LoginbtnClick()" />

                                <div class="login-radio" style="text-align: center; margin-top: 5px">
                                    <a href="../Login/ForgotPassword.html" hreflang="en-us" style="text-decoration: none;">Forgotten your password?</a>
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
                                        <img id="Cloadingid" src="../images/loading.gif" alt="loading" style="display: none; height: 15px; width: 15px" />
                                    </label>
                                </div>
                                <div class="c_input">
                                    <div class="c_term_condition">
                                        <input type="checkbox" id="condition_check" />
                                        I accept iClinic's 
                                        <a href="../Home/Terms-Conditions.html" target="_blank" hreflang="en-us">Terms and Conditions</a>
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


                <!-- Mirrored from www.icliniccare.com/patient-forum by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2016 12:32:18 GMT -->
                </html>
