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
$newsArray = [
  [
      'title' => 'Breaking News: The Latest Global Climate Summit Results',
      'description' => 'World leaders have come together to discuss solutions to the ongoing climate crisis, with new policies aimed at reducing carbon emissions.',
      'image' => 'climate-summit.jpg',
      'author' => 'Emily Wilson',
      'publication_date' => '2024-11-25',
      'id' => 1,
      'category' => 'Environment'
  ],
  [
      'title' => 'New Dietary Guidelines for Healthy Living',
      'description' => 'Nutrition experts have released new guidelines to promote healthier eating habits, focusing on plant-based diets and reduced sugar intake.',
      'image' => 'healthy-eating.jpg',
      'author' => 'Mark Adams',
      'publication_date' => '2024-11-24',
      'id' => 2,
      'category' => 'Health'
  ],
  [
      'title' => 'Top 10 Vacation Destinations for 2025',
      'description' => 'From hidden gems to popular tourist spots, discover the best places to visit in 2025 for your next holiday.',
      'image' => 'vacation-destinations.jpg',
      'author' => 'Rachel Lee',
      'publication_date' => '2024-11-23',
      'id' => 3,
      'category' => 'Travel'
  ],
  [
      'title' => 'The Future of Sustainable Fashion',
      'description' => 'Sustainable fashion brands are gaining popularity as consumers demand eco-friendly and ethically produced clothing.',
      'image' => 'sustainable-fashion.jpg',
      'author' => 'Laura Green',
      'publication_date' => '2024-11-22',
      'id' => 4,
      'category' => 'Fashion'
  ],
  [
      'title' => 'The Rise of E-Sports and Online Gaming Communities',
      'description' => 'E-sports are becoming a major form of entertainment, with millions of people watching competitive gaming events globally.',
      'image' => 'esports.jpg',
      'author' => 'James Brown',
      'publication_date' => '2024-11-21',
      'id' => 5,
      'category' => 'Entertainment'
  ],
  [
      'title' => 'New Innovations in Agriculture: Vertical Farming',
      'description' => 'Vertical farming techniques are revolutionizing food production by using less space and water while producing high-quality crops.',
      'image' => 'vertical-farming.jpg',
      'author' => 'Susan White',
      'publication_date' => '2024-11-20',
      'id' => 6,
      'category' => 'Agriculture'
  ],
  [
      'title' => 'How the Global Economy is Recovering Post-Pandemic',
      'description' => 'Economic experts are analyzing how countries are recovering from the global pandemic, with an emphasis on job growth and new financial policies.',
      'image' => 'global-economy.jpg',
      'author' => 'David Harris',
      'publication_date' => '2024-11-19',
      'id' => 7,
      'category' => 'Economy'
  ]
];
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
