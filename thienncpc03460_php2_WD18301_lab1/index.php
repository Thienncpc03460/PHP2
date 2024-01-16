<?php

require_once("config.php");
include("controllers/clients/course-controller.php");
include("controllers/clients/user-controller.php");
//asasasas
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab 1</title>

  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>
  <div class="container">
    <?php include("views/course.php"); ?>
    <?php include("views/user.php"); ?>
    <?php include("views/Tables.php"); ?>

  </div>
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>

</html>