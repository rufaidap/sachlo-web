



<?php

 

if (isset($_POST["subcon"])) {


     // site-key : 6LcF73QrAAAAAH5dj9hBGuRDVg2dBFsJJB71p6qm //  

     //secret : 6LcF73QrAAAAAHkEy6C5YcU5yO5cwjbszCt3cjr- //  


    $organization = $_POST['organization'];
    $person = $_POST['person'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $company_operation = $_POST['company_operation'];
    $work_status = $_POST['work_status'];
    
    


  

        if ($error_val == 0) {


        $table = '<table><tr><th colspan="3" style="text-align:center;font-size:20px;color:#fff;background-color:#f2f2f2">Sachlo Procurement</th></tr>';



        $table .= '<tr><th style="text-align:left;font-size:20px;">Organization</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">' . $organization . '</td></tr>';


        $table .= '<tr><th style="text-align:left;font-size:20px;">Contact person</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $person . '</td></tr>';

        $table .= '<tr><th style="text-align:left;font-size:20px;">Address</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $address . '</td></tr>';
        $table .= '<tr><th style="text-align:left;font-size:20px;">City</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $city . '</td></tr>';

$table .= '<tr><th style="text-align:left;font-size:20px;">Country</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $country . '</td></tr>';

$table .= '<tr><th style="text-align:left;font-size:20px;">Postcode</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $postcode . '</td></tr>';
$table .= '<tr><th style="text-align:left;font-size:20px;">email</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $email . '</td></tr>';
$table .= '<tr><th style="text-align:left;font-size:20px;">Telephone</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $phone . '</td></tr>';
$table .= '<tr><th style="text-align:left;font-size:20px;">Goods or service description</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $description . '</td></tr>';
$table .= '<tr><th style="text-align:left;font-size:20px;">Company commence operation</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $company_operation . '</td></tr>';
$table .= '<tr><th style="text-align:left;font-size:20px;">Worked in Sachlo?</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">
' . $work_status . '</td></tr>';

        $table .= '</table>';


        $header = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: Sachlo<noreply@sachlo.com>' . "\r\n";

        $title = 'Sachlo Procurement';



        $message = '<div style="background:#f2f2f2; padding:30px; font-family:calibri; font-size:20px; color:#666666; padding-top:60px"><div style="width:600px; margin:0 auto; background:#fff;  padding:20px; position:relative; border-radius:10px;"><div style="position:absolute; left: 240px; top: -50px;padding-bottom: 10px;"><a href="#" style="color:#666; font-size:25px; text-decoration:none; font-family:tahoma"> </a></div>' . $table . '</div></div></div>';





        $mail_send = 'rufaida@adoxsolutions.com,info@sachlo.com';

        if (mail($mail_send, $title, $message, $header)) {


            $flash_msg = 'Mail Send Successfully';
        }
    }
}





?>



<!--  Developed by adox solutions {info@adoxsolutions.com} -->
<!DOCTYPE html>
<html>
<title>Leading chemical manufacturing company in Saudi Arabia and Mena Region</title>

<meta name="description"
    content="Manufacturers, Exporters and Suppliers of Liquid Chlorine in Saudi Arabia, Sodium Hypo Chlorite in Saudi Arabia, Caustic Soda in Saudi Arabia , Caustic Soda Flakes in Saudi Arabia offered by Sachlo, Saudi Arabia">
<meta charset="utf-8">
<meta name="keywords" content="Sachlo">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/adox-layout.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/procurement.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!--Font-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">


</head>

<body>



    <!--  header  -->
    <?php $page = 'procurement';
  include 'header.php'; ?>



    <!--  inner-banner  -->
    <section class="inner-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="txt">
                        <h3>PROCUREMENT</h3>
                    </div>
                    <img class="lap" src="images/procurement-ban.jpg">
                    <img class="mob" src="images/procurement-ban-mob.jpg">
                </div>
            </div>
        </div>
    </section>



    <!--  career -->
    <section class="career">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h3>PROCUREMENT <span>FORM</span></h3>
                    <p>Welcome our Suppliers and Contractors. If you want to offer your product &services to Sachlo you
                        can do this by submitting your details in the following form. We look forward to working with
                        you.</p>
                    <p>For further information or follow up please contact the following Number. <a
                            href="tel://966552407275">+966 55 2407275</a></p>
                </div>
            </div>

            <div class="row top">
                <div class="col-lg-12">
                    <form method="post">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Organization" class="form-control" name="organization"
                                    type="text" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Contact Person" class="form-control" name="person"
                                    type="text" />
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input required placeholder="Address" class="form-control" name="address" type="text" />
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input required placeholder="City" class="form-control" name="city" type="text" />
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input required placeholder="Country" class="form-control" name="country" type="text" />
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input required placeholder="Postcode" class="form-control" name="postcode" type="text" />
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Email" class="form-control" name="email" type="email" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Telephone" class="form-control" name="phone"
                                    type="tel" />
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Goods or Service Description" class="form-control"
                                    name="description" type="text" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="What year did your company commence operation?"
                                    class="form-control" name="company_operation" type="text" />
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input required placeholder="Have you worked with SACHLO previously"
                                    class="form-control" name="work_status" type="text" />
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12">
                               <div class="g-recaptcha" id="cap"
                                    data-sitekey="6LcFcdchAAAAALpAVjnfngkDcvpuC09tztd0sYbf"></div>
                            </div>

                            <div class="col-lg-12 col-md-6 col-sm-12">
                                
                                <button type="submit" class="btn" id="subcon" name="subcon">SUBMIT</button>
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




    <!--  captcha  -->
    <script>
    $('#mobile').on('input', function() {
        var mobile = $('#mobile').val();
        //
        if (!($.isNumeric(mobile))) {
            alert('Please enter a valid mobile number');
            $('#mobile').val("");
        }

    });
    </script>
    <script type="text/javascript">
    $('#cap').click(function() {
        grecaptcha.reset();

    });

    $('#subcon').click(function() {


        if (grecaptcha.getResponse() == "") {


            alert("Check Your Captcha!");

            return false;

        }


    });
    </script>
<script>
document.querySelector('form').addEventListener('submit', function (e) {
    const phoneInput = document.querySelector('input[name="phone"]');
    const phonePattern = /^\+?[0-9\s\-]{10,15}$/;

    if (!phonePattern.test(phoneInput.value.trim())) {
        alert("Please enter a valid phone number.");
        phoneInput.focus();
        e.preventDefault(); // Prevent form submission
    }
});
</script>




</body>

</html>