<!DOCTYPE html>
<html lang="en">

<!-- Define Charset -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Responsive Meta Tag -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<title>Quote Template</title>

<!-- Responsive and Valid Styles -->

<style type="text/css">

    body{
        width: 100%;
        background-color: #F1F2F7;
        margin:0;
        padding:0;
        -webkit-font-smoothing: antialiased;
        font-family: arial;
    }

    html{
        width: 100%;
    }
    .nation{ color:#47c8db !important;font-size:30px;font-weight:bold;}
    /*.container-middle {background:#000;}*/

    table{
        font-size: 14px;
        border: 0;
    }

        /* ----------- responsive ----------- */
    @media only screen and (max-width: 640px){

        /*------ top header ------ */
        .header-bg{width: 440px !important; height: 10px !important;}
        .main-header{line-height: 28px !important;}
        .main-subheader{line-height: 28px !important;}

        .container{width: 440px !important;}
        .container-middle{width: 420px !important;}
        .mainContent{width: 400px !important;}

        .main-image{width: 400px !important; height: auto !important;}
        .banner{width: 400px !important; height: auto !important;}
        /*------ sections ---------*/
        .section-item{width: 400px !important;}
        .section-img{width: 400px !important; height: auto !important;}
        /*------- prefooter ------*/
        .prefooter-header{padding: 0 10px !important; line-height: 24px !important;}
        .prefooter-subheader{padding: 0 10px !important; line-height: 24px !important;}
        /*------- footer ------*/
        .top-bottom-bg{width: 420px !important; height: auto !important;}

    }

    @media only screen and (max-width: 479px){

        /*------ top header ------ */
        .header-bg{width: 280px !important; height: 10px !important;}
        .top-header-left{width: 260px !important; text-align: center !important;}
        .top-header-right{width: 260px !important;}
        .main-header{line-height: 28px !important; text-align: center !important;}
        .main-subheader{line-height: 28px !important; text-align: center !important;}

        /*------- header ----------*/
        .logo{width: 260px !important}
        .nav{width: 260px !important;}

        .container{width: 280px !important;}
        .container-middle{width: 260px !important;}
        .mainContent{width: 240px !important;}

        .main-image{width: 240px !important; height: auto !important;}
        .banner{width: 240px !important; height: auto !important;}
        /*------ sections ---------*/
        .section-item{width: 240px !important;}
        .section-img{width: 240px !important; height: auto !important;}
        /*------- prefooter ------*/
        .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
        .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
        /*------- footer ------*/
        .top-bottom-bg{width: 260px !important; height: auto !important;}

    }


</style>

<style type="text/css" charset="utf-8">

    /** reset styling **/

.firebugResetStyles {

    z-index: 2147483646 !important;

    top: 0 !important;

    left: 0 !important;

    display: block !important;

    border: 0 none !important;

    margin: 0 !important;

    padding: 0 !important;

    outline: 0 !important;

    min-width: 0 !important;

    max-width: none !important;

    min-height: 0 !important;

    max-height: none !important;

    position: fixed !important;

    transform: rotate(0deg) !important;

    transform-origin: 50% 50% !important;

    border-radius: 0 !important;

    box-shadow: none !important;

    background: transparent none !important;

    pointer-events: none !important;

    white-space: normal !important;

}



.firebugBlockBackgroundColor {

    background-color: transparent !important;

}



.firebugResetStyles:before, .firebugResetStyles:after {

    content: "" !important;

}

    /**actual styling to be modified by firebug theme**/

.firebugCanvas {

    display: none !important;

}



    /* ------------------------- */

.firebugLayoutBox {

    width: auto !important;

    position: static !important;

}



.firebugLayoutBoxOffset {

    opacity: 0.8 !important;

    position: fixed !important;

}



.firebugLayoutLine {

    opacity: 0.4 !important;

    background-color: #000000 !important;

}



.firebugLayoutLineLeft, .firebugLayoutLineRight {

    width: 1px !important;

    height: 100% !important;

}



.firebugLayoutLineTop, .firebugLayoutLineBottom {

    width: 100% !important;

    height: 1px !important;

}



.firebugLayoutLineTop {

    margin-top: -1px !important;

    border-top: 1px solid #999999 !important;

}



.firebugLayoutLineRight {

    border-right: 1px solid #999999 !important;

}



.firebugLayoutLineBottom {

    border-bottom: 1px solid #999999 !important;

}



.firebugLayoutLineLeft {

    margin-left: -1px !important;

    border-left: 1px solid #999999 !important;

}



    /* ----------------- */

.firebugLayoutBoxParent {

    border-top: 0 none !important;

    border-right: 1px dashed #E00 !important;

    border-bottom: 1px dashed #E00 !important;

    border-left: 0 none !important;

    position: fixed !important;

    width: auto !important;

}



.firebugRuler{

    position: absolute !important;

}



.firebugRulerH {

    top: -15px !important;

    left: 0 !important;

    width: 100% !important;

    height: 14px !important;

    border-top: 1px solid #BBBBBB !important;

    border-right: 1px dashed #BBBBBB !important;

    border-bottom: 1px solid #000000 !important;

}



.firebugRulerV {

    top: 0 !important;

    left: -15px !important;

    width: 14px !important;

    height: 100% !important;

    border-left: 1px solid #BBBBBB !important;

    border-right: 1px solid #000000 !important;

    border-bottom: 1px dashed #BBBBBB !important;

}



.overflowRulerX > .firebugRulerV {

    left: 0 !important;

}



.overflowRulerY > .firebugRulerH {

    top: 0 !important;

}



    /* --------------------------------- */

.fbProxyElement {

    position: fixed !important;

    pointer-events: auto !important;

}

</style>

</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td height="30"></td></tr>
<tr bgcolor="#F1F2F7">
<td align="center" bgcolor="#F1F2F7" valign="top" width="100%">

<!--  top header -->
<table class="container" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tbody>
    <tr bgcolor="7087A3"><td height="15"></td></tr>

    <tr bgcolor="7087A3">
        <td align="center">
            <table class="container-middle" align="center" border="0" cellpadding="0" cellspacing="0" width="560">
                <tbody><tr>
                    <td>
                        <table class="top-header-left" align="left" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center">
                                    <table class="date" border="0" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <!--<td>
                                                <img  style="display: block;" src="img/email-img/icon-cal.png" alt="icon 1" width="13">
                                            </td>-->
                                            <td>&nbsp;&nbsp;</td>
                                            <td style="color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                                                <singleline>
                                                    {!!date("F j, Y, g:i a")!!}
                                                </singleline>
                                            </td>
                                        </tr>

                                        </tbody></table>
                                </td>
                            </tr>
                            </tbody></table>

                        <table class="top-header-right" align="left" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr><td height="20" width="30"></td></tr>
                            </tbody></table>

                        <table class="top-header-right" align="right" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center">
                                    <table class="tel" align="center" border="0" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td>
 <span style="color:#fff">For questions call:<a href="tel:1-800-616-6516" value="+18006166516" style="color:#fff"target="_blank">1-800-616-6516</a></span>
                                            </td>
                                            <td>&nbsp;&nbsp;</td>
                                            <td style="color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                            </tbody></table>
                    </td>
                </tr>
                </tbody></table>
        </td>
    </tr>

    <tr bgcolor="7087A3"><td height="10"></td></tr>

    </tbody>
</table>

<!--  end top header  -->


<!-- main content -->
<table class="container" align="center"  border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="ffffff">
<tr>
                            <td align="center">
<br>
                                <a href="#">Home Page</a>
&nbsp;
                                <a href="#">FAQ</a>
&nbsp;
                                <a href="#">Contact Us</a>
                            </td>
</tr>


<!--Header-->
<tbody><tr ><td height="40"></td></tr>

<tr>
    <td>
        <table class="container-middle" align="center" border="0" cellpadding="0" cellspacing="0" width="560">
            <tbody><tr>
                <td>
                    <table class="logo" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td align="center">
                                <span class="nation">Nationwide Auto Transportation</span>
                            </td>
                        </tr>
                        </tbody></table>

                </td>
            </tr>
            </tbody></table>
    </td>
</tr>

<tr ><td height="40"></td></tr>
<!-- end header -->


<!-- main section -->
<tr>
    <td>
        <table class="container-middle" align="center" border="0" cellpadding="0" cellspacing="0" width="560">


            <tr ><td height="7"></td></tr>


            <tr ><td height="20"></td></tr>

            <tr >
                <td>
                    <table class="mainContent" align="center" border="0" cellpadding="0" cellspacing="0" width="528">
                        <tbody><tr>
                            <td  class="main-header" style="color: #484848; font-size: 16px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">

                                Dear {!!$data["name"]!!},

                            </td>
                        </tr>
                        <tr><td height="20">
<img src="http://nationwideautotransportation.com/wp-content/uploads/2014/07/logomobile.png" style="border: 1px solid #e9e9e9;width: 217px;float: right;" alt="logo">

                            </td></tr>
                        <tr>
                            <td  class="main-subheader" style="color: #a4a4a4; font-size: 12px; font-weight: normal; line-height:20px; font-family: Helvetica, Arial, sans-serif;">

Thank you for your interest in shipping your vehicle with Nationwide Auto Transportation. Our goal is your complete satisfaction.

                            </td>
                        </tr>

                        </tbody></table>
                </td>
            </tr>

            <tr ><td height="25"></td></tr>


           </table>
<table style="color:#717171;font:normal 11px Helvetica,Arial,sans-serif;margin:0;padding:0;width:374px;min-height:150px;margin-left:90px;font-weight:bold"><tbody><tr><td>Order ID</td><td>{!!$data["quote_id"]!!}</td></tr><tr><td>Pickup Location</td><td>{!!$data["pickup_location"]!!}</td></tr><tr><td>Dropoff Location</td><td>{!!$data["dropoff_location"]!!}</td></tr><tr><td>Vehicles</td><td>{!!$data["vehicles"]!!}</td></tr><tr><td>Carrier type</td><td>{!!$data["carrier_type"]!!}</td></tr><tr><td>Vehicle condition</td><td>{!!$data["vehicle_condition"]!!}</td></tr></tbody></table>
<br>
<p style="text-align:center;text-align:center;margin-top:15px;color:orange;font-weight:bold;font-size:30px">{!!$data["post_price"]!!}</p>

<a href="logindepot/companies/{!!$data["company_name"]!!}/order-form/{!!$data["quote_id"]!!}" style="background-color:cadetblue;padding:7px 7px 7px 7px;font-size:15px;text-decoration:none;color:white;font-weight:bolder;border-radius:4px;float:right;margin-top:16px;margin-right:160px" target="_blank">Click Here To Start Your Booking</a>
</td>
</tr>

<!-- end main section -->


<tr><td height="35"></td></tr>


<!--section 1 -->
<tr>
    <td>
        <table class="container-middle" align="center" border="0" cellpadding="0" cellspacing="0" width="560" bgcolor="F1F2F7">
            <tr >
                <td>
                    <table class="mainContent" align="center" border="0" cellpadding="0" cellspacing="0" width="528">
                        <tbody><tr><td height="20"></td></tr>
                        <tr>
                            <td>
                                <table class="section-item" align="left" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr><td height="6"></td></tr>
                                    <tr>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    </tbody></table>

                                <table align="left" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr><td height="30" width="30"></td></tr>
                                    </tbody></table>

                                <table class="section-item" align="left" border="0" cellpadding="0" cellspacing="0" width="360">
                                    <tbody><tr>
                                        <td style="color: #484848; font-size: 16px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">

Notes:
<p style="font-size:small">{!!$data["notes"]!!}</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td  style="color: #a4a4a4; line-height: 25px; font-size: 12px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                                        </td>
                                    </tr>
                                    <tr><td height="15"></td></tr>
                                    </tbody></table>
                            </td>
                        </tr>


                        </tbody></table>
                </td>
            </tr>



            </table>
    </td>
</tr>
<!-- end section 1-->




<!--section 2 -->
<tr>
    <td>
        <table class="container-middle" align="center" border="0" cellpadding="0" cellspacing="0" width="560">
            <tr >
                <td>
                    <table class="mainContent" align="center" border="0" cellpadding="0" cellspacing="0" width="528">
                        <tbody><tr><td height="20"></td></tr>
                        <tr>
                            <td>



                                <table class="section-item" align="left" border="0" cellpadding="0" cellspacing="0" width="360">
<span class="lead" style="color:#646464;font-weight:bold;margin:0;padding:0;line-height:26px;font-size:18px;font-family:Helvetica,Arial,sans-serif">About Nationwide Auto Transportation</span>
<br>
                                    <tbody>
                                    <tr>


<td style="padding:10px 0 45px" valign="top"><table cellpadding="0" cellspacing="0" border="0" width="558"><tbody><tr><td valign="top"><img src="https://ci5.googleusercontent.com/proxy/wn0m0-84pGWSXZWfah3Kt33VXjGC3gOBgzo6Snd4ta1y70vlKM1U1oyndBHACfx_p5YPBz0y_p-UynY00UnIQma7tsn-hJWeY3KlLI9OhucWRi02tKcUX0w9vMuXPA=s0-d-e1-ft#http://nationwideautotransportation.com/wp-content/uploads/2011/04/5.jpg" style="border:1px solid #e9e9e9;width:300px" alt="" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 274.900009155273px; top: 793.999992370606px;"><div id=":3u" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V" data-tooltip="Download"><div class="aSK J-J5-Ji aYr"></div></div></div><br><img src="https://ci5.googleusercontent.com/proxy/Qs7Zuc2AEiuNXRI6sCBrWOwS6CLzTP8T3IgANhjxb303urI3EbsGL5DyqER1PQyiOXtgEdcngipT1uQ2nxa5J-mgg-WoB49swlKq5XfJ72PPqaob9uXCYfqJa7RAmi4rkLK87cEw=s0-d-e1-ft#http://nationwideautotransportation.com/wp-content/uploads/2011/04/sidelogos.jpg" style="border:1px solid #e9e9e9;width:200px;margin-left:42px;margin-top:16px" alt="" class="CToWUd"><br></td><td valign="top" style="padding:0 0 20px 20px"><p style="color:#767676;font-weight:normal;margin:0;padding:0;line-height:20px;font-size:12px;font-family:Helvetica,Arial,sans-serif"> We provide all of your transportation needs including vehicle, boat,
motorcycles and freight shipments. We are able to ship all size vehicle to and from anywhere. Nationwide Auto Transportation is the industry leader and provides our customers with the finest quality services and support. Our goal is not simply to meet your expectations but to exceed your expectations. We offer competitive pricing and world class customer care.<br> Call <a href="tel:1-800-616-6516" value="+18006166516" target="_blank">1-800-616-6516</a> to get started.</p><br></td></tr></tbody></table><img src="https://ci6.googleusercontent.com/proxy/-N5pYJzYuLv_BpCpfgx-aVWYJoppbkE6Mkp_8xzt0dUsFEcQDdJmsiMBUBAdQD1eYhcMUpe56pkcZLaX-yJfp7afB4gfmXNECxH_hQLQvVpTE8X6=s0-d-e1-ft#http://www.logindepot.com/nation/images/email/divider_wide.png" alt="" style="border-top:10px solid #fff;width:558px" class="CToWUd"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #a4a4a4; line-height: 25px; font-size: 12px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table align="left" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr><td height="30" width="30"></td></tr>
                                    </tbody>
                                </table>
                                <table class="section-item" align="left" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr><td height="6"></td></tr>
                                    </tbody>
                                </table>



                            </td>
                        </tr>


                        </tbody></table>
                </td>
            </tr>



          </table>
    </td>
</tr>
<!-- end section 2 -->
<tr>
    <td  style="color: #939393; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;" class="prefooter-subheader" align="center">

        <span style="color: #7087A3">Nationwide Auto Transportation llc &nbsp;&nbsp;&nbsp;</span><a href="mailto:nationwidecarrier@gmail.com">Email</a>


    </td>
</tr>

<tr><td height="30"></td></tr>
</tbody></table>
<!--end main Content -->


<!-- footer -->
<table class="container" border="0" cellpadding="0" cellspacing="0" width="600">
    <tbody>
    <tr bgcolor="7087A3"><td height="15"></td></tr>
    <tr bgcolor="7087A3">
        <td  style="color: #fff; font-size: 10px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;" align="center">

            Nationwide Auto Transportation © Copyright 2015 . All Rights Reserved

        </td>
    </tr>

    <tr>
        <td bgcolor="7087A3" height="14"></td>
    </tr>
    </tbody></table>
<!-- end footer-->
</td>
</tr>

<tr><td height="30"></td></tr>

</tbody>
</table>


</body>
</html>
