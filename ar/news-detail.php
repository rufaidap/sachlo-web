<?php
require '../graphql.php';

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

$path = $imgSrc;
if (!filter_var($path, FILTER_VALIDATE_URL) && strpos($path, '/') !== 0 && strpos($path, '../') !== 0) {
    if (strpos($path, 'images/') === 0) {
        $imgSrc = $path; // Keep local fallback images relative
    } else {
        $imgSrc = '../' . $path;
    }
}

$dateVal = !empty($news['published_date']) ? $news['published_date'] : $news['created_at'];
if (is_numeric($dateVal) && strlen((string)$dateVal) > 10) {
    $dateVal = $dateVal / 1000;
}
$displayDate = date('M d, Y', (int)$dateVal);

$title = !empty($news['title_ar']) ? $news['title_ar'] : $news['title'];
$desc = !empty($news['short_description_ar']) ? $news['short_description_ar'] : $news['short_description'];
$content = !empty($news['full_content_ar']) ? $news['full_content_ar'] : $news['full_content'];
$type = !empty($news['type_ar']) ? $news['type_ar'] : $news['type'];
// Handle tags array if localized tags exist
$tags = (!empty($news['tags_ar']) && is_array($news['tags_ar'])) ? $news['tags_ar'] : $news['tags'];
?>

<!--  Developed by adox solutions {info@adoxsolutions.com} -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title><?php echo htmlspecialchars($title); ?> - شركات تصنيع المواد الكيميائية الرائدة في المملكة العربية السعودية</title>

    <meta name="description" content="<?php echo htmlspecialchars($desc); ?>">
    <meta charset="utf-8">
    <meta name="keywords" content="ساكلو, تصنيع المواد الكيميائية, المملكة العربية السعودية, سلامة مكان العمل, الصودا الكاوية, الكلور, حمض الهيدروكلوريك">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($desc); ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://sachlo.com/ar/news-detail.php?slug=<?php echo htmlspecialchars($slug); ?>">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adox-layout.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/news-detail.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Arabic Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body, h1, h2, h3, h4, h5, h6, p, a, span, div {
            font-family: 'Noto Kufi Arabic', sans-serif !important;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            float: right;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .article-content {
            text-align: right;
        }
        .article-meta span {
            margin-left: 20px;
            margin-right: 0;
        }
        .bx.text-right {
            text-align: right !important;
        }
    </style>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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

    <!--  news detail -->
    <section class="news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb" style="direction: rtl;">
                            <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="news.php">الأخبار و وسائل الإعلام</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($type); ?></li>
                        </ol>
                    </nav>

                    <!-- Article Header -->
                    <div class="article-header text-right">
                        <div class="article-meta">
                            <span class="article-date"><?php echo $displayDate; ?></span>
                            <span class="article-category"><?php echo htmlspecialchars($type); ?></span>
                            <span class="article-location">الرياض، المملكة العربية السعودية</span>
                        </div>
                        <h1 class="article-title"><?php echo htmlspecialchars($title); ?></h1>
                        <div class="article-subtitle">
                            <p><?php echo htmlspecialchars($desc); ?></p>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="article-featured-image">
                        <img src="<?php echo htmlspecialchars($imgSrc); ?>" onerror="this.onerror=null;this.src='images/nws-fr-1.jpg';" alt="<?php echo htmlspecialchars($title); ?>" class="img-fluid">
                    </div>

                    <!-- Article Content -->
                    <div class="article-content text-right">
                        <p class="lead"> <?php echo $content; ?></p>
                    </div>

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
                    <div class="article-footer text-right">
                        <div class="article-tags">
                            <span class="tag-label">الوسوم:</span>
                            <?php 
                            if (!empty($tags) && is_array($tags)) {
                                foreach ($tags as $tag) {
                                    echo '<a href="#" class="tag">' . htmlspecialchars($tag) . '</a>';
                                }
                            }
                            ?>
                        </div>

                        <div class="article-share">
                            <span class="share-label">مشاركة:</span>
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
                    <div class="related-articles text-right">
                        <h3>مقالات ذات صلة</h3>
                        <div class="row">
                            <?php if (!empty($relatedNewsList)): ?>
                                <?php foreach ($relatedNewsList as $related): ?>
                                    <?php 
                                        // Handle related news images
                                        $relPath = !empty($related['thumbnail_image']) ? $related['thumbnail_image'] : 'images/nws-fr-1.jpg';
                                        if (!filter_var($relPath, FILTER_VALIDATE_URL) && strpos($relPath, '/') !== 0 && strpos($relPath, '../') !== 0) {
                                            if (strpos($relPath, 'images/') === 0) {
                                                $relImg = $relPath; 
                                            } else {
                                                $relImg = '../' . $relPath;
                                            }
                                        } else {
                                            $relImg = $relPath;
                                        }

                                        $relDate = !empty($related['published_date']) ? $related['published_date'] : $related['created_at'];
                                        if (is_numeric($relDate) && strlen((string)$relDate) > 10) {
                                            $relDate = $relDate / 1000;
                                        }
                                        $relDisplayDate = date('M d, Y', (int)$relDate);
                                        // If backend doesn't return localized fields in Related list (often minimal fields), fallback to English or fetch them if available.
                                        // For now, assume title is available. Use translated title if available in query, else standard title.
                                        $relTitle = !empty($related['title_ar']) ? $related['title_ar'] : $related['title'];
                                    ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="related-article">
                                            <img src="<?php echo htmlspecialchars($relImg); ?>" onerror="this.onerror=null;this.src='images/nws-fr-1.jpg';" alt="<?php echo htmlspecialchars($relTitle); ?>">
                                            <div class="related-content">
                                                <h4><a href="news-detail.php?slug=<?php echo htmlspecialchars($related['slug']); ?>"><?php echo htmlspecialchars($relTitle); ?></a></h4>
                                                <span class="date"><?php echo $relDisplayDate; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-12"><p>لا توجد مقالات ذات صلة.</p></div>
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