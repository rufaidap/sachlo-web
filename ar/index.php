<!--  Developed by adox solutions {info@adoxsolutions.com} -->
<?php
require '../graphql.php';

$newsQuery = '
query GetNews($size: Int, $page: Int, $search: String, $status: String) {
  getNews(size: $size, page: $page, search: $search, status: $status) {
    data {
      title
      title_ar
      slug
      thumbnail_image
      banner_image
      short_description
      short_description_ar
      published_date
      created_at
    }
  }
}';
$newsResponse = graphqlRequest($newsQuery, ['size' => 3]);
$homeNewsList = $newsResponse['data']['getNews']['data'] ?? [];
?>
<!DOCTYPE html>
<html>

<title>Leading chemical manufacturing companies in Saudi Arabia</title>

<meta name="description"
    content="Chemical Manufacturers, Exporters and Suppliers of Liquid Chlorine in Saudi Arabia, Sodium Hypo Chlorite in Saudi Arabia, Caustic Soda in Saudi Arabia , Caustic Soda Flakes in Saudi Arabia offered by Sachlo, Saudi Arabia">
<meta charset="utf-8">
<meta name="keywords"
    content="Chemical manufacturers Saudi Arabia, Chemical manufacturing companies Saudi Arabia, Chemical Companies Saudi Arabia ">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/adox-layout.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/adox-home.css">

<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<!--Font-->
<link
    href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">


<!--Font-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">



<meta name="google-site-verification" content="BhqRSdPWhgbkXNzPqVUEiGnv9BvpaQ8vlb-VQs0nEjY" />



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128566164-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-128566164-1');
</script>


</head>

<body style="direction: rtl;">



    <!--  header  -->
    <?php $page = 'home';
    include 'header.php'; ?>

    <a href=" https://wa.me/966554637242" target="blank " title="Message on WhatsApp"><button class="wppBtn"><i
                class="demo-icon icon-whatsapp">&#xf232;</i></button></a>


    <!--  banner  -->
    <section class="banner">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12 lap">
                    <div class="nw">
                        <a href="news.php">
                            <figure class="box">
                                <img src="images/ban-news-1.jpg" alt=" Liquid Chlorine Manufacturer Saudi Arabia" />
                                <div class="text text-right">
                                    <h4>SEP 23, 2022</h4>
                                    <h5> أحدث الأخبار </h5>
                                    <h6> تدشين الموقع الألكتروني الجديد لساكلو السعودية </h6>
                                    <p> يسعدنا أن نعلن عن الإطلاق </p>
                                </div>
                                <span class="overlay"></span>
                            </figure>
                        </a>
                    </div>
                    <div class="vid">
                        <div class="row center">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <h4 class="text-right"> شاهد مقاطع <br> الفيديو الخاصة بشركتنا </h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4"><a href="#">
                                    <div class="btn"><i class="demo-icon icon-plus">&#xe812;</i></div>
                                </a></div>
                        </div>
                    </div>
                    <div class="video wow fadeInUp" data-wow-duration="2s">
                        <div class="ig">
                            <img src="images/video.jpg" alt="  Liquid Chlorine Supplier Saudi Arabia " />
                            <div class="text">
                                <button class="lets-play" data-video="video/Sachlo_Profile.mp4"><img
                                        src="images/play.png" alt="Chemical companies in Saudi Arabia "></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="slider">
                        <div class="slide_viewer">
                            <div class="slide_group">

                                <div class="slide eff">
                                    <div class="slide__text">
                                        <h2 class="text-right"> مرحباً </h2>
                                        <h1> بك بالمصنع السعودي للكلور والقلويات </h1>
                                        <p class="text-right"> ساكلو </p>
                                        <a href="about-us.php" class="btn float-right"> عرض المزيد
                                            <i class="demo-icon icon-left-arrow">&#xe81d;</i></a>
                                    </div>
                                    <img class="lap full zoom" src="images/banner-1.jpg"
                                        alt=" Liquid Chlorine Supplier Saudi Arabia ">
                                    <img class="mob" src="images/banner-1-mob.jpg"
                                        alt="Liquid Chlorine Manufacturer Saudi Arabia">
                                </div>

                                <div class="slide eff">
                                    <div class="slide__text">
                                        <h2 class="text-right"> ساكلو </h2>
                                        <h1> عضو في قروب ميد كيم</h1>

                                        <a href="about-us.php" class="btn float-right"> عرض المزيد
                                            <i class="demo-icon icon-left-arrow">&#xe81d;</i></a>
                                    </div>
                                    <img class="lap full zoom" src="images/banner-2.jpg"
                                        alt=" Liquid Chlorine Supplier Saudi Arabia ">
                                    <img class="mob" src="images/banner-1-mob.jpg"
                                        alt="Liquid Chlorine Manufacturer Saudi Arabia">
                                </div>


                                <div class="slide eff">
                                    <div class="slide__text">
                                        <h2 class="text-right"> ساكلو </h2>
                                        <h1 class="text-right">هي واحدة من أكبر الشركات المصنعة لـ <br> الكيماويات
                                            الصناعية
                                            في المملكة العربية السعودية
                                        </h1>

                                        <a href="about-us.php" class="btn float-right"> عرض المزيد
                                            <i class="demo-icon icon-left-arrow">&#xe81d;</i></a>
                                    </div>
                                    <img class="lap full zoom" src="images/banner-3.jpg"
                                        alt=" Liquid Chlorine Supplier Saudi Arabia ">
                                    <img class="mob" src="images/banner-1-mob.jpg"
                                        alt="Liquid Chlorine Manufacturer Saudi Arabia">
                                </div>

                                <div class="slide eff">
                                    <div class="slide__text">
                                        <h2 class="text-right"> ساكلو </h2>
                                        <h1 class="text-right"> تصنع مواد كيميائية عالية الجودة
                                            المنتجات داخل المملكة وتصديرها إلى الخارج-
                                        </h1>
                                        <div class="d-flex">
                                            <ul class="">
                                                <li> الكلور المسال </li>
                                                <li>الصودا الكاوية </li>
                                                <li> رقائق الصودا الكاوية </li>
                                                <li> حامض الهيدروكلوريك </li>
                                            </ul>
                                            <ul class="">
                                                <li> هيبوكلوريت الصوديوم % 12 </li>
                                                <li> كلوريد الكالسيوم % 38 -35 سائل </li>
                                                <li> كلوريد الكالسيوم % - 77 رقائق </li>
                                                <li>كلوريد الكالسيوم % - 94 حبيبات </li>
                                            </ul>                                                
                                        </div>                                        
                                        <a href="products.php" class="btn float-right"> عرض المزيد
                                            <i class="demo-icon icon-left-arrow">&#xe81d;</i></a>
                                    </div>
                                    <img class="lap full zoom" src="images/banner-4.jpg"
                                        alt=" Liquid Chlorine Supplier Saudi Arabia ">
                                    <img class="mob" src="images/banner-1-mob.jpg"
                                        alt="Liquid Chlorine Manufacturer Saudi Arabia">
                                </div>


                                <div class="slide eff">
                                    <div class="slide__text">
                                        <h2 class="text-right"> ساكلو </h2>
                                        <h1 class="text-right"> هي واحدة من أكبر الشركات المصنعة لـ <br> الكيماويات
                                            الصناعية في المملكة
                                            العربية السعودية </h1>
                                        <a href="about-us.php" class="btn float-right"> عرض المزيد
                                            <i class="demo-icon icon-left-arrow">&#xe81d;</i></a>
                                    </div>
                                    <img class="lap full zoom" src="images/banner-5.jpg"
                                        alt="chemical manifactiring company in Saudi Arabia">
                                    <img class="mob" src="images/banner-5-mob.jpg"
                                        alt="Chemical manufacturing companies Saudi Arabia">
                                </div>


                                <!--<div class="slide eff">-->
                                <!--    <div class="slide__text">-->
                                <!--        <h2 class="text-right"> ساكلو </h2>-->
                                <!--        <h1 class="text-right"> هي واحدة من أكبر الشركات المصنعة لـ <br> الكيماويات-->
                                <!--            الصناعية في المملكة-->
                                <!--            العربية السعودية </h1>-->

                                <!--        <a href="about-us.php" class="btn float-right"> عرض المزيد-->
                                <!--            <i class="demo-icon icon-left-arrow">&#xe81d;</i></a>-->
                                <!--    </div>-->
                                <!--    <img class="lap full zoom" src="images/banner-6.jpg"-->
                                <!--        alt="chemical manifactiring company in Saudi Arabia">-->
                                <!--    <img class="mob" src="images/banner-6-mob.jpg"-->
                                <!--        alt="Chemical manufacturing companies Saudi Arabia">-->
                                <!--</div>-->




                            </div>
                        </div>
                    </div>


                    <div class="slide_buttons"></div>
                    <div class="line"></div>
                    <div class="directional_nav">
                        <div class="previous_btn btn" title="Previous"><i class="demo-icon icon-left-arrow">&#xe81d;</i>
                        </div>
                        <div class="next_btn btn" title="Next"><i class="demo-icon icon-left-arrow">&#xe81e;</i></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mob">
                    <div class="nw">
                        <a href="news.php">
                            <figure class="box">
                                <img src="images/ban-news-1.jpg"
                                    alt=" chemical manifactiring company in Saudi Arabia" />
                                <div class="text">
                                    <h4>SEP 23, 2021</h4>
                                    <h5> أحدث الأخبار </h5>
                                    <h6> تدشين الموقع الألكتروني الجديد لساكلو السعودية </h6>
                                    <p> يسعدنا أن نعلن عن الإطلاق </p>
                                </div>
                                <span class="overlay"></span>
                            </figure>
                        </a>
                    </div>
                    <div class="vid">
                        <div class="row center">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <h4> شاهد مقاطع <br> الفيديو الخاصة بشركتنا </h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4"><a href="#">
                                    <div class="btn"><i class="demo-icon icon-plus">&#xe812;</i></div>
                                </a></div>
                        </div>
                    </div>
                    <div class="video wow fadeInUp" data-wow-duration="2s">
                        <div class="ig">
                            <img src="images/video.jpg" alt="  Liquid Chlorine Supplier Saudi Arabia " />
                            <div class="text">
                                <button class="lets-play" data-video="video/Sachlo_Profile.mp4"><img
                                        src="images/play.png" alt="Chemical companies in Saudi Arabia "></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--  about  -->
    <section class="about">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12 ce">
                    <img class="homeimg" src="images/ios.png">

                    <h3 class="ios" style="text-align: center;"> هي شركة حاصلة على ISO <br> وتخدم العملاء &nbsp; <br>
                        منذ عام <span>2009</span>
                    </h3>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 text-right">
                    <h3 class=""> حول <span> ساكلو </span></h3>
                    <p> تعتمد الغالبية العظمى من الصناعات ، مثل المعادن والمنسوجات والورق والجلود والسكر والبلاستيك
                        والمطاط والسيراميك والزجاج والصابون والأسمدة والمشروبات وزيوت الطعام والأدوية ومجموعة أخرى ،
                        بشكل كبير على المواد الكيميائية. تعد الصناعة الكيميائية في جميع أنحاء العالم مساهمًا رئيسيًا في
                        الاقتصاد الوطني ، حيث تلعب دورًا مباشرًا وغير مباشر </p>
                    <p>لأكثر من 10 سنوات ، سعت ساكلو جاهدة لخلق قيمة من خلال محفظتها المتنوعة التي يحركها السوق من
                        المواد الكيميائية الكلور والقلوية. الاستفادة من ميزة التكلفة ، والنطاق ، والحضور الجغرافي -
                        جنبًا إلى جنب مع التعاون الوثيق مع العملاء وخبرة البحث والتطوير الرائدة في الصناعة - تقدم ساكلو
                        حلولًا متباينة تلبي احتياجات السوق غير الملباة. تستخدم ساكلو أحدث التقنيات من الشركات الرائدة في
                        العالم في صناعاتها</p>
                    <a href="about-us.php" class="btn"> تعلم أكثر <i class="demo-icon icon-left-arrow">&#xe81d;</i></a>
                </div>

            </div>
        </div>
    </section>


    <!--  hse  -->
    <section class="hse">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h3> الصحة والسلامة <span> والجودة </span></h3>
                    <p> كمنظمة ، نحن ملتزمون بتطوير جميع موظفينا من خلال التدريب والتطوير بالإضافة إلى برامج مساعدة
                        الموظفين المصممة خصيصًا لتلبية الاحتياجات الفردية وتركز على تحقيق الأهداف المشتركة. </p>
                </div>
            </div>

            <div class="row wid">

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="bx cl_1"><a href="hse-health.php">
                            <div><i class="demo-icon icon-cardiogram">&#xe817;</i></div>
                            <h4> الصحة </h4>
                    </div></a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="bx cl_2"><a href="hse-safety.php">
                            <div><i class="demo-icon icon-cap">&#xe818;</i></div>
                            <h4> السلامة </h4>
                    </div></a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="bx cl_3"><a href="hse-environment.php">
                            <div><i class="demo-icon icon-plant">&#xe819;</i></div>
                            <h4> البيئة </h4>
                    </div></a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="bx cl_4"><a href="hse-detail-quality.php">
                            <div><i class="demo-icon icon-medal">&#xe81a;</i></div>
                            <h4> الجودة </h4>
                    </div></a>
                </div>

                <div class="col-lg-12 ce"><a href="hse-quality.php" class="btn"> تعلم أكثر
                        <i class="demo-icon icon-left-arrow">&#xe81d;</i></a>

                </div>

            </div>
    </section>


    <!--  product  -->
    <section class="product">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 text-right">
                    <h3> المنتجات <span> والخدمات </span></h3>
                    <p> نرحب بالموردين والمقاولين لدينا. إذا كنت ترغب في تقديم منتجك وخدماتك إلى ساكلو ، فيمكنك القيام
                        بذلك عن طريق إرسال التفاصيل الخاصة بك في النموذج التالي. ونحن نتطلع إلى العمل معكم. </p>
                    <a href="products.php" class="btn mb-4"> منتجاتنا <i
                            class="demo-icon icon-left-arrow">&#xe81d;</i></a>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4 text-right">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/pro-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> الكلور المسال </h5>
                                <p class="card-text"> في كل مرة تشرب فيها كوبًا من الماء أو تقرأ الأخبار أو ترتدي
                                    معطففيفي كل مرة تشرب فيها كوبًا من الماء أو تقرأ الأخبار أو ترتدي معطف واق من المطر
                                    أو تنظف أسنانك أو تقود سيارتك ...</p>

                                <a href="liquefied-chlorine-manufacturer.php" class="btn btn-link p-0 mb-0"> عرض
                                    التفاصيل
                                    <i class="bi bi-arrow-left"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/pro-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> الصودا الكاوية </h5>
                                <p class="card-text"> ساكلوهي شركة رائدة في تصنيع وتوريد الصودا الكاوية في المملكة
                                    العربية السعودية ومنطقة الشرق الأوسط وشمال إفريقيا. مهمتنا هي تصنيع الصودا الكاوية
                                    عالية الجودة. تحدث هذه ... </p>

                                <a href="caustic-soda-manufacturer.php" class="btn btn-link p-0 mb-0"> عرض التفاصيل
                                    <i class="bi bi-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/pro-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> رقائق الصودا الكاوية </h5>

                                <p class="card-text"> ساكلوهي الشركة الرائدة في تصنيع رقائق الصودا الكاوية في المملكة
                                    العربية السعودية ومنطقة الشرق الأوسط وشمال إفريقيا. يتم احتضان منتجاتنا في السوق
                                    بسبب الإنتاج الكبير ... </p>

                                <a href="caustic-soda-flakes.php" class="btn btn-link p-0 mb-0"> عرض التفاصيل
                                    <i class="bi bi-arrow-left"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 text-right">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/pro-7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> كلوريد الكالسيوم % - 77 رقائق </h5>
                                <p class="card-text"> كمنظمة ، نحن ملتزمون بتطوير جميع موظفينا من خلال التدريب والتطوير
                                    بالإضافة إلى برامج مساعدة الموظفين المصممة خصيصًا لتلبية الاحتياجات الفردية وتركز
                                    على تحقيق الأهداف المشتركة </p>


                                <a href="calcium-chloride_77-78-flakes.php" class="btn btn-link p-0 mb-0"> عرض التفاصيل
                                    <i class="bi bi-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/pro-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> هيبوكلوريت الصوديوم % 12 </h5>
                                <p class="card-text"> ساكلوهي شركة رائدة في تصنيع مادة هيبوكلوريت الصوديوم في المملكة
                                    العربية السعودية ومنطقة الشرق الأوسط وشمال إفريقيا. بمساعدة فريقنا من ذوي الخبرة
                                    واستخدام أحدث تقنيات ... </p>


                                <a href="sodium-hypochlorite.php" class="btn btn-link p-0 mb-0"> عرض التفاصيل
                                    <i class="bi bi-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/pro-6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> كلوريد الكالسيوم % - 38-35 سائل </h5>
                                <p class="card-text"> كمنظمة ، نحن ملتزمون بتطوير جميع موظفينا من خلال التدريب والتطوير
                                    بالإضافة إلى برامج مساعدة الموظفين المصممة خصيصًا لتلبية الاحتياجات الفردية وتركز
                                    على تحقيق الأهداف المشتركة </p>

                                <a href="calcium-chloride-36-liquid.php" class="btn btn-link p-0 mb-0"> عرض التفاصيل
                                    <i class="bi bi-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>





    <!--  news  -->
    <section class="news">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h3> الأخبار و <span> الإعلام </span></h3>
                    <p> كمنظمة ، نحن ملتزمون بتطوير جميع موظفينا من خلال التدريب والتطوير بالإضافة إلى برامج مساعدة
                        الموظفين المصممة خصيصًا لتلبية الاحتياجات الفردية وتركز على تحقيق الأهداف المشتركة </p>
                </div>
            </div>

            <div class="row">

                <?php if (!empty($homeNewsList)): ?>
                    <?php foreach ($homeNewsList as $index => $news): ?>
                        <div class="col-lg-4 col-md-6 <?php echo ($index === 1) ? 'col-post-center' : ''; ?>">
                            <div class="bx text-right">
                                <a href="news-detail.php?slug=<?php echo htmlspecialchars($news['slug']); ?>" class="grid__image">
                                    <?php 
                                        $imgSrc = 'images/nws-fr-1.jpg';
                                        if (!empty($news['thumbnail_image'])) {
                                            $path = $news['thumbnail_image'];
                                            if (!filter_var($path, FILTER_VALIDATE_URL) && strpos($path, '/') !== 0 && strpos($path, '../') !== 0) {
                                                $imgSrc = '../' . $path;
                                            } else {
                                                $imgSrc = $path;
                                            }
                                        } elseif (!empty($news['banner_image'])) {
                                            $path = $news['banner_image'];
                                            if (!filter_var($path, FILTER_VALIDATE_URL) && strpos($path, '/') !== 0 && strpos($path, '../') !== 0) {
                                                $imgSrc = '../' . $path;
                                            } else {
                                                $imgSrc = $path;
                                            }
                                        }
                                        
                                        $dateVal = !empty($news['published_date']) ? $news['published_date'] : $news['created_at'];
                                        if (is_numeric($dateVal) && strlen((string)$dateVal) > 10) {
                                            $dateVal = $dateVal / 1000;
                                        }
                                        $displayDate = date('M d, Y', (int)$dateVal);
                                        
                                        $title = !empty($news['title_ar']) ? $news['title_ar'] : $news['title'];
                                        $desc = !empty($news['short_description_ar']) ? $news['short_description_ar'] : $news['short_description'];
                                    ?>
                                    <img src="<?php echo htmlspecialchars($imgSrc); ?>" alt="<?php echo htmlspecialchars($title); ?>">
                                    <div class="post-date"><?php echo $displayDate; ?></div>
                                    <div class="hov">
                                        <p> عرض المزيد </p>
                                    </div>
                                </a>
                                <div class="tx">
                                    <h4><a href="news-detail.php?slug=<?php echo htmlspecialchars($news['slug']); ?>" style="<?php echo ($index === 1) ? '' : 'color: #1c1d1d; text-decoration: none;'; ?>"><?php echo htmlspecialchars($title); ?></a></h4>
                                    <p><?php echo htmlspecialchars($desc); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center p-5">
                        <p> لا توجد أخبار متاحة حاليا. </p>
                    </div>
                <?php endif; ?>

                <div class="col-lg-12 ce"><a href="news.php" class="btn"> تعلم أكثر
                        <i class="demo-icon icon-left-arrow">&#xe81d;</i></a></div>
            </div>


        </div>
    </section>




    <!--  brochure  -->
    <?php $page = 'home';
    include 'include-brochure.php'; ?>


    <!--  careers  -->



    <!--  header  -->
    <?php $page = 'home';
    include 'footer.php'; ?>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).scroll(function() {
        var i = $(this).scrollTop();
        if (i > 100) {
            $('.wppBtn').fadeIn();
        } else {
            $('.wppBtn').fadeOut();
        }
    });
    </script>



    <!-- banner slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
    $('.slider').each(function() {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;

            advance();

            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }

            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');

            if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }

            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
            });
            $group.animate({
                left: animateLeft
            }, function() {
                $slides.eq(currentIndex).css({
                    display: 'none'
                });
                $slides.eq(newIndex).css({
                    left: 0
                });
                $group.css({
                    left: 0
                });
                currentIndex = newIndex;
            });
        }

        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 5000);
        }

        $('.next_btn').on('click', function() {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        });

        $('.previous_btn').on('click', function() {
            if (currentIndex !== 0) {
                move(currentIndex - 1);
            } else {
                move(3);
            }
        });

        $.each($slides, function(index) {
            var $button = $('<a class="slide_btn">&bull;</a>');

            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function() {
                move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });

        advance();
    });
    </script>



    <!--  how slider  -->
    <script type="text/javascript">
    const carouselSlider = element => {
        let carousel = document.getElementById("carousel"),
            carouselSlides = Array.from(carousel.querySelectorAll(".carousel__item"));
        controls(carousel, carouselSlides, element.keyboard, Math.max(1000, element.delay));
    };

    const controls = (carousel, carouselSlides, keyboard, delay) => {
        let prevControl = carousel.querySelector(".carousel__control--prev"),
            nextControl = carousel.querySelector(".carousel__control--next"),
            indicators = carousel.querySelector(".carousel__indicators"),
            lastIndex = 0,
            currentIndex = 0,
            mouseEnter = false,
            direction,
            direction2,
            interval;

        const autoSlide = () => {
            interval = setInterval(() => {
                lastIndex = currentIndex;
                currentIndex = ++currentIndex % carouselSlides.length;
                translate(
                    carousel,
                    currentIndex,
                    lastIndex,
                    carouselSlides,
                    "next",
                    "left"
                );
            }, delay);
        };

        autoSlide();

        const clearInterv = () => {
            clearInterval(interval);
        };

        const arrowKeys = () => {
            window.addEventListener("keydown", e => {
                if (e.key === "ArrowLeft") {
                    prevControl.click();
                } else if (e.key === "ArrowRight") {
                    nextControl.click();
                }
            });

            window.addEventListener("keyup", e => {
                clearInterv();
                autoSlide();
                if (mouseEnter) {
                    console.log(mouseEnter);
                    clearInterv();
                }
            });
        };

        if (JSON.parse(keyboard)) {
            arrowKeys();
        }

        carousel.addEventListener("mouseenter", (e) => {
            mouseEnter = true;
            clearInterv();
        });

        carousel.addEventListener("mouseleave", () => {
            mouseEnter = false;
            autoSlide();
        });

        prevControl.addEventListener("click", () => {
            if (carousel.dataset.flag === "true") return;
            direction = "prev";
            direction2 = "right";
            lastIndex = currentIndex;
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = carouselSlides.length - 1;
            }

            translate(
                carousel,
                currentIndex,
                lastIndex,
                carouselSlides,
                direction,
                direction2
            );
        });

        nextControl.addEventListener("click", () => {
            if (carousel.dataset.flag === "true") return;
            direction = "next";
            direction2 = "left";
            lastIndex = currentIndex;
            currentIndex = ++currentIndex % carouselSlides.length;

            translate(
                carousel,
                currentIndex,
                lastIndex,
                carouselSlides,
                direction,
                direction2
            );
        });

        indicators.addEventListener("click", e => {
            let target = e.target;

            if (target.tagName === "LI") {
                if (
                    carousel.dataset.flag === "true" ||
                    target.classList.contains("active")
                ) {
                    return;
                }
                lastIndex = currentIndex;
                currentIndex = target.dataset.slideTo;

                if (lastIndex > currentIndex) {
                    direction = "prev";
                    direction2 = "right";
                } else if (lastIndex < currentIndex) {
                    direction = "next";
                    direction2 = "left";
                }

                translate(
                    carousel,
                    currentIndex,
                    lastIndex,
                    carouselSlides,
                    direction,
                    direction2,
                    target
                );
            }
        });
    };

    const translate = (
        carousel,
        currentIndex,
        lastIndex,
        carouselSlides,
        direction,
        direction2,
        delay
    ) => {
        carousel.dataset.flag = true;

        carouselSlides[currentIndex].classList.add(
            "active",
            `carousel__item--${direction}`
        );

        const animDirection = () => {
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    carouselSlides[lastIndex].classList.add(
                        `carousel__item--${direction2}`
                    );
                    carouselSlides[currentIndex].classList.add(
                        "active",
                        `carousel__item--${direction}`,
                        `carousel__item--${direction2}`
                    );
                    resolve();
                }, 100);
            });
        };

        animDirection().then(() => {
            setTimeout(() => {
                carouselSlides[lastIndex].classList.remove(
                    "active",
                    `carousel__item--${direction}`,
                    `carousel__item--${direction2}`
                );
                carouselSlides[currentIndex].classList.remove(
                    `carousel__item--${direction}`,
                    `carousel__item--${direction2}`
                );
                carousel.dataset.flag = false;
            }, 700);
        });

        activeIndicators(carousel, currentIndex);
    };

    const activeIndicators = (carousel, currentIndex) => {
        let indicators = Array.from(
            carousel.querySelectorAll(".carousel__indicators li")
        );
        indicators.filter(
            indicator =>
            indicator === indicators[currentIndex] ?
            indicator.classList.add("active") :
            indicator.classList.remove("active")
        );
    };

    carouselSlider({
        keyboard: "true", // active arrows key
        delay: 4000 // 1000ms is default
    });
    </script>



    <!--  popup  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    function videoId(button) {
        var $videoUrl = button.attr("data-video");
        if ($videoUrl !== undefined) {
            var $videoUrl = $videoUrl.toString();
            var srcVideo;

            if ($videoUrl.indexOf("youtube") !== -1) {
                var et = $videoUrl.lastIndexOf("&");
                if (et !== -1) {
                    $videoUrl = $videoUrl.substring(0, et);
                }
                var embed = $videoUrl.indexOf("embed");
                if (embed !== -1) {
                    $videoUrl =
                        "https://www.youtube.com/watch?v=" +
                        $videoUrl.substring(embed + 6, embed + 17);
                }

                srcVideo =
                    "https://www.youtube.com/embed/" +
                    $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                    "?autoplay=1&mute=1&loop=1&playlist=" +
                    $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                    "";
            } else if ($videoUrl.indexOf("youtu") !== -1) {
                var et = $videoUrl.lastIndexOf("&");
                if (et !== -1) {
                    $videoUrl = $videoUrl.substring(0, et);
                }
                var embed = $videoUrl.indexOf("embed");
                if (embed !== -1) {
                    $videoUrl =
                        "https://youtu.be/" + $videoUrl.substring(embed + 6, embed + 17);
                }

                srcVideo =
                    "https://www.youtube.com/embed/" +
                    $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                    "?autoplay=1&mute=1&loop=1&playlist=" +
                    $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                    "";
            } else if ($videoUrl.indexOf("vimeo") !== -1) {
                srcVideo =
                    "https://player.vimeo.com/video/" +
                    $videoUrl
                    .substring($videoUrl.indexOf(".com") + 5, $videoUrl.length)
                    .replace("/", "") +
                    "?autoplay=1";
            } else if ($videoUrl.indexOf("mp4") !== -1) {
                return (
                    '<video loop playsinline autoplay><source src="' +
                    $videoUrl +
                    '" type="video/mp4"></video>'
                );
            } else if ($videoUrl.indexOf("m4v") !== -1) {
                return (
                    '<video loop playsinline autoplay><source src="' +
                    $videoUrl +
                    '" type="video/mp4"></video>'
                );
            } else {
                alert(
                    "The video assigned is not from Youtube, Vimeo or MP4, remember to enter the correct complete video link .\n - Youtube: https://www.youtube.com/watch?v=43ngkc2Ejgw\n - Vimeo: https://vimeo.com/111939668\n - MP4 https://server.com/file.mp4"
                );
                return false;
            }
            return (
                '<iframe src="' +
                srcVideo +
                '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            );
        } else {
            alert("No video assigned.");
            return false;
        }
    }

    document
        .querySelectorAll(".lets-play")
        .forEach((d) => d.addEventListener("click", playVideos));

    function playVideos(e) {
        e.preventDefault();
        var $theVideo = videoId($(this));

        var appendVideo = document.createElement("div");

        if ($theVideo) {
            appendVideo.innerHTML +=
                '<div class="active video-modal-wrapp" id="video-wrap"><span onclick="lvideoClose();" class="video-overlay"></span><div class="video-container">' +
                $theVideo +
                '</div><button onclick="lvideoClose();" class="close-video">x</button></div>';

            document.body.appendChild(appendVideo);
        }
    }

    const lvideoClose = () => {
        const boxes = document.querySelectorAll(".video-modal-wrapp, .video-overlay");

        boxes.forEach((box) => {
            box.remove();
        });
    };
    </script>




</body>

</html>