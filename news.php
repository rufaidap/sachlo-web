<?php
require 'graphql.php';

$query = '
query GetNews($size: Int, $page: Int, $search: String, $status: String) {
  getNews(size: $size, page: $page, search: $search, status: $status) {
    totalPages
    currentPage
    totalData
    data {
      id
      title
      slug
      banner_image
      thumbnail_image
      short_description
      full_content
      type
      location
      published_date
      status
      views
      deleted
      created_at
      updated_at
      content_blocks {
        id
        news_id
        block_type
        content
        sort_order
      }
      tags
    }
  }
}';

$response = graphqlRequest($query);

// print_r($query);
// exit;

$newsList = $response['data']['newsList'] ?? [];
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
<link rel="stylesheet" href="css/news.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!--Font-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


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
                        <h3>NEWS AND MEDIA</h3>
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

                <div class="col-lg-4 col-md-6">
                    <div class="bx">
                        <a href="#" class="grid__image">
                            <img src="images/nws-fr-1.jpg">
                            <div class="post-date">Dec 01, 2021</div>
                            <div class="hov">
                                <p>View More</p>
                            </div>
                        </a>
                        <div class="tx">
                            <h4><a href="#">New Website for Sachlo Saudi Arabia Launched</a></h4>
                            <p>We are pleased to announce the launching of new website of SACHLO...</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-post-center">
                    <div class="bx">
                        <a href="news-detail.php" class="grid__image">
                            <img src="images/nws-fr-2.jpg">
                            <div class="post-date">Nov 10, 2025</div>
                            <div class="hov">
                                <p>View More</p>
                            </div>
                        </a>
                        <div class="tx">
                            <h4><a href="news-detail.php">Achieved 8 Million Safe Man Hours</a></h4>
                            <p>We are pleased to announce that SACHLO has achieved a Company safety...</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bx">
                        <a href="#" class="grid__image">
                            <img src="images/nws-fr-1.jpg">
                            <div class="post-date">Dec 01, 2021</div>
                            <div class="hov">
                                <p>View More</p>
                            </div>
                        </a>
                        <div class="tx">
                            <h4><a href="#">New Website for Sachlo Saudi Arabia Launched</a></h4>
                            <p>We are pleased to announce the launching of new website of SACHLO...</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <!--  careers  -->


    <!--  header  -->
    <?php $page = 'home';
    include 'footer.php'; ?>






</body>

</html>