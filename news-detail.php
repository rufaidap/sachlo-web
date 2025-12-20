<?php
require 'graphql.php';

$slug = $_GET['slug'] ?? '';

if (empty($slug)) {
    header("Location: news.php");
    exit;
}

$query = '
query GetNewsBySlug($slug: String!) {
  getNewsBySlug(slug: $slug) {
    id
    title
    title_ar
    slug
    banner_image
    thumbnail_image
    short_description
    short_description_ar
    full_content
    full_content_ar
    type
    type_ar
    location
    published_date
    status
    views
    deleted
    created_at
    updated_at
    tags
    tags_ar
  }
}';

$variables = ['slug' => $slug];
$response = graphqlRequest($query, $variables);
$news = $response['data']['getNewsBySlug'] ?? null;

if (!$news) {
    // Optionally handle case where news exists but slug is wrong, or simply 404
    header("Location: news.php");
    exit;
}

$relatedQuery = '
query GetRelatedNews($getRelatedNewsId: ID!, $size: Int, $page: Int, $search: String, $status: String, $type: String) {
  getRelatedNews(id: $getRelatedNewsId, size: $size, page: $page, search: $search, status: $status, type: $type) {
    data {
      id
      title
      slug
      thumbnail_image
      published_date
      created_at
    }
  }
}';

$relatedVariables = ['getRelatedNewsId' => $news['id'], 'size' => 3];
$relatedResponse = graphqlRequest($relatedQuery, $relatedVariables);
$relatedNewsList = $relatedResponse['data']['getRelatedNews']['data'] ?? [];

$imgSrc = !empty($news['banner_image']) ? $news['banner_image'] : (!empty($news['thumbnail_image']) ? $news['thumbnail_image'] : 'images/nws-fr-1.jpg');

$dateVal = !empty($news['published_date']) ? $news['published_date'] : $news['created_at'];
if (is_numeric($dateVal) && strlen((string)$dateVal) > 10) {
    $dateVal = $dateVal / 1000;
}
$displayDate = date('M d, Y', (int)$dateVal);

 
?>

<!--  Developed by adox solutions {info@adoxsolutions.com} -->
<!DOCTYPE html>
<html>

<head>
    <title>Sachlo Achieves 8 Million Safe Man Hours - Leading Chemical Manufacturing Companies in Saudi Arabia</title>

    <meta name="description" content="Sachlo, a leading chemical manufacturer in Saudi Arabia, proudly announces achieving 5 million safe man hours, demonstrating our commitment to workplace safety and operational excellence.">
    <meta charset="utf-8">
    <meta name="keywords" content="Sachlo, chemical manufacturing, Saudi Arabia, workplace safety, caustic soda, chlorine, hydrochloric acid">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Sachlo Achieves 8 Million Safe Man Hours">
    <meta property="og:description" content="Sachlo, a leading chemical manufacturer in Saudi Arabia, proudly announces achieving 5 million safe man hours.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://sachlo.com/news-detail.php">
    <meta property="article:published_time" content="2021-12-30T00:00:00+03:00">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adox-layout.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/news-detail.css">

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

    <!--  news detail -->
    <section class="news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="news.php">News & Media</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $news['type']; ?></li>
                        </ol>
                    </nav>

                    <!-- Article Header -->
                    <div class="article-header">
                        <div class="article-meta">
                            <span class="article-date"><?php echo $displayDate; ?></span>
                            <span class="article-category"><?php echo $news['type']; ?></span>
                            <span class="article-location"><?php echo $news['location']; ?></span>
                        </div>
                        <h1 class="article-title"><?php echo $news['title']; ?></h1>
                        <div class="article-subtitle">
                            <p><?php echo $news['short_description']; ?></p>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="article-featured-image">
                        <img src=<?php echo $imgSrc; ?> alt="Sachlo Safety Achievement" class="img-fluid">
                    </div>

                    <!-- Article Content -->
                    <div class="article-content">
                        <p class="lead"> <?php echo $news['full_content']; ?></p>

                        <!-- <p>This significant achievement reflects the dedication of our entire workforce to maintaining the highest safety standards across all our operations. The milestone was reached through continuous improvement in our safety protocols, comprehensive training programs, and a culture that prioritizes the well-being of our employees above all else.</p>

                        <h2>Commitment to Safety Excellence</h2>
                        <p>At Sachlo, safety is not just a priority—it's a core value that guides every decision we make. Our comprehensive safety management system includes:</p>
                        <ul>
                            <li>Regular safety audits and inspections</li>
                            <li>Comprehensive employee training programs</li>
                            <li>Advanced safety equipment and technology</li>
                            <li>Continuous improvement initiatives</li>
                            <li>Employee engagement in safety programs</li>
                        </ul>

                        <h2>Industry Leadership</h2>
                        <p>As one of the leading manufacturers of caustic soda, liquefied chlorine, hydrochloric acid, caustic soda flakes, caustic soda lye, and sodium hypochlorite in Saudi Arabia and the MENA region, we understand the critical importance of maintaining the highest safety standards in chemical manufacturing.</p>

                        <p>This achievement positions Sachlo as a benchmark for safety excellence in the chemical industry, setting new standards for operational safety and employee protection.</p>

                        <h2>Future Commitment</h2>
                        <p>While we celebrate this milestone, we remain committed to continuous improvement in all aspects of our safety program. Our goal is to maintain and exceed these standards as we continue to grow and expand our operations.</p>

                        <p>We extend our gratitude to all employees, contractors, and stakeholders who have contributed to this remarkable achievement through their daily commitment to safety excellence.</p> -->
                    </div>

                    <!-- Article Footer -->
                    <div class="article-footer">
                        <div class="article-tags">
                            <span class="tag-label">Tags:</span>
                            <?php 
                            if (!empty($news['tags']) && is_array($news['tags'])) {
                                foreach ($news['tags'] as $tag) {
                                    echo '<a href="#" class="tag">' . htmlspecialchars($tag) . '</a>';
                                }
                            }
                            ?>
                        </div>

                        <div class="article-share">
                            <span class="share-label">Share:</span>
                            <a href="#" class="share-link" title="Share on LinkedIn">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="share-link" title="Share on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="share-link" title="Share on Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Related Articles -->
                    <div class="related-articles">
                        <h3>Related Articles</h3>
                        <div class="row">
                            <?php if (!empty($relatedNewsList)): ?>
                                <?php foreach ($relatedNewsList as $related): ?>
                                    <?php 
                                        $relImg = !empty($related['thumbnail_image']) ? $related['thumbnail_image'] : 'images/nws-fr-1.jpg';
                                        $relDate = !empty($related['published_date']) ? $related['published_date'] : $related['created_at'];
                                        if (is_numeric($relDate) && strlen((string)$relDate) > 10) {
                                            $relDate = $relDate / 1000;
                                        }
                                        $relDisplayDate = date('M d, Y', (int)$relDate);
                                    ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="related-article">
                                            <img src="<?php echo htmlspecialchars($relImg); ?>" alt="<?php echo htmlspecialchars($related['title']); ?>">
                                            <div class="related-content">
                                                <h4><a href="news-detail.php?slug=<?php echo htmlspecialchars($related['slug']); ?>"><?php echo htmlspecialchars($related['title']); ?></a></h4>
                                                <span class="date"><?php echo $relDisplayDate; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-12"><p>No related articles found.</p></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  footer  -->
    <?php $page = 'home';
    include 'footer.php'; ?>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</body>

</html>