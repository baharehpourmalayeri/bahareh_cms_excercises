<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page 3</title>
  <link rel="stylesheet" href="style.css?<?php echo rand(); ?>">
</head>
<body class="calculator">
<?php include 'header.php'; ?>

<main>
    <h1>Electricity Price Calculator</h1>
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    $consumption = filter_input(INPUT_POST, 'consumption', FILTER_VALIDATE_FLOAT);

    if ($price && $consumption && $price > 0 && $consumption > 0) {

        $totalCost = $price * $consumption;
        $horseHours = ($consumption * 1000) / 746;

        echo "<p>The calculated electricity price is <strong>" . round($totalCost) . " kronor</strong>.</p>";
        echo "<p>This is equivalent to <strong>" . round($horseHours, 2) . " horse-hours</strong>.</p>";
    } else {

        echo "<p style='color: red;'>Please enter valid numeric values greater than zero for both fields.</p>";
    }
}
?>
    <form class="calc" action="" method="POST">
        <label for="price">Electricity Price (kr/kWh):</label>
        <input type="text" id="price" name="price" placeholder="Enter price per kWh" required>

        <label for="consumption">Consumption (kWh):</label>
        <input type="text" id="consumption" name="consumption" placeholder="Enter consumption in kWh" required>

        <button type="submit">Calculate</button>
    </form>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
