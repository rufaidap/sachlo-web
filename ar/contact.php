<?php

$flash_msg = "";
$error_val = 0;

if (isset($_POST["subcon"])) {




    $name = $_POST['name'];
    $name_val = 0;
    $email = $_POST['email'];

    $email_val = 0;
    $mobile = $_POST['mobile'];
    $mobile_val = 0;
    $message = $_POST['message'];
    $message_val = 0;

    $products = $_POST['products'];
    $products_val = 0;

    //--- server side form validation ---//


    //--- name field validation ---//

    if ($name == "") {
        $name_val = 1;
    }

    //--- email field validation ---//

    if ($email == "") {
        $email_val = 1;
    }

    //--- mobile field validation ---//

    if ($mobile == "") {
        $mobile_val = 1;
    } else {

        $length = strlen($mobile);
        if ($length > 12 || $length <= 0) {
            $mobile_val = 1;
        } else {
            $first = substr($mobile, 0, 4);

            if ($first != '9665') {
                $mobile_val = 1;
            }
        }
    }

    //--- products field validation ---//

    if ($products == "") {
        $products_val = 1;
    }



    if ($name_val == 1 || $email_val == 1 || $mobile_val == 1 || $products_val == 1) {

        $flash_msg = "Invalid Field values";
        $error_val = 1;
    }


    //--- send mail only if server side validation success ----//

    if ($error_val == 0) {


        $table = '<table><tr><th colspan="3" style="text-align:center;font-size:20px;color:#fff;background-color:#f2f2f2">Sachlo Contact</th></tr>';



        $table .= '<tr><th style="text-align:left;font-size:20px;">Name</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">' . $name . '</td></tr>';


        $table .= '<tr><th style="text-align:left;font-size:20px;">Email</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $email . '</td></tr>';
        $table .= '<tr><th style="text-align:left;font-size:20px;">Message</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $message . '</td></tr>';
        $table .= '<tr><th style="text-align:left;font-size:20px;">Products</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $products . '</td></tr>';

        $table .= '</table>';


        $header = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: Sachlo<noreply@sachlo.com>' . "\r\n";

        $title = 'Sachlo Contact';



        $message = '<div style="background:#f2f2f2; padding:30px; font-family:calibri; font-size:20px; color:#666666; padding-top:60px"><div style="width:600px; margin:0 auto; background:#fff;  padding:20px; position:relative; border-radius:10px;"><div style="position:absolute; left: 240px; top: -50px;padding-bottom: 10px;"><a href="#" style="color:#666; font-size:25px; text-decoration:none; font-family:tahoma"> </a></div>' . $table . '</div></div></div>';





        $mail_send = 'rufaida@adoxsolutions.com';

        if (mail($mail_send, $title, $message, $header)) {


            $flash_msg = 'Mail Send Successfully';
        }
    }
}





?>




<!--  Developed by adox solutions {info@adoxsolutions.com} -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<title>Leading chemical manufacturing company in Saudi Arabia and Mena Region</title>

<meta name="description" content="Manufacturers, Exporters and Suppliers of Liquid Chlorine in Saudi Arabia, Sodium Hypo Chlorite in Saudi Arabia, Caustic Soda in Saudi Arabia , Caustic Soda Flakes in Saudi Arabia offered by Sachlo, Saudi Arabia">
<meta charset="utf-8">
<meta name="keywords" content="Sachlo">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/adox-layout.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/contact.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!--Font-->
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



</head>

<body>



    <!--  header  -->
    <?php $page = 'contact';
    include 'header.php'; ?>



    <!--  inner-banner  -->
    <section class="inner-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="txt">
                        <h3> اتصل بنا </h3>
                    </div>
                    <img class="lap" src="images/contact-ban.jpg" alt="Chemical manufacturing companies Saudi Arabia">
                    <img class="mob" src="images/contact-ban-mob.jpg" alt="Chemical manufacturing companies Saudi Arabia">
                </div>
            </div>
        </div>
    </section>



    <!--  contact -->
    <section class="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wi">

                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <form method="post" enctype="multipart/form-data" action="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="text-right">للحصول على المعلومات</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <input type="hidden" id="form_submit_status" value="<?php echo $flash_msg; ?>">
                                            <input required placeholder="  الاسم الكامل  " class="form-control" name="name" id="name" type="text" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <input required placeholder="  عنوان البريد الإلكتروني   " class="form-control" name="email" id="email" type="email" />
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <input required placeholder="   (9665XXXXXXXX) رقم الهاتف المحمول " class="form-control" name="mobile" id="mobile" type="text" />
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <select name="products" id="products" class="form-control" required="">
                                                <option value=""> اختر المنتج </option>
                                                <option value="Liquefied Chlorine"> الكلور المسال </option>
                                                <option value="Caustic Soda"> الصودا الكاوية </option>
                                                <option value="Caustic Soda Flakes"> رقائق الصودا الكاوية </option>
                                                <option value="Hydrochloric Acid 32%"> حامض الهيدروكلوريك </option>
                                                <option value="Sodium Hypochlorite 12%">هيبوكلوريت الصوديوم % 12</option>
                                                <option value="Calcium Chloride 36% Liquid">كلوريد الكالسيوم % 38 -35 سائل </option>
                                                <option value="Calcium Chloride ‐ 77% ‐ 78% Flakes">كلوريد الكالسيوم % - 77 رقائق</option>
                                                <option value="Calcium Chloride ‐ 94% Prills"> كلوريد الكالسيوم % - 94 حبيبات </option>
                                            </select>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <textarea required placeholder="الرسالة (بحد أقصى 500 حرف)" class="form-control min-hei" name="message" id="message" type="text"></textarea>
                                        </div>


                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <button type="submit" class="btn" id="subcon" name="subcon"> يُقدِّم
                                            </button>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="g-recaptcha" id="cap" data-sitekey="6LcFcdchAAAAALpAVjnfngkDcvpuC09tztd0sYbf"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-1 col-md-12">
                                <div class="lin"></div>
                            </div>

                            <div class="col-lg-5 col-md-12">
                                <div class="text-right">
                                    <h4> تابعنا على.</h4>

                                    <h6 class="mt-3">هاتف المبيعات :</h6>
                                    <p><a href="tel:+966554637242">هاتف : 966554637242+</a></p>
                                    <p><a href="tel:+966118123870">هاتف: 966118123870+</a></p>
                                    <!--<p><a href="tel:+966552427364">هاتف: 966552427364+</a></p>-->
                                    <p><a href="mailto:info@sachlo.com"> البريد الإلكتروني ساكلو: info@sachlo.com </a></p>

                                    <h6 class="mt-3"> </h6>
                                    <p><a href="tel:+966114155824">هاتف ساكلو: 966114155824+</a></p>

                                    <h6 class="mt-3">هاتف تقنية المعلومات:</h6>
                                    <p><a href="tel:+966555401054">966555401054+</a></p>

                                    <h4> تابعنا على.</h4>
                                    <p> ساكلو ، FWRG + 5JC ، الرياض 14545 ، المملكة العربية السعودية </p>

                                    <h4> تابعنا على .</h4>
                                    <div class="soci">
                                        <a href="#" target="blank">
                                            <div class="btn"><i class="demo-icon icon-facebook-2">&#xf300;</i></div>
                                        </a>
                                        <a href="#" target="blank">
                                            <div class="btn"><i class="demo-icon icon-twitter">&#xe800;</i></div>
                                        </a>
                                        <a href="#" target="blank">
                                            <div class="btn"><i class="demo-icon icon-instagram-1">&#xf16d;</i></div>
                                        </a>
                                        <a href="#" target="blank">
                                            <div class="btn"><i class="demo-icon icon-instagram">&#xe806;</i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  map -->
    <section class="map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d116187.40900807979!2d46.856462642804864!3d24.4904273501696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3e2f98e1fcb5baeb%3A0xa202f5e634573f00!2ssachlo!3m2!1d24.490443499999998!2d46.926503!5e0!3m2!1sen!2sin!4v1519106161791" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>



    <!--  careers  -->


    <!--  header  -->
    <?php $page = 'home';
    include 'footer.php'; ?>




    <!--  captcha  -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>


    <!--  captcha  -->
    <script>
        $(document).ready(function() {
            var form_submit_status = $('#form_submit_status').val();
            if (form_submit_status != "") {
                alert(form_submit_status);
            }

        });
        //--- Mobile number field on input validation ---//

        $('#mobile').on('input', function() {
            var mobile = $('#mobile').val();
            //
            if (!($.isNumeric(mobile))) {
                alert('Please enter a valid mobile number');
                $('#mobile').val("");
            }
            if (mobile.length > 4 && mobile.length <= 12) {

                var str = '';
                for (i = 0; i < mobile.length; i++) {
                    if (i < 4) {
                        str = str + '' + mobile[i];
                    }


                }

                if (str != 9665) {
                    alert('Please enter 12 digit number in format');
                    $('#mobile').val("");
                }


            }
            if (mobile.length > 12) {
                alert('Please enter 12 digit number in format');
                $('#mobile').val("");
            }

        });


        //--- Message field on input validation ----//

        $('#message').on('input', function() {
            var message = $('#message').val();


            if (message.length > 500) {
                alert('Please enter message length less than 500 characters');
                $('#message').val("");
            }

        });
    </script>
    <script type="text/javascript">
        $('#cap').click(function() {
            grecaptcha.reset();

        });

        $('#subcon').click(function() {



            //--- Message field validation on submit ---//

            var message = $('#message').val();


            if (message.length > 500) {
                alert('Please enter message length less than 500 characters');
                $('#message').val("");
                return false;
            }

            //--- Mobile number field validation ---//


            var mobile = $('#mobile').val();
            //
            if (!($.isNumeric(mobile))) {
                alert('Please enter a valid mobile number');
                $('#mobile').val("");
                return false;
            }
            if (mobile.length > 4 && mobile.length <= 12) {

                var str = '';
                for (i = 0; i < mobile.length; i++) {
                    if (i < 4) {
                        str = str + '' + mobile[i];
                    }


                }

                if (str != 9665) {
                    alert('Please enter 12 digit number in format');
                    $('#mobile').val("");
                    return false;
                }


            }
            if (mobile.length > 12) {
                alert('Please enter 12 digit number in format');
                $('#mobile').val("");
                return false;
            }






            //--- Recaptcha validation ---//

            if (grecaptcha.getResponse() == "") {

                alert("Check Your Captcha!");
                return false;
            }


        });
    </script>




</body>

</html>