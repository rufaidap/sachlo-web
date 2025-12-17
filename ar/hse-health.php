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
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>

<body style="direction: rtl;">



    <!--  header  -->
    <?php $page = '';
    include 'header.php'; ?>



    <!--  inner-banner  -->
    <section class="inner-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="txt">
                        <h3> الصحة والسلامة والجودة </h3>
                    </div>
                    <img class="lap" src="images/hsc-ban.jpg" alt="Avatar">
                    <img class="mob" src="images/hsc-ban-mob.jpg" alt="Avatar">
                </div>
            </div>
        </div>
    </section>



    <!--  hse detail -->
    <section class="hse_detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 text-right">
                    <h3> الصحة </h3>
                    <p> لدى ساكلو نظام قوي لإدارة الصحة المهنية لضمان الحفاظ على صحة ورفاهية موظفينا. نعتقد أن رفاهية
                        موظفينا أمر بالغ الأهمية لنمو مؤسستنا ، وتغطي بروتوكولات الإدارة الصحية لدينا العديد من العناصر
                        المختلفة للمساعدة في حماية فريقنا والعناية به أثناء عملهم في ساكلو. يشمل نظام الإدارة الصحية
                        الحفاظ على السمع ، وبيئة العمل المكتبية ، وحماية الجهاز التنفسي ، والفحوصات الطبية ، والتواصل
                        بشأن المخاطر وجلسات التوعية والمبادرات الأخرى التي تهدف إلى دعم صحة ورفاهية موظفينا. </p>
                                            <div class="bx"><img src="images/quality-logo.jpg" alt="Chemical manufacturers Saudi Arabia"></div>
                </div>
                <div class="col-lg-4"><img src="images/hse-health.jpg"></div>
            </div>
        </div>
    </section>



    <!--  hse -->
    <section class="hse">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="menu text-right">
                        <div class="active"><span class="light"></span><span> الصحة والسلامة </span></div>
                        <div><span class="light"></span><span> والجودة </span></div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12">
                    <ul class="nacc">
                        <li class="active">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <a href="hse-health.php">
                                        <div class="box">
                                            <img src="images/health.jpg" / alt="Chemical manufacturers Saudi Arabia">
                                            <div class="text">
                                                <h5> الصحة </h5>
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
                                                <h5> السلامة </h5>
                                            </div>
                                            <span class="overlay"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <a href="hse-environment.php">
                                        <div class="box">
                                            <img src="images/environment.jpg" alt="Chemical manufacturers Saudi Arabia" />
                                            <div class="text">
                                                <h5> البيئة </h5>
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
                                                <h5> الجودة </h5>
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