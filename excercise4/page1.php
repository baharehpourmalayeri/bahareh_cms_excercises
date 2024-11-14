<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page 1</title>
  <link rel="stylesheet" href="style.css?<?php echo rand(); ?>">
</head>
<body class="date">
<?php include 'header.php'; ?>

<main class="content">

<h1>Today's Date Information</h1>

<?php
$dayOfWeek = date("l");
$date = date("F j");

$dayNumber = date("j");
if($dayNumber % 2 == 0){
  $evenOddMessage = "Today, $date, is an <b>even</b> date.";
}else{
  $evenOddMessage = "Today, $date, is an <b>odd</b> date.";
}

echo "<p>Today is $dayOfWeek, $date.</p>";
echo "<p>$evenOddMessage</p>";
?>
</main>

<?php include 'footer.php'; ?>


</body>
</html>
