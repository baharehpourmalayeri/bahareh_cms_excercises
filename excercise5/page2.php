<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $baseNumber = '';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $baseNumber = $_POST['number'];
    }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page 2</title>
  <link rel="stylesheet" href="style.css?<?php echo rand(); ?>">
</head>
<body class="table">
<?php include 'header.php'; ?>

<main class="table-content">

  <form class="form" method="POST" action="">
    <label for="number">Enter a number between 1-9: </label>
    <input type="number" id="number" name="number" min="1" max="9" required>
    <button type="submit">Generate Table</button>
  </form>

  <?php
  if($baseNumber >=1 && $baseNumber <= 9){
    echo "<h2>Multiplication table for number $baseNumber</h2>";
    echo "<ul>";
    for ($i = 1; $i <=10; $i++){
      $result = $baseNumber * $i;
      echo "<li>$baseNumber x $i = $result</li>";
    }
    echo "</ul>";
  }
  ?>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
