<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $selectedDate = '';
    if($_SERVER["REQUEST_METHOD"] === "POST") {
      $selectedDate = $_POST["date"];
    }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page 1</title>
  <link rel="stylesheet" href="style.css?<?php echo rand(); ?>">
</head>
<body class="date">
<?php include 'header.php'; ?>

<main class="content">

  <h1>Date Information</h1>

  <form class="form" method="POST" action="">
    <label for="date">Select a date below: </label>
    <input type="date" id="date" name="date" required>
    <button type="submit">Submit</button>
  </form>

<?php
$timestamp = strtotime($selectedDate);
$day = date("j", $timestamp);
$month = date("F", $timestamp);

if($day % 2 == 0){
  $evenOddMessage = "$month $day is an <b>even</b> date.";
}else{
  $evenOddMessage = "$month $day is an <b>odd</b> date.";
}

echo "<p>Your selected date is $selectedDate.</p>";
echo "<p>$evenOddMessage</p>";
?>
</main>

<?php include 'footer.php'; ?>


</body>
</html>
