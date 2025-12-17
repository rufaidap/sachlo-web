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
                                <input required placeholder="Organization" class="form-control" name="name"
                                    type="text" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Contact Person" class="form-control" name="name"
                                    type="text" />
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input required placeholder="Address" class="form-control" name="name" type="text" />
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input required placeholder="City" class="form-control" name="name" type="text" />
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input required placeholder="Country" class="form-control" name="name" type="text" />
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input required placeholder="Postcode" class="form-control" name="name" type="text" />
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Email" class="form-control" name="name" type="text" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Telephone" class="form-control" name="email"
                                    type="email" />
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="Goods or Service Description" class="form-control"
                                    name="cpy" type="text" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input required placeholder="What year did your company commence operation?"
                                    class="form-control" name="cpy" type="text" />
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input required placeholder="Have you worked with SACHLO previously"
                                    class="form-control" name="cpy" type="text" />
                            </div>

                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="g-recaptcha" id="cap"
                                    data-sitekey="6LcpTaYbAAAAAF0lUOD5BS3Fikr2WA3Kvx5QLpbW"></div>
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

    $('#submit1').click(function() {


        if (grecaptcha.getResponse() == "") {


            alert("Check Your Captcha!");

            return false;

        }


    });
    </script>




</body>

</html>