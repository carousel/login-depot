<?php

require('/home3/dviredri/public_html/nation/phpMailer/class.phpmailer.php');
$con = mysqli_connect('localhost', 'dviredri_afik', '162534', 'dviredri_manage');
if (!$con) {
    die("Connection Impossible: " . mysqli_error($con));
}
if (mysqli_connect_errno()) {
    die("Connection Failed: " . mysqli_connect_errno() . " : " . mysqli_connect_error());
}

if (isset($_POST['email']) && !empty($_POST['p_zip'])) {
    $p_zip = $_POST['p_zip'];
    $d_zip = $_POST['d_zip'];
    $condition = $_POST['condition'];
    $carrier = $_POST['carrier'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $email = $_POST['email'];
    $price = $_POST['price'];
    $p_price = $_POST['p_price'];


    $sql = "SELECT * FROM `tbl_02_models` WHERE model_make_id ='" . $make . "' AND model_name = '" . $model . "'";

    $res = $con->query($sql);
    if ($row = $res->fetch_assoc()) {
        $db_type = $row['model_body'];
        switch ($db_type) {
            case 'Van':
                $v_type = 'Van';
                break;
            case 'Two Seaters':
                $v_type = 'Car';
                break;
            case 'SUV':
                $v_type = 'Suv';
                break;
            case 'Subcompact Cars':
                $v_type = 'Car';
                break;
            case 'Station Wagen':
                $v_type = 'Car';
                break;
            case 'Standard Pickup Trucks':
                $v_type = 'Pickup';
                break;
            case 'Sport Utility Vehicles':
                $v_type = 'Suv';
                break;
            case 'Small Station Wagons':
                $v_type = 'Car';
                break;
            case 'Small Pickup Trucks':
                $v_type = 'Pickup';
                break;
            case 'Sedan':
                $v_type = 'Car';
                break;
            case 'Roadster':
                $v_type = 'Car';
                break;
            case 'Pickup':
                $v_type = 'Pickup';
                break;
            case 'Passenger Vans':
                $v_type = 'Van';
                break;
            case 'Panel Van':
                $v_type = 'Van';
                break;
            case 'Minivan':
                $v_type = 'Van';
                break;
            case 'Mini Compact Cars':
                $v_type = 'Car';
                break;
            case 'Midsize Station Wagons':
                $v_type = 'Car';
                break;
            case 'Midsize Cars':
                $v_type = 'Car';
                break;
            case 'Large Cars':
                $v_type = 'Car';
                break;
            case 'Hatchback':
                $v_type = 'Car';
                break;
            case 'Crossover':
                $v_type = 'Suv';
                break;
            case 'Coupe':
                $v_type = 'Car';
                break;
            case 'Convertible':
                $v_type = 'Car';
                break;
            case 'Compact Cars':
                $v_type = 'Car';
                break;
            case 'Cargo Vans':
                $v_type = 'Van';
                break;
            case 'heavy_suv':
                $v_type = 'suv';
                break;
            case 'heavy_van':
                $v_type = 'Van';
                break;
            case 'heavy_pickup':
                $v_type = 'pickup';
                break;
            default :
                $v_type = 'Car';
                break;
        }
    }


    $status = 1;
    $currDate = date('Y-m-d H:i:s a');

    $pu_date = date("Y-m-d");

    $qstring1 = "SELECT * FROM newZips2012 WHERE Zipcode = '" . $p_zip . "'";
    $result1 = $con->query($qstring1);

    if ($row1 = $result1->fetch_array()) {
        $tmp_pickup_city = $row1['City'];
        $pickup_state = $row1['State'];
        $pickup_zip = $row1['Zipcode'];

        $pickup_city = ucfirst(strtolower($tmp_pickup_city));
    }


    $qstring2 = "SELECT * FROM newZips2012 WHERE Zipcode = '" . $d_zip . "'";
    $result2 = $con->query($qstring2);

    if ($row2 = $result2->fetch_array()) {
        $tmp_dropoff_city = $row2['City'];
        $dropoff_state = $row2['State'];
        $dropoff_zip = $row2['Zipcode'];

        $dropoff_city = ucfirst(strtolower($tmp_dropoff_city));
    }


    $i = 0;
    while ($i == 0) {
        $random = rand(10000, 99999);
        $test_id = 'ST' . $random;

        $sql = "SELECT * FROM `users` WHERE order_id = '" . $test_id . "'";

        $res = $con->query($sql);
        if ($row = $res->fetch_assoc()) {
            continue;
        }
        $i++;
    }
    $order_id = $test_id;

    $code = time();


    $sql = 'INSERT INTO `users`(`order_id`, `name`, `phone1`, `phone2`, `email1`, `email2`, `v_year`, `v_make`, `v_model`, `v_condition`, `v_carrier`, `v_notes`, `p_city`, `p_state`, `p_zipcode`, `d_city`, `d_state`, `d_zipcode`, `pu_date`, `customer_notes`, `office_notes`, `q_price`, `p_price`,`created_at`,`code`) VALUES ("' . $order_id . '","Customer","(000)000-0000","","' . $email . '","","","","","';
    if ($condition == 'running') {
        $sql .= 'yes","';
    } else {
        $sql .= 'no","';
    }
    $sql .= $carrier . '","';
    $sql .= '","';
    $sql .= $pickup_city . '","' . $pickup_state . '","';
    $sql .= $pickup_zip . '","';

    $sql .= $dropoff_city . '","' . $dropoff_state . '","';
    $sql .= $dropoff_zip . '","';
    $sql .= $pu_date . '","';
    $sql .= '","';
    $sql .= '","';
    $sql .= $price . '","';
    $sql .= $p_price . '"';
    $sql .= ',"' . $currDate . '","' . $code . '")';

    if (!$con->query($sql)) {
        echo 'error!';
        die;
    }


    $carSql = 'INSERT INTO `customer_vehicle`(`order_id`, `year`, `make`, `model`,`v_type`) VALUES ("' . $order_id . '","0000","' . $make . '","' . $model . '","' . $v_type . '")';
    $con->query($carSql);


    $subject = 'NAT Shipping Quote - #' . $order_id;

    $message_new = '<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="padding: 35px 0; background: #4b4b4b url("http://www.logindepot.com/nation/images/email/bg_email.png");">' .
            '<tr>' .
            '<td align="center" style="margin: 0; padding: 0; background: url("http://www.logindepot.com/nation/images/email/bg_email.png") ;" >' .
            '<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" style="font-family: Helvetica, Arial, sans-serif; background:#2a2a2a;" class="header">' .
            '<tr>' .
            '<td width="600" align="left" style="padding: font-size: 0; line-height: 0; height: 7px;" height="7" colspan="2"><img src="http://www.logindepot.com/nation/images/email/bg_header.png" alt="header bg"></td>' .
            '</tr>' .
            '<tr>' .
            '<td width="20"style="font-size: 0px;">&nbsp;</td>' .
            '<td width="580" align="left" style="padding: 18px 0 10px;">' .
            '<h1 style="color: #47c8db; font: bold 32px Helvetica, Arial, sans-serif; margin: 0; padding: 0; line-height: 40px;">Nationwide Auto Transportation</h1>' .
            '<p style="color: #c6c6c6; font: normal 12px Helvetica, Arial, sans-serif; margin: 0; padding: 0; line-height: 18px;">Our goal is to exceed your expectations</p>' .
            '</td>' .
            '</tr>' .
            '</table>' .
            '<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" style="font-family: Helvetica, Arial, sans-serif; background: #fff;" bgcolor="#fff">' .
            '<tr>' .
            '<td width="600" valign="top" align="left" style="font-family: Helvetica, Arial, sans-serif; padding: 20px 0 0;" class="content">' .
            '<table cellpadding="0" cellspacing="0" border="0"  style="color: #717171; font: normal 11px Helvetica, Arial, sans-serif; margin: 0; padding: 0;" width="600">' .
            '<tr>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '<td style="padding: 5;  font-family: Helvetica, Arial, sans-serif; background: url(\'http://www.logindepot.com/nation/images/email/bg_date_wide.png\');background-repeat: round; height:20px; line-height: 20px;"  align="center" width="558" height="20">' .
            '<ul style="list-style-type: none;">' .
            '<li style="padding: 4;  font-family: Helvetica, Arial, sans-serif;float: left;text-decoration: underline;font-size: 17px;"><a href="http://nationwideautotransportation.com">Home Page</a></li>' .
            '<li style="padding: 4;  font-family: Helvetica, Arial, sans-serif;float: left;text-decoration: underline;font-size: 17px;"><a href="http://nationwideautotransportation.com/frequently-asked-questions/">FAQ</a></li>' .
            '<li style="padding: 4;  font-family: Helvetica, Arial, sans-serif;float: left;text-decoration: underline;font-size: 17px;"><a href="http://nationwideautotransportation.com/contact-us/">Contact Us</a></li>' .
            '</ul>' .
            '</td>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '</tr>' .
            '<tr>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '<td style="padding: 20px 0 0;" align="left">' .
            '<h2 style="color:#646464; font-weight: bold; margin: 0; padding: 0; line-height: 26px; font-size: 18px; font-family: Helvetica, Arial, sans-serif;position: absolute; ">Dear Customer,</h2><img src="http://nationwideautotransportation.com/wp-content/uploads/2014/07/logomobile.png" style="border: 1px solid #e9e9e9;width: 217px;float: right;" alt="">' .
            '</td>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '</tr>' .
            '<tr>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '<td style="padding: 15px 0 15px;"  valign="top">' .
            '<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 12px;font-family: Helvetica, Arial, sans-serif; "></p><br>' .
            '<table cellpadding="0" cellspacing="0" border="0" width="558">' .
            '<tr>' .
            '<td valign="top">' .
            '<p style="margin-bottom: 10px;">Thank you for your interest in shipping your vehicle with Nationwide Auto Transportation. Our goal is your complete satisfaction.</p>' .
            '<table border="1" style="color: #717171;font: normal 11px Helvetica, Arial, sans-serif;margin: 0;padding: 0;width: 374px;min-height: 150px;margin-left: 90px;font-weight: bold;">' .
            '<tr>' .
            '<td>Order ID</td>' .
            '<td>' . $order_id . '</td>' .
            '</tr>' .
            '<tr>' .
            '<td>Pickup Location</td>' .
            '<td>' . $pickup_city . ', ' . $pickup_state . ' ' . $pickup_zip . '</td>' .
            '</tr>' .
            '<tr>' .
            '<td>Dropoff Location</td>' .
            '<td>' . $dropoff_city . ', ' . $dropoff_state . ' ' . $dropoff_zip . '</td>' .
            '</tr>' .
            '<tr>' .
            '<td>Vehicles</td>' .
            '<td>';

    $message_new .= $make . ' ' . $model;


    $message_new .= '</td></tr><tr>' .
            '<td>Carrier type</td>';
    if ($carrier == 'open') {
        $message_new .= '<td>open carrier</td>';
    } else {
        $message_new .= '<td>enclosed carrier</td>';
    }

    $message_new .= '</tr><tr>' .
            '<td>Vehicle condition</td>';
    if ($condition == 'running') {
        $message_new .= '<td>running</td>';
    } else {
        $message_new .= '<td>not running</td>';
    }
    $message_new .= '</tr>' .
            '</table>' .
            '<p style="text-align: center;text-align: center;margin-top: 15px;color: orange;font-weight: bold;font-size: 30px;">$' . $price . '.00</p>' .
            '<p>' .
            '<a href = "http://www.logindepot.com/nation/terms_conditions.php?orderid=' . $order_id . '&verify=' . $code . '" style = "background-color: cadetblue;padding: 7px 7px 7px 7px;font-size: 15px;text-decoration: none;color: white;font-weight: bolder;border-radius: 4px;float: right;margin-top: 16px;margin-right: 155px;">Click Here To Start Your Booking</a>' .
            '</p>';


    $message_new .= '</td>' .
            '</tr>' .
            '</table>' .
            '<img src="http://www.logindepot.com/nation/images/email/divider_wide.png" alt="" style="border-top: 10px solid #fff;width: 558px">' .
            '</td>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '</tr>' .
            '<tr>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '<td style="padding: 15px 0 0;" align="left">' .
            '<h2 style="color:#646464; font-weight: bold; margin: 0; padding: 0; line-height: 26px; font-size: 18px; font-family: Helvetica, Arial, sans-serif; ">About Nationwide Auto Transportation</h2>' .
            '</td>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '</tr>' .
            '<tr>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '<td style="padding: 10px 0 45px;"  valign="top">' .
            '<table cellpadding="0" cellspacing="0" border="0" width="558">' .
            '<tr>' .
            '<td valign="top">' .
            '<img src="http://nationwideautotransportation.com/wp-content/uploads/2011/04/5.jpg" style="border: 1px solid #e9e9e9;width: 300px;" alt=""><br/>' .
            '<img src="http://nationwideautotransportation.com/wp-content/uploads/2011/04/sidelogos.jpg" style="border: 1px solid #e9e9e9;width: 200px;margin-left: 42px;margin-top: 16px;" alt=""><br/>' .
            '</td>' .
            '<td valign="top" style="padding: 0 0 20px 20px">' .
            '<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 12px;font-family: Helvetica, Arial, sans-serif; ">' .
            ' We provide all of your transportation needs including vehicle, boat, motorcycles and freight shipments. We are able to ship all size vehicle to and from anywhere. Nationwide Auto Transportation is the industry leader and provides our customers with the finest quality services and support. Our goal is not simply to meet your expectations but to exceed your expectations. We offer competitive pricing and world class customer care.<br/> Call 1-800-616-6516 to get started.</p><br>' .
            '</td>' .
            '</tr>' .
            '</table>' .
            '<img src="http://www.logindepot.com/nation/images/email/divider_wide.png" alt="" style="border-top: 10px solid #fff; width: 558px">' .
            '</td>' .
            '<td width="21" style="font-size: 1px; line-height: 1px;"><img src="http://www.logindepot.com/nation/images/email/spacer.gif" alt="space" width="20"></td>' .
            '</tr>' .
            '</table>' .
            '</td>' .
            '</tr>' .
            '<tr>' .
            '<td width="600" align="left" style="padding: font-size: 0; line-height: 0; height: 3px;" height="3" colspan="2"><img src="http://www.logindepot.com/nation/images/email/bg_bottom.png" alt="header bg"></td>' .
            '</tr>' .
            '</table>' .
            '<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" style="font-family: Helvetica, Arial, sans-serif; line-height: 10px;" class="footer">' .
            '<tr>' .
            '<td align="center" style="padding: 5px 0 10px; font-size: 11px; color:#7d7a7a; margin: 0; line-height: 1.2;font-family: Helvetica, Arial, sans-serif;" valign="top">' .
            '<br><p style="font-size: 11px; color:#7d7a7a; margin: 0; padding: 0; font-family: Helvetica, Arial, sans-serif;">Nationwide Auto Transportation llc nationwidecarrier@gmail.com</p>' .
            '<p style="font-size: 11px; color:#7d7a7a; margin: 0; padding: 0; font-family: Helvetica, Arial, sans-serif;">For any question <webversion style="color: #0eb6ce; text-decoration: none;">1-800-616-6516</webversion> Call now <unsubscribe style="color: #0eb6ce; text-decoration: none;"></unsubscribe></p>' .
            '</td>' .
            '</tr>' .
            '</table>' .
            '</td>' .
            '</td>' .
            '</tr>' .
            '</table></body></html>';

    $mail1 = new PHPMailer(); // create a new object
    $mail1->IsSMTP(); // enable SMTP
    //$mail2->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail1->SMTPAuth = true; // authentication enabled
    $mail1->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail1->Host = "smtp.gmail.com";
    $mail1->Port = 465; // or 587
    $mail1->IsHTML(true);
    $mail1->Username = "nationwidecarrier@gmail.com";
    $mail1->Password = "Nadav0380";
    $mail1->SetFrom("nationwidecarrier@gmail.com");
    $mail1->Subject = $subject;
    $mail1->Body = $message_new;
    $mail1->AddAddress($email);
    if (!$mail1->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        die;
    }


    $curr_date = date("m.d.y");

    $to2 = 'nationwidecarrier@gmail.com';

    $subject2 = 'NAT Quote for ' . $name . ' - #' . $order_id;

    $message2 = '<html><body>';
    $message2 .= '<img src="http://nationwideautotransportation.com/wp-content/uploads/2014/07/logomobile.png" alt="NationwideAutoTransportation" />';
    $message2 .= '<table rules="all" style="border-color: #666;width:100%;" cellpadding="10">';
    $message2 .= "<tr style='background: #ebebeb;'><td style='width:20%;'><strong>Order ID:</strong> </td><td>" . $order_id . "</td></tr>";
    $message2 .= "<tr><td><strong>Date:</strong> </td><td>" . $curr_date . "</td></tr>";
    $message2 .= "<tr style='background: #ebebeb;'><td><strong>Name:</strong> </td><td>Customer</td></tr>";
    $message2 .= "<tr><td><strong>Email Address:</strong> </td><td>" . $email . "</td></tr>";
    $message2 .= "<tr style='background: #ebebeb;'><td><strong>Phone Number:</strong> </td><td>(000)000-0000</td></tr>";

    $message2 .= "<tr><td><strong>Vehicle:</strong> </td><td>0000 " . $make . ' ' . $model . "</td></tr>";


    $message2 .= "<tr style='background: #ebebeb;'><td><strong>Pickup Locations:</strong> </td><td>" . $pickup_city . ', ' . $pickup_state . ' ' . $pickup_zip . "</td></tr>";
    $message2 .= "<tr><td><strong>Dropoff Locations:</strong> </td><td>" . $dropoff_city . ' ' . $dropoff_state . ' ' . $dropoff_zip . "</td></tr>";
    $message2 .= "<tr style='background: #ebebeb;'><td><strong>Pickup Date:</strong> </td><td>" . $curr_date . "</td></tr>";
    if ($carrier == 'open') {
        $message2 .= "<tr><td><strong>Carrier Type:</strong> </td><td>open carrier</td></tr>";
    } else {
        $message2 .= "<tr><td><strong>Carrier Type:</strong> </td><td style='color:blue;'>enclosed carrier</td></tr>";
    }
    if ($condition == 'running') {
        $message2 .= "<tr style='background: #ebebeb;'><td><strong>Vehicle Condition:</strong> </td><td>running</td></tr>";
    } else {
        $message2 .= "<tr style='background: #ebebeb;'><td><strong>Vehicle Condition:</strong> </td><td style='color:red;'>not running</td></tr>";
    }
    $message2 .= "<tr><td><strong>Price:</strong> </td><td>$" . $price . ".00</td></tr>";
    $message2 .= "</table><br/><br/>";
    $message2 .= "</body></html>";

    $mail2 = new PHPMailer(); // create a new object
    $mail2->IsSMTP(); // enable SMTP
    //$mail2->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail2->SMTPAuth = true; // authentication enabled
    $mail2->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail2->Host = "smtp.gmail.com";
    $mail2->Port = 465; // or 587
    $mail2->IsHTML(true);
    $mail2->Username = "nationwidecarrier@gmail.com";
    $mail2->Password = "Nadav0380";
    $mail2->SetFrom("nationwidecarrier@gmail.com");
    $mail2->Subject = $subject2;
    $mail2->Body = $message2;
    $mail2->AddAddress($to2);
    if (!$mail2->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        die;
    }

    echo $order_id;
}

