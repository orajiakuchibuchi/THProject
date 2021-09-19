<html>

<head>
   
    <!--[if !mso]--><!-- -->
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel="stylesheet">
<!--<![endif]-->

    <style type="text/css">
        body {
            width: 100%;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            mso-margin-top-alt: 0px;
            mso-margin-bottom-alt: 0px;
            mso-padding-alt: 0px 0px 0px 0px;
        }

        p,
        h1,
        h2,
        h3,
        h4 {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
        }

        span.preheader {
            display: none;
            font-size: 1px;
        }

        html {
            width: 100%;
        }

        table {
            font-size: 14px;
            border: 0;
        }
        /* ----------- responsivity ----------- */

        @media only screen and (max-width: 640px) {
            /*------ top header ------ */
            .main-header {
                font-size: 20px !important;
            }
            .main-section-header {
                font-size: 28px !important;
            }
            .show {
                display: block !important;
            }
            .hide {
                display: none !important;
            }
            .align-center {
                text-align: center !important;
            }
            .no-bg {
                background: none !important;
            }
            /*----- main image -------*/
            .main-image img {
                width: 440px !important;
                height: auto !important;
            }
            /* ====== divider ====== */
            .divider img {
                width: 440px !important;
            }
            /*-------- container --------*/
            .container590 {
                width: 440px !important;
            }
            .container580 {
                width: 400px !important;
            }
            .main-button {
                width: 220px !important;
            }
            /*-------- secions ----------*/
            .section-img img {
                width: 320px !important;
                height: auto !important;
            }
            .team-img img {
                width: 100% !important;
                height: auto !important;
            }
        }

        @media only screen and (max-width: 479px) {
            /*------ top header ------ */
            .main-header {
                font-size: 18px !important;
            }
            .main-section-header {
                font-size: 26px !important;
            }
            /* ====== divider ====== */
            .divider img {
                width: 280px !important;
            }
            /*-------- container --------*/
            .container590 {
                width: 280px !important;
            }
            .container590 {
                width: 280px !important;
            }
            .container580 {
                width: 260px !important;
            }
            /*-------- secions ----------*/
            .section-img img {
                width: 280px !important;
                height: auto !important;
            }
        }
    </style>
</head>


<body class="respond" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <!-- header -->
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff">

        <tr>
            <td align="center">
                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                    <tr>
                        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="center">

                            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                                <tr>
                                    <td align="center" height="70" style="height:70px;">
                                        <a href="" style="display: block; border-style: none !important; border: 0 !important;"><img width="100" border="0" style="display: block; width: 200px;" src="https://vicomma.com/public/sayUncle/images/logo-text.png" alt="" /></a>
                                        <br>
                                        <a href="" style="display: block; border-style: none !important; border: 0 !important;"><img width="100" border="0" style="display: block; width: 200px;" src="https://vicomma.com/public/sayUncle/images/sayuncle-logo.png" alt="" /></a>
                                
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- end header -->

    <!-- big image section -->
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="bg_color">

        <tr>
            <td align="center">
                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
                    <tr>
                        <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="center">
                            <table border="0" width="40" align="center" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
                                <tr>
                                    <td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="left">
                            <table border="0" width="590" align="center" cellpadding="0" cellspacing="0" class="container590">
                                <tr>
                                    <td align="left" style="color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;">
                                        <!-- section text ======-->

                                        <p style="line-height: 24px;margin-bottom:15px; color:black;">
                                           Hello {{ ucwords($name) }}.
                                        </p>
                                        <p style="line-height: 24px; margin-bottom:10px; color:black;">
                                            You have successfully uploaded your contestant video. Check your email now to see how you can score more points to boost your chance
                                        </p>
                                        <p style="line-height: 24px; margin-bottom:40px; color:black;">
                                            Please use the link below to see <b>Upload Videos</b>.
                                            <br><br>
                                             {{$url}}
                                        </p>
                                        <br>
                                        <p style="line-height: 24px; margin-bottom:10px; color:black;">
                                            <b> Do you REALLY want to be a Say Uncle relative? Well here’s another way to boost your chances…</b>
                                        </p>
                                        <p style="line-height: 24px; margin-bottom:40px; color:black;">
                                            <b>2. </b> Below is your personal Say Uncle Referral Link to share with your friends and family. This link will let friends and family vote for you and help you get more points to get closer to becoming one of the relatives! So, share with everyone you know.
                                             <br><br>
                                             {{$referal_url}}
                                        </p>
                                        <p style="line-height: 24px; margin-bottom:10px; text-align:center">
                                        REMEMBER TO KEEP ALL OF THIS INFORMATION FOR YOUR RECORDS.
                                        </p>
                                        
                                        <p style="line-height: 24px; margin-bottom:20px; color:black; text-align:center">
                                            Follow Us On:
                                        </p>
										
										 <p style="line-height: 24px; margin-bottom:20px;">
										 
										  <div style="text-align:center;">
                                            <a href="https://twitter.com/watchsayuncle" target="_blank" >
                                                <img src="http://vicomma.com/public/img/twitter.png" style="max-height: 32px;" alt="Twitter">
                                            </a>
											<!--<a href="https://www.facebook.com/officialvicomma" target="_blank">-->
											<!--  <img src="http://vicomma.com/public/img/facebook-new.png" style="max-height: 32px;" alt="Facebook">-->
											<!--</a>-->
											<a href="https://www.instagram.com/watchsayuncle" target="_blank">
											  <img src="http://vicomma.com/public/img/instagram-new.png" style="max-height: 32px;" alt="Instagram">
											</a>
											<!--<a href="https://www.tiktok.com/@officialvicomma?lang=en" target="_blank">-->
											<!--  <img src="http://vicomma.com/public/img/tiktok.png" style="max-height: 32px;" alt="TikTok">-->
											<!--</a>-->
											
										  </div>
										  </p>
										  <br><br>
									
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="40" style="font-size: 40px; line-height: 40px;">&nbsp;</td>
        </tr>
    </table>
    <!-- end section -->

   
</body>
</html>