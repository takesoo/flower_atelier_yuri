<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlowerAterierYuri</title>
  <?php $uri = $_SERVER["REQUEST_URI"]; ?>
  <link rel="stylesheet" href="css/<?php echo $uri; ?>.css">
</head>
<body>
  <!-- <?php echo $uri; ?> -->
  <?= include('html/'.$uri.".html") ?>
</body>
</html>
