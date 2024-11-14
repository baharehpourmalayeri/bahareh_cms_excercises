<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css?<?php echo rand(); ?>">
</head>
<body class="table">
<?php include 'header.php'; ?>

<main class="table-content">
  <h1>Multiplication table</h1>

  <?php
    $baseNumber = 8;

    for($i = 1; $i<= 10; $i++){
      $result = $baseNumber * $i;
      echo "<p>$baseNumber * $i = $result</p>";
    }
  ?>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
