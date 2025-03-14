<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Website</title>
  <link rel="stylesheet" href="../css/styles.css?2">
  <link rel="stylesheet" href="../css/pages/single-news.css?5">
</head>
<body>
<?php include '../includes/header.php'; ?>
<?php
$id = $_GET['id'];
$news = null;
foreach ($newsArray as $newsItem) {
    if ($newsItem['id'] == $id) {
        $news = $newsItem;
        break;
    }
}
if (!isset($news)) {
    header("Location: /pages/404.php");
exit;
}
?>
<main class="single-news-page">
    <h1><?php echo $news['title']; ?></h1>
    <p><strong>Published on:</strong><?php echo $news['publication_date']; ?> | <strong>Category:</strong><?php echo $news['category']; ?> | <strong>Author:</strong><?php echo $news['author']; ?></p>
    <img class="image" src="../images/<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>" />
    <p class="article"><?php echo $news['description'] ?></p>
</main>
<?php include '../includes/footer.php'; ?>
</body>
</html>
