<!--  Developed by adox solutions {info@adoxsolutions.com} -->
<?php
require '../graphql.php';

$query = '
query GetNews($size: Int, $page: Int, $search: String, $status: String, $type: String) {
  getNews(size: $size, page: $page, search: $search, status: $status, type: $type) {
    totalPages
    currentPage
    totalData
    data {
      id
      title
      title_ar
      slug
      banner_image
      thumbnail_image
      short_description
      short_description_ar
      published_date
      created_at
    }
  }
}';

$response = graphqlRequest($query);
$newsList = $response['data']['getNews'] ?? [];
?>
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
<link rel="stylesheet" href="css/news.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!--Font-->
<link
    href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap"
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
                        <h3> الأخبار و الإعلام </h3>
                    </div>
                    <img class="lap" src="images/news-ban.jpg">
                    <img class="mob" src="images/news-ban-mob.jpg">
                </div>
            </div>
        </div>
    </section>



    <!--  news -->
    <section class="news">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 text-right">
                    <h3> الأخبار و <span> الإعلام </span></h3>
                    <p> كمنظمة ، نحن ملتزمون بتطوير جميع موظفينا من خلال التدريب والتطوير بالإضافة إلى برامج مساعدة
                        الموظفين المصممة خصيصًا لتلبية الاحتياجات الفردية وتركز على تحقيق الأهداف المشتركة </p>
                </div>
            </div>

            <div class="row">

                <?php if (!empty($newsList['data'])): ?>
                    <?php foreach ($newsList['data'] as $news): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="bx text-right">
                                <a href="news-detail.php?slug=<?php echo htmlspecialchars($news['slug']); ?>" class="grid__image">
                                    <?php 
                                        $imgSrc = 'images/nws-fr-1.jpg'; // Default placeholder
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
                                    <img src="<?php echo htmlspecialchars($imgSrc); ?>" onerror="this.onerror=null;this.src='images/nws-fr-1.jpg';" alt="<?php echo htmlspecialchars($title); ?>">
                                    <div class="post-date"><?php echo $displayDate; ?></div>
                                    <div class="hov">
                                        <p> عرض المزيد </p>
                                    </div>
                                </a>
                                <div class="tx">
                                    <h4><a href="news-detail.php?slug=<?php echo htmlspecialchars($news['slug']); ?>" style="color: #1c1d1d; text-decoration: none;"><?php echo htmlspecialchars($title); ?></a></h4>
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

            </div>


        </div>
    </section>




    <!--  careers  -->


    <!--  header  -->
    <?php $page = 'home';
    include 'footer.php'; ?>






</body>

</html>