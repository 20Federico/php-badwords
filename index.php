<?php
  $string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis non nobis quidem minima vel vero nulla eum, at praesentium error sunt architecto sequi aliquid ipsum in earum totam ad eligendi.';
  $badWord = $_GET['badword'];
  $censuredString = str_replace(strtolower($badWord), '***', strtolower($string));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <body>
    <p><?php echo $string ?></p>
    <p>Lunghezza della stringa: <?php echo strlen($string) ?> caratteri</p>
    <p>Parola da censurare: <?php echo $badWord ?></p>
    <p>Stringa censurata: <?php echo $censuredString ?></p>
    <p>Lunghezza della stringa censurata: <?php echo strlen($censuredString) ?></p>
  </body>
</body>
</html>