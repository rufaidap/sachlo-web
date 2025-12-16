<!--  Developed by adox solutions {info@adoxsolutions.com} -->
<!DOCTYPE html>
<html>
<title>Sachlo</title>

<meta name="description" content="Sachlo">
<meta charset="utf-8">
<meta name="keywords" content="Sachlo">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/adox-layout.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/hse-detail.css">

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
                        <h3>HSE & QUALITY</h3>
                    </div>
                    <img class="lap" src="images/hsc-ban.jpg" alt="Chemical manufacturers Saudi Arabia">
                    <img class="mob" src="images/hsc-ban-mob.jpg" alt="Chemical manufacturers Saudi Arabia">
                </div>
            </div>
        </div>
    </section>



    <!--  hse detail -->
    <section class="hse_detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h3>SAFETY</h3>
                    <p>Safety at SACHLO is one of the most important aspects of our day to day operations, and the issue
                        of employee’s safety is something we take very seriously. Our team is supported with a strict
                        and efficient management system and SACHLO is committed to maintaining our high standards
                        through well-defined and carefully followed procedures that ensure national and international
                        requirements are met or exceeded in all cases. A comprehensive Occupational Health and Safety
                        Management System is in place which is compliant with revised Standard of ISO 45001:2018. The
                        Company has standardized itself in line with the International &amp; National Laws of KSA and
                        requirements of our valuable customers/stakeholders.</p>
                                            <div class="bx"><img src="images/quality-logo.jpg" alt="Chemical manufacturers Saudi Arabia"></div>
                </div>
                <div class="col-lg-4"><img src="images/hse-safety.jpg" alt="Chemical manufacturers Saudi Arabia"></div>
            </div>
        </div>
    </section>



    <!--  hse -->
    <section class="hse">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="menu">
                        <div class="active"><span class="light"></span><span>HSE</span></div>
                        <div><span class="light"></span><span>QUALITY</span></div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12">
                    <ul class="nacc">
                        <li class="active">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <a href="hse-health.php">
                                        <div class="box">
                                            <img src="images/health.jpg" alt="Chemical manufacturers Saudi Arabia" />
                                            <div class="text">
                                                <h5>HEALTH</h5>
                                            </div>
                                            <span class="overlay"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <a href="hse-safety.php">
                                        <div class="box">
                                            <img src="images/safety.jpg" alt="Chemical manufacturers Saudi Arabia" />
                                            <div class="text">
                                                <h5>SAFETY</h5>
                                            </div>
                                            <span class="overlay"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <a href="hse-environment.php">
                                        <div class="box">
                                            <img src="images/environment.jpg"
                                                alt="Chemical manufacturers Saudi Arabia" />
                                            <div class="text">
                                                <h5>ENVIRONMENT</h5>
                                            </div>
                                            <span class="overlay"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <a href="hse-detail-quality.php">
                                        <div class="box">
                                            <img src="images/health.jpg" alt="Chemical manufacturers Saudi Arabia" />
                                            <div class="text">
                                                <h5>QUALITY</h5>
                                            </div>
                                            <span class="overlay"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </section>



    <!--  careers  -->


    <!--  header  -->
    <?php $page = 'home';
  include 'footer.php'; ?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    // Acc
    $(document).ready(function() {
        var numberIndex = $(".hse .menu div").index();
        ///alert(numberIndex);
        if (!$(".hse .menu div").is("active")) {
            $(".hse .menu div").removeClass("active");
            $(".hse ul li").removeClass("active");

            $(".hse .menu div").addClass("active");
            $(".hse ul").find("li:eq(" + numberIndex + ")").addClass("active");

            var listItemHeight = $(".hse ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            // alert(listItemHeight);
            $(".hse ul").height(listItemHeight + "px");
        }


    });
    $(document).on("click", ".hse .menu div", function() {
        var numberIndex = $(this).index();
        //alert(numberIndex);
        if (!$(this).is("active")) {
            $(".hse .menu div").removeClass("active");
            $(".hse ul li").removeClass("active");

            $(this).addClass("active");
            $(".hse ul").find("li:eq(" + numberIndex + ")").addClass("active");

            var listItemHeight = $(".hse ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            // alert(listItemHeight);
            $(".hse ul").height(listItemHeight + "px");
        }
    });
    </script>




</body>

</html>