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

    $file = $_FILES['file'];
    $file_val = 0;

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

    //--- File upload validation ---//

    if ($file['type'] != "application/pdf") {
        $file_val = 1;
    }





    if ($name_val == 1 || $email_val == 1 || $mobile_val == 1 || $file_val == 1) {

        $flash_msg = "Invalid Field values";
        $error_val = 1;
    }


    //--- send mail only if server side validation success ----//

    if ($error_val == 0) {


        $msg = "First Name :" . $name . "<br>";
        $msg .= "Mobile Number :" . $mobile . "<br>";
        $msg .= "Email Id :" . $email . "<br>";

        $msg .= "Message:" . $message . "<br>";



        $path_file = "";


        $file = $_FILES['file']['name'];

        $fileName = $file;
        $temp = $_FILES['file']['tmp_name'];

        $targetDir = dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/";


        $m = explode('.', $fileName);
        $imgUpload = $m[0] . rand(1, 1000) . "." . $m[1];
        $targetFilePath = $targetDir . $imgUpload;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {

            $path_file = $targetFilePath;
        }


        $to = "rufaida@adoxsolutions.com";

        $from        = "Sachlo<no-replay@adoxapp.com>";

        $mainMessage = '<div style="background:#f2f2f2; padding:30px; font-family:calibri; font-size:20px; color:#666666; padding-top:60px"><div style="width:600px; margin:0 auto; background:#fff;  padding:20px; position:relative; border-radius:10px;">Sachlo Careers<br>' . $msg . '</div></div></div>';

        $headers = "From: $from";

        if ($path_file != "") {
            $fileatt     = $path_file; //file location
            $fileatttype = "application/pdf";
            $fileattname = "cv." . $m[1]; //name that you want to use to send or you can use the same name

            // File

            $file = fopen($fileatt, 'rb');
            $data = fread($file, filesize($fileatt));
            fclose($file);
        }


        // This attaches the file

        $semi_rand     = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $headers      .= "\nMIME-Version: 1.0\n" .
            "Content-Type: multipart/mixed;\n" .
            " boundary=\"{$mime_boundary}\"";
        $message = "This is a multi-part message in MIME format.\n\n" .
            "--{$mime_boundary}\n" .
            "Content-Type: text/html; charset=\"iso-8859-1\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
            $mainMessage  . "\n\n";

        if ($path_file != "") {
            $data = chunk_split(base64_encode($data));
            $message .= "--{$mime_boundary}\n" .
                "Content-Type: {$fileatttype};\n" .
                " name=\"{$fileattname}\"\n" .
                "Content-Disposition: attachment;\n" .
                " filename=\"{$fileattname}\"\n" .
                "Content-Transfer-Encoding: base64\n\n" .
                $data . "\n\n";
        }

        $message .= "--{$mime_boundary}--\n";

        $message2 = '<div style="background:#f2f2f2; padding:30px; font-family:calibri; font-size:20px; color:#666666; padding-top:60px">
<div style="width:600px; margin:0 auto; background:#fff;  padding:20px; position:relative; border-radius:10px;">Thank You, Your Application has been received<br><br>Regards,<br> Team Sachlo..</div></div></div>
';

        $mail_send = 'rufaida@adoxsolutions.com,rufaidapoovancheeri@gmail.com';
        $replay_mail = $email;
        // Send the email
        $header = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: Sachlo<no-replay@adoxapp.com>' . "\r\n";
        if (mail($mail_send, 'Sachlo', $message, $headers)) {

            mail($replay_mail, 'Sachlo', $message2, $header);
            $flash_msg = 'Mail Send Successfully';
        }
    }
}





?>






<!--  Developed by adox solutions {info@adoxsolutions.com} -->
<!DOCTYPE html>
<html>
<title>Leading chemical manufacturing companies in Saudi Arabia</title>

<meta name="description" content="Sachlo">
<meta charset="utf-8">
<meta name="keywords" content="Sachlo">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/adox-layout.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/careers.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!--Font-->
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


<style>
    .required {
        font-size: 12px;
        color: #f00
    }
</style>


</head>

<body style="direction: rtl;">



    <!--  header  -->
    <?php $page = 'careers';
    include 'header.php'; ?>



    <!--  inner-banner  -->
    <section class="inner-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="txt">
                        <h3> التوظيف </h3>
                    </div>
                    <img class="lap" src="images/career-ban.jpg">
                    <img class="mob" src="images/career-ban-mob.jpg">
                </div>
            </div>
        </div>
    </section>



    <!--  career -->
    <section class="career">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h3> <span>استمارة</span> التوظيف </h3>
                    <p> في ساكلو ، نؤمن أن الشركة قوية مثل الأشخاص الذين يعملون معًا داخل مؤسستنا. هذا هو السبب في أننا
                        في ساكلو نسعى جاهدين لبناء فرق إدارة قوية وكجزء من هذا. </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form method="post" enctype="multipart/form-data" action="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="hidden" id="form_submit_status" value="<?php echo $flash_msg; ?>">
                                <input required placeholder="  الاسم الكامل   " class="form-control" name="name" id="fullname" type="text" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="  عنوان البريد الإلكتروني  " class="form-control" name="email" id="email" type="email" />
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label class="required"> * يرجى إدخال رقم الهاتف المتحرك بتنسيق 9665XXXXXXXX فقط
                                </label>
                                <input required placeholder="  رقم الهاتف المحمول  " class="form-control" name="mobile" id="mobile" type="text" />
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label class="required"> * حدد ملف PDF فقط </label>
                                <input required="" class="form-control " name="file" id="file" type="file" accept="application/pdf">

                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label class="required"> * أقل من 500 حرف </label>
                                <textarea required placeholder="  رسالة   " class="form-control min-hei" name="message" id="message" type="text"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="g-recaptcha" id="cap" data-sitekey="6LcFcdchAAAAALpAVjnfngkDcvpuC09tztd0sYbf"></div>
                                <button type="submit" class="btn" id="subcon" name="subcon"> يُقدِّم </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!--  careers  -->


    <!--  header  -->
    <?php $page = 'home';
    include 'footer.php'; ?>

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


        //--- File upload field on input validation ---//

        $('#file').on('change', function() {
            Object.values(this.files).forEach(function(file) {
                if (file.type != 'application/pdf') {
                    alert('Please select pdf files only');
                    return false;
                }
            })
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


            //--- File upload Pdf validation ---//



            //--- Recaptcha validation ---//

            if (grecaptcha.getResponse() == "") {

                alert("Check Your Captcha!");
                return false;
            }


        });
    </script>




</body>

</html>