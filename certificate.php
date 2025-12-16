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
<link rel="stylesheet" href="css/certificate.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!--Font-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">


</head>

<body>



    <!--  header  -->
    <?php $page = '';
  include 'header.php'; ?>



    <!--  inner-banner  -->
    <section class="inner-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="txt">
                        <h3>CERTIFICATE</h3>
                    </div>
                    <img class="lap" src="images/certificate-ban.jpg">
                    <img class="mob" src="images/certificate-ban-mob.jpg">
                </div>
            </div>
        </div>
    </section>



    <!--  certificate -->
    <section class="certificate">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="gal popup-gallery">
                        <a href="images/cer_1.jpg">
                            <img src="images/cer_1.jpg">
                            <div class="text">
                                <h5>ISO 9001 : 2015</h5>
                            </div>
                            <span class="overlay"></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gal popup-gallery">
                        <a href="images/cer_2.jpg">
                            <img src="images/cer_2.jpg">
                            <div class="text">
                                <h5>ISO : 14001 : 2015</h5>
                            </div>
                            <span class="overlay"></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gal popup-gallery">
                        <a href="images/cer_3.jpg">
                            <img src="images/cer_3.jpg">
                            <div class="text">
                                <h5>ISO : 45001 : 2018</h5>
                            </div>
                            <span class="overlay"></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gal popup-gallery">
                        <a href="images/cer_4.jpg">
                            <img src="images/cer_4.jpg">
                            <div class="text">
                                <h5>Chlorine institute</h5>
                            </div>
                            <span class="overlay"></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!--  careers  -->


    <!--  header  -->
    <?php $page = 'home';
  include 'footer.php'; ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script>
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a class="gall" href="%url%">The image #%curr%</a> ',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small></small>';
                }
            }
        });
    });
    </script>



</body>

</html>