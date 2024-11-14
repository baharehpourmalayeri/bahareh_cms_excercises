<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $greetings = array(
        "morning" => "Good morning",
        "afternoon" => "Good afternoon",
        "evening" => "Good evening",
        "night" => "Good night"
    );

    $styles = array(
        "morning" => array("background" => "#DFEEFC", "color" => "1C202E"),
        "afternoon" => array("background" => "#FFF8CF", "color" => "#1C202E"),
        "evening" => array("background" => "#F7CE9D", "color" => "#1C202E"),
        "night" => array("background" => "#607387", "color" => "#ECF0F1")
    );

    $currentHour = date("H");

    if ($currentHour >= 6 && $currentHour < 12){
      $greeting = $greetings["morning"];
      $bgColor = $styles["morning"]["background"];
      $fontColor = $styles["morning"]["color"];
    }elseif ($currentHour >= 12 && $currentHour < 18){
      $greeting = $greetings["afternoon"];
      $bgColor = $styles["afternoon"]["background"];
      $fontColor = $styles["afternoon"]["color"];
    }elseif ($currentHour >= 18 && $currentHour < 21){
      $greeting = $greetings["evening"];
      $bgColor = $styles["evening"]["background"];
      $fontColor = $styles["evening"]["color"];
    }else {
      $greeting = $greetings["night"];
      $bgColor = $styles["night"]["background"];
      $fontColor = $styles["night"]["color"];
    }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First PHP Website</title>
  <link rel="stylesheet" href="style.css?<?php echo rand(); ?>">
  <style>
    .homepage {
      background-color: <?php echo $bgColor ?>;
      color: <?php echo $fontColor ?>;
    }
  </style>
</head>
<body class="homepage">
    <?php include 'header.php'; ?>

    <main class="content">
      <h1><?php echo $greeting ?></h1>
      <h3>Welcome to my homepage!</h3>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
