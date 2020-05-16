<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlowerAterierYuri</title>
  <!-- <?php $uri = $_SERVER["REQUEST_URI"]; ?> -->
  <link rel="stylesheet" href="css/<?php echo $uri; ?>.css">
  <link rel="stylesheet" href="css/kessai.css">
  <link rel="stylesheet" href="css/kyoutu.css">
  <link rel="stylesheet" href="css/mail_magazine.css">
  <link rel="stylesheet" href="css/my_account.css">
  <link rel="stylesheet" href="css/option.css">
  <link rel="stylesheet" href="css/otoiawase.css">
  <link rel="stylesheet" href="css/syouhin_ichiran.css">
  <link rel="stylesheet" href="css/syouhin_syousai.css">
  <link rel="stylesheet" href="css/tokutei_syou_torihiki.css">
  <link rel="stylesheet" href="css/tomodachi.css">
  <link rel="stylesheet" href="top.css">
</head>
<body>
  <!-- <?php echo $uri; ?> -->
  <?= include('html/'.$uri.".html") ?>
</body>
</html>
