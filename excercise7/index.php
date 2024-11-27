<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Website</title>
  <link rel="stylesheet" href="./css/styles.css?1">
  <link rel="stylesheet" href="./css/pages/home.css?7">
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php
$popularNews = array_rand($newsArray, 2);
?>
    <main class="homepage">
        <h1>Popular</h1>
        <div class="content">
          <div class="popular-news-section">
            <?php foreach ($popularNews as $newsKey) { ?>
            <div class="popular-news-container">
              <div class="popular-news">
              <img class="image" src="images/<?php echo $newsArray[$newsKey]['image']; ?>" alt="<?php echo $newsArray[$newsKey]['title']; ?>" />
              <div class="text-container">
              <h3><a href="./pages/single-news.php?id=<?php echo $newsArray[$newsKey]['id']; ?>"><?php echo $newsArray[$newsKey]["title"] ?></a></h3>
              <p><?php echo shortenTheText($newsArray[$newsKey]['description'], 30); ?></p>
              <p class="date"><b>Published: </b><?php echo $newsArray[$newsKey]['publication_date']; ?></p>
              </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="categories">
            <h4>Categories</h4>
            <ul>
            <?php foreach ($categories as $cat) { ?>
            <li><a href="/pages/news-list.php?category=<?php echo $cat; ?>"><?php echo $cat; ?></a></li>
            <?php } ?>
            </ul>
          </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
