<?php 

use phpmailer\PHPMailer\PHPMailer;
$name = 'petspot.com';
$email = $_POST['email'];
$query = $_POST['query'];
$subject = 'Thank you for contacting us';
$body = '<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: black;" leftmargin="0">
<!--100% body table--> 
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
    <tr>
        <td>
            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                      <a href="localhost/petspot" title="logo" target="_blank">
                        <img  width="300" src="https://i.ibb.co/nwpMn3H/petspot-black.png" title="logo" alt="logo">
                      </a>
                    </td>
                </tr>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                            style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="padding:0 35px;">
                                    <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:"Rubik",sans-serif;">Thank you for
                                    contacting petspot</h1>
                                    <span
                                        style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                    <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                        A dedicated resource person will contact you shortly and get all your doubts cleared
                                    </p>
                                    <a href="localhost/petspot"
                                        style="background:blue;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">
                                        <h3 style="color:white;">Visit Website</h3> </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% body table-->
</body>';

require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';
require_once 'phpmailer/src/Exception.php';

$mail = new PHPMailer();

date_default_timezone_set('Etc/UTC');
$mail -> isSMTP(true);
$mail -> Host = gethostbyname('ssl://smtp.gmail.com'); 
$mail -> SMTPAuth = true;
$mail -> Username = 'saltandpeppercuisine6@gmail.com';
$mail -> Password = 'coqxfpzkjzdkqbvl';
$mail -> Port = 465;
$mail -> SMTPSecure = "ssl";

$mail->smtpConnect([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);

$mail -> isHTML(true);
$mail -> setFrom($email, $name);
$mail ->addAddress($_POST['email']);
$mail -> Subject = ("$subject");
$mail -> Body = $body;
//$_SESSION['code'] =NULL;

$mail->send();
header("location: index.php?querymail=sent");
