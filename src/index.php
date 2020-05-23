<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlowerAterierYuri</title>
  <!-- <?php $uri = $_SERVER["REQUEST_URI"]; ?> -->
  <link rel="stylesheet" href="css/kessai.css?<?= strtotime('now') ?>">
  <link rel="stylesheet" href="css/kyoutu.css?<?= strtotime('now') ?>">
  <!-- <link rel="stylesheet" href="css/mail_magazine.css?<?= strtotime('now') ?>"> -->
  <!-- <link rel="stylesheet" href="css/my_account.css?<?= strtotime('now') ?>"> -->
  <!-- <link rel="stylesheet" href="css/option.css?<?= strtotime('now') ?>"> -->
  <!-- <link rel="stylesheet" href="css/otoiawase.css?<?= strtotime('now') ?>"> -->
  <link rel="stylesheet" href="css/syouhin_ichiran.css?<?= strtotime('now') ?>">
  <link rel="stylesheet" href="css/syouhin_syousai.css?<?= strtotime('now') ?>">
  <link rel="stylesheet" href="css/tokutei_syou_torihiki.css?<?= strtotime('now') ?>">
  <!-- <link rel="stylesheet" href="css/tomodachi.css?<?= strtotime('now') ?>"> -->
  <!-- <link rel="stylesheet" href="css/top.css?<?= strtotime('now') ?>"> -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <!-- <?php echo $uri; ?> -->
  <?= include('html/'.$uri.".html") ?>
</body>
</html>
