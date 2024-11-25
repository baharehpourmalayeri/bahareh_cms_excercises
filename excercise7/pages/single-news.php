<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Website</title>
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/pages/single-news.css">
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
?>
<main>
    <h1><?php echo $news['title']; ?></h1>
    <p><strong>Published on:</strong><?php echo $news['publication_date']; ?> | <strong>Category:</strong><?php echo $news['category']; ?></p>
    <img class="image" src="../images/<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>" />
    <p><?php echo $news['description'] ?></p>
</main>
<?php include '../includes/footer.php'; ?>
</body>
</html>
